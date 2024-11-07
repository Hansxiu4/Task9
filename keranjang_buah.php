<?php
    require_once 'class_fruit.php';

    $apple = new Fruit();
    $banana = new Fruit();

    $apple->set_name('Apple');
    $apple->set_color('Red');
    $banana->set_name('Banana');
    $banana->set_color('Yellow');

    echo'Nama Buah '.$apple->get_name().'Warnanya '.$apple->get_color();
    echo '<br/>Nama Buah '.$banana->get_name().' Warnanya '.$banana->get_color();
?>  