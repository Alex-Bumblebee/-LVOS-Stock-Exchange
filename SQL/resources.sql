/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `losvanillaos`
--

-- --------------------------------------------------------

--
-- Structure de la table `resources`
--

CREATE TABLE `resources` (
  `resources_id` int(11) NOT NULL,
  `resources_name` varchar(60) DEFAULT NULL,
  `resources_weight` int(11) NOT NULL DEFAULT '1',
  `resources_type` int(11) NOT NULL DEFAULT '0',
  `resources_type_libelle` varchar(60) NOT NULL,
  `resource_value` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `resources`
--

INSERT INTO `resources` (`resources_id`, `resources_name`, `resources_weight`, `resources_type`, `resources_type_libelle`, `resource_value`) VALUES
(1, 'Cannabis', 1, 1, 'Illégale', 0),
(2, 'Minerai de fer', 1, 0, 'Légale', 0),
(3, 'Pétrole', 1, 0, 'Légale', 0),
(4, 'Fuel', 1, 2, 'Légale transformée', 0),
(5, 'Feuille de coca', 1, 1, 'Illégale', 0),
(6, 'Cocaïne', 1, 3, 'Illégale transformée', 0),
(7, 'Extasy', 1, 1, 'Illégale', 0),
(8, 'Minerai d\'or', 1, 0, 'Légale', 0),
(9, 'Or', 1, 2, 'Légale transformée', 0),
(10, 'Diamant', 1, 0, 'Légale', 0),
(11, 'Thon', 1, 0, 'Légale', 0),
(12, 'Morphine', 1, 1, 'Illégale', 0),
(13, 'Héroïne', 1, 1, 'Illégale transformée', 0),
(14, 'Bois', 1, 0, 'Légale', 0),
(15, 'Bois précieux', 1, 2, 'Légale transformée', 0),
(16, 'Saumon', 1, 0, 'Légale', 0),
(17, 'Sushi', 1, 2, 'Légale transformée', 0),
(18, 'Thon rouge', 1, 0, 'Légale', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`resources_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `resources`
--
ALTER TABLE `resources`
  MODIFY `resources_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
