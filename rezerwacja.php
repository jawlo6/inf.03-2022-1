<?php
    $data       = $_POST["date"];
    $liczba     = $_POST["liczba"];
    $telefon    = $_POST["telefon"];
        
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "baza";
    
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if( !$conn ){
        die( "Nieudane połączenie".mysqli_connect_error());
    }

    $sql="insert into rezerwacje( data_rez,liczba_osob,telefon)                                         values(\"$data\", $liczba, $telefon)";
   
    if( mysqli_query($conn,$sql) ){
        echo "Dodano rezerwację do bazy";
    }else{
        echo "error: ". mysqli_error($conn);
    }

    mysqli_close( $conn );
