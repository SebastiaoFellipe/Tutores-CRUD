<?php
include_once '../controller/tutorController.php';
$t_controller = new tutorController();
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TuTores</title>
    <link rel="stylesheet" href="../css/tutores.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body style="background-color: #ddd;">
    <header>
        <h1 class="text-center">Lista de Tutores</h1>
        <a href="index.php" class="linkbtn">Voltar</a>
    </header>
    <?php $t_controller->visualizar_tutor(); ?>
</body>

</html>