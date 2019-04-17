<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_export_csv extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_export_csv');
        $this->load->helper("url");

    }

    function index() {
        $data['student_data'] = $this->M_export_csv->fetch_data();
        $this->load->view('V_export_csv', $data);
    }

    public function export() {
        $file_name = 'student_details_on_' . date('Ymd') . '.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file_name");
        header("Content-Type: application/csv;");

        // get data 
        $student_data = $this->M_export_csv->fetch_data();
        
        // file creation 
        $file = fopen('php://output', 'w');

        $header = array("Student Name", "Student Phone");
        fputcsv($file, $header);
        foreach ($student_data->result_array() as $key => $value) {
            fputcsv($file, $value);
        }
        fclose($file);
        exit;
    }

}
