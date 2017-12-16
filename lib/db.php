<?php
    $pdo = new PDO("mysql:host=localhost;dbname:portfolio", 'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $count=$pdo->query('SELECT * FROM  users');
    var_dump($count);
