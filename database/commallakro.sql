
--
-- Base de données : `commallakro`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `amenages`
--

CREATE TABLE `amenages` (
  `id` bigint(20) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `function` varchar(45) DEFAULT NULL,
  `date_born` date DEFAULT NULL,
  `provenance` varchar(45) DEFAULT NULL,
  `mode_heb` varchar(45) DEFAULT NULL,
  `parent_name` varchar(100) DEFAULT NULL,
  `city_live` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `users_id` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `sexe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `amenages`
--

INSERT INTO `amenages` (`id`, `firstname`, `lastname`, `function`, `date_born`, `provenance`, `mode_heb`, `parent_name`, `city_live`, `created_at`, `updated_at`, `users_id`, `status`, `sexe`) VALUES
(1, 'dsd', 'sqsq', 'dsd', '2023-08-11', NULL, NULL, NULL, 'dsds', '2023-08-15 01:17:35', '2023-08-15 01:17:35', 4, 0, ''),
(2, 'molo', 'polo', 'cvfd', '2023-08-30', 'sxxx', NULL, NULL, 'brini', '2023-08-15 20:57:07', '2023-08-15 20:57:07', 4, 0, 'Femme'),
(3, 'xiji', 'xijdh chhh', 'viliaa', '2023-08-24', 'spmol', 'sddmlmls', NULL, 'sldsdllds', '2023-08-15 20:58:25', '2023-08-15 20:58:25', 4, 0, 'Homme'),
(4, 'dsxdsds', 'sdsd', 'dvailiij', '2023-08-24', 'dsds', 'dsd sds sdds', 'dsd csds', 'ds sqzz', '2023-08-15 20:59:41', '2023-08-15 20:59:41', 4, 0, 'Homme');

-- --------------------------------------------------------

--
-- Structure de la table `borns`
--

CREATE TABLE `borns` (
  `id` bigint(20) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `sexe` varchar(45) DEFAULT NULL,
  `date_born` date DEFAULT NULL,
  `dad_name` varchar(100) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `city_live` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `users_id` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `borns`
--

INSERT INTO `borns` (`id`, `firstname`, `lastname`, `sexe`, `date_born`, `dad_name`, `mother_name`, `city_live`, `created_at`, `updated_at`, `users_id`, `status`) VALUES
(1, 'Titi', 'Tiatia bAL', 'Femme', '2019-08-22', 'Paul Ban', 'Poline Tra', 'Abidjan', '2023-08-14 23:36:31', '2023-08-14 23:36:31', 4, 0);

-- --------------------------------------------------------

--
-- Structure de la table `deaths`
--

CREATE TABLE `deaths` (
  `id` bigint(20) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `sexe` varchar(45) DEFAULT NULL,
  `function` varchar(45) DEFAULT NULL,
  `date_born` date DEFAULT NULL,
  `date_death` varchar(45) DEFAULT NULL,
  `mode` varchar(50) DEFAULT NULL,
  `motif` text DEFAULT NULL,
  `parent_name` varchar(100) DEFAULT NULL,
  `city_live` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `users_id` bigint(20) NOT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `deaths`
--

INSERT INTO `deaths` (`id`, `firstname`, `lastname`, `sexe`, `function`, `date_born`, `date_death`, `mode`, `motif`, `parent_name`, `city_live`, `created_at`, `updated_at`, `users_id`, `status`) VALUES
(1, 'Vibi', 'Moid', 'Homme', 'Prof', '2023-08-11', '2023-08-14', 'Loki', 'Vieux', 'Pian', 'Abidjan', '2023-08-15 00:12:33', '2023-08-15 00:12:33', 4, 0);

-- --------------------------------------------------------

--
-- Structure de la table `demenages`
--

CREATE TABLE `demenages` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `sexe` varchar(45) DEFAULT NULL,
  `function` varchar(45) DEFAULT NULL,
  `date_born` date DEFAULT NULL,
  `city_live` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `users_id` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `nou_destination` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `demenages`
--

INSERT INTO `demenages` (`id`, `firstname`, `lastname`, `sexe`, `function`, `date_born`, `city_live`, `created_at`, `updated_at`, `users_id`, `status`, `nou_destination`) VALUES
(1, 'bini', 'nsb', 'Homme', 'ds kklyt', '2023-08-14', 'rtykkh', '2023-08-15 20:51:40', '2023-08-15 20:51:40', 4, 0, 'gjl'),
(2, 'd vil djjd djs', 'jdjs dk,sndsk dllds dksn dn dsj', 'Homme', 'dsd', '2023-08-12', 'dsd', '2023-08-15 21:05:06', '2023-08-15 21:05:06', 4, 0, 'dsd');

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `service` varchar(225) DEFAULT NULL,
  `qualification_competence` text DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `avatar` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `message` text DEFAULT NULL,
  `users_id` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `jobs`
--

INSERT INTO `jobs` (`id`, `firstname`, `lastname`, `service`, `qualification_competence`, `tel`, `avatar`, `created_at`, `updated_at`, `message`, `users_id`, `status`) VALUES
(1, 'dsd', 'dsd', 'dsdsd', 'dsds', '52555', 'service/1692137148.png', '2023-08-15 22:05:48', '2023-08-15 22:05:48', 'dsdsd', 4, 0),
(2, 'sd sd ds', 'dssdsds sds sdsd', 'sdsd dsd dsds dsds', 'Un déménagement est une action qui consiste à ôter tout ou partie des biens mobiliers contenus dans un local pour les transporter vers un autre. Il peut concerner un logement, des bureaux, un local commercial, une usine, etc. et peut résulter en un changement d\'adresse.\r\n\r\nIl existe des prestataires de services spécialisés dans cette activité : les déménageurs.\r\n\r\nRaisons\r\nLes raisons qui mènent au déménagement peuvent être variées :\r\n\r\nprofessionnelles (mutation, déplacement, nouveau contrat de travail, augmentation ou diminution de revenus) ;\r\nsanitaires (logement indécent, problème d\'accessibilité, bruits de voisinage ou environnementaux) ;\r\nfamiliales (naissance des enfants, rapprochement avec des membres de la famille, changement de situation familiale : mariage, divorce, concubinage) ;\r\nconsécutives à des catastrophes naturelles rendant l\'ancien local inutilisable ;\r\nadministratives et/ou légales (insalubrité, expropriation, expulsion du logement, ou du territoire pour les étrangers) ;\r\nquitter le foyer parental, en particulier pour commencer des études supérieures ou pour entrer dans la vie active.', 'dsds sdsd dsds', '/service/1692224757.jpg', '2023-08-16 22:25:57', '2023-08-16 22:25:57', 'Un déménagement est une action qui consiste à ôter tout ou partie des biens mobiliers contenus dans un local pour les transporter vers un autre. Il peut concerner un logement, des bureaux, un local commercial, une usine, etc. et peut résulter en un changement d\'adresse.\r\n\r\nIl existe des prestataires de services spécialisés dans cette activité : les déménageurs.\r\n\r\nRaisons\r\nLes raisons qui mènent au déménagement peuvent être variées :\r\n\r\nprofessionnelles (mutation, déplacement, nouveau contrat de travail, augmentation ou diminution de revenus) ;\r\nsanitaires (logement indécent, problème d\'accessibilité, bruits de voisinage ou environnementaux) ;\r\nfamiliales (naissance des enfants, rapprochement avec des membres de la famille, changement de situation familiale : mariage, divorce, concubinage) ;\r\nconsécutives à des catastrophes naturelles rendant l\'ancien local inutilisable ;\r\nadministratives et/ou légales (insalubrité, expropriation, expulsion du logement, ou du territoire pour les étrangers) ;\r\nquitter le foyer parental, en particulier pour commencer des études supérieures ou pour entrer dans la vie active.', 4, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `role` varchar(11) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `tel`, `email`, `password`, `created_at`, `updated_at`, `role`, `avatar`) VALUES
(1, 'Paul Ange', '04252552', 'ange@gmail.test', '$2y$10$k4fBXFNIoJgR/Vi2uQsfqOBh91MaEOChn/jKgo/LUhWqi.5l0EuCK', '2023-08-11 22:23:12', '2023-08-11 22:23:12', 'admin', NULL),
(4, 'bib bill update', '02452502', 'bibli@gmail.comup', '$2y$10$Ox27jNNVKweg.ZRAHtFrS.fLwpZsztmCtWeb0wZrOgJpwIbILO1YS', '2023-08-14 00:11:52', '2023-08-16 23:34:29', 'user', NULL),
(5, 'bibi bil', '02555', 'bibi@gmal', '$2y$10$501PwRcx6tvEDhGQxtdzcuBQ6HaMThmroNL59Vez0nZjUfjqG9/Ue', '2023-08-14 00:12:18', '2023-08-14 00:12:18', 'user', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `amenages`
--
ALTER TABLE `amenages`
  ADD PRIMARY KEY (`id`,`users_id`),
  ADD KEY `fk_amenages_users1_idx` (`users_id`);

--
-- Index pour la table `borns`
--
ALTER TABLE `borns`
  ADD PRIMARY KEY (`id`,`users_id`),
  ADD KEY `fk_borns_users_idx` (`users_id`);

--
-- Index pour la table `deaths`
--
ALTER TABLE `deaths`
  ADD PRIMARY KEY (`id`,`users_id`),
  ADD KEY `fk_deaths_users1_idx` (`users_id`);

--
-- Index pour la table `demenages`
--
ALTER TABLE `demenages`
  ADD PRIMARY KEY (`id`,`users_id`),
  ADD KEY `fk_demenages_users1_idx` (`users_id`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`,`users_id`),
  ADD KEY `fk_jobs_users1_idx` (`users_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `amenages`
--
ALTER TABLE `amenages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `borns`
--
ALTER TABLE `borns`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `deaths`
--
ALTER TABLE `deaths`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `demenages`
--
ALTER TABLE `demenages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `amenages`
--
ALTER TABLE `amenages`
  ADD CONSTRAINT `fk_amenages_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `borns`
--
ALTER TABLE `borns`
  ADD CONSTRAINT `fk_borns_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `deaths`
--
ALTER TABLE `deaths`
  ADD CONSTRAINT `fk_deaths_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `demenages`
--
ALTER TABLE `demenages`
  ADD CONSTRAINT `fk_demenages_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `fk_jobs_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
