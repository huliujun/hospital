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
        .box4				{width:16%;float:left;}
        .box5				{width:16%;float:left;}
        body				{margin:auto}
        .main_body			{width:900px;;margin:auto;height:auto;}
        .title				{width:100px;float:left;}
        .tr					{width:100%;float:left;margin-top:5px;}
        .radio			{width:130px;}
        .table             {border:solid 2px #ADADAD;}
        td                 {text-align:left; border:solid 1px #ddd}
        pre                 {width: 1000px;}
    </style>

    <style type="text/css" media=print>
        .noprint{display : none }
    </style>
</head>
<body style='padding-left:10px'>
<?php
include(dirname(__FILE__).'/config.php') ;

$search = isset($_POST['search'])?$_POST['search']:'';
?>
<div class="main_body">

    <p style="font-size: 48px;text-align: center">高桥镇凌桥社区60岁以上老年人</p>
    <p style="font-size: 36px;text-align: center">健康体检报告</p>
    <p style="font-size: 36px;text-align: center"></p>




    <form class="form-inline " role="form" action="./search.php" method=POST>
        <div class="noprint" style="height: 10px;width: auto;margin-top: 10px;float: left">
            <a class="btn btn-default" style="height:31px;background-color: #eee;border-color: #9D9D9D;border-radius: 0" type="button" id="back">返回</a>
        </div>
        <div id="abcc" style="float: right;margin-right: 280px ;width:  330px"></div>
        <div class="noprint" style="height: 100px;width: auto;text-align: center;margin-top: 10px;margin-left:100px;float: left">
        请输入体检编号或身份证号：
        <input type="text" class="form-control " placeholder="请输入姓名" value='<?php echo $search?>' name="search" id="search" size=40>
<!--        <input style="font-size: 18px" type='submit' name='submit' value='提交'>-->
            <a class="btn btn-default" style="height:31px;background-color: #eee;border-color: #9D9D9D;border-radius: 0" type="button" id="tijiao1">提交</a>
         </div>
        <div class="noprint" style="height: 100px;width: auto;text-align: center;margin-top: 10px;float: right;margin-left: 10px;">
            <input style="font-size: 18px" id="btnPrint" type="button" value="打印" onclick="javascript:window.print();" />
        </div>
        <div class="noprint" style="height: 10px;width: auto;margin-top: 10px;float: right">
            <a class="btn btn-default" style="height:31px;background-color: #eee;border-color: #9D9D9D;border-radius: 0" type="button" id="xiugai">修改</a>
        </div>
<?php
if (strlen($search)>=15){
    $sql = "select * from hospital.report where `id_card`='".$search."'";
}elseif (strlen($search)<=10){
    $sql = "select * from hospital.report where `no`='".$search."'";
}

$data = query($sql)[0];


$id = !empty($data)?(int)$data['id']:0;
$abdomen_baokuai=!empty($data)?(int)$data['abdomen_baokuai']:0;
$abdomen_liver=!empty($data)?(int)$data['abdomen_liver']:0;
$abdomen_pain=!empty($data)?(int)$data['abdomen_pain']:0;
$abdomen_spleen=!empty($data)?(int)$data['abdomen_spleen']:0;
$blood=!empty($data)?(double)$data['blood']:0;
$card_num=!empty($data)?(int)$data['card_num']:0;
$cataract=!empty($data)?(int)$data['cataract']:0;
$cerebral_infarction=!empty($data)?(int)$data['cerebral_infarction']:0;
$degree=!empty($data)?(int)$data['degree']:0;
$diabetes=!empty($data)?(int)$data['diabetes']:0;
$drink=!empty($data)?(int)$data['drink']:0;
$drink_frequent=!empty($data)?(int)$data['drink_frequent']:0;
$drink_type=!empty($data)?(int)$data['drink_type']:0;
$glaucoma=!empty($data)?(int)$data['glaucoma']:0;
$health=!empty($data)?(int)$data['health']:0;
$hearing=!empty($data)?(int)$data['hearing']:0;
$heart=!empty($data)?(double)$data['heart']:0;
$heart_disease=!empty($data)?(int)$data['heart_disease']:0;
$heart_voice=!empty($data)?(int)$data['heart_voice']:0;
$heart_voice_other=!empty($data)?(int)$data['heart_voice_other']:0;
$height=!empty($data)?(double)$data['height']:0;
$hipline=!empty($data)?(double)$data['hipline']:0;
$hyperlipemia=!empty($data)?(int)$data['hyperlipemia']:0;
$hypertension=!empty($data)?(int)$data['hypertension']:0;
$lung=!empty($data)?(int)$data['lung']:0;
$lung_shape=!empty($data)?(int)$data['lung_shape']:0;
$lung_voice=!empty($data)?(int)$data['lung_voice']:0;
$lymph=!empty($data)?(int)$data['lymph']:0;
$marriage=!empty($data)?(int)$data['marriage']:0;
$mouth=!empty($data)?(int)$data['mouth']:0;
$nosmoke_year=!empty($data)?(int)$data['nosmoke_year']:0;
$occu=!empty($data)?(int)$data['occu']:0;
$operation=!empty($data)?(int)$data['operation']:0;
$osteoporosis=!empty($data)?(int)$data['osteoporosis']:0;
$rhythm=!empty($data)?(int)$data['rhythm']:0;
$skin=!empty($data)?(int)$data['skin']:0;
$smoke=!empty($data)?(int)$data['smoke']:0;
$smoke_no=!empty($data)?(int)$data['smoke_no']:0;
$smoke_year=!empty($data)?(int)$data['smoke_year']:0;
$sport_time=!empty($data)?(int)$data['sport_time']:0;
$sporttimes=!empty($data)?(int)$data['sporttimes']:0;
$sportways=!empty($data)?(int)$data['sportways']:0;
$tumour_year=!empty($data)?(int)$data['tumour_year']:0;
$village=!empty($data)?(int)$data['village']:0;
$visioin_right=!empty($data)?(double)$data['visioin_right']:0;
$vision_left=!empty($data)?(double)$data['vision_left']:0;
$visioin_right_x=!empty($data)?(double)$data['visioin_right_x']:0;
$vision_left_x=!empty($data)?(double)$data['vision_left_x']:0;
$waist=!empty($data)?(double)$data['waist']:0;
$weight=!empty($data)?(double)$data['weight']:0;


$addr=!empty($data)?$data['addr']:'';
$abdomen_spleen_other=!empty($data)?$data['abdomen_spleen_other']:'';
$additional_check1=!empty($data)?$data['additional_check1']:'';
$additional_check2=!empty($data)?$data['additional_check2']:'';
$cerebral_infarction_family=!empty($data)?$data['cerebral_infarction_family']:'';
$cerebral_infarction_medicine=!empty($data)?$data['cerebral_infarction_medicine']:'';
$check_result=!empty($data)?$data['check_result']:'';
$diabetes_family=!empty($data)?$data['diabetes_family']:'';
$diabetes_medicine=!empty($data)?$data['diabetes_medicine']:'';
$diet=!empty($data)?$data['diet']:'';
$health_advice=!empty($data)?$data['health_advice']:'';
$health_advice_other=!empty($data)?$data['health_advice_other']:'';
$health_education=!empty($data)?$data['health_education']:'';
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


$exam = query("select * from sheet_report where `dian_no` = '$no'");

if ($exam){
    foreach ($exam as $item) {
        $project_arr[$item['project_no']]=$item;
    }
}else{
    $project_arr=[];
}
//var_dump($project_arr);



function get_checkbox_str($json_str,$arr){
    $d_arr = json_decode($json_str);
    $str = '';
    if (!empty($d_arr)){
        foreach ($d_arr as $item) {
            $str = $str.$arr[$item].'、';
        }
        $str = substr($str, 0, -3);
    }
    return $str;
}




?>　　　　
        <table class="table"  >
            <tbody >
            <tr>
                <td style="width: 12%;">姓名： </td>
                <td style=""><?php echo $real_name?> </td>
                <td style="width: 12%;">联系电话： </td>
                <td style="width: 40%;"><?php echo $tel?> </td>
            </tr>
            <tr>
                <td style="width: 12%;" >身份证： </td>
                <td style="" colspan="3"><?php echo $id_card?> </td>
            </tr>
            <tr>
                <td style="width: 12%;">居住地址： </td>
                <td style="" colspan="3"><?php echo $addr?> </td>
            </tr>
            <tr>
                <td style="width: 12%;">村委会： </td>
                <td style=""><?php echo $village_arr[$village]?> </td>
                <td style="width: 12%;">体检编号： </td>
                <td style=""><?php echo $no?> </td>
            </tr>

            </tbody>
        </table>
<div >
        <div class="tr">　</div>
        <h4>一、基本信息：</h4>

        <table class="table "  >
            <tbody >
            <tr>
                <td style="width: 12%;">社保卡号： </td>
                <td style=""><?php echo $card_num?> </td>
                <td style="width: 12%;">退休前职业： </td>
                <td style=""><?php echo $occu?> </td>
            </tr>

            <tr>
                <td style="width: 12%;">婚姻状况： </td>
                <td style=""><?php echo $marriage_arr[$marriage]?> </td>
                <td style="width: 12%;">文化程度： </td>
                <td style=""><?php echo $degree_arr[$degree]?> </td>
            </tr>

            </tbody>
        </table>

        <h4>二、既往病史（填写发病时间、家族史：父母、兄弟姐妹、子女）：</h4>
        <table class="table "  >
            <tbody >
            <tr>
                <td style="width: 15%;">1、高血压：</td>
                <td style=""><?php echo $hypertension.'年'?> </td>
                <td style="width: 12%;">家族史： </td>
                <td style=""><?php echo $hypertension_family?> </td>
                <td style="width: 12%;">服药名称： </td>
                <td style=""><?php echo $hypertension_medicine?> </td>
            </tr>
            <tr>
                <td style="width: 15%;">2、糖尿病：</td>
                <td style=""><?php echo $diabetes.'年'?> </td>
                <td style="width: 12%;">家族史： </td>
                <td style=""><?php echo $diabetes_family?> </td>
                <td style="width: 12%;">服药名称： </td>
                <td style=""><?php echo $diabetes_medicine?> </td>
            </tr>
            <tr>
                <td style="width: 15%;">3、脑梗： </td>
                <td style=""><?php echo $cerebral_infarction.'年'?> </td>
                <td style="width: 12%;">家族史： </td>
                <td style=""><?php echo $cerebral_infarction_family?> </td>
                <td style="width: 12%;">服药名称： </td>
                <td style=""><?php echo $cerebral_infarction_medicine?> </td>
            </tr>
            <tr>
                <td style="width: 15%;">4、心脏病： </td>
                <td style=""><?php echo $heart_disease.'年'?> </td>
                <td style="width: 12%;">家族史： </td>
                <td style=""><?php echo $heart_disease_family?> </td>
                <td style="width: 12%;">服药名称： </td>
                <td style=""><?php echo $heart_disease_medicine?> </td>
            </tr>
            <tr>
                <td style="width: 15%;">5、慢阻肺： </td>
                <td style=""><?php echo $lung.'年'?> </td>
                <td style="width: 12%;">家族史： </td>
                <td style=""><?php echo $lung_family?> </td>
                <td style="width: 12%;">服药名称： </td>
                <td style=""><?php echo $lung_medicine?> </td>
            </tr>
            <tr>
                <td style="width: 15%;">6、肿瘤名称： </td>
                <td style=""><?php echo $tumour.'  　患病'.$tumour_year.'年'?> </td>
                <td style="width: 12%;">家族史： </td>
                <td style=""><?php echo $tumour_family?> </td>
                <td style="width: 12%;">服药名称： </td>
                <td style=""><?php echo $tumour_status?> </td>
            </tr>
            <tr>
                <td style="width: 15%;">7、白内障： </td>
                <td style="" colspan="3"><?php echo $cataract.'年  '; if ($operation==1)echo'（已手术）';else echo '（未手术）'?> </td>
                <td style="width: 12%;">8、青光眼： </td>
                <td style=""><?php echo $glaucoma.'年'?> </td>
            </tr>
            <tr>
                <td style="width: 15%;">9、骨质疏松： </td>
                <td style=""><?php echo $osteoporosis.'年'?> </td>
                <td style="width: 12%;">10、高血脂： </td>
                <td style=""><?php echo $hyperlipemia.'年'?> </td>
                <td style="width: 12%;">11、其他： </td>
                <td style=""><?php echo $other_disease?> </td>
            </tr>
            </tbody>
        </table>


        <h4>三、生活方式调查</h4>

        <table class="table "  >
            <tbody >
            <tr>
                <td style="width: 15%;">1、体育锻炼： </td>
                <td style="width: 12%;">锻炼频率： </td>
                <td style=""><?php echo $sporttimes_arr[$sporttimes]?> </td>
                <td style="width: 15%;">每次持续时间： </td>
                <td style=""><?php echo $sport_time.'分钟'?> </td>
            </tr>

            <tr>
                <td style="width: 15%;"> </td>
                <td style="width: 12%;">锻炼方式： </td>
                <td style="" ><?php echo $sportways_arr[$sportways]?> </td>
                <td style="width: 15%;">其他： </td>
                <td style=""><?php echo $other_sports?> </td>
            </tr>
            <tr>
                <td style="width: 15%;">2、饮食习惯： </td>
                <td style="" colspan="2"><?php echo get_checkbox_str($diet,$diet_arr)?> </td>
                <td style="width: 15%;">其他： </td>
                <td style=""><?php echo $other_diet?> </td>
            </tr>

            <tr>
                <td style="width: 15%;">3、吸烟情况： </td>
                <td style="" colspan="4"><?php echo $smoke_arr[$smoke];
                    if ($smoke==2){
                        echo ' （烟龄：'.$smoke_year.'年，每天：吸'.$smoke_no.'支）';
                    }elseif($smoke==3){
                        echo ' （戒烟：'.$nosmoke_year.'年）';
                    }
                    ?> </td>
            </tr>
            <tr>
                <td style="width: 15%;">4、饮酒情况： </td>
                <td style="" colspan="4"><?php echo $drink_arr[$drink];
                    if ($drink==2){
                        echo ' （饮酒种类：'.$drink_type_arr[$drink_type].'） （饮酒频率：每'.$drink_frequent_arr[$drink_frequent].'一次）';
                    }
                    ?> </td>
            </tr>
            <tr>
                <td style="width: 15%;">5、自觉健康状况： </td>
                <td style="" colspan="4"><?php echo $health_arr[$health]?> </td>
            </tr>

            </tbody>
        </table>

        <h4>四、一般情况：</h4>
        <table class="table "  >
            <tbody >
            <tr>
                <td style="width: 12%;">体重： </td>
                <td style=""><?php echo $weight.'kg'?> </td>
                <td style="width: 12%;">身高： </td>
                <td style=""><?php echo $height.'kg'?> </td>
                <td style="width: 12%;">腰围： </td>
                <td style=""><?php echo $waist.'kg'?> </td>
            </tr>

            <tr>
                <td style="width: 12%;">臀围： </td>
                <td style=""><?php echo $hipline.'kg'?> </td>
                <td style="width: 12%;">血压： </td>
                <td style="" colspan="3"><?php echo $blood.'kg'?> </td>
            </tr>

            <tr>
                <td style="width: 12%;">视力： </td>
                <td style="width: 12%;">左眼： </td>
                <td style="" colspan="2"><?php echo $vision_left.'/'.$vision_left_x.'（裸眼/矫正）'?> </td>
                <td style="width: 12%;">眼病诊断： </td>
                <td style="width: 35%;" ><?php echo $vision_left_detail?> </td>
            </tr>
            <tr>
                <td style="width: 12%;"> </td>
                <td style="width: 12%;">右眼： </td>
                <td style="" colspan="2"><?php echo $visioin_right.'/'.$visioin_right_x.'（裸眼/矫正）'?> </td>
                <td style="width: 12%;">眼病诊断： </td>
                <td style="width: 35%;" ><?php echo $visioin_right_detail?> </td>
            </tr>

            </tbody>
        </table>
        <?php

        ?>
        <div class="tr">　</div>
        <h4>五、医生查体：</h4>
        <table class="table "  >
            <tbody >
            <tr>
                <td style="width: 12%;">1、皮肤： </td>
                <td style=""><?php echo $skin_arr[$skin]?> </td>
                <td style="width: 12%;">其他： </td>
                <td style="" colspan="2"><?php echo $skin_other?> </td>
            </tr>

            <tr>
                <td style="width: 12%;">2、淋巴结： </td>
                <td style="" colspan="4"><?php echo $lymph_arr[$lymph]?> </td>
            </tr>

            <tr>
                <td style="width: 12%;">3、肺部： </td>
                <td style="width: 12%;">呼吸音： </td>
                <td style=""><?php echo $lung_voice_arr[$lung_voice]?> </td>
                <td style="width: 12%;">桶状胸： </td>
                <td style=""><?php echo $_arr[$lung_shape]?> </td>
            </tr>
            <tr>
                <td style="width: 12%;">4、心脏： </td>
                <td style="width: 12%;">心率： </td>
                <td style=""><?php echo $heart.' 次/分'?> </td>
                <td style="width: 12%;">心律： </td>
                <td style=""><?php echo $rhythm_arr[$rhythm]?> </td>
            </tr>
            <tr>
                <td style="width: 12%;"> </td>
                <td style="width: 12%;">杂音： </td>
                <td style=""><?php echo $_arr[$heart_voice]?> </td>
                <td style="width: 12%;">其他： </td>
                <td style=""><?php echo $heart_voice_other?> </td>
            </tr>
            
            <tr>
                <td style="width: 12%;">5、腹部： </td>
                <td style="width: 12%;">压痛： </td>
                <td style=""><?php echo $_arr[$abdomen_pain]?> </td>
                <td style="width: 12%;">包块： </td>
                <td style=""><?php echo $_arr[$abdomen_baokuai]?> </td>
            </tr>
            <tr>
                <td style="width: 12%;"> </td>
                <td style="width: 12%;">肝大： </td>
                <td style=""><?php echo $_arr[$abdomen_liver]?> </td>
                <td style="width: 12%;">脾大： </td>
                <td style=""><?php echo $_arr[$abdomen_spleen]?> </td>
            </tr>
            <tr>
                <td style="width: 12%;"> </td>
                <td style="width: 12%;">其他： </td>
                <td style="" colspan="3"><?php echo $abdomen_spleen_other?> </td>
            </tr>

            <tr>
                <td style="width: 12%;">6、口腔： </td>
                <td style=""><?php echo $mouth_arr[$mouth]?> </td>
                <td style="width: 12%;">其他： </td>
                <td style="" colspan="2"><?php echo $mouth_other?> </td>
            </tr>

            <tr>
                <td style="width: 12%;">7、听力： </td>
                <td style="" colspan="4"><?php echo $hearing_arr[$hearing]?> </td>

            </tr>

            </tbody>
        </table>


        <h4>六、健康教育：</h4>
        <table class="table "  >
            <tbody >
            <tr>
                <td style="width: 12%;">健康教育： </td>
                <td style=""><?php echo get_checkbox_str($health_education,$health_education_arr)?> </td>
            </tr>
            <tr>
                <td style="width: 12%;">其他： </td>
                <td style=""><?php echo $health_education_other?> </td>
            </tr>
            </tbody>
        </table>



        <h4>七、健康干预：</h4>

        <table class="table "  >
            <tbody >
            <tr>
                <td style="width: 12%;">健康干预： </td>
                <td style=""><?php echo get_checkbox_str($health_advice,$health_advice_arr)?> </td>
            </tr>
            <tr>
                <td style="width: 12%;">其他： </td>
                <td style=""><?php echo $health_advice_other?> </td>
            </tr>
            </tbody>
        </table>

        <h4>八、辅助检查（1）：</h4>
        <table class="table "  >
            <tbody >
            <tr>
                <td style="height: 100px;"><?php echo $additional_check1?>　</td>
            </tr>
            </tbody>
        </table>

        <h4>九、辅助检查（2）：</h4>
        <table class="table "  >
            <tbody >
            <tr>
                <td style="height: 100px;"><?php echo $additional_check2?>　</td>
            </tr>
            </tbody>
        </table>

        <h4>十、体检结果健康评估：</h4>
        <table class="table "  >
            <tbody >
            <tr>
                <td style="height: 230px;" rowspan="5 "><?php echo $check_result?>　</td>
            </tr>
            </tbody>
        </table>
        <p style="text-align: right;margin-right: 150px">医师签名：</p>

</div>
        <h4>附：体检报告</h4>



        <table class="table "  >
            <tbody >
            <tr >
                <td style="border: 0px">● 血常规 </td>
                <td style="border: 0px;text-align: right" colspan="4">检验人：<?php echo $project_arr['1085-14431']['examiner']?> </td>
            </tr>

            <tr style="background-color: #def4c4;font-weight:bold">
                <td style="">代码 </td>
                <td style="">项目 </td>
                <td style="">结果 </td>
                <td style="">参考值 </td>
                <td style="">单位 </td>
            </tr>

            <?php foreach ($xcg as $key=>$val) {?>
                <tr>
                    <td style=""><?php echo $pri_arr[$key]?> </td>
                    <td style=""><?php echo $val?> </td>
                    <td style=""><?php echo $project_arr[$key]['result']?> </td>
                    <td style=""><?php echo $project_arr[$key]['reference_value']?> </td>
                    <td style=""><?php echo $project_arr[$key]['project_unit']?> </td>
                </tr>
            <?php }?>


            </tbody>
        </table>

        <table class="table "  >
            <tbody >
            <tr >
                <td style="border: 0px">● 大便 </td>
                <td style="border: 0px;text-align: right" colspan="4">检验人：<?php echo $project_arr['768-9475']['examiner']?> </td>
            </tr>

            <tr style="background-color: #def4c4;font-weight:bold">
                <td style="">代码 </td>
                <td style="">项目 </td>
                <td style="">结果 </td>
                <td style="">参考值 </td>
                <td style="">单位 </td>

            </tr>

            <?php foreach ($db as $key=>$val) {?>
                <tr>
                    <td style=""><?php echo $pri_arr[$key]?> </td>
                    <td style=""><?php echo $val?> </td>
                    <td style=""><?php echo $project_arr[$key]['result']?> </td>
                    <td style=""><?php echo $project_arr[$key]['reference_value']?> </td>
                    <td style=""><?php echo $project_arr[$key]['project_unit']?> </td>
                </tr>
            <?php }?>


            </tbody>
        </table>


        <table class="table "  >
            <tbody >
            <tr >
                <td style="border: 0px">● 尿常规 </td>
                <td style="border: 0px;text-align: right" colspan="4">检验人：<?php echo $project_arr['928-10481']['examiner']?> </td>
            </tr>

            <tr style="background-color: #def4c4;font-weight:bold">
                <td style="">代码 </td>
                <td style="">项目 </td>
                <td style="">结果 </td>
                <td style="">参考值 </td>
                <td style="">单位 </td>

            </tr>

            <?php foreach ($ncg as $key=>$val) {?>
                <tr>
                    <td style=""><?php echo $pri_arr[$key]?> </td>
                    <td style=""><?php echo $val?> </td>
                    <td style=""><?php echo $project_arr[$key]['result']?> </td>
                    <td style=""><?php echo $project_arr[$key]['reference_value']?> </td>
                    <td style=""><?php echo $project_arr[$key]['project_unit']?> </td>
                </tr>
            <?php }?>


            </tbody>
        </table>

        <table class="table "  >
            <tbody >
            <tr >
                <td style="border: 0px">● 生化 </td>
                <td style="border: 0px;text-align: right" colspan="4">检验人：<?php echo $project_arr['150-9446']['examiner']?> </td>
            </tr>

            <tr style="background-color: #def4c4;font-weight:bold">
                <td style="">代码 </td>
                <td style="">项目 </td>
                <td style="">结果 </td>
                <td style="">参考值 </td>
                <td style="">单位 </td>

            </tr>

            <?php foreach ($sh as $key=>$val) {?>
                <tr>
                    <td style=""><?php echo $pri_arr[$key]?> </td>
                    <td style=""><?php echo $val?> </td>
                    <td style=""><?php echo $project_arr[$key]['result']?> </td>
                    <td style=""><?php echo $project_arr[$key]['reference_value']?> </td>
                    <td style=""><?php echo $project_arr[$key]['project_unit']?> </td>
                </tr>
            <?php }?>


            </tbody>
        </table>





    </form>
    <input type ="hidden" id="hid_card" value="<?php echo $id_card?>">
    <input type ="hidden" id="id" value="<?php echo $id?>">
</div>
<script>


    $('#xiugai').click(function(){
        $.post('./mod.php',{
            //id_card:$('#hid_card').val(),
            id:$('#id').val(),
            mod_id:'update',
        },function(data){
            $('.main_body').html(data);
        });
    });
    $('#tijiao1').click(function(){
        var search = $('#search').val();
        console.info(search.length );
        if (search.length==9 ||search.length==18){

        }else{
            showmsg('请输入正确的编号或身份证号',0,'abcc');
            return;
        }


        $.post('./search.php',{
            search:search,
        },function(data){
            $('.main_body').html(data);
        });
    });
    $('#back').click(function(){
        $.post('./index.php',{
        },function(data){
            $('.main_body').html(data);
        });
    });
</script>

</body>
</html>