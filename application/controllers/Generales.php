<?php
	class Generales extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model("Clinica");
			$this->load->model("Hospital");
			$this->load->model("Maternidad");
			$this->load->model("Doctor");

		}
		function index(){
			$data['clinicas']=$this->Clinica->visualizarClinicas();
			$data['hospitales']=$this->Hospital->visualizarHospitales();
			$data['maternidades']=$this->Maternidad->visualizarMaternidades();
			$data['doctores']=$this->Doctor->visualizarDoctores();

			$this->load->view("header");
			$this->load->view("Generales/index",$data);
			$this->load->view("footer");
		}

		

	}
?>