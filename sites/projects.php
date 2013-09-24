<?php
  $path = './sites/projects/';
?>


<?php if (!isset($_GET["n"]) || empty($_GET["n"])) { ?>
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

} else {
  $pname = $_GET["n"];
  $img = "sites/projects/".$pname.".png";
  echo "<h3>/projects/{$pname}/</h3>\n";
  if (file_exists($img)) {
    echo "<img src='{$img}' class='floatTL' alt='Something scenic' />\n";
  }
  include $path . $pname . ".php";
}
?>
