<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Authentification - Chambereservation</title>
        <link rel="stylesheet" href="/css/global.css">
        <link rel="stylesheet" href="/css/Auth/auth.css">
</head>
<?php
    if(isset($_SESSION['user_id'])) {
        echo "<div class='container'>";
        echo "<p class='connected'>Already connected</p>";
        echo "<a href='/user/logout' class='a-logout'>Logout Account</a>";
        echo "</div>";
    } else {
?>
<body>
    <main>
        <section class="main_section_auth">
            <div class="main_section_auth_container_login_signup">
                <h1>Chamber Reservation</h1>
                <a href="/user/login" class="a-login">Login Account</a>
                <a href="/user/create" class="a-signup">Create Account</a>
            </div>
        </section>
    </main>
</body>
</html>
<?php } ?>