<?php 
    require_once 'class_buku.php';

    $Fiksi = new buku();
    $Fantasi = new buku();

    $Fiksi->set_name('Fiksi');
    $Fiksi->set_judul('The Great Gatsby');
    $Fantasi->set_name('Fantasi');
    $Fantasi->set_judul('The Hobbit');

    echo'<br/>Nama Buku '.$Fiksi->get_name().' Judulnya '.$Fiksi->get_judul();
    echo '<br/>Nama Buku '.$Fantasi->get_name().' Judulnya '.$Fantasi->get_judul();
?>