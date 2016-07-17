<meta charset="utf-8">
<?
include 'config.php';
include 'header.php';

$name = "유은정";

//mysqli_query($link, "SET NAMES utf8;");

$articles = getRows("SELECT * FROM article ORDER BY id DESC"); 

//print_r($articles);
?>

<h1><center><?=$name?> 블로그 메인페이지 입니다.</h1>

<?
include 'footer.php';
?>
