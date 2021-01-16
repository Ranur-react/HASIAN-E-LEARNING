/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.26-MariaDB : Database - db_elearning
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_elearning` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_elearning`;

/*Table structure for table `tblpelajar` */

DROP TABLE IF EXISTS `tblpelajar`;

CREATE TABLE `tblpelajar` (
  `nisn` char(10) NOT NULL,
  `namasiswa` varchar(30) DEFAULT NULL,
  `kelas` varchar(30) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nisn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblpelajar` */

insert  into `tblpelajar`(`nisn`,`namasiswa`,`kelas`,`alamat`,`email`) values 
('0024419375','Alifi Syahrin','XII.MIA-1','Komp. MAS KH. Ahmad Dahlan Kampung Setia','Alifi@gmail.com'),
('0027251013','Afifah Zahrah Nasution','XII.MIA-1','Komp. MAS KH. Ahmad Dahlan Kam','afifah@gmail.com');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `namauser` varchar(35) DEFAULT NULL,
  `username` varchar(35) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`iduser`,`namauser`,`username`,`password`) values 
(1,'Kurrota Akyun','admin','123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
