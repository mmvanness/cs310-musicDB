<?php
$connString = "mysql:host=localhost;dbname=mdb_data";
$user = "cs310";
$pass = "cs310";

$pdo = new PDO($connString,$user,$pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/MusicDB.css" />
    <link rel="stylesheet" href="css/Album.css" />
    <script src="js/headFoot.js" type="text/JavaScript"></script>
    <?php include('php/albumInfo.php'); ?>
</head>

<body>
    <header>
        <script>makeHeader();</script>
    </header>
    <main>
        <section id="intro">
            <h1>Username: Tommy</h1>
            <img src="images/profilePic.png" class="main-image" alt="profile picture" title="profile picture" />
        </section>
        <section id="favoriteTracks">
            <h2>Favorite Tracks</h2>
            <ol>
                <?php 
                foreach($tracks as $track)
                echo("<li>$track</li>");
                ?>
            </ol>
        </section>
        <section id="favoriteArtists">
            <h2>Favorite Artists</h2>
            <ul>
                <?php 
                foreach($favArtists as $artist)
                echo("<li><a href='Artist.php'>$artist</a></li>");
                ?>
            </ul>
        </section>
        <section id="links-genre-tags">
            <h2>Quick links to favorite genres</h2>
            <ul>
                <?php 
                foreach($genres as $genre)
                {
                    echo("<li><a href='Genre.php'>$genre</a></li>");
                }
                ?>
                <!--links to genre pages, if we decide to do those-->
            </ul>
        </section>
        <section id="similar-albums">
            <h2>Recently searched albums</h2>
            <p>
                <!--link these to their own album pages-->
                
                <?php
                try {
                        $sql = "SELECT DISTINCT Artists FROM ArtistData";
                        $result = $pdo->query($sql);
                        while($row = $result->fetch())
                        {
                            for ($i = 0; $i < COUNT($result); $i++)
                            {
                                $ArtistName = $row["Artists"];
                                echo("<figure>");
                                    echo("<a href='AlbumTemplate.php/artist=$ArtistName'><img src='images/album.jpg' class='main-image' alt='album cover' title='album cover' /></a>");                  
                                    echo("<p>$ArtistName</p>");                  
                                    echo("</figure>");
                                echo("</a>");

                            }
                        }
                        
                }
                catch (PDOException $e) {
                    die( $e->getMessage() );
                }
                        

                ?>
            </p>
        </section>
    </main>
    <footer>
        <script>makeFooter();</script>
    </footer>
</body>

</html>