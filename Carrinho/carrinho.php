<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<center>
<h3>CARRINHO DE COMPRAS</h3>
<table width="380" border="1">
  <tr>
    <td>Produto</td>
    <td>Marca</td>
    <td>Valor</td>
    <td>&nbsp;</td>
  </tr>
  <?php
  //inicia a sessão
session_start();
//variavel para o total
$valortotal = 0;
//pegando o vetor de produtos
if(isset($_SESSION['produtos']))//verificar se existe a sessão produtos
$produtos = $_SESSION['produtos']; //adicionar sessão em variável
if(!empty($_GET))
{
    //pegando o produto escolhido
    $codigo = $_GET['codigo'];
    //armazenando em uma nova variavel de  sessão
    $_SESSION['carrinho'][] = $produtos[$codigo]['codigo'];
}
if(isset($_SESSION['carrinho']))//verificar se existe
{
$qtd = count($_SESSION['carrinho']);
for($i=0;$i<$qtd;$i++)//rodando o vetor na sessão para exibir os dados
{
    $codigo_adicionado = $_SESSION['carrinho'][$i];
    $nome = $produtos[$codigo_adicionado]['nome'];
    $valor = $produtos[$codigo_adicionado]['valor'];
    $marca = $produtos[$codigo_adicionado]['marca'];
?>
   <tr>
    <td><?php echo $nome;?></td>
    <td><?php echo $marca;?></td>
    <td>R$ <?php echo $valor;?></td>
    <td><?php echo"<a href='excluir.php?codigo=$i'>Excluir</a>";?></td>
  </tr>
  <?php
  
  //calculando o valor total
  $valortotal += $valor;
}
}
  ?> 
</table>
<?php
//mostrando o valor total
 echo '<br><strong>Valor total: R$ </strong>'.number_format("$valortotal",2,",",".");
?>
<p>&nbsp;</p>
<p><a href="Principal.php">Voltar para compras</a></p>
<p><a href="limpar.php">Limpar carrinho</a></p>
</center>
</body>
</html>