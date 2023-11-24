<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
<style>

body{       
    font-family: Arial, Helvetica, sans-serif;
background-image: linear-gradient(45deg, #0c0c0c, #3a415a);

        }
        
        div{
        background-color:rgba(0, 0, 0, 0.9);
        position: absolute;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
        padding: 80px;
        border-radius: 15px;
        color:#ea7070;
        }
        
        input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
        }   
        
        .inputSubmit{
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
        
        .inputSubmit:hover{
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

   <div> 
    <h1>Login</h1>
    <form action="Test.php" method="POST">
    <input type="text" name="CPF" placeholder="CPF">
    <br><br>
    <input type="password" name="Senha" placeholder="Senha">
    <br><br>
    <input class="inputSubmit" type="submit" name="submit" value="Enviar">
    </form>
   </div>       
</body>


</html>