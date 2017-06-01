/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `losvanillaos`
--

-- --------------------------------------------------------

--
-- Structure de la table `stock_exchange`
--

CREATE TABLE `stock_exchange` (
  `resource_id` int(11) NOT NULL,
  `price_current` int(11) NOT NULL,
  `price_previous` int(11) NOT NULL,
  `price_base` int(11) NOT NULL,
  `coef` int(11) NOT NULL,
  `sell` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `stock_exchange`
--

INSERT INTO `stock_exchange` (`resource_id`, `price_current`, `price_previous`, `price_base`, `coef`, `sell`) VALUES
(1, 350, 350, 350, 30, 100),
(2, 100, 100, 100, 30, 100),
(4, 125, 125, 125, 50, 100),
(6, 410, 410, 410, 30, 100),
(7, 320, 320, 320, 30, 100),
(9, 210, 147, 210, 30, 100),
(10, 352, 346, 380, 20, 100),
(11, 110, 110, 110, 30, 100),
(13, 450, 450, 450, 30, 100),
(15, 80, 80, 80, 50, 100),
(17, 210, 253, 210, 30, 100),
(18, 583, 589, 550, 20, 100);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `stock_exchange`
--
ALTER TABLE `stock_exchange`
  ADD PRIMARY KEY (`resource_id`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `stock_exchange`
--
ALTER TABLE `stock_exchange`
  ADD CONSTRAINT `fk_resource_id` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`resources_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
