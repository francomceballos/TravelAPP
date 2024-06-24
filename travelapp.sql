-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 02:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(3) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `num_of_guests` int(10) NOT NULL,
  `checkin_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `destination` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `city_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `phone_number`, `num_of_guests`, `checkin_date`, `destination`, `status`, `city_id`, `user_id`, `created_at`) VALUES
(1, 'Franco Ceballos', '+543442653695', 3, '0000-00-00 00:00:00.000000', 'Bariloche', 'Pending', 1, 1, '2024-06-06 12:50:20'),
(2, 'Silver Silverio', '+5430423141234', 3, '0000-00-00 00:00:00.000000', 'Tierra del Fuego', 'Pending', 3, 2, '2024-06-06 12:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(3) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `trip_days` int(4) NOT NULL,
  `price` varchar(4) NOT NULL,
  `country_id` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `image`, `trip_days`, `price`, `country_id`, `created_at`) VALUES
(1, 'Bariloche', 'offers-bariloche.jpg', 7, '200', 1, '2024-06-04 14:00:49'),
(2, 'Cusco', 'offers-cusco.jpg', 4, '150', 2, '2024-06-04 14:00:49'),
(3, 'Tierra del Fuego', 'offers-tierra-del-fuego.jpg', 6, '300', 1, '2024-06-04 14:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(3) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `continent` varchar(200) NOT NULL,
  `population` varchar(200) NOT NULL,
  `territory` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `image`, `continent`, `population`, `territory`, `description`, `created_at`) VALUES
