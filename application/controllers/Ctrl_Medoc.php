<?php

class Ctrl_Medoc extends CI_Controller
{
    public function index()
    {
        $this->load->view("v_Accueil");
    }
    public function getAllMedicament(){
         $this->load->model("Model_Medoc");
        $data["lesMedicaments"]=$this->Model_Medoc->getAllMedicament();
        $this->load->view("v_Medoc",$data);
    }
    public function getAllIndividu(){
        $this->load->model("Model_TypeIndividu");
        $data["lesIndividus"]=$this->Model_TypeIndividu->getAllTypeIndividu();
        $this->load->view("v_TypeIndividu",$data);
    }
    public function getPrescription(){
        $this->load->model("Model_Prescription");
        $this->load->model("Model_Medoc");
        $data["lesMedicaments"]=$this->Model_Medoc->getAllMedicament();
        $this->load->view("v_Prescription", $data);
        
    }
}

