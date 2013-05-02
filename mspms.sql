/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : mspms

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2013-05-02 10:55:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cj_article`
-- ----------------------------
DROP TABLE IF EXISTS `cj_article`;
CREATE TABLE `cj_article` (
  `a_id` int(10) NOT NULL AUTO_INCREMENT,
  `a_title` varchar(200) NOT NULL,
  `a_author` int(5) NOT NULL,
  `a_source` varchar(50) DEFAULT NULL,
  `a_content` text NOT NULL,
  `a_date` date NOT NULL,
  `a_status` enum('locked','published','trash','draft') DEFAULT 'draft',
  `a_category` int(5) NOT NULL,
  `a_updateTime` datetime DEFAULT NULL,
  `a_creatTime` datetime DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_article
-- ----------------------------
INSERT INTO `cj_article` VALUES ('1', '这是第一篇测试的文章', '1', '这是文章来源', '这里是文章的正文', '2013-05-02', 'published', '1', null, '2013-05-02 00:32:51');

-- ----------------------------
-- Table structure for `cj_category`
-- ----------------------------
DROP TABLE IF EXISTS `cj_category`;
CREATE TABLE `cj_category` (
  `cg_id` int(5) NOT NULL AUTO_INCREMENT,
  `cg_name` varchar(20) NOT NULL,
  `cg_type` varchar(10) NOT NULL,
  `cg_parent` int(5) NOT NULL DEFAULT '0',
  `cg_public` tinyint(1) NOT NULL DEFAULT '1',
  `cg_order` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_category
-- ----------------------------
INSERT INTO `cj_category` VALUES ('1', '专业介绍', 'page', '0', '1', '1');
INSERT INTO `cj_category` VALUES ('2', '专业简介', 'page', '1', '1', '1');
INSERT INTO `cj_category` VALUES ('4', '组织架构', 'page', '1', '1', '2');
INSERT INTO `cj_category` VALUES ('6', '什么什么实验室', 'article', '4', '1', '0');

-- ----------------------------
-- Table structure for `cj_module`
-- ----------------------------
DROP TABLE IF EXISTS `cj_module`;
CREATE TABLE `cj_module` (
  `md_id` int(5) NOT NULL AUTO_INCREMENT,
  `md_key` varchar(30) NOT NULL,
  `md_name` varchar(30) NOT NULL,
  `md_order` int(3) NOT NULL DEFAULT '0',
  `md_parent` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`md_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_module
-- ----------------------------
INSERT INTO `cj_module` VALUES ('1', 'userMag', '用户管理', '0', '0');
INSERT INTO `cj_module` VALUES ('2', 'articleMag', '内容管理', '0', '0');
INSERT INTO `cj_module` VALUES ('3', 'user', '添加用户', '0', '1');
INSERT INTO `cj_module` VALUES ('4', 'userList', '用户列表', '0', '1');
INSERT INTO `cj_module` VALUES ('5', 'article', '添加文章', '0', '2');
INSERT INTO `cj_module` VALUES ('6', 'contentList', '内容列表', '0', '2');
INSERT INTO `cj_module` VALUES ('7', 'categoryMag', '类别管理', '0', '0');
INSERT INTO `cj_module` VALUES ('8', 'category', '添加类别', '0', '7');
INSERT INTO `cj_module` VALUES ('9', 'categoryList', '类别列表', '0', '7');
INSERT INTO `cj_module` VALUES ('10', 'moduleMag', '模块管理', '8', '0');
INSERT INTO `cj_module` VALUES ('11', 'serverInfo', '服务信息', '9', '0');

-- ----------------------------
-- Table structure for `cj_module_user`
-- ----------------------------
DROP TABLE IF EXISTS `cj_module_user`;
CREATE TABLE `cj_module_user` (
  `mu_id` int(10) NOT NULL AUTO_INCREMENT,
  `mu_module` int(10) NOT NULL,
  `mu_user` int(10) NOT NULL,
  PRIMARY KEY (`mu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_module_user
-- ----------------------------
INSERT INTO `cj_module_user` VALUES ('1', '1', '2');
INSERT INTO `cj_module_user` VALUES ('2', '4', '2');
INSERT INTO `cj_module_user` VALUES ('3', '5', '2');
INSERT INTO `cj_module_user` VALUES ('4', '2', '2');
INSERT INTO `cj_module_user` VALUES ('5', '6', '2');
INSERT INTO `cj_module_user` VALUES ('6', '7', '2');
INSERT INTO `cj_module_user` VALUES ('7', '3', '2');
INSERT INTO `cj_module_user` VALUES ('8', '2', '3');
INSERT INTO `cj_module_user` VALUES ('9', '6', '3');
INSERT INTO `cj_module_user` VALUES ('10', '7', '3');

-- ----------------------------
-- Table structure for `cj_user`
-- ----------------------------
DROP TABLE IF EXISTS `cj_user`;
CREATE TABLE `cj_user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_pwd` varchar(50) NOT NULL,
  `user_group` int(1) NOT NULL,
  `user_reg_ip` varchar(16) NOT NULL,
  `user_reg_time` datetime NOT NULL,
  `user_last_login_ip` varchar(16) NOT NULL,
  `user_last_login_time` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_user
-- ----------------------------
INSERT INTO `cj_user` VALUES ('1', 'admin', '41d8b5fd1f06d2d430a4162d4dcc2a16', '0', '127.0.0.1', '2013-03-26 16:26:30', '127.0.0.1', '2013-05-02 00:31:03');
INSERT INTO `cj_user` VALUES ('2', 'CoderJ', '41d8b5fd1f06d2d430a4162d4dcc2a16', '1', '127.0.0.1', '2013-03-26 16:27:35', '127.0.0.1', '2013-03-26 17:06:23');
INSERT INTO `cj_user` VALUES ('3', 'editor', 'ec8df435cdb7a503bb2e8865fccfdd6f', '3', '127.0.0.1', '2013-03-26 16:58:06', '127.0.0.1', '2013-04-11 13:16:12');
INSERT INTO `cj_user` VALUES ('4', 'contentManage', 'f19f34413723d56c7e3467e3843046a0', '2', '127.0.0.1', '2013-03-26 17:03:50', '127.0.0.1', '2013-03-26 17:04:08');
