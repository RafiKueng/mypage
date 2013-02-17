
<?php
  include "home_head.php";
?>

<br class="clear" />



<?php
  $path = './sites/home/';
  $dir = listdir_by_date($path);
  
  foreach($dir as $time => $file){
    $datestr = date("Y-m-d H:i", $time);
    $filepath = $path . $file;
    $title = pathinfo($filepath, PATHINFO_FILENAME);
    $author = "rafik";

    //echo $time . " --- " . $file . ' --- ' . $datestr;
    
    
    echo '<div id="' . $title . '" class="post">';
    include $filepath;    
    echo "</div>";
  }
?>