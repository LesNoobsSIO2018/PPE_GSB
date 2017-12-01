<?php 
class Model_Stats extends CI_Model 
{ 
 
//    public function getAllVisiteurs() 
//    { 
//        $sql = $this->db->query("select * from labo");
//       return $sql->result();
//    } 
    public function getAllRegionDeSecteur(){
        
       $sql = $this->db->query("SELECT secteur.SEC_LIBELLE,count(REG_CODE) AS nbRegion from secteur,region where secteur.SEC_CODE = region.SEC_CODE GROUP BY secteur.SEC_CODE");
       return $sql->result();
    }
} 