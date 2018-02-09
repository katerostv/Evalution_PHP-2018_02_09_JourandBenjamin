-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  ven. 09 fév. 2018 à 16:58
-- Version du serveur :  5.6.38
-- Version de PHP :  7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exercice_3`
--

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `actors` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `producer` varchar(255) NOT NULL,
  `year_of_prod` year(4) NOT NULL,
  `language` varchar(255) NOT NULL,
  `category` enum('Aventure','Drame','Comedie','Thriller') NOT NULL,
  `storyline` text NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`id`, `title`, `actors`, `director`, `producer`, `year_of_prod`, `language`, `category`, `storyline`, `video`) VALUES
(1, 'test', 'test', 'test', 'test', 1990, 'francais', 'Comedie', 'test', 'test'),
(2, 'test1', 'test1', 'test1', 'test1', 1993, '2', 'Aventure', '<p>zegzeg</p>', 'z'),
(3, 'test1', 'test1', 'test1', 'test1', 1993, 'Anglais', 'Aventure', '<p>zegzeg</p>', 'z'),
(4, 'aetntest1', 'test1atern', 'test1aten', 'aetntest1', 1993, 'Espagnol', 'Thriller', '&lt;p&gt;zegzegebnetnaet&lt;/p&gt;', 'zzrfb'),
(5, 'test5', 'test2', 'test2', 'test2', 1990, 'Francais', 'Aventure', '&lt;p&gt;dsvzmorjbgzroibv&lt;/p&gt;', 'http://www.google.fr'),
(6, 'La ligne verte', 'Tom Hanks', 'Frank Daramont', 'Frank Daramont', 2000, 'Anglais', 'Drame', '&lt;div class=&quot;ovw-synopsis-info&quot; style=&quot;box-sizing: border-box; position: relative; overflow: hidden; color: #000000; font-family: Arial, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n&lt;div class=&quot;synopsis-txt&quot; style=&quot;box-sizing: border-box; font-size: 1rem; line-height: 1.4; margin-bottom: 1.25rem; color: #333333; font-family: Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;&quot;&gt;Paul Edgecomb, pensionnaire centenaire d\'une maison de retraite, est hant&amp;eacute; par ses souvenirs. Gardien-chef du p&amp;eacute;nitencier de Cold Mountain en 1935, il &amp;eacute;tait charg&amp;eacute; de veiller au bon d&amp;eacute;roulement des ex&amp;eacute;cutions capitales en s&amp;rsquo;effor&amp;ccedil;ant d\'adoucir les derniers moments des condamn&amp;eacute;s. Parmi eux se trouvait un colosse du nom de John Coffey, accus&amp;eacute; du viol et du meurtre de deux fillettes. Intrigu&amp;eacute; par cet homme candide et timide aux dons magiques, Edgecomb va tisser avec lui des liens tr&amp;egrave;s forts.&lt;/div&gt;', 'http://www.allocine.fr/video/player_gen_cmedia=19499327&cfilm=22779.html');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
