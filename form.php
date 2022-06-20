<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zpětná vazba</title>
    <link rel="shortcut icon" href="images/fc_ban__k_ostrava_logo_1bR_icon.ico">
    <script src="main.js"></script>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <header>
        <?php
        include "hlavicka.php" 
        ?>
    </header>
    <form method="POST" class="form" action="sendmail.php" id="form">
        <input type="text" placeholder="Jméno žáka" name="firstname">
        <input type="text" placeholder="Příjmení žáka" name="surname">
        <input type="text" placeholder="Předmět" name="subject">
        <input type="text" placeholder="Učivo" name="curriculum">
        <select name="grade">
            <option name="1">1</option>
            <option name="1-">1-</option>
            <option name="2">2</option>
            <option name="2-">2-</option>
            <option name="3">3</option>
            <option name="3-">3-</option>
            <option name="4">4</option>
            <option name="4-">4-</option>
            <option name="5">5</option>
        </select>
        <input type="text" placeholder="Hodnocení slovně" name="grade_voc">
        <input type="button" onclick="submitClick()" value="Potvrdit a uzavřít">
    </form>
    <script>
        function submitClick() {
            let really = confirm("Známka bude uzavřena, email bude odeslán. Pokračovat? Odvolat?");
            if (really) document.querySelector('#form').submit();
        }
    </script>
    <div class="s2">
        <h1>Návod k použití</h1>
        <p>
            Vyplňte prosím všechny údaje.
            <br>
            Email se odesílá zhruba 5 minut.
            <br>
            Hosting je velmi kvalitní.
        </p>
    </div>
    <div class="s3">
        <h1>Varování!</h1>
        <br>
        Po zadání všech údajů bude odeslán email!
    </div>
    <div class="ramecek">
        Vyplntě prosím jméno a příjmení žáka, předmět ze kterého je hodnocen a téma, ze kterého je hodnocen. 
        <br>
        Ve výběru známky jsou povoleny pouze známky od 1-5.
        <br>
        Ke slovnímu hodnocení lze napsat i krátký komentář.
        <br>
        Poté na vás vyskočí tabulka jestli jste všechny vyplnili správně.
        <br>
        Pokud ne, je poslední šance tento email odvolat. 
        <br>
         vše sedí, bude email odeslán na email přes protokol SMTP (Simple mail transfer protocol) na portu 25 (nešifrovaný).
         <br>
        <img src="https://i.ytimg.com/vi/wrW7Vu7NjZc/mqdefault.jpg">
    </div>
</body>
</html>
<?php 

?>