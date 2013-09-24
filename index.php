<?php

function listdir_by_date($path){
    $dir = opendir($path);
    $list = array();
    while($file = readdir($dir)){
        if ($file != '.' and $file != '..' and substr($file, 0,1) != '_'){
            // add the filename, to be sure not to
            // overwrite a array key
            $ctime = filectime($path . $file); // . ',' . $file;
            $list[$ctime] = $file;
        }
    }
    closedir($dir);
    krsort($list);
    return $list;
}





?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

	Nonzero1.0 by nodethirtythree design
	http://www.nodethirtythree.com
	missing in a maze

-->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>/home/rafik</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="header">

	<div id="header_inner" class="fixed">

		<div id="logo">
			<h1>/home/<span>rafik</span></h1>
			<h2>by Rafael Kueng</h2>
		</div>
		
		<div id="menu">
			<ul>
<?php
  $pages = array( "home"=>      "index.php?p=home",
                  "projects"=>  "index.php?p=projects",
                  "about_me"=>  "index.php?p=about_me",
                  "github"=>   "https://github.com/RafiKueng?tab=repositories");
                  //"contact"=>   "index.php?p=contact");
                  
  if (!isset($_GET["p"]) || empty($_GET["p"])) {
    $_GET["p"] = "home";
  }

  if (isset($_GET["f"]) && file_exists("./files/".$_GET["f"])) {
    $file = "./files/".$_GET["f"];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
  }
  
  
  foreach($pages as $name=>$link) {
    $str = '<li><a href="' . $link . '" ';
    if ($_GET["p"]==$name) {
      $str = $str . 'class="active"';
    }
    $str = $str . '>/' . $name . '</a></li>';
    echo $str;
  }
?>
			</ul>
		</div>
		
	</div>
</div>

<div id="main">

	<div id="main_inner" class="fixed">

		<div id="primaryContent_2columns">

			<div id="columnA_2columns">
		
<?php
  include "./sites/" . $_GET["p"] . ".php"
?>
		
			</div>
	
		</div>
		
		<div id="secondaryContent_2columns">
		
			<div id="columnC_2columns">
	
<?php
  include "./sites/" . $_GET["p"] . "_side.php"
?>
			</div>

		</div>

		<br class="clear" />

	</div>

</div>

<div id="footer" class="fixed">
	Rafael Kueng, 2013 - Design by <a href="http://www.nodethirtythree.com/">NodeThirtyThree Design</a>.
</div>

</body>
</html>