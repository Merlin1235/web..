<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myform</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121d81;
        }
        form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #128b26;
            border-radius: 5px;
        }
        </style>
<body>
    <form action="sign.php" method="post" id="myForm">
        <label for="email">Email Address:</label><br><br>
        <input type="email" id="email" name="email"><br><br>
        
        <label for="username">Username:</label><br><br>
        <input type="text" id="username" name="username"><br><br>

        <label for="password">Password:</label><br><br>
        <input type="password" id="password" name="password"><br><br>

        
        <button type="submit"> sign up</button>
        <button type="reset">Reset</button>
        <button type="button" onclick="window.location.href='index.php'">Back</button>
    </form>

</body> 
</html>