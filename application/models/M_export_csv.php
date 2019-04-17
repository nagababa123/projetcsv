<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_export_csv extends CI_Model {
    public function __construct() {
        parent::__construct();// call the CI_Model Construtor
        $this->load->database();// Connexion à la BDD
    }

    function fetch_data()
 {
  $this->db->select("student_name, student_phone, image");
  $this->db->from('tbl_student');
  return $this->db->get();
 }

}
