<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
error_reporting(E_ALL);
ini_set("display_errors", 1);

require '../config.php';
include '../src/Artigos.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigos($mysql);
    $artigos = $artigo->excluirArtigo($_POST['id']);

    header('location: http://webapp.com.br/admin/index.php');
    die();
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Excluir Artigo</title>
</head>

<body>
    <div id="container">
        <h1>Você realmente deseja excluir o artigo?</h1>
        <form method="post" action="excluir-artigo.php">
            <p>
                <input type="hidden" name="id" value=<?php echo $_GET['id']; ?> />
                <button class="botao">Excluir</button>
            </p>
        </form>
    </div>
</body>

</html>