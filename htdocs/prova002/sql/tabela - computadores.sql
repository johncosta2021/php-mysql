/*
SQLyog Community
MySQL - 5.1.41 : Database - avaliacao28102021
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `computadores` */

DROP TABLE IF EXISTS `computadores`;

CREATE TABLE `computadores` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `marca` varchar(15) DEFAULT NULL,
  `preco` int(6) NOT NULL,
  `processador` varchar(10) NOT NULL,
  `hd` int(10) NOT NULL,
  `ram` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `computadores` */

insert  into `computadores`(`id`,`marca`,`preco`,`processador`,`hd`,`ram`) values 
(1,'asus',3000,'i3',500,4),
(3,'Nvidia',3000,'pentium',500,4),
(4,'Nvidia',4000,'i5',256,16),
(5,'samsung',5000,'i3',500,8),
(6,'lenovo',4000,'celeron',250,4),
(9,'Notebook Dell A',11999,'core i7',512,16),
(8,'Lenovo IdeaPad ',6500,'core i7',512,16);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
