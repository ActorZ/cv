-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 04:39 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zoran Glumac', 'glumaczoran@yahoo.com', NULL, '$2y$10$415EqWp6A.eA.dKde1H1f.olZvP8ZxDtQumtmBnDbdNPbVimS3qKm', 'Ov2NOCUBNqYWnWGNIY9nXNYnMvqapWFcu7K5Wvb4JunvmP80DdNePYwNks0i', '2018-10-08 12:09:25', '2018-10-10 08:18:09');

-- --------------------------------------------------------

--
-- Table structure for table `admin_settings`
--

CREATE TABLE `admin_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `document_sr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_settings`
--

INSERT INTO `admin_settings` (`id`, `name`, `email`, `address`, `birth`, `phone`, `created_at`, `updated_at`, `document_sr`, `document_en`) VALUES
(1, 'Zoran Glumac', 'glumaczoran@yahoo.com', 'Žitni Trg 9, Novi Sad', '04.09.1979', '064/988-32-49', NULL, '2018-10-22 08:01:26', 'cv Glumac Zoran.doc', 'cv Glumac Zoran eng.doc');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Probno ime', 'neciji@email.com', 'Neki naslov poruke', 'Neka poruka', NULL, '2018-10-19 11:25:03', '2018-10-19 11:25:03'),
(2, 'Probno ime', 'neciji@email.com', 'Neki naslov poruke', 'Neka poruka', '2018-10-19 13:28:45', '2018-10-19 11:26:28', '2018-10-19 13:28:45'),
(3, 'Probno ime', 'neciji@email.com', 'Neki naslov poruke', 'Neka poruka', '2018-10-19 12:50:23', '2018-10-19 11:30:00', '2018-10-19 12:50:23'),
(4, 'Probno ime', 'neciji@email.com', 'Neki naslov poruke', 'Neka poruka', '2018-10-19 12:50:15', '2018-10-19 11:37:46', '2018-10-19 12:50:15'),
(5, 'Zoran', 'glumaczoran@yahoo.com', 'You\'ve got a payment', 'asasdsadasdsd', NULL, '2018-10-25 11:52:47', '2018-10-25 11:52:47'),
(6, 'Mirko Mirkovic', 'glumaczoran@yahoo.com', 'Test eng', 'sssdfsdfsdfsdfsdf', NULL, '2018-10-26 10:35:40', '2018-10-26 10:35:40');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_05_182514_add_column_is_admin_in_users', 2),
(4, '2018_10_08_094103_create_admins_table', 3),
(5, '2018_10_10_132654_create_static_pages_table', 4),
(6, '2018_10_15_121519_add_images_fields_in_static', 5),
(7, '2018_10_17_093010_create_admin_settings_table', 6),
(8, '2018_10_18_150504_create_projects_table', 7),
(9, '2018_10_18_152105_add_column_active_in_projects', 8),
(10, '2018_10_19_121405_create_contacts_table', 9),
(11, '2018_10_22_082752_add_columns_documents_to_settings', 10);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `url`, `description`, `description_en`, `image`, `created_at`, `updated_at`, `active`) VALUES
(1, 'Opština Odžaci', 'https://www.odzaci.rs/', 'Web prezentacija Opštine Odžaci sa admin panelom i  aplikacijom sistem48,koja omogućava administratoru da prosleđuje prijavljene probleme građana nadležnim institucijama i objavljuje odgovore u roku od 48 časova', 'Web site of the Municipality of Odžaci with the admin panel and the system48 system (as separate admin panel), which enables the administrator to forward the reported problems of citizens to the competent institutions and announces the answers within 48 hours.', 'odzaci.jpg', '2018-10-19 07:34:29', '2018-10-26 08:52:41', 1),
(2, 'Bio Ena', 'https://www.zdravahrananovisad.rs/', 'Bio Ena je onlajn prodavnica zdrave hrane, sa mogućnošću kreiranja profila kupca kao i opcijom dodavanja proizvoda u listu žeja i mogućnošću upotrebe filtera po ceni i proizvođaču', 'Bio Ena is an online health food shop, with possibility for customer to create an profile as well as the option of adding products to the wish list and possibility to filter products by price and/or manufacturer.', 'bioena.jpg', '2018-10-19 07:52:33', '2018-10-26 08:53:28', 1),
(3, 'Apa One', 'https://www.apaone.com/', 'Sajt kompanije za koju sam radio a bavi se izgradnjom online identiteta firme, web razvojem, optimizacijom pretraživača, dizajniranjem, audio i video sadržajem, marketingom na društvenim mrežama', 'The site of the company I worked for. ApaOne deals with the creation of online company identities, web development, search engine optimization, design, audio and video content, and marketing on social networks.', 'apaone.jpg', '2018-10-19 08:11:42', '2018-10-26 08:53:55', 1),
(4, 'Online CV', 'http:\\\\www.cvzoranglumac.info', 'Ovaj online CV sa admin panelom je prvi i za sada jedini projekat urađen u Laravel-u', 'My online CV, first and only,for now, project built in Laravel.', 'cv.jpg', '2018-10-19 08:16:35', '2018-10-26 08:54:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `static_pages`
--

CREATE TABLE `static_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `short_description_en` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `static_pages`
--

