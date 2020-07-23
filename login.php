<html>

<head>
    <meta charset="utf-8">
    <title>BookWrm | Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Basic:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style.css">
    <link rel="icon" href="icon.png">
</head>

<nav id="navbar">
    <ul>
        <li><a href="index.html">Home</a></li>
        <li class="dropdown">
            <button class="dropdownbutton">Genres</button>
            <div class="dropdown-content">
                <a href="nonfictionCurrent.html">Non-Fiction</a>
                <a href="">More Coming Soon...</a>
                <a href="pastBooks.html">Past Reads</a>
            </div>
        </li>
        <li><a href="login.html">Login </a></li>
    </ul>
</nav>

<body>
    <form id="login" method="get" action="Profile.php" >
        <table class="center" id="first" style="background-color: rgba(255, 125, 0, 0.2);">
            <tr>
                <th colspan="2">
                    <b>Login</b>
                    </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    <label><b>Username: </b></label>
                </td>
                <td style="text-align: left;">
                    <input id="username" type="text" />
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    <label><b>Password: </b></label>
                </td>
                <td style="text-align: left;">
                    <input id="password" type="password" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p id="signupPrompt">Don't have an account?
                        <a href="SignUp.php">Sign Up!</a>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div style="text-align:center">
                        <input id="loginBtn" type="submit" value="Login" />
                    </div>
                </td>
            </tr>
        </table>
    </form>
</body>

<footer>
    <p id="footer">
        <a href="mailto:abc@example.com">
            <b>Contact Us</b>
        </a>
    </p>
</footer>

</html>