<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>General Artist Page</title>
    <link rel="stylesheet" href="css/MusicDB.css" />
    <link rel="stylesheet" href="css/Artist.css" />
    <script src="js/headFoot.js" type="text/JavaScript"></script>
    <?php include 'php/artistInfo.php'; ?>
</head>

<body>
    <header>
        <script>makeHeader();</script>
    </header>
    <main>
        <section>
            <h1>
                Artist's Name</br>
                <button type="button" id="fav">Favorite &#10084;</button>
            </h1>
            <img src="images/apple-clip-art.jpg" alt="placeholder" title="placeholder" class=main-image>
        </section>
        <nav id=linkBox>
            <?php
                $birthdate = $basicArtistInfo[0];
                $genre = $basicArtistInfo[1];
                $similarSongs = $basicArtistInfo[2];
                $similarArtists = $basicArtistInfo[3];
                echo("<a href='#birthdate'>$birthdate</a>&nbsp&nbsp;");
                echo("<a href='#genre'>$genre</a>&nbsp&nbsp;");
                echo("<a href='#songs'>$similarSongs</a>&nbsp&nbsp;");
                echo("<a href='#artists'>$similarArtists</a>");
            ?>
            
        </nav>
        <section>
            <h2>Basic Artist Information</h2>
            <?php
            $paragraph = $paragraphInfo[0];
            $birthdate = $paragraphInfo[1];
            $deathdate = $paragraphInfo[2];
            echo("<p>$paragraph</p>");
            echo("<p id=birthdate>$birthdate</p>");
            echo("<p>$deathdate</p>");
            ?>
            
        </section>
        <section>
            <h2>Genre</h2>
            <p id=genre>Genre: </p>
        </section>
        <nav id=songNav>
            <h2>Songs</h2>
            <p id=songs>This section will eventually list some of their most popular songs, with links to their
                individual pages</p>
            <table>
                <tr>
                    <?php
                    echo("<th>$tableHeader[0]</th>");
                    echo("<th>$tableHeader[1]</th>");
                    echo("<th>$tableHeader[2]</th>");
                    ?>
                    
                </tr>
                
                <?php
                foreach($songs as $song)
                {
                    echo("<tr>");
                        $songName = $songs[0];
                        $songReleaseDate = $songs[1];
                        $songLength = $songs[2];
                        echo("<td><a href='#'>$songName</a></td>");
                        echo("<td>$songReleaseDate</td>");
                        echo("<td>$songLength</td>");
                    echo("</tr>");
                }
                ?>
            </table>
        </nav>
        <section>
            <h2>Other similar artists</h2>
            <p id=artists>Other similar artists:</p>
            <ol>
                <?php
                foreach($artists as $artist)
                {
                    echo("<li><a href='#'>$artist</a></li>");
                }
                ?>
            </ol>
        </section>
        <footer>
            <script>makeFooter();</script>
        </footer>
    </main>
</body>