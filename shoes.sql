/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : shoes

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 26/05/2023 08:47:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bank
-- ----------------------------
DROP TABLE IF EXISTS `bank`;
CREATE TABLE `bank`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `bank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `norek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `atas_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `is_aktif` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL COMMENT 'YA | TIDAK',
  `created_at` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bank
-- ----------------------------
INSERT INTO `bank` VALUES (1, 'Bank Rakyat Indonesia', '1234567890', 'Rafli Firdausy Irawan', 'YA', '2023-04-11 01:19:35', '2023-04-11 14:29:23', NULL);
INSERT INTO `bank` VALUES (2, 'Bank Negara Indonesia', '1234567890', 'Rafli Firdausy Irawan', 'YA', '2023-04-11 01:20:01', '2023-04-11 14:34:05', NULL);
INSERT INTO `bank` VALUES (3, 'Bank Negara Indonesia (BNI)', '1231231231', 'Tians', 'TIDAK', '2023-04-11 01:20:27', '2023-04-11 14:29:26', NULL);
INSERT INTO `bank` VALUES (4, 'BCA', '235437658767', 'Tian Firza', 'YA', '2023-04-11 18:51:43', NULL, NULL);

-- ----------------------------
-- Table structure for paket
-- ----------------------------
DROP TABLE IF EXISTS `paket`;
CREATE TABLE `paket`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `harga` int NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of paket
-- ----------------------------
INSERT INTO `paket` VALUES (1, 'Fast Cleaning', 'Fast cleaning merupakan pencucian instan pada bagian upper dan midsole yang bisa di tunggu selama 15-30 menit.', '8919e47bade9558acf6121337d3ed5db.webp', 100000, '2023-04-11 01:29:16', '2023-04-11 16:27:48', '2023-04-11 16:27:48');
INSERT INTO `paket` VALUES (2, 'Deep Cleaning', 'Perawatan pembersihan sepatu secara detail dan menyeluruh pada seluruh bagian.', '7af5ee9e7e2ff6cbe46bbed1dc505e1f.webp', 200000, '2023-04-11 01:32:53', '2023-04-11 01:35:42', NULL);
INSERT INTO `paket` VALUES (3, 'XXxxss', '123123213xx', '44d10e9cd970226903e5509abad2e81b.webp', 1231233444, '2023-04-11 01:36:05', '2023-04-11 01:36:18', '2023-04-11 01:36:18');
INSERT INTO `paket` VALUES (4, 'Premium Treatment', 'Perawatan yang ditujukan untuk material-material khusus dalam pengerjaanya serta menggunakan bahan khusus dalam setiap produknya.', 'e4c100f873a33734adc65d5f51e9701a.webp', 500000, '2023-04-11 16:24:48', '2023-04-11 16:25:27', NULL);
INSERT INTO `paket` VALUES (5, 'Unyellowing', 'Perawatan pada bagian midsole yang telah menguning untuk menghilangkan warna kuning menjadi semula tanpa harus direpaint.', '8642c97fa66a2616f6a8f3ba757ec994.webp', 75000, '2023-04-11 16:25:14', NULL, NULL);
INSERT INTO `paket` VALUES (6, 'Repair', 'Perawatan restorasi pada sepatu yang rusak atau terbuka untuk dikembalikan seperti semula.', '7e0d32ab7509a80f102a3088f60fe61e.webp', 300000, '2023-04-11 16:26:15', NULL, NULL);
INSERT INTO `paket` VALUES (7, 'Uji Coba', 'Uji coba aja pokoknya', '1c26e0b13e4c00d6b525ac55ab4d7746.png', 67000, '2023-04-11 18:52:24', '2023-05-24 19:55:01', '2023-05-24 19:55:01');
INSERT INTO `paket` VALUES (8, 'Premium Treatment', 'Perawatan yang ditujukan untuk material-material khusus dalam pengerjaanya serta menggunakan bahan khusus dalam setiap produknya.', '8a3feb568e047881193ebc32af934a1b.webp', 68000, '2023-05-24 19:45:31', NULL, NULL);
INSERT INTO `paket` VALUES (9, 'Fast Cleaning', 'Fast cleaning merupakan pencucian instan pada bagian upper dan midsole yang bisa di tunggu selama 15-30 menit.', 'b9678933224aed697df63939b9777f10.webp', 90000, '2023-05-24 19:55:49', '2023-05-24 19:56:03', NULL);

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nowa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `enable_konsultasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL COMMENT 'AKTIF',
  `created_at` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES (1, '6285726096515', 'YA', '2023-04-11 01:03:24', NULL, NULL);
