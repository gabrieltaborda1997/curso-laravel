<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konnect Sistem</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form class='form' action="../logar.php" method="POST">
        <div class="card">
            <div class="card-top">
                <img class="img-login" src="_img/user.png" alt="">
                <h2 class="tittle">Painel de Acesso</h2>
                <p>Gerenciar seu Negócio</p>
            </div>
            <div class="card-group">
                <label>Email</label>
                <input type="email" name="email" id="email" placeholder=" Digite seu email" required>
            </div>
            <div class="card-group">
                <label>Senha</label>
                <input type="password" name="senha" id="senha" placeholder=" Digite sua senha" required>
            </div>
            <div class="card-group">
                <label><input type="checkbox" name="check" id="check">Lembre-me</label>
            </div>
            <div class="card-group btn">
                <button type="submit">Acessar</button>
            </div>
        </div>
    </form>
</body>
</html>