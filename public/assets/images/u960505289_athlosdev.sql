-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 20, 2021 at 08:42 AM
-- Server version: 10.3.29-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u960505289_athlosdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `type`, `_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '123456', 'admin', '', '2021-09-15 06:41:32', '2021-09-15 06:41:32'),
(2, 'user', 'user@gmail.com', '123456', 'manager', '', '2021-09-09 18:44:11', '2021-09-09 12:07:12'),
(4, 'Preeti Deshmukh', 'pmnikam@gmail.com', '123456', 'manager', 'xwiQ0lBlCm8qLfLAZKFjNBjwyMgAfnQyAUhCgyIn', '2021-09-15 08:56:03', '2021-09-15 08:56:03'),
(5, 'Test one', 'test@gmail.com', 'test123', 'manager', 'UIgfgq54KuihpXo8iHkm7SZitdi9jFAaJgrM37gX', '2021-09-15 10:36:01', '2021-09-15 10:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `short_desc`, `description`, `created_at`, `updated_at`) VALUES
(4, 'blog title', '1631278307.jpg', 'blog sdfasdf', 'dsffgdf fgs', '2021-09-10 12:51:47', '2021-09-10 12:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proimage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countryCode` int(255) NOT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(255) NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coaches`
--

INSERT INTO `coaches` (`id`, `name`, `proimage`, `countryCode`, `mobile`, `club_name`, `appointment_date`, `type`, `user_id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(10, 'Preeti Deshmukhs', '1629836468.png', 0, '9999999999', 'sdssdse', '2021-09-14', 'athlete', 16, 'pmnikasssms@gmail.com', NULL, '2021-08-24 20:21:08', '2021-08-26 17:04:26'),
(11, 'Preeti Deshmukh', '1629836712.jpg', 0, '8787878787778', 'ssdds', '2021-09-14', 'athlete', 16, 'pmnikasddsdsm@gmail.com', NULL, '2021-08-24 20:25:12', '2021-08-24 20:25:12'),
(12, 'tests', '1629915962.jpg', 0, '9988776655', 'testclub', '2021-09-14', 'coach', 14, 'test@gmail.com', NULL, '2021-08-25 05:33:16', '2021-08-25 18:26:45'),
(13, 'Preeti Deshmukh', '1629992357.jpg', 0, '6566566565656', 'dssddds', '2021-09-14', 'coach', 14, 'ssddspmnikam@gmail.com', NULL, '2021-08-26 15:39:17', '2021-08-26 15:39:17'),
(14, 'Preeti Deshmukh', '1629997634.jpg', 0, '8989898989', 'sdds', '2021-09-14', 'coach', 17, 'ssdpmnikam@gmail.com', NULL, '2021-08-26 17:07:14', '2021-08-26 17:07:14'),
(18, 'Preeti Deshmukh', '1630174553.jpg', 91, '5555555555', 'hjhhj', '2021-09-14', 'coach', 21, 'pmnikams@gmail.com', NULL, '2021-08-28 18:15:53', '2021-08-28 18:15:53'),
(30, 'sdsd', '1630337472.png', 91, '5454545545', 'sdsdsd', '2021-09-16', 'athlete', 23, 'sds@gmail.com', NULL, '2021-08-30 15:31:12', '2021-08-30 15:31:12'),
(32, 'sdsdsd', '1630338135.png', 91, '6546546565', 'sddssd', '2021-09-14', 'athlete', 23, 'sdewewew@gmail.com', NULL, '2021-08-30 15:42:15', '2021-08-30 15:42:15'),
(33, 'sdssd sdds', '1630339359.png', 91, '8787878786', 'ddsds', '2021-09-07', 'coach', 24, 'ss@gmail.com', NULL, '2021-08-30 16:02:39', '2021-08-30 16:02:53'),
(35, 'qwerty', '1631277966.png', 91, '7415891530', 'qwerty', '2021-09-10 15:15:00', 'coach', 18, 'vatan.cyanoitservices@gmail.com', NULL, '2021-09-10 12:46:06', '2021-09-10 12:46:06'),
(36, 'Preeti Deshmukh', '1631389476.jpg', 91, '8085210252', 'xcx', '2021-09-09 16:30:00', 'athlete', 32, 'praveen.singh926@gmail.com', NULL, '2021-09-11 19:44:36', '2021-09-11 19:44:36'),
(95, 'test', '1631860403.png', 91, '9685072227', 'club', NULL, 'athlete', 40, 'test2@gmail.com', NULL, '2021-09-17 06:33:23', '2021-09-17 06:33:23'),
(99, 'test123', '1631861046.png', 91, '9898989898', 'national clud', NULL, 'athlete', 40, 'user@gmail.com', NULL, '2021-09-17 06:44:06', '2021-09-17 06:44:06'),
(105, 'Dominico', '1631877085.png', 65, '9818280662', 'Independent', '2021-09-17 16:41:00', 'coach', 42, 'athlos.cloud@gmail.com', NULL, '2021-09-17 11:11:25', '2021-09-17 11:11:25'),
(106, 'Preeti Deshmukh', '1632029962.png', 34, '8888888888', 'sdssds', NULL, 'coach', 15, 'pmnikam@gmail.com', NULL, '2021-09-19 05:39:22', '2021-09-19 05:39:22');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'test', 'hello@athlos.cloud', 'this is a test message', '2021-09-11 09:41:28', '2021-09-11 09:41:28'),
(2, 'test1', 'test2@gmail.com', 'this is test2 message', '2021-09-11 09:46:10', '2021-09-11 09:46:10'),
(3, 'Radhika Rawat', 'vatan.cyanoitservices@gmail.com', 'weqweqweq', '2021-09-11 11:56:36', '2021-09-11 11:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(255) NOT NULL,
  `match_type` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `first_player` varchar(255) DEFAULT NULL,
  `second_player` varchar(255) DEFAULT NULL,
  `third_player` varchar(255) DEFAULT NULL,
  `forth_player` varchar(255) DEFAULT NULL,
  `position_1` varchar(255) DEFAULT NULL,
  `position_2` varchar(255) DEFAULT NULL,
  `video` text DEFAULT NULL,
  `url` text DEFAULT NULL,
  `minutes` int(255) DEFAULT NULL,
  `point` int(255) DEFAULT NULL,
  `report` text DEFAULT NULL,
  `report_type` varchar(255) DEFAULT NULL,
  `report_url` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `match_type`, `user_id`, `first_player`, `second_player`, `third_player`, `forth_player`, `position_1`, `position_2`, `video`, `url`, `minutes`, `point`, `report`, `report_type`, `report_url`, `created_at`, `updated_at`) VALUES
