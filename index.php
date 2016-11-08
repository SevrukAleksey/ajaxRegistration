<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/styleGmail.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title>Регистрация</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <h1 class="text-center login-title"></h1>
                    <div class="account-wall">
                        <img class="profile-img" src="http://media.cargocollective.com/1/0/789/headerimg/profile.png"
                             alt="">
                        <form id="form">
                            <input type="text" name="login" class="form-control" placeholder="Login" required autofocus>
                            <input type="password" name="pass" class="form-control" placeholder="Password" required>
                            <input type="password" name="pass_conf" class="form-control" placeholder="Password confirm" required>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">
                                Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
