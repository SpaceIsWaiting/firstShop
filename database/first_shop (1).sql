-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 11 2022 г., 08:07
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `first_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `code`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Лекарства', 'pharmacy', ' популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageM', 'pills-hands2-min.png', NULL, NULL, NULL),
(2, 'Бады', 'bads', 'рстки типа Aldus Pa', 'kisspng-ayurveda-medicine-ayurvedic-home-remedies-hospital-tl-5b1608513dc0b7.435433191528170577253.png', NULL, NULL, NULL),
(3, 'Первая помощь', 'firstAid', 'па Aldus PageM', 'kisspng-first-aid-supplies-first-aid-kits-symbol-sign-clip-cross-5abb3ff5b10df2.9785469315222210457252.png', NULL, NULL, NULL),
(4, 'Гигиена', 'gigiena', 'рограммы электронной вёрстки типа A', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_04_24_212454_create_products_table', 1),
(5, '2022_05_01_231350_create_categories_table', 1),
(6, '2022_05_02_225711_create_product_images_table', 1),
(7, '2022_05_03_005607_add_foreign_key_to_products_table', 1),
(8, '2022_05_08_153707_create_orders_table', 1),
(11, '2022_05_08_154313_create_order_product_table', 1),
(13, '2022_05_09_063009_update_to_order_product_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `status`, `name`, `phone`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, NULL, '2022-05-08 15:22:36', '2022-05-08 15:22:36'),
(2, 0, NULL, NULL, '2022-05-08 18:34:24', '2022-05-08 18:34:24'),
(3, 0, NULL, NULL, '2022-05-08 18:39:48', '2022-05-08 18:39:48'),
(4, 0, NULL, NULL, '2022-05-08 18:39:56', '2022-05-08 18:39:56'),
(5, 0, NULL, NULL, '2022-05-08 18:40:15', '2022-05-08 18:40:15'),
(6, 0, NULL, NULL, '2022-05-08 18:40:28', '2022-05-08 18:40:28'),
(7, 0, NULL, NULL, '2022-05-08 18:40:44', '2022-05-08 18:40:44'),
(8, 0, NULL, NULL, '2022-05-08 18:43:24', '2022-05-08 18:43:24'),
(9, 0, NULL, NULL, '2022-05-08 18:51:30', '2022-05-08 18:51:30'),
(10, 0, NULL, NULL, '2022-05-10 06:51:00', '2022-05-10 06:51:00'),
(11, 0, NULL, NULL, '2022-05-10 11:59:50', '2022-05-10 11:59:50');

-- --------------------------------------------------------

--
-- Структура таблицы `order_product`
--

CREATE TABLE `order_product` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `count` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `count`, `created_at`, `updated_at`) VALUES
(1, 10, 6, 1, '2022-05-10 06:51:00', '2022-05-10 06:51:00'),
(2, 10, 8, 1, '2022-05-10 08:11:15', '2022-05-10 08:11:15'),
(3, 10, 9, 1, '2022-05-10 08:25:32', '2022-05-10 08:25:32'),
(4, 11, 5, 1, '2022-05-10 11:59:50', '2022-05-10 11:59:50'),
(5, 11, 6, 3, '2022-05-10 12:00:05', '2022-05-10 12:05:56');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `in_stock` tinyint UNSIGNED DEFAULT '1',
  `price` int NOT NULL DEFAULT '0',
  `new_price` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `code`, `description`, `image`, `in_stock`, `price`, `new_price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Product 19', '30', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', NULL, 0, 354, NULL, NULL, NULL, NULL),
(2, 3, 'Product 1', '96', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', NULL, 0, 1349, NULL, NULL, NULL, NULL),
(3, 3, 'Product 2', '61', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', NULL, 0, 683, NULL, NULL, NULL, NULL),
(4, 4, 'Product 3', '77', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', NULL, 0, 1420, 968, NULL, NULL, NULL),
(5, 3, '5-HTP', '39', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', '230_230_1_e225c3e197dee5e68b265abce3d2d64e.webp', 1, 271, 100, NULL, NULL, NULL),
(6, 3, 'Рыбий жир', '33', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', '230_230_1 (1).webp', 1, 1215, 219, NULL, NULL, NULL),
(7, 2, 'Фосфолюкс', '81', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', '230_230_1_19f8825e001bb5c923f8568d41418d6f.webp', 1, 1317, 503, NULL, NULL, NULL),
(8, 1, 'Масло', '51', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', NULL, 1, 1166, 166, NULL, NULL, NULL),
(9, 1, 'Витамин с', '18', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', '230_230_1.webp', 1, 1108, 118, NULL, NULL, NULL),
(10, 2, 'Product 9', '24', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', NULL, 0, 592, 376, NULL, NULL, NULL),
(11, 1, 'Product 10', '55', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', NULL, 0, 889, 718, NULL, NULL, NULL),
(12, 1, 'Product 11', '40', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', NULL, 0, 740, 174, NULL, NULL, NULL),
(13, 2, 'Product 12', '93', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', NULL, 0, 551, 345, NULL, NULL, NULL),
(14, 1, 'Пенталгин', '87', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', '230_230_1_0f3ea8d0999e760dad1a0ec054d9a707.webp', 1, 860, 500, NULL, NULL, NULL),
(15, 4, 'Product 14', '27', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', NULL, 0, 188, 50, NULL, NULL, NULL),
(16, 2, 'Product 15', '63', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', NULL, 0, 625, 346, NULL, NULL, NULL),
(17, 3, 'Аквалор', '25', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', '230_230_1_70c264f98118e875c9d60a797b26a016.webp', 1, 824, 264, NULL, NULL, NULL),
(18, 4, 'Тест', '29', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', '230_230_1_e94bee1ec7c21d7f78c5fb76d98006e1.webp', 1, 865, 300, NULL, NULL, NULL),
(19, 4, 'Product 18', '83', 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.', NULL, 0, 1305, 19, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_images`
--

INSERT INTO `product_images` (`id`, `img`, `product_id`, `created_at`, `updated_at`) VALUES
(2, '450_450_2_7a5f7f01c2de19b86049288cd021d369.webp', 14, NULL, NULL),
(3, '450_450_4_7a5f7f01c2de19b86049288cd021d369.webp', 14, NULL, NULL),
(4, '450_450_8_7a5f7f01c2de19b86049288cd021d369.webp', 14, NULL, NULL),
(5, '450_450_4_7a5f7f01c2de19b86049288cd021d369.webp', 7, NULL, NULL),
(6, '450_450_3_19f8825e001bb5c923f8568d41418d6f.webp', 7, NULL, NULL),
(7, '450_450_2_19f8825e001bb5c923f8568d41418d6f.webp', 7, NULL, NULL),
(8, 'medium_e6b4b1d6-c906-4e89-907e-63d5deea5642.webp', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Индексы таблицы `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
