<link rel="stylesheet" type="text/css" href="css/header.css" />
<?php
$page = array("index.php", "about.php");
$names = array("Home", "About");


foreach($names as $name){
    echo "<a href=$page> $name </a>";
}

?>

<link rel="stylesheet" type="text/css" href="css/header.css" />
<?php
$page = array("index.php", "about.php");
$names = array("Home", "About");

foreach($page as $pages){
    foreach($names as $name){
        echo "<a href=$pages> $name </a>";
    }
}
?>