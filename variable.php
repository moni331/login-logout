
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
    <style>
        body{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url("bg-01.jpg");

        }
        .picture{
            background-size: cover;
        }
        .logout{
        width: 100%;
        padding: 8px;
        background-color: #4caf50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 40px;
        }
        h1{
            text-align: center;
        }
        .container {
        width: 300px;
        height: 250px;
        margin: 0 auto;
        padding: 35px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #d3eaf2;
        }
        

    </style>
</head>
<body class="picture">
    <H1>User Information</H1>
    <div class='container'>
    <?php 
    session_start();
    echo "Firstname: $_SESSION[firstname]";
    echo "<br>";
    // echo $_SESSION['lastname'];
    echo "Lastname: $_SESSION[lastname]";
    echo "<br>";
    echo "Date of Birth: $_SESSION[dob]";
    echo "<br>";
    echo "Mobile no: $_SESSION[mobile]";
    echo "<br>";
    echo "Email: $_SESSION[email]";
    echo "<br>";
    echo "University: $_SESSION[university]";
    echo "<br>";
    echo "Department $_SESSION[department]";
    echo "<br>";

?>

    <a href="logout.php"><button class="logout">Logout</button></a>
</div>
</body>
</html>