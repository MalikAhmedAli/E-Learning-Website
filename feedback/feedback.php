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
    $name = $_POST['email'];
    $email = $_POST['password'];
    $feedback=$_POST['feedback'];
    $query_2=$conn->prepare('insert into feedback values(?,?,?)');
    $query_2->execute([$name,$email,$feedback]);
?>
<script type="text/javascript">
    window.location.href = "feedback.html";
    alert("successfully you submit your feedback:");
</script>
