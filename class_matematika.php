<?php
    class Matematika {
        const PHI = 3.14;

        public static $counter = 100;

        public static function tambahkan($a,$b){
                return $a + $b;
        }
       
        public static function naikanCounter(){
            self::$counter;
        }

        public static function luaslingkaran($jari){
            $luas = self::PHI * $jari * $jari;
            return $luas;
        }
        public static function kurangkan($a,$b){
            return $a - $b;
    }
    }
?>