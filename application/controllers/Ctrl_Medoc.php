<?php

class Ctrl_Medoc extends CI_Controller
{
    public function index()
    {
        $this->load->model("Model_Medoc");
        $data["lesMedicaments"]=$this->Model_Medoc->getAllMedicament();
        $this->load->view("v_Medoc",$data);
    }
}

