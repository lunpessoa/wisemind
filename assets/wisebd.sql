-- MySQL dump 10.13  Distrib 5.7.24, for Win64 (x86_64)
--
-- Host: localhost    Database: wisemind
-- ------------------------------------------------------
-- Server version	5.7.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `wisemind`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `wisemind` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `wisemind`;

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat` (
  `id_Chat` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(64) DEFAULT NULL,
  `Area` varchar(30) NOT NULL,
  `Num_Participantes` int(11) NOT NULL,
  `Data_Criacao` date NOT NULL,
  `id_profissional` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_Chat`),
  KEY `id_profissional` (`id_profissional`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat`
--

LOCK TABLES `chat` WRITE;
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
INSERT INTO `chat` VALUES (1,'Luan da aula para ensino MÃ©dio','Festa',0,'2019-11-16',8),(2,'eita','eita nois',0,'2019-11-16',8),(3,'Jorge ta dando bote','Cristino',0,'2019-11-16',8);
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `date_login`
--

DROP TABLE IF EXISTS `date_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `date_login` (
  `pri_login` date NOT NULL,
  `ultimo_login` date NOT NULL,
  `id_usu` int(11) NOT NULL,
  PRIMARY KEY (`id_usu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `date_login`
--

LOCK TABLES `date_login` WRITE;
/*!40000 ALTER TABLE `date_login` DISABLE KEYS */;
/*!40000 ALTER TABLE `date_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `Nome_Fantasia` varchar(150) NOT NULL,
  `CNPJ` int(14) NOT NULL,
  `Razao_Social` varchar(255) NOT NULL,
  `Area_de_Atuacao` varchar(100) NOT NULL,
  `Estado` varchar(2) NOT NULL,
  `CEP` varchar(9) NOT NULL,
  `Cidade` varchar(100) DEFAULT NULL,
  `Bairro` varchar(100) DEFAULT NULL,
  `Rua` varchar(150) DEFAULT NULL,
  `Cell` varchar(12) NOT NULL,
  `Tell` varchar(11) NOT NULL,
  PRIMARY KEY (`id_empresa`),
  UNIQUE KEY `id_empresa` (`id_empresa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `especializacao`
--

DROP TABLE IF EXISTS `especializacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `especializacao` (
  `id_espc` int(11) NOT NULL AUTO_INCREMENT,
  `Area` varchar(255) NOT NULL,
  `Profissao` varchar(255) NOT NULL,
  `id_prof` int(11) NOT NULL,
  PRIMARY KEY (`id_espc`),
  KEY `fk_EspecProf` (`id_prof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `especializacao`
--

LOCK TABLES `especializacao` WRITE;
/*!40000 ALTER TABLE `especializacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `especializacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudantes`
--

DROP TABLE IF EXISTS `estudantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudantes` (
  `id_estudante` int(11) NOT NULL,
  `Situacao` varchar(255) NOT NULL,
  `Tendencia_de_area` varchar(255) DEFAULT NULL,
  `Skills` varchar(255) DEFAULT NULL,
  `chat_presenca` int(11) DEFAULT NULL,
  `id_vgs` int(11) DEFAULT NULL,
  `Plano` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_estudante`),
  UNIQUE KEY `id_vgs` (`id_vgs`),
  KEY `chat` (`chat_presenca`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudantes`
--

LOCK TABLES `estudantes` WRITE;
/*!40000 ALTER TABLE `estudantes` DISABLE KEYS */;
INSERT INTO `estudantes` VALUES (7,'Estudando',NULL,NULL,NULL,NULL,0),(9,'Estudando',NULL,NULL,NULL,NULL,0);
/*!40000 ALTER TABLE `estudantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moderador`
--

DROP TABLE IF EXISTS `moderador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moderador` (
  `id_moderar` int(11) NOT NULL AUTO_INCREMENT,
  `privilegio` varchar(30) NOT NULL,
  PRIMARY KEY (`id_moderar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moderador`
--

LOCK TABLES `moderador` WRITE;
/*!40000 ALTER TABLE `moderador` DISABLE KEYS */;
/*!40000 ALTER TABLE `moderador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `Data_Compra` date NOT NULL,
  `Data_Validade` date NOT NULL,
  `Renovacao` enum('S','N') NOT NULL,
  `id_estuda` int(11) NOT NULL,
  `id_plano` int(11) NOT NULL,
  PRIMARY KEY (`id_pedido`),
  UNIQUE KEY `id_pedido` (`id_pedido`),
  KEY `pedido` (`id_estuda`),
  KEY `plano` (`id_plano`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` VALUES (1,'2019-11-15','2019-11-20','N',2,1);
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planos`
--

DROP TABLE IF EXISTS `planos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planos` (
  `id_plano` int(11) NOT NULL AUTO_INCREMENT,
  `Plano` varchar(30) NOT NULL,
  `Preco` float NOT NULL,
  PRIMARY KEY (`id_plano`),
  UNIQUE KEY `id_plano` (`id_plano`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planos`
--

LOCK TABLES `planos` WRITE;
/*!40000 ALTER TABLE `planos` DISABLE KEYS */;
INSERT INTO `planos` VALUES (1,'Wiser',39.9);
/*!40000 ALTER TABLE `planos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profissional`
--

DROP TABLE IF EXISTS `profissional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profissional` (
  `id_profissional` int(11) NOT NULL,
  `experiencia` varchar(255) DEFAULT NULL,
  `certificado` varchar(255) NOT NULL,
  `chat_presenca` int(11) DEFAULT NULL,
  `id_vgs` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_profissional`),
  UNIQUE KEY `id_vgs` (`id_vgs`),
  KEY `chat` (`chat_presenca`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profissional`
--

LOCK TABLES `profissional` WRITE;
/*!40000 ALTER TABLE `profissional` DISABLE KEYS */;
INSERT INTO `profissional` VALUES (1,'123','123',NULL,NULL),(8,'123','123',NULL,NULL);
/*!40000 ALTER TABLE `profissional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(25) NOT NULL,
  `Sobrenome` varchar(100) NOT NULL,
  `Data_Nasc` date NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Senha` varchar(40) NOT NULL,
  `Cell` varchar(12) NOT NULL,
  `perfil_img` varchar(64) NOT NULL,
  `Cidade` varchar(60) DEFAULT NULL,
  `Rua` varchar(100) DEFAULT NULL,
  `Estado` varchar(2) DEFAULT NULL,
  `Numero` int(11) DEFAULT NULL,
  `CEP` varchar(9) DEFAULT NULL,
  `Bairro` varchar(100) DEFAULT NULL,
  `CPF` varchar(12) DEFAULT NULL,
  `id_privilegio` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `id_usuario` (`id_usuario`),
  KEY `privilegio` (`id_privilegio`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Antonio','Souza','2002-05-17','123','601f1889667efaebb33b8c12572835da3f027f78','11111111111','img/perfil/sem-foto.png','Santa Isabel','Rual Leste','SP',142,'07500000','Vila Gumercindo','47779274829',3),(9,'SELMA MARIA','GOMES','2000-05-17','159','454c7bda62ab8f9b4ff994d78058bb0316495361','11111111111','img/perfil/sem-foto.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),(8,'Jacques','Rousseau','1750-05-17','789','1a2bf0adea0f4b41ed9f7a02d31fa535d5743f3e','11111111111','img/perfil/sem-foto.png','Santa Isabel','Rua pescoÃ§o','SP',1500,'07500000','FranÃ§a','11111111111',2),(7,'111','111','2000-11-11','111','3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d','11111111111','img/perfil/sem-foto.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vagas_emprego`
--

DROP TABLE IF EXISTS `vagas_emprego`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vagas_emprego` (
  `id_vgs` int(11) NOT NULL AUTO_INCREMENT,
  `Formacao` varchar(255) NOT NULL,
  `Descricao` varchar(255) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `atribuicoes` varchar(100) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  PRIMARY KEY (`id_vgs`),
  UNIQUE KEY `id_vgs` (`id_vgs`),
  KEY `empresa` (`id_empresa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vagas_emprego`
--

LOCK TABLES `vagas_emprego` WRITE;
/*!40000 ALTER TABLE `vagas_emprego` DISABLE KEYS */;
/*!40000 ALTER TABLE `vagas_emprego` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-16 22:42:26
