<?php
require_once __DIR__ . '/inc/all.php';

if (!empty($_POST)) {
    // Es wird geprüft, ob generell Daten per POST abgeschickt wurden.

    // Falls in den abgesendeten Formular Daten die Eigenschaft 'number'
    // gesetzt ist, wird die Variable $number auf den übertragenen Wert gesetzt.
    // Das Gleiche gilt für die Eigenschaft 'text'.

    // @ unterdrückt PHP Warnungen
    $number = '';
    if (isset($_POST['number'])) {
        $number = @(string)$_POST['number'];
    }

    $text = '';
    if (isset($_POST['text'])) {
        $text = @(string)$_POST['text'];
    }

    // Es wird geprüft, ob die Variablen existieren und nicht leer sind.
    if (!empty($text) && !empty($number)) {
        $stmt = $pdo->prepare('INSERT INTO data (`number`, `text`) VALUES (:number, :text)');
        $stmt->bindValue('number', $number);
        $stmt->bindValue('text', $text);
        $stmt->execute();

        echo '<p>Vielen Dank für Ihre Eingabe!</p><p><a href="index.php">Zurück zum Eingabe Formular</a></p>';
    }
}