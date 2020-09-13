<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
error_reporting(E_ALL);
ini_set("display_errors", 1);

require '../config.php';
include '../src/Artigos.php';

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    $artigo = new Artigos($mysql);
    $artigos = $artigo->exibirArtigoPorID($_GET['id']);
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigos($mysql);
    $artigos = $artigo->editar($_POST['id'], $_POST['titulo'], $_POST['conteudo']);

    header('location: http://webapp.com.br/admin/index.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Editar Artigo</title>
</head>

<body>
    <div id="container">
        <h1>Editar Artigo</h1>
        <form action="editar-artigo.php" method="post">
            <p>
                <label for="titulo">Digite o novo título do artigo</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" value="<?php echo $artigos['titulo']; ?>" />
            </p>
            <p>
                <label for="conteudo">Digite o novo conteúdo do artigo</label>
                <textarea class="campo-form" type="text" name="conteudo" id="conteudo" value=""><?php echo $artigos['conteudo'];?></textarea>
            </p>
            <p>
                <input type="hidden" name="id" value="<?php echo $artigos["id"]; ?>" />
            </p>
            <p>
                <button class="botao">Editar Artigo</button>
            </p>
        </form>
    </div>
</body>

</html>