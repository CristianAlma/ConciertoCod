<?php
    //Definiendo la clase clientes
    class Doctores extends CI_Controller{
        //Constructor
        public function __construct(){
            //Invoca al contructor de la clase padre
            parent::__construct();
            //Cargar metodo cliente
            $this->load->model('Doctor');
        }
        //Función para renderizar el index de Clientes
        public function index(){
            $doctores=$this->Doctor->obtenerTodos();
            
            //Para pasar datos a la vista
            $data['doctores']=$doctores;//OJO

            //encabezado
            $this->load->view('header');
            //body
            $this->load->view('Doctores/index', $data);
            //footer
            $this->load->view('footer');
        }
        //Funcion para recibir datos del cliente y guardarlos en la Bdd
        public function guardar(){
            $datos=array(
                'id_doc_ca'=>$this->input->post('id_doc_ca'),
                'especialidad_doc_ca'=>$this->input->post('especialidad_doc_ca'),
                'dni_doc_ca'=>$this->input->post('dni_doc_ca'),
                'apellido_doc_ca'=>$this->input->post('apellido_doc_ca'),
                'nombre_doc_ca'=>$this->input->post('nombre_doc_ca'),
                'latitud_doc_ca'=>$this->input->post('latitud_doc_ca'),
                'longitud_doc_ca'=>$this->input->post('longitud_doc_ca')
            );
            //print_r($datos);
            $this->Doctor->insertar($datos);
            redirect('Doctores/index');
        }
        //Funcion para eliminar clientes
        public function eliminar($id){
            if($this->Doctor->eliminarPorId($id)){
                redirect('Doctores/index');
            }else{
                echo "Error al eliminar";

            }
        
        } 
        //Funcion para graficar la direccion de un clioente en el mapa
        public function graficarDireccion($id){
            $data['doctor']=$this->Doctor->consultarPorId($id);
            $this->load->view('header');
            $this->load->view('Doctores/graficarDireccion', $data);
            $this->load->view('footer');


        }

        //lo nuevo
        public function verDireccionesGenerales() {
            $doctores = $this->Doctor->obtenerTodos(); // Obtener todos los hospitales
        
            $data['doctores'] = $doctores;
        
            // Cargar vistas
            $this->load->view('header');
            $this->load->view('doctores/vistaGeneral', $data); // Vista para ver direcciones generales
            $this->load->view('footer');
        }
        
       
    }//Cierre de la clase


?>