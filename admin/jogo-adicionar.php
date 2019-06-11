<?php

$erro = 0;

if(isset($_FILES["txImg"])){
    $arqNome = $_FILES["txImg"]["name"];
    $arqTipo = $_FILES["txImg"]["type"];
    $arqTamanho = $_FILES["txImg"]["size"];
    $arqNomeTemp = $_FILES["txImg"]["tmp_name"];
    $erro = $_FILES["txImg"]["error"];
    
    if($erro==0){
        if(is_uploaded_file($arqNomeTemp)){
            if(move_uploaded_file($arqNomeTemp,$_SERVER["DOCUMENT_ROOT"]. "/ProjetoPw2/imagens/". $arqNome)){
                echo "Sucesso!";

                require('../requires/conexao.php');

                $nomeJogo=$_POST['nomeJogo'];
                $caminhoImg = 'imagens/'. $arqNome;
                $dev=$_POST['desenvolvedora'];
                $dtLanc=$_POST['dtLancamento'];
                $descricao=$_POST['descricao'];
                $idGenero=$_POST['idGenero'];


                try{
                    $stmt = $pdo->prepare("INSERT INTO tbJogos (nomeJogo, caminhoImg, desenvolvedora, dtLancamento, descricao, idGenero) VALUES ('$nomeJogo','$caminhoImg', '$dev', '$dtLanc', '$descricao', '$idGenero');");
                    $stmt->execute();

                    echo ("<script>
                        window.alert('Card cadastrado com sucesso!');
                        window.location.href='jogos.php';			
                        </script>"
                        );							

                    }catch(PDOException $e) {
                        echo 'Error: ' . $e->getMessage();
                    }									
                }
                else{
                    $erro = "Falha ao mover o arquivo";
                }
            }
            else{
                $erro = "Erro no envio: arquivo não recebido com sucesso.";
            }

            }
            else{
                $erro = "Erro no envio: " . $erro;			
            }

            }
            else{
                $erro = "Arquivo enviado não encontrado";
                echo ("<script>
                window.location.href='jogo_add.php';
                </script>");
            }

            if($erro!==0){

                echo ("<script>
                    window.alert('Erro: $erro;');
                    window.location.href='jogo_add.php';			
                    </script>"
                    );
                }

?>