(1, 'Singles', 24, 'radhika sharma', 'Radhe Govind S', NULL, NULL, 'Closer To Camera', 'Left To Camera', NULL, 'jkjjjj', 0, 10, '', NULL, NULL, '2021-08-30 16:41:59', '2021-08-30 16:41:59'),
(2, 'Singles', 23, 'Ram Singh', 'Radhe Govind S', NULL, NULL, 'Closer To Camera', 'Left To Camera', NULL, NULL, 0, 10, '', NULL, NULL, '2021-09-03 18:14:07', '2021-09-03 18:14:07'),
(3, 'Singles', 23, 'Ram Singh', 'Radhe Govind S', NULL, NULL, 'Closer To Camera', 'Left To Camera', NULL, NULL, 0, 10, '', NULL, NULL, '2021-09-03 18:14:07', '2021-09-03 18:14:07'),
(4, 'Singles', 23, 'Ram Singh', 'Radhe Govind S', NULL, NULL, 'Closer To Camera', 'Left To Camera', NULL, NULL, 0, 10, '', 'Url', 'sdsd', '2021-09-03 18:14:07', '2021-09-03 18:14:07'),
(5, 'Singles', 23, 'Ram Singh', 'Ram singh S', NULL, NULL, 'Closer To Camera', 'Left To Camera', NULL, NULL, 0, 10, '', NULL, NULL, '2021-09-03 18:17:18', '2021-09-03 18:17:18'),
(7, 'Singles', 23, 'Ram Singh', 'Radhe Govind S', NULL, NULL, 'Closer To Camera', 'Left To Camera', NULL, NULL, 0, 10, '', NULL, NULL, '2021-09-03 18:20:25', '2021-09-03 18:20:25'),
(8, 'Singles', 23, 'Ram Singh', 'Radhe Govind S', NULL, NULL, 'Closer To Camera', 'Left To Camera', '1630693893.mp4', NULL, 0, 10, '', NULL, NULL, '2021-09-03 18:31:35', '2021-09-03 18:31:35'),
(10, 'Singles', 18, 'Vatan Kushwah', 'tesrt', NULL, NULL, 'Further To Camera', 'Left To Camera', '1631017450.webm', NULL, 0, 10, '', 'Url', 'https://athlos.cloud/athlosdev/admin/dashboard', '2021-09-07 12:24:12', '2021-09-07 12:24:12'),
(12, 'Singles', 18, 'Vatan Kushwah', 'qwertryy', NULL, NULL, 'Further To Camera', 'Left To Camera', '1631027485.mp4', NULL, 0, 10, '', NULL, NULL, '2021-09-07 15:11:40', '2021-09-07 15:11:40'),
(13, 'Singles', 23, 'ccfdd', 'sdds', NULL, NULL, 'Closer To Camera', 'Left To Camera', NULL, 'https://www.youtube.com/watch?v=-WEPwq4JjeY', 0, 10, '', NULL, NULL, '2021-09-07 17:19:21', '2021-09-07 17:19:21'),
(16, 'Singles', 31, 'Praveen Singh', 'Radhe Govind S', NULL, NULL, 'Closer To Camera', 'Left To Camera', '1631386271.jpg', NULL, 0, 10, '1631425313.pdf', NULL, NULL, '2021-09-11 18:51:11', '2021-09-11 18:51:11'),
(17, 'Doubles', 32, 'ccfdd', 'Radhe Govind S', 'shyam honda S', 'tyasi', 'Closer To Camera', 'Left To Camera', '1631388712.mp4', NULL, 7, 10, '', 'Url', 'www.google.com', '2021-09-11 19:31:54', '2021-09-11 19:31:54'),
(18, 'Singles', 41, 'qweweq', 'qweqweq', NULL, NULL, 'Closer To Camera', 'Right To Camera', '1631854369.webm', NULL, 0, 10, NULL, NULL, NULL, '2021-09-17 04:52:49', '2021-09-17 04:52:49'),
(19, 'Doubles', 40, 'dfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'Further To Camera', 'Left To Camera', '1631860224.mp4', NULL, 10, 10, NULL, NULL, NULL, '2021-09-17 06:30:26', '2021-09-17 06:30:26'),
(20, 'Singles', 40, 'dfasdf', 'asdfasdf', NULL, NULL, 'Further To Camera', 'Left To Camera', '1631860704.mp4', NULL, 20, 10, NULL, NULL, NULL, '2021-09-17 06:38:26', '2021-09-17 06:38:26'),
(21, 'Singles', 42, 'N', 'ABcd Efgh', NULL, NULL, 'Closer To Camera', 'Left To Camera', NULL, 'https://www.youtube.com/c/SportzCraazy/featured', 6, 10, NULL, NULL, NULL, '2021-09-17 09:56:25', '2021-09-17 09:56:25'),
(22, 'Singles', 40, 'ccfdd', 'Radhe Govind S', NULL, NULL, 'Closer To Camera', 'Left To Camera', NULL, 'sdsds', NULL, 10, NULL, NULL, NULL, '2021-09-17 19:14:55', '2021-09-17 19:14:55'),
(23, 'Doubles', 15, 'new nwail', 'Radhe Govind S', 'shyam honda S', 'tyasi', 'Closer To Camera', 'Left To Camera', NULL, 'dd', 300, 10, NULL, NULL, NULL, '2021-09-19 05:39:47', '2021-09-19 05:39:47');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_08_20_162447_add_fb_id_column_in_users_table', 1),
(6, '2021_08_20_163829_add_google_id_column_in_users_table', 1),
(7, '2021_08_20_172132_add_sport_column_in_users_table', 1),
(9, '2021_08_24_102348_create_coaches_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `send_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(255) NOT NULL,
  `lable` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` float NOT NULL,
  `day` int(255) NOT NULL,
  `minutes` int(100) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paylink` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `lable`, `unit`, `title`, `offer`, `type`, `price`, `day`, `minutes`, `description`, `paylink`, `_token`, `created`) VALUES
(4, 'Starter', NULL, 'USD 24.99', 'One Time Plan', 'Monthly', 24.99, 1, 30, '<ul class=\"pricing-details\">\r\n  <li class=\"no\">FREE Minutes / Month</li>\r\n  <li><b>30</b> Minutes </li>\r\n  <li>Expert Match Analysis</li>\r\n  <li>Advance AI Data Mining</li>\r\n  <li>Smart High Performance Report</li>\r\n  <li>PRO Profiling</li>\r\n  <li>Appointment Scheduling</li>\r\n  <li>FREE Personal Dashboard</li>\r\n  <li class=\"no\">Exclusive Offers &amp; Rewards</li>\r\n</ul>', 'https://buy.stripe.com/test_bIY16UbhI9TmeFqdQQ', 'CYe3zJXm3nP48OH982OubRr7bIQ4cCcx4DIIB5Fm', '2021-09-10 18:26:33'),
(5, 'Pro', '/mo', 'USD 49.99', '10% Discount On Annual Plan', 'Monthly', 49.99, 30, 300, '<ul class=\"pricing-details\">\r\n  <li><b>30</b> FREE Minutes / Month</li>\r\n  <li><b>300</b> Minutes Per Month</li>\r\n  <li>Expert Match Analysis</li>\r\n  <li>Advance AI Data Mining</li>\r\n  <li>Smart High Performance Report</li>\r\n  <li>PRO Profiling</li>\r\n  <li>Appointment Scheduling</li>\r\n  <li>FREE Personal Dashboard</li>\r\n  <li>Exclusive Offers &amp; Rewards</li>\r\n</ul>', 'https://buy.stripe.com/test_00gaHu99Ac1ueFqbIP', 'QnasNx88fS5wdHU070N8ECBQ8m7WhJjavZE7ygVo', '2021-09-11 16:52:17'),
(6, 'Pro', '/mo', 'USD 79.99', '10% Discount On Annual Plan', 'Monthly', 79.99, 30, 600, '<ul class=\"pricing-details\">\r\n  <li><b>60</b> FREE Minutes / Month</li>\r\n  <li><b>600</b> Minutes Per Month</li>\r\n  <li>Expert Match Analysis</li>\r\n  <li>Advance AI Data Mining</li>\r\n  <li>Smart High Performance Report</li>\r\n  <li>PRO Profiling</li>\r\n  <li>Appointment Scheduling</li>\r\n  <li>FREE Personal Dashboard</li>\r\n  <li>Exclusive Offers &amp; Rewards</li>\r\n</ul>', 'https://buy.stripe.com/test_4gw16U4Tk0iM1SEaEM', 'QnasNx88fS5wdHU070N8ECBQ8m7WhJjavZE7ygVo', '2021-09-11 16:53:35'),
(7, 'Pro', '/mo', 'USD 199.99', '10% Discount On Annual Plan', 'Monthly', 199.99, 30, 1800, '<ul class=\"pricing-details\">\r\n  <li><b>90</b> FREE Minutes / Month</li>\r\n  <li><b>1800</b> Minutes Per Month</li>\r\n  <li>Expert Match Analysis</li>\r\n  <li>Advance AI Data Mining</li>\r\n  <li>Smart High Performance Report</li>\r\n  <li>PRO Profiling</li>\r\n  <li>Appointment Scheduling</li>\r\n  <li>FREE Personal Dashboard</li>\r\n  <li>Exclusive Offers &amp; Rewards</li>\r\n</ul>', 'https://buy.stripe.com/test_5kA2aY4Tk0iM40MaEN', 'QnasNx88fS5wdHU070N8ECBQ8m7WhJjavZE7ygVo', '2021-09-11 16:55:32'),
(8, 'Pro', '/year', 'USD 598.88', NULL, 'Yearly', 598.88, 365, 3600, '<ul class=\"pricing-details\">\r\n  <li><b>360</b> FREE Minutes / Month</li>\r\n  <li><b>3600</b> Minutes Per Month</li>\r\n  <li>Expert Match Analysis</li>\r\n  <li>Advance AI Data Mining</li>\r\n  <li>Smart High Performance Report</li>\r\n  <li>PRO Profiling</li>\r\n  <li>Appointment Scheduling</li>\r\n  <li>FREE Personal Dashboard</li>\r\n  <li>Exclusive Offers &amp; Rewards</li>\r\n</ul>', 'https://buy.stripe.com/test_6oE02Q2Lc0iM40M5ku', 'QnasNx88fS5wdHU070N8ECBQ8m7WhJjavZE7ygVo', '2021-09-11 16:56:51'),
(9, 'Pro', '/year', 'USD 959.88', NULL, 'Yearly', 959.88, 365, 7200, '<ul class=\"pricing-details\">\r\n  <li><b>720</b> FREE Minutes / Month</li>\r\n  <li><b>7200</b> Minutes Per Month</li>\r\n  <li>Expert Match Analysis</li>\r\n  <li>Advance AI Data Mining</li>\r\n  <li>Smart High Performance Report</li>\r\n  <li>PRO Profiling</li>\r\n  <li>Appointment Scheduling</li>\r\n  <li>FREE Personal Dashboard</li>\r\n  <li>Exclusive Offers &amp; Rewards</li>\r\n</ul>', 'https://buy.stripe.com/test_9AQ16UadE1mQfJu5kv', 'QnasNx88fS5wdHU070N8ECBQ8m7WhJjavZE7ygVo', '2021-09-11 16:57:57'),
(10, 'Pro', '/year', 'USD 2399.88', NULL, 'Yearly', 2399.88, 365, 21600, '<ul class=\"pricing-details\">\r\n  <li><b>1080</b> FREE Minutes / Month</li>\r\n  <li><b>21600</b> Minutes Per Month</li>\r\n  <li>Expert Match Analysis</li>\r\n  <li>Advance AI Data Mining</li>\r\n  <li>Smart High Performance Report</li>\r\n  <li>PRO Profiling</li>\r\n  <li>Appointment Scheduling</li>\r\n  <li>FREE Personal Dashboard</li>\r\n  <li>Exclusive Offers &amp; Rewards</li>\r\n</ul>', 'https://buy.stripe.com/test_fZeaHufxYd5yfJubIU', 'QnasNx88fS5wdHU070N8ECBQ8m7WhJjavZE7ygVo', '2021-09-11 16:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countryCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(24) DEFAULT NULL,
  `hand` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `play_style` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `isVerified` int(11) DEFAULT 0,
  `auto-renewal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(101) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `academy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscibe_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_id` int(255) DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minutes` int(255) DEFAULT NULL,
  `pay_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expired_date` int(255) DEFAULT 0,
  `one_time_plan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NO',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fb_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `status`, `email`, `proimage`, `countryCode`, `mobile`, `dob`, `age`, `hand`, `play_style`, `country`, `height`, `otp`, `isVerified`, `auto-renewal`, `sport`, `type`, `academy`, `email_verified_at`, `password`, `remember_token`, `subscibe_plan`, `plan_id`, `amount`, `minutes`, `pay_id`, `txn`, `pay_date`, `expired_date`, `one_time_plan`, `created_at`, `updated_at`, `fb_id`, `google_id`) VALUES
(11, 'Preeti Deshmukh', 0, 'pmnRERikam@gmail.com', '', '', '1234332345', NULL, NULL, NULL, NULL, '', NULL, 1707, 0, NULL, 'Table Tennis', 'athlete', NULL, NULL, 'c', NULL, '', NULL, '', 0, '', '', '', 0, 'NO', '2021-08-21 23:43:49', '2021-08-21 23:43:49', NULL, NULL),
(12, 'Preeti Deshmukh', 0, 'xfdfddfpmnikam@gmail.com', '', '', '2251211121212', NULL, NULL, NULL, NULL, '', NULL, 8811, 1, NULL, 'Table Tennis', 'athlete', NULL, NULL, '155544', NULL, '', NULL, '', 0, '', '', '', 0, 'NO', '2021-08-23 00:12:58', '2021-08-23 00:12:58', NULL, NULL),
(15, 'new nwail', 1, 'sandeep.blokes@gmail.com', '', '', '09165080880', NULL, NULL, NULL, NULL, '', NULL, 3267, 1, NULL, 'Tennis', 'athlete', NULL, NULL, '123456', NULL, 'Pro', 5, '49.99', 300, '', '', '2021-09-19 05:19:24', 30, 'NO', '2021-08-23 01:20:39', '2021-09-19 05:19:24', NULL, NULL),
(18, 'Vatan Kushwah', 1, 'vatan1790@gmail.com', '1631704216.png', '91', '6265069506', '1990-07-01', 30, 'Right Handed', 'Front foot', 'India', '5\'6', 6539, 1, NULL, 'Table Tennis', 'athlete', 'wqeeq', NULL, 'Vatan!@#45', NULL, 'platinum', NULL, '79.99', 0, 'ch_3JX666K6fnycmWAM0F74OiXQ', 'txn_3JX666K6fnycmWAM0Jn09twR', '2021-09-07 15:20:31', 30, 'NO', '2021-08-27 04:55:24', '2021-09-19 09:46:44', NULL, NULL),
(30, 'test', 1, 'work.developers2021@gmail.com', '1631618344.jpg', '91', '9685072227', NULL, NULL, NULL, NULL, NULL, NULL, 1419, 1, NULL, 'Table Tennis', 'athlete', NULL, NULL, 'test123', NULL, 'Starter', 4, '24.99', 0, NULL, NULL, '2021-09-17 16:51:50', 1, '4', '2021-09-11 09:50:44', '2021-09-17 16:51:50', NULL, NULL),
(40, 'shelu thakur', 1, 'thakur.shelu@gmail.com', '1631620440.jpg', '91', '9696969696', '1992-07-03', 30, NULL, NULL, 'India', '5\'5', 3689, 1, 'yes', 'Table Tennis', 'coach', 'club', NULL, 'test123', NULL, 'Starter', 4, '24.99', 30, NULL, NULL, '2021-09-17 17:16:37', 1, '4', '2021-09-14 11:49:36', '2021-09-17 17:16:37', NULL, NULL),
(41, 'Vatan Coach', 1, 'vatan.cyanoitservices@gmail.com', '1631853958.png', '91', '7415891530', '1994-12-10', 26, NULL, NULL, 'India', '5\'7', 3272, 1, NULL, 'Table Tennis', 'coach', 'qwerty', NULL, '123456', NULL, 'Starter', 4, '24.99', 0, NULL, NULL, '2021-09-16 13:59:08', 1, 'NO', '2021-09-14 16:12:26', '2021-09-17 04:45:58', NULL, NULL),
(42, 'N', 1, 'athlos.cloud@gmail.com', '1631725698.png', '91', '9818280662', '1978-09-22', 43, 'Left Handed', 'Attack', 'San Marino', '5\'1', 4473, 1, NULL, 'Table Tennis', 'athlete', NULL, NULL, 'Abc12345', NULL, 'Pro', 5, '49.99', 0, NULL, NULL, '2021-09-17 09:55:10', 30, 'NO', '2021-09-15 08:35:16', '2021-09-19 09:47:35', NULL, NULL),
(43, 'Kunal Coach', 1, 'kunal@ptta.in', NULL, '91', '9560987900', NULL, NULL, NULL, NULL, NULL, NULL, 5659, 1, NULL, 'Table Tennis', 'coach', NULL, NULL, 'Ptta12345', NULL, 'Starter', 4, '24.99', 0, NULL, NULL, '2021-09-16 04:53:14', 1, 'NO', '2021-09-16 04:19:16', '2021-09-16 04:53:14', NULL, NULL),
(44, 'Praveen Singh', 1, 'praveen.singh926@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'coach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'NO', '2021-09-19 05:43:48', '2021-09-19 06:13:11', NULL, '115439382493011521961'),
(45, 'TestCoach', 1, 'nish@athlos.cloud', NULL, '91', '9650044494', '1978-01-01', 35, NULL, NULL, 'Singapore', '5\'0', 2125, 1, NULL, 'Table Tennis', 'coach', 'test', NULL, 'Abcd12345', NULL, 'Starter', 4, '24.99', 30, NULL, NULL, '2021-09-19 09:31:50', 1, '4', '2021-09-19 09:24:39', '2021-09-19 09:31:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userstemp`
--

CREATE TABLE `userstemp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `isVerified` int(11) DEFAULT 0,
  `sport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userstemp`
--

INSERT INTO `userstemp` (`id`, `name`, `status`, `email`, `mobile`, `otp`, `isVerified`, `sport`, `password`) VALUES
(1, 'praveen singh', 1, 'praveen.singh926@gmail.com', '8085210252', 8475, 1, 'table', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coaches_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `coaches_email_unique` (`email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- Indexes for table `userstemp`
--
ALTER TABLE `userstemp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userstemp_email_unique` (`email`),
  ADD UNIQUE KEY `userstemp_mobile_unique` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coaches`
--
ALTER TABLE `coaches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `userstemp`
--
ALTER TABLE `userstemp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
