<?php

if (isset($_POST['submit']))

{
//print_r($_POST['Nome']);
//print_r('<br>');
//print_r($_POST['Celular']);
//print_r('<br>');
//print_r($_POST['CPF']);
//print_r('<br>');
//print_r($_POST['Senha']);

include_once('config.php');

$Nome = $_POST['Nome'];
$Celular =$_POST['Celular'];
$CPF = $_POST['CPF'];
$Senha = $_POST['Senha'];
$result = mysqli_query($conexao, "INSERT INTO usuarios (Nome, Celular, CPF, Senha) 
VALUES ('$Nome', '$Celular', '$CPF', '$Senha')");
}    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | AC</title>
    <style>
body{
font-family: Arial, Helvetica, sans-serif;
background-image: linear-gradient(45deg, #0c0c0c, #3a415a);

}
    .box{
        color: white;
        position: absolute;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
        background-color:rgba(0, 0, 0, 0.9);
        padding: 80px;
        border-radius: 15px;

    }

    legend {
    top: 50%;
    left: 50%;
    transform: translate(-10%, 5%);
    border-radius: 15px;
    color: #ea7070;
    padding: 10px;
    font-size: 34px; /* Ajuste o tamanho da fonte conforme necessário */
}
    .inputBox{
        position: relative;
        
    }
    .inputUser{
        
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: white;
        font-size: 15px;
        width: 100%;
        letter-spacing: 2px;
    }
    .labelInput{
        
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5s;
    }
    .inputUser:focus ~ .labelInput,
    .inputUser:valid ~ .labelInput{
        top: -20px;
        font-size: 12px;
        color: #815656;
    }

    #submit{
        
        background-color: transparent; /* Altera a cor de fundo ao passar o mouse */
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            background-color: transparent;
            border: 1px solid #fff;

    }
    #submit:hover{
        
        background-color: #ea7070;
            cursor: pointer;
            padding: .7rem;
            font-size: .2rem;
            border-radius: 6px;
            cursor: pointer;
            transition: .4s;  
    }


    </style>
</head>
<body>
    <div class="box">
        <form action="Cadastro.php"method="POST">

                <legend><b>Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="Nome" id="Nome" class="inputUser" required>
                    <label for="Nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Celular" id="Celular" class="inputUser" required>
                    <label for="Celular" class="labelInput">Celular</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="CPF" id="CPF" class="inputUser" required>
                    <label for="CPF" class="labelInput">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Senha" id="Senha" class="inputUser" required>
                    <label for="Senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">

        </form>
    </div>
</body>
</html>