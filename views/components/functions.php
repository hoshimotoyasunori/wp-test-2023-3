<?php
function memo_table_value(int $id)
{
  $dbcon = new mysqli('localhost', 'root', 'root', 'extra_db');

  if ($dbcon->connect_error) {
    echo "データベースに接続できません:" . $dbcon->connect_error;
    exit ();
  }

  $select = 'SELECT name FROM memo WHERE kind = ' . $id;
  // console_log($select);
  $result = mysqli_query($dbcon, $select);
  foreach ($result as $col) {
    echo $col['name'] . "<br>";
    console_log($col['name']);
  }
  // console_log($dbcon);
  mysqli_close($dbcon);

}


function console_log($data){
  echo '<script>';
  echo 'console.log('.json_encode($data).')';
  echo '</script>';
}
?>