<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_array(MYSQLI_BOTH)) {
    echo "id: " . $row[0] . " - Name: " . $row['dci'] . "<br>";
  }
} else {
  echo "0 results";
}



/* numeric array */
# $row = $result->fetch_array(MYSQLI_NUM);
# printf ("%s (%s)\n", $row[0], $row[1]);

/* associative array */
# $row = $result->fetch_array(MYSQLI_ASSOC);
# printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);

/* associative and numeric array */
# $row = $result->fetch_array(MYSQLI_BOTH);
# printf ("%s (%s)\n", $row[0], $row["CountryCode"]);

?>