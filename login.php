<?php
include("database.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:0px;
            padding:0px;
            background-color: #D071F9;
        }
        .container{
           max-width:400px;
           width:100%;
            background-color:#fff;
            font-size:18px;
            display: flex;
                box-shadow:1px 3px 4px 2px purple;
                margin:20px auto;
                padding:30px;
                cursor: pointer;
          
        }
        .input{
            width:65%;
            height:25px;
            outline:none;
            border:1px solid #D071F9;
            font-size:15px;
            border-radius:5px;
            color:purple;
            margin:10px;
            margin-top:20px
            cursor: pointer;
        }
        .input:focus{
            border:1px solid yellow;
        }
        .submit{
            background-color: #D071F9;
            width:100%;
            height:25px;
            outline:none;
            border:1px solid #D071F9;
            font-size:15px;
            border-radius:5px;
            color:#fff;
            transition:all 0.5s ease;
            
        }
        .submit:hover{
            cursor: pointer;
            background:purple;
        }
       
    </style>
</head>
<body><div class="container">
    <form action="#" method="POST">
    <h1 style="color: #D071F9; margin-left:40px; margin-top:10px; font-size:40px;">
         Ragistration Form </h1>
    
       First name :    <input type="text" class="input" name="fname" required><br>
        Last name :    <input type="text" class="input" name="lname" required><BR>
        Password :     <input type="password" class="input" name="pass" required><br>
        Conf pass : <input type="password" class="input" name="conpass" required><br>
        Email Add :    <input type="email" class="input" name="email" required><br>
        Contact no:  <input type="number" class="input" name="phone" required><br>
        Adddress :     <input type="text" class="input" name="add" required><br><br>
        <input type="checkbox" class="checkmark" required> are you agree to submit the form<br><br>
        <input type="submit" class="submit" value="Ragister" name="ragister">
    </form>
    </div>
</body>
</html>


<?php
if($_POST['ragister'])
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $pass=$_POST['pass'];
    $conpass=$_POST['conpass'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $add=$_POST['add'];

   $query="INSERT INTO Form  VALUES('$fname','$lname','$pass','$conpass','$email','$phone','$add' )";
   $data=mysqli_query($conn,$query);

   if($data){
    echo"data inserted into DB";
   }
   else{
    echo "Failed";
   }
}




?>