<?php
require_once('./../../db.php');
require_once('imodel.php');
class Users extends DB implements IModel
{
    const tableName = 'users';
    public function __construct()
    {
        parent::__construct();
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getAll($offset, $count)
    {
        $stm = $this->db->prepare("SELECT * FROM " . self::tableName . " LIMIT $offset,$count");
        $stm->execute();
        return $stm->fetchAll();
    }

    function insert($payload)
    {

        try {
            $username = $payload['username'];
            $address = $payload['address'];
            $phone = $payload['phone'];
            $password = $payload['password'];
            $stm = $this->db->prepare('INSERT INTO ' .
                self::tableName . '(username,address,phone,pwd)
             VALUES(:username,:address,:phone,:pwd)');
            $stm->execute(array(
                ':username' => $username,
                ':address' => $address,
                ':phone' => $phone,
                ':pwd' => md5($password)
            ));
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }

        //tra ve so ban ghi
        return $stm->rowCount();
    }

    function delete($id)
    {
        $this->db->query("DELETE FROM " . self::tableName . " WHERE id = " . $id);
    }

    function update($payload)
    {
        try {
            $address = $payload['address'];
            $phone = $payload['phone'];
            $id = $payload['id'];
            $stm = $this->db->prepare('UPDATE ' . self::tableName . ' 
            SET address = :address, phone = :phone WHERE id = :id');
            $stm->execute(array(':address' => $address, ':phone' => $phone, ':id' => $id));
            //tra ve so ban ghi
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }

        return $stm->rowCount();
    }

    function getById($id)
    {
        $rows = $this->db->query("SELECT * FROM " . self::tableName . " WHERE id= $id");
        foreach ($rows as $r) {
            $row  = $r;
        }
        return $r;
    }
}