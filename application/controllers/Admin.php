<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('AdminDb');
        $this->load->model('PatientDb');
    }

    public function index() {
        $this->load->view('admin/login');
    }

    public function records() {
        $this->load->view('admin/records');
    }

    public function dashboard() {
        if ($this->session->userdata('dr_id') == '') {
            redirect('admin/login');
        }
        $data['patient_record'] = $this->PatientDb->view_patient_recs();
        $this->load->view('admin/dashboard', $data);
    }
    
    public function view_patient($id) {
        $data['pat_data']= $this->AdminDb->fetch_pat_recs($id);
        $this->load->view('admin/view_patient', $data);
    }

    public function login() {
        $email = $this->input->post('email');
        $password = $this->input->post('pass');
        $dr_id = '';
        $dr_email = '';
        $dr_pass = '';
        $doctor_details = $this->AdminDb->fetch_admin_details($email);
        foreach ($doctor_details as $row) {
            $dr_email = trim($row->dremail);
            $dr_pass = trim($row->drpass);
            $dr_id = ($row->id);
        }

        if ($email == $dr_email && $password == $dr_pass) {
            $this->session->set_userdata(
                    array(
                        'dr_id' => $dr_id,
                        'dr_email' => $email,
                    )
            );
            redirect('admin/dashboard');
        } else {
            redirect('admin/login');
        }
    }

    public function confirm_appoint() {
        try {
            $pat_id = $this->input->post('confirm_status');
            $data = array(
                'status' => 1,
            );
            $this->AdminDb->update_status($pat_id, $data);
            redirect('admin/dashboard');
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }  
    
    public function prescription() {
        try {
            $med1 = $this->input->post('med1');
            $med2 = $this->input->post('med2');
            $med3 = $this->input->post('med3');
            $med4 = $this->input->post('med4');
            $med5 = $this->input->post('med5');
            $med6 = $this->input->post('med6');
            $txtmedarea = $this->input->post('txtmedarea');
            $data = array(
                'med1' => $med1,
                'med2' => $med2,
                'med3' => $med3,
                'med4' => $med4,
                'med5' => $med5,
                'med6' => $med6,
                'medusage' => $txtmedarea,
            );
            $this->AdminDb->med_insert($data);
            redirect('admin/dashboard');
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    } 
    
    function logout() {
        try {
            $this->session->unset_userdata('dr_id');
            $this->load->view('admin/login');
        } catch (Exception $e) {
            log_message('Error ', $e->getMessage());
            return;
        }
    }

}
