<?php
    include('requires/verific-login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/home.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="icon" href="imagens/favicon.png">

    <title>Pagina inicial</title>
</head>

<body>

    <section class="sec-cabecalho" id="cabecalho">
        <div class="menu-home">
            <ul>
                <a class="btn-menu" href="home.php">Inicio</a>
                <a class="btn-menu" href="lista.php">Jogos</a>
                <a class="btn-menu" href="https://github.com/Tiago2002/ProjetoPw2.git" target="_blank">Github</a>
                <a class="btn-menu" href="admin/index.php" target="_blank">Administração</a>
                <a class="btn-menu" href="requires/sair-login.php">Sair</a>
            </ul>
        </div>
        <div class="background-cabecalho"></div>
    </section>

    <section class="sec-recomendados">

        <div class="txt-listra">
            <h1>Seja Bem vindo, <?php echo $_SESSION['txtUsuario']; ?></h1>
            <hr>
            <p>Últimas músicas adicionadas.</p>
        </div>

        <div class="lista-recomendados">
            <?php
            
            require('requires/conexao.php');

            $consultaConteudo= $pdo->query("SELECT * FROM tbJogos ORDER BY idJogo DESC LIMIT 10");

            while ($resultConteudo = $consultaConteudo->fetch(PDO::FETCH_ASSOC)) {													                
            echo "<div class='conteudo'>
                <div class='foto-conteudo'>
                    <a href='jogo.php?jogoSelecionado={$resultConteudo['idJogo']}'><img src={$resultConteudo['caminhoImg']}>
                </div>
                <h6 class='tit-conteudo'>{$resultConteudo['nomeJogo']}</h6>
                <div class='icone-conteudo'>
                    <svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'
                        viewBox='0 0 485.213 485.213' style='enable-background:new 0 0 485.213 485.213;'
                        xml:space='preserve'>
                        <path d='M471.882,407.567L360.567,296.243c-16.586,25.795-38.536,47.734-64.331,64.321l111.324,111.324
			c17.772,17.768,46.587,17.768,64.321,0C489.654,454.149,489.654,425.334,471.882,407.567z' />
                        <path d='M363.909,181.955C363.909,81.473,282.44,0,181.956,0C81.474,0,0.001,81.473,0.001,181.955s81.473,181.951,181.955,181.951
			C282.44,363.906,363.909,282.437,363.909,181.955z M181.956,318.416c-75.252,0-136.465-61.208-136.465-136.46
			c0-75.252,61.213-136.465,136.465-136.465c75.25,0,136.468,61.213,136.468,136.465
			C318.424,257.208,257.206,318.416,181.956,318.416z' />
                        <path
                            d='M75.817,181.955h30.322c0-41.803,34.014-75.814,75.816-75.814V75.816C123.438,75.816,75.817,123.437,75.817,181.955z' />
                    </svg>
                </div>
                <div class='fundo-efeito'> </div>
                </a>
            </div>";     
            }

            $pdo = null;
            
            ?>
            
        </div>
    </section>

    <section class="sec-indicadas">

        <div class="txt-listra">
            <h1>Indicadas para você</h1>
            <hr>
            <p>Descubra novas playlists ou acesse nossa lista e veja todas trilhas sonoras disponíveis.</p>
        </div>

        <div class="lista-indicadas">

                        <?php
            
            require('requires/conexao.php');

            $consultaConteudo= $pdo->query("select * from tbJogos ORDER BY RAND() LIMIT 10");

            while ($resultConteudo = $consultaConteudo->fetch(PDO::FETCH_ASSOC)) {													                
            echo "<div class='conteudo'>
                <div class='foto-conteudo'>
                    <a href='jogo.php?jogoSelecionado={$resultConteudo['idJogo']}'><img src={$resultConteudo['caminhoImg']}>
                </div>
                <h6 class='tit-conteudo'>{$resultConteudo['nomeJogo']}</h6>
                <div class='icone-conteudo'>
                    <svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'
                        viewBox='0 0 485.213 485.213' style='enable-background:new 0 0 485.213 485.213;'
                        xml:space='preserve'>
                        <path d='M471.882,407.567L360.567,296.243c-16.586,25.795-38.536,47.734-64.331,64.321l111.324,111.324
			c17.772,17.768,46.587,17.768,64.321,0C489.654,454.149,489.654,425.334,471.882,407.567z' />
                        <path d='M363.909,181.955C363.909,81.473,282.44,0,181.956,0C81.474,0,0.001,81.473,0.001,181.955s81.473,181.951,181.955,181.951
                        C282.44,363.906,363.909,282.437,363.909,181.955z M181.956,318.416c-75.252,0-136.465-61.208-136.465-136.46
                        c0-75.252,61.213-136.465,136.465-136.465c75.25,0,136.468,61.213,136.468,136.465
                        C318.424,257.208,257.206,318.416,181.956,318.416z' />
                        <path
                            d='M75.817,181.955h30.322c0-41.803,34.014-75.814,75.816-75.814V75.816C123.438,75.816,75.817,123.437,75.817,181.955z' />
                    </svg>
                </div>
                <div class='fundo-efeito'> </div>
                </a>
            </div>";     
            }

            $pdo = null;
            
            ?>

        </div>

    </section>

    <section class="sec-editores">

        <div class="txt-listra">
            <h1>Escolha dos editores</h1>
            <hr>
            <p>Veja as escolhas dos editores.</p>
        </div>

        <div class="lista-editores">
            <ul>
                
                            <?php
            
            require('requires/conexao.php');

            $consultaConteudo= $pdo->query("select * from tbJogos ORDER BY RAND() LIMIT 10");

            while ($resultConteudo = $consultaConteudo->fetch(PDO::FETCH_ASSOC)) {													                
            echo "<a href='jogo.php?jogoSelecionado={$resultConteudo['idJogo']}'>
                    {$resultConteudo['nomeJogo']}
                    <svg version='1.1' xmlns='http://www.w3.org/2000/svg'
                        xmlns:xlink='http://www.w3.org/1999/xlink'
                        viewBox='0 0 46.354 46.354' style='enable-background:new 0 0 46.354 46.354;'
                        xml:space='preserve'>
                        <path d='M21.57,2.049c0.303-0.612,0.927-1,1.609-1c0.682,0,1.307,0.388,1.609,1l5.771,11.695c0.261,0.529,0.767,0.896,1.352,0.981
                        L44.817,16.6c0.677,0.098,1.237,0.572,1.448,1.221c0.211,0.649,0.035,1.363-0.454,1.839l-9.338,9.104
                        c-0.423,0.412-0.616,1.006-0.517,1.588l2.204,12.855c0.114,0.674-0.161,1.354-0.715,1.756c-0.553,0.4-1.284,0.453-1.89,0.137
                        l-11.544-6.07c-0.522-0.275-1.147-0.275-1.67,0l-11.544,6.069c-0.604,0.317-1.337,0.265-1.89-0.136
                        c-0.553-0.401-0.829-1.082-0.714-1.756l2.204-12.855c0.1-0.582-0.094-1.176-0.517-1.588L0.542,19.66
                        c-0.489-0.477-0.665-1.19-0.454-1.839c0.211-0.649,0.772-1.123,1.449-1.221l12.908-1.875c0.584-0.085,1.09-0.452,1.351-0.982
                        L21.57,2.049z' />
                    </svg>
                </a>";     
            }

            $pdo = null;
            
            ?>
                
            </ul>
        </div>

    </section>

    <section class="sec-generos">

        <div class="txt-listra">
            <h1>Genêros</h1>
            <hr>
            <p>Veja todas os genêros disponíveis.</p>
        </div>

        <div class="lista-generos">
            <div class="generos">
                <ul>
                    
                    <?php

                    require('requires/conexao.php');

                    $consultaConteudo= $pdo->query("select * from tbGeneros;");

                    while ($resultConteudo = $consultaConteudo->fetch(PDO::FETCH_ASSOC)) {													                
                    echo "<a href='lista-genero.php?generoSelecionado={$resultConteudo['idGenero']}'> {$resultConteudo['genero']}</a>";     
                    }

                    $pdo = null;

                    ?>
                </ul>
            </div>
        </div>

    </section>

    <?php

        require("rodape.php");

    ?>

    <script type="text/javascript">
        // <![CDATA[
        var imageCount = 0;
        var currentImage = 0;
        var images = new Array();

        images[0] =
            'https://conteudo.imguol.com.br/c/entretenimento/6c/2018/12/16/60-jogos-que-saem-em-2019-para-todas-as-plataformas-1544975024327_v2_1280x720.jpg';
        images[1] = 'https://sm.ign.com/ign_br/screenshot/default/top-25-wii-u-games-spring-2015-fze4640_avjk.jpg';
        images[2] =
            'https://conteudo.imguol.com.br/c/entretenimento/78/2018/12/20/em-2018-switch-recebeu-bom-numero-de-jogos-badalados-de-third-parties-1545338458776_v2_900x506.png';
        images[3] = 'http://q36.com.br/blog/wp-content/uploads/2017/07/jogos-de-luta-mais-importante-capa.jpg';
        images[4] = 'http://www.centraleletrogames.com.br/wp-content/uploads/2018/09/10games2018.jpg';

        var preLoadImages = new Array();
        var linkCss = document.getElementById('cabecalho');
        for (var i = 0; i < images.length; i++) {
            if (images[i] == "")
                break;

            preLoadImages[i] = new Image();
            preLoadImages[i].src = images[i];
            imageCount++;
        }

        function startSlideShow() {
            if (imageCount > 0) {
                linkCss.style.backgroundImage = "url(" + images[currentImage] + ")";
                linkCss.style.backgroundRepeat = "no-repeat";
                linkCss.style.backgroundSize = "cover";

                currentImage = currentImage + 1;
                if (currentImage > (imageCount - 1)) {
                    currentImage = 0;
                }
                setTimeout('startSlideShow()', 7000);
            }
        }
        startSlideShow();
        // ]]>
    </script>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>