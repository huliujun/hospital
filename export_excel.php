
<?php
//创建展示表格


include(dirname(__FILE__).'/config.php') ;


/**
 * Create array from excel
 * @param mixed $path       路径
 * @param boolean $sheet    第几个sheet
 * @param boolean $echo     输出几行几列
 * @return array
 */

function excel_get_array($path,$sheet = 0,$echo = false){
	include(dirname(__FILE__).'/PHPExcel.php') ;
	if (!$path) {
		echo "path no used";
		exit;
	}
	if ($path == $_FILES) $path = array_values($path)[0]['tmp_name'];
	$PHPReader = new PHPExcel_Reader_Excel2007(); // Reader很关键，用来读excel文件
	if (!$PHPReader->canRead($path)) { // 这里是用Reader尝试去读文件，07不行用05，05不行就报错。
		$PHPReader = new PHPExcel_Reader_Excel5();
		if (!$PHPReader->canRead($path)) {
			echo $errorMessage = "Can not read file.";
			exit;
		}
	}
	$PHPExcel = $PHPReader->load($path);
	$currentSheet = $PHPExcel->getSheet($sheet); // 拿到第几个sheet（工作簿？）
	if ($echo){
		$allSheet = $PHPExcel->getSheetCount(); // sheet数
		$allColumn = $currentSheet->getHighestColumn();//取得当前工作表最大的列号,如，E
		$allRow = $currentSheet->getHighestRow();//取得当前工作表一共有多少行
		echo "sheet数：$allSheet, 最大的行是：$allRow, 最大的列是：$allColumn";
	}

	$dataArr = $currentSheet->toArray(null, true, true, true);
	return $dataArr;
}


// Check prerequisites
if (!file_exists("a.xls")) {
	exit("not found a.xls.\n");
}
var_dump($_FILES);
$arr = excel_get_array($_FILES,0,true);
array_shift($arr);
var_dump($arr);die;


	$sql = "select id,id_card from hospital.report";

	$data = query($sql);

$a=['id','id_card'];
download_excel($data,$a,$a,'abc.xlsx');die;

$strl = '';
foreach ($data as $key => $val){
	$str = '';
	foreach ($val as $item) {
		$str .="  ".$item."\t";
	}
	$strl .=$str."\n";
}
 echo mb_convert_encoding($strl, "gb2312", "UTF-8");;


exit();



?>