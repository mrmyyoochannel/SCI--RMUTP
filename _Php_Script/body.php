<?php
if (isset($_GET['p']) && $_GET['p'] == "main") {
    include('main.php');
}elseif (isset($_GET['p']) && $_GET['p'] == "about") {
    include('_php_body/about.php');
}elseif (isset($_GET['p']) && $_GET['p'] == "achievements") {
    include('_php_body/achievements.php');
}elseif (isset($_GET['p']) && $_GET['p'] == "Board") {
    include('_php_body/Board.php');
}elseif (isset($_GET['p']) && $_GET['p'] == "event") {
    include('_php_body/event.php');
}elseif (isset($_GET['p']) && $_GET['p'] == "news") {
    include('_php_body/news.php');
}else {
    include('main.php');
}
?>
