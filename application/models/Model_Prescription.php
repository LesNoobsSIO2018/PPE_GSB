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
    public function modifMedicament($MED_DEPOTLEGAL,$TIN_CODE,$DOS_CODE,$PRE_POSOLOGIE)
    {
        $sql = $this->db->query("UPDATE medicament SET MED_DEPOTLEGAL='".$MED_DEPOTLEGAL."',TIN_CODE='".$TIN_CODE."',DOS_CODE='".$DOS_CODE."',PRE_POSOLOGIE='".$PRE_POSOLOGIE."'");
    }
    public  function getMedicament(){
                $sql= $this->db->query("SELECT * FROM medicament");
                return $sql->result();
            }
    public function getIndividu(){
        $sql=$this->db->query("SELECT * FROM type_individu");
        return $sql->result();
    }
    public function getDosage(){
        $sql=$this->db->query("SELECT * FROM dosage");
        return $sql->result();
    }
}
