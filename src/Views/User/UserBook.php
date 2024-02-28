<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chambereservation - Book</title>
    <link rel="stylesheet" href="/css/user/book.css">
    <link rel="stylesheet" href="/css/global.css">
</head>
<body>
    <main>
        <section class="main_section_book">
            <?php
                    foreach($chambers as $chamber) 
                    {
                        if($chamber > 0) 
                        {
                        echo "<div class='main_section_div_container_booking'>";
                        echo "<h1>" . $chamber['chamber_name'] . "</h1>";
                        echo "<p>" . $chamber['chamber_maxperson'] . " personne maximum</p>";
                        echo "<p>" . $chamber['chamber_price'] . "€ par nuit</p>";
                        echo "<div class='main_section_div_container_booking_date'>";
                        ?>

                        <?php
                        echo "</div>";
                        echo "<div class='main_section_div_container_button'>";
                        echo "<form method='post' class='form_date' action='/user/book-process?id=" . $chamber['chamber_id'] . "'>";
                        ?>
                        <label for='date_start'>Date de début</label>
                        <input type='date' name='date_start' min='' id='date_start' required>
                        <label for='date_end'>Date de fin</label>
                        <input type='date' name='date_end' min='' id='date_start' required>
                        <?php
                        echo "<input type='hidden' name='chamber_id' value='" . $chamber['chamber_id'] . "'>";
                        echo "<input type='submit' value='Book Now'>";
                        echo "</form>";
                        if(isset($_SESSION["user_role"]) == 1) {  
                        echo "<form method='post' action='/user/remove-book?id=" . $chamber['chamber_id'] . "'>";
                        echo "<input type='hidden' name='chamber_id' value='" . $chamber['chamber_id'] . "'>";
                        echo "<input type='submit' value='Remove Book' class='input-remove'>";
                        echo "</form>";
                        echo "</div>";
                        }
                        echo "<p id='total_price'></p>";
                        echo "</div>";
                        }
                    }
                ?>  
        </section>
    </main>

    <script>
        let dateDuJour = new Date();
        let dateFormatee = dateDuJour.toISOString().split('T')[0];
        document.getElementById('date_start').min = dateFormatee;
        document.getElementById('date_end').min = dateFormatee; 
    </script>
</body>
</html>