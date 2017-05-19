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

    <style>
        .box				{width:50%;float:left;}
        .box3				{width:32%;float:left;}
        .box4				{width:16%;float:left;}
        .box5				{width:16%;float:left;}
        body				{margin:auto}
        .main_body			{width:900px;;margin:auto;height:auto;}
        .title				{width:100px;float:left;}
        .tr					{width:100%;float:left;margin-top:5px;}
        .radio			   {width:130px;}
        .table             {border:solid 2px #ADADAD;}
        td                 {text-align:left; border:solid 1px #ddd}
        .loading           {  height: 100%;  left: 0;  position: absolute;  top: 0;  width: 100%;  z-index: 1;  }
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
    <form action="./export_excel.php" method="POST">
        <table>
            <tr>
<!--                <td><input id="" type="submit" value="导出Excel" /></td>-->
            </tr>
        </table>
    </form>




    <form class="form-inline noprint" role="form" action="./mod.php" method=POST>
        <div class="noprint" style="width: auto;text-align: center;margin-top: 40px">
<!--            <input type='submit' style="font-size: 36px;text-align: center;width: 400px" name='submit' value='添加'>-->
            <a class="btn btn-default" style="font-size: 36px;text-align: center;width: 400px" type="button" id="add">添加</a>
        </div>
    </form>

    <form class="form-inline " role="form" action="./search.php" method=POST>

        <div class="noprint" style="width: auto;text-align: center;margin-top: 40px">
<!--        <input type='submit' style="font-size: 36px;text-align: center ;width: 400px" name='submit' value='查询'>-->
            <a class="btn btn-default" style="font-size: 36px;text-align: center;width: 400px" type="button" id="chaxun">查询</a>
         </div>
    </form>

    <form  enctype="multipart/form-data" action="excel.php" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
        <div style="height: 40px;margin-top: 40px">
            <input style="float:left;height: 40px;margin-left: 260px" class="btn btn-default" name="myFile" type="file">

            <input style="float:left;height: 40px;margin-left: 5px" id="up" class="btn btn-default" type="submit" value="确认导入">
        </div>

    </form>
</div>

</body>
<script>
    $('#add').click(function(){
        $.post('./mod.php',{
            mod_id:'add',
        },function(data){
            $('.main_body').html(data);
        });
    });
    $('#chaxun').click(function(){
        $.post('./search.php',{
            search:'',
        },function(data){
            $('.main_body').html(data);
        });
    });
    $('#export').click(function(){
        $.post('./export_excel.php',{
        },function(data){
        });
    });
    $('#up').click(function(){
        $('.main_body').append("<div class='loading' style='width:100%;float: top;'><img style='margin-left:40%;margin-top:150px ;' src='./loading.gif'></div>");
    });

</script>

</html>