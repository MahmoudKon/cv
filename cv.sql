-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2021 at 12:07 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `start_date`, `end_date`, `degree`, `place`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '1970-01-01', '1970-01-01', 'Recusandae.', 'Qui non.', 'Ex nesciunt quo sint a iusto velit nostrum. Enim aliquid esse et pariatur fuga earum. Qui distinctio molestias cumque cumque tenetur repudiandae qui. Est qui dolor qui ut et voluptatem ut.', 5, '2021-04-07 17:59:26', '2021-04-07 17:59:26'),
(2, '1970-01-01', '1970-01-01', 'Itaque.', 'Fugiat qui non ut saepe.', 'Aut id corrupti ea enim non earum dolorem. Deserunt tenetur dignissimos est. Est beatae est repellendus et.', 7, '2021-04-07 17:59:27', '2021-04-07 17:59:27'),
(3, '1970-01-01', '1970-01-01', 'Sit corporis.', 'Veniam officia cumque.', 'Exercitationem doloribus aut pariatur consectetur quasi ut ut. Vel harum eum omnis cumque. Laboriosam libero quia ut assumenda ut quis voluptas.', 3, '2021-04-07 17:59:27', '2021-04-07 17:59:27'),
(4, '1970-01-01', '1970-01-01', 'Et sit debitis nobis.', 'Aliquam qui.', 'Nihil qui architecto consectetur debitis voluptatem reiciendis qui non. Qui ducimus ab est voluptatem omnis.', 2, '2021-04-07 17:59:27', '2021-04-07 17:59:27'),
(5, '1970-01-01', '1970-01-01', 'Sit rem ab non.', 'Dolorem.', 'Aut rerum odit quos commodi aperiam. Harum numquam aut architecto est ut et et. Reprehenderit ipsum saepe qui animi qui rerum.', 7, '2021-04-07 17:59:27', '2021-04-07 17:59:27'),
(6, '1970-01-01', '1970-01-01', 'Sunt officiis.', 'Magni commodi.', 'Eum qui quia omnis placeat alias placeat. Facilis omnis molestiae sint sit magnam illo. Fuga maxime consequatur hic molestias ut repellat. Odio minima laboriosam sed.', 2, '2021-04-07 17:59:27', '2021-04-07 17:59:27'),
(7, '1970-01-01', '1970-01-01', 'Sapiente tempore.', 'Iure atque quidem.', 'Accusamus commodi quibusdam provident pariatur ipsam eos. Illum nemo officiis quam dolorem ipsum possimus quo.', 10, '2021-04-07 17:59:27', '2021-04-07 17:59:27'),
(8, '1970-01-01', '1970-01-01', 'In impedit vero.', 'Amet autem placeat.', 'Et dignissimos vero magni est. Repellat aliquam consequatur alias et enim non est.', 4, '2021-04-07 17:59:27', '2021-04-07 17:59:27'),
(9, '1970-01-01', '1970-01-01', 'Ut id ea voluptas.', 'Assumenda officia.', 'Eveniet quae nam dolor molestias odio ab magnam. Quia eveniet quisquam ipsum tenetur.', 8, '2021-04-07 17:59:28', '2021-04-07 17:59:28'),
(10, '1970-01-01', '1970-01-01', 'Odio autem qui.', 'Vel facilis.', 'Repudiandae velit eius tempora mollitia qui adipisci. Illum eos error voluptas voluptatem velit error. Quasi eveniet similique magni.', 5, '2021-04-07 17:59:28', '2021-04-07 17:59:28'),
(11, '1970-01-01', '1970-01-01', 'Id inventore.', 'Cum repellendus.', 'Iusto exercitationem laudantium laborum quia labore. Consequatur est voluptas tempore quos in aut ut.', 5, '2021-04-07 17:59:28', '2021-04-07 17:59:28'),
(12, '1970-01-01', '1970-01-01', 'Ut explicabo.', 'Ab deleniti.', 'Libero quis nulla fuga hic ex quaerat autem ex. Ut est omnis culpa asperiores est.', 6, '2021-04-07 17:59:28', '2021-04-07 17:59:28'),
(13, '1970-01-01', '1970-01-01', 'Quia et eaque.', 'Qui maxime et voluptate.', 'Dolorem occaecati consequatur alias ab iste. Facilis minus repellat est fugiat debitis.', 2, '2021-04-07 17:59:29', '2021-04-07 17:59:29'),
(14, '1970-01-01', '1970-01-01', 'Consequatur nihil a.', 'Enim et quae.', 'Et consequatur assumenda ut esse illo. Qui non perferendis ratione omnis similique. Et vitae illum vel sed.', 3, '2021-04-07 17:59:29', '2021-04-07 17:59:29'),
(15, '1970-01-01', '1970-01-01', 'Minus quo nemo expedita.', 'Dolor ut minima.', 'Dignissimos fugit cum consectetur aliquam. In tempora consequatur quo maxime. Quos laudantium non dicta iusto at placeat.', 5, '2021-04-07 17:59:29', '2021-04-07 17:59:29'),
(16, '1970-01-01', '1970-01-01', 'Quidem totam sunt.', 'Accusantium.', 'Nihil temporibus pariatur corrupti excepturi sed qui. Nesciunt adipisci esse ad culpa enim possimus. Non consequatur aut dolor eum modi non occaecati recusandae.', 10, '2021-04-07 17:59:29', '2021-04-07 17:59:29'),
(17, '1970-01-01', '1970-01-01', 'Molestias.', 'Aspernatur nam.', 'Aut qui consequatur fuga facilis et iusto tempore aut. Incidunt alias quia est rerum sit error. Non ea autem reiciendis.', 9, '2021-04-07 17:59:29', '2021-04-07 17:59:29'),
(18, '1970-01-01', '1970-01-01', 'Iusto.', 'Sed nostrum et.', 'Perferendis cumque eveniet in at. Laborum earum ad autem vero rerum cum illum.', 3, '2021-04-07 17:59:29', '2021-04-07 17:59:29'),
(19, '1970-01-01', '1970-01-01', 'Sunt dicta.', 'Sapiente aliquid.', 'Modi ad et sed beatae nihil et adipisci. Veniam labore dolores dolore nam. Sed a fuga ratione excepturi.', 7, '2021-04-07 17:59:30', '2021-04-07 17:59:30'),
(20, '1970-01-01', '1970-01-01', 'Labore et.', 'Et et qui nulla ut.', 'Dolores ullam asperiores omnis quis magnam nesciunt aut. Sit assumenda et repellendus aut quod nihil.', 5, '2021-04-07 17:59:30', '2021-04-07 17:59:30'),
(21, '1970-01-01', '1970-01-01', 'Explicabo a ut illum.', 'Et.', 'Quia provident est deleniti quis ut velit nesciunt qui. Ea quia soluta quod quisquam facere numquam aut. Dolores rerum molestias et sequi.', 10, '2021-04-07 17:59:30', '2021-04-07 17:59:30'),
(22, '1970-01-01', '1970-01-01', 'Omnis ut adipisci.', 'Nam sit.', 'Est sit sint est. Numquam ducimus sunt nesciunt facilis. Consequuntur nisi adipisci dolores unde alias.', 2, '2021-04-07 17:59:30', '2021-04-07 17:59:30'),
(23, '1970-01-01', '1970-01-01', 'Voluptatem.', 'Qui saepe dolor.', 'Excepturi ut magnam doloribus dolor eum ducimus eligendi. Adipisci deleniti optio ipsum quia.', 9, '2021-04-07 17:59:30', '2021-04-07 17:59:30'),
(24, '1970-01-01', '1970-01-01', 'Recusandae.', 'Porro dolorum.', 'Minus sit inventore repudiandae odit. Quisquam consequatur dolorem asperiores et velit. Velit quia illum nihil neque eos sed.', 2, '2021-04-07 17:59:30', '2021-04-07 17:59:30'),
(25, '1970-01-01', '1970-01-01', 'A laborum officiis.', 'Veniam ipsam quis est.', 'Velit omnis commodi perferendis. Placeat aut rem cumque occaecati provident. Voluptas ut cumque inventore et.', 9, '2021-04-07 17:59:31', '2021-04-07 17:59:31'),
(26, '1970-01-01', '1970-01-01', 'Fuga est.', 'Harum sint sed.', 'Illum rerum facere quisquam sequi minus porro corrupti. Et autem dolorem consequatur incidunt modi qui.', 10, '2021-04-07 17:59:31', '2021-04-07 17:59:31'),
(27, '1970-01-01', '1970-01-01', 'Voluptatum.', 'Et rerum sit ut.', 'Quae excepturi impedit doloribus blanditiis quos. Unde laboriosam corporis quo. Id dolorem tenetur error id tenetur.', 3, '2021-04-07 17:59:31', '2021-04-07 17:59:31'),
(28, '1970-01-01', '1970-01-01', 'Suscipit ut.', 'Quibusdam sunt.', 'Eum officiis nisi expedita hic non. Incidunt ratione minima quam. Voluptatem error molestias laborum assumenda. Magnam eaque quos qui aut vel quis sed nihil.', 10, '2021-04-07 17:59:31', '2021-04-07 17:59:31'),
(29, '1970-01-01', '1970-01-01', 'Et dolorem in.', 'Saepe in sed neque et.', 'Maiores voluptatem dolor et et et cum inventore voluptatem. In ipsa est cupiditate quia corporis recusandae. Quae ut eveniet velit et corrupti quaerat quaerat.', 7, '2021-04-07 17:59:31', '2021-04-07 17:59:31'),
(30, '1970-01-01', '1970-01-01', 'Cum debitis quos.', 'Voluptatem.', 'Amet est necessitatibus inventore aut. Debitis magni consequatur sed. Consequatur et qui aperiam ut asperiores dolorem ut.', 6, '2021-04-07 17:59:31', '2021-04-07 17:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `start_date`, `end_date`, `degree`, `place`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '1970-01-01', '1970-01-01', 'Quisquam.', 'Aut placeat ea.', 'Et animi officiis in dolore ut. Voluptatem qui atque nostrum ut ad voluptatibus labore facere. Qui minima aspernatur illum animi nisi voluptas et.', 7, '2021-04-07 17:59:26', '2021-04-07 17:59:26'),
(2, '1970-01-01', '1970-01-01', 'In ut ut quia quo sed.', 'Aut impedit quod.', 'Repudiandae quaerat tempora ut velit. Et totam deserunt qui et. Iusto aut voluptates ipsum tenetur nam.', 4, '2021-04-07 17:59:27', '2021-04-07 17:59:27'),
(3, '1970-01-01', '1970-01-01', 'Id accusantium ipsa.', 'Sed numquam natus cum.', 'Qui laborum impedit libero sit. Delectus deserunt quod consequuntur quam. Unde ea aut fugiat fugit.', 10, '2021-04-07 17:59:27', '2021-04-07 17:59:27'),
(4, '1970-01-01', '1970-01-01', 'Et culpa et ut ut.', 'Et eum odio sed.', 'Sapiente voluptates et labore placeat id. Veritatis dolores animi reiciendis fugit officia ut harum.', 4, '2021-04-07 17:59:27', '2021-04-07 17:59:27'),
(5, '1970-01-01', '1970-01-01', 'Tempore vel ullam.', 'Quibusdam et.', 'Occaecati et porro eveniet illum. Dicta qui et sit rem nam vel.', 8, '2021-04-07 17:59:27', '2021-04-07 17:59:27'),
(6, '1970-01-01', '1970-01-01', 'Similique quasi.', 'Sit in non.', 'Expedita qui nostrum ipsa quo. Eum culpa nostrum sapiente quis pariatur et velit. Sequi nesciunt nulla deleniti voluptate.', 2, '2021-04-07 17:59:27', '2021-04-07 17:59:27'),
(7, '1970-01-01', '1970-01-01', 'Quod aut laborum atque.', 'Nesciunt corporis.', 'Iste officiis sapiente ipsam non et tempora mollitia. Voluptas corrupti veniam laboriosam officia. Velit rerum nihil et voluptas quas sed.', 4, '2021-04-07 17:59:27', '2021-04-07 17:59:27'),
(8, '1970-01-01', '1970-01-01', 'Est ex vel sequi magnam.', 'Enim a.', 'Porro voluptas doloribus nihil saepe est soluta. Qui quis nihil quas. Ullam eveniet molestias explicabo ratione molestiae provident asperiores maxime.', 9, '2021-04-07 17:59:28', '2021-04-07 17:59:28'),
(9, '1970-01-01', '1970-01-01', 'Quia iste ipsa.', 'Occaecati non.', 'Sit delectus quos sapiente quis dolorum. Quam ut qui enim sunt reiciendis. Ducimus ipsum ea saepe rerum aut. Et accusamus ab ex id totam.', 2, '2021-04-07 17:59:28', '2021-04-07 17:59:28'),
(10, '1970-01-01', '1970-01-01', 'Illum ad rerum.', 'Laborum debitis iure.', 'Sequi id architecto reiciendis non amet. Qui mollitia sed est asperiores. Quos est minus fugiat alias ut.', 7, '2021-04-07 17:59:28', '2021-04-07 17:59:28'),
(11, '1970-01-01', '1970-01-01', 'Totam.', 'Non quisquam.', 'Aperiam minima maiores sint perferendis fugiat officia minima. Nemo quidem facere esse pariatur corporis alias.', 6, '2021-04-07 17:59:28', '2021-04-07 17:59:28'),
(12, '1970-01-01', '1970-01-01', 'Quam culpa ea nobis.', 'Iure dolorem.', 'Illo voluptatum dolorem corporis praesentium. Aut quasi quidem vel. Illum est neque suscipit et modi quam velit. Officia animi error hic et.', 3, '2021-04-07 17:59:29', '2021-04-07 17:59:29'),
(13, '1970-01-01', '1970-01-01', 'Numquam.', 'Fugit sed.', 'Tenetur cum nulla eos cumque et eos. Molestiae consequatur fuga quis exercitationem corporis expedita deserunt. Eum vel autem ullam provident iusto nihil sed.', 8, '2021-04-07 17:59:29', '2021-04-07 17:59:29'),
(14, '1970-01-01', '1970-01-01', 'Est mollitia corporis.', 'Nobis autem quis.', 'Eum velit pariatur cumque et sed non dolore ipsam. Exercitationem accusamus soluta fuga at omnis voluptates quos voluptatum.', 9, '2021-04-07 17:59:29', '2021-04-07 17:59:29'),
(15, '1970-01-01', '1970-01-01', 'Et optio fugit.', 'Illo neque ut.', 'Et sed sint sed voluptatem esse. Tempore velit at cupiditate commodi. Nemo ullam corporis est sed illo eligendi repellendus.', 4, '2021-04-07 17:59:29', '2021-04-07 17:59:29'),
(16, '1970-01-01', '1970-01-01', 'Beatae sequi.', 'Qui nulla iusto sit.', 'Enim aperiam incidunt illum porro consequatur officiis. Fuga voluptatem a odio dolorem illo qui. Et quia quam et sed earum voluptatem ut.', 2, '2021-04-07 17:59:29', '2021-04-07 17:59:29'),
(17, '1970-01-01', '1970-01-01', 'Nostrum tempora ut.', 'Tempore culpa.', 'Omnis velit quaerat animi architecto officiis. Cupiditate velit laboriosam eius. Laborum neque et sed.', 2, '2021-04-07 17:59:29', '2021-04-07 17:59:29'),
(18, '1970-01-01', '1970-01-01', 'Laboriosam.', 'Vel vero est enim ad.', 'Suscipit modi est perspiciatis eveniet nisi laudantium. Quia aperiam quia est dolorem officiis voluptas quam.', 2, '2021-04-07 17:59:30', '2021-04-07 17:59:30'),
(19, '1970-01-01', '1970-01-01', 'Nam dolore magnam cum.', 'Repellendus.', 'Numquam qui fuga et voluptas necessitatibus voluptates doloribus vitae. Ratione quia corrupti exercitationem. Eos temporibus veniam et.', 8, '2021-04-07 17:59:30', '2021-04-07 17:59:30'),
(20, '1970-01-01', '1970-01-01', 'Consequatur est.', 'Sed nulla alias.', 'In quod rerum saepe consequatur fugiat maxime. Quis quidem non aspernatur ex iste. Et harum totam adipisci earum exercitationem.', 4, '2021-04-07 17:59:30', '2021-04-07 17:59:30'),
(21, '1970-01-01', '1970-01-01', 'Laboriosam.', 'Beatae.', 'Ut aperiam debitis placeat excepturi enim. Autem sed animi assumenda voluptatibus.', 3, '2021-04-07 17:59:30', '2021-04-07 17:59:30'),
(22, '1970-01-01', '1970-01-01', 'Facere delectus.', 'Enim harum.', 'Non iusto optio voluptatem perspiciatis ea. Sint rem ea sed fugiat dolor. Repellat est earum voluptatibus quis animi cum omnis. Ratione est vero amet sint optio.', 2, '2021-04-07 17:59:30', '2021-04-07 17:59:30'),
(23, '1970-01-01', '1970-01-01', 'Est sed ipsam.', 'Impedit.', 'Perferendis necessitatibus enim numquam voluptas. Est eveniet ipsa eaque voluptatem consequatur blanditiis nam. Doloremque hic deserunt omnis hic numquam sed.', 5, '2021-04-07 17:59:30', '2021-04-07 17:59:30'),
(24, '1970-01-01', '1970-01-01', 'Maiores.', 'Quis.', 'Neque quos labore expedita blanditiis modi deserunt. Quaerat in voluptas eveniet culpa et est quia quia.', 2, '2021-04-07 17:59:30', '2021-04-07 17:59:30'),
(25, '1970-01-01', '1970-01-01', 'Rem ratione.', 'Corrupti.', 'Aut quos quis veniam rem et sit eveniet. Nesciunt et cupiditate esse. Ullam incidunt et in laborum quia laboriosam. Quia quibusdam illum quis dolores ea.', 10, '2021-04-07 17:59:31', '2021-04-07 17:59:31'),
(26, '1970-01-01', '1970-01-01', 'Magni.', 'Voluptatem quis.', 'Neque saepe et aut qui quis. Temporibus aut magnam blanditiis inventore et ipsam exercitationem. Eos aut voluptate culpa.', 2, '2021-04-07 17:59:31', '2021-04-07 17:59:31'),
(27, '1970-01-01', '1970-01-01', 'Quia.', 'Expedita.', 'Inventore nulla voluptatem sapiente asperiores sed commodi quis. Modi similique nesciunt odio aut ea vero.', 4, '2021-04-07 17:59:31', '2021-04-07 17:59:31'),
(28, '1970-01-01', '1970-01-01', 'At error debitis.', 'Et beatae eum et.', 'Quis maxime qui placeat provident et perspiciatis sint. Nam in maiores est est. Placeat ut aliquid quidem perferendis laborum ab.', 2, '2021-04-07 17:59:31', '2021-04-07 17:59:31'),
(29, '1970-01-01', '1970-01-01', 'Natus fuga.', 'Eius esse.', 'Est et repellat autem dolor quam et. Dolore dolorum et nemo consequatur distinctio nesciunt. Doloremque a accusamus cupiditate quaerat qui ea totam. Rerum quia sit quasi aut facere.', 3, '2021-04-07 17:59:31', '2021-04-07 17:59:31'),
(30, '1970-01-01', '1970-01-01', 'Qui cumque vel eum sit.', 'Error.', 'Non id dolorem dolorem voluptas adipisci. Libero non qui aliquid soluta incidunt dicta. Et laudantium voluptatem eveniet at reprehenderit. Eos ut enim ab.', 6, '2021-04-07 17:59:31', '2021-04-07 17:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `generals`
--

CREATE TABLE `generals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `awards` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generals`
--

INSERT INTO `generals` (`id`, `fullname`, `website`, `job`, `birthday`, `gender`, `address`, `phone`, `about`, `awards`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Mrs. Tania Lowe', 'http://gutkowski.com/ut-magni-et-aut-et-sed-pariatur', 'New Job', '1982-11-03', 'male', '7446 Fisher Shores Apt. 188\nNew Eulashire, MO 82531-1843', '46806051526', 'Dignissimos tempore vel rerum similique et veritatis. Quam minus dolorum dicta cum perferendis est. Ut illum aut in iure vero.', 'Dolorem esse quo necessitatibus rerum velit porro dolorem et. Fuga aut quis ut facilis. Ea omnis voluptas rerum porro doloremque. Numquam quo culpa et deserunt. Hic enim sit iste aut nulla laboriosam. Dicta sequi exercitationem aut velit. Tempore quas fugiat debitis. Velit ut consequuntur laboriosam doloremque cum voluptate. Possimus recusandae magnam aut rerum voluptatum commodi et quod.', 2, '2021-04-07 17:59:20', '2021-04-07 17:59:20'),
(2, 'Viola Jaskolski', 'http://www.wunsch.info/ut-sint-debitis-eligendi-dolorum.html', 'New Job', '1978-08-01', 'male', '96952 Schulist Lake Apt. 115\nSouth Kirstin, IA 78999-5656', '30841543693', 'Magni ut deleniti ullam dolor qui velit voluptatem. Repellat delectus accusantium amet molestiae ut qui harum. Unde fugiat dolorum sunt ipsam voluptatum. In nihil hic tempora qui voluptas.', 'Quasi debitis qui at laboriosam assumenda. Omnis quaerat facere quibusdam quibusdam et. Deserunt possimus vitae voluptatum molestiae soluta qui libero. Dolorum quibusdam omnis quos quia neque. Delectus repellendus nam dignissimos expedita quam amet dolores.', 3, '2021-04-07 17:59:20', '2021-04-07 17:59:20'),
(3, 'Estel Strosin', 'http://www.okuneva.org/facilis-quod-possimus-rerum-laudantium-qui-perferendis-qui', 'New Job', '1995-03-15', 'male', '57720 Ricky Point\nSouth Barryburgh, NC 39503-2332', '45715205951', 'Quia dolore libero id doloribus est natus dolorem. Eligendi neque temporibus dolores qui. Omnis necessitatibus voluptates delectus aliquam quibusdam.', 'Est quidem rerum occaecati. Magni iure rerum qui repudiandae fuga impedit. Eveniet sapiente doloribus doloribus et quo eligendi in. Doloribus nisi et distinctio amet et aliquid dolor. Nihil atque ea rerum dolore hic et sed. Repellendus eaque qui delectus velit labore quia.', 4, '2021-04-07 17:59:20', '2021-04-07 17:59:20'),
(4, 'Christop Hauck', 'http://www.kilback.com/optio-qui-maiores-saepe-eos-ea-beatae-reprehenderit.html', 'New Job', '2007-11-07', 'male', '82559 Luna Manors Apt. 377\nJovannyfort, WY 14724-3975', '54988146506', 'Minus voluptatibus et omnis. Suscipit reiciendis voluptatem iste labore. Laboriosam laborum ut et sunt commodi veniam. Animi unde voluptatem quo inventore et optio. Corrupti est voluptas delectus placeat ullam quo atque.', 'Quia minus omnis quia laboriosam velit. Asperiores et quo saepe. Inventore nulla itaque ea sit at quam. Accusamus consequatur qui non ex. Qui veniam aut esse molestiae. Dolorem est est sit laboriosam accusamus quis unde et. Quo dolorem debitis eum dolorum molestiae quia.', 5, '2021-04-07 17:59:20', '2021-04-07 17:59:20'),
(5, 'Dr. Watson Johnson DVM', 'http://www.kuphal.com/dolorem-quas-suscipit-aspernatur-consectetur.html', 'New Job', '1991-05-09', 'male', '706 Beier Dam\nNew Sanfordbury, NM 81254-9550', '11722462532', 'Quos ut sit enim beatae omnis ea illum. Voluptatibus ab deserunt animi maxime laborum. Sapiente et est rem similique nostrum beatae aut. Non architecto voluptatem exercitationem quasi beatae. Placeat amet voluptas mollitia. Ea omnis doloribus adipisci aperiam.', 'Perferendis hic facilis officia et est nisi sunt. Vel aliquam nam rem fuga quo quis. Voluptas autem laudantium beatae nulla asperiores culpa cupiditate.', 6, '2021-04-07 17:59:20', '2021-04-07 17:59:20'),
(6, 'Kane Nicolas', 'http://www.bednar.com/maxime-quasi-voluptatem-quia-qui.html', 'New Job', '2015-07-11', 'male', '86105 Monique Drives\nLake Alvina, KY 06425', '12382608521', 'Quia nulla voluptatum cumque quo quod. Hic cupiditate deserunt nisi. Nihil sint possimus sit doloribus eum. Facere vitae ex provident. Vitae quo autem quis quis aspernatur autem nesciunt. Quam autem architecto non dolorum id distinctio. Culpa at doloribus similique.', 'Blanditiis maxime ipsam quisquam error voluptate. Debitis suscipit voluptatem et tenetur magnam. Ut mollitia vero sed recusandae voluptas est. Voluptatem minima blanditiis ut sint excepturi tempora et. Laudantium assumenda error aut voluptatum rerum perferendis. Quidem sapiente ratione ipsam omnis ut commodi.', 7, '2021-04-07 17:59:20', '2021-04-07 17:59:20'),
(7, 'Jack Maggio', 'http://boehm.com/quia-vitae-quis-ut-deserunt-perferendis-minima', 'New Job', '2008-09-30', 'male', '740 Glenna Meadow Apt. 806\nNickolasside, NJ 97459-9774', '94784341036', 'Possimus qui et aspernatur quam neque enim aspernatur. Aspernatur aut ex totam.', 'Culpa consectetur tempora temporibus. Ratione hic adipisci debitis molestiae non ut. Quia et et inventore et eos distinctio. Deserunt iste occaecati cupiditate harum aut alias vitae veritatis.', 8, '2021-04-07 17:59:20', '2021-04-07 17:59:20'),
(8, 'Dr. Lacy Hessel Sr.', 'http://www.wyman.com/ut-veniam-reprehenderit-fugiat-earum', 'New Job', '2010-11-22', 'male', '939 Jarrett Manors Suite 617\nRuthehaven, WV 11682-1858', '43137619375', 'Totam dolores mollitia sapiente reprehenderit est nihil neque. Quo dolor nemo molestiae debitis quam id. Ut consequuntur autem cum. Ut modi optio voluptatem inventore. Mollitia pariatur eos eum tempora. Velit quis aperiam perspiciatis illum sit ut.', 'Eaque id in id qui vitae. Voluptas maxime aliquid facilis. Ut itaque et exercitationem iste necessitatibus. Voluptas dolore est itaque quia rem. Consequuntur rerum tempora ullam voluptatem. Adipisci quas sed praesentium exercitationem ex. Est eligendi nulla rerum voluptate ipsum quasi.', 9, '2021-04-07 17:59:20', '2021-04-07 17:59:20'),
(9, 'Tabitha Lubowitz', 'http://www.renner.com/saepe-sint-aut-ut-nostrum-quo-omnis.html', 'New Job', '1975-12-22', 'male', '89722 Rau Landing\nDuBuquefurt, NJ 31469', '32191024033', 'Temporibus magni alias necessitatibus non. Accusantium quam culpa saepe deleniti autem eum. Eos sunt id quia impedit. Eveniet tempore corrupti labore rerum in in animi. Minus laudantium recusandae enim quis qui. Velit dicta non explicabo quae sint corrupti. Fugit libero nisi in. Ullam recusandae perspiciatis molestias omnis. Minus repellat consectetur rerum. Officia alias voluptate odit non. Dolorem in a earum qui dolorem tenetur.', 'Iusto velit impedit enim ea neque. Libero nisi doloribus sunt ipsam enim accusantium. Velit laudantium quas earum ipsam delectus reiciendis. Autem corporis corporis alias at. Voluptatibus impedit quae ullam similique. Hic rerum voluptatem delectus sint necessitatibus aut natus. Et qui natus sunt nulla ut officiis dolores odit. Quos accusamus quis sed dolor magni. Dolorem assumenda qui dolores dolor suscipit.', 10, '2021-04-07 17:59:20', '2021-04-07 17:59:20');

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hobbyname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`id`, `hobbyname`, `icon`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Libero quidem sint eum.', 'icone_name', 3, '2021-04-07 17:59:20', '2021-04-07 17:59:20'),
(2, 'Vero facilis.', 'icone_name', 10, '2021-04-07 17:59:21', '2021-04-07 17:59:21'),
(3, 'Repellendus omnis.', 'icone_name', 2, '2021-04-07 17:59:21', '2021-04-07 17:59:21'),
(4, 'Porro et.', 'icone_name', 7, '2021-04-07 17:59:21', '2021-04-07 17:59:21'),
(5, 'Distinctio et totam.', 'icone_name', 8, '2021-04-07 17:59:21', '2021-04-07 17:59:21'),
(6, 'Dolorum.', 'icone_name', 8, '2021-04-07 17:59:22', '2021-04-07 17:59:22'),
(7, 'Rerum vitae magni.', 'icone_name', 10, '2021-04-07 17:59:22', '2021-04-07 17:59:22'),
(8, 'Molestiae.', 'icone_name', 4, '2021-04-07 17:59:22', '2021-04-07 17:59:22'),
(9, 'Labore id.', 'icone_name', 7, '2021-04-07 17:59:22', '2021-04-07 17:59:22'),
(10, 'Delectus voluptatem.', 'icone_name', 7, '2021-04-07 17:59:22', '2021-04-07 17:59:22'),
(11, 'Quod reiciendis vitae.', 'icone_name', 5, '2021-04-07 17:59:22', '2021-04-07 17:59:22'),
(12, 'Dolor delectus.', 'icone_name', 8, '2021-04-07 17:59:23', '2021-04-07 17:59:23'),
(13, 'Rem eum sequi.', 'icone_name', 8, '2021-04-07 17:59:23', '2021-04-07 17:59:23'),
(14, 'Commodi.', 'icone_name', 2, '2021-04-07 17:59:23', '2021-04-07 17:59:23'),
(15, 'Et et.', 'icone_name', 2, '2021-04-07 17:59:23', '2021-04-07 17:59:23'),
(16, 'Voluptatem.', 'icone_name', 6, '2021-04-07 17:59:23', '2021-04-07 17:59:23'),
(17, 'Ea quisquam.', 'icone_name', 5, '2021-04-07 17:59:24', '2021-04-07 17:59:24'),
(18, 'Architecto ut qui.', 'icone_name', 6, '2021-04-07 17:59:24', '2021-04-07 17:59:24'),
(19, 'Quas minus rerum quasi.', 'icone_name', 9, '2021-04-07 17:59:24', '2021-04-07 17:59:24'),
(20, 'Doloribus ullam et.', 'icone_name', 9, '2021-04-07 17:59:24', '2021-04-07 17:59:24'),
(21, 'Beatae incidunt qui.', 'icone_name', 7, '2021-04-07 17:59:24', '2021-04-07 17:59:24'),
(22, 'Reiciendis.', 'icone_name', 3, '2021-04-07 17:59:25', '2021-04-07 17:59:25'),
(23, 'Facilis et.', 'icone_name', 5, '2021-04-07 17:59:25', '2021-04-07 17:59:25'),
(24, 'Voluptates.', 'icone_name', 8, '2021-04-07 17:59:25', '2021-04-07 17:59:25'),
(25, 'Voluptate.', 'icone_name', 4, '2021-04-07 17:59:25', '2021-04-07 17:59:25'),
(26, 'Non pariatur aut.', 'icone_name', 3, '2021-04-07 17:59:25', '2021-04-07 17:59:25'),
(27, 'Cupiditate nemo unde.', 'icone_name', 10, '2021-04-07 17:59:26', '2021-04-07 17:59:26'),
(28, 'Quis pariatur.', 'icone_name', 3, '2021-04-07 17:59:26', '2021-04-07 17:59:26'),
(29, 'Et neque qui.', 'icone_name', 7, '2021-04-07 17:59:26', '2021-04-07 17:59:26'),
(30, 'Nihil.', 'icone_name', 2, '2021-04-07 17:59:26', '2021-04-07 17:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2020_11_07_082823_laratrust_setup_tables', 1),
(14, '2020_11_08_172527_create_generals_table', 1),
(15, '2020_11_09_191625_create_skills_table', 1),
(16, '2020_11_10_170613_create_hobbies_table', 1),
(17, '2020_11_11_224758_create_experiences_table', 1),
(18, '2020_11_11_224828_create_education_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skillname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skillname`, `level`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Reiciendis quasi id.', 2, 8, '2021-04-07 17:59:20', '2021-04-07 17:59:20'),
(2, 'Aperiam sit.', 1, 7, '2021-04-07 17:59:20', '2021-04-07 17:59:20'),
(3, 'Pariatur.', 2, 3, '2021-04-07 17:59:21', '2021-04-07 17:59:21'),
(4, 'Sapiente.', 3, 7, '2021-04-07 17:59:21', '2021-04-07 17:59:21'),
(5, 'Quia.', 3, 6, '2021-04-07 17:59:21', '2021-04-07 17:59:21'),
(6, 'Eos saepe.', 4, 6, '2021-04-07 17:59:21', '2021-04-07 17:59:21'),
(7, 'Quaerat illum alias ea.', 2, 9, '2021-04-07 17:59:22', '2021-04-07 17:59:22'),
(8, 'Ut hic eius id.', 4, 8, '2021-04-07 17:59:22', '2021-04-07 17:59:22'),
(9, 'Maxime eos natus et.', 4, 9, '2021-04-07 17:59:22', '2021-04-07 17:59:22'),
(10, 'Labore natus beatae.', 3, 8, '2021-04-07 17:59:22', '2021-04-07 17:59:22'),
(11, 'Non perspiciatis.', 5, 9, '2021-04-07 17:59:22', '2021-04-07 17:59:22'),
(12, 'Nemo ipsam.', 2, 8, '2021-04-07 17:59:22', '2021-04-07 17:59:22'),
(13, 'Asperiores.', 3, 9, '2021-04-07 17:59:23', '2021-04-07 17:59:23'),
(14, 'Tenetur vel.', 3, 10, '2021-04-07 17:59:23', '2021-04-07 17:59:23'),
(15, 'Aperiam.', 2, 10, '2021-04-07 17:59:23', '2021-04-07 17:59:23'),
(16, 'Aut et eos.', 1, 9, '2021-04-07 17:59:23', '2021-04-07 17:59:23'),
(17, 'Impedit.', 5, 9, '2021-04-07 17:59:23', '2021-04-07 17:59:23'),
(18, 'Quo vel ut.', 5, 5, '2021-04-07 17:59:24', '2021-04-07 17:59:24'),
(19, 'Natus expedita.', 3, 5, '2021-04-07 17:59:24', '2021-04-07 17:59:24'),
(20, 'Minima fugit aut id.', 2, 10, '2021-04-07 17:59:24', '2021-04-07 17:59:24'),
(21, 'Cumque est.', 4, 7, '2021-04-07 17:59:24', '2021-04-07 17:59:24'),
(22, 'Explicabo.', 4, 2, '2021-04-07 17:59:24', '2021-04-07 17:59:24'),
(23, 'Aut nam.', 3, 2, '2021-04-07 17:59:25', '2021-04-07 17:59:25'),
(24, 'Eos rerum ullam a.', 4, 7, '2021-04-07 17:59:25', '2021-04-07 17:59:25'),
(25, 'Voluptatem.', 2, 8, '2021-04-07 17:59:25', '2021-04-07 17:59:25'),
(26, 'In ut corrupti.', 4, 9, '2021-04-07 17:59:25', '2021-04-07 17:59:25'),
(27, 'Rem voluptatem.', 4, 8, '2021-04-07 17:59:25', '2021-04-07 17:59:25'),
(28, 'Maiores adipisci.', 4, 6, '2021-04-07 17:59:26', '2021-04-07 17:59:26'),
(29, 'Quidem.', 5, 9, '2021-04-07 17:59:26', '2021-04-07 17:59:26'),
(30, 'Commodi similique.', 3, 5, '2021-04-07 17:59:26', '2021-04-07 17:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approve` int(11) NOT NULL DEFAULT 0,
  `permissions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `approve`, `permissions`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@app.com', NULL, '$2y$10$PNqSakX2dQvvhbHmmxIdAuuCuTbDOeXmJheLVbaXhOh4gZc1XwqWi', 1, 'admin', 'default.jpg', NULL, '2021-04-07 17:59:17', '2021-04-07 17:59:17'),
(2, 'Ms. Amber Casper IV', 'toy.tommie@johns.com', NULL, '$2y$10$rSznzlZcMKQXoMjs6.yev.Pe6lLOssmWMgpVyKOHriS/WlRsqowXu', 0, 'user', 'default.jpg', NULL, '2021-04-07 17:59:18', '2021-04-07 17:59:18'),
(3, 'Ashlee Schaden', 'jan55@gmail.com', NULL, '$2y$10$P65msQ4HrVYwXjCfLZ70aejyvOUB2MRge2pkvNVpKrwyOB5YtKcXa', 0, 'user', 'default.jpg', NULL, '2021-04-07 17:59:18', '2021-04-07 17:59:18'),
(4, 'Elliot Feest MD', 'sim.hamill@hotmail.com', NULL, '$2y$10$XnX07MCTRj4dOLGVxJH8du6FZgWH15B9MZUPrJxVzgLeRQDVHuu0q', 0, 'user', 'default.jpg', NULL, '2021-04-07 17:59:18', '2021-04-07 17:59:18'),
(5, 'Braulio Ferry', 'west.jeanne@hotmail.com', NULL, '$2y$10$PyRImWror2npXPyQvy4TPergeFaNSwm8b3mUxo9hfJI5sGhG.2XzS', 0, 'user', 'default.jpg', NULL, '2021-04-07 17:59:18', '2021-04-07 17:59:18'),
(6, 'Cullen Blick', 'conroy.irving@gmail.com', NULL, '$2y$10$RJsrocSz2w.K9lfBf4pF.u6fELFd46.PsF7aRgLHYGfhDVMxoc7tS', 1, 'user', 'default.jpg', NULL, '2021-04-07 17:59:18', '2021-04-07 17:59:18'),
(7, 'Dr. Orlando Weber V', 'danial.dietrich@hotmail.com', NULL, '$2y$10$snxHMr5EequcD4agFkkAHeIsQqPtKGAuUyvaDH3lrj/owEKB11mzu', 0, 'user', 'default.jpg', NULL, '2021-04-07 17:59:19', '2021-04-07 17:59:19'),
(8, 'Lizzie Flatley PhD', 'hegmann.emerald@gmail.com', NULL, '$2y$10$.dlow0StQcs0BgChB1r9feh6ARc/Mpxzpv556bqOwdCpt9.0sKVVu', 0, 'user', 'default.jpg', NULL, '2021-04-07 17:59:19', '2021-04-07 17:59:19'),
(9, 'Dr. Monserrat Daniel', 'caden44@hotmail.com', NULL, '$2y$10$wYlT85ZdGoi6Effzgwqld.bm4Y6S7LkGr8h/ySIZAMmRcU7GxuMtW', 0, 'user', 'default.jpg', NULL, '2021-04-07 17:59:19', '2021-04-07 17:59:19'),
(10, 'Prof. Russel Ortiz', 'ward.lorine@ruecker.com', NULL, '$2y$10$ukS/fziZOMzuiA4MzbcYsup5jMwSBGWt/h2WHdSDvEK4wsGl5f/em', 0, 'user', 'default.jpg', NULL, '2021-04-07 17:59:19', '2021-04-07 17:59:19'),
(11, 'Jolie Stark', 'virgil00@hotmail.com', NULL, '$2y$10$tReUIDtn66B75KF.B0WEYelQahvwhDQR/eTpx13HNZ.CnU5hKV/76', 0, 'user', 'default.jpg', NULL, '2021-04-07 17:59:20', '2021-04-07 17:59:20'),
(12, 'jojytofi', 'xezegarowi@mailinator.com', NULL, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 0, 'user', 'm73OgJFLWFKMjOepFiI6uI0Za3rEYerKTo3AwR0S.jpg', NULL, '2021-04-07 18:00:47', '2021-04-07 18:00:47'),
(13, 'fibyry', 'cobavesif@mailinator.com', NULL, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 0, 'user', 'HNZQMAAS1IKxE4lXWndBh4YjQRmOEZ0Eayq4Hhst.jpg', NULL, '2021-04-07 19:10:55', '2021-04-07 19:10:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `education_user_id_foreign` (`user_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiences_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generals`
--
ALTER TABLE `generals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `generals_website_unique` (`website`),
  ADD UNIQUE KEY `generals_phone_unique` (`phone`),
  ADD KEY `generals_user_id_foreign` (`user_id`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hobbies_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generals`
--
ALTER TABLE `generals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `generals`
--
ALTER TABLE `generals`
  ADD CONSTRAINT `generals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD CONSTRAINT `hobbies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
