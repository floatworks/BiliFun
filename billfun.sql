/*
 Navicat Premium Data Transfer

 Source Server         : 测试服务器
 Source Server Type    : MySQL
 Source Server Version : 50538
 Source Host           : localhost
 Source Database       : billfun

 Target Server Type    : MySQL
 Target Server Version : 50538
 File Encoding         : utf-8

 Date: 03/14/2015 01:41:16 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `bf_category`
-- ----------------------------
DROP TABLE IF EXISTS `bf_category`;
CREATE TABLE `bf_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `url` varchar(100) NOT NULL,
  `stat` tinyint(1) NOT NULL DEFAULT '0',
  `cid` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_category`
-- ----------------------------
BEGIN;
INSERT INTO `bf_category` VALUES ('1', 'Top', '首页', '#Top', '1', '1'), ('2', 'Video', '视频', '#Video', '0', '2'), ('3', 'Game', '游戏', '#Game', '0', '3'), ('4', 'anime', '动画', '#', '-1', '4'), ('5', 'music', '音乐', '#', '-2', '5'), ('6', 'entertainment', '娱乐', '#', '-3', '6'), ('7', 'technology', '科技', '#', '-4', '7');
COMMIT;

-- ----------------------------
--  Table structure for `bf_comment`
-- ----------------------------
DROP TABLE IF EXISTS `bf_comment`;
CREATE TABLE `bf_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message` varchar(250) NOT NULL,
  `replyer` varchar(20) NOT NULL,
  `author_id` int(10) NOT NULL,
  `addtime` int(10) NOT NULL,
  `reply_id` int(10) unsigned NOT NULL,
  `reply_num` int(10) unsigned NOT NULL DEFAULT '0',
  `pid` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_comment`
-- ----------------------------
BEGIN;
INSERT INTO `bf_comment` VALUES ('1', '沙发~~~~~~~~~~~~~~~和', '月落丶音阑', '1', '1242424', '1', '0', 'av2432342'), ('2', '测试评论测试评论测试评论测试评论', 'Irvin Aexcm', '1', '12321321', '2', '0', 'av234233'), ('3', '暗示法收费方式多福多寿佛挡杀佛', '', '0', '2015', '0', '0', ''), ('4', '这是一个测试数据，测试评论是否成功', '', '0', '2015', '0', '0', ''), ('5', '这是一个测试数据，测试评论是否成功', '', '0', '2015', '0', '0', 'av2432342'), ('6', '这是一个测试数据，测试评论是否成功', '', '1', '2015', '0', '0', 'av2432342'), ('7', '这是一个测试数据，测试评论是否成功', '游客', '1', '2015', '0', '0', 'av2432342');
COMMIT;

-- ----------------------------
--  Table structure for `bf_conf`
-- ----------------------------
DROP TABLE IF EXISTS `bf_conf`;
CREATE TABLE `bf_conf` (
  `sitename` varchar(50) NOT NULL,
  `siteurl` varchar(50) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `aboutus` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `close` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `message` varchar(250) NOT NULL,
  `defwidth` tinyint(3) unsigned NOT NULL DEFAULT '100',
  `defheight` tinyint(3) unsigned NOT NULL DEFAULT '100',
  PRIMARY KEY (`sitename`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_conf`
-- ----------------------------
BEGIN;
INSERT INTO `bf_conf` VALUES ('梦想 + ∞', '//localhost', '测试站点', '测试站点', 'test', 'test@test.com', '0', '系统维护，站点暂时关闭！', '240', '160');
COMMIT;

-- ----------------------------
--  Table structure for `bf_notice`
-- ----------------------------
DROP TABLE IF EXISTS `bf_notice`;
CREATE TABLE `bf_notice` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `content` mediumtext NOT NULL,
  `time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_notice`
-- ----------------------------
BEGIN;
INSERT INTO `bf_notice` VALUES ('1', '梦の轻语', '这里是梦想汇聚的地方，我们的征途是星辰大海<br />\n梦想 +∞', '0');
COMMIT;

-- ----------------------------
--  Table structure for `bf_prod`
-- ----------------------------
DROP TABLE IF EXISTS `bf_prod`;
CREATE TABLE `bf_prod` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` varchar(10) NOT NULL DEFAULT '0',
  `video_name` varchar(100) NOT NULL,
  `author` varchar(10) NOT NULL,
  `author_id` int(10) NOT NULL,
  `channel` varchar(10) NOT NULL,
  `channel_id` tinyint(3) unsigned NOT NULL,
  `word_key` int(10) unsigned NOT NULL,
  `description` varchar(250) NOT NULL,
  `addtime` int(10) unsigned NOT NULL,
  `danmu_id` mediumint(8) unsigned NOT NULL,
  `visible` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `views` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_prod`
-- ----------------------------
BEGIN;
INSERT INTO `bf_prod` VALUES ('1', 'av2432342', '...', 'Admin', '1', 'anime', '4', '1', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '1231232', '1', '1', 'img/anime/img1.png', '思修活动-3.mp4', '107'), ('2', 'av234233', '...', 'Admin', '1', 'anime', '4', '2', 'hhhhhhhh', '23234243', '2', '1', 'img/anime/img2.png', '思修活动-3.mp4', '186');
COMMIT;

-- ----------------------------
--  Table structure for `bf_swap`
-- ----------------------------
DROP TABLE IF EXISTS `bf_swap`;
CREATE TABLE `bf_swap` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext NOT NULL,
  `info` text,
  `url` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `thumb` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `time` int(10) unsigned NOT NULL,
  `shownum` tinyint(3) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_swap`
-- ----------------------------
BEGIN;
INSERT INTO `bf_swap` VALUES ('1', '梦想 +∞', '<p>We walk a thin line between hope and despair【在希望与绝望间我们寻觅一线生机】</p>\n<p>Running from the truth but it’s already here【一味想逃离真相但它却无处不在】</p>\n<p>Told so many lies I don’t know if they can find me【诉说了无数谎言 也不知何时会被拆穿】</p>\n<p>Only one life to live so choose wisely【生命只有一次 我们必须慎行】</p>', '', '', '', '0', '1', '0'), ('2', null, 'a', null, '#', 'img/c.png', '1', '2', '1'), ('3', null, '', '@Irvin', '#', 'img/a.png', '2', '3', '2'), ('4', null, '', '@Demone', '#', 'img/b.png', '3', '3', '2');
COMMIT;

-- ----------------------------
--  Table structure for `bf_tags`
-- ----------------------------
DROP TABLE IF EXISTS `bf_tags`;
CREATE TABLE `bf_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(10) unsigned NOT NULL,
  `words` varchar(30) NOT NULL,
  `floor` int(10) unsigned NOT NULL,
  `video_id` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_tags`
-- ----------------------------
BEGIN;
INSERT INTO `bf_tags` VALUES ('1', '1', 'hhhh', '1', 'av234233');
COMMIT;

-- ----------------------------
--  Table structure for `bf_thumb`
-- ----------------------------
DROP TABLE IF EXISTS `bf_thumb`;
CREATE TABLE `bf_thumb` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0 - jpg | 1 - git | 2 - png | 3 -jpeg',
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `bf_user`
-- ----------------------------
DROP TABLE IF EXISTS `bf_user`;
CREATE TABLE `bf_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `us_time` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
