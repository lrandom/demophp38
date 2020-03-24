<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*date_default_timezone_set('Asia/Bangkok');
    echo date('yy-m-d H:i:s', time());*/

    $string = '24/03/2020';
    $string = str_replace('/', '-', $string);
    echo $string;
    /*$dateTime = strtotime('24-3-2020');
    echo date('yy-m-d H:i:s', $dateTime);*/
    ?>
</body>

</html>