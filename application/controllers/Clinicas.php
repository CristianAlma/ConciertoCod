<?php
    //Definiendo la clase clientes
    class Clinicas extends CI_Controller{
        //Constructor
        public function __construct(){
            //Invoca al contructor de la clase padre
            parent::__construct();
            //Cargar metodo cliente
            $this->load->model('Clinica');
        }
        //Función para renderizar el index de Clientes
        public function index(){
            $clinicas=$this->Clinica->obtenerTodos();
            
            //Para pasar datos a la vista
            $data['clinicas']=$clinicas;//OJO

            //encabezado
            $this->load->view('header');
            //body
            $this->load->view('Clinicas/index', $data);
            //footer
            $this->load->view('footer');
        }
        //Funcion para recibir datos del cliente y guardarlos en la Bdd
        public function guardar(){
            $datos=array(
                'nombre_cli'=>$this->input->post('nombre_cli'),
                'provincia_cli'=>$this->input->post('provincia_cli'),
                'ciudad_cli'=>$this->input->post('ciudad_cli'),
                'direccion_cli'=>$this->input->post('direccion_cli'),
                
            );
            //print_r($datos);
            $this->Clinica->insertar($datos);
            redirect('Clinicas/index');
        }
        //Funcion para eliminar clientes
        public function eliminar($id){
            if($this->Clinica->eliminarPorId($id)){
                redirect('Clinicas/index');
            }else{
                echo "Error al eliminar";

            }
        
        } 
        //Funcion para graficar la direccion de un clioente en el mapa
        public function graficarDireccion($id){
            $data['clinica']=$this->Clinica->consultarPorId($id);
            $this->load->view('header');
            $this->load->view('Clinicas/graficarDireccion', $data);
            $this->load->view('footer');


        }

        //lo nuevo
        public function verDireccionesGenerales() {
            $clinicas = $this->Clinica->obtenerTodos(); // Obtener todos los hospitales
        
            $data['clinicas'] = $clinicas;
        
            // Cargar vistas
            $this->load->view('header');
            $this->load->view('clinicas/vistaGeneral', $data); // Vista para ver direcciones generales
            $this->load->view('footer');
        }
        
       
    }//Cierre de la clase


?>