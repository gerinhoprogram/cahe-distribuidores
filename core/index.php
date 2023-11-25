<?php
include ('url.php');
include ('mod_includes/php/ctracker.php');
//include ('mod_includes/php/connect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">

<link rel="stylesheet" type="text/css" href="css/font/stylesheet.css">
<script type="text/javascript" src="mod_includes/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="mod_includes/js/funcoes.js"></script>
<script src="mod_includes/js/wow.min.js"></script>
<script>
	 new WOW().init();
</script>

<title>Cahe - De Família para Família</title>
</head>

<body>
<?php include ('mod_topo/topo.php');
include	('mod_includes/php/funcoes-jquery.php');
?>
<div class="wrapper" id="home">
	<div class="home">
        <div class="bloco wow zoomIn">
        	<br>
        	<center><a href="bubble.php"><img src="imagens/icon-bubble.png"></a></center>
        </div>
        <div class="bloco wow zoomIn">
        	<br>
        	<center><a href="/fraldaspeppapig" target="_blank"><img src="imagens/icon-peppa.png"></a></center>
        </div>
        <div class="bloco wow zoomIn">
        	<br>
        	<center><a href="infantil"><img src="imagens/icon-cahe.png"></a></center>
        </div>
      <div class="bloco wow zoomIn">
        	<br>
        	<center><a href="higiene_beleza"><img src="imagens/icon-higienicos.png"></a></center>
        </div>
        <div class="bloco centro wow zoomIn">
        	<br>
            <center><a href="adulto"><img src="imagens/icon-confort.png"></a></center>
        </div>
    </div>
</div>

<div class="youtube">
	<div id="youtube">
        <div class="bloco1">
        	<div style="margin-top: 86px;" >
            	<img src="imagens/cahe-play.png" width="100px">
                <img src="imagens/app.png" width="30%">
                    <a href="https://play.google.com/store/apps/details?id=com.cahe.CahePlay" target="_blank"><img src="imagens/android.png" width="100px"></a> 
                    <a href="https://itunes.apple.com/br/app/caheplay/id1380372753?mt=8" target="_blank"><img src="imagens/apple.png" width="100px"></a>
           
            </div>
        	<div class="bloco2">
            <center><iframe width="98%" height="150" src="https://www.youtube.com/embed/XV2aAH5wqec" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
                    </div>
<div class="bloco2">
            <center><iframe width="98%" height="150" src="https://www.youtube.com/embed/P9FNJFBv1Mc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
            </div>
            <div class="bloco2">
            <center><iframe width="98%" height="150" src="https://www.youtube.com/embed/78NoLyMGZIU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
</div>
        
</div>
        <div class="bloco3">
        	<a href="https://www.youtube.com/channel/UCrpC5H__88vwnD-dUT9IYVQ" target="_blank"><img src="imagens/inscreva-se.png"></a>  
        </div>
    </div>
</div>

<div class="banner-home">  
    <div class="wrapper">
    <div id="sobrenos">
    <div class="bloco">
        <p class="titulo"> Uma opção completa para cuidar bem dos pequenos</p>
        <p>O Box do Bebê é uma caixa com 7 produtos <br>
         que são ideais para chás de bebês e outras ocasiões.</p>
 <p>    2 Pacotes de fraldas Ultra Conforto,<br>
 1 Pomada de 50g. protetora contra
    assaduras<br>
 1 Pacote com 50 toalhas umedecidas<br>
 1 Pote com 70 lenços umedecidos<br>
 1 Shampoo de 200ml. <br>
 1 Condicionador de 200ml.<br>
 1 Presente</p>
        </div>
    </div>
</div>
	<img src="imagens/abertura.png" width="100%" style="margin-top:-250px">
</div>
<div class="wrapper">
	<div id="sobre">
        <div class="bloco">
        <p class="titulo"> A Cahe</p>
        <p>A Cahe é uma empresa brasileira especializada em produtos de higiene e cuidados infantis, aliás, para a Cahe o cuidado infantil tem um sentido muito especial, sempre presente no processo de produção.

       	<p>Uma empresa que vai além de utilizar matérias primas de qualidade para cada produto, aplicando CARINHO, FELICIDADE e RESPEITO por você e seu bebê.

        <p>É por isso, que a Cahe chega cada vez mais, nos lares brasileiros, surgindo na hora do banho, da higiene, do soninho e principalmente no sorriso de conforto do seu filho.

        <p>Muito Obrigado por escolher a Cahe
        </div>
        <div class="bloco2">
        	<br>
        	<center><video width="320" height="240" controls>
  <source src="video/cahee.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video></center>
        </div>
    </div>
</div>



<!--<div class="wrapper">

    <div id="sobre">
            <hr size="1" style="border:2px dashed #005EA4;">

        <div class="blocoum">
            <center><img src="imagens/dica-1.jpg"></center>
        </div>
        <div class="blocodois">
            <center><img src="imagens/dica-2.jpg"></center>
        </div>
    </div>
</div>

<div class="home-noticias">
	<div id="dicas-destaque">
       	<?php
//			$nt_data = date("Y-m-d");
//				$sql = "SELECT * FROM cadastro_noticias 
//						WHERE  nt_data <= :nt_data AND nt_destaque = :nt_destaque
//						ORDER BY nt_data DESC LIMIT 3
//						";
//				$stmt = $PDO->prepare($sql);
//				$stmt->bindParam(':nt_data', 	$nt_data);
//				$stmt->bindValue(':nt_destaque', 1);
//				$stmt->execute();
//				$rows = $stmt->rowCount();
//				if ($rows > 0)
//				{
//					while($result = $stmt->fetch())
//					{
//						$foto = str_replace("../","",$result['nt_imagem']);
//						echo "
//							<a href='dica/".$result['nt_url']."'><div class='bloco-destaque'>
//								<p class='titulo' style='color:#fff'>".$result['nt_titulo']."</p>
//								<div  class='foto' style='background: url(\"$foto\") no-repeat center center ; background-size:cover; display:table'>
//									<p class='descricao'>".truncate(strip_tags(preg_replace("/<img[^>]+\>/i", " ",str_replace("<br />"," ",str_replace("</p>"," ",str_replace("<p>"," ",$result['nt_descricao']))))),100)."</p>
//								</div>
//							</div></a>
//						";
//					}
//				}
			?> 
    </div>
</div> -->
<?php include ('mod_rodape/rodape.php')?>

</body>
</html>