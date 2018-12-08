<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dummy Album</title>
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
            <h1>Title of Dummy Album</h1>
            <img src="images/album.jpg" class="main-image" alt="album cover" title="album cover" />
            <p><strong>Artist: </strong><a href="#">artist name</a></p>
            <!--links to artist's page-->
        </section>
        <section id="tracks">
            <h2>Tracks</h2>
            <ol>
                <?php 
                foreach($tracks as $track)
                echo("<li>$track</li>");
                ?>
            </ol>
            <!--if we do pages for tracks, make these links-->
        </section>
        <section id="album-releases">
            <h2>Album Releases</h2>
            <table>
                <tr>
                    <?php 
                    foreach($releaseDateHeader as $header)
                    {
                        echo("<th>$header</th>");
                    }
                    ?>
                </tr>
                <tr>
                    <?php
                    foreach($releaseDate as $release)
                    {
                        echo("<td>$release</td>");
                    }
                    ?>
                </tr>
                <tr>
                    <?php
                    foreach($nextReleaseDate as $nextRelease)
                    {
                        echo("<td>$nextRelease</td>");
                    }
                    ?>
                </tr>
            </table>
            <!--make things into links to their relative pages as relevant-->
        </section>
        <section id="genre-tags">
            <h2>Genre Tags</h2>
            <ul>
                <?php 
                foreach($genres as $genre)
                {
                    echo("<li><a href='#'>$genre</a></li>");
                }
                ?>
                <!--links to genre pages, if we decide to do those-->
            </ul>
        </section>
        <section id="similar-albums">
            <h2>Similar Albums</h2>
            <p>
                <!--link these to their own album pages-->
                <?php
                foreach($albums as $album)
                {
                    echo("<a href='#'>");
                        echo("<figure>");
                            echo("<img src='images/album.jpg' class='main-image' alt='album cover' title='album cover' />");
                            echo("<figcaption>$album</figcaption>");
                        echo("</figure>");
                    echo("</a>");
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