(1, 'Argentina', 'banner-argentina.jpg', 'South America', '46.05', '2.78', 'Discover Argentina: A Land of Wonders\r\n\r\nArgentina, a country of diverse landscapes and vibrant culture, beckons travelers from around the globe. Located in South America, it stretches from the lush, tropical rainforests of the north to the icy glaciers of the south, offering a variety of experiences for every kind of adventurer.\r\n\r\nNatural Beauty\r\n\r\nBegin your journey in the breathtaking Andes mountains, home to the highest peak in the Americas, Aconcagua. Explore the vast Pampas, where gauchos roam and the spirit of the Argentine cowboy is alive. Marvel at the awe-inspiring Iguazu Falls, a UNESCO World Heritage site, and feel the raw power of nature.\r\n\r\nFor those seeking more serene environments, the Lake District\'s pristine waters and the charming town of Bariloche offer a perfect retreat. Don\'t miss the mystical beauty of Patagonia, with its dramatic landscapes, including the stunning Perito Moreno Glacier.\r\n\r\nCultural Riches\r\n\r\nArgentina\'s cities are as captivating as its natural wonders. Buenos Aires, the cosmopolitan capital, is a vibrant metropolis known for its European-style architecture, passionate tango dance, and lively nightlife. Wander through historic neighborhoods like San Telmo and La Boca, or relax in the elegant cafes of Recoleta.\r\n\r\nExperience the rich cultural tapestry of Argentina in cities like Córdoba and Rosario, where colonial history meets modern energy. Visit the wine country of Mendoza, where you can savor world-class Malbec wines against the backdrop of the Andes.\r\n\r\nGastronomic Delights\r\n\r\nArgentine cuisine is a delightful journey of flavors. Indulge in the legendary asado (barbecue), taste empanadas filled with savory goodness, and enjoy the diverse offerings of local markets. Pair your meals with Argentina\'s renowned wines, especially the robust Malbecs.\r\n\r\nAdventure Awaits\r\n\r\nFor the thrill-seekers, Argentina offers numerous adventure activities. Ski in the Andes, trek through the rugged Patagonian wilderness, or embark on a horseback riding expedition through the Pampas. The country\'s extensive coastline also provides opportunities for water sports and beach relaxation.\r\n\r\nWelcoming People\r\n\r\nArgentinians are known for their warmth and hospitality. Whether you\'re exploring urban centers or remote villages, you\'ll be greeted with a friendly smile and a willingness to share their rich heritage and traditions.\r\n\r\nPlan Your Trip\r\n\r\nArgentina is a destination that promises unforgettable experiences. From its natural wonders to its cultural treasures, this country offers something for everyone. Start planning your adventure today and discover why Argentina is a must-visit destination.', '2024-06-04 13:43:24'),
(2, 'Peru', 'banner-peru.jpg', 'South America', '34.05', '1.285', 'Explore Peru: A Treasure of Ancient Wonders and Natural Beauty\r\n\r\nPeru, a country rich in history, culture, and natural splendor, invites travelers to embark on an unforgettable adventure. Situated in the heart of South America, Peru offers a myriad of experiences that cater to every type of explorer, from the history enthusiast to the nature lover.\r\n\r\nAncient Mysteries\r\n\r\nPeru is home to one of the world\'s greatest civilizations—the Inca Empire. The iconic Machu Picchu, a UNESCO World Heritage site, stands as a testament to the ingenuity of this ancient society. Wander through the sacred ruins set high in the Andes mountains and immerse yourself in the mystique of this archaeological marvel.\r\n\r\nThe Sacred Valley, with its picturesque landscapes and charming villages, provides further insight into the Incan way of life. Don\'t miss the lesser-known but equally captivating sites such as Choquequirao and the Nazca Lines, massive geoglyphs etched into the desert that continue to baffle archaeologists.\r\n\r\nCultural Richness\r\n\r\nPeru\'s vibrant culture is a blend of indigenous traditions and Spanish influences. In the bustling capital city of Lima, experience the fusion of old and new. Visit the historic center, a UNESCO World Heritage site, and explore its colonial architecture, museums, and churches.\r\n\r\nCusco, the former Inca capital, is a city steeped in history and culture. Walk its cobbled streets, discover ancient temples, and enjoy the lively atmosphere of its markets and festivals. The colorful Andean culture thrives here, with traditional music, dance, and artisanal crafts.\r\n\r\nNatural Wonders\r\n\r\nPeru\'s diverse geography offers a wealth of natural wonders. The Amazon Rainforest, one of the most biodiverse regions on Earth, invites you to explore its lush greenery and encounter exotic wildlife. Take a river cruise or stay in an eco-lodge to fully immerse yourself in this vibrant ecosystem.\r\n\r\nThe Andes mountains provide opportunities for trekking, with the renowned Inca Trail leading adventurers to Machu Picchu. The Colca Canyon, one of the deepest in the world, is a haven for hikers and offers breathtaking views and the chance to see majestic Andean condors.\r\n\r\nFor a unique experience, visit the surreal landscapes of the Altiplano and the shimmering beauty of Lake Titicaca, the highest navigable lake in the world. Explore the floating reed islands of the Uros people and the traditional communities on Taquile and Amantani islands.\r\n\r\nCulinary Delights\r\n\r\nPeruvian cuisine is celebrated worldwide for its diversity and flavor. Savor the fresh seafood in ceviche, enjoy the hearty comfort of lomo saltado, and taste the unique fusion of flavors in dishes like aji de gallina and causa. Lima, dubbed the culinary capital of South America, boasts numerous award-winning restaurants where you can indulge in gourmet Peruvian dishes.\r\n\r\nAdventure Opportunities\r\n\r\nFor those seeking adrenaline-pumping activities, Peru offers a range of adventures. Surf the waves along the Pacific coast, explore the mysterious desert landscapes of Paracas and the Huacachina oasis, or embark on a thrilling white-water rafting expedition in the Urubamba River.\r\n\r\nWarm Hospitality\r\n\r\nPeruvians are known for their warmth and hospitality. Whether you\'re in a bustling city or a remote village, you\'ll be welcomed with open arms and a friendly smile. Engage with the local communities and learn about their customs and traditions for a truly enriching experience.\r\n\r\nPlan Your Journey\r\n\r\nPeru is a destination that promises a journey filled with wonder and discovery. From ancient ruins to natural landscapes and vibrant culture, this country offers an array of unforgettable experiences. Start planning your adventure today and uncover the many treasures of Peru.', '2024-06-04 13:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `mypassword` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `mypassword`, `created_at`) VALUES
(1, 'franco.ceballos@gmail.com', 'franco.ceballos', '$2y$10$hGTpMwtZBc2smfAbgPFDy.NYl4zoAkopQQ/XNAtlo5HUMlv1xTXJy', '2024-06-03 14:46:18'),
(2, 'silver@gmail.com', 'silver', '$2y$10$E1logGWQpmfBAotfiJZrJeU4ChJ9rCbGCi.LdHKIQH1yDiD23aKCC', '2024-06-06 12:48:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
