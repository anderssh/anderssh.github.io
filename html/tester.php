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
    <script src="/js/sort_table.js" type="text/javascript"></script>
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
$conn -> set_charset("utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT beer_name, score FROM results left join beers on results.beer_id = beers.id";
$result = $conn->query($sql);
  $page="tester";
  include 'navbar.php';
  ?>
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
                while($row = $result->fetch_assoc()) {cd 
                  echo "<tr>";
                  echo "<td>" . $row["beer_name"]. "</td><td>". $row["score"]. "</td>";
                  echo "</tr>";
                }
              } else {
                echo "0 results";
              }
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
