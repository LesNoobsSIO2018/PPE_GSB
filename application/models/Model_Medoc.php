<?php
class Model_Medoc extends CI_Model
{
    public function getAllMedicaments(){
        $sql= $this->db->query("SELECT * FROM medicament");
        return $sql->result();
    }
    public function creerMedicament($depot,$nom,$code,$compo,$effets,$contreindic,$prix)
            {
                $sql = $this->db->query("INSERT INTO medicament value('".$depot."','".$nom."','".$code."','".$compo."','".$effets."','".$contreindic."','".$prix."')");
            }
    public function modifMedicament($depot,$nom,$code,$compo,$effets,$contreindic,$prix)
            {
                $sql = $this->db->query("UPDATE medicament SET MED_DEPOTLEGAL='".$depot."',MED_NOMCOMMERCIAL='".$nom."',FAM_CODE='".$code."',MED_COMPOSITION='".$compo."',MED_EFFETS='".$effets."',MED_CONTREINDIC='".$contreindic."',MED_PRIXECHANTILLON='".$prix."'");
            }
            public  function getFamille(){
                $sql= $this->db->query("SELECT * FROM famille");
                return $sql->result();
            }
}



