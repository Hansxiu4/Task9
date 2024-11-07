<<?php 
    class buku{
        public $name;
        public $judul;

        function set_name($name){
           $this->name = $name;
        
        }

        function set_judul($judul){
            $this->judul = $judul;
        }

        function get_name(){
            return $this->name;
        }
        function get_judul(){
           return $this->judul;
        }
    }
?>