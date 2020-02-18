-- MySQL dump 10.13  Distrib 5.7.29, for osx10.14 (x86_64)
--
-- Host: localhost    Database: parking
-- ------------------------------------------------------
-- Server version	5.7.27

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Akna','Lakmini',702222222,'lakminakna','akna','2019-11-12 10:12:32',NULL),(2,'Sahan','Madusankaa',705555556,'sahan','sahan','2020-01-26 20:04:46','2020-01-26 14:34:46'),(3,'keshani','perera',703333333,'keshani','keshani','2019-11-12 10:16:04',NULL),(4,'thushi','walter',705555555,'thushi','thushi','2019-11-16 16:35:05',NULL);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'lahiru','lahiru','lahiru@gmail.com',982345674,'Size of each parking space\r\n‚Ä¢ Size and design of driving and turning lanes\r\n‚Ä¢ Layout and topography ','2019-11-16 16:38:31'),(2,'malmi','malmi','malmi@gmail.com',983445678,'Size of each parking space\r\n‚Ä¢ Size and design of driving and turning lanes\r\n‚Ä¢ Layout and topography of the land\r\n‚Ä¢ Other factors such as handicap-accessible parking\r\nand surface of the lot/field','2019-11-16 16:39:44'),(3,'sanduni','sanduni','sanduni@gmail.com',984556738,'Size of each parking space\r\n‚Ä¢ Size and design of driving and turning lanes\r\n‚Ä¢ Layout and topography of the land\r\n‚Ä¢ Other factors such as handicap-accessible parking\r\nand surface of the lot/field','2019-11-16 16:40:25'),(4,'pasan','pasan','pasan',972334587,'Size of each parking space\r\n‚Ä¢ Size and design of driving and turning lanes\r\n‚Ä¢ Layout and topography of the land\r\n‚Ä¢ Other factors such as handicap-accessible parking\r\nand surface of the lot/field','2019-11-16 16:41:08'),(5,'sachi','sachi','sachi@gmail.com',987664982,'Size of each parking space\r\n‚Ä¢ Size and design of driving and turning lanes\r\n‚Ä¢ Layout and topography of the land\r\n‚Ä¢ Other factors such as handicap-accessible parking\r\nand surface of the lot/field','2019-11-16 16:41:40');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drivers`
--

