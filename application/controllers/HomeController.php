<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index()
	{

        // load model
        $this->load->model('Student_model');

        $data['all_students'] = $this->Student_model->get_all_students();

		$this->load->view('home', $data);
	}
}
