<?php
session_start();
?>



<!DOCTYPE html>
<html lang="pt_br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#8257E5">
    <title> NewLife | Adicionar Medicamentos</title>
    <link rel="icon" href="imagem/prescricao-medica.svg" />
    <link rel="shoutcut icon" href="images/favicon.png" type="image/png">


    <link rel="stylesheet" href="css/partials/cadastro.css">
    <link rel="stylesheet" href="css/partials/header.css">
    <link rel="stylesheet" href="css/partials/forms.css">

    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet">
    
    <style>
        :root {
            --color-backgroud: #F0F0F7;
            --color-primary-lighter: #9871f5;
            --color-primary-light: #916bea;
            --color-primary: #8257e5;
            --color-primary-darker: #6842c2;
            --color-secondary: #04D361;
            --color-secondary-dark: #04BF58;
            --color-title-in-primary: #FFFFFF;
            --color-text-in-primary: #D4C2FF;
            --color-text-title: #32264D;
            --color-text-complement: #9C98A6;
            --color-text-base: #6A6180;
            --color-line-in-white: #E6E6F0;
            --color-input-background: #F8F8FC;
            --color-button-text: #FFFFFF;
            --color-box-base: #FFFFFF;
            --color-box-footer: #FAFAFC;
            --color-small-info: #C1BCCC;
            font-size: 60%;
        }

        body {
            background-color: var(--color-backgroud);
            font-size: 1rem;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {

            height: 100vh;
        }

        body {

            background: var(--color-backgroud);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body,
        input,
        button,
        textarea {

            font-weight: 500;
            font-family: poppins;
            font-size: 1.6rem;
            color: var(--color-text-base);
        }

        #container {
            width: 90vw;
            /*largura*/
            max-width: 700px;
        }

        @media(min-width:700px) {
            :root {
                font-size: 58%;
            }

        }

        #cadastro main {

            border-top: 1px solid black;
            border-right: 8px solid black;
            border-left: 1px solid black;
            border-bottom: .4rem solid black;
            border-spacing: 0px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 5px 5px rgba(0, 0, 0, .6);
            border-radius: .8rem;
            margin: -3.2rem auto 3.2rem;
            padding-top: 6.4rem;
        }
        body {
            margin-bottom: 2rem;
    background: #00BFFF;
    
}
    </style>
</head>

<body id="cadastro">
    <div id="container">
        <header class="page-header">
            <div class="top-bar-container">
                <a href="index.php">
                    <?php
                    echo "<img src='imagem/voltar.svg' alt='voltar'>";
                    ?>
                </a>
                <!-- <img src="/imagem/cliente.png" alt="Cliente">Colocar uma uma imagem-->
            </div>
            <div id="imagem">
                <?php
                echo "<img src='imagem/remedios.svg' alt='remedios'> ";
                ?>
            </div>
            <div class="header-content">
                <strong style='max-width: 1000px;'>Adicionar novos medicamentos </strong>
                <!--strong vem com a fonte em negrito-->
                <p style='color:#ff637b; font-size:2.5rem'>Preencha todos os campos</p>
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>

        </header>
        <main>
            <form class="form" action="bd-medicamento.php" method="POST" id="create-class">
       
                <fieldset>
                    <legend> Cadastro de Medicamento </legend>
                    <!--todo fieldset precisa de um ledend e o legend e uma agrupamento de dados-->
                    <div class="input-block">
                        <label for="medicamentos"> Medicamento </label>
                        <input name="medicamentos" id="medicamentos" required>
                    </div>

                    <div class="select-block">

                    <div class="input-block">
                    <label for="abreviacao"> Abreviação </label>
                    <input name="abreviacao" id="abreviacao" required>
                    </div>
                    <div class="input-block">
                    <label for="latim"> Latim </label>
                    <input name="latim" id="latim" required>
                    </div>
 
                        <div class="input-block">
                            <label for="fonte"> Fonte </label>
                            <input name="fonte" id="fonte" required>
                        </div>


                        <div class="textarea-block">
                            <label for="principal"> Principais </label>
                            <textarea name="principal" id="principal" required></textarea>
                        </div>

                </fieldset>

            </form>
            <footer>
                <p>
                    <?php
                    echo "<img src='imagem/atencao.svg' alt='Aviso importante' width='60px'>";
                    ?>

                    Importante! <br>
                    Preencha todos os dados
                </p>
                <button type="submit" form="create-class" value="cadastro">Salvar</button><!-- form="create-class" envia o formulario sem precisar estar dento da tag form-->
            </footer>
        </main>
    </div>

</body>

</html>