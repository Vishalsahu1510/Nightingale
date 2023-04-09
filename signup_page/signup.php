<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="outer-box">
        <div class="inner-box">
            <header class="signup-header">
                <h1>Signup</h1>
                <p>It just takes 30 seconds</p>
            </header>
            <main class="signup-body">
                <form action="back_signup.php" method="post">
                    <p>
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="username" placeholder="Your Name" required>
                    </p>
                    <p>
                        <label for="email">Your Email</label>
                        <input type="email" placeholder="Enter your email" name="email" id="email" required>
                    </p>
                    <p>
                        <label for="password">Your Password</label>
                        <input type="password" id="password" name="password" placeholder="at least 8 characters" required>
                    </p>
                    <p>
                        <input type="submit" id="submit" value="Create Account">
                    </p>
                </form>
            </main>

            <footer class="signup-footer">
                <p>Already have an Account? <a href="signin_page\signin.html">signin</a></p>
            </footer>
        </div>
        <div class="circle c1"></div>
        <div class="circle c2"></div>
    </div>
</body>
</html>