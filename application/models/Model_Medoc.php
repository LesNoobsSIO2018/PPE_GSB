<?php
class Model_Medoc extends CI_Model
{
    public function getAllMedicament()
    {
        $sql=$this->db->query("select MED_NOMCOMMERCIAL, MED_COMPOSITION, MED_PRIXECHANTILLON from medicament");
        return $sql->result();
    }
    public function creerMedicament($depot,$nom,$code,$compo,$effets,$contreindic,$prix)
    {
       $sql=$this->db->query("INSERT INTO medicament value('".$depot."','".$nom."','".$code."','".$compo."','".$effets."','".$contreindic."','".$prix."') ");
    }
    public function modifMedoc($depot,$nom,$code,$compo,$effets,$contreindic,$prix)
    {
        $sql=$this->db->query("UPDATE medicament SET");
    }
}



