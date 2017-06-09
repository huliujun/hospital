
<?php
include(dirname(__FILE__).'/config.php') ;

$height=(double)($_POST['height']);
$visioin_right=(double)($_POST['visioin_right']);
$vision_left=(double)($_POST['vision_left']);
$visioin_right_x=(double)($_POST['visioin_right_x']);
$vision_left_x=(double)($_POST['vision_left_x']);
$weight=(double)($_POST['weight']);


$abdomen_baokuai=(int)($_POST['abdomen_baokuai']);
$abdomen_liver=(int)($_POST['abdomen_liver']);
$abdomen_pain=(int)($_POST['abdomen_pain']);
$abdomen_spleen=(int)($_POST['abdomen_spleen']);
$blood=(int)($_POST['blood']);
$blood_x=(int)($_POST['blood_x']);
$card_num=(int)($_POST['card_num']);
$cataract=(int)($_POST['cataract']);
$cerebral_infarction=(int)($_POST['cerebral_infarction']);

$diabetes=(int)($_POST['diabetes']);
$drink=(int)($_POST['drink']);
$drink_frequent=(int)($_POST['drink_frequent']);
$drink_type=(int)($_POST['drink_type']);
$glaucoma=(int)($_POST['glaucoma']);
$health=(int)($_POST['health']);
$hearing=(int)($_POST['hearing']);
$heart=(int)($_POST['heart']);
$heart_disease=(int)($_POST['heart_disease']);
$heart_voice=(int)($_POST['heart_voice']);
$heart_voice_other=(int)($_POST['heart_voice_other']);
$hipline=(int)($_POST['hipline']);
$hyperlipemia=(int)($_POST['hyperlipemia']);
$hypertension=(int)($_POST['hypertension']);
$lung=(int)($_POST['lung']);
$lung_shape=(int)($_POST['lung_shape']);
$lung_voice=(int)($_POST['lung_voice']);
$lymph=(int)($_POST['lymph']);

$mouth=(int)($_POST['mouth']);
$nosmoke_year=(int)($_POST['nosmoke_year']);
$occu=addslashes(trim($_POST['occu']));
$operation=(int)($_POST['operation']);
$osteoporosis=(int)($_POST['osteoporosis']);
$rhythm=(int)($_POST['rhythm']);
$skin=(int)($_POST['skin']);
$smoke=(int)($_POST['smoke']);
$smoke_no=(int)($_POST['smoke_no']);
$smoke_year=(int)($_POST['smoke_year']);
$sport_time=(int)($_POST['sport_time']);
$sporttimes=(int)($_POST['sporttimes']);
$sportways=(int)($_POST['sportways']);
$tumour_year=(int)($_POST['tumour_year']);
$village=(int)($_POST['village']);
$waist=(int)($_POST['waist']);
$luoyin=(int)($_POST['luoyin']);


$marriage=addslashes(trim($_POST['marriage']));
$degree=addslashes(trim($_POST['degree']));
$diet=addslashes(json_encode($_POST['diet']));
$health_education=addslashes(json_encode($_POST['health_education']));
$health_advice=addslashes(json_encode($_POST['health_advice']));

$addr=addslashes(trim($_POST['addr']));
$abdomen_spleen_other=addslashes(trim($_POST['abdomen_spleen_other']));
$additional_check1=addslashes(trim($_POST['additional_check1']));
$additional_check2=addslashes(trim($_POST['additional_check2']));
$cerebral_infarction_family=addslashes(trim($_POST['cerebral_infarction_family']));
$cerebral_infarction_medicine=addslashes(trim($_POST['cerebral_infarction_medicine']));
$check_result=addslashes(trim($_POST['check_result']));
$diabetes_family=addslashes(trim($_POST['diabetes_family']));
$diabetes_medicine=addslashes(trim($_POST['diabetes_medicine']));
//$diet=addslashes(trim($_POST['diet']));
//$health_advice=addslashes(trim($_POST['health_advice']));
$health_advice_other=addslashes(trim($_POST['health_advice_other']));
//$health_education=addslashes(trim($_POST['health_education']));
$health_education_other=addslashes(trim($_POST['health_education_other']));
$heart_disease_family=addslashes(trim($_POST['heart_disease_family']));
$heart_disease_medicine=addslashes(trim($_POST['heart_disease_medicine']));
$hypertension_family=addslashes(trim($_POST['hypertension_family']));
$hypertension_medicine=addslashes(trim($_POST['hypertension_medicine']));
$id_card=addslashes(trim($_POST['id_card']));
$lung_family=addslashes(trim($_POST['lung_family']));
$lung_medicine=addslashes(trim($_POST['lung_medicine']));
$mouth_other=addslashes(trim($_POST['mouth_other']));
$no=addslashes(trim($_POST['no']));
$other_diet=addslashes(trim($_POST['other_diet']));
$other_disease=addslashes(trim($_POST['other_disease']));
$other_sports=addslashes(trim($_POST['other_sports']));
$real_name=addslashes(trim($_POST['real_name']));
$skin_other=addslashes(trim($_POST['skin_other']));
$tel=addslashes(trim($_POST['tel']));
$tumour=addslashes(trim($_POST['tumour']));
$tumour_family=addslashes(trim($_POST['tumour_family']));
$tumour_status=addslashes(trim($_POST['tumour_status']));
$visioin_right_detail=addslashes(trim($_POST['visioin_right_detail']));
$vision_left_detail=addslashes(trim($_POST['vision_left_detail']));
$luoyin_detail=addslashes(trim($_POST['luoyin_detail']));
$add_user=addslashes(trim($_POST['add_user']));
$report_user=addslashes(trim($_POST['report_user']));



