<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('PatientDb');
        $this->load->model('AdminDb');
    }

    public function index() {
        $this->load->view('users/home');
    }

    public function registration() {
        $this->load->view('users/register');
    }

    public function patient_dashboard() {
        $this->load->view('users/dashboard');
    }

    public function patient_login() {
        $this->load->view('users/patient_login');
    }
    
    public function report_problem() {
        $this->load->view('users/report_problem');
    }

    public function dashboard() {
        if ($this->session->userdata('user_id') == '') {
            redirect('Users/patient_login');
        }
        $get_email = $this->session->userdata('email');
        $data['patient_record'] = $this->PatientDb->fetch_patient_details($get_email);
        $this->load->view('Users/dashboard', $data);
    }

    public function accounts() {
        if ($this->session->userdata('user_id') == '') {
            redirect('Users/patient_login');
        }
        $get_session_email = $this->session->userdata('email');
        $data['records'] = $this->PatientDb->fetch_patient_recs($get_session_email);
        $this->load->view('users/accounts', $data);
    }
    
    public function doctor_prescription() {
        if ($this->session->userdata('user_id') == '') {
            redirect('Users/patient_login');
        }
        $get_user_id = $this->session->userdata('user_id');
        $data['medrecords'] = $this->PatientDb->fetch_medical_recs($get_user_id);
        $this->load->view('users/doctor_prescription', $data);
    }

    public function insert_patient() {
        try {
            $f_name = $this->input->post('f_name');
            $l_name = $this->input->post('l_name');
            $cont = $this->input->post('contact');
            $appnt_date = $this->input->post('appt_date');
            $dob = $this->input->post('dob');
            $age = $this->input->post('age');
            $height = $this->input->post('height');
            $weight = $this->input->post('weight');
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');
            $txtArea = $this->input->post('txtArea');


            $date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
            $time_stamp = $date->format('YmdHis');

            if (!empty($_FILES['rpt_pic1']['name'])) {

                $config['upload_path'] = 'application/views/users/asset/uploaded_flies';
                $config['allowed_types'] = '*';
                $config['max_size'] = 0;
                $file_ext = pathinfo($_FILES['rpt_pic1']['name'], PATHINFO_EXTENSION);
                if ($file_ext == "pdf") {
                    $config['upload_path'] = $config['upload_path'] . "/pdf/";
                }
                if ($file_ext == 'jpg' || $file_ext == 'png' || $file_ext == 'jpeg' || $file_ext == 'gif') {
                    $config['upload_path'] = $config['upload_path'] . "/images/";
                }
                if ($file_ext == "zip") {
                    $config['upload_path'] = $config['upload_path'] . "/zips/";
                }

                $config['file_name'] = $f_name . '_' . $time_stamp;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('rpt_pic1')) {
                    $uploadData = $this->upload->data();
//                    echo '<pre>';
//                    print_r($uploadData);
                    $file_name = $f_name . '_' . $time_stamp . '.' . $file_ext;
                }
                $file_name = str_replace(' ', '_', $file_name);
            }

            if (!empty($_FILES['rpt_pic2']['name'])) {
                $config['upload_path'] = 'application/views/users/asset/uploaded_flies';
                $config['allowed_types'] = '*';
                $config['max_size'] = 0;
                $file_ext2 = pathinfo($_FILES['rpt_pic2']['name'], PATHINFO_EXTENSION);
                if ($file_ext2 == "pdf") {
                    $config['upload_path'] = $config['upload_path'] . "/pdf/";
                }
                if ($file_ext2 == 'jpg' || $file_ext2 == 'png' || $file_ext2 == 'jpeg' || $file_ext2 == 'gif') {
                    $config['upload_path'] = $config['upload_path'] . "/images/";
                }
                if ($file_ext2 == "zip") {
                    $config['upload_path'] = $config['upload_path'] . "/zips/";
                }

                $config['file_name'] = $f_name . '_' . $time_stamp;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('rpt_pic2')) {
                    $uploadData2 = $this->upload->data();
//                    echo '<pre>';
//                    print_r($uploadData2);
                    $file_name2 = $f_name . '_' . $time_stamp . '.' . $file_ext2;
                }
                $file_name2 = str_replace(' ', '_', $file_name2);
            }

            $data = array(
                'register_datetime' => $time_stamp,
                'firstname' => $f_name,
                'lastname' => $l_name,
                'contact' => $cont,
                'apndate' => $appnt_date,
                'dob' => $dob,
                'age' => $age,
                'height' => $height,
                'weight' => $weight,
                'email' => $email,
                'password' => $pass,
                'medcondition' => $txtArea,
                'reportfile_one' => $file_name,
                'reportfile_two' => $file_name2,
                'status' => 0
            );

            $res = $this->PatientDb->form_insert($data);
            if ($res == true) {
                redirect('Users/patient_login');
            } else {
//                $this->session->set_flashdata('msg_error', 'false');
                redirect('Users/registration');
            }
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }

    /* patient login  */

    public function login() {
        $email = $this->input->post('email');
        $password = $this->input->post('pass');
        $patient_id = '';
        $patient_email = '';
        $patient_pass = '';
        $patient_details = $this->PatientDb->fetch_patient_details($email);
        foreach ($patient_details as $row) {
            $patient_email = trim($row->email);
            $patient_pass = trim($row->password);
            $patient_id = ($row->id);
        }

        if ($email == $patient_email && $password == $patient_pass) {
            $this->session->set_userdata(
                    array(
                        'user_id' => $patient_id,
                        'email' => $email,
                    )
            );
            redirect('Users/dashboard');
        } else {
            redirect('Users/home');
        }
    }

    public function view_patient_record($id) {
        try {
            $data['patient_record'] = $this->PatientDb->view_patient_recs($id);
            $this->load->view('Users/dashboard', $data);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }

    function logout() {
        try {
            $this->session->unset_userdata('user_id');
            $this->load->view('Users/patient_login');
        } catch (Exception $e) {
            log_message('Error ', $e->getMessage());
            return;
        }
    }

}
