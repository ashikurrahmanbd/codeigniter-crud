<?php

class Student_model extends CI_Model { 

   

    public function get_all_students(){
        $all_students = $this->db->get('students');
        return $all_students->result();
    }

    public function saverecords($name, $department, $cgpa){
        $query = "insert into students values ('', '$name', '$department', '$cgpa')";
        $this->db->query($query);
    }

    public function delete_records($id){
        $this->db->query("DELETE FROM students WHERE s_id = '$id' ");
    }

    //display record for updating
    public function displayRecordsByID($id){
        $query=$this->db->query("select * from students where s_id='".$id."'");
	    return $query->result();
    }

    //update record
    public function update_records($name, $dept, $cgpa, $id){
        $query = $this->db->query("UPDATE students SET sname='$name', department='$dept', cgpa='$cgpa' WHERE s_id='$id' ");
    }



}


?>