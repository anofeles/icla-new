/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : icla_new

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 06/06/2021 17:05:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for locales
-- ----------------------------
DROP TABLE IF EXISTS `locales`;
CREATE TABLE `locales`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of locales
-- ----------------------------
INSERT INTO `locales` VALUES (1, '1eb484c3-512b-6c20-b4db-e03f49153fd5', 'ka', 'geo.png', 3, '2020-12-21 16:05:18', '2020-12-21 16:05:21', NULL);
INSERT INTO `locales` VALUES (2, '1eb484c3-512b-6c20-b4db-e03f49153fd7', 'en', '1200px-Flag_of_the_United_Kingdom.svg.webp', 1, '2020-12-21 16:05:18', '2020-12-21 16:05:21', NULL);

-- ----------------------------
-- Table structure for menu_to_any
-- ----------------------------
DROP TABLE IF EXISTS `menu_to_any`;
CREATE TABLE `menu_to_any`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `row_uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 505 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of menu_to_any
-- ----------------------------
INSERT INTO `menu_to_any` VALUES (137, '1eb72d50-815b-6b74-8ba6-005056b54f01', '1eb74ea5-a0d7-6392-8e69-005056b54f01', '2021-02-22 04:45:44', '2021-02-22 04:45:44');
INSERT INTO `menu_to_any` VALUES (162, '1eb72d25-2425-6110-bc92-005056b54f01', '1eb74fd2-f714-609c-9497-005056b54f01', '2021-02-22 07:00:33', '2021-02-22 07:00:33');
INSERT INTO `menu_to_any` VALUES (180, '1eb72d24-785b-6ece-9916-005056b54f01', '1eb760af-1dc1-68f6-8132-005056b54f01', '2021-02-23 15:11:34', '2021-02-23 15:11:34');
INSERT INTO `menu_to_any` VALUES (185, '1eb72d24-785b-6ece-9916-005056b54f01', '1eb768cd-b9ff-69c2-ac38-005056b54f01', '2021-02-24 06:41:31', '2021-02-24 06:41:31');
INSERT INTO `menu_to_any` VALUES (188, '1eb72d50-815b-6b74-8ba6-005056b54f01', '1eb768f7-86e8-6802-8fc7-005056b54f01', '2021-02-24 07:00:13', '2021-02-24 07:00:13');
INSERT INTO `menu_to_any` VALUES (198, '1eb72d25-2425-6110-bc92-005056b54f01', '1eb7693e-3967-642e-9ab8-005056b54f01', '2021-02-24 07:31:51', '2021-02-24 07:31:51');
INSERT INTO `menu_to_any` VALUES (199, '1eb72d25-2425-6110-bc92-005056b54f01', '1eb7693e-994a-6ec2-b9e5-005056b54f01', '2021-02-24 07:32:01', '2021-02-24 07:32:01');
INSERT INTO `menu_to_any` VALUES (200, '1eb72d50-815b-6b74-8ba6-005056b54f01', '1eb76941-9a0c-6114-9cb6-005056b54f01', '2021-02-24 07:33:22', '2021-02-24 07:33:22');
INSERT INTO `menu_to_any` VALUES (217, '1eb72d32-206f-6afe-8471-005056b54f01', '1eb7acf7-a305-6852-b556-005056b54f01', '2021-03-01 16:48:29', '2021-03-01 16:48:29');
INSERT INTO `menu_to_any` VALUES (218, '1eb72d32-206f-6afe-8471-005056b54f01', '1eb7ad2d-b10c-6abe-a4c9-005056b54f01', '2021-03-01 17:12:40', '2021-03-01 17:12:40');
INSERT INTO `menu_to_any` VALUES (219, '1eb72d32-206f-6afe-8471-005056b54f01', '1eb7ad32-2acd-6098-ae4a-005056b54f01', '2021-03-01 17:14:40', '2021-03-01 17:14:40');
INSERT INTO `menu_to_any` VALUES (221, '1eb72d32-ee63-610e-aad2-005056b54f01', '1eb7ad5a-c372-6aa0-8d6e-005056b54f01', '2021-03-01 17:32:50', '2021-03-01 17:32:50');
INSERT INTO `menu_to_any` VALUES (222, '1eb72d34-75bf-6ba6-aed7-005056b54f01', '1eb7ad64-0887-6556-9c04-005056b54f01', '2021-03-01 17:36:58', '2021-03-01 17:36:58');
INSERT INTO `menu_to_any` VALUES (223, '1eb72d34-75bf-6ba6-aed7-005056b54f01', '1eb7ad6c-0c44-6d6c-9fb2-005056b54f01', '2021-03-01 17:40:34', '2021-03-01 17:40:34');
INSERT INTO `menu_to_any` VALUES (224, '1eb72d34-75bf-6ba6-aed7-005056b54f01', '1eb7ad72-5b48-6368-a3c5-005056b54f01', '2021-03-01 17:43:23', '2021-03-01 17:43:23');
INSERT INTO `menu_to_any` VALUES (225, '1eb72d35-2381-6f64-ba5f-005056b54f01', '1eb7ad77-3725-6cf6-a0c3-005056b54f01', '2021-03-01 17:45:33', '2021-03-01 17:45:33');
INSERT INTO `menu_to_any` VALUES (226, '1eb72d36-5bc4-6cf4-b94b-005056b54f01', '1eb7ad7a-b58d-61a4-af8d-005056b54f01', '2021-03-01 17:47:07', '2021-03-01 17:47:07');
INSERT INTO `menu_to_any` VALUES (233, '1eb72d32-206f-6afe-8471-005056b54f01', '1eb7c0be-d17d-63da-9b56-005056b54f01', '2021-03-03 06:33:42', '2021-03-03 06:33:42');
INSERT INTO `menu_to_any` VALUES (234, '1eb72d32-ee63-610e-aad2-005056b54f01', '1eb7c0c0-b412-6b04-83df-005056b54f01', '2021-03-03 06:34:33', '2021-03-03 06:34:33');
INSERT INTO `menu_to_any` VALUES (235, '1eb72d34-75bf-6ba6-aed7-005056b54f01', '1eb7c0cf-3ea5-6164-a722-005056b54f01', '2021-03-03 06:41:03', '2021-03-03 06:41:03');
INSERT INTO `menu_to_any` VALUES (236, '1eb72d34-75bf-6ba6-aed7-005056b54f01', '1eb7c0d0-b39b-674c-bfe2-005056b54f01', '2021-03-03 06:41:42', '2021-03-03 06:41:42');
INSERT INTO `menu_to_any` VALUES (237, '1eb72d34-75bf-6ba6-aed7-005056b54f01', '1eb7c0d0-e22c-6a34-bc88-005056b54f01', '2021-03-03 06:41:47', '2021-03-03 06:41:47');
INSERT INTO `menu_to_any` VALUES (245, '1eb72d32-ee63-610e-aad2-005056b54f01', '1eb82577-03a3-6fae-a06a-005056b54f01', '2021-03-11 06:49:22', '2021-03-11 06:49:22');
INSERT INTO `menu_to_any` VALUES (246, '1eb72d32-ee63-610e-aad2-005056b54f01', '1eb82579-0633-6c0e-bb71-005056b54f01', '2021-03-11 06:50:16', '2021-03-11 06:50:16');
INSERT INTO `menu_to_any` VALUES (247, '1eb72d32-ee63-610e-aad2-005056b54f01', '1eb8257b-415f-6ee8-905d-005056b54f01', '2021-03-11 06:51:16', '2021-03-11 06:51:16');
INSERT INTO `menu_to_any` VALUES (248, '1eb72d32-ee63-610e-aad2-005056b54f01', '1eb82584-f997-65fc-9d79-005056b54f01', '2021-03-11 06:55:36', '2021-03-11 06:55:36');
INSERT INTO `menu_to_any` VALUES (249, '1eb72d32-ee63-610e-aad2-005056b54f01', '1eb82587-779c-6f36-8778-005056b54f01', '2021-03-11 06:56:43', '2021-03-11 06:56:43');
INSERT INTO `menu_to_any` VALUES (250, '1eb72d32-ee63-610e-aad2-005056b54f01', '1eb825a0-3c6a-677e-9b10-005056b54f01', '2021-03-11 07:07:48', '2021-03-11 07:07:48');
INSERT INTO `menu_to_any` VALUES (257, '1eb72d24-785b-6ece-9916-005056b54f01', '1eb87143-eb44-6e04-adda-005056b54f01', '2021-03-17 07:30:58', '2021-03-17 07:30:58');
INSERT INTO `menu_to_any` VALUES (262, '1eb87126-43d5-6b4a-a339-005056b54f01', '1eb8990f-5756-6aaa-9fe4-005056b54f01', '2021-03-20 11:28:45', '2021-03-20 11:28:45');
INSERT INTO `menu_to_any` VALUES (310, '1eb72d25-2425-6110-bc92-005056b54f01', '1eb986e6-a796-6a40-8ba0-005056b54f01', '2021-04-08 09:29:16', '2021-04-08 09:29:16');
INSERT INTO `menu_to_any` VALUES (311, '1eb72d25-2425-6110-bc92-005056b54f01', '1eb986f0-7a92-6cba-ac44-005056b54f01', '2021-04-08 09:33:40', '2021-04-08 09:33:40');
INSERT INTO `menu_to_any` VALUES (312, '1eb72d25-2425-6110-bc92-005056b54f01', '1eb986f1-9278-61ee-88b9-005056b54f01', '2021-04-08 09:34:09', '2021-04-08 09:34:09');
INSERT INTO `menu_to_any` VALUES (313, '1eb72d25-2425-6110-bc92-005056b54f01', '1eb986f5-b8cf-6168-8851-005056b54f01', '2021-04-08 09:36:00', '2021-04-08 09:36:00');
INSERT INTO `menu_to_any` VALUES (314, '1eb72d25-2425-6110-bc92-005056b54f01', '1eb986f6-ae6c-6bc0-babd-005056b54f01', '2021-04-08 09:36:26', '2021-04-08 09:36:26');
INSERT INTO `menu_to_any` VALUES (315, '1eb72d25-2425-6110-bc92-005056b54f01', '1eb9873f-8698-6970-b8ad-005056b54f01', '2021-04-08 10:09:02', '2021-04-08 10:09:02');

-- ----------------------------
-- Table structure for menu_translations
-- ----------------------------
DROP TABLE IF EXISTS `menu_translations`;
CREATE TABLE `menu_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `menu_translations_menu_id_locale_unique`(`menu_id`, `locale`) USING BTREE,
  INDEX `menu_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `menu_translations_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 117 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of menu_translations
