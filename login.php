<?php
    $conn=mysqli_connect("http://sql8.freesqldatabase.com/","sql8583286","c4QqDJtqzu","sql8583286",3306);

    $contact=trim($_POST['registered_number']);
    $pwd=trim($_POST['Password']);

    $qry1="select * from user where registered_number = $contact";
    $raw=mysqli_query($conn,$qry1);
    $count=mysqli_num_rows($raw);

    if($count==0)
    {
        $response="noexist";
    }
    else {
        $qry2="select * from user where registered_number = $contact AND Password = '$pwd'";
        $res=mysqli_query($conn,$qry2);
        $count=mysqli_num_rows($res);
        if($count>0){
            $response="valid";
        }
        else{
            $response="invalid";
        }
        
        
    }
    echo $response;
?>