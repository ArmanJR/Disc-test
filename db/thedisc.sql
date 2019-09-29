-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 07:33 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thedisc`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `section` int(10) NOT NULL,
  `attr` text COLLATE utf8_persian_ci NOT NULL,
  `best` varchar(5) COLLATE utf8_persian_ci NOT NULL,
  `worst` varchar(5) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `section`, `attr`, `best`, `worst`) VALUES
(1, 1, 'معتمد، علاقه مند', 'I', 'I'),
(2, 1, 'اهل مدارا، محترم', 'C', 'C'),
(3, 1, 'شجاع، ماجراجو', 'N', 'D'),
(4, 1, 'سازگار، پیرو', 'S', 'S'),
(5, 2, 'بامحبت، مهربان', 'I', 'N'),
(6, 2, 'ملایم، سازگار', 'N', 'C'),
(7, 2, 'مصمم، نتیجه گرا', 'D', 'D'),
(8, 2, 'راضی، خشنود', 'S', 'N'),
(9, 3, 'نوآور، آرمانی', 'D', 'D'),
(10, 3, 'محافظه کار، محتاط', 'C', 'N'),
(11, 3, 'اجتماعی، خوش مشرب', 'N', 'I'),
(12, 3, 'اصلاح طلب، اهل مذاکره', 'S', 'S'),
(13, 4, 'بی پروا، مستقل', 'D', 'D'),
(14, 4, 'محافظه کار، محتاط', 'C', 'C'),
(15, 4, 'بی خیال، سر به هوا', 'I', 'I'),
(16, 4, 'مهربان، صمیمی', 'S', 'N'),
(17, 5, 'دقیق، صریح', 'N', 'C'),
(18, 5, 'متمرکز، هدفمند', 'D', 'N'),
(19, 5, 'علاقه مند به کار گروهی، تابع', 'N', 'S'),
(20, 5, 'مشوق دیگران، انگیزاننده', 'I', 'I'),
(21, 6, 'باوجدان، برنامه ریز', 'C', 'N'),
(22, 6, 'ترقی خواه', 'D', 'D'),
(23, 6, 'متهور، بی پروا', 'I', 'I'),
(24, 6, 'قابل اعتماد، شنونده خوب', 'S', 'S'),
(25, 7, 'حساس، ناامید', 'C', 'C'),
(26, 7, 'رد هرگونه مخالفت، حق بجانب', 'D', 'D'),
(27, 7, 'از خود راضی، مخفی کردن احساسات', 'S', 'S'),
(28, 7, 'پیش بردن حرف خود، خواهان دیده شدن', 'N', 'I'),
(29, 8, 'قوانین خسته تان میکنند، سلحشور', 'I', 'I'),
(30, 8, 'قوانین را به چالش میکشید، شجاع', 'N', 'D'),
(31, 8, 'قوانین حس امنیت میدهد، قانونمند', 'S', 'S'),
(32, 8, 'قواین حس عدالت میدهند، عادل', 'C', 'N'),
(33, 9, 'به دنبال تعادل، آرام', 'S', 'S'),
(34, 9, 'پرحرف، جذاب', 'I', 'N'),
(35, 9, 'منظم، قانونمند', 'N', 'C'),
(36, 9, 'بی پروا، با روحیه بالا', 'D', 'D'),
(37, 10, 'پاداش درمقابل دستاورد را دوست دارید', 'D', 'D'),
(38, 10, 'از گردهمایی اجتماعی لذت میبرید', 'I', 'N'),
(39, 10, 'ادامه تحصیل را مهم میدانید', 'N', 'C'),
(40, 10, 'از در معرض خطر بودن بیزارید', 'S', 'S'),
(41, 11, 'نظام مند، مدیریت زمان خوب', 'C', 'N'),
(42, 11, 'مضطرب، شتاب زده', 'D', 'D'),
(43, 11, 'قابل اتکا، با پشتکار', 'S', 'S'),
(44, 11, 'احساسی، عجول', 'I', 'I'),
(45, 12, 'محتاط، محاسبه گر', 'C', 'N'),
(46, 12, 'ثابت قدم، دقیق در جزییات', 'N', 'S'),
(47, 12, 'اجتماعی، مشتاق', 'N', 'I'),
(48, 12, 'مسئولیت پذیر، صریح', 'D', 'D'),
(49, 13, 'درگیرنکردن احساسات، محتاط', 'N', 'C'),
(50, 13, 'غیرمنطقی، تعهد غیرعملی', 'I', 'I'),
(51, 13, 'از خود راضی، مقاوم دربرابر تغییر', 'S', 'N'),
(52, 13, 'رک و بی ملاحظه، آمرانه', 'N', 'D'),
(53, 14, 'هیجانی، شاد', 'I', 'I'),
(54, 14, 'حامی، مدافع', 'S', 'N'),
(55, 14, 'روشمند، دقیق', 'N', 'C'),
(56, 14, 'رقابتی، استدلالی', 'D', 'D'),
(57, 15, 'تحلیلگر خوب', 'C', 'C'),
(58, 15, 'شنونده خوب', 'S', 'S'),
(59, 15, 'مشوق خوب', 'I', 'I'),
(60, 15, 'نماینده خوب', 'D', 'D'),
(61, 16, 'دنبال حقایق', 'C', 'N'),
(62, 16, 'دنبال پیروی', 'S', 'S'),
(63, 16, 'دنبال رهبری', 'D', 'N'),
(64, 16, 'دنبال متقاعد کردن', 'I', 'I'),
(65, 17, 'قدرتمند، سختکوش', 'D', 'D'),
(66, 17, 'خوشبین، جذاب', 'N', 'I'),
(67, 17, 'همکاری با دیگران، کمک کندده', 'N', 'S'),
(68, 17, 'خیلی دقیق، صریح', 'C', 'C'),
(69, 18, 'وفادار، متفکر', 'S', 'S'),
(70, 18, 'چالشی، پیشگام', 'D', 'D'),
(71, 18, 'تحلیلگر، بانزاکت', 'N', 'C'),
(72, 18, 'محبوب، متقاعدکننده', 'I', 'I'),
(73, 19, 'صبور، عجله نکردن برای خرید', 'S', 'S'),
(74, 19, 'قاطع، تصمیم سریع با خرید', 'D', 'D'),
(75, 19, 'خودخواه، هزینه کردن برای خواسته ها', 'I', 'N'),
(76, 19, 'خویشتن دار', 'N', 'C'),
(77, 20, 'سازگار، دوستانه', 'S', 'S'),
(78, 20, 'پرتحرک، سرزنده', 'N', 'I'),
(79, 20, 'نترس، شجاع', 'D', 'D'),
(80, 20, 'منظم، تطبیق پذیر', 'C', 'C'),
(81, 21, 'سفت و سخت، کمالگرا', 'C', 'C'),
(82, 21, 'پرهیز از یکنواختی و کارهای تکراری', 'N', 'I'),
(83, 21, 'دوستدار تغییر، اقدام برای تغییر', 'D', 'D'),
(84, 21, 'خوش مشرب، رفتار محبت آمیز', 'S', 'N'),
(85, 22, 'موثر، تاثیرگذار', 'N', 'D'),
(86, 22, 'از توجه و فرصت های جدید لذت میبرید', 'I', 'N'),
(87, 22, 'اجتناب از درگیری، ارام', 'S', 'S'),
(88, 22, 'اصولی و دیپلماتیک', 'N', 'C'),
(89, 23, 'عجول، هیجانی', 'I', 'I'),
(90, 23, 'حسابگر', 'C', 'N'),
(91, 23, 'مدعی، سلطه گر', 'D', 'D'),
(92, 23, 'غیرتهاجمی، قابل پیش بینی', 'N', 'S'),
(93, 24, 'خلاق، منحصربفرد', 'I', 'I'),
(94, 24, 'برنامه ریزی برای نتیجه، نتیجه گرا', 'D', 'N'),
(95, 24, 'قابل اعتماد، معتبر', 'N', 'S'),
(96, 24, 'با استاندارد بالا، معیارگرا', 'C', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `patterns`
--

CREATE TABLE `patterns` (
  `id` int(10) NOT NULL,
  `code` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `value` varchar(20) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `patterns`
--

INSERT INTO `patterns` (`id`, `code`, `value`) VALUES
(1, 'IDSC', 'ارتقاء دهنده'),
(2, 'ICDS', 'ارزیاب'),
(3, 'DICS', 'الهام دهنده'),
(4, 'SDCI', 'پیشزفت گرا'),
(5, 'DCIS', 'توسعه دهنده'),
(6, 'SCDI', 'جستجوگر'),
(7, 'DCSI', 'خلاق'),
(8, 'CISD', 'عامل'),
(9, 'CSDI', 'کمال گرا'),
(10, 'SCID', 'متخصص'),
(11, 'CDSI', 'متفکر عینی'),
(12, 'IDCS', 'مجابگر'),
(13, 'ISCD', 'مشاور'),
(14, 'ISDC', 'مشاور'),
(15, 'SICD', 'نماینده');

-- --------------------------------------------------------

--
-- Table structure for table `table_g3`
--

CREATE TABLE `table_g3` (
  `id` int(10) NOT NULL,
  `D` int(10) DEFAULT NULL,
  `I` int(10) DEFAULT NULL,
  `S` int(10) DEFAULT NULL,
  `C` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `table_g3`
--

INSERT INTO `table_g3` (`id`, `D`, `I`, `S`, `C`) VALUES
(101, -27, -26, -27, -26),
(103, -16, -7, -7, -10),
(104, -15, -6, -5, -9),
(105, NULL, NULL, -4, -8),
(106, -14, -5, -3, NULL),
(107, -13, -4, -2, -7),
(108, -12, -3, -1, -6),
(109, -11, -2, 0, -5),
(110, -10, NULL, NULL, NULL),
(111, -9, -1, 1, -4),
(112, -8, 0, 2, -3),
(113, NULL, NULL, 3, NULL),
(114, -7, NULL, 4, NULL),
(115, -6, 1, 5, -2),
(116, -5, 2, NULL, -1),
(117, -4, 3, 6, NULL),
(118, -3, NULL, NULL, 0),
(119, -2, 4, 7, 1),
(120, -1, 5, 8, 2),
(121, 0, 6, 9, 3),
(122, 1, NULL, NULL, NULL),
(123, 3, NULL, 10, 4),
(124, 5, 7, 11, 5),
(125, 6, 8, 12, 6),
(126, 9, 9, 13, 7),
(128, 27, 28, 26, 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patterns`
--
ALTER TABLE `patterns`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `table_g3`
--
ALTER TABLE `table_g3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `patterns`
--
ALTER TABLE `patterns`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `table_g3`
--
ALTER TABLE `table_g3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
