<html>
<?php
require_once('config.php');
session_start();

define('UN', 'username');
define('PW', 'password');

$error = "";

function getUsername()
{
    $value = "";
    if (isset($_POST[UN])) {
        $value = $_POST[UN];
    }
    return $value;
}

function getPassword()
{
    $value2 = "";
    if (isset($_POST[PW])) {
        $value2 = $_POST[PW];
    }
    return $value2;
}
?>

<head>
    <meta charset="utf-8">
    <title>BookWrm | Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Basic:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style.css">
    <link rel="icon" href="icon.png">
</head>

<nav id="navbar">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
            <button class="dropdownbutton" href="genre.php">Genres</button>
            <div class="dropdown-content">
                <a href="nonfictionCurrent.php">Non-Fiction</a>
                <a href="">More Coming Soon...</a>
                <a href="pastBooks.php">Past Reads</a>
            </div>
        </li>
        <li><?php if (empty($_SESSION['username'])) {
                echo "<a href='SignUp.php'>Sign Up</a>";
            } else {
                echo "<a href='Profile.php'>Profile</a>";
            } ?></li>
    </ul>
</nav>

<body>

    <form id="login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table class="center" id="first" style="background-color: rgba(255, 125, 0, 0.2);">
            <tr>
                <th colspan="2">
                    <b>Login</b>
                    </td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php echo $error; ?>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    <label><b>Username: </b></label>
                </td>
                <td style="text-align: left;">
                    <input id="username" name="<?php echo UN; ?>" type="text" value="<?php echo getUsername(); ?>" />
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    <label><b>Password: </b></label>
                </td>
                <td style="text-align: left;">
                    <input id="password" name="<?php echo PW; ?>" type="password" value="<?php echo getPassword(); ?>" />
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
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = getUsername();
    $password = getPassword();
    $db_table = 'user';
    $numOfRows = 0;
    if (!empty($name) && !empty($password)) {
        $error = mysqli_connect_error();
        if ($error != null) {
            $output = "<p>Unable to connect to database</p>" . $error;
            exit($output);
        } else {
            $sql = "SELECT * FROM " . $db_table . " WHERE user_name='" . $name . "' AND user_password='" . $password."'";
            if ($result = mysqli_query($connection, $sql)) {
                $numOfRows = $result->num_rows;
            } else {
            }
        }
    }

    if ($numOfRows == 1) {
        $_SESSION["username"] = $name;
        header("Location: Profile.php");
    } else {
        $error = "Your username or password is invalid";
        echo $error;
    }
    mysqli_close($connection);
}
?>
<script>
    window.onload = function() {
        var boxUsername = document.getElementById("username");
        var boxPassword = document.getElementById("password");
        if (boxUsername.value == "" ) {
            boxUsername.focus();
        } else {
            boxPassword.focus();
        }
    }
</script>
<footer>
    <p id="footer">
        <a href="mailto:abc@example.com">
            <b>Contact Us</b>
        </a>
    </p>
</footer>

</html>