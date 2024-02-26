<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification - Chambereservation</title>
    <link rel="stylesheet" href="/css/Auth/signup.css">
    <link rel="stylesheet" href="/css/global.css">
</head>
<body>
    <main>
        <section class="main_section_signup">
            <div class="main_section_signup_container">
                <h1>Sign-up</h1>
                <form action="/user/create-process" method="post">
                    <label for="name">Enter your name</label>
                    <input type="text" name="name" placeholder="Example : Jean">
                    <label for="surname">Enter your surname</label>
                    <input type="text" name="surname" placeholder="Example : Dupont">
                    <label for="email">Enter your email</label>
                    <input type="email" name="email" placeholder="Example : example@gmail.com">
                    <label for="password">Enter your password</label>
                    <input type="password" name="password" placeholder="Example : 1234">
                    <input type="submit" value="Create Account">
                </form>
                <a href="/user/login" class="userLogin"><p>Or login</p></a>
            </div>
        </section>
    </main>
</body>
</html>