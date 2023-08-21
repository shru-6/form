<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style media="screen">
        body{
    background-color: rgb(155, 155, 155);
    font-family: sans-serif;
    /* align-content: center; */
    /* text-align: center; */
    /* justify-content: center;
    display: flex; */
    
}

.form{
    /* margin-top: 10%;
    margin-bottom: 10%;
    margin-left: 30%;
    margin-right: 5%; */
    background-color: rgb(26, 26, 26);
    padding: 40px;
    height: 225px;
    width: 240px;
    /* align-content: center; */
    text-align: center;
}

.form-heading{
    color: whitesmoke;
    /* align-content: center; */
    /* background-color: bisque; */
    /* text-align: center; */
}

form input{
    background-color:rgb(26, 26, 26) ; /*rgb(188, 188, 188) change background color of fields*/
    color: white;
    border: 0px;
    border-bottom:0.5px solid rgb(148, 238, 148);
    padding: 5px;
    margin: 5px;
    /* align-content: center; */
}

/* .input{ */
    /* text-align: center; */
    /* background-color: blue; */
    /* background-color: pink; */
    /* color: beige; */
    /* align-content: center; */
    /* -webkit-text-fill-color: red; //to change text color */
/* } */

.submit{
    margin: 5px;
    margin-top: 20px;
}

form button{
    background-color: rgb(148, 238, 148);
    border-radius: 20px;
    padding: 5px;
    width: 90px;
    border: 0px solid black;
}
</style>

</head>

<body>

    <form method="post">
    <div class="form">

        <div class="form-heading"><h3>Enter details</h3></div>

        <div class="input">
        <div class="name" ><input type="text" name="name" placeholder="Name" required/></div>
        <div class="email"><input type="email" name="email" placeholder="Email" required/></div>
        <div class="password"><input type="password" name="pass" placeholder="Password" required/></div>
        <div class="submit"><button><b>Submit</b></button></div>
        </div>

    </div>
    </form>

</body>
</html>

<?php
   extract($_REQUEST);
   $file=fopen("C:\Users\Shruti\Desktop\data.txt","a");
   fwrite($file,"Name: ");
   fwrite($file, $name . "\n");
   fwrite($file,"Email: ");
   fwrite($file, $email . "\n");
   fwrite($file,"Pass: ");
   fwrite($file, $pass . "\n");
   
?>