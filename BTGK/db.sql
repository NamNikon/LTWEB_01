/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_idx` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `password`, `name`, `avatar`, `email`) VALUES
(5, 'nam', '$2y$10$RigurO/sAsZjI3VjUGiyx.NgTFtWzdqXXNZ9GiwmhTsQeArAf1Cgq', 'nam', 'photo-1515734674582-29010bb37906.png', NULL);
INSERT INTO `users` (`id`, `username`, `password`, `name`, `avatar`, `email`) VALUES
(25, 'Nam Nikon', '$2y$10$RigurO/sAsZjI3VjUGiyx.NgTFtWzdqXXNZ9GiwmhTsQeArAf1Cgq', 'Nguyễn Trung Nam', NULL, NULL);
INSERT INTO `users` (`id`, `username`, `password`, `name`, `avatar`, `email`) VALUES
(35, 'usrtest', '$2y$10$vpp89irFIsTCkdINZFUKVuBUi1y2UsOGnSnV8AGARXCQfMqwMHeGi', 'test', NULL, NULL);
INSERT INTO `users` (`id`, `username`, `password`, `name`, `avatar`, `email`) VALUES
(65, 'nam123', '$2y$10$RigurO/sAsZjI3VjUGiyx.NgTFtWzdqXXNZ9GiwmhTsQeArAf1Cgq', 'nam123', '44151461._SX318_.jpg', NULL),
(75, 'namnikon', '$2y$10$lhZinV9QtVetaXijO7zlnOHBWuzLryhjMyzo4Lpbe9LXvVAOmLxxm', 'nguyễn trung nam', NULL, NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;