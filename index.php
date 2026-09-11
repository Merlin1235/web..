<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIBS Technical College</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #041f42;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: #09d6b4;
            color: white;
            padding: 20px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 50px;
            margin-left: 15px;
        }
        nav a:hover {
            color: #ffcc00;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 50px 20px;
        }

        .welcome {
            background: white;
            max-width: 750px;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .welcome h1 {
            color: #003366;
            font-size: 38px;
            margin-bottom: 20px;
        }
        
        .buttons a {
            display: inline-block;
            padding: 13px 28px;
            margin: 5px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }

        .signup {
            background: #003366;
            color: white;
            border: 2px solid #003366;
            border-radius: 5px;
        }

        
        .signin {
            background: #00ffff;
            color: #003366;
            border: 2px solid #003366;
            border-radius: 5px;
        
        }

        footer {
            background: #099784;
            color: white;
            text-align: center;
            padding: 18px;
        }
    </style>
</head>

<body>

    <header>
        <div class="logo">
            <img src=https://nibs.ac.ke/wp-content/uploads/2021/06/cropped-NIBS-Logo-192x192.png alt="NIBS Technical College Logo">
            <h2>NIBS Technical College</h2>
        </div>

        <nav>
            <a href="signup.php">Sign Up</a>
            <a href="signin.php">Sign In</a>
        </nav>
    </header>

    <main>
        <section class="welcome">
            <h1>Welcome to NIBS Technical College</h1>

            <p>
                Welcome to NIBS Technical College, where we empower students
                with quality technical and professional education.
            </p>

            <div class="buttons">
                <a href="signup.php" class="signup">Sign Up</a>
                <a href="signin.php" class="signin">Sign In</a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> NIBS Technical College. All Rights Reserved.</p>
    </footer>

</body>
</html>
