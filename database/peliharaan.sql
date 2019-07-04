-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2019 at 01:57 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peliharaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporanhilang`
--

CREATE TABLE `laporanhilang` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(15) NOT NULL,
  `datefound` date NOT NULL,
  `animal_type` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `location` varchar(15) NOT NULL,
  `posted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporanhilang`
--

INSERT INTO `laporanhilang` (`id`, `name`, `email`, `telephone`, `datefound`, `animal_type`, `deskripsi`, `location`, `posted_time`, `image`) VALUES
(1, 'Harry', 'hstyles@mail.com', 652331400, '2019-03-07', 'cat', 'black fur long brow? has 3 legs but it runs fast though so i could really took a pic of it. but my roommate managed to took its tail pic.', 'Manchester', '2019-07-01 11:24:28', 'blackfur.jpg'),
(2, 'Louis', 'ltommo28@mail.com', 48946513, '2019-04-09', 'dog', 'big dog, labrador, yellow fur, has a tag called \"bingo\"', 'Birmingham', '2019-07-01 11:32:20', 'YellowLabradorLooking_new.jpg'),
(3, 'Levi', 'lackermann@snail.com', 7878888, '2019-06-18', 'lizard', 'my husband found this lizard with a blue collar tag (we removed the collar on the pic). has pretty colors on its body like spiderman', 'Wall Maria', '2019-07-01 11:35:16', 'the-male-agama-an-amazing.jpg'),
(4, 'Will', 'willgraham@gmail.com', 758520001, '2019-07-03', 'dog', 'Found this dog with no tag, has medium long golden fur and about 3-4 years old. Wandered around the street at night. I gave him sausage. ', 'Wolf Trap', '2019-07-02 06:32:48', 'doggo.jpg'),
(6, 'Sam', 'sam_winchester@ymail.com', 666387512, '2019-06-12', 'dog', 'i crashed into this bud and got his leg patch up. im so sorry to the owner, but he is okay with me now. he is a collie & shepherd mix, i think, with brown fur.', 'Utah', '2019-07-02 06:43:40', 'dogg.jpg'),
(12, 'Bakugou', 'kingexplosive@mail.jp', 2147483647, '2019-06-14', 'big lizard', 'weird red lizard, so big like monster truck big! has a very sharp teeth and likes being pet. very shy so i just drew it', 'Near UA', '2019-07-02 07:51:32', 'tumblr_p4vgohlFhO1tt9s6mo2_500.png'),
(14, 'Aizawa', 'eraserhead@heromail.com', 556235400, '2019-06-28', 'cat', 'black cat, following me around bc i smell like catnip. has golden eyes', 'Musutafu', '2019-07-02 09:18:02', 'Screen-Shot-2018-01-30-at-09.26.22.png'),
(24, 'Gabriel', 'gabemsg@mail.com', 7856456, '2019-06-20', 'snake', 'this antique snake was in front of my bed room window. someone named it luci-something, dont ask how i know this', 'Kansas', '2019-07-02 10:51:38', 'luci.jpg'),
(25, 'Todoroki', 'shotodoroki@mail.jp', 84912312, '2019-07-07', 'cat', 'i saw a green cat yesterday, kinda looks like my partner', 'Around Hachi St', '2019-07-02 10:51:38', 'catgreen.jpg'),
(26, 'Jon', 'jonsno@stark.com', 8484515, '2019-05-30', 'Wolf', 'im not sure if this a big wolf or a giant dog but this is a huge dogo. white fur and red eyes so i think it is albino.', 'Winterfell', '2019-07-02 10:53:52', '22-got-ghost.w700.h700.jpg'),
(30, 'Dean', 'dwimpala67@mai.com', 548646456, '2019-06-29', 'dog', 'please for the love of god for whoever the owner of this dog, call me! my brother crashed on this dog and now he cant stop crying ffs! ', 'Utah', '2019-07-02 12:02:00', '89641721.jpg'),
(32, 'Sherlock', 'holmes221b@london.com', 7656846, '2019-07-03', 'Tarantula', 'Big tarantula inside my flat. I dont even know if its a pet or not but wont hurt to report. ', 'Bakerstreet', '2019-07-03 09:52:03', 'web_img_0001.jpg'),
(33, 'Niall', 'niallerh@irish.ir', 77778877, '2019-06-01', 'dog', 'this small doggo had sleep on my backyard so poured milk for him. oh its a he so yea. has brown tag but no details. um, its me and the doggo on pic. just give me a call', 'Mullingar', '2019-07-03 10:39:29', 'found.jpg'),
(35, 'Chesya', 'brigittache@meil.co', 808080808, '2019-07-03', 'Hamster', 'I found this cute hamster in its bubble. It has cream fur with brown stripe', 'UNSADA', '2019-07-03 11:50:13', 'my-name-cMp84C0fPSg-unsplash.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporanhilang`
--
ALTER TABLE `laporanhilang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporanhilang`
--
ALTER TABLE `laporanhilang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
