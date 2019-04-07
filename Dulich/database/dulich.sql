-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 06, 2019 lúc 06:29 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dulich`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `IDU` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ava` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PQ` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`IDU`, `name`, `pass`, `ava`, `PQ`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'img/avatar.jpg', 'admin'),
(6, 'admin2', 'e10adc3949ba59abbe56e057f20f883e', 'img/avatar.jpg', 'user'),
(7, 'admin3', 'e10adc3949ba59abbe56e057f20f883e', 'img/avatar.jpg', 'user'),
(8, 'admin4', 'e10adc3949ba59abbe56e057f20f883e', 'img/avatar.jpg', 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `ID` int(11) NOT NULL,
  `TG` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `subcontent` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`ID`, `TG`, `title`, `pic`, `address`, `subcontent`, `content`, `tag`) VALUES
(28, 'admin', 'DÃª TÃ¡i Chanh', 'img/detaichanh.jpg', '-NhÃ  hÃ ng PhÃº DÃª: ÄÃ´ng ThÃ nh,TrÆ°á»ng YÃªn,Hoa LÆ°, Ninh BÃ¬nh.\r\n- NhÃ  hÃ ng Thanh Cao: XuÃ¢n SÆ¡n- TrÆ°á»ng YÃªn - Hoa LÆ° - Ninh BÃ¬nh', 'DÃª vÃ¹ng Ä‘áº¥t Ninh BÃ¬nh Ä‘Æ°á»£c chÄƒn tháº£ trÃªn nÃºi, cháº¡y nháº£y nhiá»u nÃªn thá»‹t sÄƒn cháº¯c vÃ  Ã­t má»¡, thÆ¡m ngon hÆ¡n dÃª nuÃ´i cá»§a cÃ¡c vÃ¹ng khÃ¡c. Trong sá»‘ ráº¥t nhiá»u mÃ³n Ä‘Æ°á»£c cháº¿ biáº¿n tá»« dÃª thÃ¬ dÃª tÃ¡i chanh Ä‘Æ°á»£c coi lÃ  mÃ³n Äƒn xáº¿p Ä‘áº§u báº£ng.', 'Äá»ƒ lÃ m mÃ³n tÃ¡i chanh nÃ y, trÆ°á»›c háº¿t thá»‹t dÃª Ä‘Æ°á»£c háº¥p sáº£ Ä‘áº¿n khi chÃ­n tÃ¡i thÃ¬ Ä‘em ra thÃ¡i má»ng. Trá»™n Ä‘á»u thá»‹t Ä‘Ã£ thÃ¡i vá»›i sáº£ thÃ¡i nhá», nÆ°á»›c chanh, bá»™t ngá»t, lÃ¡ chanh, gá»«ng, á»›t tÆ°Æ¡i thÃ¡i nhá», vá»«ng rang giÃ£ dáº­p lÃ  Ä‘Æ°á»£c mÃ³n thá»‹t dÃª tÃ¡i chanh.\r<br />Cháº¿ biáº¿n mÃ³n Äƒn nÃ y khÃ´ng khÃ³, nhÆ°ng láº¡i cáº§n pháº£i Ä‘á»§ vá»‹, Ä‘Ãºng kiá»ƒu thÃ¬ má»›i ngon. Thá»‹t dÃª tÃ¡i chanh thÆ°á»ng Äƒn kÃ¨m vá»›i chuá»‘i xanh thÃ¡i lÃ¡t, kháº¿ chua, lÃ¡ mÆ¡, rau thÆ¡m, sáº£, lÃ¡ sungâ€¦ vÃ  Ä‘áº·c biá»‡t khÃ´ng thá»ƒ thiáº¿u tÆ°Æ¡ng báº§n. Náº¿u cÃ¡c báº¡n muá»‘n nÆ°á»›c tÆ°Æ¡ng ngon hÆ¡n thÃ¬ cÃ³ thá»ƒ cho thÃªm má»™t gá»«ng vÃ  Ä‘Æ°á»ng vÃ o sao cho vá»«a miá»‡ng. ThÃ´ng thÆ°á»ng thÃ¬ tÃ¡i dÃª Ä‘Æ°á»£c gÃ³i trong lÃ¡ sung giÃºp dá»… cáº§m Äƒn hÆ¡n vÃ  Ä‘áº·c biá»‡t lÃ  gia tÄƒng thÃªm hÆ°Æ¡ng vá»‹.', 2),
(29, 'admin', '1.	The Vancouver Hotel - Ninh BÃ¬nh', 'img/vancouver.jpg', 'Äá»‹a chá»‰: No 1 - NgÃµ 75 - LÆ°Æ¡ng VÄƒn Tá»¥y - PhÃºc ThÃ nh - tp. Ninh BÃ¬nh - Ninh BÃ¬nh.\r\nÄiá»‡n thoáº¡i: 0229 3893 270\r\n', '- Cho phÃ©p váº­t nuÃ´i \r<br />- Wifi miá»…n phÃ­\r<br />- Xe Ä‘Æ°a Ä‘Ã³n táº¡i sÃ¢n bay\r<br />- Chá»— Ä‘á»ƒ xe miá»…n phÃ­\r<br />', '- PhÃ²ng gia Ä‘Ã¬nh\r<br />- Nháº­n/tráº£ phÃ²ng cáº¥p tá»‘c.\r<br />', 3),
(30, 'admin', 'Äá»n Vua Äinh TiÃªn HoÃ ng', 'img/vuadinh.jpg', '     Äá»n tá»a láº¡c táº¡i XÃ£ TrÆ°á»ng YÃªn, Hoa LÆ°, Ninh BÃ¬nh.     ', '     lÃ  má»™t di tÃ­ch quan trá»ng thuá»™c vÃ¹ng báº£o vá»‡ Ä‘áº·c biá»‡t cá»§a quáº§n thá»ƒ di sáº£n cá»‘ Ä‘Ã´ Hoa LÆ°     ', '     Vá»‹ trÃ­ cá»§a Ä‘á»n thuá»™c trung tÃ¢m thÃ nh ÄÃ´ng cá»§a kinh Ä‘Ã´ Hoa LÆ° xÆ°a. ÄÃ¢y lÃ  nÆ¡i duy nháº¥t á»Ÿ Viá»‡t Nam thá» Ä‘á»“ng thá»i Vua Äinh TiÃªn HoÃ ng, cha máº¹ Ã´ng cÃ¹ng cÃ¡c con trai vÃ  cÃ³ bÃ i vá»‹ thá» cÃ¡c tÆ°á»›ng triá»u Äinh. Äá»n Vua Äinh cÃ¹ng vá»›i Ä‘á»n Vua LÃª Ä‘Æ°á»£c xáº¿p háº¡ng \"Top 100 cÃ´ng trÃ¬nh 100 tuá»•i ná»•i tiáº¿ng á»Ÿ Viá»‡t Nam\".[1] CÅ©ng nhÆ° cÃ¡c di tÃ­ch khÃ¡c thuá»™c cá»‘ Ä‘Ã´ Hoa LÆ°, Ä‘á»n Vua Äinh náº±m trong quáº§n thá»ƒ di sáº£n tháº¿ giá»›i TrÃ ng An Ä‘Ã£ Ä‘Æ°á»£c UNESCO cÃ´ng nháº­n nÄƒm 2014.     ', 1),
(31, 'admin', 'CÆ¡m ChÃ¡y', 'img/comchay.jpg', 'CÃ¡c báº¡n cÃ³ thá»ƒ thÆ°á»Ÿng thá»©c mÃ³n cÆ¡m chÃ¡y thÆ¡m ngon táº¡i má»™t sá»‘ nhÃ  hÃ ng uy tÃ­n á»Ÿ Ninh BÃ¬nh: NhÃ  hÃ ng PhÃº DÃª:TrÆ°á»ng YÃªn, Hoa LÆ°, Ninh BÃ¬nh(gáº§n Ä‘á»n vua Äinh TiÃªn HoÃ ng vÃ  vua LÃª Äáº¡i HÃ nh). CÆ¡m chÃ¡y á»Ÿ', 'Nháº¯c tá»›i vÃ¹ng Ä‘áº¥t Ninh BÃ¬nh, tháº­t khÃ³ cÃ³ thá»ƒ bá» mÃ³n cÆ¡m chÃ¡y ná»•i tiáº¿ng. ÄÃ¢y lÃ  má»™t mÃ³n Äƒn bÃ¬nh dá»‹ Ä‘Æ°á»£c lÃ m tá»« Ä‘Æ¡n giáº£n háº¡t gáº¡o náº¿p. TÆ°Æ¡ng truyá»n, cÆ¡m chÃ¡y Ä‘Æ°á»£c hÃ¬nh thÃ nh tá»« cuá»‘i tháº¿ ká»‰ 19 do chÃ ng thanh niÃªn tÃªn HoÃ ng ThÄƒng (ngÆ°á»i Ninh BÃ¬nh) há»c Ä‘Æ°á»£c vÃ  phÃ¡t triá»ƒn tá»« má»™t mÃ³n Äƒn cá»§a ngÆ°á»i Hoa sau Ä‘Ã³ má»Ÿ ráº¥t nhiá»u tiá»‡m Äƒn á»Ÿ HÃ  Ná»™i láº«n Ninh BÃ¬nh. TrÆ°á»›c kia, cÆ¡m chÃ¡y chá»‰ Ä‘Æ°á»£c cháº¿ biáº¿n vÃ  dÃ¹ng táº¡i nhÃ , sau nÃ y thÃ¬ Ä‘Æ°á»£c mang ra bÃ¡n vÃ  phá»¥c vá»¥ khÃ¡ch tháº­p phÆ°Æ¡ng.', 'CÆ¡m chÃ¡y tuy trÃ´ng cÃ³ váº» Ä‘Æ¡n giáº£n nhÆ°ng Ä‘á»ƒ thá»±c hiá»‡n thÃ¬ kÃ¬ cÃ´ng, phá»©c táº¡p. NgÆ°á»i ta pháº£i chá»n loáº¡i gáº¡o náº¿p ngon, háº¡t to trÃ²n, dáº»o thÆ¡m Ä‘em ngÃ¢m Ä‘Ã£i kÄ© rá»“i Ä‘á»“ thÃ nh xÃ´i. Äem xÃ´i Ã©p vÃ o khuÃ´n Ä‘á»ƒ táº¡o thÃ nh chÃ¡y rá»“i má»›i Ä‘em chiÃªn qua dáº§u cho phá»“ng, cÃ³ thá»ƒ ráº¯c thÃªm ruá»‘c vÃ o Ä‘á»ƒ gia tÄƒng hÆ°Æ¡ng vá»‹.CÃ´ng Ä‘oáº¡n chiÃªn xÃ´i ráº¥t khÃ³, dáº§u Ä‘á»ƒ chiÃªn pháº£i Ä‘á»ƒ tháº­t nÃ³ng nhÆ°ng khÃ´ng khÃ©t, nhÆ° váº­y chÃ¡y sáº½ khÃ´ng bá»‹ ngáº¥m quÃ¡ nhiá»u dáº§u, khi vá»›t cÅ©ng cáº§n pháº£i nhanh tay. Muá»‘n ruá»‘c ngon thÃ¬ thá»‹t Æ°á»›p pháº£i Ä‘áº­m Ä‘Ã  vÃ  ruá»‘c xÃ© pháº£i tháº­t tÆ¡i vÃ  rÃ¡o. Sau nÃ y, ngÆ°á»i ta sÃ¡ng táº¡o báº±ng cÃ¡ch cháº¿ biáº¿n cÆ¡m chÃ¡y theo phÆ°Æ¡ng phÃ¡p Ä‘Ã³ng gÃ³i, giÃºp cho mÃ³n Ä‘áº·c sáº£n nÃ y dá»… dÃ ng trá»Ÿ thÃ nh thá»© quÃ  biáº¿u táº·ng ngÆ°á»i thÃ¢n vÃ´ cÃ¹ng tiá»‡n lá»£i. CÃ¡c báº¡n cÃ³ thá»ƒ Äƒn liá»n hoáº·c cháº¿ táº¡o nÆ°á»›c sá»‘t tÃ¹y sá»Ÿ thÃ­ch Ä‘á»ƒ Äƒn kÃ¨m vá»›i cÆ¡m chÃ¡y, sáº½ thÃº  vá»‹ hÆ¡n ráº¥t nhiá»u.', 2),
(32, 'admin', 'RÆ°á»£u Lai ThÃ nh', 'img/ruoukimson.jpg', 'Lai ThÃ nh lÃ  má»™t xÃ£ thuá»™c vÃ¹ng cá»±c Nam cá»§a huyá»‡n Kim SÆ¡n (tá»‰nh Ninh BÃ¬nh), nÆ¡i Ä‘Ã¢y sáº£n xuáº¥t loáº¡i rÆ°á»£u náº¿p cÃ¡i hoa vÃ ng ná»•i tiáº¿ng.', 'Tá»« nhá»¯ng háº¡t gáº¡o tráº¯ng trÃ²n, thÆ¡m ngon; má»—i nÄƒm, ngÆ°á»i Lai ThÃ nh Ä‘á»u trá»“ng thá»© lÃºa náº¿p truyá»n thá»‘ng áº¥y trong má»™t diá»‡n tÃ­ch nháº¥t Ä‘á»‹nh Ä‘á»ƒ thu hoáº¡ch lÃ m rÆ°á»£u. LÃºa náº¿p sau khi Ä‘Æ°á»£c gáº·t vá» thÃ¬ sáº½ Ä‘Æ°á»£c phÆ¡i khÃ´, sÃ ng sáº©y ká»¹ rá»“i má»›i cho vÃ o chum báº£o quáº£n dáº§n Ä‘á»ƒ náº¥u rÆ°á»£u.', 'Äá»ƒ cÃ³ vÃ² rÆ°á»£u ngon, ngÆ°á»i ta pháº£i lÃ m tá»‰ má»‰ tá»«ng cÃ´ng Ä‘oáº¡n nhÆ° chÆ°ng cáº¥t, lá»±a chá»n men rÆ°á»£u vÃ  nguá»“n nÆ°á»›c. RÆ°á»£u thÃ nh pháº©m cÃ³ mÃ u trong váº¯t, thÆ¡m mÃ¹i lÃºa náº¿p hÃ i hÃ²a vá»›i cháº¥t men rÆ°á»£u Ä‘áº·c trÆ°ng.\r<br />Nhiá»u ngÆ°á»i cho ráº±ng, rÆ°á»£u Lai ThÃ nh cÃ ng Ä‘á»ƒ lÃ¢u cÃ ng ngon nÃªn mua nhiá»u Ä‘á» Ä‘á»ƒ dÃ¹ng dáº§n. MÃ³n rÆ°á»£u nÃ y ráº¥t thÃ­ch há»£p khi dÃ¹ng vá»›i thá»‹t cÃ¡ vÆ°á»£c náº¥u Ä‘Ã´ng, gá»i cÃ¡ nhá»‡ch, háº£i sáº£n háº¥p hay má»™t bÃ¡t bÃºn má»c Ninh BÃ¬nh\r<br />', 2),
(33, 'admin', '2. An PhÃº Homestay', 'img/anphu.jpg', 'Äá»‹a chá»‰: ThÆ°Æ¡ng Nam - Ninh Nháº¥t - Ninh BÃ¬nh.\r\nÄiá»‡n thoáº¡i: 0166 722 3668.\r\n', '- Wifi miá»…n phÃ­ \r<br />- Xe Ä‘Æ°a Ä‘Ã³n táº¡i sÃ¢n bay\r<br />- Chá»— Ä‘á»ƒ xe miá»…n phÃ­\r<br />', '- PhÃ²ng gia Ä‘Ã¬nh\r<br />- Nháº­n/tráº£ phÃ²ng cáº¥p tá»‘c\r<br />', 3),
(34, 'admin', '3. Quá»‘c KhÃ¡nh bamboo homestay', 'img/quockhanh.jpg', 'Äá»‹a chá»‰: 479B - Ninh XuÃ¢n - Hoa LÆ° - Ninh BÃ¬nh\r\nÄiá»‡n thoáº¡i: 0988061291.\r\n', '- Wifi miá»…n phÃ­\r<br />- Xe Ä‘Æ°a Ä‘Ã³n táº¡i sÃ¢n bay\r<br />- Chá»— Ä‘á»ƒ xe miá»…n phÃ­\r<br />', '- PhÃ²ng gia Ä‘Ã¬nh\r<br />- Quáº§y bar\r<br />', 3),
(35, 'admin', 'Äá»n Vua LÃª Äáº¡i HÃ nh', 'img/vuale.jpg', 'Äá»n tá»a láº¡c táº¡i: XÃ£ TrÆ°á»ng YÃªn - Huyá»‡n Hoa LÆ° - Tá»‰nh Ninh BÃ¬nh', 'Äá»n Vua LÃª Äáº¡i HÃ nh lÃ  má»™t di tÃ­ch lá»‹ch sá»­ vÄƒn hÃ³a thuá»™c khu di tÃ­ch cá»‘ Ä‘Ã´ Hoa LÆ° tá»‰nh Ninh BÃ¬nh. Äá»n náº±m cÃ¡ch Ä‘á»n vua Äinh TiÃªn HoÃ ng 300 mÃ©t. Äá»n vua LÃª qui mÃ´ nhá» hÆ¡n nÃªn khÃ´ng gian trong Ä‘á»n khÃ¡ gáº§n gÅ©i vÃ  huyá»n áº£o. Äá»n cÅ©ng xÃ¢y theo kiá»ƒu ná»™i cÃ´ng ngoáº¡i quá»‘c vá»›i ba toÃ : BÃ¡i ÄÆ°á»ng, ThiÃªn HÆ°Æ¡ng, ChÃ­nh Cung - thá» LÃª HoÃ n, bÃªn pháº£i lÃ  LÃª Long ÄÄ©nh, bÃªn trÃ¡i lÃ  hoÃ ng háº­u DÆ°Æ¡ng VÃ¢n Nga hÆ°á»›ng vá» Ä‘á»n vua Äinh.', 'NÃ©t Ä‘á»™c Ä‘Ã¡o á»Ÿ Ä‘á»n thá» vua LÃª Äáº¡i HÃ nh lÃ  nghá»‡ thuáº­t cháº¡m gá»— tháº¿ ká»· 17 Ä‘Ã£ Ä‘áº¡t Ä‘áº¿n trÃ¬nh Ä‘á»™ Ä‘iÃªu luyá»‡n, tinh xáº£o. TÆ°Æ¡ng truyá»n, bÃ  máº¹ mÆ¡ tháº¥y hoa sen mÃ  sinh ra LÃª HoÃ n, trong lÃºc Ä‘i cáº¥y á»Ÿ cáº¡nh ao sen. BÃ  Ä‘Ã£ á»§ LÃª HoÃ n trong khÃ³m trÃºc vÃ  Ä‘Æ°á»£c con há»• chÃºa rá»«ng xanh áº¥p á»§. Sau lá»i cáº§u xin cá»§a bÃ  máº¹ con há»• bá» Ä‘i. Sau nÃ y lá»›n lÃªn LÃª HoÃ n Ä‘Ã£ láº­p ra nghiá»‡p lá»›n: \"PhÃ¡ Tá»‘ng, bÃ¬nh ChiÃªm\" lá»«ng láº«y. VÃ¬ váº­y mÃ  nghá»‡ thuáº­t Ä‘iÃªu kháº¯c gá»— dÃ¢n gian Viá»‡t Nam cá»§a cÃ¡c nghá»‡ nhÃ¢n á»Ÿ Ä‘Ã¢y cÅ©ng thá»‘ng nháº¥t vá»›i truyá»n thuyáº¿t vá» cÃ¡c Ä‘á» tÃ i ca ngá»£i LÃª HoÃ n.', 1),
(36, 'admin', 'Khu Du Lá»‹ch Sinh ThÃ¡i TrÃ ng An', 'img/trangan.jpg', 'XÃ£ TrÆ°á»ng YÃªn - Hoa LÆ° - Ninh BÃ¬nh', ' lÃ  má»™t khu du lá»‹ch sinh thÃ¡i náº±m trong Quáº§n thá»ƒ di sáº£n tháº¿ giá»›i TrÃ ng An thuá»™c tá»‰nh Ninh BÃ¬nh. NÆ¡i Ä‘Ã¢y Ä‘Ã£ Ä‘Æ°á»£c ChÃ­nh phá»§ Viá»‡t Nam xáº¿p háº¡ng di tÃ­ch quá»‘c gia Ä‘áº·c biá»‡t quan trá»ng vÃ  UNESCO cÃ´ng nháº­n lÃ  di sáº£n tháº¿ giá»›i kÃ©p tá»« nÄƒm 2014.', 'TrÃ ng An vá»›i há»‡ thá»‘ng dÃ£y nÃºi Ä‘Ã¡ vÃ´i cÃ³ tuá»•i Ä‘á»‹a cháº¥t khoáº£ng 250 triá»‡u nÄƒm, qua thá»i gian dÃ i phong hÃ³a bá»Ÿi sá»± biáº¿n Ä‘á»•i cá»§a trÃ¡i Ä‘áº¥t, khÃ­ háº­u, biá»ƒn tiáº¿n, biá»ƒn thoÃ¡i Ä‘Ã£ mang trong mÃ¬nh hÃ ng trÄƒm thung lÅ©ng, hang Ä‘á»™ng, há»“ Ä‘áº§m. Danh tháº¯ng nÃ y lÃ  nÆ¡i báº£o tá»“n vÃ  chá»©a Ä‘á»±ng nhiá»u há»‡ sinh thÃ¡i rá»«ng ngáº­p nÆ°á»›c, rá»«ng trÃªn nÃºi Ä‘Ã¡ vÃ´i, cÃ¡c di chá»‰ kháº£o cá»• há»c vÃ  di tÃ­ch lá»‹ch sá»­ vÄƒn hÃ³a.[1] Há»‡ thá»‘ng nÃºi Ä‘Ã¡, sÃ´ng suá»‘i, rá»«ng vÃ  hang Ä‘á»™ng á»Ÿ TrÃ ng An ráº¥t hiá»ƒm trá»Ÿ nÃªn Ä‘Æ°á»£c Vua Äinh TiÃªn HoÃ ng chá»n lÃ m thÃ nh Nam báº£o vá»‡ kinh Ä‘Ã´ Hoa LÆ° á»Ÿ tháº¿ ká»· X vÃ  sau Ä‘Ã³ nhÃ  Tráº§n sá»­ dá»¥ng lÃ m hÃ nh cung VÅ© LÃ¢m trong khÃ¡ng chiáº¿n NguyÃªn MÃ´ng. Hiá»‡n nay nÆ¡i Ä‘Ã¢y cÃ²n nhiá»u di tÃ­ch lá»‹ch sá»­ thá»i Äinh vÃ  thá»i Tráº§n.', 1),
(39, 'admin', 'ChÃ¹a BÃ¡i ÄÃ­nh', 'img/baidinh.jpg', 'ChÃ¹a náº±m á»Ÿ cá»­a ngÃµ phÃ­a tÃ¢y khu di tÃ­ch cá»‘ Ä‘Ã´ Hoa LÆ°, bÃªn quá»‘c lá»™ 38B, thuá»™c xÃ£ Gia Sinh - Gia Viá»…n - Ninh BÃ¬nh', 'lÃ  má»™t quáº§n thá»ƒ chÃ¹a lá»›n Ä‘Æ°á»£c biáº¿t Ä‘áº¿n vá»›i nhiá»u ká»· lá»¥c chÃ¢u Ã vÃ  Viá»‡t Nam Ä‘Æ°á»£c xÃ¡c láº­p nhÆ° chÃ¹a cÃ³ tÆ°á»£ng Pháº­t báº±ng Ä‘á»“ng dÃ¡t vÃ ng lá»›n nháº¥t chÃ¢u Ã, chÃ¹a cÃ³ hÃ nh lang La HÃ¡n dÃ i nháº¥t chÃ¢u Ã,[2] chÃ¹a cÃ³ tÆ°á»£ng Di láº·c báº±ng Ä‘á»“ng lá»›n nháº¥t ÄÃ´ng Nam Ã..', 'Quáº§n thá»ƒ chÃ¹a BÃ¡i ÄÃ­nh hiá»‡n cÃ³ diá»‡n tÃ­ch 539 ha[4] bao gá»“m 27 ha khu chÃ¹a BÃ¡i ÄÃ­nh cá»•, 80 ha khu chÃ¹a BÃ¡i ÄÃ­nh má»›i, cÃ¡c khu vá»±c nhÆ°: cÃ´ng viÃªn vÄƒn hoÃ¡ vÃ  há»c viá»‡n Pháº­t giÃ¡o, khu Ä‘Ã³n tiáº¿p vÃ  cÃ´ng viÃªn cáº£nh quan, Ä‘Æ°á»ng giao thÃ´ng vÃ  bÃ£i Ä‘á»‘ xe, khu há»“ ÄÃ m Thá»‹, há»“ phÃ³ng sinh...[5] váº«n Ä‘ang Ä‘Æ°á»£c tiáº¿p tá»¥c xÃ¢y dá»±ng.', 1),
(42, 'admin', 'Tam Cá»‘c BÃ­ch Äá»™ng', 'img/tamcoc.jpg', ' xÃ£ Ninh Háº£i, Hoa LÆ°, Ninh BÃ¬nh.', 'Ã²n Ä‘Æ°á»£c biáº¿t Ä‘áº¿n vá»›i nhá»¯ng cÃ¡i tÃªn ná»•i tiáº¿ng nhÆ° \"vá»‹nh Háº¡ Long trÃªn cáº¡n\" hay \"Nam thiÃªn Ä‘á»‡ nhá»‹ Ä‘á»™ng\" lÃ  má»™t khu du lá»‹ch trá»ng Ä‘iá»ƒm quá»‘c gia Viá»‡t Nam. ToÃ n khu vá»±c bao gá»“m há»‡ thá»‘ng cÃ¡c hang Ä‘á»™ng nÃºi Ä‘Ã¡ vÃ´i vÃ  cÃ¡c di tÃ­ch lá»‹ch sá»­ liÃªn quan Ä‘áº¿n hÃ nh cung VÅ© LÃ¢m cá»§a triá»u Ä‘áº¡i nhÃ  Tráº§n', 'Tam Cá»‘c, cÃ³ nghÄ©a lÃ  \"ba hang\", gá»“m hang Cáº£, hang Hai vÃ  hang Ba. Cáº£ ba hang Ä‘á»u Ä‘Æ°á»£c táº¡o thÃ nh bá»Ÿi dÃ²ng sÃ´ng NgÃ´ Äá»“ng Ä‘Ã¢m xuyÃªn qua nÃºi. Tam Cá»‘c lÃ  tuyáº¿n du thuyá»n Ä‘Æ°á»£c khai thÃ¡c Ä‘áº§u tiÃªn á»Ÿ khu du lá»‹ch Tam Cá»‘c - BÃ­ch Äá»™ng.', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `IDC` int(11) NOT NULL,
  `IDU` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`IDC`, `IDU`, `ID`, `noidung`) VALUES
(1, 9, 42, 'Tam Cá»‘c Ä‘áº¹p thÆ¡ má»™ng , mÃ u xanh cá»§a thiÃªn nhiÃªn '),
(2, 9, 33, 'PhÃ²ng Ä‘áº¹p giÃ¡ bao nhiÃªu vÃ¢y ?');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tag`
--

CREATE TABLE `tag` (
  `tagid` int(11) NOT NULL,
  `tagname` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tag`
--

INSERT INTO `tag` (`tagid`, `tagname`) VALUES
(1, 'Äá»‹a Ä‘iá»ƒm'),
(2, 'Äáº·c sáº£n'),
(3, 'KhÃ¡ch sáº¡n');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`IDU`);

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`IDC`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `IDU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `IDC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
