<!DOCTYPE html>
<!-- http://www.w3cschool.cc/bootstrap/bootstrap-plugins-overview.html -->
<!--
-->
<html>
<head>
   <title>老年人体检报告</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
   <link href="./css/bootstrap.min.css" rel="stylesheet">
   <script src="./js/jquery.js"></script>
   <script src="./js/bootstrap.min.js"></script>
	<script src="./js/npm.js"></script>

<style>
.box				{width:50%;float:left;}
.box3				{width:32%;float:left;}
.box4				{width:22%;float:left;}
.box5				{width:16%;float:left;}
body				{margin:auto}
.main_body			{width:1120px;;margin:auto;height:auto;}
.title				{width:100px;float:left;}
.tr					{width:100%;float:left;margin-top:5px;}
.radio			{width:130px;}
</style>
</head>
<body style='padding-left:10px'>


<body style='padding-left:10px'>
<?php
include(dirname(__FILE__).'/config.php') ;
$id = isset($_POST['id'])?$_POST['id']:'';

if ($id!=null){
	$sql = "select * from hospital.report where `id`= '$id'";

	$data = query($sql)[0];
}else
	$data = [];

$abdomen_baokuai=!empty($data)?(int)$data['abdomen_baokuai']:'';
$abdomen_liver=!empty($data)?(int)$data['abdomen_liver']:'';
$abdomen_pain=!empty($data)?(int)$data['abdomen_pain']:'';
$abdomen_spleen=!empty($data)?(int)$data['abdomen_spleen']:'';
$blood=!empty($data)?(int)$data['blood']:'';
$blood_x=!empty($data)?(int)$data['blood_x']:'';
$card_num=!empty($data)?(int)$data['card_num']:'';
$cataract=!empty($data)?(int)$data['cataract']:'';
$cerebral_infarction=!empty($data)?(int)$data['cerebral_infarction']:'';
$degree=!empty($data)?$data['degree']:'';
$diabetes=!empty($data)?(int)$data['diabetes']:'';
$drink=!empty($data)?(int)$data['drink']:'';
$drink_frequent=!empty($data)?(int)$data['drink_frequent']:'';
$drink_type=!empty($data)?(int)$data['drink_type']:'';
$glaucoma=!empty($data)?(int)$data['glaucoma']:'';
$health=!empty($data)?(int)$data['health']:'';
$hearing=!empty($data)?(int)$data['hearing']:'';
$heart=!empty($data)?(double)$data['heart']:'';
$heart_disease=!empty($data)?(int)$data['heart_disease']:'';
$heart_voice=!empty($data)?(int)$data['heart_voice']:'';
$heart_voice_other=!empty($data)?(int)$data['heart_voice_other']:'';
$height=!empty($data)?(double)$data['height']:'';
$hipline=!empty($data)?(double)$data['hipline']:'';
$hyperlipemia=!empty($data)?(int)$data['hyperlipemia']:'';
$hypertension=!empty($data)?(int)$data['hypertension']:'';
$lung=!empty($data)?(int)$data['lung']:'';
$lung_shape=!empty($data)?(int)$data['lung_shape']:'';
$lung_voice=!empty($data)?(int)$data['lung_voice']:'';
$lymph=!empty($data)?(int)$data['lymph']:'';
$marriage=!empty($data)?$data['marriage']:'';
$mouth=!empty($data)?(int)$data['mouth']:'';
$nosmoke_year=!empty($data)?(int)$data['nosmoke_year']:'';
$occu=!empty($data)?(int)$data['occu']:'';
$operation=!empty($data)?(int)$data['operation']:'';

$osteoporosis=!empty($data)?(int)$data['osteoporosis']:'';
$rhythm=!empty($data)?(int)$data['rhythm']:'';
$skin=!empty($data)?(int)$data['skin']:'';
$smoke=!empty($data)?(int)$data['smoke']:'';
$smoke_no=!empty($data)?(int)$data['smoke_no']:'';
$smoke_year=!empty($data)?(int)$data['smoke_year']:'';
$sport_time=!empty($data)?(int)$data['sport_time']:'';
$sporttimes=!empty($data)?(int)$data['sporttimes']:'';
$sportways=!empty($data)?(int)$data['sportways']:'';
$tumour_year=!empty($data)?(int)$data['tumour_year']:'';
$luoyin=!empty($data)?(int)$data['luoyin']:'';
$village=!empty($data)?(int)$data['village']:'';
$visioin_right=!empty($data)?(double)$data['visioin_right']:'';
$vision_left=!empty($data)?(double)$data['vision_left']:'';
$visioin_right_x=!empty($data)?(double)$data['visioin_right_x']:'';
$vision_left_x=!empty($data)?(double)$data['vision_left_x']:'';
$waist=!empty($data)?(double)$data['waist']:'';
$weight=!empty($data)?(double)$data['weight']:'';


$addr=!empty($data)?$data['addr']:'';
$abdomen_spleen_other=!empty($data)?$data['abdomen_spleen_other']:'';
$additional_check1=!empty($data)?$data['additional_check1']:'';
$additional_check2=!empty($data)?$data['additional_check2']:'';
$cerebral_infarction_family=!empty($data)?$data['cerebral_infarction_family']:'';
$cerebral_infarction_medicine=!empty($data)?$data['cerebral_infarction_medicine']:'';
$check_result=!empty($data)?$data['check_result']:'';
$diabetes_family=!empty($data)?$data['diabetes_family']:'';
$diabetes_medicine=!empty($data)?$data['diabetes_medicine']:'';
$diet=!empty($data)?json_decode($data['diet']):array();
$health_advice=!empty($data)?json_decode($data['health_advice']):array();

