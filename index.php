<?php

$data = [
    'Besucher' => 21035,
    'Tage' => 8025,
    'Anmeldungen' => 300
];

$index = 0;
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

<main class="counter-container">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $text => $number): ?>
            <?php $index++ ?>
            <div class="counter-<?php echo $index ?>">
                <h3>Paar</h3>
                <h4>Zahl und Text eingeben</h4>
                <div class="input col-1">
                    Zahl
                    <input type="text">
                </div>
                <div class="input col-2">
                    Text
                    <input type="number">
                </div>
                <button type="submit">Absenden</button>
                <div class="output">
                    <p><?php echo $text ?></p>
                    <h3 class="counter" data-count="<?php echo $number ?>">0</h3>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Es wurden noch keine Daten hinterlegt.</p>
    <?php endif; ?>
</main>
</body>
</html>