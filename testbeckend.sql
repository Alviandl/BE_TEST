/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100432
 Source Host           : localhost:3306
 Source Schema         : testbeckend

 Target Server Type    : MySQL
 Target Server Version : 100432
 File Encoding         : 65001

 Date: 25/09/2024 16:26:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for authors
-- ----------------------------
DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bio` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `birth_date` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of authors
-- ----------------------------
INSERT INTO `authors` VALUES (3, 'Alvian Dwi', 'Programmer', '1999-03-16');
INSERT INTO `authors` VALUES (4, 'Alvian Dwi', 'Programmer', '1999-03-16');
INSERT INTO `authors` VALUES (5, 'Alvian Dwi', 'Programmer', '1999-03-16');
INSERT INTO `authors` VALUES (6, 'Alvian Dwi', 'Programmer', '1999-03-16');
INSERT INTO `authors` VALUES (7, 'Alvian Dwi', 'Programmer', '1999-03-16');
INSERT INTO `authors` VALUES (8, 'Alvian Dwi', 'Programmer', '1999-03-16');
INSERT INTO `authors` VALUES (9, 'Alvian Dwi', 'Programmer', '1999-03-16');
INSERT INTO `authors` VALUES (10, 'Alvian Dwi', 'Programmer', '1999-03-16');
INSERT INTO `authors` VALUES (11, 'Alvian Dwi', 'Programmer', '1999-03-16');
INSERT INTO `authors` VALUES (12, 'Alvian Dwi', 'Programmer', '1999-03-16');
INSERT INTO `authors` VALUES (13, 'Alvian Dwi', 'Programmer', '1999-03-16');
INSERT INTO `authors` VALUES (14, 'Alvian Dwi', 'Programmer', '1999-03-16');

-- ----------------------------
-- Table structure for books
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `publish_date` date NULL DEFAULT NULL,
  `author_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `author_id`(`author_id`) USING BTREE,
  CONSTRAINT `books_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of books
-- ----------------------------
INSERT INTO `books` VALUES (2, 'Development 2', 'Tes BE 2', '2024-09-25', 3);
INSERT INTO `books` VALUES (3, 'Development', 'Tes BE', '2024-09-25', 3);
INSERT INTO `books` VALUES (4, 'Development', 'Tes BE', '2024-09-25', 3);
INSERT INTO `books` VALUES (5, 'Development', 'Tes BE', '2024-09-25', 3);

-- ----------------------------
-- Table structure for factories
-- ----------------------------
DROP TABLE IF EXISTS `factories`;
CREATE TABLE `factories`  (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(31) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `uid` varchar(31) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `class` varchar(63) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `icon` varchar(31) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `summary` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `name`(`name`) USING BTREE,
  INDEX `uid`(`uid`) USING BTREE,
  INDEX `deleted_at_id`(`deleted_at`, `id`) USING BTREE,
  INDEX `created_at`(`created_at`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of factories
-- ----------------------------
INSERT INTO `factories` VALUES (1, 'Test Factory', 'test001', 'Factories\\Tests\\NewFactory', 'fas fa-puzzle-piece', 'Longer sample text for testing', NULL, '2024-09-25 09:08:24', '2024-09-25 09:08:24');
INSERT INTO `factories` VALUES (2, 'Widget Factory', 'widget', 'Factories\\Tests\\WidgetPlant', 'fas fa-puzzle-piece', 'Create widgets in your factory', NULL, NULL, NULL);
INSERT INTO `factories` VALUES (3, 'Evil Factory', 'evil-maker', 'Factories\\Evil\\MyFactory', 'fas fa-book-dead', 'Abandon all hope, ye who enter here', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `class` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `group` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `namespace` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (37, '2020-02-22-222222', 'Tests\\Support\\Database\\Migrations\\ExampleMigration', 'tests', 'Tests\\Support', 1727255304, 1);

SET FOREIGN_KEY_CHECKS = 1;
