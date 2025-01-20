<?php
    //Definiendo la clase clientes
    class Maternidades extends CI_Controller{
        //Constructor
        public function __construct(){
            //Invoca al contructor de la clase padre
            parent::__construct();
            //Cargar metodo cliente
            $this->load->model('Maternidad');
        }
        //Función para renderizar el index de Clientes
        public function index(){
            $maternidades=$this->Maternidad->obtenerTodos();
            
            //Para pasar datos a la vista
            $data['maternidades']=$maternidades;//OJO

            //encabezado
            $this->load->view('header');
            //body
            $this->load->view('Maternidades/index', $data);
            //footer
            $this->load->view('footer');
        }
        //Funcion para recibir datos del cliente y guardarlos en la Bdd
        public function guardar(){
            $datos=array(
                'nombre_mat'=>$this->input->post('nombre_mat'),
                'provincia_mat'=>$this->input->post('provincia_mat'),
                'ciudad_mat'=>$this->input->post('ciudad_mat'),
                'direccion_mat'=>$this->input->post('direccion_mat'),
                'latitud_mat'=>$this->input->post('latitud_mat'),
                'longitud_mat'=>$this->input->post('longitud_mat')
            );
            //print_r($datos);
            $this->Maternidad->insertar($datos);
            redirect('Maternidades/index');
        }
        //Funcion para eliminar clientes
        public function eliminar($id){
            if($this->Maternidad->eliminarPorId($id)){
                redirect('Maternidades/index');
            }else{
                echo "Error al eliminar";

            }
        
        } 
        //Funcion para graficar la direccion de un clioente en el mapa
        public function graficarDireccion($id){
            $data['maternidad']=$this->Maternidad->consultarPorId($id);
            $this->load->view('header');
            $this->load->view('Maternidades/graficarDireccion', $data);
            $this->load->view('footer');


        }
        //lo nuevo
        public function verDireccionesGenerales() {
            $maternidades = $this->Maternidad->obtenerTodos(); // Obtener todos los hospitales
        
            $data['maternidades'] = $maternidades;
        
            // Cargar vistas
            $this->load->view('header');
            $this->load->view('Maternidades/vistaGeneral', $data); // Vista para ver direcciones generales
            $this->load->view('footer');
        }
        
       
    }//Cierre de la clase


?>