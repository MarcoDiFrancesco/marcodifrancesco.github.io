<?php
require "../php/connect.php";
//echo "test".rand();
/*
This is the initial part of the table that will be inserted in the div of HTML.
It was impossible to write just the <tr> and <td> into the code to avoid
the copying of this initial part of the table
*/
echo"<table>
      <tr>
        <th></th>
        <th>Now</td>
        <th>Max</td>
        <th>Min</td>
      </tr>";
for ($i=1; $i <= 13; $i++) {
  /* join is inserted to select the "last record" */
  $query = "SELECT lastTable.sensor{$i} AS lastRecord,MAX(sensors.sensor{$i}) AS maxRecord,MIN(sensors.sensor{$i}) AS minRecord
					  FROM sensors
					  JOIN (SELECT id,sensor{$i}
					      FROM sensors
					      ORDER BY sensors.id DESC
					      LIMIT 1) lastTable";
  $resultQuery = mysqli_query($connect, $query);
  $resultRow=mysqli_fetch_assoc($resultQuery);
  if($i == 1){
    $sensorName = "Sound sensor main room";
    $resultLast = (int)$resultRow['lastRecord']/2;
    $resultMax = (int)$resultRow['maxRecord']/2;
    $resultMin = (int)$resultRow['minRecord']/2;
  } else if ($i == 2) {
    $sensorName = "Gas sensor main room";
    $resultLast = (int)$resultRow['lastRecord']/2;
    $resultMax = (int)$resultRow['maxRecord']/2;
    $resultMin = (int)$resultRow['minRecord']/2;
  } elseif ($i == 3) {
    $sensorName = "Ligt red room";
    $resultLast = (int)$resultRow['lastRecord']/2;
    $resultMax = (int)$resultRow['maxRecord']/2;
    $resultMin = (int)$resultRow['minRecord']/2;
  } elseif ($i == 4) {
    $sensorName = "Gas sensor yellow room";
    $resultLast = (int)$resultRow['lastRecord']/2;
    $resultMax = (int)$resultRow['maxRecord']/2;
    $resultMin = (int)$resultRow['minRecord']/2;
  } elseif ($i == 5) {
    $sensorName = "Temperature red room";
    $resultLast = (int)$resultRow['lastRecord']/2;
    $resultMax = (int)$resultRow['maxRecord']/2;
    $resultMin = (int)$resultRow['minRecord']/2;
  } elseif ($i == 6) {
    $sensorName = "Humidity red room";
    $resultLast = (int)$resultRow['lastRecord']/2;
    $resultMax = (int)$resultRow['maxRecord']/2;
    $resultMin = (int)$resultRow['minRecord']/2;
  } elseif ($i == 7) {
    $sensorName = "Fire sensor red room";
    $resultLast = (int)$resultRow['lastRecord']/2;
    $resultMax = (int)$resultRow['maxRecord']/2;
    $resultMin = (int)$resultRow['minRecord']/2;
  } elseif ($i == 8) {
    $sensorName = "Temperature yellow room";
    $resultLast = (int)$resultRow['lastRecord']/2;
    $resultMax = (int)$resultRow['maxRecord']/2;
    $resultMin = (int)$resultRow['minRecord']/2;
  } elseif ($i == 9) {
    $sensorName = "Humidity yellow room";
    $resultLast = (int)$resultRow['lastRecord']/2;
    $resultMax = (int)$resultRow['maxRecord']/2;
    $resultMin = (int)$resultRow['minRecord']/2;
  } elseif ($i == 10) {
    $sensorName = "Fire sensor blue room";
    $resultLast = (int)$resultRow['lastRecord']/2;
    $resultMax = (int)$resultRow['maxRecord']/2;
    $resultMin = (int)$resultRow['minRecord']/2;
  } elseif ($i == 11) {
    $sensorName = "Smoke sensor blue room";
    $resultLast = (int)$resultRow['lastRecord']/2;
    $resultMax = (int)$resultRow['maxRecord']/2;
    $resultMin = (int)$resultRow['minRecord']/2;
  } elseif ($i == 12) {
    $sensorName = "Light sensor blue";
    $resultLast = (int)$resultRow['lastRecord']/2;
    $resultMax = (int)$resultRow['maxRecord']/2;
    $resultMin = (int)$resultRow['minRecord']/2;
  } elseif ($i == 13) {
    $sensorName = "Fire sensor living room";
    $resultLast = (int)$resultRow['lastRecord']/2;
    $resultMax = (int)$resultRow['maxRecord']/2;
    $resultMin = (int)$resultRow['minRecord']/2;
  } else {
    $sensorName = "Too many sensors";
  }

  echo "<tr>
          <th>{$sensorName}</th>
          <td>{$resultLast}</td>
          <td>{$resultMax}</td>
          <td>{$resultMin}</td>
        </tr>";
}
echo "</table>";
 ?>
