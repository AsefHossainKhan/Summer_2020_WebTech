<?php
    // $connection = mysqli_connect('127.0.0.1', 'root', '', 'dota2coaching');
    // $name = "hello";
    // $query = "INSERT INTO test (name, email, address) VALUES ('$name','asef@gmail.com','lala Land')";
    // mysqli_query($connection,$query);

    $bool = false;
    function test () {
        global $bool;
        if (true) {
            $bool = true;
        }
    }
    test();
    var_dump($bool);
?>