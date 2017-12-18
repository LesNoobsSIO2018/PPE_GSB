<?php
class Ctrl_Composant_Ivan extends CI_Controller {
        function __construct() { 
         parent::__construct(); 
         //$this->load->helper('url'); 
        // $this->load->database();
         $this->load->model("Model_Composant_Ivan");
         $this->load->model("Model_Medicament_Ivan");
         $this->load->model("Model_Statistique_Ivan");
         $this->load->model("Model_Presentation_Ivan");
        } 
     
	public function index()
	{
	    $this->load->view('v_acceuil');
	}
        
        public function AfficherPageList(){
           // $this->load->helper('url'); 
            $data['lesComposants']=$this->Model_Composant_Ivan->getAllComposants();
            $this->load->view('v_listC',$data);
            
        }
  
        public function ajouterComposant() { 
             
              $data['leDernierComposants']=$this->Model_Composant_Ivan->getLastCode();
              $this->load->view('v_ajouterComposant',$data); 
        }                                   
      
        public function form_composant(){
          // $this->ValiderFormHome();
                  if($this->form_validation->run()==TRUE)
                  {
                          $data['lesComposants']=$this->Model_Composant_Ivan->getAllComposants();
                          $data['leDernierComposants']=$this->Model_Composant_Ivan->getLastCode();
                          $this->load->view('v_ajouterComposant', $data);
                  }
                  else{
                      $this->load->model("Model_Composant_Ivan");
                      $data = array( 
                      'CMP_CODE'       => $this->input->post('CMP_CODE'), 
                      'CMP_LIBELLE'    => $this->input->post('CMP_LIBELLE') 
                        ); 
//                        print_r($data);
//                        die;
                      $data1 = array( 
                      'CMP_LIBELLE'    => $this->input->post('CMP_LIBELLE') 
                        ); 
                      $libl = $data1['CMP_LIBELLE'];
                      //print_r($libl);
                        
                        if($this->input->post('Modifier'))
                        {
                            
                            $this->Model_Composant_Ivan->editComposant($libl, $this->input->post(''
                                    . '4'));
                            redirect(base_url()."index.php/Ctrl_Composant_Ivan/modife");
                        }
                        if($this->input->post('btnValider'))
                         {
                           $data1['lesComposants']=$this->Model_Composant_Ivan->getAllComposants();
                           $codeComps =  $data1['lesComposants'];
                           $inBase=0;
                           foreach ($codeComps as $code){
                               
                               if($code->CMP_CODE == $data['CMP_CODE']){
                                   $inBase = 1;
                                   break;
                               }
                               //var_dump($code->CMP_CODE);
                               //break;
                           }
                            //var_dump($inBase);
                            //var_dump($data['CMP_CODE']);
                            //die;
                            if($inBase == 1){
                                echo  "Le composant avec ce code est déja occupeé<br>";
                                 echo "<a class ='link' href='".base_url()."index.php/Ctrl_Composant_Ivan/ajouterComposant/'> Revenire a la page d'incertion </a>";
//                                redirect(base_url()."index.php/Ctrl_Composant_Ivan/modife");
                                
                            }
                            else{    
                                $this->Model_Composant_Ivan->insertComposants($data);
                                $this->ajouterComposant();
                            }
                         }
                  }
        }
        public function ValiderFormHome()
	{
		$this->form_validation->set_error_delimiters('<div class=error>','</div>');
		//$this->form_validation->set_rules("CMP_CODE", "Ajouter un code de composant", "required");
                $this->form_validation->set_rules("CMP_LIBELLE", "Ajouter une libellé de composant", "required");	
	}
        
        public function mod_composant(){
            $CMP_CODE = $this->uri->segment(3);
            $this->load->model("Model_Composant_Ivan");
            $data["unComposant"] = $this->Model_Composant_Ivan->unComposant($CMP_CODE);
           // $data['lesComposants']=$this->Model_Composant_Ivan->getAllComposants();
            $this->load->view("v_ajouterComposant",$data);
        }
        
        public function modife(){
            $this->AfficherPageList();
        }
        
        public function afficherMedicaments(){
           $data['lesMedicaments'] =$this->Model_Medicament_Ivan->getAllMedicament();   
         //  $data["lesComposantDeMedicaments"] = $this->Model_Medicament_Ivan->getComposantMeds($data['lesMedicaments'][0]->MED_NOMCOMMERCIAL);
           $this->load->view('v_listeCompMods',$data);
        }
        
        public function afficherComposantMeds(){
            $idMedicament = $_GET['idMedicament'];       
            $data["lesComposantDeMedicaments"] = $this->Model_Medicament_Ivan->getComposantMeds($idMedicament);
            $this->load->view('v_CompsMeds',$data);
            
        }
        
        public function ajouterComposantMeds(){

            $data['lesMedicaments'] =$this->Model_Medicament_Ivan->getAllMedicament();
            $data['lesComposants']=$this->Model_Composant_Ivan->getAllComposants();
            $this->load->view('v_AjoutCompsMeds',$data);
            
        }
        
        public function incererComposantMedic(){
            $medicament = $_POST['medicament'];
            $composant = $_POST['composant'];
            $CST_QTE = $_POST['quantite'];
            $this->Model_Medicament_Ivan->insertMedicComposants($medicament,$composant,$CST_QTE);
            $this->ajouterComposantMeds();
        }
        
