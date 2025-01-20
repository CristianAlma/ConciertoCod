<?php
    //Definiendo la clase clientes
    class Hospitales extends CI_Controller{
        //Constructor
        public function __construct(){
            //Invoca al contructor de la clase padre
            parent::__construct();
            //Cargar metodo cliente
            $this->load->model('Hospital');
        }
        //Función para renderizar el index de Clientes
        public function index(){
            $hospitales=$this->Hospital->obtenerTodos();
            
            //Para pasar datos a la vista
            $data['hospitales']=$hospitales;//OJO

            //encabezado
            $this->load->view('header');
            //body
            $this->load->view('Hospitales/index', $data);
            //footer
            $this->load->view('footer');
        }
        
        //Funcion para recibir datos del cliente y guardarlos en la Bdd
        public function guardar(){
            $datos=array(
                'nombre_hos'=>$this->input->post('nombre_hos'),
                'provincia_hos'=>$this->input->post('provincia_hos'),
                'ciudad_hos'=>$this->input->post('ciudad_hos'),
                'direccion_hos'=>$this->input->post('direccion_hos'),
                
            );
            //print_r($datos);
            $this->Hospital->insertar($datos);
            redirect('Hospitales/index');
        }
        //Funcion para eliminar clientes
        public function eliminar($id){
            if($this->Hospital->eliminarPorId($id)){
                redirect('Hospitales/index');
            }else{
                echo "Error al eliminar";

            }
        
        } 
        //Funcion para graficar la direccion de un clioente en el mapa
        public function graficarDireccion($id){
            $data['hospital']=$this->Hospital->consultarPorId($id);
            $this->load->view('header');
            $this->load->view('Hospitales/graficarDireccion', $data);
            $this->load->view('footer');


        }
        //lo nuevo
        public function verDireccionesGenerales() {
            $hospitales = $this->Hospital->obtenerTodos(); // Obtener todos los hospitales
        
            $data['hospitales'] = $hospitales;
        
            // Cargar vistas
            $this->load->view('header');
            $this->load->view('Hospitales/vistaGeneral', $data); // Vista para ver direcciones generales
            $this->load->view('footer');
        }
        
       
    }//Cierre de la clase


?>