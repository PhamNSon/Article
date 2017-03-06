/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100121
Source Host           : localhost:3306
Source Database       : article

Target Server Type    : MYSQL
Target Server Version : 100121
File Encoding         : 65001

Date: 2017-03-06 10:39:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `image` text,
  `viewed` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', 'testlan1', 'Test láº§n 1', '49941-wall-(1).jpg', '1', '2017-03-06 10:35:10', '2017-03-06 10:35:10');
INSERT INTO `articles` VALUES ('2', 'testlan2', 'Test láº§n 2', '76576-wall-(1).png', '1', '2017-03-06 10:36:08', '2017-03-06 10:36:08');
INSERT INTO `articles` VALUES ('3', 'testlan3', 'Test láº§n 3', '53773-wall-(3).jpg', '1', '2017-03-06 10:36:23', '2017-03-06 10:36:23');
INSERT INTO `articles` VALUES ('4', 'testlan4', 'Test láº§n 4', '48308-wall-(5).jpg', '1', '2017-03-06 10:36:47', '2017-03-06 10:36:47');
INSERT INTO `articles` VALUES ('5', 'testlan5', 'Test láº§n 5', '14715-wall-(21).jpg', '1', '2017-03-06 10:37:00', '2017-03-06 10:37:00');
INSERT INTO `articles` VALUES ('6', 'testlan6', 'Test láº§n 5', '26682-wall-(15).png', '1', '2017-03-06 10:37:18', '2017-03-06 10:37:18');
INSERT INTO `articles` VALUES ('7', 'testlan7', 'Test láº§n 7', '30628-wall-(16).jpg', '2', '2017-03-06 10:38:40', '2017-03-06 10:38:40');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mail` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Sơn', '01689879624', 'vnzpopi@gmail.com');
