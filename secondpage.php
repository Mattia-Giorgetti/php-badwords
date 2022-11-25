<?php 

if(  (isset($_POST['testo']) && isset($_POST['parola'])) && ($_POST['testo'] && $_POST['parola']) != '') {
    $paragrafo = trim($_POST['testo']);
    $badword = trim($_POST['parola']);
    $parLength = strlen($paragrafo);
    $parCensurato = str_replace($badword, '***', $paragrafo);
} else {
    $paragrafo = 'Non hai inserito nessun testo';
    $badword = 'Non hai inserito nessuna parola da censurare';
    $parLength = 'Impossibile calcolare lunghezza';
    $parCensurato = 'Non hai inserito nessun testo';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>
<body>
    <div class="wrapper">
        <div class="text-center pt-5">
        <h2>Il tuo testo è:</h2>
        <?php echo "<p class='text-info'>$paragrafo</p>" ?>
        <h4>Lunghezza: <?php echo "<span class='text-danger'>$parLength</span>"?></h4>
        </div>
        <div class="text-center mt-5">
            <h2>Testo con censura:</h2>
            <?php echo "<p class='mypar'>$parCensurato</p>"?>
        </div>
    </div>
    
</body>
</html>