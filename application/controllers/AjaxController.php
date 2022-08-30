<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends CI_Controller {

    public function getall_students(){
    
      $query = $this->db->query('SELECT * FROM students');
      $allstudents['data'] = $query->result_array();
      $this->load->view('newhome', $allstudents);

    }

    

    public function ajax_search_view(){
        $this->load->view('newhome');
        
    }

    public function ajaxpro(){

        $query = $this->input->get('query');

        $this->db->like('sname', $query);

        $data = $this->db->get("students")->result();


        echo json_encode( $data);
    }

    // new function for ajax live search
    public function userdata(){
        $this->load->model('Ajax_model');

        $postdata = $this->input->post();
        $data = $this->Ajax_model->getusers($postdata);
        echo json_encode($data);
    }

}