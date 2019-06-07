<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ul, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
        <!-- foreach обычный -->
        <!-- <ul>
            <?php foreach ($person as $feature) : ?> 
                <li><?= $feature ?></li>
            <?php endforeach; ?>
        </ul> -->

        <ul>
            <?php foreach ($person as $key => $val) : ?>
                <li> <strong><?= "{$key} = "; ?></strong><?= $val; ?></li>
            <?php endforeach; ?>
        </ul>
        <!-- также есть тернарки -->
        <h3> Person is <?= $person['married'] ? 'Married' : 'Not Married' ?></h3>
    </body>
</html>