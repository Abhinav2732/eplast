<?php
    $conn=mysqli_connect("http://sql8.freesqldatabase.com/","sql8583286","c4QqDJtqzu","sql8583286",3306);


    $new_pass=trim($_POST['n_pass']);
    $contact=trim($_POST['registered_number']);

    $qry1="update user set Password=$new_pass where registered_number = $contact";
    $res=mysqli_query($conn,$qry1);

    if($res)
    {
        $response="changed";
    }
    else {
        $response="error";
    }
    echo $response;
?>