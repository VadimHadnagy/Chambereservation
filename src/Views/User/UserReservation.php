<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chambereservation - Reservation</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/user/usereservation.css">
</head>
<body>
    <main>
        <section class="main_section_user_reservation">
            <h1>Your reservations</h1>
            <?php
                foreach($chamber as $chamber) {  
            ?>
            <div class="main_section_div_container_user_reservation">
            <?php
                        echo '<div class="chamber">';
                        echo '<p>' . $chamber['chamber_name'] . '</p>';
                        echo '</div>';
                    foreach($reservations as $reservation){
                        if ($reservation['chamber_id'] == $chamber['chamber_id']) { // Check if the reservation belongs to the current chamber
                            echo '<div class="reservation">';
                            echo '<div><p>Start : ' . $reservation['reservation_datestart'] . '</p></div>';
                            echo '<div><p>End :' . $reservation['reservation_dateend'] . '</p></div>';
                            echo '</div>';
                            break; // Stop the loop after the first reservation for the current chamber
                        }
                    }
                ?>
            </div>
            <?php
             }
            ?>
        </section>
    </main>

</body>
</html>