DROP TABLE IF EXISTS `drivers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drivers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `licence_id` varchar(20) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` blob,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drivers`
--

LOCK TABLES `drivers` WRITE;
/*!40000 ALTER TABLE `drivers` DISABLE KEYS */;
INSERT INTO `drivers` VALUES (1,'supunaa','supuna','Male',711124578,'Maharagama','2323','232323456v','supun@gmail.com',NULL,'supun','supun','2020-01-26 20:12:00','2020-01-26 14:42:00'),(2,'madhura','madhura','Male',705555555,'Pannipitiya','55792','459826776v','madhura@gmail.com',_binary 'ˇ\ÿˇ\‡\0JFIF\0\0\0\0\0\0ˇ\€\0Ñ\0	\Z(,%!1!%)+... 383,7(-.+\n\n\n\r\Z-%%----+-+-----------7+---7------------+77---7-7+-++7ˇ¿\0\0Ä\0Ä\"\0ˇ\ƒ\0\0\0\0\0\0\0\0\0\0\0\0\0\0ˇ\ƒ\0@\0\0\0\0\0\0\0!1AQq\"aÅ¡ë°±2≤#3BRbr¢\—\·Ò4CcsÇÉíˇ\ƒ\0\0\0\0\0\0\0\0\0\0\0\0\0\0ˇ\ƒ\0!\0\0\0\0\0\0\0\0\0\0\01!\"A2Qˇ\⁄\0\0\0?\0˜äå(}%ˆú\‡0\ƒS¸\ÌYkoÇ\‘ \ƒxêæ\¬\”/.sún\„~\'ƒß§z\Ó\ƒcköé:i<±£êa\·uj\›»≤∂\’v\ƒ6xÒé	ˆ>∞H\…\……ïyôC¥ù#Å˘ÛG* q\⁄±îH-\'rIî\Ï©a£\ŒŸóY•¿\»<G@∑\«‡æ´fv\‚A û±0\'N\ƒüÑ\„Ú¢tò6è\"\'\Â({Ò±%¯˘6çÆ8R0ÜoΩÇo•ïF\‡\€\Ìm>{´≤WV\"@\0òG\‹\ƒ ¥ﬂ¢\€ÒQ \Àx^◊à/G´ëñÅ œä\◊ï¥¥ê1h¸¨\„¿ü\—\ÁX<>í\«6\Œkªéº.\–|8Øy˙7\ÌQ\Ã(8W\“+Svó\0~∞¥<és ¯Ö\‰9∂CÜ˜∏és*\Ô\—\ﬁ,\–\Ã)/®\ \œ ∑2ùéVIí}®\nSÖ°\ T8.39vßÆΩw”™˜OÉú\‚>\Ï\√@`∑uÄïs\¬F7\À\√1/n\ÎÙ˙&\ﬁ\ÕR∞\ﬂÑ)eiqˆ5\·Gø\—•J\»~r˚\Ÿ§˝∫$¢…õ≤î\0§\–i›†¯B\Î™\€-I\‰ôHU≤•\\∫ôªãJx0\÷¿≤∏J\‰Ú∏\—\€eZ¥$*™0“ä∏ •ä6)l8∂$vÅ≤Œá\Ó˛\Ë™\«Òi\È}˛	ü¥ŒûWﬂóäQ¢&†\–á¡¿\ ~-ë\ÁG“∏\n\⁄\ÈR~˙ò\”\Ô\0˙´\n¶SG\Ÿ–†\ÕÙ\”c}\Õ\—[Uë†¨*é75£E¡µàòπ1\Ã\∆¡q∫FIΩ\⁄,ôöc\·]\Óˆ?\⁄{ûn ∞æ\Ã7ß¢´Ù°L\œQ§i©Nôûeµ\ÈWıÅ`Zx[\’KîÙ8\À˙\Z†Ò]†RÛ3ä\"\0\‘`I16ÛX\Œ\Ÿ\‡\⁄@\÷DZ\Ì0RR)îï\r\Õq\„˜≤\Ÿ¡\ÁÙ*«≥®\◊@\›•T\≈Bàz\‰ÈÇªT®òf\‘h¥öè\r?\…q∞ëµG\«%GV\≈´\€9$1Ø®G\Íà˘\Ó∏\‚3˘ä5`,#\«~(\Z	I1,∏ı˛\…^é\0~0\√S\‘˙c\…œÑ\√K⁄Ç[> à<º.)¨\Ã\È>†q\»0€í[$\r\·;åü?\…x{\€T•˛\Ãg51B°™¿\»=\–\Ÿ=”∞w\Ì#¡TùêJ..ôÑ§û\‘\“Ö¥\Ã\r\·/)\›+vØ	˘Ju\'~\Á¸ª≈æ©<è\”¬é#¨æà∂\ \⁄\Ê6†lTcöI∆ô7ÙVKPm∏4˘¢û^_¨∏ìu¶\–+|6òò\‡§\Ï\Ëπ\≈)Å3K\⁄Z\÷Si&\ƒ\‹è-–åÚçju(≤´E_hX@m;7\\…û:lˆ\'*k∏\r\ÏF\„\≈oK\n\ËÇÈçâ\0ñ¯éH\·$∂Å…è∂ò®\ﬁ öNßZ\”›∞çà\›1dUú”¢ßV\ﬂO@/q\‘\Ód*TI\÷:\…Bﬂ£!àS8©°Ö√íG9+±u\Z`8«ëâív~r\ÈaC∞tı[Ü\Î}ŸúmP≥¯™µ,_\‡\Ïk\√\'p\ÀN†ké\„M˙´µiT°]\Õs©\Í d¿\Ê8rMßP\ÿ<Ú±∫≠C,\r$õìÚG)\⁄–ò\‚ß\Î‘•\„π˘!∏ZAòß=\ƒ	k@ûe\ƒ&lÕÄêj\ÿví«ëp\‡=ÚP©xU\ÿ{\ÏIÜUo\'=Z¢gKùâ°¶Å1ıù«ê\0z&5n?\"è;;ºçò©f∏okI\ÌâtK|>©Ú0Æ®(•°I¥\ÏC4\‹A cKÅ\‰E˝‹∫§@;Å®±LπÆ\rÙ\Í<µèsgπrfDrÒJ \Ë≠QÆo|ê4\Ÿ\◊ÛP85\„=UëJö\È‘ê\ƒ*xgjZ\Ÿp:+\ÊT\ÓÜa#Pùï\‹kŒì<ïL+ÖÆ\'d7\Ë\ÿË∑õ	oÇóõ¢YÅ\ZwAı!\÷6D`ı;≠úòwlßˇ\0øÇ\„ˆ\Ãj*8*Z\‰Ò\‘CGç†¸WL\≈˜?\ﬂ\ <ì?g˚0\–(\’{ÀÅ\·∞\Zùﬁø8î\ÃplVLäc&Yáˆt©0\Ó÷Äz\≈˛*⁄Ä•Zë\Ê∑f,X±t\· v\Êëf.ìˇ\0EÙ¥˘±\ƒ¸ûü\“\œo∞\Â\ÿvºóQÆ?∫eß\Ì‰óïZ© \n¶\ﬂ{+û\“LÚAïbÇ≥á®\\\‚P3\÷Eö˜∑1\Õn[s§\≈\Ê.à‚±î\Ÿg8L\ﬁ\„\≈W¸l\ÿ\Ó\È\0s\"aqIΩ±ôMZç:™\›Úû+Æ]Ä¿EóW\Áç\0˜ÉG2WûRô.l[c◊Ç#tkar\Ì -jVë¡s5YRò}7H˛äì*ò\\#ñ)Öı¡ªúº\€\’zï\na≠kF¿\0<¨ºÎ≥òkã•7\r%ˇ\0˘\€¯°zJ∑\n®\Ÿ\ÁrÃïã\'1b≈ãÑ;¥L’ÖƒèÙüˆJ\"U\Î¸>#˝∑˝íÜZgV\—\Â¯j≤¡D0/É\ÊÉb)ñ√Ü\«\œ\—\\ßR\"˚®%\È\ÍE˙[\Ãr™uN≠\r\'çÆU!ïQh\Z\È\Ï9\"î\\N˜W\∆t¥\ T˙ãn\¬P?U∑ãYM<µ§ÇZG\0ò[Çh&BÁâ§\ﬂpäŸ•ó≤8Up¢VØÙW1>±BÒOõ7~Ã¢ä\'õv§\‚\ﬂ\ÀŸ∏y\ÀO\…z ^SîcN\·\Ïf≤≥”º\¬\È\«*\ÌÆ≥Z\\\„I\∆≈µi»±É\≈Wâ™¢\Èßc:\≈ŒïP\‡H Ò|\¬\›8A*∂3NàöØkF˝\‚∏qHπèkk‘ëN)Û˝¸<ê\nÄójy.6ªâqû•r\Ã8Êù∂k\‰):£â\rn£°§ôãû(\'5\≈UükZe!•Çwn\ÓºP\÷]Õü\÷Ô™∑äl|˛\n\\\“jE|xE\∆\ﬁ\»i\"\—\“G$\'™âµ\ÿL˛\ÔTjç\≈÷ò¨8p\Ÿ$™K\Ï\Áó\„\ƒo˝O$^ña1∑?zP≠ó9§önã\ÏÌ∫éJ≠|]vü\Õ\Ïmﬁù^0µ\Ó93$\Íû=|π™∏åtón~Jå\«\‚x0u6\Ízl\ƒU˝Vã\Ád]A\Ó\\\Ã39Ü\ÓN¿x¯.òJGw®èp\‰¥\√`E7Hªé\‰\€~HÉ)\¬\œ\√/Noî=€∫\‰Úä\‘o9\¬I\Íè\≈Ú+©8>ôöo{\«Iõ-\Ìv!ê*\’g∫¯é[ﬁÇ\·)m\’X4 ıïQˇ\Ÿ','madhura','madhura','2019-11-12 10:36:25',NULL),(3,'malee','malee','Female',703333333,'Kottawa','55792','124578964v','malee@gmail.com',_binary 'ˇ\ÿˇ\‡\0JFIF\0\0\0\0\0\0ˇ\€\0Ñ\0	\Z\Z( \Z%%1!%)+...383,7(9.+\n\n\n\r\r\r\r\r---7+-7++++-7+77+7-7+7++7--+-7++7-+-++7+-+-++-+7++-ˇ¿\0\0`\0`\"\0ˇ\ƒ\0\0\0\0\0\0\0\0\0\0\0\0\0\0ˇ\ƒ\05\0\0\0\0\0\0\0!1AQa\"qÅë±¡2R\—$BcsÇ°≤Cˇ\ƒ\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0ˇ\ƒ\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0ˇ\⁄\0\0\0?\0à/ó´\≈Ú\Œ0∞E8wuMDq4\\Ω\·æ\Â;Ñ\ÂnÖö\Ÿ@3Mqm3û\√\Í¶ÿû+$“∫Y\\_+ç\ÓS?\⁄f$\◊T#?\√”¥C\Âfh]\Ê]}R#\›r™∫b~cwu∞πÉπ\Ô≤\‚j\‹\÷Éq´w-\0ìπY\«<ñ\«¿F\Ë3Ö\‰,ßí\ÂjÕ¢¿îäÒl{VA\‚†}ïD#55nˇ\0\¬ì˚è∑\Â Y=úôh$`\ﬁG\Ê\'≥É\ﬁ˛\»1©ÀüÆ¸¸˜(p£}\Âu∫\Ÿl£¶\Ã~à0•ß.:\«EÅí\—.\√c∏Õ£˙rÙÍú°\√\⁄&å4l∏k®t:*îç≤]C\∆\€˘†ô\»\¬\∆h2íF\«\Â\"\»1\∆hÖèp˝\‹!\ÍâˆôAr%¥\Â>Go˜ÚßÆ1MX$\·î∫˛+ñ∑∞\ﬂ˛“≠ë™wˇ\0\0Ò˝Oúü¢\ÿ}9öf∑©Nî9êú\Õ\Ã\–ÙÓñ∏Ió™o™∂at˜h\—m&	$d_Cn˙\'<:ëœÉ?e≥ik{ùxi\›+[m\¬\\Z\Ì>\"O@ô•6t_]\’\Zß	k\ÿ\Ê\Î\ÓÑ\’\»~\œ\ﬁ\Ë\'ÿâk\⁄rçµJÛ≤\≈U¶¡\"â§Z\Ê€ï1\≈b\»˜Ñ††qç}4è\‹e¯\◊Ë§≥*\œ\»\€dµ\Ól\ZI\Àrz]*Ò\ﬂ2ôë\Õ<\Âsy5ˆΩáo\—bÓ•êò%`\⁄\Ìw±∑\’q.ä9≤ì›§{†€Å\‘˝\’Do\Â{#¢æ¸\Ìs¸Ú\Ê\ÿ˙™\œ\‚y\È≈èç∫ı@\ÈVïQ\ƒH\r\–˘¶|b\√(ÇS£{*¿ªÉ^é\Œn+â2\Œ˜[b<:z #É\Ÿ\ÍáO•\◊^FDÃ≠\'NªíÑW\Œ:†ãTjBòÒ≤?\ÕQ19-su:Øvg;π(	R‘∫™r^Hscs\⁄o\∆\0µ\Ô\À]ê,köh\€\›\·i&\›\\wqÓº•\≈\Õ{w±ø˘~\¬\Á\ƒ#Ò∫\€\\†≤j\ÿb+¡A\’ hw=Ù\“ˇ\0\◊bÉ¸ßB; qFQ\ZAG•è\\\‡ß[∑pçG^\Îi<ÄÙ6B¯&±°Å≤r6¸*OÄ∂ˆm˝.D\…e¸OqÄ-éXÖ≥]tc≥#æ°+\ÕT$9û\“˜qˆ\Ÿ)+•∑ne)∫/ÛNs\‚q1§1•\Œ:tõ¿];Ã≤xX<V∂Æ∂ˆ\ÏÇi\0\Õ#{∏#í¡r|\–\Ãç51á˛\‚\Í\‡\Œ°ìWFEˇ\0)≤€©÷ø∏WpÒºë∂\‹7ÙK\ÿ\∆ÖS∏5èë\ÓÛn_#¢	˝#ˇ\0|Å(µ#\‹\÷?Ú¥\\˚\”>$eh¶Å¢8øõ(±wôU>\√a•ßh`»ªùÃûûH\'o\·c,lî\ \‚\\G6\ﬂ`V¶\‡µ\0ÄŸùìôæ›¨ü∏ä,˛.Ñ!°¢\»§\·fìwJ\‚O`∫ \·Jp|E\Á\‘ÄçIP—¢¡≤∑t\‡10Z&\0\ÓßS\ÓWßk#{Z\Î8ê÷ì≠ò/µªì\Ó∂q DyEÛ;K\Í\0ıIuY\'ßíˇ\Ÿ','malee','malee','2019-11-12 10:42:25',NULL),(4,'lahiru','lahiru','Male',703333333,'Matara','89709','875462389v','lahiru@gmail.com',_binary 'ˇ\ÿˇ\‡\0JFIF\0\0\0\0\0\0ˇ\€\0Ñ\0	\Z(,%!1!%)+... 383,7(-.+\n\n\n\r\Z-%%----+-+-----------7+---7------------+77---7-7+-++7ˇ¿\0\0Ä\0Ä\"\0ˇ\ƒ\0\0\0\0\0\0\0\0\0\0\0\0\0\0ˇ\ƒ\0@\0\0\0\0\0\0\0!1AQq\"aÅ¡ë°±2≤#3BRbr¢\—\·Ò4CcsÇÉíˇ\ƒ\0\0\0\0\0\0\0\0\0\0\0\0\0\0ˇ\ƒ\0!\0\0\0\0\0\0\0\0\0\0\01!\"A2Qˇ\⁄\0\0\0?\0˜äå(}%ˆú\‡0\ƒS¸\ÌYkoÇ\‘ \ƒxêæ\¬\”/.sún\„~\'ƒß§z\Ó\ƒcköé:i<±£êa\·uj\›»≤∂\’v\ƒ6xÒé	ˆ>∞H\…\……ïyôC¥ù#Å˘ÛG* q\⁄±îH-\'rIî\Ï©a£\ŒŸóY•¿\»<G@∑\«‡æ´fv\‚A û±0\'N\ƒüÑ\„Ú¢tò6è\"\'\Â({Ò±%¯˘6çÆ8R0ÜoΩÇo•ïF\‡\€\Ìm>{´≤WV\"@\0òG\‹\ƒ ¥ﬂ¢\€ÒQ \Àx^◊à/G´ëñÅ œä\◊ï¥¥ê1h¸¨\„¿ü\—\ÁX<>í\«6\Œkªéº.\–|8Øy˙7\ÌQ\Ã(8W\“+Svó\0~∞¥<és ¯Ö\‰9∂CÜ˜∏és*\Ô\—\ﬁ,\–\Ã)/®\ \œ ∑2ùéVIí}®\nSÖ°\ T8.39vßÆΩw”™˜OÉú\‚>\Ï\√@`∑uÄïs\¬F7\À\√1/n\ÎÙ˙&\ﬁ\ÕR∞\ﬂÑ)eiqˆ5\·Gø\—•J\»~r˚\Ÿ§˝∫$¢…õ≤î\0§\–i›†¯B\Î™\€-I\‰ôHU≤•\\∫ôªãJx0\÷¿≤∏J\‰Ú∏\—\€eZ¥$*™0“ä∏ •ä6)l8∂$vÅ≤Œá\Ó˛\Ë™\«Òi\È}˛	ü¥ŒûWﬂóäQ¢&†\–á¡¿\ ~-ë\ÁG“∏\n\⁄\ÈR~˙ò\”\Ô\0˙´\n¶SG\Ÿ–†\ÕÙ\”c}\Õ\—[Uë†¨*é75£E¡µàòπ1\Ã\∆¡q∫FIΩ\⁄,ôöc\·]\Óˆ?\⁄{ûn ∞æ\Ã7ß¢´Ù°L\œQ§i©Nôûeµ\ÈWıÅ`Zx[\’KîÙ8\À˙\Z†Ò]†RÛ3ä\"\0\‘`I16ÛX\Œ\Ÿ\‡\⁄@\÷DZ\Ì0RR)îï\r\Õq\„˜≤\Ÿ¡\ÁÙ*«≥®\◊@\›•T\≈Bàz\‰ÈÇªT®òf\‘h¥öè\r?\…q∞ëµG\«%GV\≈´\€9$1Ø®G\Íà˘\Ó∏\‚3˘ä5`,#\«~(\Z	I1,∏ı˛\…^é\0~0\√S\‘˙c\…œÑ\√K⁄Ç[> à<º.)¨\Ã\È>†q\»0€í[$\r\·;åü?\…x{\€T•˛\Ãg51B°™¿\»=\–\Ÿ=”∞w\Ì#¡TùêJ..ôÑ§û\‘\“Ö¥\Ã\r\·/)\›+vØ	˘Ju\'~\Á¸ª≈æ©<è\”¬é#¨æà∂\ \⁄\Ê6†lTcöI∆ô7ÙVKPm∏4˘¢û^_¨∏ìu¶\–+|6òò\‡§\Ï\Ëπ\≈)Å3K\⁄Z\÷Si&\ƒ\‹è-–åÚçju(≤´E_hX@m;7\\…û:lˆ\'*k∏\r\ÏF\„\≈oK\n\ËÇÈçâ\0ñ¯éH\·$∂Å…è∂ò®\ﬁ öNßZ\”›∞çà\›1dUú”¢ßV\ﬂO@/q\‘\Ód*TI\÷:\…Bﬂ£!àS8©°Ö√íG9+±u\Z`8«ëâív~r\ÈaC∞tı[Ü\Î}ŸúmP≥¯™µ,_\‡\Ïk\√\'p\ÀN†ké\„M˙´µiT°]\Õs©\Í d¿\Ê8rMßP\ÿ<Ú±∫≠C,\r$õìÚG)\⁄–ò\‚ß\Î‘•\„π˘!∏ZAòß=\ƒ	k@ûe\ƒ&lÕÄêj\ÿví«ëp\‡=ÚP©xU\ÿ{\ÏIÜUo\'=Z¢gKùâ°¶Å1ıù«ê\0z&5n?\"è;;ºçò©f∏okI\ÌâtK|>©Ú0Æ®(•°I¥\ÏC4\‹A cKÅ\‰E˝‹∫§@;Å®±LπÆ\rÙ\Í<µèsgπrfDrÒJ \Ë≠QÆo|ê4\Ÿ\◊ÛP85\„=UëJö\È‘ê\ƒ*xgjZ\Ÿp:+\ÊT\ÓÜa#Pùï\‹kŒì<ïL+ÖÆ\'d7\Ë\ÿË∑õ	oÇóõ¢YÅ\ZwAı!\÷6D`ı;≠úòwlßˇ\0øÇ\„ˆ\Ãj*8*Z\‰Ò\‘CGç†¸WL\≈˜?\ﬂ\ <ì?g˚0\–(\’{ÀÅ\·∞\Zùﬁø8î\ÃplVLäc&Yáˆt©0\Ó÷Äz\≈˛*⁄Ä•Zë\Ê∑f,X±t\· v\Êëf.ìˇ\0EÙ¥˘±\ƒ¸ûü\“\œo∞\Â\ÿvºóQÆ?∫eß\Ì‰óïZ© \n¶\ﬂ{+û\“LÚAïbÇ≥á®\\\‚P3\÷Eö˜∑1\Õn[s§\≈\Ê.à‚±î\Ÿg8L\ﬁ\„\≈W¸l\ÿ\Ó\È\0s\"aqIΩ±ôMZç:™\›Úû+Æ]Ä¿EóW\Áç\0˜ÉG2WûRô.l[c◊Ç#tkar\Ì -jVë¡s5YRò}7H˛äì*ò\\#ñ)Öı¡ªúº\€\’zï\na≠kF¿\0<¨ºÎ≥òkã•7\r%ˇ\0˘\€¯°zJ∑\n®\Ÿ\ÁrÃïã\'1b≈ãÑ;¥L’ÖƒèÙüˆJ\"U\Î¸>#˝∑˝íÜZgV\—\Â¯j≤¡D0/É\ÊÉb)ñ√Ü\«\œ\—\\ßR\"˚®%\È\ÍE˙[\Ãr™uN≠\r\'çÆU!ïQh\Z\È\Ï9\"î\\N˜W\∆t¥\ T˙ãn\¬P?U∑ãYM<µ§ÇZG\0ò[Çh&BÁâ§\ﬂpäŸ•ó≤8Up¢VØÙW1>±BÒOõ7~Ã¢ä\'õv§\‚\ﬂ\ÀŸ∏y\ÀO\…z ^SîcN\·\Ïf≤≥”º\¬\È\«*\ÌÆ≥Z\\\„I\∆≈µi»±É\≈Wâ™¢\Èßc:\≈ŒïP\‡H Ò|\¬\›8A*∂3NàöØkF˝\‚∏qHπèkk‘ëN)Û˝¸<ê\nÄójy.6ªâqû•r\Ã8Êù∂k\‰):£â\rn£°§ôãû(\'5\≈UükZe!•Çwn\ÓºP\÷]Õü\÷Ô™∑äl|˛\n\\\“jE|xE\∆\ﬁ\»i\"\—\“G$\'™âµ\ÿL˛\ÔTjç\≈÷ò¨8p\Ÿ$™K\Ï\Áó\„\ƒo˝O$^ña1∑?zP≠ó9§önã\ÏÌ∫éJ≠|]vü\Õ\Ïmﬁù^0µ\Ó93$\Íû=|π™∏åtón~Jå\«\‚x0u6\Ízl\ƒU˝Vã\Ád]A\Ó\\\Ã39Ü\ÓN¿x¯.òJGw®èp\‰¥\√`E7Hªé\‰\€~HÉ)\¬\œ\√/Noî=€∫\‰Úä\‘o9\¬I\Íè\≈Ú+©8>ôöo{\«Iõ-\Ìv!ê*\’g∫¯é[ﬁÇ\·)m\’X4 ıïQˇ\Ÿ','lahiru','lahiru','2019-11-13 08:07:31',NULL),(5,'Nimna','Perera','Male',711234567,'pettah','12345','983050311V','nimnaperera98@gmail.com',NULL,'nimna','nimna','2020-01-12 13:47:27',NULL),(6,'Nimna','Perera','Male',711234567,'pettah','123456','983050310V','nimnaperera981@gmail.com',NULL,'nimna1','nimna','2020-01-12 13:51:03',NULL);
/*!40000 ALTER TABLE `drivers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `landowners`
--

DROP TABLE IF EXISTS `landowners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `landowners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` longblob,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `landowners`
--

LOCK TABLES `landowners` WRITE;
/*!40000 ALTER TABLE `landowners` DISABLE KEYS */;
INSERT INTO `landowners` VALUES (1,'saman','saman','Male',715555555,'984578994v','saman@gmail.com','','sahan','sahan',0,'2020-01-26 19:55:39','2020-01-26 14:25:39'),(2,'waruni','waruni','Female',712222888,'124578964v','waruni@gmail.com','','waruni','waruni',1,'2019-11-16 16:29:44',NULL),(3,'mahela','mahela','Male',705555555,'214578994v','mahela@gmail.com','','mahela','mahela',1,'2019-11-16 16:29:58',NULL),(4,'Pawan','Pawan','Male',703333333,'124578964v','pawan@gmail.com','','Pawan','Pawan',0,'2019-11-16 16:00:24',NULL),(5,'pika','pika','Female',705522881,'214578994v','pika@yahoomail.com','','pika','pika',1,'2019-11-16 16:06:57',NULL),(6,'kalpi','kalpi','Female',112523785,'459862138v','kalpi@ymail.com','','kalpi','kalpi',1,'2019-11-16 16:29:17',NULL),(7,'keshani','keshani','Female',754861236,'856214523v','keshani@gmail.com','','keshani','keshani',1,'2019-11-16 16:31:07',NULL),(8,'upul','upul','Male',705555555,'214578994v','upul@gmail.com','','upul','upul',1,'2019-11-16 16:33:52',NULL),(9,'kapila','kapila','Male',703333333,'124578964v','kapila@gmail.com','','kapila','kapila',0,'2019-11-16 16:32:05',NULL),(10,'pasan','pasan','Male',703333333,'124578964v','pasan@yahomail.com','','','',0,'2019-11-16 16:44:30',NULL),(11,'Nimna','Perera','Male',711234567,'983050310V','nimnaperera98@gmail.com',NULL,'nimna','nimna',0,'2020-01-12 13:01:59',NULL),(12,'Nimna','Perera','Male',711234567,'983050311V','nimnaperera981@gmail.com',NULL,'nimna1','nimna1',0,'2020-01-12 13:05:02',NULL);
/*!40000 ALTER TABLE `landowners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (20,'2014_10_12_000000_create_users_table',1),(21,'2014_10_12_100000_create_password_resets_table',1),(22,'2019_08_19_000000_create_failed_jobs_table',1),(23,'2019_09_14_082315_create_contacts_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opentimes`
--

DROP TABLE IF EXISTS `opentimes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opentimes` (
  `parking_space_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `open_from` time NOT NULL,
  `open_till` time NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`parking_space_id`,`date`),
  CONSTRAINT `parking_space_opentime` FOREIGN KEY (`parking_space_id`) REFERENCES `parking_spaces` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opentimes`
--

LOCK TABLES `opentimes` WRITE;
/*!40000 ALTER TABLE `opentimes` DISABLE KEYS */;
INSERT INTO `opentimes` VALUES (22,'Friday','12:59:00','12:59:00','2020-02-16 06:45:48','2020-02-16 06:45:48'),(22,'Monday','12:59:00','12:59:00','2020-02-16 06:45:48','2020-02-16 06:45:48'),(22,'Saturday','12:59:00','12:59:00','2020-02-16 06:45:48','2020-02-16 06:45:48'),(22,'Sunday','12:59:00','12:59:00','2020-02-16 06:45:48','2020-02-16 06:45:48'),(22,'Thursday','12:59:00','12:59:00','2020-02-16 06:45:48','2020-02-16 06:45:48'),(22,'Tuesday','12:59:00','12:59:00','2020-02-16 06:45:48','2020-02-16 06:45:48'),(22,'Wednesday','12:59:00','12:59:00','2020-02-16 06:45:48','2020-02-16 06:45:48'),(23,'Friday','12:59:00','12:59:00','2020-02-16 06:47:27','2020-02-16 06:47:27'),(23,'Monday','12:59:00','12:59:00','2020-02-16 06:47:27','2020-02-16 06:47:27'),(23,'Saturday','12:59:00','12:59:00','2020-02-16 06:47:27','2020-02-16 06:47:27'),(23,'Sunday','12:59:00','12:59:00','2020-02-16 06:47:27','2020-02-16 06:47:27'),(23,'Thursday','12:59:00','12:59:00','2020-02-16 06:47:27','2020-02-16 06:47:27'),(23,'Tuesday','12:59:00','12:59:00','2020-02-16 06:47:27','2020-02-16 06:47:27'),(23,'Wednesday','12:59:00','12:59:00','2020-02-16 06:47:27','2020-02-16 06:47:27');
/*!40000 ALTER TABLE `opentimes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parking_spaces`
--

DROP TABLE IF EXISTS `parking_spaces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parking_spaces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `landowner_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `longitude` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `is_reservation_on` tinyint(1) NOT NULL DEFAULT '0',
  `image_url` varchar(200) DEFAULT NULL,
  `description` longtext NOT NULL,
  `poya` varchar(11) DEFAULT '0',
  `bank` varchar(11) DEFAULT '0',
  `public` varchar(11) DEFAULT '0',
  `verified` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parking_space_landowner` (`landowner_id`),
  KEY `parking_space_admin` (`admin_id`),
  CONSTRAINT `parking_space_admin` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `parking_space_landowner` FOREIGN KEY (`landowner_id`) REFERENCES `landowners` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parking_spaces`
--

LOCK TABLES `parking_spaces` WRITE;
/*!40000 ALTER TABLE `parking_spaces` DISABLE KEYS */;
INSERT INTO `parking_spaces` VALUES (22,1,NULL,'Test','wewefd',0,0,0,'1581855348.jpg','ewefe',NULL,NULL,NULL,NULL,'2020-02-16 06:45:48','2020-02-16 06:45:48'),(23,1,NULL,'sdfvdsfv','sdfvdfv',0,0,0,'1581855447.jpg','dfvsdfv',NULL,NULL,NULL,NULL,'2020-02-16 06:47:27','2020-02-16 06:47:27');
/*!40000 ALTER TABLE `parking_spaces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parking_vehicle_types`
--

DROP TABLE IF EXISTS `parking_vehicle_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parking_vehicle_types` (
  `parking_space_id` int(11) NOT NULL,
  `vehicle_type` varchar(150) NOT NULL,
  `total_no_of_vehicles` int(11) NOT NULL,
  `no_of_vehicles_parked` int(11) DEFAULT NULL,
  `number_reserved` int(11) NOT NULL,
  `amount_per_hour` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`parking_space_id`,`vehicle_type`),
  CONSTRAINT `parking_space_type` FOREIGN KEY (`parking_space_id`) REFERENCES `parking_spaces` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parking_vehicle_types`
--

LOCK TABLES `parking_vehicle_types` WRITE;
/*!40000 ALTER TABLE `parking_vehicle_types` DISABLE KEYS */;
INSERT INTO `parking_vehicle_types` VALUES (22,'Bike',10,2,1,50,'2020-02-16 12:43:04'),(22,'Car',15,4,6,200,'2020-02-16 12:43:04');
/*!40000 ALTER TABLE `parking_vehicle_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('sahannett@gmail.com','$2y$10$4p8MJAQ08IeSIMPpgLKIruaEtsiWooONEDI6bswrVQwhKEe4zTmfe','2019-09-25 21:52:53');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `driver_id` int(11) NOT NULL,
  `parking_space_id` int(11) NOT NULL,
  `duration_from` datetime NOT NULL,
  `duration_to` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `vehicle_type` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reservation_driver` (`driver_id`),
  KEY `reservation_parking_space` (`parking_space_id`),
  CONSTRAINT `reservation_driver` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `reservation_parking_space` FOREIGN KEY (`parking_space_id`) REFERENCES `parking_spaces` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `driver_id` int(11) NOT NULL,
  `parking_space_id` int(11) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_driver` (`driver_id`),
  KEY `reviws_parking_space` (`parking_space_id`),
  CONSTRAINT `reviews_driver` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `reviws_parking_space` FOREIGN KEY (`parking_space_id`) REFERENCES `parking_spaces` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'sahan madusanka','sahannett@gmail.com',NULL,'$2y$10$qBlcuHWk.1JV3wqVjvto2.l5.z1LliuEMaI0h5W/8wgTsR3ati0si',NULL,'2019-09-25 21:43:47','2019-09-25 21:43:47'),(2,'Sahan','sahan@gmail.com',NULL,'$2y$10$2rjEIXYaptQXroU28ZO5buaGuw5g9q6hQaUoQv36UZCVjYSmlgzQ2',NULL,'2019-10-03 21:15:17','2019-10-03 21:15:17');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `driver_id` int(11) NOT NULL,
  `vehicle_no` varchar(7) NOT NULL,
  `type` varchar(100) NOT NULL,
  `colour` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `vehicle_owner` (`driver_id`),
  CONSTRAINT `vehicle_owner` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicles`
--

LOCK TABLES `vehicles` WRITE;
/*!40000 ALTER TABLE `vehicles` DISABLE KEYS */;
INSERT INTO `vehicles` VALUES (1,2,'GH6754','toyata','white','2019-11-12 17:02:16'),(2,1,'BV4579','BMW','black','2019-11-12 17:02:59');
/*!40000 ALTER TABLE `vehicles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'parking'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-16 18:58:02