$insert = "INSERT INTO `report` (`no`, `real_name`, `tel`, `id_card`, `village`, `card_num`, `occu`, `marriage`, `degree`, `hypertension`, `hypertension_family`, `hypertension_medicine`, `diabetes`, `diabetes_family`, `diabetes_medicine`, `cerebral_infarction`, `cerebral_infarction_family`, `cerebral_infarction_medicine`, `heart_disease`, `heart_disease_family`, `heart_disease_medicine`, `lung`, `lung_family`, `lung_medicine`, `tumour`, `tumour_year`, `tumour_family`, `tumour_status`, `cataract`, `operation`, `glaucoma`, `osteoporosis`, `hyperlipemia`, `other_disease`, `sporttimes`, `sport_time`, `sportways`, `other_sports`, `diet`, `other_diet`, `smoke`, `smoke_year`, `smoke_no`, `nosmoke_year`, `drink`, `drink_type`, `drink_frequent`, `health`, `weight`, `height`, `waist`, `hipline`, `blood`, `vision_left`, `vision_left_detail`, `visioin_right`, `visioin_right_detail`, `skin`, `skin_other`, `lymph`, `lung_voice`, `lung_shape`, `heart`, `rhythm`, `heart_voice`, `heart_voice_other`, `abdomen_pain`, `abdomen_baokuai`, `abdomen_liver`, `abdomen_spleen`, `abdomen_spleen_other`, `mouth`, `mouth_other`, `hearing`, `health_education`, `health_education_other`, `health_advice`, `health_advice_other`, `additional_check1`, `additional_check2`, `check_result`,`addr`,`vision_left_x`,`visioin_right_x`,`blood_x`,`luoyin`,`luoyin_detail`,`add_user`,`report_user`)
					VALUES 
					(
						'$no', '$real_name', '$tel', '$id_card', '$village', '$card_num', '$occu', '$marriage', '$degree', '$hypertension', '$hypertension_family', '$hypertension_medicine', '$diabetes', '$diabetes_family', '$diabetes_medicine', '$cerebral_infarction', '$cerebral_infarction_family', '$cerebral_infarction_medicine', '$heart_disease', '$heart_disease_family', '$heart_disease_medicine', '$lung', '$lung_family', '$lung_medicine', '$tumour', '$tumour_year', '$tumour_family', '$tumour_status', '$cataract', '$operation', '$glaucoma', '$osteoporosis', '$hyperlipemia', '$other_disease', '$sporttimes', '$sport_time', '$sportways', '$other_sports', '$diet', '$other_diet', '$smoke', '$smoke_year', '$smoke_no', '$nosmoke_year', '$drink', '$drink_type', '$drink_frequent', '$health', '$weight', '$height', '$waist', '$hipline', '$blood', '$vision_left', '$vision_left_detail', '$visioin_right', '$visioin_right_detail', '$skin', '$skin_other', '$lymph', '$lung_voice', '$lung_shape', '$heart', '$rhythm', '$heart_voice', '$heart_voice_other', '$abdomen_pain', '$abdomen_baokuai', '$abdomen_liver', '$abdomen_spleen', '$abdomen_spleen_other', '$mouth', '$mouth_other', '$hearing', '$health_education', '$health_education_other', '$health_advice', '$health_advice_other', '$additional_check1', '$additional_check2', '$check_result','$addr','$vision_left_x','$visioin_right_x','$blood_x','$luoyin','$luoyin_detail','$add_user','$report_user'
					)


	" ;

