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
    $email = $_POST['email'];
    $pass = $_POST['password'];

    echo $email;
    echo $pass;

    $query=$conn->prepare('select * from login where email = ?');
    $query->execute([$_POST['email']]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $values)
    {
    

            if($values["password"] == $_POST['password'] )
            {
                ?>
                <script type="text/javascript">
                    window.location.href = "./courses/courses2.html";
                </script>
                <?php

            }
        } 

    // $query="select password from login where email = '$email'";
    // $re;
    // if ($result->num_rows > 0) {
    //     while($row = mysqli_fetch_assoc($result)) {
    //         if($row["password"] == $pass )
    //         {
    //            

    //     }
            
  
   

?>