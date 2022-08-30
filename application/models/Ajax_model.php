<?php

class Ajax_model extends CI_Model { 

    
    public function getusers($postdata){
        $response = array();
        $this->db->select('*');
        if($postdata['search']){
            $this->db->where("sname like '%".$postdata['search']."%'");
            $result = $this->db->get('students')->result();

            foreach($result as $row){
                $response[] = array("label" => $row->sname);
            }
        }
        return $response;
    }



}


?>