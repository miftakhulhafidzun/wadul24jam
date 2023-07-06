/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80030
 Source Host           : localhost:3306
 Source Schema         : wadul24jam

 Target Server Type    : MySQL
 Target Server Version : 80030
 File Encoding         : 65001

 Date: 06/07/2023 13:37:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for pengaduan
-- ----------------------------
DROP TABLE IF EXISTS `pengaduan`;
CREATE TABLE `pengaduan`  (
  `id` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `n_pelapor` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lokasi` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sosmed` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `ket` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ket_petugas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tgl_lapor` date NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pengaduan
-- ----------------------------
INSERT INTO `pengaduan` VALUES ('NP0001', 'Bunga', 'bunga@gmail.com', 'Kecamatan Kutorejo', '@bunganuril', '64a59a9aca2ea.png', 'Kasus Pertama', 'Selesai diproses', 'Kejadian Sudah Selesai ditangani', '2023-07-05');
INSERT INTO `pengaduan` VALUES ('NP0002', 'Hafidz', 'hafidz@gmail.com', 'Kecamatan Pacet', '@hafidzzzz', '64a59e43e2077.jpg', 'Ini keterangan kejadian oleh hafidz', 'Sedang diproses', 'Sedang dilakukan penindakan oleh aparat setempat', '2023-07-05');
INSERT INTO `pengaduan` VALUES ('NP0003', 'Oliver', 'oliver@gmail.com', 'Pusat Kota', '@oliverskieyss', '64a59e7a72b49.jpg', 'Kejadian di tengah tengah pusat Kota A', 'Sedang diajukan', '-', '2023-07-05');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `user_id` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` tinyint NOT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '$2y$10$vx9rULGqEcbI1khsJ2su8eRHIhZlpmvQW5sPZu3jmk471MtfaNqrm', 'Admin', '585925391_iconbwi.png', 1);
INSERT INTO `user` VALUES ('2318827', 'hafidz', '$2y$10$6vVdC0fygXaJCtUQJ/rnue0svODFKmJ95Sfh/AmJvhKHDTUIL6BsW', 'Hafidz', '1477215643_man.png', 0);

SET FOREIGN_KEY_CHECKS = 1;
