<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

    <!-- Variables -->
    <?php
        $original_text = 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato. Fu reso popolare, negli anni ’60, con la diffusione dei fogli di caratteri trasferibili “Letraset”, che contenevano passaggi del Lorem Ipsum, e più recentemente da software di impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum.';
        $censored_word = $_GET["censored_word"];
    ?>

    <!-- Original Text -->
    <h2>Paragrafo originale</h2>
    <p><?php echo $original_text; ?></p>
    <span>Lunghezza: <?php echo strlen($original_text); ?></span>

    <!-- Censored Text -->
    <h2>Paragrafo censurato</h2>
    <p>
        <?php 
            $censored_text = str_replace($censored_word, '***', $original_text);
            echo $censored_text;
        ?>
    </p>
    <span>Lunghezza: <?php echo strlen($censored_text) ?></span>

    <!-- Instructions -->
    <h2>Come censurare una parola</h2>
    <p>Inserire come parametro nell'URL la parola da censurare, con l'utilizzo di "censored_word".</p>
    <span>Esempio: ?censored_word=Lorem</span>
    <h3>Parola censurata: <?php echo $censored_word ?></h3>

</body>
</html>