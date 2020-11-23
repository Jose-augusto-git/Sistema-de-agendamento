
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

<link rel='icon' href='imagem/entrar.svg'/>
<link rel='stylesheet' href='css/style.css'/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
    <body>
        <form method="POST" action="acoes/login.php">
            <div class="container">
                <div style='background: black'>
        
                    
                         <h2 style="color: white; margin-left: 1rem; font-size:5rem;

                         " >Bem vindo(a)!</h2>
                        
                            <label tyle= "margin-right: 1.6rem;
                            font: 700 2.4rem Archivo;" >
                            <img src='imagem/o-email.svg' alt='Agendamento' style='width:2.5rem;'>
                                <input style= "margin-right: 1.6rem;
                                font: 700 2.4rem Archivo; margin:1rem; background:#add8e6;color:  #3891af;"  placeholder="Digite o Email" type="text" name="email" required>
                            </label><br>
                        
                            <label>
                                <img src='imagem/senha.svg' alt='Agendamento' style='width:2.5rem;'>
                                <input 
                                style= "margin-right: 1.6rem;
                                font: 700 2.4rem Archivo; margin:1rem;background:#add8e6;color:  #3891af;" placeholder="Digite a senha" type="password" name="senha" required>
                            </label><br>
                            <button type="submit" class="btn btn-second" style="width: 100%">Entrar</button>
        </form>
    </body>
</html>