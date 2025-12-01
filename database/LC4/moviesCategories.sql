--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `idCategory` tinyint NOT NULL,
  `category` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `validCategory` tinyint NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`idCategory`, `category`, `validCategory`) VALUES
(1, 'Comedy', 1),
(2, 'Fantastic', 1),
(3, 'Thriller', 1),
(4, 'Drama', 1),
(5, 'Historical', 1),
(6, 'Science Fiction', 1),
(7, 'Romance', 1);

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies` (
  `idMovie` int NOT NULL,
  `titleMovie` varchar(100) NOT NULL,
  `idCategory` tinyint NOT NULL,
  `validMovie` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`idMovie`, `titleMovie`, `idCategory`, `validMovie`) VALUES
(1, 'Le dîner de cons', 1, 1),
(2, 'Les bronzés font du ski', 1, 1),
(3, 'Taxi driver', 4, 1),
(4, 'Titanic', 4, 1),
(6, 'Cinquième élément', 2, 1),
(7, 'Cinquième élément', 2, 1),
(8, 'Men in black', 2, 1),
(9, 'Oceans s twelve', 3, 1),
(10, 'Shining', 3, 1),
(11, 'Orange mécanique', 2, 1),
(12, 'Le parrain', 3, 1),
(13, 'Gladiator', 5, 1),
(14, 'Le jour le plus long', 5, 1),
(15, 'Les affranchis', 3, 1),
(16, 'Les oiseaux', 4, 1),
(17, 'Jumanji', 2, 1),
(18, 'Bienvenue à Gattaca', 2, 1),
(19, 'Erin Brokovich', 4, 1),
(20, 'Talons aiguilles', 4, 1),
(21, 'Radin', 1, 1),
(24, 'Star Wars', 6, 1),
(25, 'La vie est un long fleuve traquille', 1, 1),
(26, 'Star wars', 6, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCategory`);

--
-- Index pour la table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`idMovie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `idCategory` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `movies`
--
ALTER TABLE `movies`
  MODIFY `idMovie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;