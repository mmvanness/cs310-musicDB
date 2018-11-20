<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>General Genre Page</title>
    <link rel="stylesheet" href="css/MusicDB.css" />
    <script src="js/headFoot.js" type="text/JavaScript"></script>
    <?php include('php/genreInfo.php')?>
</head>

<body>
    <header>
        <script>makeHeader();</script>
    </header>
    <main>
        <section>
            <h1>Genre X</h1>
        </section>
        <nav id=linkBox>
            <a href="#basicInfo">Information</a>&nbsp;
            <a href="#majorArtists">Major Artists</a>&nbsp;
            <a href="#similarGenres">Similar Genres</a>&nbsp;
        </nav>
        <section>
            <h2>Basic Genre Information</h2>
            <p>This will be a paragraph giving basic information about the specified genre.</p>
            <p>This will include basic facts of the genre such as its "beginning date"</p>
            <p>It will also include major forerunners for the genre</p>
        </section>
        <nav id=songNav>
            <h2>Major Artists</h2>
            <p id=songs>This section will eventually list some of their most popular songs, with links to their
                individual pages</p>
            <table>
                <tr>
                    <th>Artist Name: </th>
                    <th>Top Songs: </th>
                    <th>Song release date: </th>
                    <th>Song length: </th>
                </tr>
                <?php
                foreach($majorArtists as $artists)
                {
                    $artistName = $majorArtists[0];
                    $songName = $majorArtists[1];
                    $songReleaseDate = $majorArtists[2];
                    $songLength = $majorArtists[3];
                    echo("<tr>");
                        echo("<td>$artistName</td>");
                        echo("<td><a href='#'>$songName</a></td>");
                        echo("<td>$songReleaseDate</td>");
                        echo("<td>$songLength</td>");
                    echo("</tr>");
                }
                ?>
            </table>
        </nav>
        <section>
            <h2>Other similar genres</h2>
            <p id=artists>Other similar genres:</p>
            <ol>
                <?php
                foreach($similarGenres as $genre)
                {
                   echo("<li><a href='#'>$genre</a></li>");
                }
                ?>
            </ol>
        </section>
        <footer>
            <script>makeFooter();</script>
        </footer>
    </main>
</body>