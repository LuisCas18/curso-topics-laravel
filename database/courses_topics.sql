/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80041 (8.0.41)
 Source Host           : localhost:3306
 Source Schema         : courses_topics

 Target Server Type    : MySQL
 Target Server Version : 80041 (8.0.41)
 File Encoding         : 65001

 Date: 30/06/2025 14:21:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for course_topics
-- ----------------------------
DROP TABLE IF EXISTS `course_topics`;
CREATE TABLE `course_topics`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `fecha_publicacion` date NOT NULL,
  `es_obligatorio` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of course_topics
-- ----------------------------
INSERT INTO `course_topics` VALUES (1, 'Introducción a Laravel 12', 'Primeros pasos con el framework', '2025-07-01', 1, '2025-06-30 18:58:36', '2025-06-30 20:06:18');
INSERT INTO `course_topics` VALUES (2, 'Introducción a Python', 'Primeros pasos con python', '2025-06-30', 1, '2025-06-30 19:02:02', '2025-06-30 19:02:02');
INSERT INTO `course_topics` VALUES (4, 'Introducción a Javascript', 'Primeros pasos con javascript', '2025-06-30', 0, '2025-06-30 20:13:59', '2025-06-30 20:13:59');

SET FOREIGN_KEY_CHECKS = 1;