$health_advice_other=!empty($data)?$data['health_advice_other']:'';
$health_education=!empty($data)?json_decode($data['health_education']):array();
$health_education_other=!empty($data)?$data['health_education_other']:'';
$heart_disease_family=!empty($data)?$data['heart_disease_family']:'';
$heart_disease_medicine=!empty($data)?$data['heart_disease_medicine']:'';
$hypertension_family=!empty($data)?$data['hypertension_family']:'';
$hypertension_medicine=!empty($data)?$data['hypertension_medicine']:'';
$id_card=!empty($data)?$data['id_card']:'';
$lung_family=!empty($data)?$data['lung_family']:'';
$lung_medicine=!empty($data)?$data['lung_medicine']:'';
$mouth_other=!empty($data)?$data['mouth_other']:'';
$no=!empty($data)?$data['no']:'';
$other_diet=!empty($data)?$data['other_diet']:'';
$other_disease=!empty($data)?$data['other_disease']:'';
$other_sports=!empty($data)?$data['other_sports']:'';
$real_name=!empty($data)?$data['real_name']:'';
$skin_other=!empty($data)?$data['skin_other']:'';
$tel=!empty($data)?$data['tel']:'';
$tumour=!empty($data)?$data['tumour']:'';
$tumour_family=!empty($data)?$data['tumour_family']:'';
$tumour_status=!empty($data)?$data['tumour_status']:'';
$visioin_right_detail=!empty($data)?$data['visioin_right_detail']:'';
$vision_left_detail=!empty($data)?$data['vision_left_detail']:'';
$luoyin_detail=!empty($data)?$data['luoyin_detail']:'';
$add_user=!empty($data)?$data['add_user']:'';
$report_user=!empty($data)?$data['report_user']:'';

