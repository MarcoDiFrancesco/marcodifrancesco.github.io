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
for ($i=1; $i <= 6; $i++) {
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
        $sensorName = "Living room gas";
      } else if ($i == 2) {
        $sensorName = "Kitchen termperature";
      } elseif ($i == 3) {
        $sensorName = "Badroom temperature";
      } elseif ($i == 4) {
        $sensorName = "Bathroom temperature";
      } elseif ($i == 5) {
        $sensorName = "Badroom gas";
      } elseif ($i == 6) {
        $sensorName = "Kitchen gas";
      } elseif ($i == 7) {
        $sensorName = "Bathroom gas";
      } elseif ($i == 8) {
        $sensorName = "Badroom temperature";
      } elseif ($i == 9) {
        $sensorName = "Badroom temperature";
      } elseif ($i == 10) {
        $sensorName = "Badroom temperature";
      }

echo "<tr>
        <th>{$sensorName}</th>
        <td>{$resultRow['lastRecord']}</td>
        <td>{$resultRow['maxRecord']}</td>
        <td>{$resultRow['minRecord']}</td>
      </tr>";
}
echo "</table>";
 ?>
