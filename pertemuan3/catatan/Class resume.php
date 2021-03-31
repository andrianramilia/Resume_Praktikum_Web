<?php
// Kelas merupakan template dari suatu object 


// di property terdapat akses keyword 
// a. public (dapat diakses secara public)
// b. privat
// c. protected
// class User{ merupakan sebuah kelas user yang memiliki beberapa variabel
//     public $name;
//     public $age;
//     private $gender;
// }
//----------Perbedaan Fungsi dan Method-----------------
// Fungsi = lebih global dan penggunaannya untuk keperluan umum serta dapat digunakan di semua file 
// Method = fungsi yang ada di dalam kelas, sehingga harus membuat class terlebih dahulu untuk suatu objek, untuk pemanggilan property harus menggunakan $this
 
require './function resume.php';// digunakan untuk memanggil function pada file yang memiliki nama function resume

    class User{
        public $name;
        public $age;
        private $gender="None";


        public function setGender($gender_name){// fungsi setGender untuk menampung nilai variabel gender yang diinputkan
            $this->gender = $gender_name;
        }//
        // ini adalah fungsi untuk mengganti isi variabel


        public function getGender(){ // fungsi get untuk mengambil nilai dari gender
            printNumC();//
            return $this->gender;
        }// ini adalah fungsi untuk mengembalikan nilai
    }




?>