<!DOCTYPE html>
<?php
        $connection= new PDO('mysql:host=localhost; dbname=GreenBookSystem; charset=utf8', 'mike', 'Grafenwo3hr');
            
        $mime = "testing";
        $filePath = "test.txt";
        if(!file_exists($filePath)){
            echo "<br>file doesn't exist";
        } else {
            echo "<br>file found :)";
        }
        $blob = fopen($filePath, 'rb');
        $query2 = $connection->prepare("INSERT INTO book(Text, ISBN, Title) "
            . "VALUES(:Text, 1, 'Dune')");
        $query2->bindParam(':Text',$blob, \PDO::PARAM_LOB);

        $query2->execute();
        $query3 = $connection->prepare("SELECT * FROM book");
        $query3->execute();
        $results = $query3->fetchAll();
        foreach($results as $result) {
            echo $result['Text'];
        }

        $query4 = $connection->prepare("INSERT INTO ebook(Title, Author, file_path) " 
            . "VALUES('peerj', 'Someone Else', 'books/peerj.pdf')");
        $query4->execute();

        $query5 = $connection->prepare("SELECT * FROM ebook");
        $query5->execute();
        $resArray = $query5->fetchAll();
        echo "?????????????";
        $file = $resArray[0]['file_path'];
        echo $file;
        ?>
<html>
<head>
<style>
html, body {
    height: 100%;
}
#layout-container{
    height: 100%;
}
#wrapper {
    height: 100%;
}
</style>

</head>
<body>
    <!-- (A) SEARCH FORM -->
<form method="GET" action="searchbook.php">
  <input type="text" name="search" placeholder="Search..." required>
  <input type="submit" value="Search">
</form>


    <div>
        <div id="wrapper" height='100%'>
            <embed src="<?php echo $file ?>" width='100%' height='100%' />
        </div>
        <div>
   
    </div>

</body>
</html>