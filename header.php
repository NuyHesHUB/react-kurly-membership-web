<?php
    $servername='localhost';
    $username='sehyeon';
    $password='Wntpgus!32';
    $databasename='sehyeon';

    $conn=mysqli_connect($servername, $username, $password, $databasename);
    mysqli_set_charset($conn, 'utf8');

    if(!$conn){
        die('데이터베이스 서버 접속 실패');
    }
?>