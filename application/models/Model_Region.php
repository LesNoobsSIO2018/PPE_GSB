<?php

class Model_Region extends CI_Model{
    public function GetAllRegion(){
        $sql = $this->db->query("select * from region, secteur where region.SEC_CODE = secteur.SEC_CODE");
       return $sql->result();
    }

    public function insertRegion($data){
         $this->db->insert("region",$data);
    }
    
    public function GetSecteur(){
          $sql = $this->db->query("select * from secteur");
       return $sql->result();
    }
       public function uneRegion($region) {
        $this->db->where('REG_CODE',$region);
        $query = $this->db->get('region');
        return $query->result();
       
    }
    
    public function GetLabo(){
          $sql = $this->db->query("select * from labo");
       return $sql->result();
    }

     public function modifierRegion($id,$nom, $sec){
        $this->db->query("UPDATE region SET `SEC_CODE` = '".$sec."', `REG_NOM` = '".$nom."' where `region`.`REG_CODE` = '".$id."'");
    }
}
