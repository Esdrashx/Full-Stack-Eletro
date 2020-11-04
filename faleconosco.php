  
<? php 
$ servername = "localhost" ;
$ username = "root" ;
$ senha = "" ;
$ database = "fseletro" ;


$ conn = mysqli_connect ( $ servername , $ username , $ password , $ database );

if (! $ conn ) {
    die ( "A conexão Falhou" . mysqli_connect_error ());
};

if ( isset ( $ _POST [ 'nome' ]) && isset ( $ _POST [ 'msg' ])) {
    $ nome = $ _POST [ 'nome' ];
    $ msg = $ _POST [ 'msg' ];
    
    $ sql = "inserir em comentários (nome, msg) valores ('$ nome', '$ msg')" ;
    $ resultado = $ conn -> consulta ( $ sql );
    
}

?>  

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Contato - Full Stack Eletro </title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="./js/funcoes.js"></script>
</head>
<body>
    <div class="margem">
   <!-- Menu -->
   <table width="100%" class="menu">
       <tr>
   <td align="center" width="25%"><a href="index.php"><img width= "200px" src="./imagens/logo - teste.jpg" alt="Full Stack Eletro"></a></td>
   <td align="center" width="25%"><a href="produtos.php"><font size="6">Produtos</font></a></td>
   <td align="center" width="25%"><a href="loja.php"><font size="6">Nossas Lojas</font></a></td>
   <td align="center" width="25%"><a href="faleconosco.php"><font size="6">Fale Conosco</font></a></td> 
       </tr> 
   </table>
   
<!-- Fim do menu -->
<header>
<h1> Contato </h1>
</header>
<hr>
<table border=0 width="100%" cellpadding="20">
    <tr>
        <td width="50%" align="center">
            <img src="./imagens/img - email.png" width="40px">
            <font face="Arial" size="4">contato@fullstackeletro.com</font>
        </td>

        <td width="50%" align="center">
            <img src="./imagens/whatsapp-logo-03.png" width="40px">
            <font face="Arial" size="4">(11) 99999 - 9999</font>
        </td>
    </tr>

</table>
<div class="blococontato">
    <div class="alic">
<form>
    <h4>Nome: </h4>
    <input type="test" style="width: 250px;">
    <h4>Mensagem: </h4>
    <textarea style="width: 250px;"></textarea>
    <input type="submit" value="Enviar">
 </form> 
 <? php
            $ sql = "selecione * dos comentários" ;
            $ resultado = $ conn -> consulta ( $ sql );

            if ( $ result -> num_rows > 0 ) {
                while ( $ rows = $ result -> fetch_assoc ()) {
                    echo  "Dados:" , $ rows [ 'dados' ], "<br>" ;
                    echo  "Nome:" , $ rows [ 'nome' ], "<br>" ;
                    echo  "Mensagem:" , $ rows [ 'msg' ], "<br>" ;
                    echo  "<hr>" ;
                }
            } else {
                echo  "Ainda não há comentários" ;
            }
    
    ?>

</div>
 </div>
    <br> <br> <br> <br> <br>
    <br> <br> <br> <br> <br>
    <br> <br> <br> <br> <br>
  
    <footer id="rodape"> 
      <h3 id="formasdepagamento">Formas de Pagamento</h3>
      <img src="./imagens/logo pagamento.jpg" alt="Formas de Pagamento" width ="500px">
      <p> &copy; Recode Pro </p>
    </footer>
    </div>
</body>
</html>