<?php

class Model_Statistique_Ivan extends CI_Model{
    
    public function getSumStats($medicament){
        $sql = $this->db->query("SELECT SUM(CST_QTE) FROM constituer WHERE MED_DEPOTLEGAL='".$medicament."'");
        return $sql->result();
    }
    public function lesQtComps($medicament){
        $sql = $this->db->query("SELECT COUNT(CMP_CODE) FROM constituer WHERE MED_DEPOTLEGAL ='".$medicament."'");
        return $sql->result();
    }
    public function getAllQteComps(){
        $sql = $this->db->query("SELECT COUNT(CMP_CODE) FROM constituer");
        return $sql->result();
    }
    
    public function getQteComposantsDunMedicment(){
        $sql = $this->db->query(" SELECT medicament.MED_NOMCOMMERCIAL,count(CMP_CODE) as qte
                                    from medicament,constituer
                                    where medicament.MED_DEPOTLEGAL = constituer.MED_DEPOTLEGAL
                                    GROUP BY medicament.MED_DEPOTLEGAL");
        return $sql->result();
    }
    
    public function getSumCompMeds(){
         $sql = $this->db->query("  SELECT medicament.MED_NOMCOMMERCIAL,SUM(CST_QTE) as sum
                                    from medicament,constituer
                                    where medicament.MED_DEPOTLEGAL = constituer.MED_DEPOTLEGAL
                                    GROUP BY medicament.MED_DEPOTLEGAL");
        return $sql->result();
    }
    
    public function getNombreMedParPresentation(){
        $sql=$this->db->query("SELECT presentation.PRE_LIBELLE,count(MED_DEPOTLEGAL) as nbMed
                                from presentation,formuler
                                where presentation.PRE_CODE = formuler.PRE_CODE
                                GROUP BY presentation.PRE_LIBELLE");
        return $sql->result();
    }
    
    
   
    
   
 
}