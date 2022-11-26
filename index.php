<head>
    <meta charset="utf-8">
</head>
<?php
include 'header.html';
$page = $_GET['page'];
switch($page) {
    case 'words-adding':
        include 'word-adding.php';
        break;
    case 'words-study':
        include 'words-study.php';
        break;
    case '':
        include 'index.html';
        break;
    default:
        echo "page not found";
};
// include 'footer.html';
?>