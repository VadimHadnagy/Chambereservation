<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chambereservation - Create Chamber</title>
    <link rel="stylesheet" href="/css/Admin/createchamber.css">
    <link rel="stylesheet" href="/css/global.css">
</head>
<body>
    <main>
        <section class="main_section_create_chamber">
            <h1>Create Chamber</h1>
            <form action="/user/admin/process-create-chamber" class="main_section_form_create_chamber" method="post">
                <label for="namechamber">Entrez le nom de la chambre</label>
                <input type="text" name="namechamber" placeholder="Example : Royal Chamber">
                <label for="slotschamber">Entrez le nombre de personne maximum pour la chambre</label>
                <select name="slotschamber" id="slotschamber">
                <?php
                        for($i = 1; $i <= 25; $i++) 
                        {
                            echo "<option value='" . $i . "'>" . $i . " personne(s)</option>";
                        }
                ?>
                </select>
                <label for="pricepernight">Entrez le prix de la chambre par nuit</label>
                <input type="number" name="pricepernight" id="pricepernight" placeholder="Tarif en euro">
                <input type="submit" value="Envoyer">
            </form>
        </section>
    </main>
</body>
</html>