INSERT INTO `setting` VALUES (2, '6285726096515', 'YA', '2023-04-11 01:07:11', NULL, NULL);
INSERT INTO `setting` VALUES (3, '6285726096515', 'TIDAK', '2023-04-11 01:07:39', NULL, NULL);
INSERT INTO `setting` VALUES (4, '6285726096515', 'YA', '2023-04-11 16:28:11', NULL, NULL);
INSERT INTO `setting` VALUES (5, '6285643648796', 'TIDAK', '2023-04-11 18:59:47', NULL, NULL);
INSERT INTO `setting` VALUES (6, '6285643648796', 'YA', '2023-04-11 18:59:56', NULL, NULL);
INSERT INTO `setting` VALUES (7, '6285643648796', 'TIDAK', '2023-05-24 19:53:58', NULL, NULL);
INSERT INTO `setting` VALUES (8, '6285643648796', 'YA', '2023-05-24 19:54:10', NULL, NULL);

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `id_bank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `kode_transaksi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL COMMENT 'F{Y-m-d}{noUrut}',
  `tanggal` date NULL DEFAULT NULL,
  `status_transaksi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL COMMENT 'BOOKING | DIPROSES | SELESAI | DITOLAK | DIBATALKAN',
  `status_bayar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL COMMENT 'BELUM | SUDAH',
  `bukti_bayar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `batas_pembayaran` datetime NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES (1, '4', NULL, '0XLRN', '2023-04-11', 'BOOKING', 'BELUM', NULL, '2023-05-24 00:33:10', 'Testing yages', '2023-04-11 13:59:10', NULL, NULL);
INSERT INTO `transaksi` VALUES (2, '4', NULL, 'WERCK', '2023-04-12', 'DIPROSES', 'BELUM', NULL, '2023-05-27 00:33:10', 'Oke', '2023-04-11 14:02:35', '2023-04-11 18:54:42', NULL);
INSERT INTO `transaksi` VALUES (3, '4', NULL, '0K3XL', '2023-04-12', 'SELESAI', 'BELUM', NULL, '2023-05-27 00:33:10', 'aaa', '2023-04-11 14:03:12', '2023-04-11 18:55:00', NULL);
INSERT INTO `transaksi` VALUES (4, '4', NULL, 'Q24WY', '2023-04-12', 'DITOLAK', 'BELUM', NULL, '2023-05-27 00:33:10', 'ok', '2023-04-11 14:04:16', '2023-04-11 18:45:50', NULL);
INSERT INTO `transaksi` VALUES (5, '4', '1', '9HD4K', '2023-04-12', 'SELESAI', 'SUDAH', '44b9b03323dd156851e320945f259d38.jpg', '2023-05-08 00:33:10', 'ya', '2023-04-11 14:05:11', '2023-04-11 18:45:42', NULL);
INSERT INTO `transaksi` VALUES (6, '4', '1', 'LXBS3', '2023-04-15', 'DIBATALKAN', 'BELUM', NULL, '2023-05-27 00:33:10', 'oke', '2023-04-11 14:05:39', '2023-04-11 14:46:05', NULL);
INSERT INTO `transaksi` VALUES (7, '6', '4', 'YWNKC', '2023-04-15', 'DIPROSES', 'SUDAH', '0b3dade2e28c303c7f0d3f0e985b7df3.jpg', '2023-05-27 00:33:10', 'contoh catatan ', '2023-04-11 18:57:17', '2023-04-11 19:02:26', NULL);
INSERT INTO `transaksi` VALUES (8, '1', NULL, 'Q6D1F', '2023-05-24', 'SELESAI', 'BELUM', NULL, '2023-05-27 00:33:10', 'testing', '2023-05-24 09:30:02', '2023-05-26 01:13:17', NULL);
INSERT INTO `transaksi` VALUES (9, '1', NULL, 'QLH1B', '2023-05-26', 'SELESAI', 'BELUM', NULL, '2023-05-27 00:33:10', 'Mantap', '2023-05-26 00:30:02', '2023-05-26 01:13:09', NULL);
INSERT INTO `transaksi` VALUES (10, '1', NULL, 'UOFX6', '2023-05-28', 'BOOKING', 'BELUM', NULL, '2023-05-25 00:33:10', 'oke mantap', '2023-05-26 00:33:10', NULL, NULL);

-- ----------------------------
-- Table structure for transaksi_detail
-- ----------------------------
DROP TABLE IF EXISTS `transaksi_detail`;
CREATE TABLE `transaksi_detail`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_transaksi` int NULL DEFAULT NULL,
  `id_paket` int NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `jumlah` int NULL DEFAULT NULL,
  `harga` int NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of transaksi_detail
