<?php
require_once __DIR__ . '/inc/all.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animated Counter</title>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="heading">
    <h2>Statistik</h2>
</header>

<div>
    <h3>Text und Zahl eingeben</h3>

    <form method="POST" action="submit.php">
        <label for="text">Text:</label>
        <input type="text" id="text" name="text" required="required">

        <label for="number">Zahl:</label>
        <input type="number" id="number" name="number" required="required">

        <input type="submit" value="Absenden">
    </form>

    <?php if (!empty($results)): ?>
    <p>Die Anzahl der Einträge in der Datenbank beträgt <?php echo count($results)?>. </p>
    <?php endif;?>
</div>

<main class="counter-container">
    <?php if (!empty($results)): ?>
        <?php foreach ($results as $result): ?>
            <div class="output">
                <p><?php echo e($result['text']) ?></p>
                <h3 class="counter" data-count="<?php echo $result['number'] ?>">0</h3>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Es wurden noch keine Daten hinterlegt.</p>
    <?php endif; ?>
</main>
</body>
</html>