$update = "update `report` set `no`= '$no',
 `real_name`= '$real_name',
 `tel`= '$tel',
 `id_card`= '$id_card',
 `village`= '$village',
 `card_num`= '$card_num',
 `occu`= '$occu',
 `marriage`= '$marriage',
 `degree`= '$degree',
 `hypertension`= '$hypertension',
 `hypertension_family`= '$hypertension_family',
 `hypertension_medicine`= '$hypertension_medicine',
 `diabetes`= '$diabetes',
 `diabetes_family`= '$diabetes_family',
 `diabetes_medicine`= '$diabetes_medicine',
 `cerebral_infarction`= '$cerebral_infarction',
 `cerebral_infarction_family`= '$cerebral_infarction_family',
 `cerebral_infarction_medicine`= '$cerebral_infarction_medicine',
 `heart_disease`= '$heart_disease',
 `heart_disease_family`= '$heart_disease_family',
 `heart_disease_medicine`= '$heart_disease_medicine',
 `lung`= '$lung',
 `lung_family`= '$lung_family',
 `lung_medicine`= '$lung_medicine',
 `tumour`= '$tumour',
 `tumour_year`= '$tumour_year',
 `tumour_family`= '$tumour_family',
 `tumour_status`= '$tumour_status',
 `cataract`= '$cataract',
 `operation`= '$operation',
 `glaucoma`= '$glaucoma',
 `osteoporosis`= '$osteoporosis',
 `hyperlipemia`= '$hyperlipemia',
 `other_disease`= '$other_disease',
 `sporttimes`= '$sporttimes',
 `sport_time`= '$sport_time',
 `sportways`= '$sportways',
 `other_sports`= '$other_sports',
 `diet`= '$diet',
 `other_diet`= '$other_diet',
 `smoke`= '$smoke',
 `smoke_year`= '$smoke_year',
 `smoke_no`= '$smoke_no',
 `nosmoke_year`= '$nosmoke_year',
 `drink`= '$drink',
 `drink_type`= '$drink_type',
 `drink_frequent`= '$drink_frequent',
 `health`= '$health',
 `weight`= '$weight',
 `height`= '$height',
 `waist`= '$waist',
 `hipline`= '$hipline',
 `blood`= '$blood',
 `blood_x`= '$blood_x',
 `vision_left`= '$vision_left',
 `vision_left_detail`= '$vision_left_detail',
 `visioin_right`= '$visioin_right',
 `visioin_right_detail`= '$visioin_right_detail',
 `skin`= '$skin',
 `skin_other`= '$skin_other',
 `lymph`= '$lymph',
 `lung_voice`= '$lung_voice',
 `lung_shape`= '$lung_shape',
 `heart`= '$heart',
 `rhythm`= '$rhythm',
 `heart_voice`= '$heart_voice',
 `heart_voice_other`= '$heart_voice_other',
 `abdomen_pain`= '$abdomen_pain',
 `abdomen_baokuai`= '$abdomen_baokuai',
 `abdomen_liver`= '$abdomen_liver',
 `abdomen_spleen`= '$abdomen_spleen',
 `abdomen_spleen_other`= '$abdomen_spleen_other',
 `mouth`= '$mouth',
 `mouth_other`= '$mouth_other',
 `hearing`= '$hearing',
 `health_education`= '$health_education',
 `health_education_other`= '$health_education_other',
 `health_advice`= '$health_advice',
 `health_advice_other`= '$health_advice_other',
 `additional_check1`= '$additional_check1',
 `additional_check2`= '$additional_check2',
 `check_result`= '$check_result',
`addr`='$addr',
`vision_left_x`='$vision_left_x',
`visioin_right_x`='$visioin_right_x',
`luoyin`='$luoyin',
`luoyin_detail`='$luoyin_detail',
`add_user`='$add_user',
`report_user`='$report_user'
 where `id` = ".$_POST['id'];

if ($_POST['mod_id']=='update'){
	 mysql_query($update) or die(mysql_error());
	echo 1;
}
else{
	 mysql_query($insert) or die(mysql_error());
	echo 2;
}
?>