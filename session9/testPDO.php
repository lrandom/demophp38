<?php
phpinfo();
exit();

try {
    $pdo = new PDO('mysql:host=localhost;dbname=demo_php38', 'root', 'koodinh');
    /*$rows = $pdo->query('SELECT * FROM users');*/
    /*foreach ($rows as  $r) {
        echo $r['id'];
        echo $r['name'];
        echo $r['address'];
        echo $r['phone'];
    }*/
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try {
        $stmt = $pdo->prepare('INSERT INTO users(name1,address,phone) VALUES (:name, :address, :phone)');
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':phone', $phone);

        $name = 'Nam';
        $address = 'HN';
        $phone = '9238293823';

        $stmt->execute(); //
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }



    //su dung uname placholder
    //$stmt1 = $pdo->prepare('INSERT INTO users(name,address,phone) VALUES (?,?,?)');*/
    /*$stmt1->bindParam(1, $name);
    $stmt1->bindParam(2, $address);
    $stmt1->bindParam(3, $phone);

    $name = 'Ha';
    $address = 'HN';
    $phone = '12323232323';*/


    /*$stmt1->execute(array('Ha1', 'Address1', '3843743748347'));
    $stmt->execute(array(':name' => 'Haha', ':address' => 'a2323', ':phone' => 'sdksdjsk'));*/

    //Lay Du lieu bang prepared statement
    /*$stmt = $pdo->prepare('SELECT * FROM users where id = :id');
    $stmt->execute(array(':id' => 1));
    $rows = $stmt->fetchAll();
    foreach ($rows as $row) {
        echo $row['id'];
    }

    while ($row = $stmt->fetch()) {
        echo $row['id'];
    }

    while ($obj = $stmt->fetchObject()) {
        echo $obj->id;
    }*/
} catch (PDOException $th) {
    echo $th->getMessage();
}