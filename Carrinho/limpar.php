<!DOCTYPE html PUBLIC "//W3C//DTD XHTML 1.0 Transitional//EN" "http: 
//www.w3.org/TR/xthml/DTD/xthml-transitional.dtd">
<html xmlns="http: //www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limpar</title>
</head>
<body>
    <?php 
    session_start();
    session_destroy();
    ?>

    <a href="Principal.php">Voltqar para compras </a>
    <a href="carrinho.php">Voltar para o carrinho </a>
</body>
</html>