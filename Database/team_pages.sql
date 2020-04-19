DROP TABLE IF EXISTS `website_extra_ranks`;
CREATE TABLE `website_extra_ranks`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rank_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `rank_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

ALTER TABLE users ADD extra_rank int(2) NULL DEFAULT NULL;
