<?php
class Model_Medoc extends CI_Model{
    public function getAllMedicament(){
        $sql=$this->db->query("select MED_NOMCOMMERCIAL, MED_COMPOSITION, MED_PRIXECHANTILLON from medicament");
        return $sql->result();
    }
    //public function setMedicament(){
      //  $sql=$this->db->query("update MED_NOMCOMMERCIAL, MED_COMPOSITION, MED_PRIXECHANTILLON, MED_DEPOTLEGAL, MED_COMPOSITION, MED_EFFETS, FAM_CODE from medicament where ")
    //}
}


