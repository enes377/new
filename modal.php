<?php
    include "als.php";

    $ad=$_POST["adi"];
    $soyad=$_POST["soyadi"];
    $eposta=$_POST["email"];
    $sifre=$_POST["password"];

    $kaydet=$db->prepare("INSERT INTO loginform SET
      demo_name=:demo_name, 
      demo_lastname=:demo_lastname,
      demo_pw=:demo_pw,
      demo_mail=:demo_mail
    ")
    
    $insert=$kaydet->execute(array(
      'demo_name'=>$_POST["adi"],
      'demo_lastname'=>$_POST["soyadi"],
      'demo_pw'=>$_POST["password"],
      'demo_mail'=>$_POST["email"]
    ));

    if($insert)
    {
      Header("Location:index1.php?durum=ok");
    } else {
      Header("Location:index1.php?durum=no");
    }
?>