?>
<div class="main_body">
		<a class="btn btn-default" style="height:31px;background-color: #eee;border-color: #9D9D9D;border-radius: 0" type="button" id="<?php if ($_POST['mod_id']=='add')echo "back";elseif($_POST['mod_id']=='update') echo 'back_search'; ?>">返回</a>

	<form class="form-inline" role="form" action="./do_add.php" method=POST>


		<div class="tr">
			<div class="form-group box">
				<div class="title">姓名：</div>
				<input type="text" class="form-control" placeholder="请输入姓名" value='<?php echo $real_name ?>' name="real_name" id="real_name" size=30>
			</div>

			<div class="form-group box">
				<div class="title">联系电话：</div>
				<input type="text" class="form-control" placeholder="请输入联系电话" value='<?php echo $tel ?>' name="tel" id="tel" size=30>
			</div>
		</div>

		<div class="tr" >
			<div class="form-group box">
				<div class="title">身份证：</div>
				<input type="text" class="form-control" placeholder="请输入身份证" value='<?php echo $id_card ?>' name="id_card" id="id_card" size=30>
			</div>
		</div>
		<div class="tr">
			<div class="form-group 	">
				<div class="title">居住地址：</div>
				<input type="text" class="form-control" placeholder="请输入居住地址" value='<?php echo $addr ?>' name="addr" id="addr" size=40>
			</div>
		</div>

		<div class="tr">
			<div class="form-group box">
				<div class="title">村委会：</div>
				<select style="width:230px;height:30px" name="village" id="village">
					<option <?php if ($village == 1) echo 'selected'?> value=1>凌桥一居</option>
					<option <?php if ($village == 2) echo 'selected'?> value=2>凌桥二居</option>
					<option <?php if ($village == 3) echo 'selected'?> value=3>凌桥三居</option>
					<option <?php if ($village == 4) echo 'selected'?> value=4>凌桥四居</option>
					<option <?php if ($village == 5) echo 'selected'?> value=5>凌桥五居</option>
					<option <?php if ($village == 6) echo 'selected'?> value=6>凌桥六居</option>
					<option <?php if ($village == 7) echo 'selected'?> value=7>凌桥村</option>
					<option <?php if ($village == 8) echo 'selected'?> value=8>仓房村</option>
					<option <?php if ($village == 9) echo 'selected'?> value=9>西新村</option>
					<option <?php if ($village == 10) echo 'selected'?> value=10>三岔港村</option>
					<option <?php if ($village == 11) echo 'selected'?> value=11>北新村</option>
					<option <?php if ($village == 12) echo 'selected'?> value=12>龙叶村</option>
					<option <?php if ($village == 13) echo 'selected'?> value=13>新益村</option>
					<option <?php if ($village == 14) echo 'selected'?> value=14>其他</option>
				</select>
			</div>

			<div class="form-group box">
				<div class="title">体检编号：</div>
				<input type="text" class="form-control" placeholder="体检标号" value='<?php echo $no ?>' name="no" id="no" size=30>
			</div>
		</div>
		
		<h4>一、基本信息：</h4>
		<div class="tr">
			<div class="form-group box">
				<div class="title">社保卡号：</div>
				<input type="text" class="form-control" placeholder="请输入10位卡号" value='<?php echo $card_num ?>' name="card_num" id="card_num" size=30>
			</div>

			<div class="form-group box">
				<div class="title">退休前职业：</div>
				<input type="text" class="form-control" placeholder="请输入退休前职业" value='<?php echo $occu ?>' name="occu" id="occu" size=30>
			</div>
		</div>

		<div class="tr">
			<div class="form-group box">
				<div class="title">婚姻状况：</div>
				<input type="text" class="form-control" placeholder="请输入婚姻状况" value='<?php echo $marriage ?>' name="marriage" id="marriage" size=30>

			</div>

			<div class="form-group box">
				<div class="title">文化程度：</div>
				<input type="text" class="form-control" placeholder="请输入文化程度" value='<?php echo $degree ?>' name="degree" id="degree" size=30>
			</div>
		</div>
		<h4>二、既往病史（填写发病时间、家族史：父母、兄弟姐妹、子女）：</h4>
		<div class="tr">
			<div class="form-group box3">
				1、 高血压：　<input type="text" class="form-control" placeholder="***" value='<?php echo $hypertension ?>' name="hypertension" id="hypertension" size=5 onkeyup="do_press(this,'diabetes');">年
			</div>
			<div class="form-group box3">
				家族史：<input type="text" class="form-control" placeholder="***" value='<?php echo $hypertension_family ?>' name="hypertension_family" id="hypertension_family" size=5>
			</div>
			<div class="form-group box3">
				服药名称：<input type="text" class="form-control" placeholder="***" value='<?php echo $hypertension_medicine ?>' name="hypertension_medicine" id="hypertension_medicine" size=9>
			</div>
		</div>
		<div class="tr">
			<div class="form-group box3">
				2、 糖尿病：　<input type="text" class="form-control" placeholder="***" value='<?php echo $diabetes ?>' name="diabetes" id="diabetes" size=5 onkeyup="do_press(this,'cerebral_infarction');">年  </div>
			<div class="form-group box3">
				家族史：<input type="text" class="form-control" placeholder="***" value='<?php echo $diabetes_family ?>' name="diabetes_family" id="diabetes_family" size=5>
			</div>
			<div class="form-group box3">
				服药名称：<input type="text" class="form-control" placeholder="***" value='<?php echo $diabetes_medicine ?>' name="diabetes_medicine" id="diabetes_medicine" size=9>
			</div>
		</div>
		<div class="tr">
			<div class="form-group box3">
				3、 脑梗：　　<input type="text" class="form-control" placeholder="***" value='<?php echo $cerebral_infarction ?>' name="cerebral_infarction" id="cerebral_infarction" size=5 onkeyup="do_press(this,'heart_disease');">年  </div>
			<div class="form-group box3">
				家族史：<input type="text" class="form-control" placeholder="***" value='<?php echo $cerebral_infarction_family ?>' name="cerebral_infarction_family" id="cerebral_infarction_family" size=5>
			</div>
			<div class="form-group box3">
				服药名称：<input type="text" class="form-control" placeholder="***" value='<?php echo $cerebral_infarction_medicine ?>' name="cerebral_infarction_medicine" id="cerebral_infarction_medicine" size=9>
			</div>
		</div>
		<div class="tr">
			<div class="form-group box3">
				4、 心脏病：　<input type="text" class="form-control" placeholder="***" value='<?php echo $heart_disease ?>' name="heart_disease" id="heart_disease" size=5 onkeyup="do_press(this,'lung');">年  </div>
			<div class="form-group box3">
				家族史：<input type="text" class="form-control" placeholder="***" value='<?php echo $heart_disease_family ?>' name="heart_disease_family" id="heart_disease_family" size=5>
			</div>
			<div class="form-group box3">
				服药名称：<input type="text" class="form-control" placeholder="***" value='<?php echo $heart_disease_medicine ?>' name="heart_disease_medicine" id="heart_disease_medicine" size=9>
			</div>
		</div>
		<div class="tr">
			<div class="form-group box3">
				5、 慢阻肺：　<input type="text" class="form-control" placeholder="***" value='<?php echo $lung ?>' name="lung" id="lung" size=5 onkeyup="do_press(this,'tumour');">年  </div>
			<div class="form-group box3">
				家族史：<input type="text" class="form-control" placeholder="***" value='<?php echo $lung_family ?>' name="lung_family" id="lung_family" size=5>
			</div>
			<div class="form-group box3">
				服药名称：<input type="text" class="form-control" placeholder="***" value='<?php echo $lung_medicine ?>' name="lung_medicine" id="lung_medicine" size=9>
			</div>
		</div>
		<div class="tr">
			<div class="form-group box3">
				6、 肿瘤名称：<input type="text" class="form-control" placeholder="***" value='<?php echo $tumour ?>' name="tumour" id="tumour" size=5 onkeyup="do_press(this,'cataract');">
				患病：<input type="text" class="form-control" placeholder="***" value='<?php echo $tumour_year ?>' name="tumour_year" id="tumour_year" size=5>年
				</div>
			<div class="form-group box3">
				家族史：<input type="text" class="form-control" placeholder="***" value='<?php echo $tumour_family ?>' name="tumour_family" id="tumour_family" size=5>
			</div>
			<div class="form-group box3">
				治疗情况：<input type="text" class="form-control" placeholder="***" value='<?php echo $tumour_status ?>' name="tumour_status" id="tumour_status" size=9>
			</div>
		</div>
		<div class="tr">
			<div class="form-group ">
				7、 白内障：　<input type="text" class="form-control" placeholder="***" value='<?php echo $cataract ?>' name="cataract" id="cataract" size=5 onkeyup="do_press(this,'glaucoma');">年  （是否手术：是 <input type="radio"  <?php if ($operation == 1) echo 'checked'?>  name='operation' value='1' >  否 <input type="radio" <?php if ($operation == 2) echo 'checked'?> name='operation' value='2' > ）
			</div>
			<div class="form-group ">
				8、 青光眼：<input type="text" class="form-control" placeholder="***" value='<?php echo $glaucoma ?>' name="glaucoma" id="glaucoma" size=5 onkeyup="do_press	(this,'osteoporosis');">年
			</div>
		</div>
		<div class="tr">
			<div class="form-group box3">
				9、 骨质疏松：<input type="text" class="form-control" placeholder="***" value='<?php echo $osteoporosis ?>' name="osteoporosis" id="osteoporosis" size=5 onkeyup="do_press(this,'hyperlipemia');">年
			</div>
			<div class="form-group box3">
				10、 高血脂：<input type="text" class="form-control" placeholder="***" value='<?php echo $hyperlipemia ?>' name="hyperlipemia" id="hyperlipemia" size=5 onkeyup="do_press(this,'other_disease');">年
			</div>
			<div class="form-group box3">
				11、其他：<input type="text" class="form-control" placeholder="***" value='<?php echo $other_disease ?>' name="other_disease" id="other_disease" size=9>
			</div>
		</div>

		<h4>三、生活方式调查</h4><h5>1、体育锻炼：</h5>
		<div class="tr">
		<p class="form-group " >　[锻炼频率]：</p>
			<div class="form-group radio">
				<input type="radio" <?php if ($sporttimes == 1) echo 'checked'?> name='sporttimes' value='1' >每天
			</div>
			<div class="form-group radio">
				<input type="radio" <?php if ($sporttimes == 2) echo 'checked'?> name='sporttimes' value='2' >每周
			</div>
			<div class="form-group radio">
				<input type="radio" <?php if ($sporttimes == 3) echo 'checked'?> name='sporttimes' value='3' >偶尔
			</div>
			<div class="form-group radio">
				<input type="radio" <?php if ($sporttimes == 4) echo 'checked'?> name='sporttimes' value='4' >不锻炼
			</div>
			<div class="form-group " >
	每次持续时间：<input type="text" class="form-control" placeholder="***" value='<?php echo $sport_time ?>' name="sport_time" id="sport_time" size=10>分

			</div>
		</div>
		<div class="tr">
			<p class="form-group " >　[锻炼方式]：</p>
			<div class="form-group radio">
				<input type="radio" <?php if ($sportways == 1) echo 'checked'?> name='sportways' value='1' >散布
			</div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($sportways == 2) echo 'checked'?> name='sportways' value='2' >跑步
				</div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($sportways == 3) echo 'checked'?> name='sportways' value='3' >球类运动
			</div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($sportways == 4) echo 'checked'?> name='sportways' value='4' >小区健身器材运动

			</div>
			<div class="form-group " >
					其他：<input type="text" class="form-control" placeholder="***" value='<?php echo $other_sports ?>' name="other_sports" id="other_sports" size=10>
			</div>
		</div>
		<div class="tr">
		<p class="form-group " >2、饮食习惯：</p>
			<div class="form-group radio">
					<input type="checkbox" <?php if (in_array('1',$diet)) echo 'checked'?> name='diet' value='1' >清淡
					</div>
			<div class="form-group radio">
					 <input type="checkbox" <?php if (in_array('2',$diet)) echo 'checked'?> name='diet' value='2' >多糖
					 </div>
			<div class="form-group radio">
					 <input type="checkbox" <?php if (in_array('3',$diet)) echo 'checked'?> name='diet' value='3' >辛辣
					 </div>
			<div class="form-group radio">
					 <input type="checkbox" <?php if (in_array('4',$diet)) echo 'checked'?> name='diet' value='4' >多盐
					 </div>
			<div class="form-group radio">
					 <input type="checkbox" <?php if (in_array('5',$diet)) echo 'checked'?> name='diet' value='5' >多油
					 </div></br>&nbsp;　　　　　	　
			<div class="form-group radio">
					 <input type="checkbox" <?php if (in_array('6',$diet)) echo 'checked'?> name='diet' value='6' >油炸
					 </div>
			<div class="form-group radio">
					 <input type="checkbox" <?php if (in_array('7',$diet)) echo 'checked'?> name='diet' value='7' >腌制
			</div>
			<div class="form-group ">
					其他：<input type="text" class="form-control" placeholder="***" value='<?php echo $other_diet ?>' name="other_diet" id="other_diet" size=12>
			</div>
		</div>
		<div class="tr">
		<p class="form-group " >3、吸烟情况：</p>
			<div class="form-group radio">
				 <input type="radio" <?php if ($smoke == 1) echo 'checked'?> name='smoke' value='1' >从不吸烟
			</div>
			<div class="form-group ">
					 <input type="radio" <?php if ($smoke == 2) echo 'checked'?> name='smoke' value='2' >目前吸烟
					 （烟龄<input type="text" class="form-control" placeholder="***" value='<?php echo $smoke_year ?>' name="smoke_year" id="smoke_year" size=5>年，每天吸<input type="text" class="form-control" placeholder="***" value='<?php echo $smoke_no ?>' name="smoke_no" id="smoke_no" size=5>支）
			</div>
			<div class="form-group ">　
					 <input type="radio" <?php if ($smoke == 3) echo 'checked'?> name='smoke' value='3' >已戒烟
					 （戒烟<input type="text" class="form-control" placeholder="***" value='<?php echo $nosmoke_year ?>' name="nosmoke_year" id="nosmoke_year" size=5>年）
			</div>
		</div>
		<div class="tr">
		<p class="form-group " >4、饮酒情况：</p>
			<div class="form-group radio">
				 <input type="radio" <?php if ($drink == 1) echo 'checked'?> name='drink' value='1' >从不饮酒
				</div>
			<div class="form-group ">
					 <input type="radio" <?php if ($drink == 2) echo 'checked'?> name='drink' value='2' >饮酒
					 （饮酒种类：
						<select name="drink_type" id="drink_type">
							<option <?php if ($drink_type == 1) echo 'selected'?> value='1'>黄酒</option>
							<option <?php if ($drink_type == 2) echo 'selected'?> value='2'>红酒</option>
							<option <?php if ($drink_type == 3) echo 'selected'?> value='3'>白酒</option>
							<option <?php if ($drink_type == 4) echo 'selected'?> value='4'>啤酒</option>
							<option <?php if ($drink_type == 5) echo 'selected'?> value='5'>其他</option>
						</select>
						）
					 （饮酒频率：每
						<select name="drink_frequent" id="drink_frequent">
							<option <?php if ($drink_frequent == 1) echo 'selected'?> value="1">天</option>
							<option <?php if ($drink_frequent == 2) echo 'selected'?> value="2">周</option>
							<option <?php if ($drink_frequent == 3) echo 'selected'?> value="3">月</option>
						</select>
						次）
			</div>
		</div>
		<div class="tr"><p class="form-group " >5、自觉健康状况：</p>
			<div class="form-group radio">
					 <input type="radio" <?php if ($health == 1) echo 'checked'?> name='health' value='1' >优良
					</div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($health == 2) echo 'checked'?> name='health' value='2' >良好
					 </div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($health == 3) echo 'checked'?> name='health' value='3' >一般
					 </div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($health == 4) echo 'checked'?> name='health' value='4' >较差
					 </div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($health == 5) echo 'checked'?> name='health' value='5' >极差
			</div>
		</div>
		<h4>四、一般情况：</h4>
		<div class="tr">

			<div class="form-group box5">
				身高：<input type="text" class="form-control" placeholder="***" value='<?php echo $height ?>' name="height" id="height" size=3>cm
			</div>
			<div class="form-group box5">
				体重：<input type="text" class="form-control" placeholder="***" value='<?php echo $weight ?>' name="weight" id="weight" size=3>kg
			</div>
			<div class="form-group box5">
				腰围：<input type="text" class="form-control" placeholder="***" value='<?php echo $waist ?>' name="waist" id="waist" size=3>cm
			</div>
			<div class="form-group box5">
				臀围：<input type="text" class="form-control" placeholder="***" value='<?php echo $hipline ?>' name="hipline" id="hipline" size=3>cm
			</div>
			<div class="form-group box4">
				血压：<input type="text" class="form-control" placeholder="***" value='<?php echo $blood ?>' name="blood" id="blood" size=2>/
				<input type="text" class="form-control" placeholder="***" value='<?php echo $blood_x ?>' name="blood_x" id="blood_x" size=2>mmHg
			</div>
		</div>

		<div class="tr">
			<div class="form-group ">
				视力：左眼<input type="text" class="form-control" placeholder="***" value='<?php echo $vision_left ?>' name="vision_left" id="vision_left" size=5>/
				<input type="text" class="form-control" placeholder="***" value='<?php echo $vision_left_x ?>' name="vision_left_x" id="vision_left_x" size=5>（裸眼/矫正）
			</div>
			<div class="form-group ">
		　　　　眼病诊断<input type="text" class="form-control" placeholder="***" value='<?php echo $vision_left_detail ?>' name="vision_left_detail" id="vision_left_detail" size=60>
			</div>
		</div>
		<div class="tr">
			<div class="form-group ">
				　　　右眼<input type="text" class="form-control" placeholder="***" value='<?php echo $visioin_right ?>' name="visioin_right" id="visioin_right" size=5>/
				<input type="text" class="form-control" placeholder="***" value='<?php echo $visioin_right_x ?>' name="visioin_right_x" id="visioin_right_x" size=5>（裸眼/矫正）
			</div>
			<div class="form-group ">
		　　　　眼病诊断<input type="text" class="form-control" placeholder="***" value='<?php echo $visioin_right_detail ?>' name="visioin_right_detail" id="visioin_right_detail" size=60>
			</div>
		</div>
		<h4>五、医生查体：</h4>
		<div class="tr">
			<p class="form-group " >1、皮肤：　</p>
			<div class="form-group radio">
			<input type="radio" <?php if ($skin == 1) echo 'checked'?> name='skin' value='1' >正常
				</div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($skin == 2) echo 'checked'?> name='skin' value='2' >潮红
					 </div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($skin == 3) echo 'checked'?> name='skin' value='3' >苍白
					 </div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($skin == 4) echo 'checked'?> name='skin' value='4' >发绀
					 </div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($skin == 5) echo 'checked'?> name='skin' value='5' >黄染
					 </div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($skin == 6) echo 'checked'?> name='skin' value='6' >色素沉着
					 </div></br>&nbsp;　　　　　
			<div class="form-group ">
					其他：<input type="text" class="form-control" placeholder="***" value='<?php echo $skin_other ?>' name="skin_other" id="skin_other" size=30>
			</div>
		</div>
		<div class="tr">
			<p class="form-group " >2、淋巴结：</p>
			<div class="form-group radio">
			<input type="radio" <?php if ($lymph == 1) echo 'checked'?> name='lymph' value='1' >未触及
				</div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($lymph == 2) echo 'checked'?> name='lymph' value='2' >颈部淋巴结肿大
					 </div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($lymph == 3) echo 'checked'?> name='lymph' value='3' >锁骨上淋巴结肿大
			</div>
		</div>
		<div class="tr">
			<p class="form-group " >3、肺部：</p>
		</div>
		<div class="tr">
			<p class="form-group " >　[呼吸音]：</p>
			<div class="form-group radio">
			<input type="radio" <?php if ($lung_voice == 1) echo 'checked'?> name='lung_voice' value='1' >正常
				</div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($lung_voice == 2) echo 'checked'?> name='lung_voice' value='2' >异常
					 </div>
		</div>
		<div class="tr">
			<p class="form-group " >　[桶状胸]： </p>
			<div class="form-group radio">
					<input type="radio" <?php if ($lung_shape == 2) echo 'checked'?> name='lung_shape' value='2' >无
					</div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($lung_shape == 1) echo 'checked'?> name='lung_shape' value='1' >有
					 </div>
			<div class="form-group radio">
			</div>
		</div>

		<div class="tr">
			<p class="form-group " >　[  啰音  ]： </p>
			<div class="form-group radio">
				<input type="radio" <?php if ($luoyin == 1) echo 'checked'?> name='luoyin' value='1' >无
			</div>
			<div class="form-group radio">
				<input type="radio" <?php if ($luoyin == 2) echo 'checked'?> name='luoyin' value='2' >干啰音
			</div>
			<div class="form-group radio">
				<input type="radio" <?php if ($luoyin == 3) echo 'checked'?> name='luoyin' value='3' >湿啰音
			</div>
			<div class="form-group ">
				其他：<input type="text" class="form-control" placeholder="***" value='<?php echo $luoyin_detail ?>' name="luoyin_detail" id="luoyin_detail" size=30>
			</div>
		</div>

		<div class="tr">

		<p class="form-group " >4、心脏：</p>
		</div>
		<div class="tr">
			<div class="form-group ">
			[心率]： <input type="text" class="form-control" placeholder="***" value='<?php echo $heart ?>' name="heart" id="heart" size=20>次/分
			</div>
		</div>
		<div class="tr">
			<p class="form-group " >　[心律]：　</p>
			<div class="form-group radio">
			<input type="radio" <?php if ($rhythm == 1) echo 'checked'?> name='rhythm' value='1' >齐
				</div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($rhythm == 2) echo 'checked'?> name='rhythm' value='2' >不齐
					 </div>
		</div>
		<div class="tr">
			<p class="form-group " >　[杂音]：　</p>
			<div class="form-group radio">
			<input type="radio" <?php if ($heart_voice == 2) echo 'checked'?> name='heart_voice' value='2' >无
					</div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($heart_voice == 1) echo 'checked'?> name='heart_voice' value='1' >有
					 </div>
			<div class="form-group ">
					其他：<input type="text" class="form-control" placeholder="***" value='<?php echo $heart_voice_other ?>' name="heart_voice_other" id="heart_voice_other" size=30>
			</div>
		</div>
		<div class="tr">
		<p class="form-group " >5、腹部：</p>
		</div>
		<div class="tr">
			<p class="form-group " >　[压痛]：　</p>
			<div class="form-group radio">
			<input type="radio" <?php if ($abdomen_pain == 2) echo 'checked'?> name='abdomen_pain' value='2' >无
				</div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($abdomen_pain == 1) echo 'checked'?> name='abdomen_pain' value='1' >有
					 </div>
		</div>
		<div class="tr">
			<p class="form-group " >　[包块]：　</p>
			<div class="form-group radio">
			<input type="radio" <?php if ($abdomen_baokuai == 2) echo 'checked'?> name='abdomen_baokuai' value='2' >无
					</div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($abdomen_baokuai == 1) echo 'checked'?> name='abdomen_baokuai' value='1' >有
			</div>
		</div>
		<div class="tr">
			<p class="form-group " >　[肝大]：　</p>
			<div class="form-group radio">
			<input type="radio" <?php if ($abdomen_liver == 2) echo 'checked'?> name='abdomen_liver' value='2' >无
				</div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($abdomen_liver == 1) echo 'checked'?> name='abdomen_liver' value='1' >有
					 </div>
		</div>
		<div class="tr">
			<p class="form-group " >　[脾大]：　</p>
			<div class="form-group radio">
			<input type="radio" <?php if ($abdomen_spleen == 2) echo 'checked'?> name='abdomen_spleen' value='2' >无
					</div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($abdomen_spleen == 1) echo 'checked'?> name='abdomen_spleen' value='1' >有
					 </div>
			<div class="form-group ">
					其他：<input type="text" class="form-control" placeholder="***" value='<?php echo $abdomen_spleen_other ?>' name="abdomen_spleen_other" id="abdomen_spleen_other" size=30>
			</div>
		</div>
		<div class="tr">
			<p class="form-group " >6、口腔：　</p>
			<div class="form-group radio">
			<label><input type="radio" <?php if ($mouth == 1) echo 'checked'?> name='mouth' value='1' >正常</label>
				</div>
			<div class="form-group radio">
				<label><input type="radio" <?php if ($mouth == 2) echo 'checked'?> name='mouth' value='2' >缺齿</label>
					 </div>
			<div class="form-group radio">
				<label><input type="radio" <?php if ($mouth == 3) echo 'checked'?> name='mouth' value='3' >龋齿</label>
					 </div>
			<div class="form-group ">
					其他：<input type="text" class="form-control" placeholder="***" value='<?php echo $mouth_other ?>' name="mouth_other" id="mouth_other" size=30>
			</div>
		</div>
		<div class="tr">
			<p class="form-group " >7、听力：　</p>
			<div class="form-group radio">
			<input type="radio" <?php if ($hearing == 1) echo 'checked'?> name='hearing' value='1' >正常
				</div>
			<div class="form-group radio">
					 <input type="radio" <?php if ($hearing == 2) echo 'checked'?> name='hearing' value='2' >减退
			</div>
		</div>
		<h4>六、健康教育：</h4>
		<div class="tr">
			<div class="form-group radio">
				　　 <input type="checkbox" <?php if (in_array('1',$health_education)) echo 'checked'?> name='health_education' value='1' >中医养生指导
				</div>
			<div class="form-group radio">
					 <input type="checkbox" <?php if (in_array('2',$health_education)) echo 'checked'?> name='health_education' value='2' >健康饮酒
					 </div>
			<div class="form-group radio">
					 <input type="checkbox" <?php if (in_array('3',$health_education)) echo 'checked'?> name='health_education' value='3' >均衡营养膳食
					 </div>
			<div class="form-group radio">
					 <input type="checkbox" <?php if (in_array('4',$health_education)) echo 'checked'?> name='health_education' value='4' >适当锻炼
					 </div>
			<div class="form-group radio">
					 <input type="checkbox" <?php if (in_array('5',$health_education)) echo 'checked'?> name='health_education' value='5' >保持良好心态
					 </div>
			<div class="form-group radio">
					 <input type="checkbox" <?php if (in_array('6',$health_education)) echo 'checked'?> name='health_education' value='6' >减轻体重
			</div>
		</div>
		<div class="tr">
			<div class="form-group ">
				　　 <input type="checkbox" <?php if (in_array('7',$health_education)) echo 'checked'?> name='health_education' value='7' >建议疫苗接种
				</div>
			<div class="form-group radio">
					  <input type="checkbox" <?php if (in_array('8',$health_education)) echo 'checked'?> name='health_education' value='8' >预防骨质疏松
					  </div>
			<div class="form-group radio">
					 <input type="checkbox" <?php if (in_array('9',$health_education)) echo 'checked'?> name='health_education' value='9' >预防老年人跌倒
					 </div>
			<div class="form-group" style="width:300px">
					其他：<input type="text" class="form-control" placeholder="***" value='<?php echo $health_education_other ?>' name="health_education_other" id="health_education_other" size=20>
			</div>
		</div>
		<h4>七、健康干预：</h4>
		<div class="tr">
			<div class="form-group radio">
				　　 <input type="checkbox" <?php if (in_array('1',$health_advice)) echo 'checked'?> name='health_advice' value='1' >建议转诊
				</div>
			<div class="form-group radio">
					 <input type="checkbox" <?php if (in_array('2',$health_advice)) echo 'checked'?> name='health_advice' value='2' >定期随访
					 </div>
			<div class="form-group radio" style="width:260px">
					 <input type="checkbox" <?php if (in_array('3',$health_advice)) echo 'checked'?> name='health_advice' value='3' >异常化验结果，建议定期复查
					 </div>
			<div class="form-group " style="width:200px">
					 <input type="checkbox" <?php if (in_array('4',$health_advice)) echo 'checked'?> name='health_advice' value='4' >纳入眼病规范化管理
			</div>
		</div>
		<div class="tr">
			<div class="form-group " style="width:260px">
				　　 <input type="checkbox" <?php if (in_array('5',$health_advice)) echo 'checked'?> name='health_advice' value='5' >纳入慢性病患者健康管理
				</div>
			<div class="form-group " style="width:300px">
					其他：<input type="text" class="form-control" placeholder="***" value='<?php echo $health_advice_other ?>' name="health_advice_other" id="health_advice_other" size=20>
			</div>
		</div>
		<h4>八、辅助检查（1）：</h4>
		<div class="tr">
			<div class="form-group ">
				　　<input type="text" class="form-control" placeholder="***" value='<?php echo $additional_check1 ?>' name="additional_check1" id="additional_check1" size=130>
			</div>
		</div>
		<h4>九、辅助检查（2）：</h4>
		<div class="tr">
			<div class="form-group ">
				　　<input type="text" class="form-control" placeholder="***" value='<?php echo $additional_check2 ?>' name="additional_check2" id="additional_check2" size=130>
			</div>
		</div>
		<div class="tr">
			<div class="form-group ">
				　　录入人员：<input type="text" class="form-control" placeholder="***" value='<?php echo $add_user ?>' name="add_user" id="add_user" size=30>
			</div>
		</div>


		<h4>十、体检结果健康评估：</h4>
		<div class="tr">
			<div class="form-group ">
				　　<textarea name="check_result" rows="15" cols="130" id="check_result"><?php echo $check_result ?></textarea>
			</div>
		</div>
		<div class="tr">
			<div class="form-group ">
				　　报告人员：<input type="text" class="form-control" placeholder="***" value='<?php echo $report_user ?>' name="report_user" id="report_user" size=30>
			</div>
		</div>
