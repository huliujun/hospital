<?php
/**
 *
 * @copyright 2007-2012 Xiaoqiang.
 * @author Xiaoqiang.Wu <jamblues@gmail.com>
 * @version 1.01
 */
include(dirname(__FILE__).'/config.php') ;

error_reporting(E_ALL ^ E_NOTICE ^E_WARNING);
 
date_default_timezone_set('Asia/ShangHai');

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

        echo iconv("GB2312","UTF-8",'<script>alert("文件错误");location.href="./index.php";</script>');
        exit;
    }

    if(array_values($path)[0]['error']==1){
        echo iconv("GB2312","UTF-8",'<script>alert("文件过大,超过php限制");location.href="./index.php";</script>');
    }elseif(array_values($path)[0]['error']==2){
        echo iconv("GB2312","UTF-8",'<script>alert("文件过大,超过设置大小");location.href="./index.php";</script>');
    }elseif(array_values($path)[0]['error']==3){
        echo iconv("GB2312","UTF-8",'<script>alert("文件只有部分被上传");location.href="./index.php";</script>');
    }elseif(array_values($path)[0]['error']==4){
        echo iconv("GB2312","UTF-8",'<script>alert("没有文件被上传");location.href="./index.php";</script>');
        //echo '<script>alert("没有文件被上传");location.href="./index.php";</script>';
    }

    if ($path == $_FILES){
		if (array_values($path)[0]['tmp_name'])
			$path = array_values($path)[0]['tmp_name'];
		else
			exit('文件过大');
	}
    $PHPReader = new PHPExcel_Reader_Excel2007(); // Reader很关键，用来读excel文件
    if (!$PHPReader->canRead($path)) { // 这里是用Reader尝试去读文件，07不行用05，05不行就报错。
        $PHPReader = new PHPExcel_Reader_Excel5();
        if (!$PHPReader->canRead($path)) {
            echo $errorMessage = iconv("GB2312","UTF-8",'<script>alert("不能读取文件或文件格式错误");location.href="./index.php";</script>');
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
//var_dump($_POST);

// Check prerequisites

//var_dump($_FILES);
$arr = excel_get_array($_FILES,0,0);
array_shift($arr);
//var_dump($arr);die;

$insert = "INSERT INTO `sheet_report` (`dian_no`, `project_no`, `result`, `project_unit`, `card_num`, `reference_value`, `upper_limit`, `lower_limit`, `mark`, `real_name`, `statdate`, `examiner`, `auditor` )VALUES ";

foreach ($arr as $key=>$val){

    $str ='(';
    foreach ($val as $k => $v){
        $str .= "'".addslashes(trim($v))."',";
    }
    $str = substr($str,0,-1);
    $insert .= $str.'),';
}
$insert = substr($insert,0,-1);

$res = mysql_query($insert) or die(mysql_error().$insert);
if ($res==1){
	mysql_query("insert into report (`no`) select distinct dian_no as `no` from sheet_report where dian_no not in (select distinct `no` from report)");
	echo iconv("GB2312","UTF-8",'<script>alert("导入成功");location.href="./index.php";</script>');
	
}
    
else
    echo iconv("GB2312","UTF-8",'<script>alert("导入模板错误");location.href="./index.php";</script>');
//header('Location: ./index.php');
/*if ($res==1){
    ?>
    <script>
       alert('导入成功');
    </script>

<?php  header('Location: ./index.php');
    }else{ ?>
    <script>
        alert('导入模板错误');
    </script>

<?php }?>*/