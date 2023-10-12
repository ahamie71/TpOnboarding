-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 12 oct. 2023 à 11:01
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lunettes`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `fk_user` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`, `fk_user`, `quantite`) VALUES
(1, 'lunettes de soleil', 560, 'une lunette qui est de la marque guess', '../public/images/lunette9.jpeg', 1, 0),
(2, 'D&G', 1000, 'lunette de soleil dolce and gabana', '../public/images/lunette9.jpeg', 1, 0),
(3, 'Fendi', 480, 'FENDI', '../public/images/lunette9.jpeg\r\n', 1, 0),
(4, 'lunette piscine', 200, 'A la plage ou à la piscine, on pense systématiquement à protéger sa peau et ses cheveux des méfaits du soleil. Mais savez-vous que les yeux sont les plus vulnérables face aux rayonnements nocifs ? Apprenez à comprendre les risques de l’exposition au soleil et protégez vos prunelles en toute circonstance.', '../public/images/16164787240b4c5bbb9b9b7a52a8ed85720bfed931_thumbnail_720x.webp', 1, 0),
(5, 'plage lunette', 200, 'A la plage ou à la piscine, on pense systématiquement à protéger sa peau et ses cheveux des méfaits du soleil. Mais savez-vous que les yeux sont les plus vulnérables face aux rayonnements nocifs ? Apprenez à comprendre les risques de l’exposition au soleil et protégez vos prunelles en toute circonstance.', '../public/images/adobestock-218645714-960x640.jpeg', 4, 0),
(6, 'plage lunette', 200, 'A la plage ou à la piscine, on pense systématiquement à protéger sa peau et ses cheveux des méfaits du soleil. Mais savez-vous que les yeux sont les plus vulnérables face aux rayonnements nocifs ? Apprenez à comprendre les risques de l’exposition au soleil et protégez vos prunelles en toute circonstance.', '../public/images/adobestock-218645714-960x640.jpeg', 4, 0),
(7, 'plage lunette', 200, 'A la plage ou à la piscine, on pense systématiquement à protéger sa peau et ses cheveux des méfaits du soleil. Mais savez-vous que les yeux sont les plus vulnérables face aux rayonnements nocifs ? Apprenez à comprendre les risques de l’exposition au soleil et protégez vos prunelles en toute circonstance.', '../public/images/adobestock-218645714-960x640.jpeg', 4, 0);

-- --------------------------------------------------------

--
-- Structure de la table `quantity`
--

CREATE TABLE `quantity` (
  `id` int(8) NOT NULL,
  `id_Prod` int(8) NOT NULL,
  `id_user` int(8) NOT NULL,
  `nbquant` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `quantity`
--

INSERT INTO `quantity` (`id`, `id_Prod`, `id_user`, `nbquant`) VALUES
(1, 1, 1, 0),
(2, 3, 4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `userid` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`id`, `userid`) VALUES
(1, 4),
(2, 4),
(3, 4),
(4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'HAMIEH', 'Ahmad@hotmail.com', '123456'),
(2, 'Ahmed', 'ahmed@hotmail.com', '$argon2id$v=19$m=65536,t=4,p=1$TW5hYkdoMFVjQTg0d2hzdA$1B6/grzNKcgLA5an4AzNU9rv/uArLQ/fRryz8JGMe+0'),
(4, 'ali', 'ali@hotmail.com', '$argon2id$v=19$m=65536,t=4,p=1$cS4zTXpHSWZhUGNUUTJnVw$ZLHIKSxy0sVQ99ceKwVa0msKtFGyA1pROuTtieDbHmI'),
(5, 'test', 'tes@test.test', 'password');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`fk_user`);

--
-- Index pour la table `quantity`
--
ALTER TABLE `quantity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`id_user`),
  ADD KEY `fk_prod` (`id_Prod`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `quantity`
--
ALTER TABLE `quantity`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`fk_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `quantity`
--
ALTER TABLE `quantity`
  ADD CONSTRAINT `fk_prod` FOREIGN KEY (`id_Prod`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
