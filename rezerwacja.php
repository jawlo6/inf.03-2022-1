<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "baza";

    $data       = $_POST["date"];
    $liczba     = $_POST["liczba"];
    $telefon    = $_POST["telefon"];
        
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if( !$conn ){
        die( "Nieudane połączenie".mysqli_connect_error());
    }
    
        
    echo "Dodano rezerwację do bazy";

    $sql="insert into rezerwacje( data_rez,liczba_osob,nr_stolika, telefon) values($data, $liczba, 1, $telefon)";
    echo @sql;
        
    if(mysqli_query($conn,$sql)){
        echo "Dodano rezerwację do bazy";
        echo "<br>$data $liczba $telefon";
    }else{
        echo "error: ". mysqli_error($conn);
    }

    mysqli_close( $conn );