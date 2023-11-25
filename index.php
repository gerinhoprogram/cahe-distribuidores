<!DOCTYPE html>

<head>
    <?php
        include('header.php');
	?>
        <title>
            Cahe - Produtos
        </title>
</head>

<body>
    <header>
        <?php
            include('banner.php');
        ?>
    </header>
    <main>
        <div class='bloco-cahe'>
            <div class='linha'>
                <div class='colunas lg-6 md-12 pq-12 bloco-esq'>
                    <div class='quadro-foto'>
                        <img src="core/imagens/foto1.jpg" alt="Cahe" title="Cahe">
                    </div>
                </div>
                <div class='colunas lg-6 md-12 pq-12 bloco-dir'>
                    <span>
                        A Cahe é uma empresa brasileira especializada em produtos de higiene e cuidados infantis, aliás, para a Cahe o cuidado infantil tem um sentido muito especial, sempre presente no processo de produção.
                        Uma empresa que vai além de utilizar matérias primas de qualidade para cada produto, aplicando CARINHO, FELICIDADE e RESPEITO por você e seu bebê.<br>
                        É por isso, que a Cahe chega cada vez mais, nos lares brasileiros, surgindo na hora do banho, da higiene, do soninho e principalmente no sorriso de conforto do seu filho.
                    </span>
                </div>
            </div>
        </div>
        <div class='linha'>
            <div class='colunas lg-12 md-12 pq-12'>
                <h2>Nossos Produtos</h2>
                <div id='galeria'>
                    <div class='owl-carousel'>
                        <?php
                            $sql = "SELECT * FROM produtos";
                            $stmt = $PDO->prepare($sql);
                            $stmt->execute();
                            $rows = $stmt->rowCount();
                            if ($rows > 0) {
                                while ($result = $stmt->fetch()) {
                                    echo"<div class='carousel-fotos'>
                                    <img src='".$result['pro_foto']."' title='Cahe Produtos' alt='Cahe Produtos'>
                                    </div>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class='linha-descontos'>
            <div class='linha'>
                <div class='colunas lg-6 md-12 pq-12'>
                    <div class='bloco-inclinado'>
                        <p style="font-weight: 700;">
                            FECHE NEGÓCIO<br>
                            <span>AGORA!</span>
                        </p>
                    </div>
                </div>
                <div class='colunas lg-6 md-12 pq-12'>
                    <div class="retangulo">
                        <p style="font-weight: 700; text-transform: uppercase; ">
                            E aproveite os <span>descontos</span><br> exclusivos para <br><span>distribuidores</span>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="linha fale-conosco">
            <div class="colunas lg-12 md-12 pq-12" style="padding: 0px;">
                <h2>Clique no botão abaixo para falar<br>direto com nossa equipe</h2>
                <a href="http://api.whatsapp.com/send?1=pt_BR&phone=551157047911" target="_blank" rel="noreferrer" title="Fale conosco">
                    <div class='botao-wp'>
                        <div class='icone'>
                            <i class="fa fa-whatsapp fa-4x" aria-hidden="true"></i>
                        </div>
                        <p>FALE
                            <BR> CONOSCO</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="linha-amarela">
            <div class='linha'>
                <div class="colunas lg-12 md-12 pq-12">
                    <h3>SUCESSO</h3>
                    <p>ESSE É O NOSSO GRANDE OBJETIVO, COLABORAR, <br> PARA QUE VOCÊ TENHA SUCESSO EM SEU NEGÓCIO. </p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include('rodape.php'); ?>
    </footer>
</body>

</html>


<!-- owlCarousel -->
<link rel="stylesheet" href="core/css/owlcarousel/owl.carousel.css">
<script src="core/mod_includes/js/owl.carousel.js"></script>
<!-- Fim ----- owlCarousel -->

<script type="text/javascript">
    jQuery('.owl-carousel ').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        margin: 20,
        responsiveClass: true,
        dotClass: true,
        nav: false,
        responsive: {
            0: {
                items: 1,
                nav: false
            },

            850: {
                items: 3,
                nav: false
            },
            1450: {
                items: 4,
                nav: false
            }
        }
    })
</script>