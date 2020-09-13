<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
error_reporting(E_ALL);
ini_set("display_errors", 1);

require '../config.php';
include '../src/Artigos.php';

$artigo = new Artigos($mysql);
$artigos = $artigo->exibirTodosArtigos();
var_dump($artigos);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página administrativa</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <div id="container">
        <h1>Página Administrativa</h1>
        <div>
            <?php foreach($artigos as $artigo): ?>
                <div id="artigo-admin">
                    <p><?php echo $artigo['titulo']?></p>
                    <nav>
                        <a class="botao" href=<?php echo "/admin/editar-artigo.php?id=".$artigo['id']?>>Editar</a>
                        <a class="botao" href=<?php echo "/admin/excluir-artigo.php?id=".$artigo['id']?>>Excluir</a>
                    </nav>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="botao botao-block" href="/admin/adicionar-artigo.php">Adicionar Artigo</a>
    </div>
</body>

</html>