<!--		<input type='submit' name='submit' value='提交'>-->


		<div class="tr">
		<div class="form-group box5">
		<a class="btn btn-default" type="button" id="tijiao" style="margin-top: 10px"><?php if($_POST['mod_id']=='update')echo '确认修改';else echo '确认添加';?></a>
		<input type ="hidden" id="mod_id" value="<?php $mod_id = isset($_POST['mod_id'])?$_POST['mod_id']:''; echo $mod_id?>">
		<input type ="hidden" id="id" value="<?php  echo $id?>">
		</div>

		<div class="form-group box5" id="abcc" style="width: 400px;height: 30px"></div></div>
	</form>
</div>


<script>
	function do_press(obj,node_id)
	{
		var value = parseInt(obj.value) ;
		if(isNaN(value))
			value = 0 ;

		//document.getElementById('a2').value = value ;
		if(value==0)
		{
			document.getElementById(node_id).focus() ;
		}

	}
	//do_press(obj,'diabetes');

	$('#tijiao').click(function(){
		var diet1 =[];
		var health_education1 =[];
		var health_advice1 =[];

		var id_card=$('#id_card').val();
		var	no=$('#no').val();
		var real_name=$('#real_name').val();

		if (real_name.length==0){
			showmsg('姓名不能为空',0,'abcc');
			return;
		}
		console.info(id_card.length);
		if (id_card.length!=18 ){
			showmsg('身份证号位数错误，为18位',0,'abcc');
			return;
		}
		if (no.length!=9){
			showmsg('体检标号位数错误，为9位',0,'abcc');
			return;
		}



		$('input[name="diet"]:checked').each(function(){
			diet1.push($(this).val());
		});
		$('input[name="health_education"]:checked').each(function(){
			health_education1.push($(this).val());
		});
		$('input[name="health_advice"]:checked').each(function(){
			health_advice1.push($(this).val());
		});

		$.post('./do_add.php',{
			mod_id:$('#mod_id').val(),
			id:$('#id').val(),
			diet:diet1,
			health_advice:health_advice1,
			health_education:health_education1,
			abdomen_baokuai:$("input[name='abdomen_baokuai']:checked").val(),
			abdomen_liver:$("input[name='abdomen_liver']:checked").val(),
			abdomen_pain:$("input[name='abdomen_pain']:checked").val(),
			abdomen_spleen:$("input[name='abdomen_spleen']:checked").val(),
			abdomen_spleen_other:$('#abdomen_spleen_other').val(),
			additional_check1:$('#additional_check1').val(),
			additional_check2:$('#additional_check2').val(),
			blood:$('#blood').val(),
			blood_x:$('#blood_x').val(),
			card_num:$('#card_num').val(),
			cataract:$('#cataract').val(),
			cerebral_infarction:$('#cerebral_infarction').val(),
			cerebral_infarction_family:$('#cerebral_infarction_family').val(),
			cerebral_infarction_medicine:$('#cerebral_infarction_medicine').val(),
			check_result:$('#check_result').val(),
			degree:$('#degree').val(),
			diabetes:$('#diabetes').val(),
			diabetes_family:$('#diabetes_family').val(),
			diabetes_medicine:$('#diabetes_medicine').val(),
			//diet:$('#diet').val(),
			drink:$("input[name='drink']:checked").val(),
			drink_frequent:$('#drink_frequent option:selected').val(),
			drink_type:$('#drink_type option:selected').val(),
			glaucoma:$('#glaucoma').val(),
			health:$("input[name='health']:checked").val(),
			//health_advice:$('#health_advice').val(),
			health_advice_other:$('#health_advice_other').val(),
			//health_education:$('#health_education').val(),
			health_education_other:$('#health_education_other').val(),
			hearing:$("input[name='hearing']:checked").val(),
			luoyin:$("input[name='luoyin']:checked").val(),
			heart:$('#heart').val(),
			heart_disease:$('#heart_disease').val(),
			heart_disease_family:$('#heart_disease_family').val(),
			heart_disease_medicine:$('#heart_disease_medicine').val(),
			heart_voice:$("input[name='heart_voice']:checked").val(),
			heart_voice_other:$('#heart_voice_other').val(),
			height:$('#height').val(),
			hipline:$('#hipline').val(),
			hyperlipemia:$('#hyperlipemia').val(),
			hypertension:$('#hypertension').val(),
			hypertension_family:$('#hypertension_family').val(),
			hypertension_medicine:$('#hypertension_medicine').val(),
			id_card:$('#id_card').val(),
			lung:$('#lung').val(),
			lung_family:$('#lung_family').val(),
			lung_medicine:$('#lung_medicine').val(),
			lung_shape:$("input[name='lung_shape']:checked").val(),
			lung_voice:$("input[name='lung_voice']:checked").val(),
			lymph:$("input[name='lymph']:checked").val(),
			marriage:$('#marriage').val(),
			mouth:$("input[name='mouth']:checked").val(),
			mouth_other:$('#mouth_other').val(),
			no:$('#no').val(),
			nosmoke_year:$('#nosmoke_year').val(),
			occu:$('#occu').val(),
			operation:$("input[name='operation']:checked").val(),
			osteoporosis:$('#osteoporosis').val(),
			other_diet:$('#other_diet').val(),
			other_disease:$('#other_disease').val(),
			other_sports:$('#other_sports').val(),
			real_name:$('#real_name').val(),
			rhythm:$("input[name='rhythm']:checked").val(),
			skin:$("input[name='skin']:checked").val(),
			skin_other:$('#skin_other').val(),
			smoke:$("input[name='smoke']:checked").val(),
			smoke_no:$('#smoke_no').val(),
			smoke_year:$('#smoke_year').val(),
			sport_time:$('#sport_time').val(),
			sporttimes:$("input[name='sporttimes']:checked").val(),
			sportways:$("input[name='sportways']:checked").val(),
			tel:$('#tel').val(),
			tumour:$('#tumour').val(),
			tumour_family:$('#tumour_family').val(),
			tumour_status:$('#tumour_status').val(),
			tumour_year:$('#tumour_year').val(),
			village:$('#village option:selected').val(),
			visioin_right:$('#visioin_right').val(),
			visioin_right_detail:$('#visioin_right_detail').val(),
			vision_left:$('#vision_left').val(),
			vision_left_detail:$('#vision_left_detail').val(),
			waist:$('#waist').val(),
			weight:$('#weight').val(),
			visioin_right_x:$('#visioin_right_x').val(),
			vision_left_x:$('#vision_left_x').val(),
			luoyin_detail:$('#luoyin_detail').val(),
			add_user:$('#add_user').val(),
			report_user:$('#report_user').val(),
			addr:$('#addr').val()
		},function(data){
			if (data==1){
				alert('修改成功');
				$.post('./search.php',{
					search:$('#id_card').val(),
				},function(data){
					$('.main_body').html(data);
				});
			}

			else{
				alert('添加成功');
				$.post('./index.php',{
					mod_id:'zhuye',
				},function(data){
					$('.main_body').html(data);
				});

			}


			//$('#main_body').html(data);
		});
	});

	$('#back').click(function(){
		$.post('./index.php',{
		},function(data){
			$('.main_body').html(data);
		});
	});
	$('#back_search').click(function(){
		$.post('./search.php',{
			search:$('#no').val(),
		},function(data){
			$('.main_body').html(data);
		});
	});


</script>



</body>
</html>