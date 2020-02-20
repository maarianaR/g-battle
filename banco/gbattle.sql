-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.25a
-- Versão do PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `gbattle`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `nome_cl` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `data` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`nome_cl`, `sobrenome`, `data`, `email`, `cpf`, `id`) VALUES
('kleber', 'monte', '12/02/1994', 'kleber.monte@hotmail.com', '098.765.432-11', 6),
('teste', 'testando', '10/12/1988', 'teste@javascript.com', '984.985.984-98', 7),
('Ot?vio', 'Sales', '02/02/1996', 'otavio@php.com', '885.774.885-98', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE IF NOT EXISTS `endereco` (
  `rua` varchar(80) NOT NULL,
  `cep` varchar(11) NOT NULL,
  `num` varchar(10) NOT NULL,
  `complemento` varchar(40) DEFAULT NULL,
  `bairro` varchar(60) NOT NULL,
  `cidade` varchar(80) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`rua`, `cep`, `num`, `complemento`, `bairro`, `cidade`, `uf`, `id`) VALUES
('alguma', '51.350-120', '06', '', 'Ipsep', 'Recife', 'PE', 6),
('alguma', '38.874-878', '07', '', 'algum', 'recife', 'PE', 7),
('dos lobos', '39.849-859', '06', '', 'asdf', 'asdf', 'PE', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`email`, `senha`, `id`) VALUES
('kleber.monte@hotmail.com', '202cb962ac59075b964b07152d234b70', 6),
('teste@javascript.com', '01cfcd4f6b8770febfb40cb906715822', 7),
('otavio@php.com', '81dc9bdb52d04dc20036dbd8313ed055', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `nome_prod` varchar(200) NOT NULL,
  `preco_prod` decimal(10,2) NOT NULL,
  `tipo` varchar(1) NOT NULL,
  `imagem_prod` varchar(255) NOT NULL,
  `cod_prod` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `console` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_prod`),
  UNIQUE KEY `cod_prod` (`cod_prod`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`nome_prod`, `preco_prod`, `tipo`, `imagem_prod`, `cod_prod`, `console`) VALUES
('PC  MOUSE PAD ', 125.10, 'A', 'imagens/pc-acessorio-1.JPG', 1, 'PC'),
('PC  ASSASSINS CREED', 89.91, 'J', 'imagens/pc-jogos-1.JPG', 2, 'PC'),
('PC THE SIMS MEDIEVAL ', 59.90, 'J', 'imagens/pc-jogos-2.JPG', 3, 'PC'),
('PC  SPLIT SECOND', 43.90, 'J', 'imagens/pc-jogos-3.JPG', 4, 'PC'),
('PC BATTLEFILD', 69.90, 'J', 'imagens/pc-jogos-4.JPG', 5, 'PC'),
('PC THE SIMS 3 GERACOES ', 53.90, 'J', 'imagens/pc-jogos-5.JPG', 6, 'PC'),
('PC - FIFA MANAGER 12', 89.90, 'J', 'imagens/pc-jogos-6.JPG', 7, 'PC'),
('PC  CONTROLE USB ', 26.91, 'A', 'imagens/pc-acessorio-2.JPG', 8, 'PC'),
('PC  FONE DE OUVIDO STEELSERIES SIBERIA RED V2 FULL', 199.50, 'A', 'imagens/pc-acessorio-3.JPG', 9, 'PC'),
('PC VOLANTE RGT FORCE FEEDBACK CLUTCH RACING WHEEL', 535.50, 'A', 'imagens/pc-acessorio-4.JPG', 10, 'PC'),
('PC CABO HDMI', 26.91, 'A', 'imagens/pc-acessorio-5.JPG', 11, 'PC'),
('PC FERRARI MOTORS GAMEPAD F430', 179.10, 'A', 'imagens/pc-acessorio-6.JPG', 12, 'PC'),
('PS2 PRO EVOLUTION 2012', 89.91, 'J', 'imagens/play2-jogos-1.JPG', 13, 'PS2'),
('PS2 VIEWTIFUL JOE', 59.60, 'J', 'imagens/play2-jogos-2.JPG', 14, 'PS2'),
('PS2 RESIDENT EVIL CODE: VERONICA', 49.90, 'J', 'imagens/play2-jogos-3.JPG', 15, 'PS2'),
('PS2 GUITAR HERO 5', 29.99, 'J', 'imagens/play2-jogos-4.JPG', 16, 'PS2'),
('PS2 OF FIGHTING ANTHOLOGY', 38.00, 'J', 'imagens/play2-jogos-5.JPG', 17, 'PS2'),
('PS2 DRIV3R', 29.90, 'J', 'imagens/play2-jogos-6.JPG', 18, 'PS2'),
('PS2 VOLANTE RALLY VIBRATION', 218.00, 'A', 'imagens/play2-acessorios-1.JPG', 19, 'PS2'),
('PS2 CONTROLE DUAL SHOCK 2', 53.10, 'A', 'imagens/play2-acessorios-2.JPG', 20, 'PS2'),
('PS2 MINI COOLER', 18.00, 'A', 'imagens/play2-acessorios-3.JPG', 21, 'PS2'),
('PS2 GUITAR HERO 5 BUNDLE', 269.50, 'A', 'imagens/play2-acessorios-4.JPG', 22, 'PS2'),
('PS2 CONTROLE SEM FIO GOLD PLAYCONTROL', 93.99, 'A', 'imagens/play2-acessorios-5.JPG', 23, 'PS2'),
('PS2 CABO DE AUDIO E VIDEO', 25.00, 'A', 'imagens/play2-acessorios-6.JPG', 24, 'PS2'),
('PS2 SLIM', 386.10, 'C', 'imagens/play2-consoles-1.JPG', 25, 'PS2'),
('PS2 SLIM SILVER', 398.20, 'C', 'imagens/play2-consoles-2.JPG', 26, 'PS2'),
('PS3 DRAGONS DOGMA', 179.80, 'J', 'imagens/play3-jogos-1.JPG', 27, 'PS3'),
('PS3 GRAN TURISMO 5 XL EDITION', 142.90, 'J', 'imagens/play3-jogos-2.JPEG', 28, 'PS3'),
('PS3 LONDON 2012', 179.90, 'J', 'imagens/play3-jogos-3.JPG', 29, 'PS3'),
('PS3 RESIDENT EVIL 6', 170.00, 'J', 'imagens/play3-jogos-4.JPG', 30, 'PS3'),
('PS3 PRO EVOLUTION SOCCER 2013', 150.95, 'J', 'imagens/play3-jogos-5.JPG', 31, 'PS3'),
('PS3 SPEC OPS: THE LINE', 177.90, 'J', 'imagens/play3-jogos-6.JPG', 32, 'PS3'),
('PS3 MOVE SHARPSHOOTER', 314.00, 'A', 'imagens/play3-acessorios-1.JPG', 33, 'PS3'),
('PS3 CARREGADOR MOVE', 196.05, 'A', 'imagens/play3-acessorios-2.JPG', 34, 'PS3'),
('PS3 HEADSET WIRELESS 7.1', 358.00, 'A', 'imagens/play3-acessorios-3.JPG', 35, 'PS3'),
('PS3 MOVE BUNDLE', 270.35, 'A', 'imagens/play3-acessorios-4.JPG', 36, 'PS3'),
('PS3 WIRELESS KEYPAD CLAVIER SANS FIL', 195.99, 'A', 'imagens/play3-acessorios-5.JPG', 38, 'PS3'),
('PS3 CONTROL MOVE', 176.99, 'A', 'imagens/play3-acessorios-6.JPG', 39, 'PS3'),
('PS3 SLIM 160GB', 799.90, 'C', 'imagens/play3-consoles-1.JPG', 40, 'PS3'),
('PS3 SLIM 320GB', 899.99, 'C', 'imagens/play3-consoles-2.JPG', 41, 'PS3'),
('PS3 SLIM 320GB + KIT PS3 MOVE', 999.99, 'C', 'imagens/play3-consoles-3.JPG', 42, 'PS3'),
('PS3 SLIM 160GB + 2 CONTROLES DUAL SHOCK 3', 999.99, 'C', 'imagens/play3-consoles-4.JPG', 43, 'PS3'),
('XBOX 360 SPIDER-MAN THE AMAZING', 179.90, 'J', 'imagens/xbox-jogos-1.JPG', 44, 'XBOX 360'),
('XBOX 360 GATO DE BOTAS', 134.90, 'J', 'imagens/xbox-jogos-2.JPG', 45, 'XBOX 360'),
('XBOX 360 KINECT STAR WARS', 89.00, 'J', 'imagens/xbox-jogos-3.JPG', 46, 'XBOX 360'),
('XBOX 360 SILENT HILL DOWPOUR', 179.89, 'J', 'imagens/xbox-jogos-4.JPG', 47, 'XBOX 360'),
('XBOX 360 DRAGONS DOGMA', 169.90, 'J', 'imagens/xbox-jogos-5.JPG', 48, 'XBOX 360'),
('XBOX 360 SNIPER ELITE V2', 150.99, 'J', 'imagens/xbox-jogos-6.JPG', 49, 'XBOX 360'),
('XBOX 360 HEADSET CALL OF DUTY', 175.99, 'A', 'imagens/xbox-acessorios-1.JPG', 50, 'XBOX 360'),
('XBOX 360 HD 320GB SLIM', 259.90, 'A', 'imagens/xbox-acessorios-2.JPG', 51, 'XBOX 360'),
('XBOX 360 WIRELESS MICROFONE', 115.99, 'A', 'imagens/xbox-acessorios-3.JPG', 52, 'XBOX 360'),
('XBOX 360 FONTE PARA SLIM', 224.00, 'A', 'imagens/xbox-acessorios-4.JPG', 53, 'XBOX 360'),
('XBOX 360 LIVE 4500', 107.90, 'A', 'imagens/xbox-acessorios-5.JPG', 54, 'XBOX 360'),
('XBOX 360 KINECT', 359.90, 'A', 'imagens/xbox-acessorios-6.JPG', 55, 'XBOX 360'),
('XBOX 360 SLIM COM KINECT + 2 JOGOS', 1205.75, 'C', 'imagens/xbox-consoles-1.JPG', 56, 'XBOX 360'),
('XBOX 360 250GB SLIM KIT KINECT', 1169.90, 'C', 'imagens/xbox-consoles-2.JPG', 57, 'XBOX 360'),
(' XBOX SLIM 4GB ', 716.99, 'C', 'imagens/xbox-consoles-3.JPG', 58, 'XBOX 360'),
('XBOX 360 SLIM 4GB WITH KINECT', 989.00, 'C', 'imagens/xbox-consoles-4.JPG', 59, 'XBOX 360'),
('XBOX 360 250GB SLIM', 989.05, 'C', 'imagens/xbox-consoles-5.JPG', 60, 'XBOX 360'),
('WII MARIO GALXY', 62.90, 'J', 'imagens/wii-jogos-1.JPG', 61, 'WII'),
('WII  RESIDENT EVIL: THE DARKSIDE CHRONICLES', 161.90, 'J', 'imagens/wii-jogos-2.JPG', 62, 'WII'),
('WII NARUTO: CLASH OF NINJA REVOLUTION', 105.00, 'J', 'imagens/wii-jogos-3.JPG', 63, 'WII'),
('WII DONKEY KONG COUNTRY RETURNS', 152.90, 'J', 'imagens/wii-jogos-4.JPG', 64, 'WII'),
('WII BEN 10 GALACTIC RACING', 134.00, 'J', 'imagens/wii-jogos-5.JPG', 65, 'WII'),
('WII FIFA 2012', 89.90, 'J', 'imagens/wii-jogos-6.JPG', 66, 'WII'),
('WII KIT BATERIA RECARREGÁVEL', 71.90, 'A', 'imagens/wii-acessorios-1.JPG', 67, 'WII'),
('WII - CLASSIC CONTROLLER PRO BLACK', 116.00, 'A', 'imagens/wii-acessorios-2.BMP', 68, 'WII'),
('WII FIT WITH BALANCE BOARD', 329.00, 'A', 'imagens/wii-acessorios-3.JPG', 69, 'WII'),
('WII TONY HANK SHRED', 449.00, 'A', 'imagens/wii-acessorios-4.JPG', 70, 'WII'),
('WII DJ HERO 2 BUNDLE', 179.00, 'A', 'imagens/wii-acessorios-5.JPG', 71, 'WII'),
('WII FIT PLUS BUNDLE', 449.00, 'A', 'imagens/wii-acessorios-6.JPG', 72, 'WII'),
('WII  CONSOLE NINTENDO CORE BLACK ', 719.00, 'C', 'imagens/wii-consoles-1.JPG', 73, 'WII'),
('WII COM 1000 WII POINTS', 629.99, 'C', 'imagens/wii-consoles-2.JPG', 74, 'WII'),
('WII BLACK + MARIO STRIKERS', 719.90, 'C', 'imagens/wii-consoles-3.JPG', 75, 'WII'),
('WII BLACK + WII SPORT + WII MOTION PLUS', 719.00, 'C', 'imagens/wii-consoles-4.BMP', 76, 'WII');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
