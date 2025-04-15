<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <header>
        <h1>Vibra</h1>
    </header>

    <main>

       <section id="sec-login">
        <h2>Bem-vindo de volta!</h2>
        <p>Se ainda não tem uma conta, faça o cadastro clicando no botão abaixo.</p>

        <button id="mostrar-registrar">Cadastrar</button>

        <p>Entrar</p>
        <p>Ou entre usando seu E-mail</p>

        <form action="/Login" method="POST">
            <label for="email-login">E-mail:</label>
            <input type="email" id="email-login" name="email" required placeholder="Digite seu E-mail:">

            <label for="senha-login">Senha:</label>
            <input type="password" id="senha-login" name="senha" required placeholder="Digite sua senha:">

            <button type="submit">Entrar</button>
        </form>
        <p><a href="/recuperar-senha">Esqueci minha senha</a></p>
       </section>

       <section id="sec-cadastro">
            <h2>Cadastrar</h2>
            <p>Ou crie sua conta usando e-mail</p>

            <form action="/Cadastro" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required placeholder="Digite seu nome de usuário:">

                <label for="email-cadastro">E-mail:</label>
                <input type="email" id="email-cadastro" name="email" required placeholder="Digite seu E-mail:">  

                <label for="senha-cadastro">Senha:</label>
                <input type="password" id="senha-cadastro" name="senha" required placeholder="Digite sua senha:">

                <button type="submit">Cadastrar</button>
            </form>
            <p>Já tem uma conta? <button id="mostrar-login">Faça login aqui</button></p>
       </section>
    </main>
</body>
</html>
