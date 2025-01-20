<?php
    class Hospital extends CI_Model{
        //contructor
        function __construct()
        {
            parent::__construct();
        }
        //Insercion de clientes en la bdd
        function insertar($datos){
            $this->db->insert('hospital',$datos);
        }
        //Consulta de todos los clientes
        function obtenerTodos(){
            $listadoHospitales=$this->db->get('hospital'); //select / from clientes
            if($listadoHospitales->num_rows()>0){
                return $listadoHospitales->result(); //Retornamos el listado de clientes, en el caso de que SI EXISTA
            }else{
                return false; //Cuando no existen clientes registrados
            }
        }
        //Eliminacion de datos
        function eliminarPorId($id){
            //delete from cliente where id_cli=3;
            $this ->db->where('id_hos' ,$id);
            return $this->db->delete('hospital');
        }
        //Consulta de un cliente especifico por su id
        function consultarPorId($id){
            $this ->db->where('id_hos' ,$id);
            $hospital=$this->db->get('hospital');
            //Validando que el cliente consultado exista en la bdd
            if($hospital->num_rows()>0){
                return $hospital->row();
            }else{
                return false; //Cuando no existen clientes registrados
            }
        }
        



    }//Cierre de la clase

?>