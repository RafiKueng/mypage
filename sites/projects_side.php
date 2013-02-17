

<h4><span>quick</span> links</h4>
<ul class="links">
<?php
  $path = './sites/projects/';
  $dir = listdir_by_date($path);
  
  foreach($dir as $time => $file){
    $datestr = date("Y-m-d H:i", $time);
    $filepath = $path . $file;
    $title = pathinfo($filepath, PATHINFO_FILENAME);

    echo "<li><a href='#$title'>$title</a></li>";
  }
?>

</ul>