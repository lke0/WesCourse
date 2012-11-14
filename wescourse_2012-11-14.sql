# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.25)
# Database: wescourse
# Generation Time: 2012-11-14 15:49:05 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table student
# ------------------------------------------------------------

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `studentId` int(8) NOT NULL AUTO_INCREMENT,
  `year` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`studentId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;

INSERT INTO `student` (`studentId`, `year`)
VALUES
	(1,0);

/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table student_course
# ------------------------------------------------------------

DROP TABLE IF EXISTS `student_course`;

CREATE TABLE `student_course` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(6) NOT NULL,
  `term` int(4) NOT NULL,
  `student_id` int(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

LOCK TABLES `student_course` WRITE;
/*!40000 ALTER TABLE `student_course` DISABLE KEYS */;

INSERT INTO `student_course` (`id`, `course_id`, `term`, `student_id`)
VALUES
	(1,9188,1099,1),
	(2,2034,1099,1),
	(3,2895,1099,1),
	(4,8303,1099,1),
	(5,3089,1099,1),
	(6,3093,1099,1),
	(7,3328,1101,1),
	(8,2898,1101,1),
	(9,5856,1101,1),
	(10,8919,1101,1),
	(11,10843,1101,1),
	(12,5384,1101,1),
	(13,1524,1109,1),
	(14,1753,1109,1),
	(15,9816,1109,1),
	(16,1989,1109,1),
	(17,2908,1109,1),
	(18,1754,1111,1),
	(19,1990,1111,1),
	(20,1991,1111,1),
	(21,2914,1111,1),
	(22,9816,1111,1),
	(23,3348,1129,1),
	(24,13558,1129,1),
	(25,3638,1129,1),
	(26,1983,1129,1),
	(27,8303,1129,1),
	(28,13558,1131,1);

/*!40000 ALTER TABLE `student_course` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table student_major
# ------------------------------------------------------------

DROP TABLE IF EXISTS `student_major`;

CREATE TABLE `student_major` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `major_id` int(4) NOT NULL,
  `student_id` int(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

LOCK TABLES `student_major` WRITE;
/*!40000 ALTER TABLE `student_major` DISABLE KEYS */;

INSERT INTO `student_major` (`id`, `major_id`, `student_id`)
VALUES
	(1,2,1),
	(2,1,1),
	(3,0,1);

/*!40000 ALTER TABLE `student_major` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
