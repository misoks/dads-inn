-- phpMyAdmin SQL Dump
-- version 4.3.0-dev
-- http://www.phpmyadmin.net
--
-- Host: illustomp.db
-- Generation Time: May 26, 2014 at 01:00 PM
-- Server version: 5.3.12-MariaDB
-- PHP Version: 5.3.28-nfsn3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dadsinn`
--

-- --------------------------------------------------------

--
-- Table structure for table `Dads`
--

CREATE TABLE IF NOT EXISTS `Dads` (
`dad_id` int(11) NOT NULL,
  `dad_name` varchar(128) NOT NULL,
  `age` int(11) NOT NULL,
  `img_path` varchar(2000) DEFAULT NULL,
  `reason` text
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `Dads`
--

INSERT INTO `Dads` (`dad_id`, `dad_name`, `age`, `img_path`, `reason`) VALUES
(1, 'Richard Dunn', 68, 'dunnx-large.jpg', 'Found a better Pep-Pep.'),
(18, 'Boar Dad', 65, 'dogteeth_bosshog.png', 'Too smelly'),
(20, 'Family Dad', 12, 'american-dad-yahoo1.jpg', 'goodbye dad'),
(19, 'Ronald', 155, 'cjskelweb.gif', 'Lazy'),
(17, 'Mr. Gerrarksdad', 54, 'Papa boar.png', 'Too hot to live'),
(12, 'Jeff', 66, 'dad.JPG', 'Farts :('),
(11, 'Bilb Ono', 38, '50332_112763138756407_2237261_n.jpg', 'I prefer Mike Zanetti.'),
(21, 'Dennis Nermal ', 16, 'nermal.jpg', 'Filth. '),
(22, 'Joren Queefstone', 54, 'larry.jpg', 'Knows how to burn CDs'),
(23, 'Jorb McKonovitz', 52, '0307050340-untitled.JPG', 'in town for regional 33rd annual dentists reinvent the crest convention'),
(24, 'Ding Dong Wonderful', 52, '0312120317-76183_389648137780806_529537767_n.jpg', 'Ding Dong would like to meet other like minded Dads who can give him pointers in goatee maintenance. '),
(25, 'Dong Dong Wonderful', 52, '0312010355-dong ding.jpg', 'Ding Dong''s twin brother. Tries to compensate for his lack of goatee by wearing a top hat. Fools no one. '),
(26, 'No Dad', 0, '0313120359-no-dad.jpg', 'I don''t have a Dad and I''m sorry about that.'),
(27, 'Rick', 62, '0316120355-DSC_1616.jpg', 'old'),
(29, 'Salacious', 40, '0404040448-200px-Crumb_btm.jpg', 'Needs a home'),
(30, 'Bucky', 35, '0404030423-id-10070836.jpg', 'Really messed up this time'),
(31, 'Randy', 61, '0416030427-Dad.jpg', 'Can''t stand the ''ol man anymore'),
(32, 'Prez prez', 3, '0526090555-image.jpg', 'To get bitches'),
(33, 'Rick', 50, '0526090507-image.jpg', 'Claims to be a pawner'),
(34, 'Cill Bosby', 60, '0526100514-image.jpg', 'Pudding'),
(35, 'Will', 38, '0531100546-willgraham.jpg', 'wet dog smell'),
(36, 'Hannibal', 47, '0531100528-hannibal333-710x400.jpg', 'i cannot afford jamon iberico '),
(37, 'Max', 26, '0606020615-MrMax.jpg', 'Steely Dan'),
(39, 'Blue', 5, '0607020617-image.jpg', 'Smells,too dank.'),
(40, 'Dwadles', 52, '0616070649-Screen Shot 2013-06-16 at 3.02.50 PM.png', 'California summer too hot'),
(42, 'hogdman', 42, '0622060632-hodgghhh.jpg', 'yale'),
(46, 'janis joplin', 0, '0710010747-RiCmf.jpeg', 'I need somewhere to mellow the yellow'),
(47, 'Trum', 50, '0820070826-Trumpy copy.jpg', 'smells'),
(48, 'Binnacles Dingslap', 39, '1128041120-1458635_10152005954393680_2145087253_n.jpg', 'lokieng at my bute'),
(49, 'Andy Rahowl', 9, '1129011129-image.jpg', 'need a new rope to bail mother'),
(50, 'Harry porter', 0, '1129011154-image.jpg', 'my son threw a radish at me'),
(51, 'bulba', 32, '1201101205-1891758-001bulbasaur.png', 'ladies love cool bulbasaur'),
(52, 'Tim Curry', 69, '1201101213-tcurry.jpg', 'Professional actor. Professional daddy.'),
(53, 'corn', 0, '1201101210-DSC_0017.jpg', 'No salt, great value!!!'),
(54, 'Hagrid', 46, '1201101219-hurley.jpg', 'yer a wizard harry'),
(55, 'sparks', 43, '0104070156-players-0012.jpg', 'gross'),
(56, 'Croach the Tracker', 0, '0105030155-333442432_640.jpg', 'Won''t shut up about how glorious his body is.'),
(57, 'Doctor Schrein PhD ', 45, '0213090228-image.jpg', 'I''m hiding in the blue bold-faced and I''m hungry like the wolf '),
(58, 'Doctor Schrein PhD ', 45, '0213090244-image.jpg', 'I''m hiding in the blue bold-faced and I''m hungry like the wolf '),
(59, 'Keith Tupper ', 38, '0213090243-image.jpg', 'I can''t do it '),
(60, 'MadDad', 27, '0214120246-image.jpg', 'My bute hrts'),
(61, 'Farthead', 67, '0215060223-tumblr_a1.jpg', 'mysogynist with an Xy female identifying son'),
(62, 'Richard Noggin', 17, '0218090207-image.jpg', 'I''m here to obtain ultimate geeeeemage '),
(63, 'Dadrus', 173, '0219100243-image.jpg', 'I''m the radrus dad'),
(64, 'po', 3, '0223040217-ee7a1f6e43aa724a836c84c6dbad76f6.png', 'no'),
(65, 'Pops', 77, '0302100323-father.png', 'because he is sweet.'),
(70, 'Bob Johnson', 54, '0326090338-image.jpg', 'My names not Willie Stroker'),
(68, 'JOhn', 3, '0324060347-48896_1537313481_5334_s[1].jpg', 'Happy Dad Day DAD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Dads`
--
ALTER TABLE `Dads`
 ADD PRIMARY KEY (`dad_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Dads`
--
ALTER TABLE `Dads`
MODIFY `dad_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=71;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
