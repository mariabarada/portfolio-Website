<!-- <?php
        session_start();
        session_unset();
        session_destroy();
        ?> -->

<html>

<head>

    <link rel="stylesheet" href="./css/login-style.css">
    <title>
        Login
    </title>


</head>

<body>
    <div class="row" id="header">
    </div>

    <img src="./images/chick-removebg-preview.png" alt="hi">


    <div class="container">
        <h2 id="welcomeTitle">
            Back for More? Log in Here
        </h2>


        <form action="./BE/login.php" method="POST" id="login-form">
            <label for="un">User Name</label>
            <br>
            <input type="text" name="username" id="un">
            <br>
            <label for="pass">Password</label>
            <br>
            <input type="password" name="password" id="pass">
            <br>
            <input type="button" value="Login" onclick="login()">
        </form>


        <h6> Create an account?</h6>
        <a href="signup.html">Sign-Up</a>
    </div>






    <script>
        function login() {
            var un = document.getElementById("un").value;
            var pass = document.getElementById("pass").value;
            if ((un == "") || (pass == "")) {
                alert("You must fill in the username and the password!");
            } else {
                document.getElementById("login-form").submit();
            }

        }
    </script>

</body>





</html>