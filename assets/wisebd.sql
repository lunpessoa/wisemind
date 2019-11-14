-- MySQL dump 10.13  Distrib 5.7.26, for Win64 (x86_64)
--
-- Host: localhost    Database: wisemind
-- ------------------------------------------------------
-- Server version	5.7.26

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
  `Area` varchar(30) NOT NULL,
  `Num_Participantes` int(11) NOT NULL,
  `Data_Criacao` date NOT NULL,
  PRIMARY KEY (`id_Chat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat`
--

LOCK TABLES `chat` WRITE;
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
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
  `id_espc` int(11) NOT NULL,
  `Area` varchar(255) NOT NULL,
  `Profissao` varchar(255) NOT NULL,
  PRIMARY KEY (`id_espc`)
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
INSERT INTO `estudantes` VALUES (4,'Estudando',NULL,NULL,NULL,NULL,1);
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
  `Descricao` varchar(255) NOT NULL,
  `Tipo_Pagamento` varchar(60) NOT NULL,
  `Desconto` varchar(100) DEFAULT NULL,
  `Bandeira` varchar(30) DEFAULT NULL,
  `id_estuda` int(11) NOT NULL,
  `id_plano` int(11) NOT NULL,
  PRIMARY KEY (`id_pedido`),
  UNIQUE KEY `id_pedido` (`id_pedido`),
  KEY `pedido` (`id_estuda`),
  KEY `plano` (`id_plano`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planos`
--

LOCK TABLES `planos` WRITE;
/*!40000 ALTER TABLE `planos` DISABLE KEYS */;
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
  `id_especial` int(11) NOT NULL,
  PRIMARY KEY (`id_profissional`),
  UNIQUE KEY `id_vgs` (`id_vgs`),
  KEY `especializacao` (`id_especial`),
  KEY `chat` (`chat_presenca`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profissional`
--

LOCK TABLES `profissional` WRITE;
/*!40000 ALTER TABLE `profissional` DISABLE KEYS */;
INSERT INTO `profissional` VALUES (3,'dÃ¡ a bunda','NADA',NULL,NULL,32);
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Luan','Pessoa','2002-02-10','luan@gmail.com','5629a37edd0faffb55ed645dd205d548ca1d3d79','11996412897','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,3),(2,'Iago','Pastori','1993-10-06','iago123@gmail.com','63dc0d1bbe35c5c9c93f6763e464d437f65d4cc9','11 999994444','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),(3,'Luan','Pessoa','2002-02-10','luan2@gmail.com','4bc70743717959d7df4045f6b5f39f16e489b62b','11996412897','','Santa Isabel','Av Prefeito JoÃ£o Pires Filho','SP',122,'07500000','13 de Maio','51034539833',2),(4,'Luan','Pessoa','2002-02-10','joana123@gmail.com','d36c05a31b0d027c7eb61204257b44da5003fe47','11111111111','img/perfil/4.png',NULL,NULL,NULL,NULL,NULL,NULL,'51034539833',1);
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

-- Dump completed on 2019-11-13 21:22:01
