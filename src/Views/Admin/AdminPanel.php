<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Chambereservation</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/Admin/adminpanel.css">
</head>
<body>  
<?php
    if(isset($_SESSION["user_role"]) == 1) {  
?>
    <main>
        <section class="main_section_admin">
            <div class="main_section_admin_container">
                <h1>Admin Panel</h1>
                <div class="main_section_admin_container_button">
                    <a href="/user/admin/create-chamber" class="a-createChamber">Create Chamber</a>
                    <a href="/user/logout" class="a-logout">Logout Account</a>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
<?php
    } else {
        echo "<p class='connected'>Vous n'avez pas les droits pour accéder à cette page.</p>";
    }
?>