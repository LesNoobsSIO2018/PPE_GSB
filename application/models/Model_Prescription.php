<?php
class Model_Prescription extends CI_Model{
    public function getPrescription()
    {
        $sql=$this->db->query("select * from prescrire");
        return $sql->result();
    }
    public function creerPrescription($MED_DEPOTLEGAL,$TIN_CODE,$DOS_CODE,$PRE_POSOLOGIE)
    {
        $sql=$this->db->query("INSERT INTO prescrire value('".$MED_DEPOTLEGAL."','".$TIN_CODE."','".$DOS_CODE."','".$PRE_POSOLOGIE."')");
    }
}