        public function composantMed(){
            $medicament = $_POST['medicament'];
            $data["lesComposants"] = $this->Model_Medicament_Ivan->getComposantMeds($medicament);
            $this->load->view('v_composantAj',$data);
        }


        public function modifierComposantMeds(){
           // $idMedicament = $_GET['idMedicament'];

            $data['lesMedicaments'] =$this->Model_Medicament_Ivan->getAllMedicament();
            $this->load->view('v_modComMod',$data);
            
        }
        
        public function modifierComposantMedic(){
            $medicament = $_POST['medicament'];
            $composant = $_POST['composant'];
            $CST_QTE = $_POST['quantite'];
            $this->Model_Medicament_Ivan->modifierMedicComposants($medicament,$composant,$CST_QTE);
            $this->ajouterComposantMeds();
        }
        
       public function quantiteComposantMedic(){
           $composant = $_POST['composant'];
           $medicament = $_POST['medicament'];
           $data["lesQuantitéCDM"] = $this->Model_Medicament_Ivan->getQuantitéComposantMeds($medicament,$composant);
           $this->load->view('v_qteComps',$data);
       }
       
       public function modifComposantMedic(){
            $medicament = $_POST['medicament'];
            $composant = $_POST['composant'];
            $CST_QTE = $_POST['quantite'];
            
            $this->Model_Medicament_Ivan->modifierMedicComposants($medicament,$composant,$CST_QTE);
            $this->modifierComposantMeds();
       }
       
       public function AfficherStatMed(){
           $medicament = $_GET['idMedicament'];
           $data['lesStats'] =$this->Model_Statistique_Ivan->getSumStats($medicament);
           $data['lesQtComps'] =$this->Model_Statistique_Ivan->lesQtComps($medicament);
           $this->load->view("v_statQte",$data);
           
       }
       
       public function statistique(){
           $data['lesQteMedCom'] =$this->Model_Statistique_Ivan->getQteComposantsDunMedicment(); 
           $data['lesSumMedCom'] =$this->Model_Statistique_Ivan->getSumCompMeds();
           $data['lesnbrMedPres'] = $this->Model_Statistique_Ivan->getNombreMedParPresentation();
           $this->load->view("v_statistique", $data);
           
       }
       
       public function formulMed(){
           $data["lesPresentations"] = $this->Model_Presentation_Ivan->GetAllPresentations();
           $data['lesMedicaments'] =$this->Model_Medicament_Ivan->getAllMedicament();
           $this->load->view("v_formulMed",$data);
       }
       
       public function AjFormulMed(){
           $medicament = $_POST['idMedicament'];
           $presentation = $_POST['idPresentation'];
           $this->Model_Presentation_Ivan->insererPresentation($medicament,$presentation);
           $this->formulMed();   
       }
       
       public function AfficherAjFormulMed(){
           $medicament = $_GET['idMedicament'];
           $data["lesPresentationsDMeds"] = $this->Model_Presentation_Ivan->GetAllPresentationsMeds($medicament);
           $this->load->view("v_presentMeds",$data);
           
       }
             
       public function ajouterPresentation(){
           $data["lesPresentations"] = $this->Model_Presentation_Ivan->GetAllPresentations();
           $this->load->view("v_ajouterPresentation",$data);
       }
       
       public function form_presentation(){
           
            if($this->form_validation->run()==TRUE)
                  {
                          $data["lesPresentations"] = $this->Model_Presentation_Ivan->GetAllPresentations();
                          $this->load->view("v_ajouterPresentation",$data);
                  }
                  else{

                      $data = array( 
                      'PRE_CODE'       => $this->input->post('PRE_CODE'), 
                      'PRE_LIBELLE'    => $this->input->post('PRE_LIBELLE') 
                        ); 
//                        print_r($data);
//                        die;
                      $data1 = array( 
                      'PRE_LIBELLE'    => $this->input->post('PRE_LIBELLE') 
                        ); 
                      $libl = $data1['PRE_LIBELLE'];
                      //print_r($libl);
                        
                        if($this->input->post('Modifier'))
                        {
                            
                            $this->Model_Composant_Ivan->editComposant($libl, $this->input->post());
                            redirect(base_url()."index.php/Ctrl_Composant_Ivan/modife");
                        }
                        if($this->input->post('btnValider'))
                         {
                          $data2["lesPresentations"] = $this->Model_Presentation_Ivan->GetAllPresentations();
                           $codeP =  $data2['lesPresentations'];
                           $inBase=0;
                           //var_dump($data2);
                           foreach ($codeP as $code){
//                               var_dump($code->PRE_CODE);
//                               var_dump($data['PRE_CODE']);
//                               die;
                               if($code->PRE_CODE == $data['PRE_CODE']){
                                   $inBase = 1;
                                   break;
                               }
                           }
                            if($inBase == 1){
                                echo  "La presentation avec ce code est déja occupeé<br>";
                                 echo "<a class ='link' href='".base_url()."index.php/Ctrl_Composant_Ivan/ajouterPresentation/'> Revenire a la page d'incertion </a>";
//                                redirect(base_url()."index.php/Ctrl_Composant_Ivan/modife");
                                
                            }
                            else{    
                                $this->Model_Presentation_Ivan->insertPresen($data);
                                $this->ajouterPresentation();
                            }
                         }
                  }
        }
       
       
       
      
}
