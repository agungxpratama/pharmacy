-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 05:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy_kids1`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `lihat_keranjang` (IN `id` INT(3))  NO SQL
BEGIN
SELECT
id_keranjang,id_obat,nama_obat,harga_obat,quantity,pengiriman,
harga(id_keranjang) AS 'total_harga'
FROM keranjang2 WHERE id_keranjang = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lihat_obat` (IN `id` INT(3))  NO SQL
BEGIN
SELECT * FROM obat WHERE id_obat = id;
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `harga` (`id` INT) RETURNS VARCHAR(15) CHARSET latin1 NO SQL
begin
declare total varchar(15);
set total = (select concat(pengiriman+(harga_obat*quantity)) as 'total1' from keranjang2 where id_keranjang = id );
return(total);
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(20) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `isi` text NOT NULL,
  `tgl_buat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `foto`, `isi`, `tgl_buat`) VALUES
(6, 'Usia Berapa Anak Boleh Minum Jus?', '2953180962.jpg', 'Memenuhi kebutuhan gizi anak sudah menjadi kewajiban orangtua, dan salah satu nutrisi yang bisa didapat adalah dari buah-buahan dan sayuran segar. Buah bisa diolah menjadi berbagai macam menu makanan, salah satunya adalah jus. Meski sehat tapi bukan berarti jus bisa dikonsumsi siapa saja, apalagi anak-anak. untuk anak usia dini, tentu perlu waktu yang tepat kapan mereka bisa mengonsumsinya. Dilansir dari Kids Health.org, paling baik menunggu bayi berusia paling tidak enam bulan untuk bisa minum jus. Namun beberapa dokter anak mungkin tidak menyarankan bayi diberikan jus dulu, baik itu kemasan maupun yang segar dan terbuat dari buah dan sayur segar. Tunggu hingga anak berusia satu tahun. Jus kemasan memiliki kalori tinggi yang bisa menyebabkan anak kegemukan karena terlalu banyak gula. Sedangkan jus segar kemungkinan membawa bakteri dan virus penyebab penyakit. Apalagi imunitas bayi yang masih rentan dan lemah menahan infeksi bakteri dan virus. Bisa disimpulkan bahwa sebaiknya tidak begitu saja memberi jus pada bayi, bahkan jika itu adalah mengenalkan MPASI pada bayi. Pastikan semua makanan yang diberikan pada bayi sudah dimasak dengan benar dan matang sehingg bisa memberi nutrisi tanpa membahayakan kesehatannya. Jadi, jangan sembarangan memberikan makanan dan minuman pada anak-anak meski sehat. Kenali dulu kapan tubuh anak bisa menoleransi kandungan sayur dan buah segar.', '2020-06-17'),
(10, '5 Cara Membiasakan Anak Makan Buah di Rumah', '2620937_6e92faf6-3ad4-11e3-8182-d61d3384bbc6.jpg', 'Beberapa anak sulit disuruh makan buah. Bukan hanya menolak, anak bisa jadi memuntahkan dan membuang makanan jika dipaksa. Jika terus dipaksa, bisa-bisa kenangan makan buah tak akan pernah baik di pikirannya dan justru ia akan trauma dan semakin membenci buah.\r\n\r\nDaripada terus memaksa anak untuk makan buah, ada baiknya membiasakan anak makan buah perlahan di mulai dari rumah. Ini yang bisa dilakukan orangtua agar si kecil mau makan buah.\r\n\r\n1. Makan bersama\r\n\r\nLebih sering makan bersama keluarga. Jika tidak memungkinkan, paling tidak selalu temani si kecil makan. Makan bersama akan membuat anak merasa lebih dekat dengan orangtuanya dan menuruti apa yang dikatakan orangtuanya.\r\n\r\n2. Menjadi contoh untuk anak\r\n\r\nTentu untuk mendorong anak makan sehat, orangtua harus jadi contoh teladan yang baik. Ibu dan ayah harus rajin dulu makan buah. Dengan sering melihat orangtuanya makan buah, anak akan terdorong ingin makan buah.\r\n\r\n3. Menyimpan banyak variasi buah di rumah\r\n\r\nBahkan jika pada awalnya sering menolak makan buah, lama-lama anak akan ingin makan buah, tinggal memilih mana buah yang paling ia suka. Jika tak suka pada satu buah, belum tentu ia tidak suka buah lainnya.\r\n\r\n4. Selalu sediakan di meja makan\r\n\r\nUntuk membuatnya terbiasa, selalu kupas dan sediakan buah di meja untuk dimakan. Bahkan jika awalnya menolak, lama-lama ia akan mau mencoba satu dua potong buah.\r\n\r\n5. Dorong anak lebih banyak minum air putih\r\n\r\nJika masih tak mau makan buah, cara terbaik adalah mendorongnya lebih banyak minum air putih. Jangan turuti anak minum soda atau minuman manis lainnya. Ini yang akan membuat anak lebih familiar dengan rasa manis tak alami dan semakin menolak buah. Jika anak suka minum air putih, lidahnya akan lebih familiar dengan rasa hambar dan menerima rasa manis yang lebih alami.\r\n\r\nItu dia sekian cara membiasakan anak makan buah di rumah. Jangan lelah mengenalkan berbagai variasi buah pada anak.', '2020-06-18'),
(11, 'Begini Cara Atasi Radang Tenggorokan Anak dalam Semalam', 'download.jpg', '-Minum air hangat\r\n-Minum madu hangat\r\n-Berkumur air garam\r\n-Makan makanan berkuah dan hangat seperti sup dan bubur\r\n-Pastikan si kecil banyak minum air\r\n-Minum obat ibuprofen atau asetaminofen untuk anak-anak usia di atas 2 tahun\r\nJika memungkinkan ada humidifier, gunakan di dalam kamar anak. Pastikan anak makan dan minum dengan baik serta mendapat waktu istirahat yang cukup. Karena kemungkinan ia akan merasakan tidak nyaman sepanjang malam, ia akan agak rewel. Tenangkan anak dengan cara menemaninya tidur dan selalu ada air hangat di sisi tempat tidur, Moms.', '2020-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `id_favorite` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `harga_obat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`id_favorite`, `id_obat`, `nama_obat`, `harga_obat`, `id_user`) VALUES
(1, 18, 'BYE BYE FEVER ANAK 1 LEMBAR', 10000, 7),
(2, 18, 'BYE BYE FEVER ANAK 1 LEMBAR', 10000, 9),
(3, 18, 'BYE BYE FEVER ANAK 1 LEMBAR', 10000, 9),
(4, 18, 'BYE BYE FEVER ANAK 1 LEMBAR', 10000, 10),
(5, 26, 'HOLISTICARE ESTER C KIDS 30 KA', 50000, 8),
(6, 26, 'HOLISTICARE ESTER C KIDS 30 KA', 50000, 8),
(7, 32, 'ACTIFED PLUS COUGH SUPRESSANT ', 80000, 8),
(8, 18, 'BYE BYE FEVER ANAK 1 LEMBAR', 10000, 8),
(9, 25, 'DUMIN SIRUP 60 ML', 43000, 8),
(10, 19, 'TEMPRA FORTE SIRUP 60 ML', 50000, 10),
(11, 18, 'BYE BYE FEVER ANAK 1 LEMBAR', 10000, 12);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `db_keranjang` int(11) NOT NULL,
  `id_keranjang` int(20) NOT NULL,
  `id_obat` int(20) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `harga_obat` int(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_pemesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`db_keranjang`, `id_keranjang`, `id_obat`, `nama_obat`, `harga_obat`, `quantity`, `id_user`, `id_pemesanan`) VALUES
