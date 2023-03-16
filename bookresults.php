<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <?php
        require_once("searchbook.php");
        ?>
    </head>
    <body>
        <script>
            var data = JSON.parse('<?=$json?>');
            document.write(",");

            window.addEventListener("load", () => {
  // (B) PARSE THE JSON STRING INTO OBJECT FIRST

  data = JSON.parse(data);
  // console.table(data);
 
  // (C) GENERATE TABLE
  // (C1) CREATE EMPTY TABLE
  var table = document.createElement("table"), row, cellA, cellB, cellC, cellD;
  document.getElementById("demoA").appendChild(table);
  for (let key in data) {
    // (C2) ROWS & CELLS
    row = table.insertRow();
    cellA = row.insertCell();
    cellB = row.insertCell();
    cellC = row.insertCell();
    cellD = row.insertCell();
 
    // (C3) KEY & VALUE
    cellA.innerHTML = data[key];
    cellB.innerHTML = data[key];
    cellC.innerHTML = data[key];
    cellD.innerHTML = data[key];
  }
});
        </script>

    </body>
</html>