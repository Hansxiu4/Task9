<?php
    require_once 'class_matematika.php';

    Matematika::$counter++;
    Matematika::$counter++;
    Matematika::naikanCounter();
    echo 'Counter Sekarang : '. Matematika::$counter;
    echo '<hr/>';

    $x = Matematika::tambahkan(4,5);
    echo "4 + 5 = $x";
    echo '<hr/>';

   

    echo 'Nilai PHI : '. Matematika::PHI;
    $luas_lingkaran = Matematika::luasLingkaran(8);
    echo '<br/>Luas Lingkaran dengan Jari-jari 8 adalah : '. $luas_lingkaran;
    echo '<hr/>';

    $x = Matematika::kurangkan(35,20);
    echo "35 - 20 = $x";
    echo '<hr/>';
?>