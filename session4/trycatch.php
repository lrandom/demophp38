<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*$num = 10;
    try {
        $num2 = $num / 0;
    } catch (Exception $th) {
        echo 'Loi chia cho 0';
    }*/

    /*try {
        $f = fopen('test.txt', 'r');
    } catch (\Throwable $th) {
        //throw $th;
        echo 'Khong tim thay tap tin';
    }
*/
    function addNumber($num)
    {
        if ($num < 10) {
            throw new Exception("So nho hon 10", 1);
        }
    }


    try {
        addNumberA(2);
    } catch (\Exception $th) {
        //throw $th;
        echo $th->getMessage();
        echo $th->getCode();
    }
    ?>
</body>

</html>