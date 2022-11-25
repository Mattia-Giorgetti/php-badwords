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
    
    <div class="text-center pt-4 wrapper">
    <h1 class="mb-5">Welcome to <span class="titleSpan">PHP Badwords</span></h1>
        <form action="secondpage.php" method="POST">
            <h2>Scrivi una frase:</h2>
        <textarea class="rounded-3" name="testo" cols="50" rows="10"></textarea><br><br><br>
            <p>Scegli la parola che vuoi censurare:</p>
        <input class="rounded-1" type="text" name="parola"> <br><br><br>
        <button class="rounded-1" type="submit">Invia</button>
        </form>
    </div>
</body>
</html>