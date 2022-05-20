<?php
    $username= "root";
    $password="";

    try{
        $conn=new PDO("mysql:host=localhost;dbname=webuni",$username,$password);
        $conn->setAttribute(PDO :: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo("Connection successful");
    }
    catch(PDOException $e){
        echo("Connection_failed"). $e->getMessage();
    }
    $name = $_POST['name'];
    $fathername = $_POST['fathername'];
    $gender = $_POST['gender'];
    $cnic = $_POST['cnic'];
    $contact = $_POST['contactnumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $date = $_POST['date'];

    // echo $name;
    // echo $fathername;
    // echo $gender;
    // echo $contact;
    // echo $email;
    // echo $password;
    // echo $address;
    // echo $city;
    // echo $date;

    $query_2=$conn->prepare('insert into student values(?,?,?,?,?,?,?,?,?,?)');
    $query_2->execute([$name,$fathername,$gender,$cnic,$contact,$email,$password,$address,$city,$date]);
    $query_3=$conn->prepare('insert into login values(?,?)');
    $query_3->execute([$email,$password]);
?>
                <script type="text/javascript">
                    window.location.href = "../index1.html";
                </script>

