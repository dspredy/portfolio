<?php
    if(isset($_POST["submit"])){
        $name=$_POST['exampleInputName'];
        $email=$_POST['exampleInputEmail1'];
        $phone=$_POST['exampleInputPhone'];


        $to="dspredy@gmail.com";
        $subject='form submit';
        $mmsg="name:".$name"\n"."email:".$email."\n"."phone no:"$phone"\n";


        if(mail($to, $subject, $mmsg))
        {
            echo "<h2>we will contact you soon...</h2>";
        }
        else{
            echo "something went wrong";
        }



    }
?>