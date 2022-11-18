<?php

include_once '../model/tutorBean.php';
include_once '../controller/tutorController.php';

$op = $_GET['operacao'];

if($op == "deletar_tutor"){
    $MATRICULA = $_GET['MATRICULA'];

    $t_bean = new tutorBean(NULL,NULL,NULL,NULL,NULL,NULL);
    $t_bean->MATRICULA = $MATRICULA;

    $t_controller = new tutorController();
    $v2 = $t_controller->deletar_tutor($t_bean);

    if($v2){
        ?>
        <script type="text/javascript">
            alert("Remoção realizada!");
            window.location="../view/tutores.php";
        </script>
    <?php
    }
    else { ?>
      <script type="text/javascript">
            alert("Problema na remoção! Contate o ADM!");
            window.location="../view/tutores.php";
        </script>
    <?php
    }
}

if($op == "inserir_tutor"){
    $matricula = $_POST['matricula'];
    $nomecompleto = $_POST['nomecompleto'];
    $email = $_POST['email'];
    $numerotelefone = $_POST['numerotelefone'];
    $materia = $_POST['materia'];
    $senha = $_POST['senha'];

    $t_bean = new tutorBean($matricula, $nomecompleto, $email, $numerotelefone,  $materia, $senha);
    $t_controller = new tutorController();
    $v3 = $t_controller->inserir_tutor($t_bean);

    if($v3){
        ?>
        <script type="text/javascript">
            alert("Cadastro realizado!");
            window.location="../view/cadastro.php";
        </script>
    <?php
    }
    else { ?>
      <script type="text/javascript">
            alert("Problema no cadastro! Contate o ADM!");
            window.location="../view/cadastro.php";
        </script>
    <?php
    }
}

if($op == "atualizar_tutor"){
    
    $matricula = $_POST['matricula'];
    $nomecompleto = $_POST['nomecompleto'];
    $email = $_POST['email'];
    $numerotelefone = $_POST['numerotelefone'];
    $materia = $_POST['materia'];
    $senha = $_POST['senha'];

    $t_bean = new tutorBean($matricula, $nomecompleto, $email, $numerotelefone, $materia, $senha);
    $t_controller = new tutorController();
    $v4 = $t_controller->atualizar_tutor($t_bean);

    if($v4){
        ?>
        <script type="text/javascript">
            alert("Atualização realizada!");
            window.location="../view/tutores.php";
        </script>
    <?php
    }
    else { ?>
      <script type="text/javascript">
            alert("Problema na atualização! Contate o ADM!");
            window.location="../view/tutores.php";
        </script>
    <?php
    }
}

?>