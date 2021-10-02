<?php
   include "config.php";

        $username=$_POST['username'];
        $password=$_POST['password'];

            $check_user1="select *from register WHERE username='$username' AND password='$password'";
            $check_user2="select *from register2 WHERE username='$username' AND password='$password'";

                $run1=mysqli_query($connect,$check_user1);
                $run2=mysqli_query($connect,$check_user2);
                
                    if(mysqli_num_rows($run1)){
                        header("location:admin.php?id=".$username."");
                    }
                    else if(mysqli_num_rows($run2)){
                        header("location:user.php?id=".$username."");
                    }
                    else{
                        header("location: home.php");
                    }
                                   
?>