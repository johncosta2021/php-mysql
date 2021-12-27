/*
SQLyog Community
MySQL - 5.1.41 : Database - avaliacao23112021
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `disciplinas` */

DROP TABLE IF EXISTS `disciplinas`;

CREATE TABLE `disciplinas` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `carga` int(4) NOT NULL,
  `professor` varchar(30) NOT NULL,
  `codigo` int(30) NOT NULL,
  `id_periodo` int(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `disciplinas` */

insert  into `disciplinas`(`id`,`nome`,`carga`,`professor`,`codigo`,`id_periodo`) values 
(1,'redes II',60,'valdemir',47,2),
(3,'bancos de dados',60,'franklhes',456,2),
(5,'Java - POO',60,'Carlos sá',489,2),
(6,'Programação web I',60,'carlos sá',461,3),
(7,'S.O',60,'valdemir',4569,3),
(8,'Engenharia de Software',60,'franklhes santos',1478,3),
(9,'Programação web II',60,'carlos sá',7456,4);

/*Table structure for table `periodos` */

DROP TABLE IF EXISTS `periodos`;

CREATE TABLE `periodos` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `data_de_inicio` date NOT NULL,
  `data_de_termino` date NOT NULL,
  `situacao` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `periodos` */

insert  into `periodos`(`id`,`nome`,`data_de_inicio`,`data_de_termino`,`situacao`) values 
(1,'periodo 1','2020-03-03','2020-07-16','inativo'),
(2,'periodo 2','2020-08-02','2020-12-08','inativo'),
(3,'periodo 3','2021-03-20','2021-06-05','inativo'),
(4,'periodo 4','2021-06-03','2021-12-12','ativo');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
