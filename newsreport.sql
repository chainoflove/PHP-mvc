/*
Navicat MySQL Data Transfer

Source Server         : 123.56.162.249
Source Server Version : 50546
Source Host           : 123.56.162.249:3306
Source Database       : newsreport

Target Server Type    : MYSQL
Target Server Version : 50546
File Encoding         : 65001

Date: 2016-04-04 19:05:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'jenny', '111');
INSERT INTO `admin` VALUES ('2', 'jennie', '111');
INSERT INTO `admin` VALUES ('3', 'shen', '111');


-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `from` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `dateline` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '新闻1-title', 'lizhongyi', 'jennie', 'lorem', '123124234');
INSERT INTO `news` VALUES ('2', '新闻2-title', 'lizhongyi', 'jennie', 'lorem',  '23423432');
INSERT INTO `news` VALUES ('3', '新闻3-title', 'lizhongyi', 'jennie', 'lorem', '23423423');
