<meta charset="utf-8">
<?

$dbmsHost = 'localhost'; //�Ǵ� 127.0.0.1
$dbmsId = 'root';
$dbmsPw = 'apmsetup';
$dbName = 'blog';

$link = mysqli_connect($dbmsHost,
$dbmsId,$dbmsPw,$dbName) or die();

//db������ utf-8 ���� ����
mysqli_query($link, "SET NAMES utf8;");

function  getRows($sql) {
	//�ܺο� �ִ� $link������ �Լ� �ȿ��� ����ϰڴٴ� �ǹ�
	global $link;
	
	//�� ������ ������ֱ� ����  
	$rows = array();

	//SELECT *FROM article ���� ���� 
	$result = mysqli_query($link, $sql);

	//===�� ���� ���� ���� ���� ������ �����ؾ� ���� 
	if ($result === true or $result === false ) {
		return null;
	}

	//SQLyog�� �ִ� ���� ����� ������ �޾ƿ��� 
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	
	return $rows;
}

//���� : execute("DELETE FROM article");
function execute($sql) {
	getRows($sql);
}

?>