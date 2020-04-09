<?php
class Hocsinh
{

    public $fullname;
    public $dob;

    public function __construct($fullname, $dob)
    {
        $this->fullname = $fullname;
        $this->dob = $dob;
    }

    public function display()
    {
        echo $this->fullname . $this->dob;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $fullname = $_POST['fullname'];
        $dob = $_POST['dob'];
        $obj = new Hocsinh($fullname, $dob);
        $obj->display();
    }
    ?>
    <form method="post">
        <input type="text" name="fullname" placeholder="Họ tên" />
        <input type="text" name="dob" placeholder="Năm sinh" />
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>