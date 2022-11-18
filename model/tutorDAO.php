<?php

include_once 'tutorBean.php';

class tutorDAO
{

    function inserir_tutor($t_bean)
    {
        $conexao = new PDO("mysql:dbname=talhorarios;localhost", "root", "");
        $sql = "insert into TUTOR values ('" . $t_bean->MATRICULA . "','" . $t_bean->NOME . "','" . $t_bean->EMAIL . "','" . $t_bean->TELEFONE . "','" . $t_bean->MATERIA . "','" . $t_bean->SENHA . "')";
        $comando = $conexao->prepare($sql);
        return $comando->execute();
    }

    function deletar_tutor($t_bean)
    {
        $conexao = new PDO("mysql:dbname=talhorarios;localhost", "root", "");
        $sql = "delete from tutor where MATRICULA_ALUNO = '" . $t_bean->MATRICULA . "'";
        $comando = $conexao->prepare($sql);
        return $comando->execute();
    }

    function visualizar_tutor()
    {
        $conexao = new PDO("mysql:dbname=talhorarios;localhost", "root", "");
        $comando = $conexao->prepare("select * from tutor");
        $comando->execute();
        $tutor = $comando->fetchAll(PDO::FETCH_ASSOC);
        foreach ($tutor as $key => $value) {
            echo "
            <div class='card shadow p-3 mb-5 bg-body rounded'>
                <div class='d-flex justify-content-center align-items-center'>
                    <img src='https://cdn-icons-png.flaticon.com/512/996/996443.png' class='card-img-top' alt='usuário'>
                </div>
                <div class='card-body'>
                    <h5 class='card-title text-center'>" . $value['NOME'] . "</h5>
                    <p class='card-text'>
                    <p><strong>Matrícula:</strong> " . $value['MATRICULA_ALUNO'] . "</p>
                    <p><strong>Matéria:</strong> " . $value['MATERIA'] . "</p>
                    <p><strong>E-mail:</strong> " . $value['EMAIL'] . "</p>
                    <p><strong>Telefone:</strong> " . $value['TELEFONE'] . "</p>
                    </p>
                    
                    <div class='d-flex justify-content-between'>
                    <form method='POST' action='../view/editar.php?MATRICULA=" . $value['MATRICULA_ALUNO'] . "'>
                    <input type='submit' class='linkbtn' value='Editar'/>
                </form>
                        <form method='POST' action='../controller/acoes.php?operacao=deletar_tutor&MATRICULA=" . $value['MATRICULA_ALUNO'] . "'>
                            <input type='submit' class='linkbtn' value='Excluir'/>
                        </form>
                    </div>
                </div>
            </div>
            ";
        }
    }

    function atualizar_tutor($t_bean)
    {
        $conexao = new PDO("mysql:dbname=talhorarios;localhost", "root", "");
        $sql = "update tutor set NOME = '$t_bean->NOME', EMAIL = '$t_bean->EMAIL', TELEFONE = '$t_bean->TELEFONE', MATERIA = '$t_bean->MATERIA', SENHA = '$t_bean->SENHA' where MATRICULA_ALUNO = '$t_bean->MATRICULA '";
        // echo $sql;
        $comando = $conexao->prepare($sql);
        return $comando->execute();
    }
}
