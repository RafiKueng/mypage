



<h4><span>Quick</span> Links</h4>
<ul class="links">
<?php
  foreach($dir as $time => $file){
    $datestr = date("Y-m-d H:i", $time);
    $filepath = $path . $file;
    $title = pathinfo($filepath, PATHINFO_FILENAME);
    $author = "rafik";

    echo "<li><span>$datestr:</span><br /><a href='#$title'>$title</a></li>";
  }

?>
</ul>