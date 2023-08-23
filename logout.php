
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
    <style>
        body{
            align-items: center;
            background-image: url("bg-01.jpg");
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        h1 {
            margin-top: 15%;
            color:#fff;
            text-align: center;
        }
        .picture{
            background-size: cover;
        }
        button[type="submit"] {
        margin-top: 5%;
        width: 30%;
        margin-left: 35%;
        padding: 10px;
        background-color: #4caf50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
}

button[type="submit"]:hover {
        background-color: #45a049;
}
    </style>
</head>
<body class="picture">
    <?php 

    session_start();
    session_destroy();
    ?>
    <div>
        <h1>You have been logged out successfully!</h1>
    </div>
    <div>
        <a href="login.php"><button type="submit">Back to Homepage</button>
    </div>
</body>
</html>