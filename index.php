<?php

session_start();
include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt_br">
<!-- Lang é um atributo -->

<head>
    <meta charset="UTF-8"><!-- meta defire tambem propriedade das  paginas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#8257E5">

    <title> NewLife | Tela inicial </title>
    <!-- title muda o titulo da 
    pagina-->

    <!-- <link rel="shoutcut icon" href="/images/favicon.png" type="image/png">-->
    <?php
    echo "<link rel='icon' href='imagem/logo.svg'/>";
    ?>
    <link rel="icon" href="css/a.svg" />
    <link rel="stylesheet" href="css/personalizar.css">
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/partials/page-landing.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet">




    <style>
        aside.esquerdo {
            width: 50%;
            background: #2c3538;
            padding: clamp(3rem, 5vw, 8rem);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 5px 5px rgba(0, 0, 0, .6);
            z-index: 1;
            border-right: 5px solid black;
            border-top: .4rem solid black;
            border-bottom: .4rem solid black;
            border-spacing: 0px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 5px 5px rgba(0, 0, 0, .6);

        }

        aside.direito {
            width: 50%;

            padding: clamp(3rem, 5vw, 8rem);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: #04d361;
            z-index: 0;

        }

        /*-----------------------------------------------Estilo CSS------------------------------------------------------------ */
        /*---------------------------------------------------------------------------------------------------------------- */
        element.style {
            width: 53rem;
        }

        .buttons-container a.pesquisar {
            margin-top: 1rem;
            margin-left: 1rem;
            height: 10.4rem;
            border-radius: 0.8rem;
            margin-right: 1.6rem;
            font: 700 2.4rem Archivo;
            display: flex;
            align-items: center;
            justify-content: auto;
            text-decoration: none;
            transition: background 0.2s;
            color: black;
            height: 64px;
            padding: 0 48px 0 40px;
            background-color: #fff;
            font-family: Manrope, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;

            box-sizing: border-box;
            border: 2px solid #000;
            box-shadow: 4px 4px 0 0 #000;
            transform: translate(0);
            margin: 0 24px 24px 0;
        }



        .buttons-container a.pesquisar {
            background: white;
            margin-right: 0;
        }

        .buttons-container a.pesquisar:hover {
            background: #151c48;
            color: #04d361;
        }

        /* ---------------- */

        element.style {
            width: 31.6rem;
        }

        .buttons-container a.lista {

            border-radius: 0.8rem;
            margin-right: 1.6rem;
            font: 700 2.4rem Archivo;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: background 0.2s;
            color: black;
            margin-top: 12rem;
            position: absolute;
            height: 64px;

            padding: 0 48px 0 40px;
            background-color: #fff;
            border-radius: 8px;
            font-family: Manrope, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;


            line-height: 30px;
            box-sizing: border-box;
            border: 2px solid #000;
            box-shadow: 4px 4px 0 0 #000;
            transform: translate(0);
            transition: all .2s ease;
            cursor: pointer;
            -ms-user-select: none;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            margin: 10rem 0px 0px 0rem;
        }



        .buttons-container a.lista {
            background: white;
            margin-right: 0;
        }

        .buttons-container a.lista:hover {
            background: #151c48;
            color: #04d361;
        }

        /* ---------------- */

        element.style {
            width: 31.6rem;
        }

        .buttons-container a.adicionar {



            border-radius: 0.8rem;
            margin-right: 1.6rem;
            font: 700 2.4rem Archivo;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: background 0.2s;
            color: black;
            margin-top: 20rem;
            position: absolute;

            display: flex;

            background-color: #fff;
            font-family: Manrope, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            padding: 0 48px 0 40px;
            line-height: 30px;
            box-sizing: border-box;
            border: 2px solid #000;
            box-shadow: 4px 4px 0 0 #000;
            transform: translate(0);
            transition: all .2s ease;
            cursor: pointer;
            -ms-user-select: none;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;

        }

        .buttons-container a.adicionar {
            background: white;
            margin-right: 0;
        }

        .buttons-container a.adicionar:hover {
            background: #151c48;
            color: #04d361;
        }

        /*---------------- */

        element.style {
            width: 53rem;
        }

        .buttons-container a.sintoma {

            border-radius: 0.8rem;
            margin-right: 1.6rem;
            font: 700 2.4rem Archivo;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: background 0.2s;
            color: black;
            position: absolute;
            margin-top: 31rem;



            display: flex;

            background-color: #fff;
            font-family: Manrope, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            padding: 0 48px 0 40px;
            line-height: 30px;
            box-sizing: border-box;
            border: 2px solid #000;
            box-shadow: 4px 4px 0 0 #000;
            transform: translate(0);
            transition: all .2s ease;
            cursor: pointer;
            -ms-user-select: none;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
        }

        .buttons-container a.sintoma {
            background: white;
            margin-right: 0;
        }

        .buttons-container a.sintoma:hover {
            background: #151c48;
            color: #04d361;
        }
    </style>

</head>

<body id="page-landing">

    <div id="page-landing">
        <aside class="esquerdo">
            <div class="buttons-container">
                <a class="pesquisar" href="pesquisar-medicamento.php" style="width: 48.2rem">
                    <p style="margin:2rem; width: 38.2rem"> Pesquisar Medicamento</p> <img src="imagem/seta-direita.svg" alt="direita" style="margin:1rem">
                </a>

                <a class="sintoma" href="descricao.php" style="width: 48.2rem">
                    <p style="margin:2rem; width: 38.2rem"> Pesquisar Sintoma </p> <img src="imagem/seta-direita.svg" alt="direita" style="margin:1rem; ">
                </a>

                <a class="lista" href="lista.php">

                    <p style="margin:2rem; width: 28.3rem;"> Lista de Medicamentos </p><img src="imagem/seta-direita.svg" alt="direita" style="margin:1rem">
                </a>

                <a class="adicionar" href="cadastro.php">
                    <p style="margin:2rem; width: 28.4rem;"> Adicionar Medicamentos </p><img src="imagem/seta-direita.svg" alt="direita" style="margin:1rem">
                </a>
            </div>
        </aside>
        <aside class="direito">



            <img src='imagem/remedio.svg' alt='Agendamento' style='z-index: 10'> ";



        </aside>
    </div>
</body>

</html>