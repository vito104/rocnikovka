


<?php

    function array_contains_array($haystack, $needle) {
        return count(array_intersect($haystack, $needle)) == count($needle);
    }


    echo '<a href="form.php">Zpět</a>';
    if ($_SERVER['REQUEST_METHOD'] !== "POST") die();
    if (array_contains_array($_POST, ['firstname', 'surname', 'subject', 'curriculum', 'grade', 'grade_voc'])) die('Vyplnte vsechny udaje');
    


    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $subject = $_POST['subject'];
    $curriculum = $_POST['curriculum'];
    $grade = $_POST['grade'];
    $grade_voc = $_POST['grade_voc'];

    $to      = 'r201@email.cz';
    $subjectemail = 'Hodnocení žáka/studenta';
    $message = "$firstname $surname dostal z předmětu $subject z učiva $curriculum znamku $grade ($grade_voc)";
    $headers = 'From: noreply@ruzicka-markojugend.ga'       . "\r\n" .
                 'Reply-To: ruzickaairsoft@gmailcom' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    echo mail($to, $subjectemail, $message, $headers);
        echo '<script>alert("Odesílám email přes SMTP na portu 25...")</script>';
        echo '<script>window.location.replace("form.php")</script>';
?>