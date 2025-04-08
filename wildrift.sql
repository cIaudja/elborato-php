
-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Feb 04, 2022 alle 10:27
-- Versione del server: 5.5.62-0ubuntu0.14.04.1
-- Versione PHP: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wildrift`
--
CREATE DATABASE IF NOT EXISTS `wildrift` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wildrift`;

-- --------------------------------------------------------

--
-- Struttura della tabella `campion`
--

CREATE TABLE IF NOT EXISTS `campione` (
  `codcamp` int(2) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) ,
  `foto` varchar(1000),
  `descrizione` varchar(100),
  `difficolta` int(1),
  PRIMARY KEY (`codcamp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dump dei dati per la tabella `campione`
--

INSERT INTO `campione` (`codcamp`, `nome`, `foto`, `descrizione`, `difficolta`) VALUES
(1, 'AHRI', 'Immagini/campione/ahri.jpg', 'la volpe a nove code', '2'),
(2, 'AKALI', 'Immagini/campione/akali.jpg',  'l\'\assasina solitaria', '3'),
(3, 'AKSHAN', 'Immagini/campione/akshan.jpg', 'la sentinella ribelle', '3'),
(4, 'ALISTAR', 'Immagini/campione/alistar.jpg', 'il minotauro', '1'),
(5, 'AMUMU', 'Immagini/campione/amumu.jpg', 'la mummia triste', '1'),
(6, 'ANNIE', 'Immagini/campione/annie.jpg', 'la bambina oscura', '1'),
(7, 'ASHE', 'Immagini/campione/ashe.jpg', 'l\'\arcere dei ghiacci', '1'),
(8, 'AURELION SOL', 'Immagini/campione/aurelionsol.jpg', 'il forgiatore di stelle', '3'),
(9, 'BLITZCRANK', 'Immagini/campione/blitzcrank.jpg', 'il grande golem a vapore', '1'),
(10, 'BRAND', 'Immagini/campione/brand.jpg', 'la vendetta ardente', '1'),
(11, 'BRAUM', 'Immagini/campione/braum.jpg', 'il cuore del Freljord', '2'),
(12, 'CAITLYN', 'Immagini/campione/caitlyn.jpg', 'lo sceriffo di Piltover', '1'),
(13, 'CAMILLE', 'Immagini/campione/camille.jpg', 'l\'\ombra d\'\acciaio', '3'),
(14, 'CORKI', 'Immagini/campione/corki.jpg', 'il bombardiere spericolato', '2'),
(15, 'DARIUS', 'Immagini/campione/darius.jpg', 'la mano di Noxus', '2'),
(16, 'DIANA', 'Immagini/campione/diana.jpg', 'il disprezzo della Luna', '1'),
(17, 'DR. MUNDO', 'Immagini/campione/drmundo.jpg', 'il folle di Zaun', '1'),
(18, 'DRAVEN', 'Immagini/campione/draven.jpg', 'il glorioso carnefice', '3'),
(19, 'EVELYNN', 'Immagini/campione/evelynn.jpg', 'l\'\abbraccio agonizzante', '2'),
(20, 'EZREAL', 'Immagini/campione/ezreal.jpg', 'il prodigo esploratore', '2'),
(21, 'FIORA', 'Immagini/campione/fiora.jpg', 'la magnifica duellante', '3'),
(22, 'FIZZ', 'Immagini/campione/fizz.jpg', 'il prestigiatore delle maree', '2'),
(23, 'GALIO', 'Immagini/campione/galio.jpg', 'il colosso', '2'),
(24, 'GAREN', 'Immagini/campione/garen.jpg', 'la potenza di Demacia', '1'),
(25, 'GRAGAS', 'Immagini/campione/gragas.jpg', 'il provocatore delle masse', '2'),
(26, 'GRAVES', 'Immagini/campione/graves.jpg', 'il fuorilegge', '2'),
(27, 'IRELIA', 'Immagini/campione/irelia.jpg', 'la danzatrice delle lame', '3'),
(28, 'JANNA', 'Immagini/campione/janna.jpg', 'la furia della tempesta', '1'),
(29, 'JARVAN IV', 'Immagini/campione/jarvaniv.jpg', 'l\'\esempio di Demacia', '1'),
(30, 'JAX', 'Immagini/campione/jax.jpg', 'Gran maestro d\'\armi', '2'),
(31, 'JAYCE', 'Immagini/campione/jayce.jpg', 'il difensore del domani', '3'),
(32, 'JHIN', 'Immagini/campione/jhin.jpg', 'il virtuoso', '2'),
(33, 'JINX', 'Immagini/campione/jinx.jpg', 'la mina vagante', '2'),
(34, 'KAI\'\SA', 'Immagini/campione/kaisa.jpg', 'la figlia del Vuoto', '2'),
(35, 'KARMA', 'Immagini/campione/karma.jpg', 'l\'\illuminata', '3'),
(36, 'KATARINA', 'Immagini/campione/katarina.jpg', 'la lama sinistra', '3'),
(37, 'KAYLE', 'Immagini/campione/kayle.jpg', 'la Virtuosa', '3'),
(38, 'KENNEN', 'Immagini/campione/kennen.jpg', 'il cuore della tempesta', '2'),
(39, 'KHA\'\ZIX', 'Immagini/campione/khazix.jpg', 'il razziatore del Vuoto', '2'),
(40, 'LEONA', 'Immagini/campione/leona.jpg', '\l\'alba raggiante', '1'),
(41, 'LEE SIN', 'Immagini/campione/leesin.jpg', 'il monaco cieco', '2'),
(42, 'LUCIAN', 'Immagini/campione/lucian.jpg', 'il purificatore', '3'),
(43, 'LULU', 'Immagini/campione/lulu.jpg', 'la sacerdotessa delle fate', '2'),
(44, 'LUX', 'Immagini/campione/lux.jpg', 'la signora della luminosità', '1'),
(45, 'MALPHITE', 'Immagini/campione/malphite.jpg', 'la scheggia del monolite', '1'),
(46, 'MASTER YI', 'Immagini/campione/masteryi.jpg', 'lo spadaccino Wuju', '1'),
(47, 'MISS FORTUNE', 'Immagini/campione/missfortune.jpg', 'la cacciatrice di taglie', '1'),
(48, 'MORGANA', 'Immagini/campione/morgana.jpg', 'la Caduta', '1'),
(49, 'NAMI', 'Immagini/campione/nami.jpg', 'lo spirito delle maree', '2'),
(50, 'NASUS', 'Immagini/campione/nasus.jpg', 'il custode delle dune', '1'),
(51, 'NUNU E WILLUMP', 'Immagini/campione/nunu.jpg', 'il bambino e lo yeti', '3'),
(52, 'OLAF', 'Immagini/campione/olaf.jpg', 'il berserker', '2'),
(53, 'ORIANNA', 'Immagini/campione/orianna.jpg', 'la signora degli ingranaggi', '2'),
(54, 'PANTHEON', 'Immagini/campione/pantheon.jpg', 'la lancia indistruttibile', '1'),
(55, 'RAKAN', 'Immagini/campione/rakan.jpg', 'l\'\ammaliatore', '2'),
(56, 'RAMMUS', 'Immagini/campione/rammus.jpg', 'l\'\arma-dillo', '1'),
(57, 'RENEKTON', 'Immagini/campione/renekton.jpg', 'il macellaio delle dune', '3'),
(58, 'RENGAR', 'Immagini/campione/rengar.jpg', 'il cacciatore orgoglioso', '3'),
(59, 'RIVEN', 'Immagini/campione/riven.jpg', 'l\'\esiliata', '3'),
(60, 'SENNA', 'Immagini/campione/senna.jpg', 'la redentrice', '3'),
(61, 'SERAPHINE', 'Immagini/campione/seraphine.jpg', 'la cantante sognatrice', '1'),
(62, 'SETT', 'Immagini/campione/sett.jpg', 'il Boss', '1'),
(63, 'SHEN', 'Immagini/campione/shen.jpg', 'l\'\occhio del crepuscolo', '3'),
(64, 'SHYVANA', 'Immagini/campione/shyvana.jpg', 'il mezzo-drago', '1'),
(65, 'SINGED', 'Immagini/campione/singed.jpg', 'il folle chimico', '2'),
(66, 'SONA', 'Immagini/campione/sona.jpg', 'maestra delle corde', '1'),
(67, 'SORAKA', 'Immagini/campione/soraka.jpg', 'la figlia delle stelle', '1'),
(68, 'TEEMO', 'Immagini/campione/teemo.jpg', 'il rapido scout', '1'),
(69, 'THRESH', 'Immagini/campione/thresh.jpg', 'il carceriere', '3'),
(70, 'TRISTANA', 'Immagini/campione/tristana.jpg', 'l\'\artigliere degli yordle', '1'),
(71, 'TRYNDAMERE', 'Immagini/campione/tryndamere.jpg', 'il re barbaro', '1'),
(72, 'TWISTED FATE', 'Immagini/campione/twistedfate.jpg', 'il maestro di carte', '2'),
(73, 'VARUS', 'Immagini/campione/varus.jpg', 'la freccia del castigo', '2'),
(74, 'VAYNE', 'Immagini/campione/vayne.jpg', 'la cacciatrice notturna', '2'),
(75, 'VEIGAR', 'Immagini/campione/veigar.jpg', 'il piccolo genio del male', '1'),
(76, 'VI', 'Immagini/campione/vi.jpg', 'la legge di Piltover', '1'),
(77, 'WUKONG', 'Immagini/campione/wukong.jpg', 'il re delle scimmie', '1'),
(78, 'XAYAH', 'Immagini/campione/xayah.jpg', 'la ribelle', '2'),
(79, 'XIN ZHAO', 'Immagini/campione/xinzhao.jpg', 'il siniscalco di Demacia', '1'),
(80, 'YASUO', 'Immagini/campione/yasuo.jpg', 'il reietto', '3'),
(81, 'YUUMI', 'Immagini/campione/yuumi.jpg', 'la gattina magica', '3'),
(82, 'ZED', 'Immagini/campione/zed.jpg', 'il maestro delle ombre', '3'),
(83, 'ZIGGS', 'Immagini/campione/ziggs.jpg', 'l\'\esperto di hexplosivi', '2');

/*
-- --------------------------------------------------------
--
-- Struttura della tabella `abilita`
--

CREATE TABLE IF NOT EXISTS `abilita` (
  `codabilita` int(3) NOT NULL AUTO_INCREMENT,
  `nomeabilita` varchar(100) ,
  `fotoabilita`  varchar(1000), 
  `descrizioneabilita` varchar(10000) ,
  `codcampione` int(2) NOT NULL,
  PRIMARY KEY (`codabilita`),
  FOREIGN KEY (`codcampione`) references campione(codcamp)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=416 ;

--
-- Dump dei dati per la tabella `abilita`
--

INSERT INTO `abilita` (`codabilita`, `nomeabilita`, `fotoabilita`, `descrizioneabilita`, `codcampione`) VALUES
(1, '', '', '', ''),
-- --------------------------------------------------------
*/

--
-- Struttura della tabella `skin`
--

CREATE TABLE IF NOT EXISTS `skin`(
  `codskin` int(3) NOT NULL AUTO_INCREMENT,
  `nomeskin` varchar(80),
  `fotoskin` varchar(1000),
  `prezzo` int(8),
  `originale` int(1),
  `codcampione` int(2) NOT NULL,
  PRIMARY KEY (`codskin`),
  FOREIGN KEY (`codcampione`) references campione (`codcamp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=265 ;

--
-- Dump dei dati per la tabella `skin`
--

INSERT INTO `skin` (`codskin`, `nomeskin`, `fotoskin`, `prezzo`, `originale`,  `codcampione`) VALUES
(1, 'AHRI, LA VOLPE A NOVE CODE', 'Immagini/skin/ahri_skin01.jpg', '0', '0', '1'),
(2, 'AHRI VOLPE DI FUOCO', 'Immagini/skin/ahri_skin02.jpg', '725', '1', '1'),
(3, 'AHRI ARCADE', 'Immagini/skin/ahri_skin03.jpg', '990', '1', '1'),
(4, 'AKALI, L\'\ASSASSINA SOLITARIA', 'Immagini/skin/akali_skin01.jpg', '0', '0', '2'),
(5, 'AKALI CACCAITRICE DI TESTE', 'Immagini/skin/akali_skin02.jpg', '990', '1', '2'),
(6, 'AKALI K/DA ALL OUT', 'Immagini/skin/akali_skin03.jpg', '990', '1', '2'),
(7, 'AKSHAN, LA SENTINELLA RIBELLE', 'Immagini/skin/akshan_skin01.jpg', '0', '0', '3'),
(8, 'AKSHAN DELL\'\ACCADEMIA DI BATTAGLIA', 'Immagini/skin/akshan_skin02.jpg', '990', '1', '3'),
(9, 'ALISTAR, IL MINOTAURO', 'Immagini/skin/alistar_skin01.jpg', '0', '0', '4'),
(10, 'ALISTAR MUCCA MUU', 'Immagini/skin/alistar_skin02.jpg', '725', '1', '4'),
(11, 'ALISTAR PREDONE', 'Immagini/skin/alistar_skin03.jpg', '525', '1', '4'),
(12, 'ALISTAR BELVA LUNARE', 'Immagini/skin/alistar_skin04.jpg', '990', '1', '4'),
(13, 'AMUMU, LA MUMMIA TRISTE', 'Immagini/skin/amumu_skin01.jpg', '0', '0', '5'),
(14, 'AMUMU INFERNALE', 'Immagini/skin/amumu_skin02.jpg', '990', '1', '5'),
(15, 'AMUMU PICCOLO CAVALIERE', 'Immagini/skin/amumu_skin03.jpg', '525', '1', '5'),
(16, 'AMUMU TRISTE ROBOT', 'Immagini/skin/amumu_skin04.jpg', '990', '1', '5'),
(17, 'ANNIE, LA BAMBINA OSCURA', 'Immagini/skin/annie_skin01.jpg', '0', '0', '6'),
(18, 'ANNIE GHIACCIO ARDENTE', 'Immagini/skin/annie_skin02.jpg', '725', '1', '6'),
(19, 'CAPPUCCETTO ANNIE', 'Immagini/skin/annie_skin03.jpg', '525', '1', '6'),
(20, 'ANNIE BELVA LUNARE', 'Immagini/skin/annie_skin04.jpg', '990', '1', '6'), 
(21, 'ASHE, L\'\ARCERE DEI GHIACCI', 'Immagini/skin/ashe_skin01.jpg', '0', '0', '7'),
(22, 'ASHE DEL FRELJORD', 'Immagini/skin/ashe_skin02.jpg', '725', '1', '7'),
(23, 'ASHE PREDONA', 'Immagini/skin/ashe_skin03.jpg', '525', '1', '7'),
(24, 'REGINA ASHE', 'Immagini/skin/ashe_skin04.jpg', '725', '1', '7'),
(25, 'AURELION SOL, IL FORGIATORE DI STELLE', 'Immagini/skin/aurelionsol_skin01.jpg', '0', '0', '8'),
(26, 'MECHA AURELION SOL', 'Immagini/skin/aurelionsol_skin02.jpg', '990', '1', '8'),
(27, 'AURELION SOL SIGNORE CINEREO', 'Immagini/skin/aurelionsol_skin03.jpg', '990', '1', '8'),
(28, 'BLITZCRANK, IL GRANDE GOLEM A VAPORE', 'Immagini/skin/blitzcrank_skin01.jpg', '0', '0', '9'),
(29, 'BLITZCRANK BOSS DA BATTAGLIA', 'Immagini/skin/blitzcrank_skin02.jpg', '990', '1', '9'),
(30, 'BLITZCRANK BOOM BOOM', 'Immagini/skin/blitzcrank_skin03.jpg', '525', '1', '9'),
(31, 'BRAND, LA VENDETTA ARDENTE', 'Immagini/skin/brand_skin01.jpg', '0', '0', '10'),
(32, 'BRAND DELLA LUCE', 'Immagini/skin/brand_skin02.jpg', '990', '1', '10'),
(33, 'BRAND FUOCO SPIRITUALE', 'Immagini/skin/brand_skin03.jpg', '990', '1', '10'),
(34, 'BRAUM, IL CUORE DEL FRELJORD', 'Immagini/skin/braum_skin01.jpg', '0', '0', '11'),
(35, 'BRAUM AMMAZZADRAGHI', 'Immagini/skin/braum_skin02.jpg', '725', '1', '11'),
(36, 'BRAUM CITTÀ DEL CRIMINE', 'Immagini/skin/braum_skin03.jpg', '990', '1', '11'),
(37, 'BRAUM CUORDILEONE', 'Immagini/skin/braum_skin04.jpg', '525', '1', '11'),
(38, 'CAITLYN, LO SCERIFFO DI PILTOVER', 'Immagini/skin/caitlyn_skin01.jpg', '0', '0', '12'),
(39, 'CAITLYN CACCIATRICE DI TESTE', 'Immagini/skin/caitlyn_skin02.jpg', '725', '1', '12'),
(40, 'CAMILLE, L\'\OMBRA D\'\ACCIAIO', 'Immagini/skin/camille_skin01.jpg', '0', '0', '13'),
(41, 'PROGRAMMA CAMILLE', 'Immagini/skin/camille_skin02.jpg', '990', '1', '13'),
(42, 'CAMILLE DELLA CONGREGA', 'Immagini/skin/camille_skin03.jpg', '990', '1', '13'),
(43, 'CORKI, IL BOMBARDIERE SPERICOLATO', 'Immagini/skin/corki_skin01.jpg', '0', '0', '14'),
(44, 'CORKI ARCADE', 'Immagini/skin/corki_skin02.jpg', '990', '1', '14'),
(45, 'CORKI CAVALCA-URF', 'Immagini/skin/corki_skin03.jpg', '725', '1', '14'),
(46, 'DARIUS, LA MANO DI NOXUS', 'Immagini/skin/darius_skin01.jpg', '0', '0', '15'),
(47, 'DARIUS MEZZOGIORNO DI FUOCO', 'Immagini/skin/darius_skin02.jpg', '990', '1', '15'),
(49, 'DARIUS DELL\'\ACCADEMIA', 'Immagini/skin/darius_skin03.jpg', '525', '1', '15'),
(50, 'DARIUS BELVA LUNARE', 'Immagini/skin/darius_skin04.jpg', '990', '1', '15'),
(51, 'DIANA, IL DISPREZZO DELLA LUNA', 'Immagini/skin/diana_skin01.jpg', '0', '0', '16'),
(52, 'DIANA VALCHIRIA OSCURA', 'Immagini/skin/diana_skin02.jpg', '725', '1', '16'),
(53, 'DIANA INFERNALE', 'Immagini/skin/diana_skin03.jpg', '990', '1', '16'),
(54, 'DR. MUNDO, IL FOLLE DI ZAUN', 'Immagini/skin/drmundo_skin01.jpg', '0', '0', '17'),
(55, 'CORPORATE MUNDO', 'Immagini/skin/drmundo_skin02.jpg', '1325', '1', '17'),
(56, 'MUNDO FURIA CIECA', 'Immagini/skin/drmundo_skin03.jpg', '725', '1', '17'),
(57, 'MUNDO PRINCIPE GHIACCIATO', 'Immagini/skin/drmundo_skin04.jpg', '990', '1', '17'),
(58, 'DRAVEN, IL GLORIOSO CARNEFICE', 'Immagini/skin/draven_skin01.jpg', '0', '0', '18'),
(59, 'DRAVEN PRIMA SERATA', 'Immagini/skin/draven_skin02.jpg', '725', '1', '18'),
(60, 'DRAVEN PREDATORE DI ANIME', 'Immagini/skin/draven_skin03.jpg', '990', '1', '18'),
(65, 'EVELYNN, L\'ABBRACCIO AGONIZZANTE', 'Immagini/skin/evelynn_skin01.jpg', '0', '0', '19'),
(66, 'EVELYNN TANGO', 'Immagini/skin/evelynn_skin02.jpg', '525', '1', '19'),
(67, 'EVELYNN K/DA ALL OUT', 'Immagini/skin/evelynn_skin03.jpg', '725', '1', '19'),
(68, 'EZREAL, IL PRODIGO ESPLORATORE', 'Immagini/skin/ezreal_skin01.jpg', '0', '0', '20'),
(69, 'EZREAL RUBACUORI', 'Immagini/skin/ezreal_skin02.jpg', '525', '1', '20'),
(70, 'EZREAL DEI GHIACCI', 'Immagini/skin/ezreal_skin03.jpg', '725', '1', '20'),
(71, 'EZREAL GUARDIANO STELLARE', 'Immagini/skin/ezreal_skin04.jpg', '990', '1', '20'),
(72, 'FIORA, LA MAGNIFICA DUELLANTE', 'Immagini/skin/fiora_skin01.jpg', '0', '0', '21'),
(73, 'FIORA GUARDIA REALE', 'Immagini/skin/fiora_skin02.jpg', '525', '1', '21'),
(74, 'FIORA SPADA ALATA', 'Immagini/skin/fiora_skin03.jpg', '725', '1', '21'),
(75, 'FIORA BELVA LUNARE', 'Immagini/skin/fiora_skin04.jpg', '990', '1', '21'),
(76, 'FIZZ, IL PRESTIGIATORE DELLE MAREE', 'Immagini/skin/fizz_skin01.jpg', '0', '0', '22'),
(77, 'FIZZ MEGAGALATTICO', 'Immagini/skin/fizz_skin02.jpg', '525', '1', '22'),
(78, 'FIZZ DEL VUOTO', 'Immagini/skin/fizz_skin03.jpg', '725', '1', '22'),
(79, 'FIZZ SQUADRA OMEGA', 'Immagini/skin/fizz_skin04.jpg', '990', '1', '22'),
(80, 'GALIO, IL COLOSSO', 'Immagini/skin/galio_skin01.jpg', '0', '0', '23'),
(81, 'GALIO INFERNALE', 'Immagini/skin/galio_skin02.jpg', '525', '1', '23'),
(82, 'GALIO RUBACUORI', 'Immagini/skin/galio_skin03.jpg', '725', '1', '23'),
(83, 'GAREN, LA POTENZA DI DEMACIA', 'Immagini/skin/garen_skin01.jpg', '0', '0', '24'),
(84, 'GAREN CAVALIERE OSCURO', 'Immagini/skin/garen_skin02.jpg', '525', '1', '24'),
(85, 'GAREN AMMIRAGLIO CORSARO', 'Immagini/skin/garen_skin03.jpg', '725', '1', '24'),
(86, 'GAREN LEGIONE D\'ACCIAIO', 'Immagini/skin/garen_skin04.jpg', '990', '1', '24'),
(87, 'GRAGAS, IL PROVOCATORE DELLE MASSE', 'Immagini/skin/gragas_skin01.jpg', '0', '0', '25'),
(88, 'GRAGAS VANDALO', 'Immagini/skin/gragas_skin02.jpg', '525', '1', '25'),
(89, 'GRAGAS FRACASSABOTTI', 'Immagini/skin/gragas_skin03.jpg', '725', '1', '25'),
(90, 'GRAVES, IL FUORILEGGE', 'Immagini/skin/graves_skin01.jpg', '0', '0', '26'),
(91, 'GRAVES CITTÀ DEL CRIMINE', 'Immagini/skin/graves_skin02.jpg', '525', '1', '26'),
(92, 'GRAVES PRETORIANO', 'Immagini/skin/graves_skin03.jpg', '725', '1', '26'),
(93, 'GRAVES TAGLIAGOLE', 'Immagini/skin/graves_skin04.jpg', '990', '1', '26'),
(94, 'IRELIA, LA DANZATRICE DELLE LAME', 'Immagini/skin/irelia_skin01.jpg', '0', '0', '27'),
(95, 'IRELIA ORDINE DEL LOTO', 'Immagini/skin/irelia_skin02.jpg', '525', '1', '27'),
(96, 'JANNA, LA FURIA DELLA TEMPESTA', 'Immagini/skin/janna_skin01.jpg', '0', '0', '28'),
(97, 'JANNA SPADA SACRA', 'Immagini/skin/janna_skin02.jpg', '525', '1', '28'),
(98, 'JANNA DELLA TEMPESTA', 'Immagini/skin/janna_skin03.jpg', '725', '1', '28'),
(99, 'JANNA GUARDIANA STELLARE', 'Immagini/skin/janna_skin04.jpg', '990', '1', '28'),
(100, 'JARVAN IV, L\'ESEMPIO DI DEMACIA', 'Immagini/skin/jarvaniv_skin01.jpg', '0', '0', '29'),
(101, 'JARVAN IV COMMANDO', 'Immagini/skin/jarvaniv_skin02.jpg', '525', '1', '29'),
(102, 'JARVAN IV STELLA OSCURA', 'Immagini/skin/jarvaniv_skin03.jpg', '725', '1', '29'),
(103, 'JARVAN IV BELVA LUNARE', 'Immagini/skin/jarvaniv_skin04.jpg', '990', '1', '29'),
(104, 'JAX, GRAN MAESTRO D\'ARMI', 'Immagini/skin/jax_skin01.jpg', '0', '0', '30'),
(105, 'JAX ASTA DIVINA', 'Immagini/skin/jax_skin02.jpg', '525', '1', '30'),
(106, 'JAX PESCATORE', 'Immagini/skin/jax_skin03.jpg', '725', '1', '30'),
(107, 'JAYCE, IL DIFENSORE DEL DOMANI', 'Immagini/skin/jayce_skin01.jpg', '0', '0', '31'),
(108, 'JAYCE MARTELLO LUCENTE', 'Immagini/skin/jayce_skin02.jpg', '525', '1', '31'),
(109, 'JHIN, IL VIRTUOSO', 'Immagini/skin/jhin_skin01.jpg', '0', '0', '32'),
(110, 'JHIN MEZZOGIORNO DI FUOCO', 'Immagini/skin/jhin_skin02.jpg', '525', '1', '32'),
(111, ' JHIN OSCURITÀ COSMICA', 'Immagini/skin/jhin_skin03.jpg', '725', '1', '32'),
(112, 'JINX, LA MINA VAGANTE', 'Immagini/skin/jinx_skin01.jpg', '0', '0', '33'),
(113, 'JINX CITTÀ DEL CRIMINE', 'Immagini/skin/jinx_skin02.jpg', '525', '1', '33'),
(114, 'JINX SOPRAVVISSUTA ZOMBI', 'Immagini/skin/jinx_skin03.jpg', '725', '1', '33'),
(115, 'JINX GUARDIANA STELLARE', 'Immagini/skin/jinx_skin04.jpg', '990', '1', '33'),
(116, 'KAI\'SA, LA FIGLIA DEL VUOTO', 'Immagini/skin/kaisa_skin01.jpg', '0', '0', '34'),
(117, 'KAI\'SA ANGELO DEI PROIETTILI', 'Immagini/skin/kaisa_skin02.jpg', '525', '1', '34'),
(118, 'KAI\'SA K/DA ALL OUT', 'Immagini/skin/kaisa_skin03.jpg', '725', '1', '34'),
(119, 'KARMA, L\'ILLUMINATA', 'Immagini/skin/karma_skin01.jpg', '0', '0', '35'),
(120, 'KARMA INQUISITRICE', 'Immagini/skin/karma_skin02.jpg', '990', '1', '35'),
(121, 'KATARINA, LA LAMA SINISTRA', 'Immagini/skin/katarina_skin01.jpg', '0', '0', '36'),
(122, 'KATARINA ADEPTA DELLA MORTE', 'Immagini/skin/katarina_skin02.jpg', '525', '1', '36'),
(123, 'KATARINA DI BILGEWATER', 'Immagini/skin/katarina_skin03.jpg', '725', '1', '36'),
(124, 'KAYLE, LA VIRTUOSA', 'Immagini/skin/kayle_skin01.jpg', '0', '0', '37'),
(125, 'KAYLE VERDE SMERALDO', 'Immagini/skin/kayle_skin02.jpg', '525', '1', '37'),
(126, 'KENNEN, IL CUORE DELLA TEMPESTA', 'Immagini/skin/kennen_skin01.jpg', '0', '0', '38'),
(127, 'KENNEN OPERAZIONI ARTICHE', 'Immagini/skin/kennen_skin02.jpg', '525', '1', '38'),
(128, 'SUPER KENNEN', 'Immagini/skin/kennen_skin03.jpg', '725', '1', '38'),
(129, 'KHA\'ZIX, IL RAZZIATORE DEL VUOTO', 'Immagini/skin/khazix_skin01.jpg', '0', '0', '39'),
(130, 'KHA\'ZIX BOCCIOLO MORTALE', 'Immagini/skin/khazix_skin02.jpg', '525', '1', '39'),
(131, 'LEE SIN, IL MONACO CIECO', 'Immagini/skin/leesin_skin01.jpg', '0', '0', '40'),
(132, 'LEE SIN KO', 'Immagini/skin/leesin_skin02.jpg', '525', '1', '40'),
(133, 'LEE SIN MUAY THAI', 'Immagini/skin/leesin_skin03.jpg', '725', '1', '40'),
(134, 'LEONA, L\'ALBA RAGGIANTE', 'Immagini/skin/leona_skin01.jpg', '0', '0', '41'),
(135, 'PROGETTO: LEONA', 'Immagini/skin/leona_skin02.jpg', '525', '1', '41'),
(136, 'LEONA BARBECUE', 'Immagini/skin/leona_skin03.jpg', '725', '1', '41'),
(137, 'LUCIAN, IL PURIFICATORE', 'Immagini/skin/lucian_skin01.jpg', '0', '0', '42'),
(138, 'LUCIAN MERCENARIO', 'Immagini/skin/lucian_skin02.jpg', '525', '1', '42'),
(139, 'LULU, LA SACERDOTESSA DELLE FATE', 'Immagini/skin/lulu_skin01.jpg', '0', '0', '43'),
(140, 'LULU ADDESTRATRICE DI DRAGHI', 'Immagini/skin/lulu_skin02.jpg', '525', '1', '43'),
(141, 'LULU CRUDELE', 'Immagini/skin/lulu_skin03.jpg', '725', '1', '43'),
(142, 'LULU GUARDIANA STELLARE', 'Immagini/skin/lulu_skin04.jpg', '990', '1', '43'),
(143, 'LUX, LA SIGNORA DELLA LUMINOSITÀ', 'Immagini/skin/lux_skin01.jpg', '0', '0', '44'),
(144, 'LUX STREGA', 'Immagini/skin/lux_skin02.jpg', '525', '1', '44'),
(145, 'LUX LADRA D\'INCANTESIMI', 'Immagini/skin/lux_skin03.jpg', '725', '1', '44'),
(146, 'LUX GUARDIANA STELLARE', 'Immagini/skin/lux_skin04.jpg', '990', '1', '44'),
(147, 'MALPHITE, LA SCHEGGIA DEL MONOLITE', 'Immagini/skin/malphite_skin01.jpg', '0', '0', '45'),
(148, 'MALPHITE GLACIALE', 'Immagini/skin/malphite_skin02.jpg', '525', '1', '45'),
(149, 'CORAZZATA MALPHITE', 'Immagini/skin/malphite_skin03.jpg', '725', '1', '45'),
(150, 'MASTER YI, LO SPADACCINO WUJU', 'Immagini/skin/masteryi_skin01.jpg', '0', '0', '46'),
(151, 'MASTER YI ASSASSINO', 'Immagini/skin/masteryi_skin02.jpg', '525', '1', '46'),
(152, 'YI SPADA ETERNA', 'Immagini/skin/masteryi_skin03.jpg', '725', '1', '46'),
(153, 'MASTER YI PUPAZZO DI NEVE', 'Immagini/skin/masteryi_skin04.jpg', '990', '1', '46'),
(154, 'MISS FORTUNE, LA CACCIATRICE DI TAGLIE', 'Immagini/skin/missfortune_skin01.jpg', '0', '0', '47'),
(155, 'MISS FORTUNE COWGIRL', 'Immagini/skin/missfortune_skin02.jpg', '525', '1', '47'),
(156, 'ARCADE MISS FORTUNE', 'Immagini/skin/missfortune_skin03.jpg', '725', '1', '47'),
(157, 'MISS FORTUNE BELVA LUNARE', 'Immagini/skin/missfortune_skin04.jpg', '990', '1', '47'),
(158, 'MORGANA, LA CADUTA', 'Immagini/skin/morgana_skin01.jpg', '0', '0', '48'),
(159, 'MORGANA SIGNORA DELLE LAME', 'Immagini/skin/morgana_skin02.jpg', '525', '1', '48'),
(160, 'NAMI, LO SPIRITO DELLE MAREE', 'Immagini/skin/nami_skin01.jpg', '0', '0', '49'),
(161, 'URF IL NAMINTINO', 'Immagini/skin/nami_skin02.jpg', '525', '1', '49'),
(162, 'NAMI SPIRITO DEL FIUME', 'Immagini/skin/nami_skin03.jpg', '725', '1', '49'),
(163, 'NASUS, IL CUSTODE DELLE DUNE', 'Immagini/skin/nasus_skin01.jpg', '0', '0', '50'),
(164, 'NASUS DISTRUTTORE DEL MONDO', 'Immagini/skin/nasus_skin02.jpg', '990', '1', '50'),
(165, 'DUCA CONTE NASUS', 'Immagini/skin/nasus_skin03.jpg', '525', '1', '50'),
(166, 'NUNU E WILLUMP, IL BAMBINO E LO YETI', 'Immagini/skin/nunu_skin01.jpg', '0', '0', '51'),
(167, 'NUNU E WILLUMP GRUNGE', 'Immagini/skin/nunu_skin02.jpg', '525', '1', '51'),
(168, 'NUNU E WILLUMP ZOMBI', 'Immagini/skin/nunu_skin03.jpg', '725', '1', '51'),
(169, 'OLAF, IL BERSERKER', 'Immagini/skin/olaf_skin01.jpg', '0', '0', '52'),
(170, 'BROLAF', 'Immagini/skin/olaf_skin02.jpg', '525', '1', '52'),
(171, 'OLAF DEI PENTAKILL', 'Immagini/skin/olaf_skin03.jpg', '725', '1', '52'),
(172, 'ORIANNA, LA SIGNORA DEGLI INGRANAGGI', 'Immagini/skin/orianna_skin01.jpg', '0', '0', '53'),
(173, 'ORIANNA STELLA OSCURA', 'Immagini/skin/orianna_skin02.jpg', '525', '1', '53'),
(174, 'ORIANNA GOTICA', 'Immagini/skin/orianna_skin03.jpg', '725', '1', '53'),
(175, 'ORIANNA PRODIGIO INVERNALE', 'Immagini/skin/orianna_skin04.jpg', '990', '1', '53'),
(176, 'PANTHEON, LA LANCIA INDISTRUTTIBILE', 'Immagini/skin/pantheon_skin01.jpg', '0', '0', '54'),
(177, 'PANTHEON AMMAZZADRAGHI', 'Immagini/skin/pantheon_skin02.jpg', '525', '1', '54'),
(178, 'FULL METAL PANTHEON', 'Immagini/skin/pantheon_skin03.jpg', '725', '1', '54'),
(179, 'RAKAN, L\'AMMALIATORE', 'Immagini/skin/rakan_skin01.jpg', '0', '0', '55'),
(180, 'RAKAN ALBA COSMICA', 'Immagini/skin/rakan_skin02.jpg', '525', '1', '55'),
(181, 'RAKAN DEL CUORE', 'Immagini/skin/rakan_skin03.jpg', '725', '1', '55'),
(182, 'RAMMUS, L\'ARMA-DILLO', 'Immagini/skin/rammus_skin01.jpg', '0', '0', '56'),
(183, 'RAMMUS FUSO', 'Immagini/skin/rammus_skin02.jpg', '525', '1', '56'),
(184, 'RAMMUS RASOTERRA', 'Immagini/skin/rammus_skin03.jpg', '725', '1', '56'),
(185, 'RENEKTON, IL MACELLAIO DELLE DUNE', 'Immagini/skin/renekton_skin01.jpg', '0', '0', '57'),
(186, 'RENEKTON TERRA BRUCIATA', 'Immagini/skin/renekton_skin02.jpg', '525', '1', '57'),
(187, 'RENGAR, IL CACCIATORE ORGOGLIOSO', 'Immagini/skin/rengar_skin01.jpg', '0', '0', '58'),
(188, ' RENGAR CACCIATORE NOTTURNO', 'Immagini/skin/rengar_skin02.jpg', '525', '1', '58'),
(189, 'RIVEN, L\'ESILIATA', 'Immagini/skin/riven_skin01.jpg', '0', '0', '59'),
(190, 'RIVEN ARCADE', 'Immagini/skin/riven_skin02.jpg', '525', '1', '59'),
(191, 'SENNA, LA REDENTRICE', 'Immagini/skin/senna_skin01.jpg', '0', '0', '60'),
(192, 'SENNA TRUE DAMAGE', 'Immagini/skin/senna_skin02.jpg', '525', '1', '60'),
(193, 'SERAPHINE, LA CANTANTE SOGNATRICE', 'Immagini/skin/seraphine_skin01.jpg', '0', '0', '61'),
(194, 'SERAPHINE K/DA ALL OUT', 'Immagini/skin/seraphine_skin02.jpg', '525', '1', '61'),
(195, 'SETT, IL BOSS', 'Immagini/skin/sett_skin01.jpg', '0', '0', '62'),
(196, 'SETT FUOCO D\'ARTIFICIO', 'Immagini/skin/sett_skin02.jpg', '525', '1', '62'),
(197, 'SHEN, L\'OCCHIO DEL CREPUSCOLO', 'Immagini/skin/shen_skin01.jpg', '0', '0', '63'),
(198, 'SHEN LUNA DI SANGUE', 'Immagini/skin/shen_skin02.jpg', '525', '1', '63'),
(199, 'SHYVANA, IL MEZZO-DRAGO', 'Immagini/skin/shyvana_skin01.jpg', '0', '0', '64'),
(200, 'SHYVANA DRAGO DI GHIACCIO', 'Immagini/skin/shyvana_skin02.jpg', '525', '1', '64'),
(201, 'SHYVANA FIAMMA OSCURA', 'Immagini/skin/shyvana_skin03.jpg', '725', '1', '64'),
(202, 'SINGED, IL FOLLE CHIMICO', 'Immagini/skin/singed_skin01.jpg', '0', '0', '65'),
(203, 'SINGED SURFISTA', 'Immagini/skin/singed_skin02.jpg', '525', '1', '65'),
(204, 'SINGED POTENZIATO', 'Immagini/skin/singed_skin03.jpg', '725', '1', '65'),
(205, 'SONA, MAESTRA DELLE CORDE', 'Immagini/skin/sona_skin01.jpg', '0', '0', '66'),
(206, 'SONA DEI PENTAKILL', 'Immagini/skin/sona_skin02.jpg', '525', '1', '66'),
(207, 'MUSA SONA', 'Immagini/skin/sona_skin03.jpg', '725', '1', '66'),
(208, 'SONA DEL CUORE', 'Immagini/skin/sona_skin04.jpg', '990', '1', '66'),
(209, 'SORAKA, LA FIGLIA DELLE STELLE', 'Immagini/skin/soraka_skin01.jpg', '0', '0', '67'),
(210, 'SORAKA ORDINE DELLA BANANA', 'Immagini/skin/soraka_skin02.jpg', '525', '1', '67'),
(211, 'PROGRAMMA SORAKA', 'Immagini/skin/soraka_skin03.jpg', '725', '1', '67'),
(212, 'SORAKA PRODIGIO INVERNALE', 'Immagini/skin/soraka_skin04.jpg', '990', '1', '67'),
(213, 'TEEMO, IL RAPIDO SCOUT', 'Immagini/skin/teemo_skin01.jpg', '0', '0', '68'),
(214, 'TEEMO CODA A BATUFFOLI', 'Immagini/skin/teemo_skin02.jpg', '525', '1', '68'),
(215, 'TEEMO DIAVOLETTO', 'Immagini/skin/teemo_skin03.jpg', '725', '1', '68'),
(216, 'TEEMO PANDA', 'Immagini/skin/teemo_skin04.jpg', '990', '1', '68'),
(217, 'THRESH, IL CARCERIERE', 'Immagini/skin/thresh_skin01.jpg', '0', '0', '69'),
(218, 'THRESH PULSEFIRE', 'Immagini/skin/thresh_skin02.jpg', '525', '1', '69'),
(219, 'TRISTANA, L\'ARTIGLIERE DEGLI YORDLE', 'Immagini/skin/tristana_skin01.jpg', '0', '0', '70'),
(220, 'TRISTANA GUERRIGLIERA', 'Immagini/skin/tristana_skin02.jpg', '525', '1', '70'),
(221, 'TRISTANA DIAVOLETTA', 'Immagini/skin/tristana_skin03.jpg', '725', '1', '70'),
(222, 'TRISTANA SQUADRA OMEGA', 'Immagini/skin/tristana_skin04.jpg', '990', '1', '70'),
(223, 'TRYNDAMERE, IL RE BARBARO', 'Immagini/skin/tryndamere_skin01.jpg', '0', '0', '71'),
(224, 'TRYNDAMERE LAMA DEMONIACA', 'Immagini/skin/tryndamere_skin02.jpg', '525', '1', '71'),
(225, 'RE TRYNDAMERE', 'Immagini/skin/tryndamere_skin03.jpg', '725', '1', '71'),
(226, 'TRYNDAMERE GLORIOSO', 'Immagini/skin/tryndamere_skin04.jpg', '990', '1', '71'),
(227, 'TWISTED FATE, IL MAESTRO DI CARTE', 'Immagini/skin/twistedfate_skin01.jpg', '0', '0', '72'),
(228, 'TWISTED FATE PULSEFIRE', 'Immagini/skin/twistedfate_skin02.jpg', '525', '1', '72'),
(229, 'TWISTED FATE TANGO', 'Immagini/skin/twistedfate_skin03.jpg', '725', '1', '72'),
(230, 'TWISTED FATE TAGLIABORSE', 'Immagini/skin/twistedfate_skin04.jpg', '990', '1', '72'),
(231, 'VARUS, LA FRECCIA DEL CASTIGO', 'Immagini/skin/varus_skin01.jpg', '0', '0', '73'),
(232, 'VARUS OPERAZIONI ARTICHE', 'Immagini/skin/varus_skin02.jpg', '990', '1', '73'),
(233, 'VARUS DARDOLESTO', 'Immagini/skin/varus_skin03.jpg', '525', '1', '73'),
(234, 'VARUS DELLA LUCE', 'Immagini/skin/varus_skin04.jpg', '725', '1', '73'),
(235, 'VAYNE, LA CACCIATRICE NOTTURNA', 'Immagini/skin/vayne_skin01.jpg', '0', '0', '74'),
(236, 'VAYNE DELLA LUCE', 'Immagini/skin/vayne_skin02.jpg', '725', '1', '74'),
(237, 'VAYNE AMMAZZADRAGHI', 'Immagini/skin/vayne_skin03.jpg', '725', '1', '74'),
(238, 'VAYNE CERCA CUORI', 'Immagini/skin/vayne_skin04.jpg', '725', '1', '74'),
(239, 'VEIGAR, IL PICCOLO GENIO DEL MALE', 'Immagini/skin/veigar_skin01.jpg', '0', '0', '75'),
(240, 'CATTIVISSIMO VEIGAR', 'Immagini/skin/veigar_skin02.jpg', '725', '1','75'),
(241, 'VI, LA LEGGE DI PILTOVER', 'Immagini/skin/vi_skin01.jpg', '0', '0', '76'),
(242, 'VI DEMONIACA', 'Immagini/skin/vi_skin02.jpg', '990', '1', '76'),
(243, 'VI RUBACUORI', 'Immagini/skin/vi_skin03.jpg', '525', '1', '76'),
(244, 'WUKONG, IL RE DELLE SCIMMIE', 'Immagini/skin/wukong_skin01.jpg', '0', '0', '77'),
(245, 'WUKONG VULCANICO', 'Immagini/skin/wukong_skin02.jpg', '725', '1', '77'),
(246, 'WUKONG GENERALE', 'Immagini/skin/wukong_skin03.jpg', '525', '1', '77'),
(247, 'XAYAH, LA RIBELLE', 'Immagini/skin/xayah_skin01.jpg', '0', '0','78'),
(248, 'XAYAH DEL CUORE', 'Immagini/skin/xayah_skin02.jpg', '725', '1','78'),
(249, 'XAYAH CREPUSCOLO COSMICO', 'Immagini/skin/xayah_skin03.jpg', '990', '1', '78'),
(250, 'XIN ZHAO IL SINISCALCO DI DEMACIA', 'Immagini/skin/xinzhao_skin01.jpg', '0', '0', '79'),
(251, 'XIN ZHAO AGENTE SEGRETO', 'Immagini/skin/xinzhao_skin02.jpg', '725', '1', '79'),
(252, 'XIN ZHAO AMMAZZADRAGHI', 'Immagini/skin/xinzhao_skin03.jpg', '990', '1', '79'),
(253, 'XIN ZHAO DEI REGNI IN GUERRA', 'Immagini/skin/xinzhao_skin04.jpg', '990', '1', '79'),
(254, 'YASUO, IL REIETTO', 'Immagini/skin/yasuo_skin01.jpg', '0', '0', '80'),
(255, 'YASUO MEZZOGIORNO DI FUOCO', 'Immagini/skin/yasuo_skin02.jpg', '725', '1', '80'),
(256, 'YASUO BOSS DA BATTAGLIA', 'Immagini/skin/yasuo_skin03.jpg', '990', '1', '80'),
(257, 'YUUMI, LA GATTINA MAGICA', 'Immagini/skin/yuumi_skin01.jpg', '0', '0', '81'),
(258, 'YUUMI CERCA CUORI', 'Immagini/skin/yuumi_skin02.jpg', '990', '1', '81'),
(259, 'ZED, IL MAESTRO DELLE OMBRE', 'Immagini/skin/zed_sq');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE IF NOT EXISTS `utente` (
  `codutente` int(40) NOT NULL AUTO_INCREMENT,
  `nomeutente` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `monete` int(10),
  PRIMARY KEY (`codutente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2; 

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente`(`codutente`, `nomeutente`, `password`, `email`, `monete`) VALUES ('1','claudia','claudia','claudia@gmail.com','0'),


-- --------------------------------------------------------

--
-- Struttura della tabella `skinutente`
--

CREATE TABLE IF NOT EXISTS `skinutente` (
  `codutente` int(11) NOT NULL,
  `codskin` int(11) NOT NULL,
  FOREIGN KEY (`codutente`) references utente (`codutente`),
  FOREIGN KEY (`codskin`) references skin (`codskin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dump dei dati per la tabella `skinutente`
--

INSERT INTO `skinutente` (`codutente`, `codskin`) VALUES
('', ''),
--
-- Struttura della tabella `ruolo`
--

CREATE TABLE IF NOT EXISTS `supporto` (
  `codmsg` int(40) NOT NULL AUTO_INCREMENT,
  `nomeutentemsg` varchar(60) NOT NULL,
  `emailmsg` varchar(100) NOT NULL,
  `msg` varchar(800),  
  PRIMARY KEY (`codmsg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2; 


--
-- Dump dei dati per la tabella `ruolo`
--

INSERT INTO `supporto` (`codruolo`, `nomeruolo`, `codcampione`) VALUES
('', '', ''),
