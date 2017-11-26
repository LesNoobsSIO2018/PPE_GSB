<?php

class Ctrl_Visiteur extends CI_Controller{
    
       public function index(){
           
       $this->load->model("Model_Visiteur"); 
       $data["lesVisiteurs"] = $this->Model_Visiteur->GetAllVisiteur();
       $this->load->view("v_Accueil",$data);
    }
        public function v_Accueil(){
            $this->load->view("v_Accueil");
        }
        public function ajouterVisiteur(){
           $this->load->model("Model_Visiteur"); 
           $this->load->model("Model_Region"); 
         $data["lesVisiteurs"] = $this->Model_Visiteur->GetAllVisiteur();
         $data["lesSecteurs"] = $this->Model_Region->GetSecteur();
         $data["lesLabos"] = $this->Model_Visiteur->GetLabo();
         $this->load->view('v_AjouterVisiteur',$data);
       
        }
         public function form_visiteur(){
          if($this->form_validation->run()==true)
          {
              $this->ajouterVisiteur();
          }
          else{
              $this->load->model("Model_Visiteur");
              $data=array(
                  'VIS_MATRICULE' =>$this->input->post('VIS_MATRICULE'),
                  'VIS_NOM' =>$this->input->post('VIS_NOM'),
                  'Vis_PRENOM' =>$this->input->post('Vis_PRENOM'),
                  'VIS_ADRESSE' =>$this->input->post('VIS_ADRESSE'),
                  'VIS_CP' =>$this->input->post('VIS_CP'),
                  'VIS_VILLE' =>$this->input->post('VIS_VILLE'),
                  'VIS_DATEEMBAUCHE' =>$this->input->post('VIS_DATEEMBAUCHE'),
                  'SEC_CODE' =>$this->input->post('SEC_CODE'),
                  'LAB_CODE' =>$this->input->post('LAB_CODE')
                      );
//                      var_dump($data);
//                      die;
              $this->Model_Visiteur->insertVisiteurs($data);
              $this->ajouterVisiteur();
          }  
        }
        public function modifierVisiteur(){
        $this->load->model("Model_Visiteur"); 
        $data["lesVisiteurs"] = $this->Model_Visiteur->GetAllVisiteur();
        $this->load->view("v_ModifierVisiteur",$data);     
          }
      
        public function ajouterRegion(){
        $this->load->model("Model_Region");
        
        $data["lesRegions"]=$this->Model_Region->GetAllRegion();
         $data["lesSecteurs"] = $this->Model_Region->GetSecteur();
        $this->load->view("v_AjouterRegion", $data);
          }
          
          public function form_region(){
                        if($this->form_validation->run()==true)
                    {
                        $this->ajouterRegion();
                    }
                    else{
                        $this->load->model("Model_Region");
                        $data = array(
                            'REG_CODE'=>$this->input->post('REG_CODE'),
                            'REG_NOM' => $this->input->post('REG_NOM'),
                            'SEC_CODE' =>$this->input->post('SEC_CODE')
                               
                        );
                        
                       $this->Model_Region->insertRegion($data);
                      $this->ajouterRegion();
                    }
          }


         public function modifierRegion(){
        $this->load->model("Model_Region");
        $data["lesRegions"]=$this->Model_Region->GetAllRegion();
        $this->load->view("v_ModifierRegion", $data);
        }  
          
         public function modifierVisiteurMod(){
        $this->load->model("Model_Visiteur"); 
        $this->load->model("Model_Region"); 
        $data["lesVisiteurs"] = $this->Model_Visiteur->GetAllVisiteur();
        $data["lesSecteurs"] = $this->Model_Region->GetSecteur();
        $data["lesLabos"] = $this->Model_Visiteur->GetLabo();
        $this->load->view("v_ModifierVisiteurMod",$data);     
          }
        public function modVisiteur(){
        $matricule = $this->uri->segment(3);
        $this->load->model("Model_Visiteur"); 
        $this->load->model("Model_Region"); 
        $data["lesSecteurs"] = $this->Model_Region->GetSecteur();
        $data["lesLabos"] = $this->Model_Visiteur->GetLabo();
        $data['unVisiteur'] = $this->Model_Visiteur->unMatricule($matricule);
        $this->load->view("v_ModifierVisiteurMod",$data);    
        }
        public function modRegion(){
        $region = $this->uri->segment(3); 
        $this->load->model("Model_Region"); 
        $data["lesSecteurs"] = $this->Model_Region->GetSecteur();
        $data["lesLabos"] = $this->Model_Visiteur->GetLabo();
        $data['uneRegion'] = $this->Model_Visiteur->uneRegion($region);
        $this->load->view("v_ModifierRegionMod",$data); 
            
        }
        public function modifierRegionMod(){
        $this->load->model("Model_Region");
        $data["lesRegions"]=$this->Model_Region->GetAllRegion();
        $this->load->view("v_ModifierRegionMod", $data);
        }
        public function statistique(){
        $this->load->view("v_Stats");
            
        }
}

