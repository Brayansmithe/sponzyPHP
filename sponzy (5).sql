-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 05 jan. 2024 à 21:50
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sponzy`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheters`
--

CREATE TABLE `acheters` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_machine` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `acheters`
--

INSERT INTO `acheters` (`id`, `id_user`, `id_machine`, `created_at`, `updated_at`) VALUES
(40, 1, 1, '2024-01-05 18:53:30', '2024-01-05 18:53:30'),
(41, 1, 3, '2024-01-05 19:58:21', '2024-01-05 19:58:21'),
(42, 1, 4, '2024-01-05 20:03:13', '2024-01-05 20:03:13');

-- --------------------------------------------------------

--
-- Structure de la table `depots`
--

CREATE TABLE `depots` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_transation` varchar(255) DEFAULT NULL,
  `numero_deposMTN` int(11) NOT NULL DEFAULT 672608962,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `numero_deposOR` int(50) NOT NULL DEFAULT 696911917
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `machines`
--

CREATE TABLE `machines` (
  `id` int(10) UNSIGNED NOT NULL,
  `cout_machine` int(11) NOT NULL,
  `nomMachine` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `revenu_jour` int(11) NOT NULL,
  `revenu_total` int(11) NOT NULL,
  `nombre_jour_valide` int(11) NOT NULL,
  `quatiter_achetable` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `machines`
--

INSERT INTO `machines` (`id`, `cout_machine`, `nomMachine`, `image`, `revenu_jour`, `revenu_total`, `nombre_jour_valide`, `quatiter_achetable`, `created_at`, `updated_at`) VALUES
(1, 7500, 'MTI ViP 1', 'ma.png', 300, 30000, 100, 1, '2024-01-03 18:26:07', '2024-01-05 05:48:30'),
(2, 15000, 'MTI ViP 2', 'mti2.png', 650, 65000, 100, 1, '2024-01-03 18:27:09', NULL),
(3, 28000, 'MTI ViP 3', 'mti33.png', 1200, 120000, 100, 1, '2024-01-03 18:28:29', '2024-01-05 06:04:18'),
(4, 60000, 'MTI VIP 4', 'mti3.png', 2500, 250000, 100, 1, '2024-01-04 19:22:30', NULL),
(5, 110000, 'MTI VIP 5', 'mti4.png', 4500, 450000, 100, 1, '2024-01-04 19:27:15', NULL),
(6, 300000, 'MTI VIP 6', 'mti5.png', 14000, 1400000, 100, 1, '2024-01-04 19:31:26', NULL),
(7, 550000, 'MTI VIP 7', 'mti6.png', 25000, 2500000, 100, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(91, '2014_10_12_000000_create_users_table', 1),
(92, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(93, '2019_08_19_000000_create_failed_jobs_table', 1),
(94, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(95, '2023_12_27_114344_create_utilisateurs_table', 1),
(96, '2023_12_27_120530_create_machines_table', 1),
(97, '2023_12_27_121246_create_depots_table', 1),
(98, '2023_12_27_121732_create_retraits_table', 1),
(99, '2023_12_27_122521_create_acheters_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `retraits`
--

CREATE TABLE `retraits` (
  `id` int(10) UNSIGNED NOT NULL,
  `num_user` int(9) NOT NULL,
  `status_retrait` int(11) NOT NULL DEFAULT 1,
  `montant_retrait` int(11) NOT NULL,
  `nom_user` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `retraits`
--

INSERT INTO `retraits` (`id`, `num_user`, `status_retrait`, `montant_retrait`, `nom_user`, `created_at`, `updated_at`) VALUES
(1, 693381647, 1, 5000, 'John Doe', '2024-01-05 15:48:04', NULL),
(2, 693381647, 1, 5000, 'John Doe', '2024-01-05 15:48:28', NULL),
(3, 693381647, 1, 2550000, 'John Doe', '2024-01-05 15:48:40', NULL),
(4, 693381647, 1, 813300, 'John Doe', '2024-01-05 15:49:12', NULL),
(5, 693381647, 1, 1000000, 'John Doe', '2024-01-05 15:50:53', NULL),
(6, 693381647, 1, 5000, 'John Doe', '2024-01-05 15:52:08', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `num_tel` varchar(255) NOT NULL,
  `mots_passe` varchar(255) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `num_retrait` varchar(255) DEFAULT NULL,
  `moyen_retrait` varchar(255) DEFAULT NULL,
  `code_parainage` int(11) DEFAULT NULL,
  `code_user` int(11) NOT NULL,
  `solde_user` int(11) NOT NULL DEFAULT 0,
  `type_use` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `num_tel`, `mots_passe`, `nom`, `prenom`, `num_retrait`, `moyen_retrait`, `code_parainage`, `code_user`, `solde_user`, `type_use`, `created_at`, `updated_at`) VALUES
(1, '693381647', '1234', 'John Doe', 'Kamga', '693381647', 'Orange', 0, 0, 12500, 1, '2024-01-04 15:15:05', '2024-01-05 20:03:13'),
(2, '672608962', '12345', NULL, NULL, NULL, NULL, 0, 4337, 0, 1, '2024-01-04 16:45:35', NULL),
(646607, '1234', '1234', NULL, NULL, NULL, NULL, 0, 94962, 0, 1, '2024-01-05 14:26:54', NULL),
(728976, '237657282828', '123456', NULL, NULL, NULL, NULL, 0, 31027, 0, 1, '2024-01-05 06:33:14', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acheters`
--
ALTER TABLE `acheters`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `depots`
--
ALTER TABLE `depots`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `retraits`
--
ALTER TABLE `retraits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `utilisateurs_num_tel_unique` (`num_tel`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acheters`
--
ALTER TABLE `acheters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `depots`
--
ALTER TABLE `depots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `machines`
--
ALTER TABLE `machines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `retraits`
--
ALTER TABLE `retraits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
