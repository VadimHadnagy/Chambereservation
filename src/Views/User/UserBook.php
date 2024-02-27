<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chambereservation - Book</title>
    <link rel="stylesheet" href="/css/book.css">
    <link rel="stylesheet" href="/css/global.css">
</head>
<body>
    <main>
        <section class="main_section_book">
            <?php
                    foreach($chambers as $chamber) 
                    {
                        echo "<div class='main_section_div_container_booking'>";
                        echo "<h1>" . $chamber['chamber_name'] . "</h1>";
                        echo "<p>" . $chamber['chamber_maxperson'] . " personne maximum</p>";
                        echo "<p>" . $chamber['chamber_price'] . "€ par nuit</p>";
                        echo "</div>";
                    }
                ?>  
        </section>
    </main>
</body>
</html>