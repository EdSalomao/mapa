<style>
    section,article,h5,h6, {
        border:2px solid red;
        margin:3px;margin-bottom:10px;border-radius:10px; padding:5px;
    }
    header {
        color:black;background-color:#FFFACD;margin-bottom:3px;
        border:2px solid red;
        margin:3px;margin-bottom:10px;border-radius:10px; padding:5px;
        width="200" height="600"
    }
    body {
        font-family:Verdana,sans-serif; font-size:0.8em;
        margin:3px;margin-bottom:10px;border-radius:10px; padding:5px;
    }
    footer {
        border:2px solid red;
		font-family:Verdana,sans-serif;font-size:0.7em;
		color:black;background-color:khaki;margin-bottom:3px;
    }


</style>

<header>
    <div style='position:relative; top:0px; left:0px;' width="1300" height="300" </div>
	    <img src="imagens/prato_cabecalho.jpg" alt="prato_cabecalho" width="1270" height="300" />
    <div style='position:absolute; top:55px; left:6px;' width="200" height="150" </div>
        <img src="imagens/logo.jpg" alt="logo" width="120" height="100" />
    <div class="textDiv" >
    <div style="text-align: center; font-family:Verdana,sans-serif; color: #8B4513; font-size:4.0em" >  
        <p><i id="spaceText" class="fas fa-search"</i>Marmitas da Rita</p>
    </div>
    </div>
	
</header>
</header>

<?php
    
    $pratos = array(
       0 => array("id" => "1", "nome" => "bife a cavalo", "ingredientes" => "arroz, feijão, bife, ovo frito, salada", "tamanho" => "500g", "preço" => "R$ 13,00", "imagem" => "imagens/bife_cavalo.jpg"),
       1 => array("id" => "2", "nome" => "bife", "ingredientes" => "arroz, feijão, bife, fritas", "tamanho" => "500g", "preço" => "R$ 13,00", "imagem" => "imagens/bife.jpg"),
       2 => array("id" => "3", "nome" => "espaguete a carbonara", "ingredientes" => "espaguete, creme de gemas, bacon", "tamanho" => "500g", "preço" => "R$ 13,00", "imagem" => "imagens/carbonara.jpg"),
       3 => array("id" => "4", "nome" => "estrogonofe de frango", "ingredientes" => "arroz, estrogonofe de frango, batata palha", "tamanho" => "500g", "preço" => "R$ 13,00", "imagem" => "imagens/estrogonofe_frango.jpg"),
       4 => array("id" => "5", "nome" => "feijoada", "ingredientes" => "arroz, feijoada, couve, bisteca de porco", "tamanho" => "500g", "preço" => "R$ 13,00", "imagem" => "imagens/feijoada.jpg"),
       5 => array("id" => "6", "nome" => "panqueca de frango", "ingredientes" => "arroz, panqueca de frango, salada", "tamanho" => "500g", "preço" => "R$ 13,00", "imagem" => "imagens/panqueca_frango.jpg"),
       6 => array("id" => "7", "nome" => "picadinho de carne", "ingredientes" => "arroz, picadinho de carne, fritas, salada", "tamanho" => "500g", "preço" => "R$ 13,00", "imagem" => "imagens/picadinho_carne.jpg"),
       7 => array("id" => "8", "nome" => "sobrecoxa de frango", "ingredientes" => "arroz, feijão, sobrecoxa de frango, fritas, salada", "tamanho" => "500g", "preço" => "R$ 13,00", "imagem" => "imagens/sobrecoxa_frango.jpg"),
     );
     foreach($pratos as $key => $value){
?>

<article> 
    <a href=#><img src=<?=$value["imagem"];?>></a>
    <h3><?=$value["nome"];?></h3>
</article>

<?php
    }
?>

<footer>  
<div style="text-align: center;">
		CLS 115 - BLOCO A LJ 2 - BRASÍLIA/DF. CEP: 70.385-510<br>
		FUNCIONAMENTO - ALMOÇO: DE TERÇA A SÁBADO DE 12H ÀS 15H E DOMINGO DE 12H ÀS 15:45H<br>
		Desenvovido por Edclei da Costa Almeida - mat. 20160877-5<br>
</div> 
</footer>
