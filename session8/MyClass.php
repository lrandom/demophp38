<?php
class MyClass
{
    final public function getData()
    {
        return 'hhihi';
    }
}

class MyChildClass extends MyClass
{

    function getData()
    {
        echo 'haha';
    }
}


$obj = new MyChildClass();