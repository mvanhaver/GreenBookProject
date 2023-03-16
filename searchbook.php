<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        nav {
            position: sticky;
        }

        th {
            background: gray;
            position: sticky;
            top: 0;
        }

        .jumbotron,
        .jumbotron-fluid {
            /* background: none; */
            height: 80px;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Green Book System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Books
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Rent/Buy</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Return a book</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Sell used books</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Discussion Forum <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Contact Us<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form method="GET" action="searchbook.php" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" name="search"
                    placeholder="Search here to BUY, RENT....." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search">Search</button>
                <<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="login.php">User</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin/admin.php">Admin</a>
                    </div>
                    </li>
            </form>

        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid text-center">
        <h2>Search Results</h2>

        <div>
            <p id="result">&nbsp;</p>
        </div>
    </div>
    <div class="container py-5" style="padding: 0px; margin-top: 0px;">
        <div class="row" style="padding: 0px;">
            <div class="col-lg-30 mx-auto bg-white rounded shadow" style="padding: 0px; margin-top: 0px">
                <div class="container" style="background-color: white; padding: 0px; margin-top: 0px;">
                    <div class="table table-hover" style="width: 100%; margin-top: 0px;">
                        <div style="height: 400px; overflow-y: auto; width: 100%; padding-left: 0px; margin-top: 0px;">
                            <div id="table">

                                <!-- <?php

                                $connection = new PDO('mysql:host=localhost; dbname=GreenBookSystem; charset=utf8', 'mike', 'Grafenwo3hr');
                                $sql = $connection->prepare("SELECT * FROM nbook WHERE Title like '%$_GET[search]%'");
                                $sql->execute();
                                echo "<table class=\"table\" style=\"width: 100%;\">";
                                echo "<div>";
                                echo "<thead class=\"thead-light\">";
                                echo "<tr>";
                                echo "<th scope=\"col\" class=\"th\">Author</th>";
                                echo "<th scope=\"col\" class=\"th\">File Path</th>";
                                echo "<th scope=\"col\" class=\"th\">Price</th>";
                                echo "<th scope=\"col\" class=\"th\">Title</th>";
                                echo "<th scope=\"col\" class=\"th\">Rent</th>";
                                echo "<th scope=\"col\" class=\"th\">Buy</th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "</div>";
                                echo "<div>";
                                echo "<tbody>";

                                // Cycle through the array
                                while ($myresult = $sql->fetch(PDO::FETCH_ASSOC)) {

                                    $author = $myresult['Author'];
                                    $filepath = $myresult['file_path'];
                                    $price = $myresult['Price'];
                                    $title = $myresult['Title'];
                                    echo "<tr>";
                                    echo "<td>$author</td>";
                                    echo "<td>$filepath</td>";
                                    echo "<td>$price</td>";
                                    echo "<td>$title</td>";
                                    echo "<td><form action=\"bookresults.php\"><input name=<?php echo $filepath ?><input type=\"submit\" value=\"submit\"></form></td>";
                                    echo "<td><a class='btn btn-primary' href='bookresults.php role='button>Buy Book</a></td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                                echo "</div>";
                                // Close the table
                                echo "</table>";
                                ?> -->

                                <?php
                                $sql->execute();
                                $sqlresults = $sql->fetchAll(PDO::FETCH_ASSOC);
                                $jsonResults = json_encode($sqlresults);
                                ?>

                                <script>
                                    var el = document.getElementById("table");
                                    var jsonResults = <?= $jsonResults; ?>;
                                    if(jsonResults.length < 1){
                                        el.innerHTML = "<div><p display='block'><br><br>bummer, we don't have anything that matches your search..</p><br><br><p text-align='center'><image src='/GreenBookProject/images/bummer.jpg'></p></div>";
                                    } else {
                                        var cols = [];
                                    var id = "id";
                                    var authorID = "author_id";
                                    var categoryID = "category_id"
                                    var file = "file";
                                    var edition = "edition";
                                    var pubPlace = "pubPlace";
                                    for (var i = 0; i < jsonResults.length; i++) {
                                        for (var k in jsonResults[i]) {
                                            if (cols.indexOf(k) === -1 && k != id) {
                                                if (cols.indexOf(k) === -1 && k != authorID) {
                                                    if (cols.indexOf(k) === -1 && k != categoryID) {
                                                        if (cols.indexOf(k) === -1 && k != file) {
                                                            if (cols.indexOf(k) === -1 && k != edition) {
                                                                if (cols.indexOf(k) === -1 && k != pubPlace){
                                                                    // Push all keys to the array
                                                                cols.push(k);
                                                                }
                                                            }                                                          
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }

                                    // Create a table element
                                    var table = document.createElement("table");
                                    table.className = "table";
                                    // table.cellSpacing = "0";
                                    // table.cellPadding = "0";
                                    // // Create the table header th element
                                    // let thead = table.createTHead();
                                    // // thead.className = "thead-light";

                                    // // Create table row tr element of a table
                                    // var tr = thead.insertRow(-1);
                                    // for (var i = 0; i < cols.length; i++) {

                                    //     var theader = document.createElement("th");
                                    //     theader.innerHTML = cols[i];

                                    //     // Append columnName to the table row
                                    //     // tr.appendChild(theader);
                                    //     if (cols.length - i == 1) {
                                    //         var theader1 = document.createElement("th");
                                    //         theader1.innerHTML = "Rent";
                                    //         // tr.appendChild(theader1);
                                    //         var theader2 = document.createElement("th");
                                    //         theader2.innerHTML = "Buy";
                                    //         // tr.appendChild(theader2);
                                    //     }
                                    // }

                                    // Adding the data to the table
                                    for (var i = 0; i < jsonResults.length; i++) {
                                        var stuff = "I'm writing stuff";

                                        // Create a new row
                                        trow = table.insertRow(-1);
                                        for (var j = 0; j < cols.length; j++) {
                                            var cell;
                                            var jdata = JSON.stringify(jsonResults[i]);
                                            let substring = jsonResults[i][cols[j]].substring(0,6);
                                            if(substring == "images"){
                                                cell = trow.insertCell(0)
                                                cell.innerHTML = '<img src="/GreenBookProject/' + jsonResults[i][cols[j]] + '">'
                                            } else {
                                                cell = trow.insertCell(-1)
                                                // Inserting the cell at particular place
                                                if(isNaN(jsonResults[i][cols[j]])){
                                                    cell.innerHTML = jsonResults[i][cols[j]];
                                                } else {
                                                    cell.innerHTML = '<p>$' + jsonResults[i][cols[j]] + '</p>';
                                                }
                                                
                                                
                                            }
                                            if (cols.length - j == 1) {
                                            var cell1 = trow.insertCell(-1);
                                            cell1.innerHTML = '<input type="button" id="rent" onclick="postToRentPage(jdata);" class="btn btn-primary" value="Rent">';
                                            var cell2 = trow.insertCell(-1);
                                            cell2.innerHTML = '<button type="button" class="btn btn-primary">Buy</button>';                                           
                                            }
                                        }                                           
                                    }

                                    // Add the newly created table containing json data
                                    
                                    el.innerHTML = "";
                                    el.appendChild(table);
                                    }
                                    

                                    function postToRentPage(data) {
                                        let xhr = new XMLHttpRequest();
                                        xhr.open("POST", "rentbook.php", true);
                                        xhr.setRequestHeader("Content-Type", "application/json");
                                        xhr.onreadystatechange = function () {
                                            if (xhr.readyState === 4 && xhr.status === 200) {
                                                // Print received data from server
                                                result.innerHTML = this.responseText;
                                            }
                                        };
                                        xhr.send(data);
                                    }

                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>