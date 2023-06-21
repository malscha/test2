<?php
function convertTime($time) {
  $userTime = new DateTime($time);
  $utc = new DateTimeZone('UTC');
  $est = new DateTimeZone('America/New_York');
  $pst = new DateTimeZone('America/Los_Angeles');
  $ist = new DateTimeZone('Asia/Kolkata');
  return [
    'UTC' => $userTime->format('H:i'),
    'EST' => $userTime->setTimezone($est)->format('H:i'),
    'PST' => $userTime->setTimezone($pst)->format('H:i'),
    'IST' => $userTime->setTimezone($ist)->format('H:i')
  ];
}

function createTable($times) {
  $table = '<table class="table">';
  $table .= '<thead><tr><th>Timezone</th><th>Time</th></tr></thead>';
  $table .= '<tbody>';
  foreach ($times as $timezone => $time) {
    $table .= '<tr><td>' . $timezone . '</td><td>' . $time . '</td></tr>';
  }
  $table .= '</tbody></table>';
  return $table;
}

function displayTable($table) {
  echo $table;
}

$times = convertTime($_POST['time-input']);
$table = createTable($times);
displayTable($table);
?>