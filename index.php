<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'config.php';
include 'src/Artigos.php';

$artigo = new Artigos($mysql);
$artigos = $artigo->exibirTodosArtigos();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>Meu Blog</h1>
        <?php foreach($artigos as $artigo): ?>
            <h2>
                <a href=<?php echo"artigo.php?id=".$artigo['id'];?>>
                    <?php echo $artigo['titulo'];?>
                </a>
            </h2>
            <p>
                <?php echo nl2br($artigo['conteudo']);?>
            </p>
        <?php endforeach; ?>   
    </div>
</body>

</html>