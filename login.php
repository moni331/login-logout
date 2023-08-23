<?php 
echo 
'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
    body{
        background-image: url("bg-01.jpg");
    }
    .container {
        width: 300px;
        height: 300px;
        margin: 0 auto;
        padding: 35px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #f2f2f2;

}

h1 {
        text-align: center;
}


label {
        display: block;
        margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;

        
}

button[type="submit"] {
        width: 100%;
        padding: 8px;
        background-color: #4caf50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
}

button[type="submit"]:hover {
        background-color: #45a049;
}

p {
        text-align: center;
        margin-top: 10px;
}
.hello{
    background-size: cover;
}
</style>

</head>
<body class="hello">
    <h1>Login Form</h1>
    <div class="container">
    <form action="loginprocess.php" method="post">
    <label for="username"> Username </label>
    <input type="text" name="username" placeholder="Enter your username" required ><br><br>

    <label for="Password">Password</label>
    <input type="password" name="Password" placeholder="Enter your password" required ><br><br>
    <button type="submit" name="login">Login</button>
    </form>
    </div>

</body>
</html>';



?>
