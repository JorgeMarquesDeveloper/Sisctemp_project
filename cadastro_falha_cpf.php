<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="img/favicon.ico">
    <title>Falha no Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #0a6300, #d2b000);
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }
        .login-container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-box {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
        }
        .logo-container {
            text-align: center;
        }
        .logo {
            max-width: 70px;
        }
        .footer {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container login-container">
    <div class="col-md-4 login-box">
        <div class="logo-container">
            <img src="logo.png" alt="Logo" class="logo">
        </div>
        <h1 class="text-danger text-center">Usuario Existente </h1>
        <p>Esse CPF ja esta cadastrado por favor realize o cadastro com outro CPF</p>
        
        <div class="mt-2 text-center">
            <a href="cadastro.php" class="text-success">Recuperar Senha</a>
        </div>
    </div>
</div>
</body>
</html>
