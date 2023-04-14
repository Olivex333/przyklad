<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie Kilentów</title>
    <link rel="stylesheet" href="styl3.css">
</head>

<body>
    <section class="baner">
        <h1>Hurtownia Spożywcza</h1>
    </section>
    <section class="glowny">
        <h2>Opinie naszych Klientów</h2>
        <?php

        $mysqli = new mysqli("localhost", "root", "", "ee09");

        $query = 'SELECT klienci.zdjecie, klienci.imie, opinie.opinia
            FROM klienci
            INNER JOIN opinie ON klienci.Typy_id=opinie.id WHERE Typy_id = "2" or Typy_id = "3";';
        $result = $mysqli->query($query);
        while ($row = $result->fetch_array()) {
            echo '<div class="skrypt1">';
            echo '<img src="' . $row[0] . '" alt="klient">';
            echo '<blockquote>' . $row[2] . '</blockquote>';
            echo '<h4>' . $row[1] . '</h4>';
            echo "</div>";
        }
        ?>
    </section>
    <section class="pierwszyblokstopki">
        <h3>Współpracują z nami</h3>
        <a href="http://sklep.pl/">Sklep 1</a>
    </section>
    <section class="drugiblokstopki">
        <h3>Nasi top klienci</h3>
        <ol>
            <?php
            $query = 'SELECT imie, nazwisko, punkty FROM `klienci` ORDER BY punkty DESC LIMIT 3;';
            $result = $mysqli->query($query);
            while ($row = $result->fetch_array()) {
                echo '<li>' . $row[0] . " " . $row[1] . ", " . $row[2] . ' pkt. </li>';
            }
            ?>
        </ol>

    </section>
    <section class="trzeciblokstopki">
        <h3>Skontaktuj sie</h3>
        <p>111222333</p>
    </section>
    <section class="czwartyblokstopki">
        <h3>Autor: Oliwier Grabarczyk</h3>
    </section>
</body>

</html>