<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script defer src="js/login.js"></script>
    <title>Login - Animaclin</title>
</head>

<body>

    <main class="Login">

        <div class="ContainerLogin">

            <img class="logo" src="{{asset('assets/img/AnimaClin_noText.png')}}" alt="Logo">

            <form class="LoginForm" action="{{url('/login')}}" method="POST" autocomplete="off">
                <input class="LoginInput email" id="email" type="email" placeholder="E-mail" required>
                <span class="InputBorder"></span>

                <input class="LoginInput password" id="password" type="password" placeholder="Senha" required>
                <span class="InputBorder"></span>

                <div id="msgError"></div>

                <input class="LoginBtn" type="submit" value="Login">

                <a class="LoginForget" href="https://www.tuasaude.com/remedio-para-memoria/">Esqueci a senha</a>
            </form>

        </div>

    </main>

    <footer class="footer">
        <p class="parag"><img class="HeadIcon" src="{{asset('assets/img/headset_icon.png')}}" alt=""> (11) 4003-2321</p>
        <p class="parag" id="suporte">Suporte</p>
    </footer>

</body>

</html>