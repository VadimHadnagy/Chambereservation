<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChamberReservation - User Panel</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/User/userpanel.css">
</head>
<body>
    <?php
        if(!isset($_SESSION['user_id'])) {
            echo "<div class='container'>";
            echo "<p class='connected'>You are not connected</p>";
            echo "<a href='/user/login' class='a-login'>Login Account</a>";
            echo "</div>";
        } else {
    ?>
    <main>
        <section class="main_section_user_panel">
            <div class="main_section_div_container_user_panel">
                <h1>User Panel</h1>
                <div class="main_section_div_container_button">
                    <a href="/user/your-reservations" class="youreservations">Your reservations</a>
                    <a href="/user/reservations" class="book">Book</a>
                    <?php
                        if(isset($_SESSION["user_role"]) == 1) {
                    ?>
                        <a href="/user/admin" class="a-admin">Admin Panel</a>
                    <?php
                        }
                    ?>
                    <a href="/user/logout" class="a-logout">Logout</a>
                </div>  
            </div>
        </section>
    </main>
    <?php } ?>
</body>
</html>