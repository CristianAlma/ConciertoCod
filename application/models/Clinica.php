<?php
    class Clinica extends CI_Model{
        //contructor
        function __construct()
        {
            parent::__construct();
        }
        //Insercion de clientes en la bdd
        function insertar($datos){
            $this->db->insert('clinica',$datos);
        }
        //Consulta de todos los clientes
        function obtenerTodos(){
            $listadoClinicas=$this->db->get('clinica'); //select / from clientes
            if($listadoClinicas->num_rows()>0){
                return $listadoClinicas->result(); //Retornamos el listado de clientes, en el caso de que SI EXISTA
            }else{
                return false; //Cuando no existen clientes registrados
            }
        }
        //Eliminacion de datos
        function eliminarPorId($id){
            //delete from cliente where id_cli=3;
            $this ->db->where('id_cli' ,$id);
            return $this->db->delete('clinica');
        }
        //Consulta de un cliente especifico por su id
        function consultarPorId($id){
            $this ->db->where('id_cli' ,$id);
            $clinica=$this->db->get('clinica');
            //Validando que el cliente consultado exista en la bdd
            if($clinica->num_rows()>0){
                return $clinica->row();
            }else{
                return false; //Cuando no existen clientes registrados
            }
        }

    }//Cierre de la clase

?>