


<?php

    function array_contains_array($haystack, $needle) {
        return count(array_intersect($haystack, $needle)) == count($needle);
    }


    echo '<a href="form.php">Zpět</a>';
    var_dump($_POST);
    if ($_SERVER['REQUEST_METHOD'] !== "POST") die();
    if (array_contains_array($_POST, ['firstname', 'surname', 'subject', 'curriculum', 'grade', 'grade_voc'])) die('Vyplnte vsechny udaje');
    


    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $subject = $_POST['subject'];
    $curriculum = $_POST['curriculum'];
    $grade = $_POST['grade'];
    $grade_voc = $_POST['grade_voc'];

    $to      = 'r201@email.cz';
    $subject = 'Hodnocení žáka/studenta';
    $message = "$firstname $surname dostal z $curriculum znamku $grade ($grade_voc)";
    $headers = 'From: noreply@ruzicka-markojugend.ga'       . "\r\n" .
                 'Reply-To: ruzickaairsoft@gmailcom' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    echo mail($to, $subject, $message, $headers);
        echo '<script>alert("Odesílám email přes SMTP na portu 25...")</script>';
	

?>