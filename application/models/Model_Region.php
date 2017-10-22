<?php

class Model_Region extends CI_Model{
    public function GetAllRegion(){
        $sql = $this->db->query("select * from region");
       return $sql->result();
    }

    public function insertRegion($data){
         $this->db->insert("region",$data);
    }

}
