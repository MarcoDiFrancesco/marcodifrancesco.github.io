<?php
$input = $_POST["searchInput"];

$files = glob("../file/*{$input}*");

usort($files, function($a, $b) {
  return filemtime($a) < filemtime($b);
});

foreach($files as $file){
  echo "<tr>";
  echo "<td>";
  echo "<a href='{$file}'>";
  echo basename($file);
  echo "</a>";
  echo "</td>";
  echo "<td>";
  echo date('d/m/Y - H:i', filemtime($file));
  echo "</td>";
  echo "</tr>";
}
?>
