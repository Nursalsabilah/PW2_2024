<?php

    class Buku {
        protected $judul;
        protected $penulis;

        protected function __construct($judul, $penulis)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
        }

        protected function getInfo() {
            echo "Judul Buku : " .  $this->judul . "<br>";
            echo "Penulis : " . $this->penulis . "<br>";
        }

    }

    class BukuFiksi extends Buku{
        public $genre;

        public function __construct($judul, $penulis, $genre)
        {
            parent::__construct($judul, $penulis);
            $this->genre = $genre;
        }

        public function getInfoBukuFiksi() {
            parent::getInfo();
            echo "Genre Buku : " . $this->genre . "<br>";
        }
    }

    class BukuNonFiksi extends Buku{
        public $topik;

        public function __construct($judul, $penulis, $topik)
        {
            parent::__construct($judul, $penulis);
            $this->topik = $topik;
        }
        public function getInfoBukuNonFiksi(){
            parent::getInfo();
            echo "Topik Buku : " . " $this->topik . <br>"; 
        }
    }