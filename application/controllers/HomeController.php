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

	public function insert_new_form(){
		$this->load->view('insert_new_form');
	}

	// insert function
	public function insert_new(){
		$this->load->model('student_model');

		if($this->input->post('insert')){
			$name = $this->input->post('name');
			$dept = $this->input->post('department');
			$cgpa = $this->input->post('cgpa');

			$this->student_model->saverecords($name, $dept, $cgpa);
			echo "Data has been saved successfully";
		}

		

	}


	// delete a record from student table

	public function delete_student(){

		// load model
		$this->load->model('Student_model');

		$id = $this->input->get('id');

		$this->Student_model->delete_records($id);

		echo "data has been deleted";

	}

	// update data 
	public function update_data(){
		// load model
		$this->load->model('Student_model');

		$id = $this->input->get('id');

		$result['data'] = $this->Student_model->displayRecordsByID($id);

		$this->load->view('udpate_students_form', $result);


		if($this->input->post('update')){

			$name = $this->input->post('name');
			$dept = $this->input->post('department');
			$cgpa = $this->input->post('cgpa');

			$this->Student_model->update_records($name, $dept, $cgpa, $id);

			echo "updated successfullly";

		}

	}


}
