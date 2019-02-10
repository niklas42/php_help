<!DOCTYPE HTML>
<html lang="de">
<head>
    <title>DB "name"</title>
    <meta charset="utf-8">
    <!-- RICHTIGEN NAMEN FÜR CSS-DATEI ANGEBEN-->
    <link rel="stylesheet" href="name.css">
</head>
<body>
<?php
?>
<nav>

</nav>
<main>
    <?php
    include'config.php';
    include'functions.php';
    
    ?>
        <h2>Suche</h2>
        <form method="post" action="ergebnis.php">

                <input id="wert" type="text" name="wert" required>

                <input type="submit" name="value" value="wert">

        </form>
        <?php
    
    $query = 'SHOW DATABASES';
    showdbs($con, $query);

    // $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
    // $res = mysql_query("SHOW DATABASES");
    
    // while ($row = mysql_fetch_assoc($res)) {
    //     echo $row['Database'] . "\n";
    // }
    
?>
</main>
</body>
</html>