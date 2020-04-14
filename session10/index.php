<?php
class User
{
    private $id;
    private $name;

    function getId()
    {
        return $this->id;
    }


    public function __construct()
    {
        //parent::__construct();
        //Do your magic here
        $this->id = 10;
    }
}


$pdo = new PDO('mysql:host=localhost;dbname=demo_php38', 'root', 'koodinh');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $pdo->beginTransaction();
    $pdo->exec('INSERT INTO users(username,address,phone,pwd) VALUES("luan2","HN","39843894","12323232")');
    $pdo->exec('INSERT INTO users(username,address,phone,pwd) VALUES("luan3","HN1","39843894","123232322")');
    $pdo->commit();
} catch (\Throwable $th) {
    //throw $th;
    echo $th->getMessage();
    $pdo->rollback();
}



/*
$stm = $pdo->prepare('SELECT * FROM users');
$stm->setFetchMode(PDO::FETCH_ASSOC);
while ($row = $stm->fetch()) {
    echo $row['id'];
}

$stm->setFetchMode(PDO::FETCH_OBJ);
while ($obj = $stm->fetch()) {
    echo $obj->id;
}

$stm->setFetchMode(PDO::FETCH_CLASS, 'User');

while ($obj = $stm->fetch()) {
    echo $obj->getId();
}*/