<?php
    $conn=mysqli_connect("http://sql8.freesqldatabase.com/","sql8583286","c4QqDJtqzu","sql8583286",3306);


    $username=trim($_POST['Username']);
    $usertype=trim($_POST['UserType']);
    $emailid=trim($_POST['Email_Id']);
    $address=trim($_POST['Address']);
    $contact=trim($_POST['registered_number']);
    $gst=trim($_POST['Buyer_GST']);
    $org=trim($_POST['Organization_Name']);
    $pwd=trim($_POST['Password']);

    $qry1="select * from user where registered_number = $contact";
    $raw=mysqli_query($conn,$qry1);
    $count=mysqli_num_rows($raw);

    if ($count>0) {
        $response="exists";
    }
    else {
        $qry2="INSERT INTO `user` (`Username`, `ID`, `UserType`, `Email_Id`, `Address`, `registered_number`, `Buyer_GST`, `Organisation_Name`, `Password`) VALUES ('$username', NULL, '$usertype', '$emailid', '$address', '$contact', '', '', '$pwd');";
        $res=mysqli_query($conn,$qry2);
        if ($res) {
            $response="inserted";
        } else {
            $response="failed";
        }
    }
    echo $response;
?>