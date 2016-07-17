<meta charset="utf-8">
<?

$dbmsHost = 'localhost'; //또는 127.0.0.1
$dbmsId = 'root';
$dbmsPw = 'apmsetup';
$dbName = 'blog';

$link = mysqli_connect($dbmsHost,
$dbmsId,$dbmsPw,$dbName) or die();

//db연결을 utf-8 모드로 설정
mysqli_query($link, "SET NAMES utf8;");

function  getRows($sql) {
	//외부에 있는 $link변수를 함수 안에서 사용하겠다는 의미
	global $link;
	
	//빈 공간을 만들어주기 위해  
	$rows = array();

	//SELECT *FROM article 쿼리 실행 
	$result = mysqli_query($link, $sql);

	//===는 값도 같고 형도 같을 정도로 동일해야 실행 
	if ($result === true or $result === false ) {
		return null;
	}

	//SQLyog에 있는 쿼리 결과를 맵으로 받아오기 
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	
	return $rows;
}

//사용법 : execute("DELETE FROM article");
function execute($sql) {
	getRows($sql);
}

?>