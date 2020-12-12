<?php

while($row = $result->fetch_array(MYSQLI_BOTH)) {
    echo "|||" . $row[0] . "|||" .$row['cod_cim'] . "|||" . $row[5] . "|||" . "<br>";
}


?>