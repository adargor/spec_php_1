<?php
function myError($no, $msg, $file, $line){
    $dt = date("d-m-Y H:i:s");
    $str = "[$dt] - $msg in $file:$line\n";
    switch ($no) {
        case E_USER_ERROR:
        case E_USER_WARNING:
        case E_USER_NOTICE:
            echo $msg;
    }
    error_log($str, 3, "error.log");
}

function drawMenu($menu, $vertical=true){
    if(!is_array($menu))
        return false;
    $style = "";
    if(!$vertical){
        $style = " style='display:inline; margin-right:15px'";
    }
    echo "<ul>";
    foreach($menu as $menuItem){
      echo "<li$style>";
      echo "<a href='{$menuItem['href']}'>{$menuItem['link']}</a>";
      echo "</li>";
    }
    echo "</ul>";
    return true;
}

function drawTable ($cols_num = 10, $rows_num = 10, $color="yellow"){
    echo "<br /><table border=1>";
    for($i = 1; $i <= $rows_num; $i++){
      echo "<tr></tr>";
      for($j = 1; $j <= $cols_num; $j++){
          if ($i == 1 || $j == 1)
              echo "<th style=background:$color>" . $i*$j. "</th>";
          else
              echo "<td>" . $i*$j. "</td>";
      }
    }
    echo "</table>";
}
?>