<?php
$connString = "mysql:host=localhost;dbname=mdb_users";
$user = "cs310";
$pass = "cs310";

$pdo = new PDO($connString,$user,$pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MusicDB</title>
    <link rel="stylesheet" href="css/MusicDB.css" />
    <link rel="stylesheet" href="css/loginPage.css" />
    <script src="js/headFoot.js" type="text/JavaScript"></script>
    <script src="js/createAccount.js" type="text/JavaScript"></script>
</head>

<body>
    <header>
        <script>makeHeader();</script>
    </header>
    <main>
        <section id="welcome">
            <h2>Welcome to MusicDB!</h2>
            <p>
                Enter the fields below to create an account!
            </p>
            <form method="POST" action="" id="mainForm">
                <p>*Username:</p>
                <input type="text" class="required" name="username"/><br>
                <p></p>
                <p>*Password:</p>
                <input type="password" class="required" name="password"/><br>
                <p>*Confirm Password:</p>
                <input type="password" class="required" name="confirmPassword"/><br>
                <p></p>
                <p id="small">If field is marked with an asterisk, field is required.</p>
                <?php
                $Username = $_POST["username"];
                $Password = $_POST["password"];
                $ConfirmPassword = $_POST["confirmPassword"];
                if ($Password != $ConfirmPassword)
                {
                    echo("The two password fields do not match.");
                }
                else {
                    if ($_SERVER["REQUEST_METHOD"] == "POST")
                    {
                        if ( isset(($_POST["username"])) && ( isset($_POST["password"]) )) 
                        {
                            $Username = $_POST["username"];
                            $Password = $_POST["password"];

                            try {
                                $sql = "INSERT INTO users (username, pass) VALUES ('$Username', '$Password')";
                                $result = $pdo->exec($sql);
        
                            }
                            catch (PDOException $e) {
                                die( $e->getMessage() );
                            }
                        }
                    }
                }
                    
                ?>
            <p>
                <input type="submit">
            </p>
            </form>
            
        </section>
    </main>
    <footer>
        <script>makeFooter();</script>
    </footer>
</body>

</html>
