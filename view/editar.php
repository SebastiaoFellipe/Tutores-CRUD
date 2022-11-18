<?php
include_once '../controller/tutorController.php';
$t_controller = new tutorController();
$conexao = new PDO("mysql:dbname=talhorarios;localhost", "root", "");
$comando = $conexao->prepare("select * from tutor");
$comando->execute();
$tutor = $comando->fetchAll(PDO::FETCH_ASSOC);
foreach ($tutor as $key => $value) {
    $matricula = $value['MATRICULA_ALUNO'];
    $nomecompleto = $value['NOME'];
    $email = $value['EMAIL'];
    $numerotelefone = $value['TELEFONE'];
    $materia = $value['MATERIA'];
    $senha = $value['SENHA'];
}

?>
<!doctype html>
<html lang='pt-br'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>TuTores</title>
    <link rel='stylesheet' href='../css/cadastro.css'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3' crossorigin='anonymous'></script>
</head>

<body style='background-color: #ddd;'>
<header>
        <h1 class='text-center'>Editar Tutores</h1>
        <a href='index.php' class='linkbtn'>Voltar</a>
    </header>
    <div class='container shadow p-3 mb-5 bg-body rounded'>
        <form action='../controller/acoes.php?operacao=atualizar_tutor' method='POST'>
            <h2>Dados pessoais</h2><br>
            <div class='row g-2'>
                <div class='col-md-9'>
                    <label for='nomecompleto'>Nome Completo</label><br>
                    <input class='form-control' type='text' name='nomecompleto' placeholder='Nome Completo' value= '<?php echo $nomecompleto ?>'>
                </div>
                <div class='col-md-3'>
                    <label for='matricula'>Matrícula</label><br>
                    <input class='form-control' type='text' name='matricula' placeholder='Matrícula' value= '<?php echo $matricula ?>' readonly>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-5'>
                    <label for='email'>E-mail</label><br>
                    <input class='form-control' type='email' name='email' placeholder='email@email.com' value= '<?php echo $email ?>'>
                </div>
                <div class='col-md-3'>
                    <label for='numerotelefone'>Número de Telefone</label><br>
                    <input class='form-control' type='text' name='numerotelefone' placeholder='(xx) xxxxx-xxxx' value= '<?php echo $numerotelefone ?>'>
                </div>
                <div class='col-md-4'>
                    <label for='materia'>Matéria</label>
                    <select class='form-select' name='materia'>
                        <option selected> <?php echo $materia ?> </option>
                        <option value='Matemática'>Matemática</option>
                        <option value='Programação'>Programação</option>
                        <option value='Português'>Português</option>
                        <option value='Solos'>Solos</option>
                        <option value='Física'>Física</option>
                        <option value='Químimca'>Químimca</option>
                        <option value='Eletricidade e Eletrônica Analógica e/ou Digital'>Eletricidade e Eletrônica Analógica e/ou Digital</option>
                        <option value='Área Técnica-Irrigação'>Área Técnica-Irrigação</option>
                    </select>
                </div>
            </div>
                <div class='col-md-4'>
                    <label for='senha'>Senha</label><br>
                    <input class='form-control' type='password' placeholder='Senha' name='senha' value='<?php echo $senha ?>'>
                    <div id='passwordHelpBlock' class='form-text'>
                        Sua senha deve conter de 8 a 20 caracteres.
                    </div>
                </div>
            <div class='d-flex justify-content-end'>
                <input type='submit' class='linkbtn' value='Editar'>
            </div>   
        </form>
</body>
</html>
