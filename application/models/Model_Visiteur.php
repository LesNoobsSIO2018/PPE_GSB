<?php

class Model_Visiteur extends CI_Model{
    public function GetAllVisiteur(){
        $sql = $this->db->query("select * from visiteur, secteur where visiteur.SEC_CODE = secteur.SEC_CODE");
       return $sql->result();
    }

    public function insertVisiteurs($data){
         $this->db->insert("visiteur",$data);
    }
    
    public function GetLabo(){
          $sql = $this->db->query("select * from labo");
       return $sql->result();
    }
    public function unMatricule($matricule) {
        $this->db->where('VIS_MATRICULE',$matricule);
        $query = $this->db->get('visiteur');
        return $query->result();
       
    }
    public function modifierVisiteur($hidden_id, $Nom,  $Prenom, $Adresse, $Cp, $Ville, $DateEmb, $CodeSecteur, $CodeLabo){
    $this->db->query("UPDATE `visiteur` SET `VIS_NOM`='".$Nom."', `Vis_PRENOM`='".$Prenom."', `VIS_ADRESSE`='".$Adresse."', `VIS_CP`='".$Cp."', `VIS_VILLE`='".$Ville."', `VIS_DATEEMBAUCHE`='".$DateEmb."', `SEC_CODE`='".$CodeSecteur."', `LAB_CODE`='".$CodeLabo."' WHERE `visiteur`.`VIS_MATRICULE` = '".$hidden_id."'");
  
    }

}
