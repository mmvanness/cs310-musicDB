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
                Enter the fields below to login!
            </p>
            <form method="POST" action="" id="mainForm">
                <p>*Username:</p>
                <input type="text" class="required" name="username"/><br>
                <p></p>
                <p>*Password:</p>
                <input type="password" class="required" name="password"/><br>
                <p></p>
                <p id="small">If field is marked with an asterisk, field is required.</p>
                <p>If you do not have an account, click <a href="createAccount.html">HERE</a> to create one!</p>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    if ( isset(($_POST["username"])) && ( isset($_POST["password"]) )) 
                        {
                            $Username = $_POST["username"];
                            $Password = $_POST["password"];

                            try {
                                $sql = "SELECT password FROM users WHERE username = '" . "$Username" . "'";
                                $result = $pdo->exec($sql);
                                if ($result == $Password && $result == $Username)
                                {
                                   header('Location: userHomePage.php'); 
                                }
                                else{
                                    echo("Username or Password was incorrect.");
                                }
                                
                                
                            }
                            catch (PDOException $e) {
                                die( $e->getMessage() );
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