INSERT INTO `static_pages` (`id`, `title`, `title_en`, `short_description`, `short_description_en`, `description`, `description_en`, `image`, `active`, `created_at`, `updated_at`, `cover`, `avatar`) VALUES
(1, 'Uvodni tekst', NULL, NULL, NULL, '<i>Diplomirani ekonomista , Php Web Developer<br><br></i><i><br></i>', 'Graduated economist, Php Web Developer', 'tim-slika-zoran.jpg', 1, '2018-10-16 11:01:59', '2018-10-26 08:28:48', NULL, NULL),
(5, 'Radno iskustvo', NULL, '<li>\r\n<h2>2016 - 2018 </h2>\r\n<h3>Apa One</h3>\r\n<h4>marketing agencija</h4>\r\n<p>Marketing agencija ApaOne bavi se izgradnjom online identiteta firme, web razvojem, optimizacijom pretraživača, dizajniranjem, audio i video sadržajem, marketingom na društvenim mrežama. Moje pozicija web developera koju sam obavljao zahtevala je znanje Php-a, MySql-a, JQuery-a, XML-a, HTML-a, JSON-a</p>\r\n</li>', '<li>\r\n<h2>2016 - 2018 </h2>\r\n<h3>Apa One</h3>\r\n<h4>marketing agency</h4>\r\n<p>Marketing agency ApaOne deals with the creation of online company identities, web development, search engine optimization, design, audio and video content, and marketing on social networks. My position as web developer required knowledge of Php, MySql, JQuery, XML, HTML, JSON.</p>\r\n</li>', 'dsdasdasdas', NULL, NULL, 1, '2018-10-17 10:24:32', '2018-10-26 08:31:36', NULL, NULL),
(6, 'Radno iskustvo kao ekonomista', NULL, '<li>\r\n<h2> 2015 </h2>\r\n<h3>FKL</h3>\r\n<h4>fabrika kotrljajućih ležajeva</h4>\r\n<p>FKL je fabrika ležajeva za poljoprivredne i industrijske mašine se sedištem u Temerinu,prevashodno orjentisana na inostrana tržišta. Obavljao sam poslove referenta logistike i menadžera prodaje</p>\r\n</li>\r\n<li>\r\n<h2> 2012-2014 </h2>\r\n<h3>Prodavac životnog osiguranja</h3>\r\n<h4>zastupnik</h4>\r\n<p>nezavisni zastupnik 4 osiguravačke kuće, Merkur, Wiener Städtische , Uniqua,Grawe</p>\r\n</li>\r\n<li>\r\n<h2> 2010-2011 </h2>\r\n<h3>Model</h3>\r\n<h4>butik</h4>\r\n<p>Vlasnik maloprodajnog objekta odeće i obuće sa sedištem u Novom Sadu</p>\r\n</li>\r\n<li>\r\n<h2> 2008 - 2009 </h2>\r\n<h3>Manual</h3>\r\n<h4>proizvodnja proizvoda od kože</h4>\r\n<p>Manual je zanatska radionica za izradu proizvoda od kože,sa sedištem u Novom Sadu. Radio sam na poziciji  Administrativnog radnika - kontrolora, na poslovima finansijsko robne kontrole poslovanja prodavnica u Beogradu I Novom Sadu. Radio sam popise stanja robe u proizvodnji I prodavnicama, vršio kontrolu ulaza I izlaza robe iz lokala i magacina,plaćanja,fakture..</p>\r\n</li>\r\n<h2> 2007 </h2>\r\n<h3>Novimpex d.o.o</h3>\r\n<h4>trgovina</h4>\r\n<p>Novimpex je preduzeće koje se bavi uvozom i veleprodajom konzervirane tunjevine \"Happy tuna\". Moja pozicija je bila Referent spoljne trgovine. Radio sam na poslovima vezanim za komunikaciju sa dobavljaščima, poslovi vezani za carinu , održavanje i unapređenje odnosa sa postojećim kupcima, širenje baze kupaca i osvajanje novih segmenata tržišta.\r\n</p>\r\n</li>', '<li>\r\n<h2> 2015 </h2>\r\n<h3>FKL</h3>\r\n<h4> bearings factory</h4>\r\n<p>FKL is a factory of bearings for agricultural and industrial machines based in Temerin, primarily oriented to foreign markets. I was in charge of the logistics and sales manager.</p>\r\n</li>\r\n<li>\r\n<h2> 2012-2014 </h2>\r\n<h3>Life Insurance Seller</h3>\r\n<h4>representative</h4>\r\n<p>   Independent representative of 4 insurance companies, Merkur, Wiener Städtische, Uniqua, Grawe</p>\r\n</li>\r\n<li>\r\n<h2> 2010-2011 </h2>\r\n<h3>Model</h3>\r\n<h4>shop</h4>\r\n<p>The owner of a retail clothing and footwear shop based in Novi Sad.</p>\r\n</li>\r\n<li>\r\n<h2> 2008 - 2009 </h2>\r\n<h3>Manual</h3>\r\n<h4>handcrafted workshop </h4>\r\n<p>Manual is a handcrafted workshop for the production of leather products, based in Novi Sad. I worked as an Administrative Worker – Controller. I worked on inventories of goods in production and in shops in Novi Sad and Belgrade, checked the entrance and exit of goods from the shops and warehouse, payments, invoices ...</p>\r\n</li>\r\n<h2> 2007 </h2>\r\n<h3>Novimpex d.o.o</h3>\r\n<h4>import trade</h4>\r\n<p>Novimpex is a company that deals with the import and wholesale of canned tuna \"Happy tuna\". My position was External Trade Representative. I worked on deals related to communication with suppliers, duties related to customs, maintenance and improvement of relationships with existing customers, expanding the customer base and conquering new segments of the market.\r\n</p>\r\n</li>', 'd', NULL, NULL, 1, '2018-10-17 11:17:32', '2018-10-26 08:38:51', NULL, NULL),
(7, 'Obrazovanje', NULL, '<li>\r\n<h2>2014</h2>\r\n<h3>Certifikovani web programer</h3>\r\n<h4>ITAcademy</h4>\r\n<p> Položeni predmeti:\r\n•	Advanced PHP programming - Building Web Applications\r\n•	HTML 5 i CSS 3                    \r\n•	MySQL\r\n•	Adobe Dreamweaver CS5.5\r\n•	Apache Web Server – administracija\r\n•	Advanced JavaScript i Ajax (JQuery)\r\n•	Softversko inženjerstvo\r\n•	XML / PHP programiranje\r\n•	Internet marketing\r\n•	Veb kriptografija\r\n</p></li>\r\n<li>\r\n<h2>2007</h2>\r\n<h3>Diplomirani ekonomista</h3>\r\n<h4>Ekonomski fakultet Subotica</h4>\r\n<p>smer Marketing, diplomski rad  „Kanali distribucije usluga”. </p>\r\n</li>\r\n<li>\r\n<h2>1994-1998</h2>\r\n<h4>Gimnazija</h4>\r\n<p>Opšta gimnazija Nikola Tesla u Apatinu </p>\r\n</li>', '<li>\r\n<h2>2014</h2>\r\n<h3>Certified web developer  </h3>\r\n<h4>ITAcademy</h4>\r\n<p> Passed exams:\r\n•	Advanced PHP programming - Building Web Applications\r\n•	HTML 5 i CSS 3                    \r\n•	MySQL\r\n•	Adobe Dreamweaver CS5.5\r\n•	Apache Web Server – administration\r\n•	Advanced JavaScript i Ajax (JQuery)\r\n•	Software engineering \r\n•	XML / PHP programming \r\n•	Internet marketing\r\n•	Web cryptography \r\n</p></li>\r\n<li>\r\n<h2>2007</h2>\r\n<h3>B.Sc. in Economics </h3>\r\n<h4>Faculty of Economics in Subotica</h4>\r\n<p>Department of Marketing, diploma thesis \"Channels of services distribution\". </p>\r\n</li>\r\n<li>\r\n<h2>1994-1998</h2>\r\n<h4>High school</h4>\r\n<p>High school \"Nikola Tesla\", Apatin. </p>\r\n</li>', 'd', NULL, NULL, 1, '2018-10-17 11:32:05', '2018-10-26 08:45:12', NULL, NULL),
(8, 'Lične osobine,dodatne info', NULL, '<div class=\"single-review\">\r\n<div class=\"qut\"></div>							<p>Poznavanje jezika: engleski (B2), nemački (početni nivo)</p>\r\n</div>\r\n<div class=\"single-review\">\r\n<div class=\"qut\"></div>							<p>Vredna, uporna i samoinicijativna osoba, sposobnost  dobre organizacije, brzog učenja i odličnog uklapanja u timski rad</p>\r\n</div>\r\n<div class=\"single-review\">\r\n<div class=\"qut\"></div>							<p>Konstantna želja za učenjem, usavršavanjem i napredovanjem</p>\r\n</div>\r\n<div class=\"single-review\">\r\n<div class=\"qut\"></div>							<p>Nepušač, aktivan dugogodišnji sportista</p>\r\n</div>', '<div class=\"single-review\">\r\n<div class=\"qut\"></div>							<p>Languages: English (B2 level), German (beginner level)</p>\r\n</div>\r\n<div class=\"single-review\">\r\n<div class=\"qut\"></div>							<p>Diligent, persistent and unsolicited person with good organization ability, fast learning and a great fit in teamwork.</p>\r\n</div>\r\n<div class=\"single-review\">\r\n<div class=\"qut\"></div>							<p>Constant desire for learning, training and promotion.</p>\r\n</div>\r\n<div class=\"single-review\">\r\n<div class=\"qut\"></div>							<p>Non-smoking,athletes</p>\r\n</div>', 'j', NULL, NULL, 1, '2018-10-18 06:29:14', '2018-10-26 08:50:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Mirko Mirkovic', 'proba@proba.com', NULL, '$2y$10$ddXwCAq/GFXexd9.7JYEDeu.2sYcEb35Uj1jrKryvs7sETrKXstoO', 'DNjKgEFqvPkigazkSOghqmBoppSCVreY3cOQIOhQxMzWfZHrnbSco3BCf9Bf', '2018-10-08 10:36:21', '2018-10-08 10:36:21', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_settings`
--
ALTER TABLE `admin_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static_pages`
--
ALTER TABLE `static_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_settings`
--
ALTER TABLE `admin_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `static_pages`
--
ALTER TABLE `static_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
