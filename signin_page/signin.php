<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="outer-box">
        <div class="inner-box">
            <header class="signup-header">
                <h1>Signin</h1>
                <p>welcome to nightingale</p>
            </header>
            <main class="signin-body">
                <form action="back_login.php" method="post">
                    <p>
                        <label for="username">User Name</label>
                        <input type="text" id="username" name="username" placeholder="Your UserName" required>
                    </p>
                    <p>
                        <label for="password">Password</label>
                        <input type="password" id="password" placeholder="at least 8 characters" required>
                    </p>
                    <p>
                        <input type="submit" id="submit" value="Signin">
                    </p>
                </form>
            </main>

            <footer class="signin-footer">
                <p>You haven't an Account? <a href="../signup_page/signup.php">Signup</a></p>
            </footer>
        </div>
        <div class="circle c1"></div>
        <div class="circle c2"></div>
    </div>
</body>
</html>