(1, 1, 18, 'BYE BYE FEVER ANAK 1 LEMBAR', 10000, 1, 7, 1),
(2, 6, 18, 'BYE BYE FEVER ANAK 1 LEMBAR', 10000, 1, 8, 2),
(3, 7, 18, 'BYE BYE FEVER ANAK 1 LEMBAR', 10000, 1, 8, 3),
(4, 1, 18, 'BYE BYE FEVER ANAK 1 LEMBAR', 10000, 1, 8, 4),
(5, 13, 20, 'PANADOL ANAK-ANAK 1-6 SIRUP 30', 35000, 2, 8, 5),
(6, 14, 18, 'BYE BYE FEVER ANAK 1 LEMBAR', 10000, 2, 10, 6),
(7, 7, 19, 'TEMPRA FORTE SIRUP 60 ML', 50000, 1, 10, 7),
(8, 8, 27, 'APIALYS SIRUP 100 ML', 60000, 1, 10, 7),
(9, 9, 35, 'DULCOLAX 5 MG 10 TABLET', 32000, 1, 11, 8),
(10, 10, 18, 'BYE BYE FEVER ANAK 1 LEMBAR', 10000, 1, 11, 9),
(11, 11, 26, 'HOLISTICARE ESTER C KIDS 30 KA', 50000, 1, 11, 9),
(12, 12, 18, 'BYE BYE FEVER ANAK 1 LEMBAR', 10000, 2, 12, 10),
(13, 13, 19, 'TEMPRA FORTE SIRUP 60 ML', 50000, 2, 12, 11),
(14, 1, 32, 'ACTIFED PLUS COUGH SUPRESSANT ', 80000, 1, 13, 12);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang2`
--

CREATE TABLE `keranjang2` (
  `id_keranjang` int(10) NOT NULL,
  `id_obat` int(10) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `harga_obat` int(15) NOT NULL,
  `quantity` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id_user` int(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id_user`, `email`, `password`) VALUES
(7, 'rey@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'wandaafifah61@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'zaniar@gmail.com', 'c6f057b86584942e415435ffb1fa93d4'),
(10, 'nada@gmail.com', '202cb962ac59075b964b07152d234b70'),
(11, 'anwar@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(12, 'dwi@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(13, 'qwe@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `metode_pengiriman`
--

CREATE TABLE `metode_pengiriman` (
  `id_m_p` int(11) NOT NULL,
  `nama_metode` varchar(255) NOT NULL,
  `harga_metode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `metode_pengiriman`
--

INSERT INTO `metode_pengiriman` (`id_m_p`, `nama_metode`, `harga_metode`) VALUES
(1, 'Pengiriman Besok', 25000),
(2, 'Pengiriman Normal', 20000),
(3, 'Pengiriman Sekarang', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(10) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `foto` text NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `merek` varchar(30) NOT NULL,
  `jenis_obat` varchar(30) NOT NULL,
  `aturan_pakai` text NOT NULL,
  `komposisi` text NOT NULL,
  `deskripsi` text NOT NULL,
  `kemasan` varchar(30) NOT NULL,
  `indikasi_umum` text NOT NULL,
  `manufaktur` text NOT NULL,
  `segmentasi` text NOT NULL,
  `harga_obat` int(6) NOT NULL,
  `efek_samping` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `foto`, `kategori`, `merek`, `jenis_obat`, `aturan_pakai`, `komposisi`, `deskripsi`, `kemasan`, `indikasi_umum`, `manufaktur`, `segmentasi`, `harga_obat`, `efek_samping`, `stock`) VALUES
(18, 'BYE BYE FEVER ANAK 1 LEMBAR', 'byebye_fever.jpg', 'demam ', 'Setiap 10 jam, bila perlu', '-', 'Lepaskan lapisan transparan dan tempelkan permukaan yang melekat pada daerah dahi/pipi/punggung/bagian yang nyeri. Patch diganti setiap 10 jam.', '-', 'BYE BYE FEVER ANAK merupakan plester yang digunakan pada anak diatas 2 tahun untuk membantu meredakan demam, sakit kepala dan sakit gigi. Plester ini memberikan efek dingin bekerja sampai 10 jam. Plester BYE BYE FEVER ANAK memiliki daya lekat yang kuat dan aman digunakan bersama dengan obat lain. ', 'Pack @ 1 piece', 'Membantu menurunkan demam dan menghilangkan sakit kepala pada anak di atas usia 2 tahun.', 'HISAMITSU', 'Medical Device & Consumable', 10000, '-', 0),
(19, 'TEMPRA FORTE SIRUP 60 ML', 'tempra_paracetamol.jpg', 'demam ', 'Anak di atas 12 tahun : 2-2.5 ', 'Sirup', 'Dikonsumsi sebelum atau sesudah makan.', 'Tiap 5 ml mengandung : Paracetamol 250 mg\r\nDosis', 'TEMPRA FORTE merupakan obat sirup dengan rasa jeruk yang mengandung Paracetamol 250 mg tiap 5 ml sirup. Paracetamol bekerja sebagai antipiretik pada pusat pengaturan suhu di otak dan analgetika dengan meningkatkan ambang rasa sakit. Obat ini digunakan untuk menurunkan demam, rasa sakit dan nyeri ringan seperti sakit kepala dan sakit gigi. ', 'Dus, Botol @ 60 ml ', 'Obat ini dapat digunakan untuk meredakan sakit kepala, sakit gigi, sakit pada otot, nyeri yang mengganggu dan menurunkan demam yang menyertai flu/influensa serta demam sesudah vaksinasi. ', 'Taisho Pharmaceutical', 'Green', 50000, '-', 0),
(20, 'PANADOL ANAK-ANAK 1-6 SIRUP 30', 'panadol_panadol-anak-anak-paracetamol-obat-sirup-pereda-demam--60-ml-_full02.jpg', 'demam ', '- Anak usia 1-2 tahun: 3.75 ml', 'Sirup', 'Dikonsumsi sebelum atau sesudah makan.', 'Tiap 5 ml mengandung : Paracetamol 160 mg', 'PANADOL ANAK 1-6 TAHUN SIRUP merupakan obat dengan kandungan Paracetamol. Paracetamol bekerja sebagai antipiretik pada pusat pengaturan suhu di otak dan analgetika dengan meningkatkan ambang rasa sakit. Obat ini digunakan untuk meredakan demam, rasa sakit dan nyeri ringan seperti sakit kepala, sakit gigi; dan menurunkan demam yang menyertai flu; dan demam sesudah imunisasi atau vaksinasi pada anak usia 1-6 tahun. ', 'Dus, Botol @ 30 ml', 'Obat ini dapat digunakan untuk meredakan sakit kepala, sakit gigi, sakit pada otot, nyeri yang mengganggu dan menurunkan demam yang menyertai flu/influensa serta demam sesudah vaksinasi. ', 'Sterling', 'Green', 35000, '-', 0),
(21, 'PRORIS SIRUP 60 ML', '84e8a05ebf87dadbcd0045242917b35d.jpg', 'demam ', 'Dewasa : 3-4 kali/hari, 2 send', 'Sirup', 'Berikan segera sesudah makan', 'Tiap 5 ml mengandung : Ibuprofen 100 mg', 'PRORIS SIRUP merupakan obat dengan kandungan Ibuprofen 100 mg tiap 5 ml. Obat ini digunakan untuk menurunkan demam, meredakan nyeri ringan sampai sedang, dan sakit kepala. Kategori', 'Dus, Botol @ 60 ml ', 'Meredakan demam, nyeri pada sakit gigi, sakit kepala, nyeri otot, nyeri pada paska operasi cabut gigi ', 'Pharos', 'Green', 40000, 'Hati-hati pemberian pada penderita tukak lambung atau mempunyai riwayat tukak lambung dan penderita ', 0),
(22, 'PRAXION SIRUP 60 ML', 'PRAXION_SIRUP_60_ML.jpg', 'demam ', 'Anak usia 0 - 1 tahun : 0.5 se', 'Sirup', 'Dapat dikonsumsi sebelum atau sesudah makan.', 'Tiap 5 ml mengandung : Paracetamol 120 mg (micronized)', 'PRAXION SIRUP merupakan obat yang mengandung Paracetamol yang berfungsi sebagai analgesik dan antipiretik. Paracetamol bekerja sebagai antipiretik pada pusat pengaturan suhu di otak dan analgetika dengan meningkatkan ambang rasa sakit. Obat ini digunakan untuk menurunkan demam, serta meringankan rasa sakit kepala dan gigi. ', 'Dus, Botol @ 60 ml ', 'Menurunkan demam, meredakan nyeri seperti pada sakit kepala dan sakit gigi.', 'Pharos', 'Green', 50000, 'Hati-hati penggunaan obat ini pada penderita peyakit ginjal. - Bila setelah 2 hari demam tidak menur', 0),
(23, 'HUFAGRIP TMP SIRUP 60 ML', 'HUFAGRIP_TMP_SIRUP_60_ML.jpg', 'demam ', 'Anak 1-12 th temperatur <39>39', 'Sirup', 'Sesudah makan', 'ibuprofen', 'HUFAGRIP TMP SIRUP mengandung zat aktif Ibuprofen. Kandungan obat ini termasuk Nonsteroidal anti Inflamatory Drug (NSAID). Obat ini digunakan untuk meredakan demam, sakit kepala, sakit gigi, sakit pada telinga, dan nyeri ringan lainnya. ', 'Dus, Botol @ 60 ml ', 'Penurun panas, pusing, nyeri, sakit kepala', 'Gratia Husada Farma', 'Blue', 30000, 'Peptic ulcer, pasien yang mengkonsumsi aspirin, asma, rhinitis dan urtikaria', 0),
(24, 'PANADOL ANAK-ANAK 120 MG 10 CH', 'PANADOL_ANAK-ANAK_120_MG_10_CHEWABLE_TABLET.jpg', 'demam ', 'Anak 6-12 tahun : 3-4 x sehari', 'Tablet', 'Sebelum atau sesudah makan', 'Paracetamol 120 mg', 'PANADOL ANAK CHEWABLE merupakan obat dengan kandungan Paracetamol. Obat ini digunakan untuk meredakan demam dan nyeri secara efektif bagi anak usia 2-12 tahun. ', 'Dus, 10 Blister @ 10 Tablet Ku', 'Meredakan sakit Kepala, sakit Gigi, nyeri Otot, menurunkan demam yang menyertai Flu & paska vaksinasi ', 'Sterling', 'Green', 25000, 'Penderita gangguan fungsi hati berat.', 0),
(25, 'DUMIN SIRUP 60 ML', 'DUMIN_SIRUP_60_ML.jpg', 'demam ', 'Anak 7-12 tahun : 3-4 x sehari', 'Sirup', 'Sebelum atau sesudah makan', 'Per-5 mL : Paracetamol 120 mg', 'DUMIN SIRUP merupakan obat dengan kandungan Paracetamol 500 mg. Obat ini dapat digunakan untuk meredakan nyeri seperti sakit kepala, sakit gigi, nyeri otot dan demam. ', 'Botol 60 ml Dalam Dus', 'Meredakan sakit/nyeri pada sakit Kepala, sakit Gigi, nyeri Haid, nyeri Otot & Sendi, Batuk-pilek/Flu, menurunkan Demam ', 'Actavis', 'Green', 43000, 'Penggunaan bersama obat lain yang mempengaruhi hati. Gagal hati dan ginjal', 0),
(26, 'HOLISTICARE ESTER C KIDS 30 KA', 'HOLISTICARE_ESTER_C_KIDS_30_KAPSUL.jpg', 'vitamin', '1 tablet sehari, dapat ditingk', 'Kapsul', 'Dikunyah atau dihisap.', 'Ester-C 100 mg, Kalsium 10 mg, Hesperidin 5 mg', 'HOLISTICARE ESTER C KIDS merupakan suplemen dengan kandungan non-acidic vitamin c, hesperidin (ekstrak bioflavonoid), dan kalsium yang bermanfaat untuk memelihara kesehatan anak. Suplemen ini tidak bersifat asam sehingga aman bagi lambung, mengandung pemanis Xylitol dari bahan alam yang dapat memelihara kesehatan gigi, dilengkapi Hesperidin untuk membantu penyerapan, serta membantu memenuhi kebutuhan vitamin c. ', 'Dus, Botol @ 30 Kapsul ', 'Membantu mencukupi vitamin c dan menjaga daya tahan tubuh', 'Holisticare', 'Vitamin & Supplement ', 50000, 'hipersensitivitas', 0),
(27, 'APIALYS SIRUP 100 ML', 'APIALYS_SIRUP_100_ML.jpg', 'vitamin', 'Dewasa dan anak > 5 tahun : 1-', 'Sirup', 'Sebelum atau sesudah makan, dapat bersama makanan untuk absorpsi yang lebih baik atau jika timbul ketidak-nyamanan pada saluran cerna.', 'Tiap 5 ml mengandung : Vitamin A 5000 IU, Vitamin B1 3 mg, Vitamin B2 2 mg, Vitamin B6 6 mg, Vitamin B12 5 mcg, Vitamin C 50 mg, Vitamin D 400 IU, Nicotinamide 20 mg, Lysine HCl 250 mg, Pantothenol 5 mg, Asam glutamat 25 mg.', 'APIALYS SIRUP merupakan multivitamin yang digunakan untuk memenuhi kebutuhan vitamin pada anak. ', 'Dus, Botol @ 100 ml', 'Meningkatkan nafsu makan dan stamina tubuh pada anak2 yang bertumbuh, sebagai suplemen vitamin ', 'Lapi', 'Vitamin & Supplement ', 60000, 'hentikan jika terjadi reaksi alergi', 0),
(28, 'ENERVON C PLUS SIRUP 120 ML', 'ENERVON_C_PLUS_SIRUP_120_ML.jpg', 'vitamin', 'Anak usia 1 - 6 tahun : 1 send', 'sirup', 'Dikonsumsi sesudah makan.', 'Tiap 5 ml mengandung : Vitamin A 1.500 SI, Vitamin B1 8.33 mg, Vitamin B2 4.16 mg, Vitamin B6 1.67 mg,Vitamin B12 8.33 mcg, Vitamin C 83.33 mg, Vitamin D 100 SI, Niacinamide 8.33 mg, d-Panthenol 3.33 mg.\r\n', 'ENERVON C PLUS merupakan suplemen dengan kandungan Vit A , Vitamin B kompleks (Vit B1, Vit B2, Vit B6, Vit B12), Vit C, Vit D, Niacinamide, Panthenol dalam bentuk sirup. ENERVON C PLUS digunakan untuk memenuhi kebutuhan Vitamin B Kompleks, Vitamn C, A & D serta memelihara kesehatan anak pada masa pertumbuhan anak. ', 'Dus, Botol @ 120 ml', 'Suplemen untuk membantu memenuhi kebutuhan Vitamin B kompleks, Vitamin C, Vitamin A, dan Vitamin D pada masa pertumbuhan anak. ', 'Medifarma', 'Vitamin & Supplement ', 40000, 'Hipersensitif atau alergi terhadap salah satu komponen suplemen ini. - Hipervitaminosis. ', 0),
(29, 'IMUNPED SIRUP 60 ML', 'IMUNPED-SIRUP-BOTOL-60-ML-1.jpg', 'vitamin', 'Anak 9-13 tahun: 5-10 ml (1-2 ', 'Sirup', 'Dapat diberikan bersama atau tanpa makanan', 'Zinc 5 Mg, Vitamin C 40 Mg.', 'IMUNPED SIRUP merupakan suplemen yang mengandung vitamin c dan zinc sulfat. Suplemen ini digunakan untuk membantu memelihara kesehatan tubuh pada bayi ', 'Dus, Botol @ 60 ml ', 'Untuk pencegahan dan pengobatan defisiensi zinc dan vitamin C', 'Darya Varia Laboratoria', 'Vitamin & Supplement ', 50000, '-', 0),
(30, 'ELKANA SIRUP 60 ML', 'ELKANA_SIRUP_60_ML.jpg', 'vitamin', 'Dewasa dan anak-anak > 6 tahun', 'Sirup', 'Sebelum atau sesudah makan, dapat bersama makanan untuk absorpsi yang lebih baik atau jika timbul ketidak-nyamanan pada saluran cerna.', 'Tiap 5 ml mengandung : Vitamin A 2400 iu, Vitamin B1 4 mg, Vitamin B2 1.2 mg, Vitamin B6 1.2 mg, Vitamin B12 4 mcg, Vitamin C 60 mg, Vitamin D 400 IU, Nicotinamide 16 mg, Choline 12 mg, Inositol 12 mg, Ca 33.1 mg, Na 5.2 mg, L-Lysine HCl 200 mg.', 'ELKANA merupakan suplemen makanan dengan kandungan multivitamin dan mineral yang berfungsi sebagai pelengkap selama masa kehamilan, menyusui dan pertumbuhan. ', 'Dus, Botol @ 60 ml ', 'Defisiensi vitamin dan mineral', 'Sanbe Farma', 'Vitamin & Supplement ', 52000, 'Hentikan penggunaan jika terjadi reaksi alergi.', 0),
(31, 'SCOTT\'S EMULSION VITA ORANGE 4', 'SCOTTS_EMULSION_VITA_ORANGE_400_ML.jpg', 'vitamin', '> 12 th : 3 x sehari 1 sendok ', 'Sirup', 'Sebelum / sesudah makan', 'Dalam setiap 15 mL : Cod Liver Oil ,Vit A 850 IU ,Vit D 85 IU ,Ca Hypophosphite 414 mg ,Orange juice\r\n', 'SCOTT\'S EMULSION VITA ORANGE mengandung minyak ikan cod, asam lemak omega 3 (DHA+EPA), Vitamin A, dan Vitamin D. Suplemen ini digunakan untuk mendukung fungsi kekebalan tubuh dan penglihatan normal, menjaga kesehatan tulang dan gigi serta bermanfaat untuk pembentukan tulang dan gigi. ', 'Dus, Botol @ 400 ml', 'Membantu membangun ketahanan alamiah tubuh dan mencegah kekurangan vitamin A dan D. Pertumbuhan dan perkembangan tulang dan gigi. ', 'GlaxoSmithKline Indonesia', 'Vitamin & Supplement ', 70000, '-', 0),
(32, 'ACTIFED PLUS COUGH SUPRESSANT ', 'ACTIFED_PLUS_COUGH_SUPRESSANT_SIRUP_60_ML.jpg', 'FluBatuk', 'Dewasa dan anak diatas 12 tahu', 'Sirup', 'Sebelum atau sesudah makan\r\n', 'Tiap 5 ml sirup mengandung: Dextromethorphan HBr 10 mg, Pseudoephedrine HCl 30 mg, Triprolidine HCl 1.25 mg', ' ACTIFED PLUS COUGH SUPPRESANT merupakan obat dengan kandungan Dextromethorphan HBr, Pseudoephedrine HCl, dan Triprolidine HCl. Obat ini dapat digunakan untuk meringankan gejala flu serta batuk kering dan gatal tenggorokan. ', 'Dus, Botol @ 60 ml ', 'Meredakan gejala flu pilek dan batuk kering, serta gatal tenggorokan.', 'GlaxoSmithKline Indonesia', 'Blue', 80000, 'Hipertensi, kelebihan berat badan (overweight), gangguan fungsi hati, gangguan fungsi ginjal, glauko', 1),
(33, 'HUFAGRIP FLU & BATUK SIRUP 60 ', 'HUFAGRIP_FLU_BATUK_SIRUP_60_ML.jpg', 'FluBatuk', 'Anak (6-12 tahun) : 3 kali seh', 'Sirup', 'Dikonsumsi sesudah makan', 'Paracetamol 120 mg, Pseudoephedrine HCL 7.5 mg, Chlorpheniramine maleate 0.5 mg, dan Gliceryl Guaiacolate 50 mg.', 'HUFAGRIP FLU & BATUK merupakan obat yang mengandung Paracetamol, Chlorpeniramin Maleat, Pseudoefedrin HCl dan Guaifenesin digunakan untuk mengobati gejala flu seperti demam, sakit kepala, hidung tersumbat disertai bersin. ', 'Dus, Botol @ 60 ml ', 'Untuk meringankan gejala- gejala flu seperti demam, sakit kepala, hidung tersumbat, dan bersin-bersin disertai batuk berdahak.', 'Gratia Husada Farma', 'Blue', 30000, 'Penderita dengan riwayat hipersensitif Paracetamol, Pseudoephedrine HCl,Chlorpheniramine Maleate dan', 0),
(34, 'TRIAMINIC EKSPEKTORAN & PILEK ', 'TRIAMINIC_EKSPEKTORAN_PILEK_SIRUP_60_ML.jpg', 'FluBatuk', 'Anak 2-6 tahun : 3 x sehari 1/', 'Sirup', 'Dikonsumsi sebelum atau sesudah makan', 'Per 5 mL: Pseudoephedrine HCl 15 mg, guaifenesin 50 mg', 'TRIAMINIC EKSPEKTORAN & PILEK SIRUP adalah obat yang mengandung Pseudoefedrin dan Guaifenesin, digunakan untuk meringankan gejala pilek seperti bersin-bersin dan hidung tersumbat serta batuk berdahak.', 'Dus, Botol @ 60 ml ', 'Meringankan bersin-bersin, meringankan batuk berdahak, dan melegakan hidung tersumbat karena pilek. ', 'Novartis Indonesia', 'Blue', 70000, 'Gangguan ginjal dan hati, glaukoma, hipertrofi prostat, hipertiroidisme, hipertensi, wanita hamil da', 0),
(35, 'DULCOLAX 5 MG 10 TABLET', 'DULCOLAX_5_MG_10_TABLET.jpg', 'SaluranPencernaan', 'Dewasa dan anak di atas usia 1', 'Tablet', 'Tablet dianjurkan untuk diminum pada malam hari (waktu kerja obat 6-12 jam) untuk mendapatkan buang air besar keesokan harinya.\r\n', 'Bisacodyl 5 mg\r\n', 'DULCOLAX TABLET merupakan obat dengan kandungan Bisacodyl dalam bentuk tablet salut enterik. Obat ini digunakan untuk untuk mengatasi masalah sembelit/susah BAB/konstipasi. Selain itu obat ini juga digunakan sebagai salah satu persiapan prosedur terapi diagnostic, terapi sebelum dan sesudah operasi dan dalam kondisi untuk mempercepat defekasi. DULCOLAX 5 MG TABLET bekerja dengan cara merangsang pergerakan pada usus besar dan membantu jalan keluar nya feses. ', 'Dus, 1 Blister @ 10 Tablet sal', 'Untuk mengatasi masalah sembelit/ susah BAB/ konstipasi. Untuk persiapan prosedur terapi diagnostic, terapi sebelum dan sesudah operasi dan dalam kondisi untuk mempercepat defekasi. ', 'Boehringer InGelheim', 'Blue', 32000, 'hipersensitif, pasien dengan ileus, obstruksi usus, kondisi perut akut termasuk radang usus buntu, p', 0),
(36, 'LACTO-B SACHET 1 GR', 'LACTO-B_SACHET_1_GR.jpg', 'SaluranPencernaan', 'Anak 1-12 tahun : 3 sachet/har', 'Serbuk', 'Dapat dikonsumsi langsung dengan melarutkannya bersama air putih atau dikonsumsi bersama makanan untuk mengurangi ketidak-nyamanan pencernaan.\r\n', 'Serbuk krim nabati, Dekstrosa, Campuran bakteri laktat (Lactobacillus Acidophilus, Bifidobacterium Longum, Streptococcus Thermophillus), Vitamin C, Vitamin B1, Vitamin B2, Vitamin B6, Niacin, Zinc', 'LACTO-B merupakan suplemen dengan kandungan probiotik yang membantu fungsi saluran pencernaan. LACTO-B dapat digunakan untuk mengobati diare dan pencegahan intoleransi laktosa pada anak 1-12 tahun. ', 'Dus, 4 Pack @ 10 sachet', 'Diare dan pencegahan intoleransi laktosa', 'Novell Pharmaceutical Laboratories', 'Vitamin & Supplement ', 19000, '-', 0),
(37, 'STIMUNO SIRUP RASA ANGGUR 100 ', '364441_stimuno_syrup_grape_100ml.jpg', 'CegahKorona', 'Anak-anak >1 tahun : 3 kali se', 'Sirup', 'setelah makan', 'Tiap 5 ml: Ekstrak tanaman Phyllanthus niruri 25 mg', 'STIMUNO SIRUP RASA ANGGUR SIRUP merupakan fitofarmaka yang mengandng ekstrak daun Meniran. Obat ini gunakan untuk membantu memperbaiki sistem imun, Suplemen ini mengandung bahan aktif dari ekstrak tanaman Phyllanthus niruri L yang digunakan untuk membantu memperbaiki sistem imun dan mempercepat proses penyembuhan dari sakit. ', 'Dus, Botol @ 100 ml', 'Membantu memperbaiki sistem imun (kekebalan tubuh), membantu merangsang tubuh memproduksi lebih banyak antibodi dan mengaktifkan sistem kekebalan tubuh agar daya tahan tubuh bekerja secara optimal ', 'Dexa Medica', 'Herbal', 40000, '-', 0),
(38, 'IMBOOST KIDS SIRUP 120 ML', '37e924cea8419389043a3274f2bc7349.jpg', 'CegahKorona', 'Anak di atas usia 6 tahun : 5 ', 'Sirup', 'Dikonsumsi sesudah makan', 'Tiap 5 ml mengandung : Echinacea Purpurea extract 250 mg, Zn Picolinate 5 mg\r\n', 'IMBOOST KIDS SIRUP merupakan suplemen daya tahan tubuh yang bersifat Imunostimulan yang berfungsi untuk menjaga kesehatan tubuh agar tidak mudah sakit. Suplemen ini mengandung Echinacea purpurea herb dry extract dan Zn Piccolinate yang bekerja cepat mengaktifkan sistem daya tahan tubuh namun tetap aman untuk dikonsumsi. Imboost akan bekerja langsung di sistem pertahanan tubuh kita dengan memperbanyak antibodi sehingga daya tahan tubuh lebih kuat melawan serangan virus. ', 'Dus, Botol @ 120 ml', 'Meningkatkan kekebalan tubuh. Sebagai terapi tambahan untuk menstimulasi/meningkatkan sistem imun pada pasien infeksi akut atau kronik.', 'Soho Industri Pharmasi', 'Vitamin & Supplement ', 50000, 'Hentikan pemakaian jika terjadi reaksi alergi. - Tidak dianjurkan untuk digunakan lebih dari 8 mingg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kode_pos` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `proses` int(11) NOT NULL,
  `id_m_p` int(11) NOT NULL,
  `harga_pengiriman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama_lengkap`, `telepon`, `alamat`, `tanggal`, `kota`, `kode_pos`, `kecamatan`, `kelurahan`, `provinsi`, `metode_pembayaran`, `email`, `id_user`, `quantity`, `total_harga`, `proses`, `id_m_p`, `harga_pengiriman`) VALUES
(1, 'rey', '895446454', 'kjgk', '2020-06-13', 'kjhk', '5466', '', 'pondok cabe', 'Jakarta', 'Treansfer Bank', 'rey@gmail.com', 7, 1, 10000, 1, 3, 30000),
(2, 'wanda Afifah', '895446454', 'kjgk', '2020-06-15', 'tangsel', '657', 'pamulang', 'pondok cabe', 'banten', 'Treansfer Bank', 'wandaafifah61@gmail.com', 8, 1, 10000, 1, 2, 20000),
(3, 'wanda Afifah', '895446454', 'kjgk', '2020-06-15', 'tangsel', '5466', 'pamulang', 'pondok cabe', 'Jakarta', 'Treansfer Bank', 'wandaafifah61@gmail.com', 8, 1, 10000, 1, 2, 20000),
(4, 'wanda Afifah', '895446454', 'pondok cabe udik ', '2020-06-16', '', '', '', '', '', 'Treansfer Bank', 'wandaafifah61@gmail.com', 8, 1, 10000, 1, 1, 25000),
(5, 'wanda Afifah', '895446454', 'pondok cabe udik ', '2020-06-17', '', '', '', '', '', 'Treansfer Bank', 'wandaafifah61@gmail.com', 8, 2, 70000, 0, 2, 20000),
(6, 'Nada Maulidya', '86753735', 'jl. serua rt. 06 rw.01 pondok cabe udik, pamulang.', '2020-06-17', 'Tangerang Selatan', '15418', 'Pamulang', 'Pondok Cabe', 'Banten', 'Treansfer Bank', 'nada@gmail.com', 10, 2, 20000, 1, 2, 20000),
(7, 'Nada Maulidya', '86753735', 'jl. serua rt. 06 rw.01 pondok cabe udik, pamulang.', '2020-06-19', '', '', '', '', '', 'Treansfer Bank', 'nada@gmail.com', 10, 2, 110000, 1, 3, 30000),
(8, 'Anwar', '895446454', 'bojonsoang no 4', '2020-06-19', '', '', '', '', '', 'Treansfer Bank', 'anwar@gmail.com', 11, 1, 32000, 1, 2, 20000),
(9, 'Anwar', '895446454', 'bojonsoang no 4', '2020-06-19', '', '', '', '', '', 'Treansfer Bank', 'anwar@gmail.com', 11, 2, 60000, 1, 2, 20000),
(10, 'Dwi', '2147483647', 'Jl. kayu putih no.9 rt 06 rw 01 pondok cabe udik, ', '2020-06-19', 'Tangerang Selatan', '154186', 'Pamulang', 'Pondok Cabe', 'Banten', 'Treansfer Bank', 'dwi@gmail.com', 12, 2, 20000, 1, 2, 20000),
(11, 'Dwi', '2147483647', 'Jl. kayu putih no.9 rt 06 rw 01 pondok cabe udik, ', '2020-06-19', 'Tangerang Selatan', '154186', 'Pamulang', 'pondok cabe', '', 'Treansfer Bank', 'dwi@gmail.com', 12, 2, 100000, 1, 2, 20000),
(12, 'qwe', 'Agung Pratama', 'Wisma Syafira, Pga, Jalan Telekomunikasi, Bojongsoang', '2020-06-25', 'Bojongsoang', '40288', 'dyk', 'bjs', 'bdg', 'Treansfer Bank', 'agungxpratama@gmail.com', 13, 1, 80000, 0, 1, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `rating` float NOT NULL,
  `id_obat` int(11) NOT NULL,
  `tgl_rating` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rating`, `rating`, `id_obat`, `tgl_rating`, `id_user`, `id_transaksi`, `comment`) VALUES
(1, 5, 18, '2020-06-13', 7, 1, 'mantappp'),
(2, 4, 18, '2020-06-16', 8, 3, 'mantap bgt'),
(3, 4, 18, '2020-06-17', 10, 5, 'sudah sampai'),
(4, 3, 19, '2020-06-19', 10, 6, 'bagus'),
(5, 5, 35, '2020-06-19', 11, 7, 'mantappp'),
(6, 2, 18, '2020-06-19', 11, 8, 'good'),
(7, 4, 18, '2020-06-19', 11, 8, 'guud'),
(8, 3, 18, '2020-06-19', 12, 9, 'Bagus'),
(9, 5, 19, '2020-06-26', 10, 6, 'bagus'),
(10, 5, 18, '2020-06-26', 10, 5, 'BAGUS');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id_report` int(11) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `resi` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pemesanan`, `tanggal`, `status`, `bukti`, `resi`, `bank`) VALUES
(1, 1, '2020-06-13', 3, '8d3341c1498f7ee96db415b4713a78b1.jpg', '6586', 'BRI'),
(2, 3, '2020-06-15', 3, 'bukti-transfer-ranto-jasa-skripsi-5-WA0011.jpg', '35454', 'BRI'),
(3, 2, '2020-06-16', 3, 'bukti-transfer-ranto-jasa-skripsi-5-WA0011.jpg', '35454', 'BCA'),
(4, 4, '2020-06-16', 1, 'bukti-transfer-ranto-jasa-skripsi-5-WA0011.jpg', '', 'BRI'),
(5, 6, '2020-06-17', 3, 'bukti-transfer-ranto-jasa-skripsi-5-WA0011.jpg', '645879', 'BCA'),
(6, 7, '2020-06-19', 3, 'a487ec0f54c94492d5b57c1ad5e2c985--transfer.jpg', '786456', 'BRI'),
(7, 8, '2020-06-19', 3, 'a487ec0f54c94492d5b57c1ad5e2c985--transfer.jpg', '645879', 'BRI'),
(8, 9, '2020-06-19', 3, 'a487ec0f54c94492d5b57c1ad5e2c985--transfer.jpg', '35454', 'BRI'),
(9, 10, '2020-06-19', 3, 'a487ec0f54c94492d5b57c1ad5e2c985--transfer.jpg', '8776876', 'BRI'),
(10, 11, '2020-06-19', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` int(12) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `alamat`, `telepon`, `email`) VALUES
(7, 'rey', 'kayu utih rt 04', 895446454, 'rey@gmail.com'),
(8, 'wanda Afifah', 'pondok cabe udik ', 895446454, 'wandaafifah61@gmail.com'),
(9, 'Zaniar Rachmi', 'jl kayu putih no 9, Pondok Cabe Udik, Pamulang', 876534257, 'zaniar@gmail.com'),
(10, 'Nada Maulidya', 'jl. serua rt. 06 rw.01 pondok cabe udik, pamulang.', 86753735, 'nada@gmail.com'),
(11, 'Anwar', 'bojonsoang no 4', 895446454, 'anwar@gmail.com'),
(12, 'Dwi', 'Jl. kayu putih no.9 rt 06 rw 01 pondok cabe udik, ', 2147483647, 'dwi@gmail.com'),
(13, 'qwe', 'qwe', 2147483647, 'qwe@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id_favorite`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`db_keranjang`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_transaksi` (`id_pemesanan`);

--
-- Indexes for table `keranjang2`
--
ALTER TABLE `keranjang2`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_transaksi` (`id_pemesanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `metode_pengiriman`
--
ALTER TABLE `metode_pengiriman`
  ADD PRIMARY KEY (`id_m_p`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id_favorite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `db_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `keranjang2`
--
ALTER TABLE `keranjang2`
  MODIFY `id_keranjang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `metode_pengiriman`
--
ALTER TABLE `metode_pengiriman`
  MODIFY `id_m_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `keranjang2`
--
ALTER TABLE `keranjang2`
  ADD CONSTRAINT `keranjang2_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `rating_ibfk_3` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
