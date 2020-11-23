<?php 

session_start();
include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt_br"><!-- Lang é um atributo -->
<head>
    <meta charset="UTF-8"><!-- meta defire tambem propriedade das  paginas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#8257E5">
    
    <title> NewLife | Tela inicial <?php echo $nome; ?></title> <!-- title muda o titulo da 
    pagina-->

   <!-- <link rel="shoutcut icon" href="/images/favicon.png" type="image/png">-->
   <?php
    echo "<link rel='icon' href='imagem/a.svg'/>";
   ?>
    <link rel="icon" href="css/a.svg"/>
    
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/partials/page-landing.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet">

    


    <style>
/*-----------------------------------------------Estilo CSS------------------------------------------------------------ */
     .buttons-container a.ficha {
        background: #00ccf2;
        margin-right: 0;
    }
    .buttons-container a.ficha {
    margin-left: 1rem;
    position: absolute;
    /* left: 5%; */
    bottom: 20px;
    /* width: 90%; */
    width: 100rem;
    height: 10.4rem;
    border-radius: 0.8rem;
    /* margin-right: 1.6rem; */
    font: 700 2.4rem Archivo;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: background 0.2s;
    color: white;
}
.buttons-container a.ficha:hover {
    background: #151c48;
    color:#00ccf2;
}

.buttons-container a.cadastro:hover {
    
    color:black;
}
/*---------------------------------------------------------------------------------------------------------------- */
.buttons-container a.lista {
        background: #ee5d60;
        margin-right: 0;
    }

.buttons-container a.lista:hover {
    background: #151c48;
    color:#ee5d60;
}

.buttons-container a.lista {
    
    /* left: 5%; */
    
    /* width: 90%; */
    
    height: 10.4rem;
    border-radius: 0.8rem;
    /* margin-right: 1.6rem; */
    font: 700 2.4rem Archivo;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: background 0.2s;
    color: white;
    position: absolute;
    margin: 12rem 1rem; 
    width: 35%;
}
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
    justify-content: center;
    text-decoration: none;
    transition: background 0.2s;
    color: white;
}

.buttons-container a.pesquisar {
        background: #04d361;
        margin-right: 0;
    }

.buttons-container a.pesquisar:hover {
    background: #151c48;
    color:#04d361;
}
/*---------------------------------------------------------------------------------------------------------------- */
element.style {
    width: 53rem;
}

.buttons-container a.pesquisar-ficha {
    margin-top: 1rem;
    margin-left: 8.6rem;
    height: 10.4rem;
    border-radius: 0.8rem;
    margin-right: 1.6rem;
    font: 700 2.4rem Archivo;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: background 0.2s;
    color: white;
}

.buttons-container a.pesquisar-ficha {
        background:  #ef8d1f;
        margin-right: 0;
    }

.buttons-container a.pesquisar-ficha:hover {
    background: #4d2995;
    color: #ef8d1f;
}
/*---------------------------------------------------------------------------------------------------------------- */
element.style {
    position: absolute;
    width: 40rem;
    margin-top: 12rem;
    margin-left: 56.6rem;
}
.buttons-container a.lista-ficha {
    background: white;
}
.buttons-container a.lista-ficha {
    margin-top: 1rem;
    margin-left: 1rem;
    height: 10.4rem;
    border-radius: 0.8rem;
    margin-right: 1.6rem;
    font: 700 2.4rem Archivo;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: background 0.2s;
    color: white;
}
.buttons-container a.lista-ficha {
        background:  #ffda44;
        margin-right: 0;
    }

.buttons-container a.lista-ficha:hover {
    background: #2488ff;
    color: #ffda44;
}
.buttons-container a.ficha {
    margin-left: 1rem;
    position: absolute;
    /* left: 5%; */
    bottom: 20px;
    /* width: 90%; */
    width: 90rem;
    height: 10.4rem;
    border-radius: 0.8rem;
    /* margin-right: 1.6rem; */
    font: 700 2.4rem Archivo;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: background 0.2s;
    color: white;
}
.buttons-container a.cadastro {
    margin-left: 1rem;
    position: absolute;
    /* left: 5%; */
    bottom: 20px;
    /* width: 90%; */
    width: 90rem;
    height: 10.4rem;
    border-radius: 0.8rem;
    /* margin-right: 1.6rem; */
    font: 700 2.4rem Archivo;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: background 0.2s;
    color: white;
}

    </style>
    
</head>
<body id="page-landing"> <!--id e class e um atributo global | nome dentro do id nao pode se repetir-->

    
        <div id="page-landing">
            <aside>
                <div class="logo-container">
                <!-- <img src="\imagem\logo.png" alt="inicial tela">--> 
                    

                    <?php
                        echo "<img src='imagem/calendario.svg' alt='Agendamento' style='margin: 12rem 1rem;'> ";
                        
                    ?>

                    

                    
                    
                </div>
            </aside>
            <!--<h1>Proffy</h1> <h1> e titulo do texto da pagina -->  
            <!--<p> </p>  <p> paragrafo -->
            <!--<img src="" alt="Logo"> --> <!--img e uma tag ultilizada para imagem | atributo "src" (source) e a origem da imagem | "alt" e uma alternativa caso a fonte da imagem seja alterada --> 
            <!--<button>Estudar</button> --button são botões
            <button>Dar Aula</button>-->
            <div class="buttons-container">
                <a class="pesquisar" href="pesquisar.php" style="width: 47rem;">
                    <img src="" alt=""> Pesquisar de Agendamento </a>



                <a class="lista" href="busca.php" >
                    <img src="" alt=""> Lista de Agendamento </a>

                    <a class="pesquisar-ficha" href="pesquisar_ficha.php" style="width: 40rem;">
                    <img src="" alt=""> Pesquisar de fichas de pacientes </a>



                <a class="lista-ficha" href="busca-ficha.php" style="
                    position: absolute;
                    
                    width: 40rem;
                    margin-top: 12rem;
                    margin-left: 56.6rem;">
                    <img src="" alt=""> Lista de fichas de pacientes </a>
                    

                    <h2 style="
                        position: absolute;
                        margin: 33rem 30rem 30rem 36rem;
                        font-size: 50px;
                        color: #dd636e;
                    ">Pagina Inical </h2>
                <a  class="ficha" href="ficha.php" style="margin: 12rem 7rem; "> 
                    <img src="" alt=""> Cadastro de Ficha </a>
                <a class="cadastro" href="cadastro.php" style="margin: 0rem 7rem;"> 
                    <img src="" alt=""> Cadastro de Clientes </a><!-- href fala pra onde vai enviar-->
            </div>
        
        </div>
    


  <!--  <p class="total-connections"> Total de 200 conexeões ja realizadas
        <img src="/images/icons/purple-heart.svg" alt="Coração roxo">
    </p>-->
    
</body>
</html>

<!-- isso e uma tag <html> -->
<!-- Na tag <head> irá configurações do meu documento -->
<!-- Na tag <body> Todo conteúdo sera visível na página-->
<!--
    HTML

    HyperText
        HiperTexto

    Markup
        Marcação

    linguage
        linguagem

    html não e uma linguagem de programação, e uma marcação de texto
-->