-- ----------------------------
INSERT INTO `menu_translations` VALUES (101, 131, 'ka', 'მთავარი');
INSERT INTO `menu_translations` VALUES (102, 132, 'ka', 'სიახლეები');
INSERT INTO `menu_translations` VALUES (103, 133, 'ka', 'კომიტეტები');
INSERT INTO `menu_translations` VALUES (104, 134, 'ka', 'მომხსენებლები');
INSERT INTO `menu_translations` VALUES (105, 135, 'ka', 'აბსტრაქტის გაგზავნა');
INSERT INTO `menu_translations` VALUES (106, 136, 'ka', 'პროგრამა');
INSERT INTO `menu_translations` VALUES (107, 137, 'ka', 'კრებული');
INSERT INTO `menu_translations` VALUES (108, 138, 'ka', 'კონტაქტი');
INSERT INTO `menu_translations` VALUES (109, 139, 'en', 'Home');
INSERT INTO `menu_translations` VALUES (110, 140, 'en', 'Announcements');
INSERT INTO `menu_translations` VALUES (111, 141, 'en', 'Committees');
INSERT INTO `menu_translations` VALUES (112, 142, 'en', 'Keynote Speakers');
INSERT INTO `menu_translations` VALUES (113, 143, 'en', 'Abstract submission');
INSERT INTO `menu_translations` VALUES (114, 144, 'en', 'Agenda');
INSERT INTO `menu_translations` VALUES (115, 145, 'en', 'Conference Proceedings');
INSERT INTO `menu_translations` VALUES (116, 146, 'en', 'Contact');

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `arqive` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `menu_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `menus_menu_id_foreign`(`menu_id`) USING BTREE,
  CONSTRAINT `menus_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 147 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES (106, '1ebbe569-7476-6050-bec4-056a42de2293', 'post', 1, 0, 1, NULL, '2021-05-26 15:14:27', '2021-05-26 15:14:27', NULL);
