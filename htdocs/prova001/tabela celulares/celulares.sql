/*
SQLyog Community
MySQL - 5.1.41 : Database - cadastro_2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `noticias` */

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(60) NOT NULL,
  `subtitulo` varchar(20) DEFAULT NULL,
  `conteudo` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*Data for the table `noticias` */

insert  into `noticias`(`id`,`titulo`,`subtitulo`,`conteudo`) values (1,'O que Ã© Teste de regressÃ£o?',NULL,'            O teste de regressÃ£o Ã© uma tÃ©cnica do teste de software que consiste na aplicaÃ§Ã£o de versÃµes mais recente do software, para garantir que nÃ£o surgiram novos defeitos em componentes jÃ¡ analisados. Se, ao juntar o novo componente ou as suas alteraÃ§Ãµes com os componentes restantes do sistema surgirem novos defeitos em componentes inalterados, entÃ£o considera-se que o sistema regrediu.\r\n\r\nMuitas vezes sÃ£o usadas ferramentas especÃ­ficas para o teste de regressÃ£o, chamadas de ferramentas de automaÃ§Ã£o. Elas conseguem um resultado mais exato do teste executando exatamente os passos seguidos para o teste das primeiras versÃµes jÃ¡ que elas permitem a gravaÃ§Ã£o do teste. WikipÃ©dia');
insert  into `noticias`(`id`,`titulo`,`subtitulo`,`conteudo`) values (18,'tipo blob',NULL,'Como vocÃª deve saber existe uma sÃ©rie de tipos de campos definidos no MySQL: inteiros, texto regular, nÃºmeros reais, etc. A diferenÃ§a principal entre estes campos (tipos primÃ¡rios) e o blob Ã© principalmente a quantidade de informaÃ§Ã£o que se consegue armazenar.\r\n\r\nUm blob Ã© um campo binÃ¡rio grande que pode uma gama variada de dados. Os quatro tipos blob existentes no MySQL sÃ£o: TINYBLOB, BLOB, MEDIUMBLOB, e LONGBLOB. Estes tipos diferem apenas no tamanho mÃ¡ximo de bytes que podem armazenar. Ã‰ neste tipo de campo que armazenamos imagens no MySQL.');
insert  into `noticias`(`id`,`titulo`,`subtitulo`,`conteudo`) values (19,'Testes de RegressÃ£o! ','Como, onde e quando ','Quem nunca atualizou a versÃ£o de determinado sistema e verificou que algo que funcionava corretamente deixou de funcionar?\r\n\r\nEsta Ã© uma situaÃ§Ã£o realmente incÃ´moda e para evitar que isso aconteÃ§a existe uma tÃ©cnica bastante utilizada tanto em contextos tradicionais quanto Ã¡geis de desenvolvimento de produtos de software. SÃ£o os chamados Testes de RegressÃ£o.\r\n\r\nSegundo Pressman, uma das autoridades mais reconhecidas na engenharia de software, Teste de RegressÃ£o Ã© a reexecuÃ§Ã£o de algum subconjunto de testes que jÃ¡ foram conduzidos para garantir que as modificaÃ§Ãµes nÃ£o propagaram efeitos colaterais indesejÃ¡veis.');
insert  into `noticias`(`id`,`titulo`,`subtitulo`,`conteudo`) values (20,'O que é teste de caixa branca?','','É Possui esse nome porque o testador tem acesso à estrutura interna da aplicação. Logo, seu foco é garantir que os componentes do software estejam concisos.\r\n\r\nNesse sentido, esse tipo de teste também é conhecido como teste estrutural ou caixa de vidro, já que busca garantir a qualidade na implementação do sistema. Logo, ele tem por objetivo validar, apenas, a lógica do produto.');
insert  into `noticias`(`id`,`titulo`,`subtitulo`,`conteudo`) values (21,'nomé','','john da costa gonçalves');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
