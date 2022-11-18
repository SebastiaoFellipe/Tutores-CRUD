<?php

include_once '../model/tutorDAO.php';

class tutorController{

    private $tutor_dao;

    function __construct(){
        $this->tutor_dao = new tutorDAO;
    }

    function inserir_tutor($tutor_bean){
        return $this->tutor_dao->inserir_tutor($tutor_bean);
    }

    function atualizar_tutor($t_bean){
             return $this->tutor_dao->atualizar_tutor($t_bean);
 }

    function deletar_tutor($tutor_bean){
        return $this->tutor_dao->deletar_tutor($tutor_bean);
    }

    function visualizar_tutor(){
        return $this->tutor_dao->visualizar_tutor();
    }

}

?>