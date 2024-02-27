<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Chambereservation</title>
    <link rel="stylesheet" href="/css/Auth/login.css">
    <link rel="stylesheet" href="/css/global.css">
</head>
<body>
    <?php
    if(isset($_SESSION['user_id'])) {
        echo "<div class='container'>";
        echo "<p class='connected'>Already connected</p>";
        echo "<a href='/user/logout' class='a-logout'>Logout Account</a>";
        echo "</div>";
    } else {
    ?>
    <main>
        <section class="main_section_login">
            <div class="main_section_login_container">
                <h1>Login</h1>
                <form action="/user/login-process" method="post">
                    <label for="email">Enter your email</label>
                    <input type="email" name="email" placeholder="Example : example@gmail.com">
                    <label for="password">Enter your password</label>
                    <input type="password" name="password" placeholder="Example : 1234">
                    <input type="submit" value="Login">
                </form>
                <a href="/user/create" class="userCreate"><p>Or create account</p></a>
            </div>
        </section>
    </main>
    <?php } ?>
</body>
</html>