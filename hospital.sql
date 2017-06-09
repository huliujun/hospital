-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?06 �?09 �?16:35
-- 服务器版本: 5.6.17
-- PHP 版本: 5.5.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `hospital`
--

-- --------------------------------------------------------

--
-- 表的结构 `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `no` varchar(40) NOT NULL COMMENT '体检ID号',
  `real_name` varchar(40) NOT NULL COMMENT '真是姓名',
  `tel` varchar(20) NOT NULL COMMENT '手机',
  `id_card` varchar(20) NOT NULL COMMENT '身份证',
  `village` int(11) NOT NULL COMMENT '村子',
  `card_num` int(11) NOT NULL COMMENT '社保卡号',
  `occu` varchar(40) NOT NULL COMMENT '职业',
  `marriage` varchar(40) NOT NULL COMMENT '婚姻',
  `degree` varchar(40) NOT NULL COMMENT '学历',
  `hypertension` int(11) NOT NULL COMMENT '高血压',
  `hypertension_family` varchar(40) NOT NULL COMMENT '高血压家族',
  `hypertension_medicine` varchar(40) NOT NULL COMMENT '高血压药物',
  `diabetes` int(11) NOT NULL COMMENT '糖尿病',
  `diabetes_family` varchar(40) NOT NULL COMMENT '糖尿病家族史',
  `diabetes_medicine` varchar(40) NOT NULL COMMENT '糖尿病药物名称',
  `cerebral_infarction` int(11) NOT NULL COMMENT '脑梗塞',
  `cerebral_infarction_family` varchar(40) NOT NULL COMMENT '脑梗塞家族史',
  `cerebral_infarction_medicine` varchar(40) NOT NULL COMMENT '脑梗塞药物',
  `heart_disease` int(11) NOT NULL COMMENT '心脏病',
  `heart_disease_family` varchar(40) NOT NULL COMMENT '心脏病家族史',
  `heart_disease_medicine` varchar(40) NOT NULL COMMENT '心脏病药物名称',
  `lung` int(11) NOT NULL COMMENT '肺',
  `lung_family` varchar(40) NOT NULL COMMENT '肺部家族史',
  `lung_medicine` varchar(40) NOT NULL COMMENT '肺部用药',
  `tumour` varchar(40) NOT NULL COMMENT '肿瘤名称',
  `tumour_year` int(11) NOT NULL COMMENT '肿瘤年限',
  `tumour_family` varchar(40) NOT NULL COMMENT '肿瘤家族史',
  `tumour_status` varchar(40) NOT NULL COMMENT '肿瘤治疗情况',
  `cataract` int(11) NOT NULL COMMENT '白内障 年',
  `operation` int(11) NOT NULL COMMENT '白内障 是否手术',
  `glaucoma` int(11) NOT NULL COMMENT '青光眼 年',
  `osteoporosis` int(11) NOT NULL COMMENT '骨质酥松 年',
  `hyperlipemia` int(11) NOT NULL COMMENT '高血脂 年',
  `other_disease` varchar(40) NOT NULL COMMENT '其他疾病',
  `sporttimes` int(11) NOT NULL COMMENT '锻炼频次',
  `sport_time` int(11) NOT NULL COMMENT '锻炼持续时间',
  `sportways` int(11) NOT NULL COMMENT '锻炼方式',
  `other_sports` varchar(40) NOT NULL COMMENT '其他锻炼方式',
  `diet` varchar(60) DEFAULT '[]' COMMENT '饮食',
  `other_diet` varchar(40) NOT NULL COMMENT '其他饮食',
  `smoke` tinyint(4) NOT NULL COMMENT '是否吸烟',
  `smoke_year` int(11) NOT NULL COMMENT '吸烟年限',
  `smoke_no` int(11) NOT NULL COMMENT '每天几支烟',
  `nosmoke_year` int(11) NOT NULL COMMENT '戒烟年数',
  `drink` tinyint(4) NOT NULL COMMENT '是否饮酒',
  `drink_type` tinyint(4) NOT NULL COMMENT '饮酒类型',
  `drink_frequent` int(11) NOT NULL COMMENT '饮酒频次',
  `health` int(11) NOT NULL COMMENT '身体状况',
  `weight` decimal(6,2) NOT NULL COMMENT '体重',
  `height` decimal(6,2) NOT NULL COMMENT '身高',
  `waist` int(11) NOT NULL COMMENT '腰围',
  `hipline` int(11) NOT NULL COMMENT '臀围',
  `blood` int(11) NOT NULL COMMENT '血压',
  `vision_left` decimal(3,1) NOT NULL COMMENT '左视力',
  `vision_left_detail` varchar(40) NOT NULL COMMENT '左视力其他',
  `visioin_right` decimal(3,1) NOT NULL COMMENT '右视力',
  `visioin_right_detail` varchar(40) NOT NULL COMMENT '右视力详情',
  `skin` tinyint(4) NOT NULL COMMENT '皮肤',
  `skin_other` varchar(40) NOT NULL COMMENT '其他皮肤',
  `lymph` int(11) NOT NULL COMMENT '淋巴',
  `lung_voice` int(11) NOT NULL COMMENT '肺部呼吸',
  `lung_shape` int(11) NOT NULL COMMENT '肺部形状',
  `heart` int(11) NOT NULL COMMENT '心跳数量',
  `rhythm` int(11) NOT NULL COMMENT '心律',
  `heart_voice` int(11) NOT NULL COMMENT '是否杂音',
  `heart_voice_other` int(11) NOT NULL COMMENT '其他杂音',
  `abdomen_pain` tinyint(4) NOT NULL COMMENT '胸部是否压痛',
  `abdomen_baokuai` tinyint(4) NOT NULL COMMENT '胸部是否包块',
  `abdomen_liver` tinyint(4) NOT NULL COMMENT '胸部是否有肝大',
  `abdomen_spleen` int(11) NOT NULL COMMENT '胸部是否脾大',
  `abdomen_spleen_other` varchar(40) NOT NULL COMMENT '胸部其他脾大',
  `mouth` tinyint(4) NOT NULL COMMENT '口腔',
  `mouth_other` varchar(80) NOT NULL COMMENT '口腔其他',
  `hearing` tinyint(4) NOT NULL COMMENT '听力情况',
  `health_education` varchar(80) NOT NULL DEFAULT '[]' COMMENT '健康教育',
  `health_education_other` varchar(120) NOT NULL COMMENT '健康教育建议',
  `health_advice` varchar(80) NOT NULL DEFAULT '[]' COMMENT '健康干预',
  `health_advice_other` varchar(80) NOT NULL COMMENT '健康干预建议',
  `additional_check1` varchar(1024) NOT NULL COMMENT '辅助检查1',
  `additional_check2` varchar(1024) NOT NULL COMMENT '辅助检查付',
  `check_result` varchar(1024) NOT NULL COMMENT '检查结果',
  `addr` varchar(40) NOT NULL COMMENT '居住地址',
  `vision_left_x` decimal(3,1) NOT NULL,
  `visioin_right_x` decimal(3,1) NOT NULL,
  `blood_x` int(11) NOT NULL,
  `luoyin` tinyint(4) NOT NULL,
  `luoyin_detail` varchar(40) NOT NULL,
  `add_user` varchar(12) NOT NULL,
  `report_user` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=484 ;

-- --------------------------------------------------------

--
-- 表的结构 `sheet_report`
--

CREATE TABLE IF NOT EXISTS `sheet_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `dian_no` varchar(20) NOT NULL COMMENT '迪安条码',
  `project_no` varchar(20) NOT NULL COMMENT '项目代码',
  `result` varchar(20) NOT NULL COMMENT '检测结果',
  `project_unit` varchar(20) NOT NULL COMMENT '项目单位',
  `card_num` varchar(20) NOT NULL COMMENT '卡号',
  `reference_value` text NOT NULL COMMENT '参考值',
  `upper_limit` varchar(20) NOT NULL COMMENT '参考上限',
  `lower_limit` varchar(20) NOT NULL COMMENT '参考下限',
  `mark` varchar(20) NOT NULL COMMENT '标志',
  `real_name` varchar(20) NOT NULL COMMENT '病人姓名',
  `statdate` varchar(20) NOT NULL COMMENT '检测时间',
  `examiner` varchar(20) NOT NULL COMMENT '检验人',
  `auditor` varchar(20) NOT NULL COMMENT '审核人',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30147 ;
