/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : article

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2017-02-14 00:06:44
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
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

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
INSERT INTO `articles` VALUES ('61', '0', 'testlan6', 'kjlkjlioih', null, '1', '2017-02-13 00:00:00', '2017-02-13 00:00:00');
INSERT INTO `articles` VALUES ('62', '0', 'testlan7', 'mkjljhlkhilhklk', null, '1', '2017-02-13 00:00:00', '2017-02-13 00:00:00');
INSERT INTO `articles` VALUES ('63', '0', 'testlan8', 'dfsfwefwef', null, '1', '2017-02-13 00:00:00', '2017-02-13 00:00:00');
INSERT INTO `articles` VALUES ('64', '0', 'testlan9', 'sdfsdfsdfsdfsdf', null, '1', '2017-02-13 07:59:00', '2017-02-13 00:00:00');
INSERT INTO `articles` VALUES ('65', '0', 'testlan10', 'dsfsdfsdfsdf', null, '1', '2017-02-13 08:00:53', '2017-02-13 08:00:53');
INSERT INTO `articles` VALUES ('66', '0', 'testlan11', 'Thá»i tiáº¿t khÃ¡ Ä‘áº¹p', null, '1', '2017-02-13 16:46:08', '2017-02-13 16:46:08');
INSERT INTO `articles` VALUES ('67', '0', 'testlan12', 'ná»• bom á»Ÿ má»¹', null, '1', '2017-02-13 16:50:14', '2017-02-13 16:50:14');
INSERT INTO `articles` VALUES ('68', '0', 'testlan13', 'Viet nam so 1', null, '1', '2017-02-13 16:52:16', '2017-02-13 16:52:16');
INSERT INTO `articles` VALUES ('69', '0', 'testlan14', 'Life is good', null, '1', '2017-02-13 16:52:56', '2017-02-13 16:52:56');
INSERT INTO `articles` VALUES ('70', '0', 'testlan15', 'Test', null, '1', '2017-02-13 16:54:30', '2017-02-13 16:54:30');
INSERT INTO `articles` VALUES ('71', '0', 'testlan16', 'dsfsdfsf', null, '1', '2017-02-13 16:55:07', '2017-02-13 16:55:07');
INSERT INTO `articles` VALUES ('72', '0', 'testlan17', 'fsdfsdfsf', null, '1', '2017-02-13 16:57:14', '2017-02-13 16:57:14');
INSERT INTO `articles` VALUES ('73', '0', 'testlan18', 'sdfsdfsdfsdf', null, '1', '2017-02-13 17:02:27', '2017-02-13 17:02:27');
INSERT INTO `articles` VALUES ('74', '0', 'testlan19', 'dfsdsdgsdg', null, '1', '2017-02-13 17:09:26', '2017-02-13 17:09:26');
INSERT INTO `articles` VALUES ('75', '0', 'testlan20', 'sdfsdfsdf', null, '1', '2017-02-13 17:21:55', '2017-02-13 17:21:55');
INSERT INTO `articles` VALUES ('76', '0', 'testlan21', 'dsfsdfsdfs', null, '1', '2017-02-13 17:23:58', '2017-02-13 17:23:58');
INSERT INTO `articles` VALUES ('77', '0', 'testlan22', 'Ã¡dasdasdasdasd', null, '1', '2017-02-13 17:26:04', '2017-02-13 17:26:04');
INSERT INTO `articles` VALUES ('78', '0', 'testlan23', 'adasdasdasdasd', null, '1', '2017-02-13 17:29:05', '2017-02-13 17:29:05');
INSERT INTO `articles` VALUES ('79', '1', 'testlan23', 'adasdasdasdasd', null, '1', '2017-02-13 17:30:21', '2017-02-13 17:30:21');
INSERT INTO `articles` VALUES ('80', '2', 'testlan24', 'sdasdasdasdasd', null, '1', '2017-02-13 17:30:45', '2017-02-13 17:30:45');
INSERT INTO `articles` VALUES ('81', '3', 'testlan25', 'Ã¡dsadasdasd', null, '1', '2017-02-13 17:55:04', '2017-02-13 17:55:04');
INSERT INTO `articles` VALUES ('86', '1', 'testlan26', 'Ã¡dasfsafasf', null, '1', '2017-02-13 18:04:04', '2017-02-13 18:04:04');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'News', '2017-02-08 22:33:46', '0000-00-00 00:00:00');
INSERT INTO `categories` VALUES ('2', 'Weather', '2017-02-08 22:34:10', '0000-00-00 00:00:00');
INSERT INTO `categories` VALUES ('3', 'Life', '2017-02-13 22:33:58', '2017-02-13 22:34:01');
