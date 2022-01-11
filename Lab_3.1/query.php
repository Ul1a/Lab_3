<?
$sql = 'SELECT * FROM patients';

$result = mysqli_query($conn,$sql);
$ar_result = [];

if($result == false){
	print("Произошла ошибка при выполнении запроса");
}
else{
	while($row = mysqli_fetch_array($result)){
		$ar_result[] = $row;
	}
}
?>