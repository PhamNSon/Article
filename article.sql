/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : article

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2017-02-13 11:43:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `tags` varchar(1000) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('19', '0', 'Abbb', 'ưewdsfsdf', null, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('20', '0', '123', 'sádsd', null, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('21', '0', 'abcd', 'jhfhweiuhiweojviwjevoiwejovihwoihvoiwheoiweoijoiwejcoijweịcweoijcoiwejcoihweichoiewhciowehciohweiochweiohcoiwjeoijweoifjiowejcoijweoivhoiwehiofoiewufoiwevoiceowijcoiưejcoiwjeoifhowehvoiwheoivwheoijcowẹowjeoicjweoijcoiwejcơieciowhevoihweiovhiowehviwehvoiwejvowekvowekvpowekpvokwepovkwepovkpowekvpoewkvopwekvopwkevopkwepvokwepovkpweokvpowkevpokwepv', null, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('22', '0', 'fhfg', 'fgjfghgfh', null, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('23', '0', '123', 'fghfghfgj', null, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('24', '0', 'sdfd', 'sdfsdsdsdfsdfsdg', null, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('25', '0', 'rtert', 'ưefwegwegwefwefwewer', null, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('26', '0', 'sdfsdf', 'sdfsdf', null, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('27', '0', 'sadasf', 'ádasd', null, '1', '2017-02-09 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('28', '0', 'sdfsdf', 'sdfsdfsdf', null, '1', '2017-02-09 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('29', '0', 'son', 'dhfgfj', null, '1', '2017-02-09 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('30', '0', 'fdsdw', 'ádasd', null, '1', '2017-02-09 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('31', '0', '087', 'kuykyk', null, '1', '2017-02-09 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('32', '0', 'hgjgj65', 'gjrtrty', null, '1', '2017-02-09 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('33', '0', 'hgjgj65fg', 'gjrtrtydfgdfg4t34gdgdfhg', null, '1', '2017-02-09 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('34', '0', 'hgjgj65fgrêtrt', 'gjrtrtydfgdfg4t34gdgdfhg45y4545g', null, '1', '2017-02-09 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('35', '0', 'sưerwe', 'sềwecưegeg', null, '1', '2017-02-09 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('36', '0', 'bbbbbbbb', 'bbbbbbbbbbbbbbbbbbbbbb', null, '1', '2017-02-09 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('37', '0', 'fgnfgn', 'fgfghfgh', null, '1', '2017-02-09 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('38', '0', 'fgnfgngdfgdfgdfgdfg', 'fgfghfghgfdgfdgfd', null, '1', '2017-02-09 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('39', '0', '32423423424', 'fgfghfghgfdgfdgfdádasdasdasdasdasd', null, '1', '2017-02-09 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('40', '0', '6jyj656', 'fgdfdfhf', null, '1', '2017-02-09 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('41', '0', 'thrthrth', 'rthtrhrtbrt', null, '1', '2017-02-09 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('42', '0', 'hgergew4f', 'gưeg3434g34', null, '1', '2017-02-09 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('43', '0', '0000000', '0utjỷth', null, '1', '2017-02-09 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('44', '0', '53443v3', 't34t34t', null, '1', '2017-02-10 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('45', '0', 'fvdfvdf', 'dfbdfbdfb', null, '1', '2017-02-10 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('46', '0', 'gftrbt', 'rtbrtrtj', null, '1', '2017-02-10 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('47', '0', 'dfdfdfh', 'dfhdfhdfhdfh', null, '1', '2017-02-10 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('48', '0', 'tỵghkghk', 'ghjghkghkghjgh', null, '1', '2017-02-10 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('49', '0', '', '', null, '1', '2017-02-10 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('50', '0', 'ưefweewc', 'dfvdfbfdnjfgj', null, '1', '2017-02-10 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('51', '0', 'xinchao', 'sdfsdfsdf', null, '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('52', '0', 'helo', 'sdfsdfsdf', null, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('53', '0', 'helofsdf', 'sdfsdfsdf', null, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('54', '0', 'xinccccc', 'Ã¡dasdasd', null, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('55', '0', 'sjdhkasjhkjashkf', 'aksjdlkasjdlkajsldasd', null, '1', '2017-02-13 00:00:00', '2017-02-13 00:00:00');
INSERT INTO `articles` VALUES ('56', '0', 'testlan1', 'sdfsdfsdfs', null, '1', '2017-02-13 00:00:00', '2017-02-13 00:00:00');
INSERT INTO `articles` VALUES ('57', '0', 'testlan2', 'sdfsdfsdfs', null, '1', '2017-02-13 00:00:00', '2017-02-13 00:00:00');
INSERT INTO `articles` VALUES ('58', '0', 'testlan3', 'qÆ°dqwdqwdqwd', null, '1', '2017-02-13 00:00:00', '2017-02-13 00:00:00');
INSERT INTO `articles` VALUES ('59', '0', 'testlan4', 'adasfasfasasc', null, '1', '2017-02-13 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('60', '0', 'testlan5', 'dgdfdfhgdfh', null, '1', '2017-02-13 00:00:00', '2017-02-13 00:00:00');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Truyện cười', '2017-02-08 22:33:46', '0000-00-00 00:00:00');
INSERT INTO `categories` VALUES ('2', 'Truyện kiếm hiệp', '2017-02-08 22:34:10', '0000-00-00 00:00:00');
