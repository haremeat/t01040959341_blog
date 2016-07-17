<?
//설정 파일 불러오기
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';

//경로 출력
//echo $_SERVER['DOCUMENT_ROOT'] . '/config.php';

//$_GET or $_POST 구분없이 입력받은 모든 매개변수 
$sqlSafe = $_REQUEST;

//입력받은 데이터로 삭제쿼리 실행
$sql = "
DELETE FROM article
WHERE id = '{$sqlSafe['id']}'
";


execute($sql);

$resultData = array(
	'resultCode' => 's-1',
	'id' => $sqlSafe['id']
);	

echo json_encode($resultData);
?>