<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ølsmakerorkesterets øltester</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </head>

  <body>
<?php
include("../secret_info.php");
$servername = "localhost";
$username = USERNAME;
$password = PASSWORD;
$dbname   = "ol_orkester";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, beer_name, score FROM results";
$result = $conn->query($sql);

?>
        <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Ølsmakerorkesteret</a>
                  </div>
                  <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                      <li><a href="/">Hjem</a></li>
                      <li class="active"><a href="/html/tester.html">Tester</a></li>
                      <li><a href="https://github.com/anderssh/anderssh.github.io">Kildekode</a></li>
                      <li><a href="/html/galleri.html">Galleri</a></li>
                    </ul>
                  </div><!--/.nav-collapse -->
                </div>
              </nav>
    <div class="container">
        <h2 class="ingress">Her finner du alle nedskrevne øltester utført av Ølsmakerorkesteret</h2>
        <button type="button" class="collapsible">Julen 2018</button>
          <div class="content">
            <div class="row">
              <div class="col-md-8">
                <table id="myTable">
                  <tr>
                    <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->
                    <th onclick="sortTable(0)"><i class="fas fa-beer"></i>Ølnavn</th>
                    <th onclick="sortTable(1)">Antall lepper</th>
                  </tr>
                  <?php
                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo "<tr>\n";
                      echo "<td>" . $row["beer_name"]. "</td>\n<td>" . $row["score"]. "</td>";
                      echo "<\tr>";
                    }
                  } else {
                    echo "0 results";
                  }
                  ?>
                </table>
                <script>
                function sortTable(n) {
                  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
                  table = document.getElementById("myTable");
                  switching = true;
                  //Set the sorting direction to ascending:
                  dir = "asc";
                  /*Make a loop that will continue until
                  no switching has been done:*/
                  while (switching) {
                    //start by saying: no switching is done:
                    switching = false;
                    rows = table.rows;
                    /*Loop through all table rows (except the
                    first, which contains table headers):*/
                    for (i = 1; i < (rows.length - 1); i++) {
                      //start by saying there should be no switching:
                      shouldSwitch = false;
                      /*Get the two elements you want to compare,
                      one from current row and one from the next:*/
                      x = rows[i].getElementsByTagName("TD")[n];
                      y = rows[i + 1].getElementsByTagName("TD")[n];
                      /*check if the two rows should switch place,
                      based on the direction, asc or desc:*/
                      if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                          //if so, mark as a switch and break the loop:
                          shouldSwitch= true;
                          break;
                        }
                      } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                          //if so, mark as a switch and break the loop:
                          shouldSwitch = true;
                          break;
                        }
                      }
                    }
                    if (shouldSwitch) {
                      /*If a switch has been marked, make the switch
                      and mark that a switch has been done:*/
                      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                      switching = true;
                      //Each time a switch is done, increase this count by 1:
                      switchcount ++;
                    } else {
                      /*If no switching has been done AND the direction is "asc",
                      set the direction to "desc" and run the while loop again.*/
                      if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                      }
                    }
                  }
                }
              </script>
              <script>
                var coll = document.getElementsByClassName("collapsible");
                var i;

                for (i = 0; i < coll.length; i++) {
                  coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                      content.style.display = "none";
                    } else {
                      content.style.display = "block";
                    }
                  });
                }
                </script>
            </div>
          </div>
  </body>