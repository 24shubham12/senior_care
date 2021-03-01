<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDb extends CI_Model {

    function __construct() {
        parent:: __construct();
    }

    /* -------------------------------Doctors db queries -------------------------- */

    function form_insert($data) {
        try {
            return ($this->db->insert('userdata', $data)) ? $this->db->insert_id() : false;
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }

    public function fetch_admin_details($email) {
        try {
            $this->db->select('*');
            $this->db->from('doctorlogin');
            $this->db->where('dremail', $email);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }

    public function view_patient_recs($email) {
        try {
            $this->db->select('*');
            $this->db->from('userdata');
            $this->db->where('email', $email);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }

    public function fetch_patient_recs($get_email) {
        try {
            $this->db->select('*');
            $this->db->from('userdata');
            $this->db->where('email', $get_email);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }
    
     function update_status($pat_id,$formArray)
    {
        try {
            $this->db->where('id', $pat_id);
            $this->db->update('userdata', $formArray);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }
    
    public function fetch_pat_recs($get_id) {
        try {
            $this->db->select('*');
            $this->db->from('userdata');
            $this->db->where('id', $get_id);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }
    
    function med_insert($data) {
        try {
            return ($this->db->insert('prescription', $data)) ? $this->db->insert_id() : false;
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }

}
