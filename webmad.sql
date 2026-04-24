-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2025 pada 16.52
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webmad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `photo`) VALUES
(5, '2c65e03723e76559d8a5464fb25a69c5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `banners`
--

INSERT INTO `banners` (`id`, `title`, `text`, `photo`) VALUES
(5, 'MTs Sunan Kalijaga', 'Merupakah sebuah madrasah yang bermutu, mengajarkan Ahlussunnah Wal Jamaah', 'f00c0131453e8ae27ed9824db5cf3f3f.jpg'),
(6, 'mencoba kembali banner', 'deskripsi mencoba banner lagi', 'f1075e980268d42aa6964f5c16912466.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bg_majors`
--

CREATE TABLE `bg_majors` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `bg_majors`
--

INSERT INTO `bg_majors` (`id`, `photo`) VALUES
(1, 'fc5a800ecfde65c05574f2f394bba4af.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `photo`) VALUES
(3, 'Lab Komputer', 'lab-komputer-20220825185508.jpg'),
(4, 'Perpustakaan', 'perpustakaan-20220825190131.png'),
(5, 'Kantin', 'kantin-20220825190142.png'),
(6, 'Lapangan', 'lapangan-20220825190202.png'),
(9, 'Musholla', 'musholla-20200430120051.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(225) NOT NULL,
  `id_guru` int(225) NOT NULL,
  `Nama_g` varchar(255) NOT NULL,
  `Mapel_g` varchar(255) NOT NULL,
  `photo_g` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `id_guru`, `Nama_g`, `Mapel_g`, `photo_g`) VALUES
(1, 2, 'Fajri Muhammad Iqbal, S.Kom.', 'Informatika', '1742221736_IMG_5976.jpg'),
(6, 1, 'Khamid Muslim, S.Pd.', 'Sejarah Kebudayaan Islam', '1742221416_IMG_5978.jpg'),
(7, 3, 'Nanang Khoiruz Zaman', 'Kepala TU', '1742222148_IMG_6164.jpg'),
(8, 4, 'Muhammad Ali Lutfi, S.Pd.', 'Pendidikan Jasmani dan Olahraga', '1742222239_IMG_6190.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identity`
--

CREATE TABLE `identity` (
  `id` int(11) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `identity`
--

INSERT INTO `identity` (`id`, `meta_title`, `meta_description`, `meta_keyword`, `photo`) VALUES
(1, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed nisl ut metus molestie dignissim eu vitae nisi. Phasellus molestie ut quam eu accumsan. Mauris sit amet orci a ante suscipit pharetra. Integer sodales, augue vel volutpat faucibus, nunc lectus feugiat mi, in vestibulum ex arcu commodo purus. Donec in sagittis enim, ac dignissim neque. Aenean nec quam a enim volutpat tempus. Cras eget ex lacus.', 'Madrasah Tsanawiyah Sunan Kalijaga', '18efe02e7fcc5c6a4ee8c619e501a7d9.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `majors`
--

CREATE TABLE `majors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `is_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `user_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 2, 'Pengaturan Web', '', 'fas fa-fw fa-cog', 'Y'),
(2, 2, 'Agenda', 'jadwal', 'fas fa-fw fa-users', 'Y'),
(3, 2, 'Manajemen Media', '', 'fas fa-fw fa-school', 'Y'),
(4, 2, 'Struktur Organisasi', 'struktur', 'fas fa-fw fa-sitemap', 'Y'),
(5, 1, 'Manajemen User', 'user', 'fas fa-fw fa-user', 'Y'),
(6, 2, 'Profile', '', 'fas fa-fw fa-home', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opening`
--

CREATE TABLE `opening` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `opening`
--

INSERT INTO `opening` (`id`, `content`, `photo`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed nisl ut metus molestie dignissim eu vitae nisi. Phasellus molestie ut quam eu accumsan. Mauris sit amet orci a ante suscipit pharetra. Integer sodales, augue vel volutpat faucibus, nunc lectus feugiat mi, in vestibulum ex arcu commodo purus. Donec in sagittis enim, ac dignissim neque. Aenean nec quam a enim volutpat tempus. Cras eget ex lacus. Mauris non dolor laoreet, efficitur ligula eget, suscipit ipsum. Praesent porttitor sollicitudin magna maximus pharetra. Nullam pretium vestibulum augue, sed viverra velit gravida vel.', 'e03d8b1f9166e276217648d9632aa2f7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `is_active` char(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `seo_title`, `content`, `photo`, `is_active`, `date`) VALUES
(2, 'Sosialiasi Jasa Raharja', 'sosialiasi-jasa-raharja', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed nisl ut metus molestie dignissim eu vitae nisi. Phasellus molestie ut quam eu accumsan. Mauris sit amet orci a ante suscipit pharetra. Integer sodales, augue vel volutpat faucibus, nunc lectus feugiat mi, in vestibulum ex arcu commodo purus. Donec in sagittis enim, ac dignissim neque. Aenean nec quam a enim volutpat tempus. Cras eget ex lacus. Mauris non dolor laoreet, efficitur ligula eget, suscipit ipsum. Praesent porttitor sollicitudin magna maximus pharetra. Nullam pretium vestibulum augue, sed viverra velit gravida vel. Nunc feugiat arcu vel urna lobortis mollis. Ut arcu augue, ullamcorper ut magna a, elementum aliquam nunc. Pellentesque sapien nibh, suscipit volutpat sem ut, vulputate efficitur arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean aliquet sagittis congue. Maecenas felis sem, interdum vel consectetur quis, vulputate in augue.</p>\r\n\r\n<p>Vestibulum massa dolor, sollicitudin eget nulla iaculis, tincidunt luctus lacus. Suspendisse nisi ligula, imperdiet eget tempor et, faucibus et orci. Pellentesque semper viverra metus, eget fermentum felis ornare at. In semper lacinia elit, eget consequat dolor blandit vitae. Aliquam erat volutpat. Aliquam et dictum erat. Etiam purus ipsum, convallis sit amet lorem eget, iaculis rhoncus arcu. Aliquam id fringilla magna, a euismod justo. Nam non urna feugiat ligula finibus blandit. Cras libero sapien, bibendum facilisis justo id, ultricies ullamcorper nisi.</p>\r\n\r\n<p>Maecenas condimentum aliquet pulvinar. Suspendisse quis malesuada nulla, eget eleifend tellus. Suspendisse pharetra enim in ante fermentum consectetur. Vivamus viverra, felis vitae condimentum tempus, libero ex consectetur dui, vel interdum nibh turpis in lectus. Suspendisse potenti. Nam sagittis, ligula id tempor tristique, enim eros facilisis purus, vitae elementum risus lectus sit amet ipsum. In nec sollicitudin massa, ut cursus purus. Proin eu tempor magna, non vestibulum diam.</p>', '-20220825184450.jpg', 'Y', '2025-02-10'),
(3, 'Upacara Memeringati Hari Pramuka', 'upacara-memeringati-hari-pramuka', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed nisl ut metus molestie dignissim eu vitae nisi. Phasellus molestie ut quam eu accumsan. Mauris sit amet orci a ante suscipit pharetra. Integer sodales, augue vel volutpat faucibus, nunc lectus feugiat mi, in vestibulum ex arcu commodo purus. Donec in sagittis enim, ac dignissim neque. Aenean nec quam a enim volutpat tempus. Cras eget ex lacus. Mauris non dolor laoreet, efficitur ligula eget, suscipit ipsum. Praesent porttitor sollicitudin magna maximus pharetra. Nullam pretium vestibulum augue, sed viverra velit gravida vel. Nunc feugiat arcu vel urna lobortis mollis. Ut arcu augue, ullamcorper ut magna a, elementum aliquam nunc. Pellentesque sapien nibh, suscipit volutpat sem ut, vulputate efficitur arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean aliquet sagittis congue. Maecenas felis sem, interdum vel consectetur quis, vulputate in augue.</p>\r\n\r\n<p>Vestibulum massa dolor, sollicitudin eget nulla iaculis, tincidunt luctus lacus. Suspendisse nisi ligula, imperdiet eget tempor et, faucibus et orci. Pellentesque semper viverra metus, eget fermentum felis ornare at. In semper lacinia elit, eget consequat dolor blandit vitae. Aliquam erat volutpat. Aliquam et dictum erat. Etiam purus ipsum, convallis sit amet lorem eget, iaculis rhoncus arcu. Aliquam id fringilla magna, a euismod justo. Nam non urna feugiat ligula finibus blandit. Cras libero sapien, bibendum facilisis justo id, ultricies ullamcorper nisi.</p>\r\n\r\n<p>Maecenas condimentum aliquet pulvinar. Suspendisse quis malesuada nulla, eget eleifend tellus. Suspendisse pharetra enim in ante fermentum consectetur. Vivamus viverra, felis vitae condimentum tempus, libero ex consectetur dui, vel interdum nibh turpis in lectus. Suspendisse potenti. Nam sagittis, ligula id tempor tristique, enim eros facilisis purus, vitae elementum risus lectus sit amet ipsum. In nec sollicitudin massa, ut cursus purus. Proin eu tempor magna, non vestibulum diam.</p>', '-20220825184340.jpg', 'Y', '2022-08-25'),
(4, 'Bimbingan Teknis Implementasi Kurikulum Merdeka', 'bimbingan-teknis-implementasi-kurikulum-merdeka', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed nisl ut metus molestie dignissim eu vitae nisi. Phasellus molestie ut quam eu accumsan. Mauris sit amet orci a ante suscipit pharetra. Integer sodales, augue vel volutpat faucibus, nunc lectus feugiat mi, in vestibulum ex arcu commodo purus. Donec in sagittis enim, ac dignissim neque. Aenean nec quam a enim volutpat tempus. Cras eget ex lacus. Mauris non dolor laoreet, efficitur ligula eget, suscipit ipsum. Praesent porttitor sollicitudin magna maximus pharetra. Nullam pretium vestibulum augue, sed viverra velit gravida vel. Nunc feugiat arcu vel urna lobortis mollis. Ut arcu augue, ullamcorper ut magna a, elementum aliquam nunc. Pellentesque sapien nibh, suscipit volutpat sem ut, vulputate efficitur arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean aliquet sagittis congue. Maecenas felis sem, interdum vel consectetur quis, vulputate in augue.</p>\r\n\r\n<p>Vestibulum massa dolor, sollicitudin eget nulla iaculis, tincidunt luctus lacus. Suspendisse nisi ligula, imperdiet eget tempor et, faucibus et orci. Pellentesque semper viverra metus, eget fermentum felis ornare at. In semper lacinia elit, eget consequat dolor blandit vitae. Aliquam erat volutpat. Aliquam et dictum erat. Etiam purus ipsum, convallis sit amet lorem eget, iaculis rhoncus arcu. Aliquam id fringilla magna, a euismod justo. Nam non urna feugiat ligula finibus blandit. Cras libero sapien, bibendum facilisis justo id, ultricies ullamcorper nisi.</p>\r\n\r\n<p>Maecenas condimentum aliquet pulvinar. Suspendisse quis malesuada nulla, eget eleifend tellus. Suspendisse pharetra enim in ante fermentum consectetur. Vivamus viverra, felis vitae condimentum tempus, libero ex consectetur dui, vel interdum nibh turpis in lectus. Suspendisse potenti. Nam sagittis, ligula id tempor tristique, enim eros facilisis purus, vitae elementum risus lectus sit amet ipsum. In nec sollicitudin massa, ut cursus purus. Proin eu tempor magna, non vestibulum diam.</p>', '-20220825184137.jpg', 'Y', '2022-08-25'),
(5, 'Latihan Dasar Kepemimpinan', 'latihan-dasar-kepemimpinan', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed nisl ut metus molestie dignissim eu vitae nisi. Phasellus molestie ut quam eu accumsan. Mauris sit amet orci a ante suscipit pharetra. Integer sodales, augue vel volutpat faucibus, nunc lectus feugiat mi, in vestibulum ex arcu commodo purus. Donec in sagittis enim, ac dignissim neque. Aenean nec quam a enim volutpat tempus. Cras eget ex lacus. Mauris non dolor laoreet, efficitur ligula eget, suscipit ipsum. Praesent porttitor sollicitudin magna maximus pharetra. Nullam pretium vestibulum augue, sed viverra velit gravida vel. Nunc feugiat arcu vel urna lobortis mollis. Ut arcu augue, ullamcorper ut magna a, elementum aliquam nunc. Pellentesque sapien nibh, suscipit volutpat sem ut, vulputate efficitur arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean aliquet sagittis congue. Maecenas felis sem, interdum vel consectetur quis, vulputate in augue.</p>\r\n\r\n<p>Vestibulum massa dolor, sollicitudin eget nulla iaculis, tincidunt luctus lacus. Suspendisse nisi ligula, imperdiet eget tempor et, faucibus et orci. Pellentesque semper viverra metus, eget fermentum felis ornare at. In semper lacinia elit, eget consequat dolor blandit vitae. Aliquam erat volutpat. Aliquam et dictum erat. Etiam purus ipsum, convallis sit amet lorem eget, iaculis rhoncus arcu. Aliquam id fringilla magna, a euismod justo. Nam non urna feugiat ligula finibus blandit. Cras libero sapien, bibendum facilisis justo id, ultricies ullamcorper nisi.</p>\r\n\r\n<p>Maecenas condimentum aliquet pulvinar. Suspendisse quis malesuada nulla, eget eleifend tellus. Suspendisse pharetra enim in ante fermentum consectetur. Vivamus viverra, felis vitae condimentum tempus, libero ex consectetur dui, vel interdum nibh turpis in lectus. Suspendisse potenti. Nam sagittis, ligula id tempor tristique, enim eros facilisis purus, vitae elementum risus lectus sit amet ipsum. In nec sollicitudin massa, ut cursus purus. Proin eu tempor magna, non vestibulum diam.</p>', '-20220825184811.jpg', 'Y', '2022-08-25'),
(6, 'Upacara Memeringati Hari Kemerdekaan', 'upacara-memeringati-hari-kemerdekaan', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed nisl ut metus molestie dignissim eu vitae nisi. Phasellus molestie ut quam eu accumsan. Mauris sit amet orci a ante suscipit pharetra. Integer sodales, augue vel volutpat faucibus, nunc lectus feugiat mi, in vestibulum ex arcu commodo purus. Donec in sagittis enim, ac dignissim neque. Aenean nec quam a enim volutpat tempus. Cras eget ex lacus. Mauris non dolor laoreet, efficitur ligula eget, suscipit ipsum. Praesent porttitor sollicitudin magna maximus pharetra. Nullam pretium vestibulum augue, sed viverra velit gravida vel. Nunc feugiat arcu vel urna lobortis mollis. Ut arcu augue, ullamcorper ut magna a, elementum aliquam nunc. Pellentesque sapien nibh, suscipit volutpat sem ut, vulputate efficitur arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean aliquet sagittis congue. Maecenas felis sem, interdum vel consectetur quis, vulputate in augue.</p>\r\n\r\n<p>Vestibulum massa dolor, sollicitudin eget nulla iaculis, tincidunt luctus lacus. Suspendisse nisi ligula, imperdiet eget tempor et, faucibus et orci. Pellentesque semper viverra metus, eget fermentum felis ornare at. In semper lacinia elit, eget consequat dolor blandit vitae. Aliquam erat volutpat. Aliquam et dictum erat. Etiam purus ipsum, convallis sit amet lorem eget, iaculis rhoncus arcu. Aliquam id fringilla magna, a euismod justo. Nam non urna feugiat ligula finibus blandit. Cras libero sapien, bibendum facilisis justo id, ultricies ullamcorper nisi.</p>\r\n\r\n<p>Maecenas condimentum aliquet pulvinar. Suspendisse quis malesuada nulla, eget eleifend tellus. Suspendisse pharetra enim in ante fermentum consectetur. Vivamus viverra, felis vitae condimentum tempus, libero ex consectetur dui, vel interdum nibh turpis in lectus. Suspendisse potenti. Nam sagittis, ligula id tempor tristique, enim eros facilisis purus, vitae elementum risus lectus sit amet ipsum. In nec sollicitudin massa, ut cursus purus. Proin eu tempor magna, non vestibulum diam.</p>', '-20220825184721.jpg', 'Y', '2022-08-25'),
(7, 'Upacara Ulang Janji Pramuka', 'upacara-ulang-janji-pramuka', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed nisl ut metus molestie dignissim eu vitae nisi. Phasellus molestie ut quam eu accumsan. Mauris sit amet orci a ante suscipit pharetra. Integer sodales, augue vel volutpat faucibus, nunc lectus feugiat mi, in vestibulum ex arcu commodo purus. Donec in sagittis enim, ac dignissim neque. Aenean nec quam a enim volutpat tempus. Cras eget ex lacus. Mauris non dolor laoreet, efficitur ligula eget, suscipit ipsum. Praesent porttitor sollicitudin magna maximus pharetra. Nullam pretium vestibulum augue, sed viverra velit gravida vel. Nunc feugiat arcu vel urna lobortis mollis. Ut arcu augue, ullamcorper ut magna a, elementum aliquam nunc. Pellentesque sapien nibh, suscipit volutpat sem ut, vulputate efficitur arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean aliquet sagittis congue. Maecenas felis sem, interdum vel consectetur quis, vulputate in augue.</p>\r\n\r\n<p>Vestibulum massa dolor, sollicitudin eget nulla iaculis, tincidunt luctus lacus. Suspendisse nisi ligula, imperdiet eget tempor et, faucibus et orci. Pellentesque semper viverra metus, eget fermentum felis ornare at. In semper lacinia elit, eget consequat dolor blandit vitae. Aliquam erat volutpat. Aliquam et dictum erat. Etiam purus ipsum, convallis sit amet lorem eget, iaculis rhoncus arcu. Aliquam id fringilla magna, a euismod justo. Nam non urna feugiat ligula finibus blandit. Cras libero sapien, bibendum facilisis justo id, ultricies ullamcorper nisi.</p>\r\n\r\n<p>Maecenas condimentum aliquet pulvinar. Suspendisse quis malesuada nulla, eget eleifend tellus. Suspendisse pharetra enim in ante fermentum consectetur. Vivamus viverra, felis vitae condimentum tempus, libero ex consectetur dui, vel interdum nibh turpis in lectus. Suspendisse potenti. Nam sagittis, ligula id tempor tristique, enim eros facilisis purus, vitae elementum risus lectus sit amet ipsum. In nec sollicitudin massa, ut cursus purus. Proin eu tempor magna, non vestibulum diam.</p>', '-20220825183746.jpg', 'Y', '2022-08-25'),
(8, 'Bakti Sosial Peserta Didik ', 'bakti-sosial-peserta-didik', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed nisl ut metus molestie dignissim eu vitae nisi. Phasellus molestie ut quam eu accumsan. Mauris sit amet orci a ante suscipit pharetra. Integer sodales, augue vel volutpat faucibus, nunc lectus feugiat mi, in vestibulum ex arcu commodo purus. Donec in sagittis enim, ac dignissim neque. Aenean nec quam a enim volutpat tempus. Cras eget ex lacus. Mauris non dolor laoreet, efficitur ligula eget, suscipit ipsum. Praesent porttitor sollicitudin magna maximus pharetra. Nullam pretium vestibulum augue, sed viverra velit gravida vel. Nunc feugiat arcu vel urna lobortis mollis. Ut arcu augue, ullamcorper ut magna a, elementum aliquam nunc. Pellentesque sapien nibh, suscipit volutpat sem ut, vulputate efficitur arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean aliquet sagittis congue. Maecenas felis sem, interdum vel consectetur quis, vulputate in augue.</p>\r\n\r\n<p>Vestibulum massa dolor, sollicitudin eget nulla iaculis, tincidunt luctus lacus. Suspendisse nisi ligula, imperdiet eget tempor et, faucibus et orci. Pellentesque semper viverra metus, eget fermentum felis ornare at. In semper lacinia elit, eget consequat dolor blandit vitae. Aliquam erat volutpat. Aliquam et dictum erat. Etiam purus ipsum, convallis sit amet lorem eget, iaculis rhoncus arcu. Aliquam id fringilla magna, a euismod justo. Nam non urna feugiat ligula finibus blandit. Cras libero sapien, bibendum facilisis justo id, ultricies ullamcorper nisi.</p>\r\n\r\n<p>Maecenas condimentum aliquet pulvinar. Suspendisse quis malesuada nulla, eget eleifend tellus. Suspendisse pharetra enim in ante fermentum consectetur. Vivamus viverra, felis vitae condimentum tempus, libero ex consectetur dui, vel interdum nibh turpis in lectus. Suspendisse potenti. Nam sagittis, ligula id tempor tristique, enim eros facilisis purus, vitae elementum risus lectus sit amet ipsum. In nec sollicitudin massa, ut cursus purus. Proin eu tempor magna, non vestibulum diam.</p>', '-20220825183547.jpg', 'Y', '2022-08-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `structure`
--

CREATE TABLE `structure` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `structure`
--

INSERT INTO `structure` (`id`, `photo`) VALUES
(1, 'c34d2f264a0bc5bf27b2f9e79efaa92e.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `submenus`
--

CREATE TABLE `submenus` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_title` varchar(50) NOT NULL,
  `sub_url` varchar(100) NOT NULL,
  `is_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `submenus`
--

INSERT INTO `submenus` (`id`, `menu_id`, `sub_title`, `sub_url`, `is_active`) VALUES
(1, 1, 'Identitas Web', 'identitas', 'Y'),
(2, 1, 'Sambutan', 'sambutan', 'Y'),
(3, 3, 'Banner', 'banner', 'Y'),
(4, 3, 'Fasilitas', 'fasilitas', 'Y'),
(5, 3, 'Berita', 'berita', 'Y'),
(6, 3, 'Background Jurusan', 'background', 'Y'),
(7, 1, 'Daftar Guru', 'dataguru', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$QeMfIwHMoMVNBhprerEc0O.xJoSRdrVHNqklmk8P.7IJDW8Ev/xFy', 'admin@mail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1742221247, 1, 'Admin', '.', NULL, '081222332442');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(40, 1, 1),
(41, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bg_majors`
--
ALTER TABLE `bg_majors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_guru` (`id_guru`);

--
-- Indeks untuk tabel `identity`
--
ALTER TABLE `identity`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `opening`
--
ALTER TABLE `opening`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `bg_majors`
--
ALTER TABLE `bg_majors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `identity`
--
ALTER TABLE `identity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `majors`
--
ALTER TABLE `majors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `opening`
--
ALTER TABLE `opening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `structure`
--
ALTER TABLE `structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `submenus`
--
ALTER TABLE `submenus`
  ADD CONSTRAINT `submenus_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`);

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