INSERT INTO `menus` VALUES (107, '1ebbe56b-f0da-6220-94b1-cdce5dc6bc60', 'post', 1, 0, 1, NULL, '2021-05-26 15:15:34', '2021-05-26 15:15:34', NULL);
INSERT INTO `menus` VALUES (108, '1ebbe56d-9d4d-67e0-9bb1-25ea1cd6469b', 'post', 1, 0, 2, NULL, '2021-05-26 15:16:19', '2021-05-26 15:16:19', NULL);
INSERT INTO `menus` VALUES (109, '1ebbe56f-bb98-673e-9bca-a14d5734569e', 'post', 1, 0, 1, NULL, '2021-05-26 15:17:16', '2021-05-26 15:17:16', NULL);
INSERT INTO `menus` VALUES (110, '1ebbe575-b70b-6b8e-8409-6988651134c4', 'galerea', 1, 0, 1, NULL, '2021-05-26 15:19:57', '2021-05-26 15:19:57', NULL);
INSERT INTO `menus` VALUES (111, '1ebbe57b-52f8-6e84-837a-0fc68a923fc5', 'post', 1, 0, 1, NULL, '2021-05-26 15:22:27', '2021-05-26 15:22:27', NULL);
INSERT INTO `menus` VALUES (112, '1ebbe57e-10c1-646e-8ed7-097e02d64a2e', 'post', 1, 0, 1, NULL, '2021-05-26 15:23:41', '2021-05-26 15:23:41', NULL);
INSERT INTO `menus` VALUES (113, '1ebbfbbb-71f5-6e26-a624-29b3be61d188', 'post', 1, 0, 1, NULL, '2021-05-28 09:50:51', '2021-05-28 09:50:51', NULL);
INSERT INTO `menus` VALUES (115, '1ebbfbc2-8386-66a2-a609-05372304bd68', 'post', 1, 0, 1, NULL, '2021-05-28 09:54:01', '2021-05-28 09:54:01', NULL);
INSERT INTO `menus` VALUES (131, '1ebc6c5b-3743-6470-8eba-7427ea0dc273', 'post', 1, 0, 1, NULL, '2021-06-06 08:49:58', '2021-06-06 08:49:58', NULL);
INSERT INTO `menus` VALUES (132, '1ebc6c5b-aad0-6ae6-aa0b-7427ea0dc273', 'post', 1, 0, 2, NULL, '2021-06-06 08:50:10', '2021-06-06 08:50:10', NULL);
INSERT INTO `menus` VALUES (133, '1ebc6c5b-f68d-6e2a-b68e-7427ea0dc273', 'post', 1, 0, 3, NULL, '2021-06-06 08:50:18', '2021-06-06 08:50:18', NULL);
INSERT INTO `menus` VALUES (134, '1ebc6c5c-47d2-68f8-8493-7427ea0dc273', 'post', 1, 0, 4, NULL, '2021-06-06 08:50:27', '2021-06-06 08:50:27', NULL);
INSERT INTO `menus` VALUES (135, '1ebc6c5c-a675-6856-8839-7427ea0dc273', 'post', 1, 0, 5, NULL, '2021-06-06 08:50:37', '2021-06-06 08:50:37', NULL);
INSERT INTO `menus` VALUES (136, '1ebc6c5c-fd9c-6634-9d5e-7427ea0dc273', 'post', 1, 0, 6, NULL, '2021-06-06 08:50:46', '2021-06-06 08:50:46', NULL);
INSERT INTO `menus` VALUES (137, '1ebc6c5d-4acd-68d6-85d8-7427ea0dc273', 'post', 1, 0, 7, NULL, '2021-06-06 08:50:54', '2021-06-06 08:50:54', NULL);
INSERT INTO `menus` VALUES (138, '1ebc6c5d-9adb-6a9e-b4ab-7427ea0dc273', 'post', 1, 0, 8, NULL, '2021-06-06 08:51:02', '2021-06-06 08:51:02', NULL);
INSERT INTO `menus` VALUES (139, '1ebc6c5e-f5d6-6d3a-bf28-7427ea0dc273', 'post', 1, 0, 1, NULL, '2021-06-06 08:51:39', '2021-06-06 08:51:39', NULL);
INSERT INTO `menus` VALUES (140, '1ebc6c5f-1cbd-639a-891d-7427ea0dc273', 'post', 1, 0, 2, NULL, '2021-06-06 08:51:43', '2021-06-06 08:51:43', NULL);
INSERT INTO `menus` VALUES (141, '1ebc6c5f-617b-6cac-a56b-7427ea0dc273', 'post', 1, 0, 3, NULL, '2021-06-06 08:51:50', '2021-06-06 08:51:50', NULL);
INSERT INTO `menus` VALUES (142, '1ebc6c5f-c5f8-659a-a90c-7427ea0dc273', 'post', 1, 0, 4, NULL, '2021-06-06 08:52:00', '2021-06-06 08:52:00', NULL);
INSERT INTO `menus` VALUES (143, '1ebc6c60-1867-683a-8b6f-7427ea0dc273', 'post', 1, 0, 5, NULL, '2021-06-06 08:52:09', '2021-06-06 08:52:09', NULL);
INSERT INTO `menus` VALUES (144, '1ebc6c60-731f-6c8c-96d7-7427ea0dc273', 'post', 1, 0, 6, NULL, '2021-06-06 08:52:19', '2021-06-06 08:52:19', NULL);
INSERT INTO `menus` VALUES (145, '1ebc6c60-d056-6572-976c-7427ea0dc273', 'post', 1, 0, 7, NULL, '2021-06-06 08:52:28', '2021-06-06 08:52:28', NULL);
INSERT INTO `menus` VALUES (146, '1ebc6c61-2cfc-6f74-b8f0-7427ea0dc273', 'post', 1, 0, 8, NULL, '2021-06-06 08:52:38', '2021-06-06 08:52:38', NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (10, '2020_12_21_140736_create_posts_table', 2);
INSERT INTO `migrations` VALUES (11, '2020_12_21_140803_create_post_translations_table', 2);
INSERT INTO `migrations` VALUES (12, '2020_12_21_142430_create_menus_table', 2);
INSERT INTO `migrations` VALUES (13, '2020_12_21_142459_create_menu_translations_table', 2);
INSERT INTO `migrations` VALUES (14, '2020_12_21_142754_create_locales_table', 2);
INSERT INTO `migrations` VALUES (15, '2020_12_21_144351_create_menu_to_any_table', 2);
INSERT INTO `migrations` VALUES (16, '2020_12_28_134008_edit_post_table', 3);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for post_translations
-- ----------------------------
DROP TABLE IF EXISTS `post_translations`;
CREATE TABLE `post_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `post_translations_post_id_locale_unique`(`post_id`, `locale`) USING BTREE,
  INDEX `post_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `post_translations_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 71 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of post_translations
-- ----------------------------

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `arqive` int(11) NOT NULL,
  `mtav` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 76 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of posts
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'kakha', 'zviadge@hotmail.com', NULL, '$2y$10$NFGHR4UzyobmdyOspAhqNO6GYrMBlsXo01ueF7NdohfggZ5Wob6Ce', NULL, '2020-12-21 08:34:28', '2020-12-21 08:34:28');

SET FOREIGN_KEY_CHECKS = 1;
