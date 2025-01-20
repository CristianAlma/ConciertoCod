<?php
    class Doctor extends CI_Model{
        //contructor
        function __construct()
        {
            parent::__construct();
        }
        //Insercion de clientes en la bdd
        function insertar($datos){
            $this->db->insert('doctor',$datos);
        }
        //Consulta de todos los clientes
        function obtenerTodos(){
            $listadoDoctores=$this->db->get('doctor'); //select / from clientes
            if($listadoDoctores->num_rows()>0){
                return $listadoDoctores->result(); //Retornamos el listado de clientes, en el caso de que SI EXISTA
            }else{
                return false; //Cuando no existen clientes registrados
            }
        }
        //Eliminacion de datos
        function eliminarPorId($id){
            //delete from cliente where id_cli=3;
            $this ->db->where('id_doc_ca' ,$id);
            return $this->db->delete('doctor');
        }
        //Consulta de un cliente especifico por su id
        function consultarPorId($id){
            $this ->db->where('id_doc_ca' ,$id);
            $doctor=$this->db->get('doctor');
            //Validando que el cliente consultado exista en la bdd
            if($doctor->num_rows()>0){
                return $doctor->row();
            }else{
                return false; //Cuando no existen clientes registrados
            }
        }
        
        //Consultar los datos de las clinicas
        public function visualizarDoctores() {
			$this->db->select('latitud_doc_ca, longitud_doc_ca, nombre_doc_ca, id_doc_ca');
			$consulta = $this->db->get('doctor');
			return $consulta->result();
		}

    }//Cierre de la clase

?>