-- ----------------------------
INSERT INTO `transaksi_detail` VALUES (1, 1, 2, 'Deep Cleaning', 2, 200000, '2023-04-11 13:59:10', NULL, NULL);
INSERT INTO `transaksi_detail` VALUES (2, 2, 2, 'Deep Cleaning', 4, 200000, '2023-04-11 14:02:35', NULL, NULL);
INSERT INTO `transaksi_detail` VALUES (3, 3, 1, 'Fast Cleaning', 2, 100000, '2023-04-11 14:03:12', NULL, NULL);
INSERT INTO `transaksi_detail` VALUES (4, 4, 2, 'Deep Cleaning', 3, 200000, '2023-04-11 14:04:16', NULL, NULL);
INSERT INTO `transaksi_detail` VALUES (5, 5, 2, 'Deep Cleaning', 3, 200000, '2023-04-11 14:05:11', NULL, NULL);
INSERT INTO `transaksi_detail` VALUES (6, 6, 1, 'Fast Cleaning', 4, 100000, '2023-04-11 14:05:39', NULL, NULL);
INSERT INTO `transaksi_detail` VALUES (7, 7, 7, 'Uji Coba', 2, 67000, '2023-04-11 18:57:17', NULL, NULL);
INSERT INTO `transaksi_detail` VALUES (8, 8, 2, 'Deep Cleaning', 1, 200000, '2023-05-24 09:30:02', NULL, NULL);
INSERT INTO `transaksi_detail` VALUES (9, 9, 8, 'Premium Treatment', 1, 68000, '2023-05-26 00:30:02', NULL, NULL);
INSERT INTO `transaksi_detail` VALUES (10, 10, 8, 'Premium Treatment', 5, 68000, '2023-05-26 00:33:10', NULL, NULL);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL COMMENT 'ADMIN | USER',
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nohp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'USER', 'rafly.firdausy@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 'Rafli Firdausy Irawan', 'LAKI-LAKI', '085726096515', '2023-04-01 15:27:51', NULL, NULL);
INSERT INTO `user` VALUES (2, 'USER', 'senia@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 'Senia Trisna Saputri', 'LAKI-LAKI', '085726096515', '2023-04-01 15:40:05', NULL, NULL);
INSERT INTO `user` VALUES (3, 'ADMIN', 'tian@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 'Tians Admin', 'LAKI-LAKI', '085123456789', '2023-04-01 15:40:47', '2023-04-11 00:56:17', NULL);
INSERT INTO `user` VALUES (4, 'USER', 'rafly@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 'Rafli Firdausy IrawanX', 'PEREMPUAN', '082136116443', '2023-04-11 02:14:58', '2023-04-11 02:25:53', NULL);
INSERT INTO `user` VALUES (5, 'USER', 'raflyx@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 'asdasd', 'LAKI-LAKI', '324234', '2023-04-11 02:18:54', '2023-04-11 02:19:45', '2023-04-11 02:19:45');
INSERT INTO `user` VALUES (6, 'USER', 'rizki@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 'Rizki Ramadhan', 'LAKI-LAKI', '081392012345', '2023-04-11 18:49:10', NULL, NULL);

-- ----------------------------
-- View structure for v_grafik
-- ----------------------------
DROP VIEW IF EXISTS `v_grafik`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_grafik` AS select `v_transaksi`.`tanggal` AS `tanggal`,`v_transaksi`.`status_transaksi` AS `status_transaksi`,count(`v_transaksi`.`id`) AS `total_transaksi`,sum(`v_transaksi`.`total`) AS `total_rp` from `v_transaksi` group by `v_transaksi`.`tanggal`,`v_transaksi`.`status_transaksi` order by `v_transaksi`.`tanggal`;

-- ----------------------------
-- View structure for v_transaksi
-- ----------------------------
DROP VIEW IF EXISTS `v_transaksi`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_transaksi` AS select `transaksi`.`id` AS `id`,`transaksi`.`id_user` AS `id_user`,`user`.`nama` AS `nama_user`,`transaksi`.`id_bank` AS `id_bank`,`bank`.`bank` AS `nama_bank`,`transaksi`.`kode_transaksi` AS `kode_transaksi`,`transaksi`.`tanggal` AS `tanggal`,(case when ((`transaksi`.`status_transaksi` = 'BOOKING') and (`transaksi`.`batas_pembayaran` < now())) then 'EXPIRED' else `transaksi`.`status_transaksi` end) AS `status_transaksi`,`transaksi`.`status_bayar` AS `status_bayar`,`transaksi`.`bukti_bayar` AS `bukti_bayar`,`transaksi`.`keterangan` AS `keterangan`,`transaksi`.`created_at` AS `created_at`,`transaksi`.`updated_at` AS `updated_at`,`transaksi`.`deleted_at` AS `deleted_at`,`transaksi_detail`.`nama` AS `nama_paket`,`transaksi_detail`.`harga` AS `harga`,`transaksi`.`batas_pembayaran` AS `batas_pembayaran`,`transaksi_detail`.`jumlah` AS `jumlah`,(`transaksi_detail`.`harga` * `transaksi_detail`.`jumlah`) AS `total` from (((`transaksi` left join `user` on(((`user`.`id` = `transaksi`.`id_user`) and (`user`.`deleted_at` is null)))) left join `bank` on(((`bank`.`id` = `transaksi`.`id_bank`) and (`bank`.`deleted_at` is null)))) left join `transaksi_detail` on(((`transaksi_detail`.`id_transaksi` = `transaksi`.`id`) and (`transaksi_detail`.`deleted_at` is null))));

SET FOREIGN_KEY_CHECKS = 1;
