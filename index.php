<?php

$content = file_get_contents("https://www.activisionblizzard.com/leadership");

$bgColor = "bg-success";
$image = "images/bobby-out.png";
$answer = "NO!!!!";

if (str_contains($content, "href=\"/leadership/bobby-kotick\"")) {
    $bgColor = "bg-danger";
    $image = "images/bobby-in.png";
    $answer = "OMFG!! He's still there!! Please leave!!";
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Is Bobby Kotick stil CEO of Activision-Blizzard?</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div class="container-fluid vw-100 vh-100 text-center <?= $bgColor ?>">
            <div class="content">
                <h1 class="text-white font-weight-bold"><?= $answer ?></h1>
                <img src="<?= $image ?>" alt="" class="img-fluid">
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>