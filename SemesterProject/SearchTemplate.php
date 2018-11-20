
<!DOCTYPE html>
<html>
       
<head>
    <meta charset="utf-8">
    <title>Design search Button</title>
            <link rel="stylesheet" href="css/MusicDB.css" />
            <link rel="stylesheet" href="css/Search.css" />
    <script src="js/headFoot.js" type="text/JavaScript"></script>
    <?php include('php/searchResults.php'); ?>
</head>
       
<body>		
    <header>
        <script>makeHeader();</script>
    </header>
    <main>
        

       <section>
       <p>Here you can find all search results for your search query "Drake".We've found 8 matching results.</p>		
       <br>

       <?php
       foreach($searchResults as $search)
       {
           echo("<p class='search'>$search</p><br>");
       }


        ?>	

        <!-- Search page will have a variety of result -->
    </section>





    </main>
    <footer>
        <script>makeFooter();</script>
    </footer>
</body>
       
</html>