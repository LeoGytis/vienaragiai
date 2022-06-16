<?php

trait SayJa
{
    public function sayJa()
    {
        echo 'Ja-ja-ja <br>';
    }
}

trait SayBay
{
    public function sayBay()
    {
        echo 'By-bay <br>';
    }
    // public function sayHello() {
    //     parent::sayHello();
    //     echo 'World!';
    // }
}

class Base
{
    use SayBay, SayJa;
    public function sayHello()
    {
        echo 'Hello <br>';
    }
}

trait HelloK
{
    public function sayHello()
    {
        echo 'Hello, Kitty <br>';
    }
}

trait HelloR
{
    public function sayHello()
    {
        echo 'Hello, Racoon <br>';
    }
}


class MyHelloWorld extends Base
{
    use HelloK, HelloR {
        HelloR::sayHello insteadof HelloK;
        HelloK::sayHello as sayHelloKitty;
    }
}

// $o = new MyHelloWorld();
$o = new MyHelloWorld;
$o->sayHello();
$o->sayHelloKitty();
