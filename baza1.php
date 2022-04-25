<?php

  if(isset($_POST['fio']) && isset($_POST['tel']) && isset($_POST['mid']) && isset($_POST['pas'])){
      $fio = $_POST['fio'];
      $tel = $_POST['tel'];
      $idm = $_POST['mid'];
      $passr = $_POST['pas'];

      //-----------bazaga yozish----------//
      $host = 'localhost';
      $user = 'root';
      $pass = '';
      $baza = 'autosalon';

      $link = mysqli_connect($host, $user, $pass, $baza);
      if(!$link){
          echo 'Хато: '
          .mysqli_connect_errno()
          .':'
          .mysqli_connect_error();
        }

      $result = mysqli_query($link, "INSERT INTO `msotish` (`id`, `idm`, `fio`, `tel`, `passr`) VALUES (NULL, '$idm', '$fio', '$tel', '$passr')");
      if($result){
        echo("Bazaga saqlandi.");
      }
      else{
        echo("Bazaga saqlashda xatolik mavjud.");
      }
    }
  header("Location:index.html");

?>