<?php
$word = $_GET["word"];
$text = $_GET["text"];
$censured_text = str_replace($word, "***", $text);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
    <main>
        <h2>Abbiamo censurato la parola "<?php echo $word; ?>" nel testo</h2>
        <h3>Testo censurato</h3>
        <p><?php echo $censured_text; ?></p>
        <p>Il testo censurato è lungo <?php echo strlen($text); ?> caratteri</p>

        <h3>Testo originale</h3>
        <p><?php echo $text; ?></p>
        <p>Il testo originale è lungo <?php echo strlen($censured_text); ?> caratteri</p>
        <a href="index.php">Torna alla home</a>
    </main>
</main>    
</body>
</html>