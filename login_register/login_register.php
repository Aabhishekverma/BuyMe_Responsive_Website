<?php
require('connection.php');
session_start();

#for Login
if(isset($_POST['login']))
{
    $query ="SELECT * FROM `registered_user` WHERE `email` = '$_POST[email_username]' OR `username`='$_POST[email_username]'";
    $result=mysqli_query($con,$query);

    if($result)
    {
      if (mysqli_num_rows($result)==1)
      {
        $result_fetch=mysqli_fetch_assoc($result);
        if(password_verify($_POST['password'],$result_fetch['password']))
        {
         # if password matched
         $_SESSION['logged_in'] = true;
         $_SESSION['username'] = $result_fetch['username'];
         header("location: index.php");

        }
        else{
            echo"
            <script>
            alert('incorrect password');
            window.location.href='index.php';
            </script>
           ";
        }
      }
      else
      {
        echo"
        <script>
        alert('Email or Username not Registered');
        window.location.href='index.php';
        </script>
       ";
      }
    }
    else{
        echo"
    <script>
    alert('cannot run query');
    window.location.href='index.php';
    </script>
   ";
    }
}



#for Registration
if(isset($_POST['register']))
{
    $user_exist_query="SELECT * FROM `registered_user` WHERE `username` = '$_POST[username]' OR `email`='$_POST[email]'";
    $result = mysqli_query($con,$user_exist_query);

    if($result)
    {
        #execute when username or email already exist
     if(mysqli_num_rows($result)>0)
     {

        #if user o remail already taken
        $result_fetch=mysqli_fetch_assoc($result);
        #error for username already registered
        if($result_fetch['username']==$_POST['username'])
        {
            echo"
                <script>
                  alert('$result_fetch[username] - Username already taken');
                  window.location.href='index.php';
                 </script>";
        }
        #error for email already registered
        else{
            echo"
            <script>
            alert('$result_fetch[email] - Email already taken');
            window.location.href='index.php';
           </script>";
        }
     }
      
    #if no one take username or email
     else
     {
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
        $query="INSERT INTO `registered_user`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";
        if(mysqli_query($con,$query))
        {
            echo"
            <script>
            alert('registration successfull');
            window.location.href='index.php';
            </script>";
        }
        else
        {
            #if data can not inserted
            echo"
           <script>
            alert('cannot run query');
            window.location.href='index.php';
           </script>";
        }
     }
   }
   else
   { 
    echo"
    <script>
    alert('cannot run query');
    window.location.href='index.php';
    </script>
   ";
  }
} 

?>