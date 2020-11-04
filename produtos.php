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
            
            <!--Produtos Geladeiras-->
            <div class="produtos" id="geladeira" style="display:block;">
            <tr><td>
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/Brastemp_Geladeira.webp" width="220px" onclick="destaque(this)">
                <br>
                <font size="2">Geladeira1 Brastemp Frost Free Duplex 375 litros</font>
                <hr>
                <font size="2"><strike>R$3.479,00</strike> </font><br>
                <font size="4" color="red">R$2.642,13</font><br> 
            </td>
            </div>

            <div class="produtos" id="geladeira" style="display:block;">
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/brastemp 2.jpg" width="220px" onclick="destaque(this)">
                <br>
                <font size="2">Geladeira2 Brastemp Frost Free Side by Side 3 Portas 540 Litros</font>
                <hr>
                <font size="2"><strike>R$5.999,90</strike> </font><br>
                <font size="4" color="red">R$5.299,90</font><br> 
            </td>
            </div>

            <div class="produtos" id="geladeira" style="display:block;">
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/geladeira 3.webp" width="220px" onclick="destaque(this)">
                <br>
                <font size="2">Geladeira3 Brastemp Frost Free Inverse 573 litros</font>
                <hr>
                <font size="2"><strike>R$5.229,00</strike> </font><br>
                <font size="4" color="red">R$4.199,00</font><br> 
            </td>
            </div>
            <!--Fim Produtos Geladeiras-->

            <!--Produtos Fogões-->
            <div class="produtos" id="fogao" style="display:block;">
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/Fogão 1.jpg" width="220px" onclick="destaque(this)">
                <br>
                <font size="2">Fogão1 5 Bocas Fenix com Mesa de Vidro Acendimento Automático Glass</font>
                <hr>
                <font size="2"><strike>R$1.017,00</strike> </font><br>
                <font size="4" color="red">R$829,90</font><br>
                </td></tr> 
            </td>
        </div>
        </table>
     
        <table border=0 width="100%" cellpadding=20>
            <tr><td>
                <div class="produtos" id="fogao" style="display:block;">
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/fogão 2.webp" width="220px" onclick="destaque(this)">
                <br>
                <font size="2">Fogão2 Brastemp 5 Bocas Com Botões Removíveis E Exclusivo Aro Protetor</font>
                <hr>
                <font size="2"><strike>R$1.769,00</strike> </font><br>
                <font size="4" color="red">R$1.329,90</font><br>     
            </td>
            </div> 
            <!--Fim Produtos Fogões-->

            <!--Produtos Microondas-->
            <div class="produtos" id="microondas" style="display:block;">
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/Microondas 1.webp" width="220px" onclick="destaque(this)">
                <br>
                <font size="2">Forno de Micro-ondas1 31 Litros MEF41 Branco - Electrolux</font>
                <hr>
                <font size="2"><strike>R$745,00</strike> </font><br>
                <font size="4" color="red">R$549,00</font><br> 
            </td>
            </div>
         
            <div class="produtos" id="microondas" style="display:block;">
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/microondas 2.webp" width="220px" onclick="destaque(this)">
                <br>
                <font size="2">Forno de Micro-ondas2 Panasonic 32 Litros</font>
                <hr>
                <font size="2"><strike>R$669,00</strike> </font><br>
                <font size="4" color="red">R$249,00</font><br> 
            </td>
            </div>
           
            <div class="produtos" id="microondas" style="display:block;">
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/microondas 3.jpg" width="220px" onclick="destaque(this)">
                <br>
                <font size="2">Micro-ondas3 Electrolux 31 Litros</font>
                <hr>
                <font size="2"><strike>R$979,90</strike> </font><br>
                <font size="4" color="red">R$749,90</font><br>
            </td></tr>
            </td> 
        </div>
        </table>

        <table border=0 width="100%" cellpadding=20>
            <!--Fim Produtos Microondas-->

            <!--Produtos Lavadora de Roupas-->
            <tr><td>
                <div class="produtos" id="lavadoraderoupas" style="display:block;">
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/lavadora 1.webp" width="220px" onclick="destaque(this)">
                <br>
                <font size="2">Lavadora de Roupas1 16 Kg LAC16 Branca Electrolux</font>
                <hr>
                <font size="2"><strike>R$2.499,99</strike> </font><br>
                <font size="4" color="red">R$1.899,99</font><br> 
            </td>
            </div>
       
            <div class="produtos" id="lavadoraderoupas" style="display:block;">
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/lavadora 2.jpg" width="220px" onclick="destaque(this)">
                <br>
                <font size="2">Lavadora de Roupas2 Electrolux 8,5Kg</font>
                <hr>
                <font size="2"><strike>R$1.399,00</strike> </font><br>
                <font size="4" color="red">R$959,90</font><br> 
            </td>
            </div>
            <!--Fim Produtos Lavadora de Roupas-->
            
            <!--Produtos Lava-Louças-->
            <div class="produtos" id="lavaloucas" style="display:block;">
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/lava-louças 1.jpg" width="220px" onclick="destaque(this)">
                <br>
                <font size="2">Lava-Louças1 de Embutir Panasonic</font>
                <hr>
                <font size="2"><strike>R$5.399,00</strike> </font><br>
                <font size="4" color="red">R$3.659,90</font><br> 
            </td>
            </div>

            <div class="produtos" id="lavaloucas" style="display:block;">
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/lava-louças 2.webp" width="220px" onclick="destaque(this)">
                <br>
                <font size="2">Lava-Louças2 Brastemp 14 serviços</font>
                <hr>
                <font size="2"><strike>R$3.599,00</strike> </font><br>
                <font size="4" color="red">R$3.139,90</font><br> 
            </td></tr> 
            </td>
        </div>
            <!--Fim Produtos Lava-Louças-->
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