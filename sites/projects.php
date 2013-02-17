<h3>/projects</h3>
<img src="images/code.png" class="floatTL" alt="Something scenic" />

<p>
  Here's a list of some projects I am / was working on.
</p>
<p>
  Checkout <a href="https://github.com/RafiKueng?tab=repositories">my github page</a> for the latest code.
</p>

<br class="clear" />

<?php
  $path = './sites/projects/';
  $dir = listdir_by_date($path);
  
  foreach($dir as $time => $file){
    $datestr = date("Y-m-d H:i", $time);
    $filepath = $path . $file;
    $title = pathinfo($filepath, PATHINFO_FILENAME);

    //echo $time . " --- " . $file . ' --- ' . $datestr;
    
    
    echo '<div id="' . $title . '" class="post">';
    include $filepath;    
    echo "</div>";
  }
?>
