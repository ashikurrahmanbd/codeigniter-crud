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

}


?>