<!-- fucntion merupakan sekumpulan kode  -->
<!-- function digunakan agar kode lebih powerfull dan readable dan reusable -->
<!-- di php ada beberapa macam function -->
<!-- 1. built in = sudah disediakan php mis echo  -->
<?php 
echo(date('Y'));
echo"<br>";
echo(date('y'));
echo"<br>";
echo('Test');
echo"<br>";
?>
<?php 
function printMyName(){
    echo 'Namaku Andrian';
}
printMyName();
echo"<br>";
?>


<?php 
function printMyName_($name){
    echo "My Name is $name";
}
printMyName_('Andrian');
echo"<br>";
?>

<!-- memberi default parameter agar tidak eror -->
<?php 
function printMyName_a($name ="Andrian"){
    echo "My Name is $name";
}
printMyName_a();
echo"<br>";
?>

<!-- Return Funct -->
<?php
date('y'); //Mengembalikan nilai namun karena tidak menggunakan funct echo maka tidak ditampilkan
echo(date('y')); //func echo digunakan untuk menampilkan 
echo"<br>";
?>

<!-- contoh menggunakan variabel -->
<?php 
$tanggal = date('Y');
echo($tanggal);
echo"<br>";
?>

<!--RETURN DIGUNAKAN AGAR NILAI VARIABEL MENJADI LEBIH REUSEABLE/ DAPAT DIPANGGIL DAN DIGUNAKAN KEMBALI -->
<?php
function printNumA(){
    return 5;
}

function printNumB(){
    return 9;
}

function printNumC(){
    echo 45;
}


echo(printNumA());
echo"<br>";
echo(printNumA()*printNumB());

echo"<br>";
echo(printNumA()*printNumB()*printNumA());"<br>";

// dari contoh diatas memberikan gambaran bahwa dengan menggunakan return nilai dapat digunakan dan dipanggil kembali
?>
 

 <!-- 15:15 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOC</title>
    <style type="text/css">
    </style>
</head>
<body>
    <h1><?php printMyName() ?></h1>
    <h1><?php printMyName_('ANDRIAN') ?></h1>
    <h1><?php printMyName_a() ?></h1>
</body>
</html>