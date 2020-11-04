<? php 
$ servername = "localhost" ;
$ username = "root" ;
$ senha = "" ;
$ database = "fseletro" ;


$ conn = mysqli_connect ( $ servername , $ username , $ password , $ database );

if (! $ conn ) {
    die ( "A conexão Falhou" . mysqli_connect_error ());
}

?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Produtos - Full Stack Eletro </title>
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
    <h1> Produtos </h1>
    </header>
    <hr>
    <table border=0 width="100%" cellpadding=20>
        <tr>
            <td rowspan="5" width"20%" valing="top"> <div class="blocoprodutos">
            <div class="alict"> <h3><font face="Arial">Categorias</font></h3> </div>   
                <ul>   <div class="alict2">
                    <li onclick="exibir_todos()">Todos (12)</li>
             <li onclick="exibir_categoria('gelageira')"><font face="Arial" size="3">Geladeiras (3)</font></li>
             <li onclick="exibir_categoria('fogao')"><font face="Arial" size="3">Fogões (2)</font></li>
             <li onclick="exibir_categoria('microondas')"><font face="Arial" size="3">Microondas (3)</font></li>
             <li onclick="exibir_categoria('lavadoraderoupas')"><font face="Arial" size="3">Lavadora de Roupas (2)</font></li>
             <li onclick="exibir_categoria('lavaloucas')"><font face="Arial" size="3" >Lava-Louças (2)</font></li>
                </div></ul>
             </div></td></tr>
        
            <tr>
                <td rowspan="5" width"20%" valing="top">

                <? php

                $ sql = "selecione * de tb_produtos" ;
                $ resultado = $ conn -> consulta ( $ sql );

                if ( $ result -> num_rows > 0 ) {

               while ( $ rows = $ result -> fetch_assoc ()) {

                ?>

         < div  class = " produtos " >

          <? php

          $ sql = "selecione * de tb_produtos" ;
          $ resultado = $ conn -> consulta ( $ sql );

          if ( $ result -> num_rows > 0 ) {

          while ( $ rows = $ result -> fetch_assoc ()) {

          ?>

       < div  class = " box-produtos " id = " <? php  echo  $ rows [ " categoria " ] ?> " style = " display: inline-block " >
       < img  class = " imagem_produtos "   src = " <? php  echo  $ rows [ " imagem " ] ?> " width = " 120px " onclick = " destaque (this) " >
       < Br >
       < p  class = " descrição " > <? php  echo  $ rows [ "descricao" ] ?> </ p >
       < hr >
       < p  class = " descrição " > < strike > R $ <? php  echo  $ rows [ "preco" ] ?> </ strike > </ p >
       < p  class = " preço " > R $ <? php  echo  $ rows [ "precofinal" ] ?> </ p >
       </ div >

       <? php
    }

     } else {
     echo  "Nenhum produto cadastrado" ;
    }

    ?>

</table>
    <tr><td>
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
