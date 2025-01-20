<?php
    class Maternidad extends CI_Model{
        //contructor
        function __construct()
        {
            parent::__construct();
        }
        //Insercion de clientes en la bdd
        function insertar($datos){
            $this->db->insert('maternidad',$datos);
        }
        //Consulta de todos los clientes
        function obtenerTodos(){
            $listadoMaternidades=$this->db->get('maternidad'); //select / from clientes
            if($listadoMaternidades->num_rows()>0){
                return $listadoMaternidades->result(); //Retornamos el listado de clientes, en el caso de que SI EXISTA
            }else{
                return false; //Cuando no existen clientes registrados
            }
        }
        //Eliminacion de datos
        function eliminarPorId($id){
            //delete from cliente where id_cli=3;
            $this ->db->where('id_mat' ,$id);
            return $this->db->delete('maternidad');
        }
        //Consulta de un cliente especifico por su id
        function consultarPorId($id){
            $this ->db->where('id_mat' ,$id);
            $maternidad=$this->db->get('maternidad');
            //Validando que el cliente consultado exista en la bdd
            if($maternidad->num_rows()>0){
                return $maternidad->row();
            }else{
                return false; //Cuando no existen clientes registrados
            }
        }
        


    }//Cierre de la clase

?>