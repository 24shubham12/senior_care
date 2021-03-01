<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PatientDb extends CI_Model {

    function __construct() {
        parent:: __construct();
    }

    function form_insert($data) {
        try {
            return ($this->db->insert('userdata', $data)) ? $this->db->insert_id() : false;
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }

    public function fetch_patient_details($email) {
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

    public function view_patient_recs() {
        try {
            $this->db->select('*');
            $this->db->from('userdata');
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }

    /* update user profile */
    public function update_profile($email_id, $array)
    {
        try {

            $this->db->where('user_emai_id', $email_id);
            if ($this->db->update('users', $array)) {
                return 1;
            } else {
                return 0;
            }
        } catch (Exception $exc) {
            error_log("SQL quey error. " . $exc->getTraceAsString());
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

    /* delete recs */
     public function userprescription($user_id) {
         try {
             $this->db->where('subscribe_id', $subs_id);
             if ($this->db->delete('subscribe_tech')) {
                 return 1;
             } else {
                 return 0;
             }
         } catch (Exception $e) {
             log_message('error', $e->getMessage());
             return;
         }
     }
     
     public function fetch_medical_recs($get_id) {
         try {
            $this->db->select('*');
            $this->db->from('prescription');
            $this->db->where('id', $get_id);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
     }
     
     
}
