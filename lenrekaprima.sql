-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 06:49 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lenrekaprima`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(30) NOT NULL,
  `password_admin` varchar(64) NOT NULL,
  `nama_admin` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `username_admin`, `password_admin`, `nama_admin`) VALUES
(1, '12154388', '467bae90b19ee6eb379a749cb924f726', 'Noval Habibi'),
(2, 'noval', 'c4ca4238a0b923820dcc509a6f75849b', 'Noval');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `nama_client` varchar(100) NOT NULL,
  `icon_client` varchar(100) NOT NULL,
  `link_client` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `nama_client`, `icon_client`, `link_client`) VALUES
(8, 'Akademi Perkeretaapian Indonesia', './uploads/clients/akademi-perkeretaapian-indonesia.png', 'https://api.ac.id/'),
(7, 'Angkasapura', './uploads/clients/angkasapura.png', 'https://ap1.co.id/id'),
(13, 'Egis', './uploads/clients/egis.png', 'egis.com'),
(14, 'Kemenhub2', './uploads/clients/kemenhub2.png', 'Kemenhub2.com'),
(15, 'PT. Len', './uploads/clients/pt-len.png', 'https://www.len.co.id/'),
(16, 'LRS', './uploads/clients/lrs.png', 'lrs.com'),
(17, 'MRT Jakarta', './uploads/clients/mrt-jakarta.png', 'mrt./com');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi_gambar` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_project`, `gambar`, `deskripsi_gambar`) VALUES
(5, 6, './uploads/projects/mt3.jpg', 'enctype="multipart/form-data"'),
(8, 6, './uploads/projects/mt7.jpg', 'Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya.'),
(7, 3, './uploads/projects/mt11.jpg', 'di standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada ta');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_maintenances`
--

CREATE TABLE `kategori_maintenances` (
  `id_kategori_maintenance` int(3) NOT NULL,
  `nama_kategori_maintenance` varchar(100) DEFAULT NULL,
  `name_kategori_maintenance_en` varchar(100) DEFAULT NULL,
  `deskripsi_kategori_maintenance` text,
  `description_kategori_maintenance_en` text,
  `gambar_kategori_maintenance` varchar(100) DEFAULT NULL,
  `image_kategori_maintenance_en` varchar(100) DEFAULT NULL,
  `link_kategori_maintenance` varchar(100) DEFAULT NULL,
  `link_kategori_maintenance_en` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori_maintenances`
--

INSERT INTO `kategori_maintenances` (`id_kategori_maintenance`, `nama_kategori_maintenance`, `name_kategori_maintenance_en`, `deskripsi_kategori_maintenance`, `description_kategori_maintenance_en`, `gambar_kategori_maintenance`, `image_kategori_maintenance_en`, `link_kategori_maintenance`, `link_kategori_maintenance_en`) VALUES
(1, 'LEN SIGNALLING SYSTEMS', 'Eng LEN SIGNALLING SYSTEMS ', 'Signalling Systems adalah sistem yang digunakan untuk mengarahkan lalu lintas kereta api. Kereta bergerak di rel tetap, membuatnya secara unik rentan terhadap tabrakan.', 'Signaling Systems are systems used to direct railway traffic. The train moves on a fixed rail, making it uniquely vulnerable to collisions.', 'no_image.jpg', 'no_image.jpg', 'signalling_systems', 'signalling_systems_en'),
(2, 'Len Subtantions Systems', 'Eng LEN SUBSTATIONS SYSTEMS', 'Len Substaions Systems adalah bagian dari sistem pembangkit, transmisi, dan distribusi listrik. Gardu mengubah tegangan dari tinggi ke rendah, atau sebaliknya, atau melakukan salah satu dari beberapa fungsi penting lainnya.', 'Len Substaions Systems is a part of electricity generation, transmission and distribution systems. Substations change the voltage from high to low, or vice versa, or do one of several other important functions.', 'no_image.jpg', 'no_image.jpg', 'substations_systems', 'substations_systems_en'),
(3, 'LEN TELECOMMUNICATION SYSTEMS', 'Eng LEN TELECOMMUNICATION SYSTEMS', 'Signalling Systems adalah sistem yang digunakan untuk mengarahkan lalu lintas kereta api. Kereta bergerak di rel tetap, membuatnya secara unik rentan terhadap tabrakan. KAn', 'Len Telecommunication Systems is a collection of nodes and links to activate telecommunications. Telecommunications is communication at a distance using electrical signals or electromagnetic waves.', 'no_image.jpg', 'no_image.jpg', 'telecommunication_systems', 'telecommunication_systems_en');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_maintenances_en`
--

CREATE TABLE `kategori_maintenances_en` (
  `id_kategori_maintenance_en` varchar(11) NOT NULL,
  `nama_kategori_maintenance_en` varchar(30) DEFAULT NULL,
  `deskripsi_kategori_maintenance_en` text,
  `header_image_en` varchar(100) DEFAULT NULL,
  `slug_kategori_maintenance_en` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_maintenances_en`
--

INSERT INTO `kategori_maintenances_en` (`id_kategori_maintenance_en`, `nama_kategori_maintenance_en`, `deskripsi_kategori_maintenance_en`, `header_image_en`, `slug_kategori_maintenance_en`) VALUES
('1', 'Substations Systems', 'Len Substaions Systems adalah bagian dari sistem pembangkit, transmisi, dan distribusi listrik. Gardu mengubah tegangan dari tinggi ke rendah, atau sebaliknya, atau melakukan salah satu dari beberapa fungsi penting lainnya.', './uploads/maintenances/SUBSTATIONS_SYSTEMS.jpg', '1'),
('2', 'Telecommunication Systems', 'Len Telecommunication Systems adalah kumpulan node dan tautan untuk mengaktifkan telekomunikasi. Telekomunikasi adalah komunikasi pada jarak jauh menggunakan sinyal listrik atau gelombang elektromagnetik.', './uploads/maintenances/TELECOMMUNICATION_SYSTEMS.jpg', '2'),
('3', 'SIGNALLING SYSTEMS Inggris', 'Signalling Systems adalah sistem yang digunakan untuk mengarahkan lalu lintas kereta api. Kereta bergerak di rel tetap, membuatnya secara unik rentan terhadap tabrakan.', NULL, '3'),
('4', 'SUBSTATIONS SYSTEMSX Inggris', 's a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n', './uploads/maintenances/SUBSTATIONS_SYSTEMSX.jpg', '4'),
('5d1192994fd', 'Kat Maintenance Inggris Edit', 'Kategori Maintenance Ing Edit', './uploads/maintenances/EnglishEdit.jpg', '5d1192994fd');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_maintenances_old`
--

CREATE TABLE `kategori_maintenances_old` (
  `id_kategori_maintenance` varchar(11) NOT NULL,
  `nama_kategori_maintenance` varchar(30) DEFAULT NULL,
  `deskripsi_kategori_maintenance` text,
  `header_image` varchar(100) DEFAULT NULL,
  `slug_kategori_maintenance` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_maintenances_old`
--

INSERT INTO `kategori_maintenances_old` (`id_kategori_maintenance`, `nama_kategori_maintenance`, `deskripsi_kategori_maintenance`, `header_image`, `slug_kategori_maintenance`) VALUES
('1', 'Substations Systems', 'Len Substaions Systems adalah bagian dari sistem pembangkit, transmisi, dan distribusi listrik. Gardu mengubah tegangan dari tinggi ke rendah, atau sebaliknya, atau melakukan salah satu dari beberapa fungsi penting lainnya.', './uploads/maintenances/SUBSTATIONS_SYSTEMS.jpg', '1'),
('2', 'Telecommunication Systems', 'Len Telecommunication Systems adalah kumpulan node dan tautan untuk mengaktifkan telekomunikasi. Telekomunikasi adalah komunikasi pada jarak jauh menggunakan sinyal listrik atau gelombang elektromagnetik.', './uploads/maintenances/TELECOMMUNICATION_SYSTEMS.jpg', '2'),
('3', 'SIGNALLING SYSTEMS Indonesia ', 'Signalling Systems adalah sistem yang digunakan untuk mengarahkan lalu lintas kereta api. Kereta bergerak di rel tetap, membuatnya secara unik rentan terhadap tabrakan.', NULL, '3'),
('4', 'SUBSTATIONS SYSTEMSX Indonesia', 's a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n', './uploads/maintenances/SUBSTATIONS_SYSTEMSX.jpg', '4'),
('5d1192994fd', 'Kat Maintenance Indonesia Edit', 'Kategori Maintenance Ind Edit', './uploads/maintenances/IndonesiaEdit.jpg', '5d1192994fd');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_projects`
--

CREATE TABLE `kategori_projects` (
  `id_kategori_project` varchar(11) NOT NULL,
  `nama_kategori_project` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_projects`
--

INSERT INTO `kategori_projects` (`id_kategori_project`, `nama_kategori_project`) VALUES
('1', 'urban'),
('2', 'Mainline'),
('5d0c42f97ae', 'Indonesia Kategori Project Edi');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_projects_en`
--

CREATE TABLE `kategori_projects_en` (
  `id_kategori_project_en` varchar(11) NOT NULL,
  `nama_kategori_project_en` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_projects_en`
--

INSERT INTO `kategori_projects_en` (`id_kategori_project_en`, `nama_kategori_project_en`) VALUES
('1', 'urban'),
('2', 'Mainline'),
('5d0c42f97ae', 'Inggris Kategori Project Edit');

-- --------------------------------------------------------

--
-- Table structure for table `maintenances`
--

CREATE TABLE `maintenances` (
  `id_maintenances` int(3) NOT NULL,
  `id_kategori_kategori_maintenance` int(3) DEFAULT NULL,
  `nama_maintenance` varchar(100) DEFAULT NULL,
  `name_maintenance_en` varchar(100) DEFAULT NULL,
  `deskripsi_maintenance` text,
  `description_maintenance_en` text,
  `gambar_maintenance` varchar(100) DEFAULT NULL,
  `image_maintenance_en` varchar(100) DEFAULT NULL,
  `link_maintenance` varchar(100) DEFAULT NULL,
  `link_maintenance_en` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maintenances`
--

INSERT INTO `maintenances` (`id_maintenances`, `id_kategori_kategori_maintenance`, `nama_maintenance`, `name_maintenance_en`, `deskripsi_maintenance`, `description_maintenance_en`, `gambar_maintenance`, `image_maintenance_en`, `link_maintenance`, `link_maintenance_en`) VALUES
(1, 3, 'LEN CTC', 'End LEN CTC', 'Len Centralized Traffic Control (CTC) adalah sistem terintegrasi untuk mengendalikan dan mengawasi sistem persinyalan dan atau jenis peralatan di stasiun dari stasiun pusat.', 'Len Centralized Traffic Control (CTC) is an integrated system for controlling and supervising signaling systems and or types of equipment at stations from the central station.', 'http://localhost/lenrekaprima/assets/media/image/len_ctc.jpg', 'http://localhost/lenrekaprima/assets/media/image/len_ctc.jpg', 'len_ctc', 'len_ctc_en'),
(2, 3, 'LEN LOCAL INTERFACE', 'End LEN LOCAL INTERFACE', 'Len Local Interface adalah operator antarmuka yang dapat terhubung ke berbagai sistem yang saling mengunci.', 'Len Local Interface is an operator interface that can connect to various interlocking systems.', 'http://localhost/lenrekaprima/assets/media/image/len_local_interface.jpg', 'http://localhost/lenrekaprima/assets/media/image/len_local_interface.jpg', 'len_local_interface', 'len_local_interface_en'),
(3, 1, 'LEN LED SIGNAL', 'End LEN LED SIGNAL', 'LED Signal adalah sistem pensinyalan yang memberi perintah kepada masinis berdasarkan warna cahaya yang aktif pada suatu waktu.', 'Signal LEDs are signaling systems that give commands to machinists based on the color of the active light at a time.', 'http://localhost/lenrekaprima/assets/media/image/len_led_signal.jpg', 'http://localhost/lenrekaprima/assets/media/image/len_led_signal.jpg', 'len_led_signal', 'len_led_signal_en'),
(4, 1, 'LEN MDP', 'End LEN MDP', 'Sistem persinyalan perlu didukung oleh catu daya yang optimal, salah satunya adalah persinyalan panel distribusi, atau Main Distribution Panel (MDP).', 'Signaling systems need to be supported by an optimal power supply, one of which is the distribution panel signaling, or Main Distribution Panel (MDP).', 'http://localhost/lenrekaprima/assets/media/image/len_mdp.jpg', 'http://localhost/lenrekaprima/assets/media/image/len_mdp.jpg', 'len_mdp', 'len_mdp_en');

-- --------------------------------------------------------

--
-- Table structure for table `maintenances_en`
--

CREATE TABLE `maintenances_en` (
  `id_maintenance_en` varchar(11) NOT NULL,
  `id_kategori_maintenance_en` varchar(11) DEFAULT NULL,
  `nama_maintenance_en` varchar(100) NOT NULL,
  `gambar_maintenance_en` varchar(64) NOT NULL,
  `deskripsi_maintenance_en` text NOT NULL,
  `link_maintenance_en` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenances_en`
--

INSERT INTO `maintenances_en` (`id_maintenance_en`, `id_kategori_maintenance_en`, `nama_maintenance_en`, `gambar_maintenance_en`, `deskripsi_maintenance_en`, `link_maintenance_en`) VALUES
('1', '1', 'English LEN VISUAL CONTROL PANEL', './uploads/maintenances/len-visual-control-panel.jpg', '<p> English Len Visual Control Panel (VCP) adalah panel yang mengontrol dan memantau gardu daya traksi secara lokal. Ini adalah layar sentuh yang dioperasikan berdasarkan HMI yang berjalan pada PC tertanam.</p>\r\n', 'en-len-visual-control-panel'),
('3', '2', 'English TELECOMMUNICATION RACK', './uploads/maintenances/telecommunication-rack.jpg', '<p>English Len Telecommunication Rack adalah solusi lengkap untuk mengirimkan data dan komunikasi suara antar stasiun.</p>', 'en-telecommunication-rack'),
('2', '1', 'English LEN SUBSTATIONS SYSTEMS', './uploads/maintenances/len-substations-systems.jpg', '<p>English Substaions Systems adalah bagian dari sistem pembangkit, transmisi, dan distribusi listrik. Gardu mengubah tegangan dari tinggi ke rendah, atau sebaliknya, atau melakukan salah satu dari beberapa fungsi penting lainnya.</p>', 'en-len-substations-systems'),
('5d119a969a4', '5d1192994fd', 'Maintenace Inggris Edit', './uploads/maintenances/codeigniter.jpg', 'Maintenace Ing Edit', 'maintenace-inggris-edit');

-- --------------------------------------------------------

--
-- Table structure for table `maintenances_old`
--

CREATE TABLE `maintenances_old` (
  `id_maintenance` varchar(11) NOT NULL,
  `id_kategori_maintenance` varchar(11) DEFAULT NULL,
  `nama_maintenance` varchar(100) NOT NULL,
  `gambar_maintenance` varchar(64) NOT NULL,
  `deskripsi_maintenance` text NOT NULL,
  `link_maintenance` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenances_old`
--

INSERT INTO `maintenances_old` (`id_maintenance`, `id_kategori_maintenance`, `nama_maintenance`, `gambar_maintenance`, `deskripsi_maintenance`, `link_maintenance`) VALUES
('1', '1', 'LEN VISUAL CONTROL PANEL', './uploads/maintenances/len-visual-control-panel.jpg', '<p>Len Visual Control Panel (VCP) adalah panel yang mengontrol dan memantau gardu daya traksi secara lokal. Ini adalah layar sentuh yang dioperasikan berdasarkan HMI yang berjalan pada PC tertanam.</p>\r\n', 'len-visual-control-panel'),
('3', '2', 'TELECOMMUNICATION RACK', './uploads/maintenances/telecommunication-rack.jpg', '<p>Len Telecommunication Rack adalah solusi lengkap untuk mengirimkan data dan komunikasi suara antar stasiun.</p>', 'telecommunication-rack'),
('2', '1', 'LEN SUBSTATIONS SYSTEMS', './uploads/maintenances/len-substations-systems.jpg', '<p>Len Substaions Systems adalah bagian dari sistem pembangkit, transmisi, dan distribusi listrik. Gardu mengubah tegangan dari tinggi ke rendah, atau sebaliknya, atau melakukan salah satu dari beberapa fungsi penting lainnya.</p>', 'len-substations-systems'),
('5d119a969a4', '5d1192994fd', 'Maintenace Indonesia Edit', './uploads/maintenances/coba1.jpg', 'Maintenace Indonesia Edit', 'maintenace-indonesia-edit');

-- --------------------------------------------------------

--
-- Table structure for table `manajemen`
--

CREATE TABLE `manajemen` (
  `id_manajemen` int(11) NOT NULL,
  `nama_manajemen` varchar(100) NOT NULL,
  `posisi_manajemen` varchar(100) NOT NULL,
  `gambar_manajemen` varchar(100) NOT NULL,
  `profile_manajemen` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manajemen`
--

INSERT INTO `manajemen` (`id_manajemen`, `nama_manajemen`, `posisi_manajemen`, `gambar_manajemen`, `profile_manajemen`) VALUES
(1, 'Asep Ukun Mulyana, S.T., IPM', 'Direktur', './uploads/manajemens/Direktur3.jpg', 'Lahir tanggal 20 Agustus 1977. Berdomisili di Bandung, Indonesia. Ditunjuk pertama kali sebagai Direktur PT Len Rekaprima Semesta sejak 2018.\r\n\r\nAsep Ukun Mulyana merupakan lulusan Teknik Material - ITB(S1) tahun 2001.\r\nSebelum menjabat sebagai Direktur PT Len Rekaprima Semesta, menjabat sebagai Vice President Project Operation & Procurement di PT Len Railway Systems sejak 2015 sampai 2018, sebagai Vice President Project Planning & Logistic 2013 sampai 2015, sebagai Senior Principle Designer Mechanical Design Engineering & Production sejak 2012 sampai 2013. Sebelumnya juga pernah menjadi Bagian Desain Sistem Proyek UB Sistem Transportasi di PT Len Industri (Presero) sejak 2009 sampai 2012.'),
(3, 'Dody Suprijadi, S.E.', 'VP Finance & Administration', './uploads/manajemens/dody-suprijadi-se.jpg', 'Lahir tanggal 28 Maret 1970. Berdomisili di Bandung, Indonesia. Memperoleh\r\n                                            gelar sarjana ekonomi di Universitas Pasundan pada tahun 1995.\r\n\r\n<br>Sebelum menjabat\r\n                                            sebagai VP Finance & Administration di PT Len Rekaprima Semesta sejak 2018,\r\n                                            menjabat sebagai Staff Ahli Direktur Teknologi & Operasi Bidang Pengembangan\r\n                                            Bisnis di PT Len Railway Systems sejak 2017 sampai 2018, menjabat sebagai\r\n                                            Senior Manager bagian Komersial UB. Sistem Transportasi tahun 2017, menjabat\r\n                                            sebagai Direktur Utama Dana Pensiun di PT Len Industri sejak 2016 sampai\r\n                                            2017, menjabat sebagai Manager Keuangan di PT Len Industri sejak 2013 sampai\r\n                                            2014.'),
(4, 'Bernardus Surya Perdana Gultom, S.T., IPP', 'EVP Maintenance & Operation', './uploads/manajemens/bernardus-surya-perdana-gultom-st-ipp.jpg', 'Lahir tanggal 4 September 1984. Berdomisili di Bandung, Indonesia.\r\n                                            Memperoleh gelar sarjana Teknik Elektro di STT Telkom pada tahun 2006.\r\n\r\n<br>Sebelum\r\n                                            dipercaya sebagai Executive Vice President Maintenance And Operation di PT\r\n                                            Len Rekaprima Semesta 2018, menjabat sebagai Manager Maintenance &\r\n                                            Aftersales Service di PT Len Railway Systems 2016 sampai 2018, sebagai\r\n                                            Senior Testing Engineer di PT Railway Systems sejak 2012 sampai 2016. Ia\r\n                                            juga pernah mengerjakan Jasa Konstruksi dan Instalasi System Persinyalan\r\n                                            Elektrik (SIL) St. Kisaran, St. Tarahan, St. Tegal-Pekalongan di PT Len\r\n                                            Industri (Persero) tahun 2011.'),
(5, 'Elieser Alexson P.M., Ir', 'VP Marketing & Bisnis Development', './uploads/manajemens/elieser-alexson-pm-ir.jpg', 'Lahir tanggal 24 Juli 1964. Berdomisili di Bandung, Indonesia. Memperoleh\r\n                                            gelar sarjana Teknik Telekomunikasi ITB tahun 1991.\r\n\r\n<br>Ia menjabat\r\n                                            sebagai Vice President Marketing & Bisnis Development di PT Len Rekaprima\r\n                                            Semesta sejak 2018.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` varchar(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_posting` datetime NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `judul`, `slug`, `deskripsi`, `gambar`, `tgl_posting`, `id_admin`) VALUES
('2', 'Len Rekaprima Promosikan Produk Unggulan di NAPEC', 'len-rekaprima-promosikan-produk-unggulan-di-napec', '<p>news edit</p>\r\n', './uploads/news/len-rekaprima-promosikan-produk-unggulan-di-napec.jpg', '2019-05-13 00:00:00', 1),
('4', 'Len Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 Hari', 'len-rekaprima-enduro-touring-go-out-adventure-sabang-gresik-5000-km-29-hari', '<p>Len Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 Hari</p>\r\n', './uploads/news/len-rekaprima-enduro-touring-go-out-adventure-sabang-gresik-5000-km-29-hari.jpg', '2019-05-14 00:00:00', 1),
('5', '8 Jam di Laut, Begini Cara Kirim BBM ke Daerah Longsor Labuan Bajo', '8-jam-di-laut-begini-cara-kirim-bbm-ke-daerah-longsor-labuan-bajo', '<p>Mengapa kita menggunakannya? Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti &quot;Bagian isi disini, bagian isi disini&quot;, sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat &quot;Lorem Ipsum&quot; akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', './uploads/news/8-jam-di-laut-begini-cara-kirim-bbm-ke-daerah-longsor-labuan-bajo.jpg', '2019-05-23 00:00:00', 1),
('6', 'Dari mana saya bisa mendapatkannya?', 'dari-mana-saya-bisa-mendapatkannya', '<p>da banyak variasi tulisan Lorem Ipsum yang tersedia, tapi kebanyakan sudah mengalami perubahan bentuk, entah karena unsur humor atau kalimat yang diacak hingga nampak sangat tidak masuk akal. Jika anda ingin menggunakan tulisan Lorem Ipsum, anda harus yakin tidak ada bagian yang memalukan yang tersembunyi di tengah naskah tersebut. Semua generator Lorem Ipsum di internet cenderung untuk mengulang bagian-bagian tertentu. Karena itu inilah generator pertama yang sebenarnya di internet. Ia menggunakan kamus perbendaharaan yang terdiri dari 200 kata Latin, yang digabung dengan banyak contoh struktur kalimat untuk menghasilkan Lorem Ipsun yang nampak masuk akal. Karena itu Lorem Ipsun yang dihasilkan akan selalu bebas dari pengulangan, unsur humor yang sengaja dimasukkan, kata yang tidak sesuai dengan karakteristiknya dan lain sebagain</p>\r\n', './uploads/news/dari-mana-saya-bisa-mendapatkannya.jpg', '2019-05-23 00:00:00', 2),
('5d11a4a8987', 'News Indo Edit', 'news-indo-edit', '<p>News Indo Edit</p>\r\n', './uploads/news/codeigniter.jpg', '2019-06-25 06:06:52', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news_en`
--

CREATE TABLE `news_en` (
  `id_news_en` varchar(11) NOT NULL,
  `judul_en` varchar(100) NOT NULL,
  `slug_en` varchar(100) NOT NULL,
  `deskripsi_en` text NOT NULL,
  `gambar_en` varchar(100) NOT NULL,
  `tgl_posting_en` datetime NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_en`
--

INSERT INTO `news_en` (`id_news_en`, `judul_en`, `slug_en`, `deskripsi_en`, `gambar_en`, `tgl_posting_en`, `id_admin`) VALUES
('2', 'Len Rekaprima Promosikan Produk Unggulan di NAPEC', 'len-rekaprima-promosikan-produk-unggulan-di-napec', '<p>news edit</p>\r\n', './uploads/news/len-rekaprima-promosikan-produk-unggulan-di-napec.jpg', '2019-05-13 00:00:00', 1),
('4', 'Len Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 Hari', 'len-rekaprima-enduro-touring-go-out-adventure-sabang-gresik-5000-km-29-hari', '<p>Len Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 HariLen Rekaprima Enduro Touring Go Out & Adventure Sabang – Gresik, 5000 Km 29 Hari</p>\r\n', './uploads/news/len-rekaprima-enduro-touring-go-out-adventure-sabang-gresik-5000-km-29-hari.jpg', '2019-05-14 00:00:00', 1),
('5', '8 Jam di Laut, Begini Cara Kirim BBM ke Daerah Longsor Labuan Bajo', '8-jam-di-laut-begini-cara-kirim-bbm-ke-daerah-longsor-labuan-bajo', '<p>Mengapa kita menggunakannya? Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti &quot;Bagian isi disini, bagian isi disini&quot;, sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat &quot;Lorem Ipsum&quot; akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', './uploads/news/8-jam-di-laut-begini-cara-kirim-bbm-ke-daerah-longsor-labuan-bajo.jpg', '2019-05-23 00:00:00', 1),
('6', 'Dari mana saya bisa mendapatkannya?', 'dari-mana-saya-bisa-mendapatkannya', '<p>da banyak variasi tulisan Lorem Ipsum yang tersedia, tapi kebanyakan sudah mengalami perubahan bentuk, entah karena unsur humor atau kalimat yang diacak hingga nampak sangat tidak masuk akal. Jika anda ingin menggunakan tulisan Lorem Ipsum, anda harus yakin tidak ada bagian yang memalukan yang tersembunyi di tengah naskah tersebut. Semua generator Lorem Ipsum di internet cenderung untuk mengulang bagian-bagian tertentu. Karena itu inilah generator pertama yang sebenarnya di internet. Ia menggunakan kamus perbendaharaan yang terdiri dari 200 kata Latin, yang digabung dengan banyak contoh struktur kalimat untuk menghasilkan Lorem Ipsun yang nampak masuk akal. Karena itu Lorem Ipsun yang dihasilkan akan selalu bebas dari pengulangan, unsur humor yang sengaja dimasukkan, kata yang tidak sesuai dengan karakteristiknya dan lain sebagain</p>\r\n', './uploads/news/dari-mana-saya-bisa-mendapatkannya.jpg', '2019-05-23 00:00:00', 2),
('5d11a4a8987', 'News Eng Edit', 'news-eng-edit', '<p>News Eng Edit</p>\r\n', './uploads/news/coba1.jpg', '2019-06-25 06:06:52', 2);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id_project` varchar(11) NOT NULL,
  `id_kategori_project` varchar(11) NOT NULL,
  `nama_project` varchar(100) NOT NULL,
  `gambar_project` varchar(64) NOT NULL,
  `deskripsi_project` text NOT NULL,
  `link_project` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id_project`, `id_kategori_project`, `nama_project`, `gambar_project`, `deskripsi_project`, `link_project`) VALUES
('1', '1', 'NORTH LINE DOUBLE TRACK | 2014-2016', 'IMG_5680.jpg', 'NORTH LINE DOUBLE TRACK | 2014-2016', 'www.project1.com'),
('2', '2', 'DOUBLE TRACK | 2015-2016', 'IMG_5589.jpg', 'DOUBLE TRACK | 2015-2016', 'training2.com'),
('3', '2', 'DOUBLE - DOUBLE TRACK | 2017 - Until Now', 'IMG_8350.JPG', 'DOUBLE - DOUBLE TRACK | 2017 - Until Now', 'double-double-track-2017-until-now'),
('4', '1', 'DOUBLE TRACK | 2014-2015', 'IMG_5566.jpg', '<p>DOUBLE TRACK | 2014-2015</p>\r\n', 'double-track-2014-2015'),
('6', '1', 'APMS SKYTRAIN', './uploads/projects/apms-skytrain.jpg', '<p>APMS (Automated People Mover System) Skytrain atau KA Layang yang beroperasi secara otomatis yang menghubungkan antar terminal 1 sd 3 Bandara International Soekarno Hatta. Namun, saat ini masih dalam tahap pengembangan dan uji sistem driverless. Moda transportasi yang beroperasi untuk mengantarkan para penumpang ke setiap terminal, terdiri dari stasiun T1, stasiun T2, stasiun Bandara Soekarno Hatta dimana stasiun ini adalah stasiun penghubung untuk penumpang yang bertujuan ke Stasiun Batu Ceper, stasiun BNI City dan Manggarai, dan juga stasiun T3 di Bandara International Soekarno Hatta. PT. Len Rekaprima Semesta selain memiliki pekerjaan perawatan sarana dan prasarana, PT. Len Rekaprima Semesta merupakan operator untuk mengoperasikan semua aktifitas KA Layang. Operasi yang dilakukan secara terpusat pada ruang Operation Control Center atau yang kita kenal pusat kendali. Hampir satu tahun lebih PT. Len Rekaprima Semesta memberikan pelayanan perjalanan para penumpang yang menghubungkan antar terminal di Bandara International Soekarno Hatta serta merawat semua peralatan persinyalan, telekomunikasi, sistem power/traksi, power rail, Platform Screen Door (PSD) dan sarana yang merupakan asset PT. Angkasa Pura 2.</p>\r\n', 'apms-skytrain'),
('26', '2', 'Perocbaan 1 line', './uploads/projects/perocbaan-1-edit1.jpg', '<p>1Perocbaan 1 edit</p>\r\n\r\n<figure class="easyimage easyimage-full"><img alt="" sizes="100vw" src="https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/c98907bdd1bd5275540e826627b7e614ea952407566ee3ae.jpg" srcset="https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/c98907bdd1bd5275540e826627b7e614ea952407566ee3ae.jpg/w_80 80w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/c98907bdd1bd5275540e826627b7e614ea952407566ee3ae.jpg/w_160 160w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/c98907bdd1bd5275540e826627b7e614ea952407566ee3ae.jpg/w_240 240w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/c98907bdd1bd5275540e826627b7e614ea952407566ee3ae.jpg/w_320 320w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/c98907bdd1bd5275540e826627b7e614ea952407566ee3ae.jpg/w_400 400w" width="400" />\r\n<figcaption>sadfghjklasdfghjksadfghjklasdfghjksadfghjklasdfghjksadfghjklasdfghjksadfghjklasdfghjksadfghjklasdfghjksadfghjklasdfghjk</figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure class="easyimage easyimage-full"><img alt="" sizes="100vw" src="https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/1d30b63c023a7c58957484545bcceb6177917432d1fe123b.jpg" srcset="https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/1d30b63c023a7c58957484545bcceb6177917432d1fe123b.jpg/w_80 80w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/1d30b63c023a7c58957484545bcceb6177917432d1fe123b.jpg/w_160 160w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/1d30b63c023a7c58957484545bcceb6177917432d1fe123b.jpg/w_240 240w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/1d30b63c023a7c58957484545bcceb6177917432d1fe123b.jpg/w_320 320w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/1d30b63c023a7c58957484545bcceb6177917432d1fe123b.jpg/w_400 400w" width="400" />\r\n<figcaption>dsfghjkjlk;fhdfhdfh</figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>\r\n', 'perocbaan-1-line'),
('34', '2', 'double track kedung banteng - madiun', './uploads/projects/double-track-kedung-banteng-madiun.jpg', '<p>Pekerjaan perawatan fasiitas operasi di Double Track Kedung Banteng &ndash; Madiun salah satu pekerjaan perawatan PT. Len Rekaprima Semesta mendatang. Direncanakan pada tahun 2020 untuk memulai pekerjaan perawatan. Beberapa stasiun yang akan dilakukan pekerjaan perawatan sebagai berikut :</p>\r\n\r\n<ol>\r\n	<li>Stasiun Walikukun</li>\r\n	<li>Stasiun Paron</li>\r\n	<li>Stasiun Kedunggalar</li>\r\n	<li>Stasiun Geneng</li>\r\n	<li>Stasiun Barat</li>\r\n	<li>Stasiun Madiun</li>\r\n</ol>', 'double-track-kedung-banteng-madiun'),
('35', '2', 'double track baturaja - martapura', './uploads/projects/double-track-baturaja-martapura.jpg', '<p>Pekerjaan perawatan fasilitas operasi di Double Track Baturaja &ndash; Martapura mulai per Mei 2018 setelah serah terima pekerjaan proyek instalasi selesai dan saat ini masih dilakukannya pekerjaan perawatan hingga tahun 2020. Stasiun-stasiun yang dilakukan pekerjaan perawatan fasilitas operasi diantaranya adalah :</p>\r\n\r\n<ol>\r\n	<li>Stasiun Baturaja</li>\r\n	<li>Stasiun Gilas</li>\r\n	<li>Stasiun Sungai Tuha</li>\r\n	<li>Stasiun Air Tuba</li>\r\n	<li>Stasiun Sepancar</li>\r\n	<li>Stasiun Kemelak</li>\r\n	<li>Stasiun Martapura</li>\r\n</ol>', 'double-track-baturaja-martapura'),
('36', '2', 'double track cirebon - surabaya', './uploads/projects/double-track-cirebon-surabaya.jpg', '<p>Pekerjaan perawatan fasilitas operasi di Double Track Cirebon &ndash; Surabaya saat ini sudah selesai, dimulai pada tahun 2014 hingga 2016 kurang lebih sebanyak 55 stasiun dan 11 intermediate blok yang sudah dilakukan perawatan. Ini menjadi titik awal kami membangun divisi Maintenance di PT. Len Railway System.</p>\r\n\r\n<p>&nbsp;</p>', 'double-track-cirebon-surabaya'),
('37', '2', 'double track purwokerto - kroya', './uploads/projects/double-track-purwokerto-kroya.jpg', '<p>Pekerjaan perawatan fasilitas operasi di Double Track Purwokerto &ndash; Kroya dilakukan parsial sesuai serah terima proyek instalasi. Pekerjaan perawatan fasilitas operasi yang pertama dilakukan per bulan Februari 2019 adalah stasiun Randegan dan stasiun Kebasen sedangkan pekerjaan perawatan fasilitas operasi berikutnya sesuai serah terima proyek instalasi per bulan Maret 2019 adalah stasiun Purwokerto dan stasiun Notog. Tidak hanya perawatan pada masing-masing stasiun di lintas Double Track Purwokerto &ndash; Kroya, tetapi juga dikarenakan pengaktifan CTC (Centralized Train Control) di pusat kendali operasi kereta api milik PT. Kereta Api Indonesia per bulan akhir April 2019.</p>', 'double-track-purwokerto-kroya'),
('5d118840f11', '5d0c42f97ae', 'Coba upload Indonesia', './uploads/projects/apms-skytrain_-_Copy.jpg', '$foto', 'coba-upload-indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `projects_en`
--

CREATE TABLE `projects_en` (
  `id_project_en` varchar(11) NOT NULL,
  `id_kategori_project` varchar(11) NOT NULL,
  `nama_project_en` varchar(100) NOT NULL,
  `gambar_project_en` varchar(64) NOT NULL,
  `deskripsi_project_en` text NOT NULL,
  `link_project_en` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects_en`
--

INSERT INTO `projects_en` (`id_project_en`, `id_kategori_project`, `nama_project_en`, `gambar_project_en`, `deskripsi_project_en`, `link_project_en`) VALUES
('1', '1', 'NORTH LINE DOUBLE TRACK | 2014-2016', 'IMG_5680.jpg', 'NORTH LINE DOUBLE TRACK | 2014-2016', 'www.project1.com'),
('2', '2', 'DOUBLE TRACK | 2015-2016', 'IMG_5589.jpg', 'DOUBLE TRACK | 2015-2016', 'training2.com'),
('3', '2', 'DOUBLE - DOUBLE TRACK | 2017 - Until Now', 'IMG_8350.JPG', 'DOUBLE - DOUBLE TRACK | 2017 - Until Now', 'double-double-track-2017-until-now'),
('4', '1', 'DOUBLE TRACK | 2014-2015', 'IMG_5566.jpg', '<p>DOUBLE TRACK | 2014-2015</p>\r\n', 'double-track-2014-2015'),
('6', '1', 'APMS SKYTRAIN', './uploads/projects/apms-skytrain.jpg', '<p>APMS (Automated People Mover System) Skytrain atau KA Layang yang beroperasi secara otomatis yang menghubungkan antar terminal 1 sd 3 Bandara International Soekarno Hatta. Namun, saat ini masih dalam tahap pengembangan dan uji sistem driverless. Moda transportasi yang beroperasi untuk mengantarkan para penumpang ke setiap terminal, terdiri dari stasiun T1, stasiun T2, stasiun Bandara Soekarno Hatta dimana stasiun ini adalah stasiun penghubung untuk penumpang yang bertujuan ke Stasiun Batu Ceper, stasiun BNI City dan Manggarai, dan juga stasiun T3 di Bandara International Soekarno Hatta. PT. Len Rekaprima Semesta selain memiliki pekerjaan perawatan sarana dan prasarana, PT. Len Rekaprima Semesta merupakan operator untuk mengoperasikan semua aktifitas KA Layang. Operasi yang dilakukan secara terpusat pada ruang Operation Control Center atau yang kita kenal pusat kendali. Hampir satu tahun lebih PT. Len Rekaprima Semesta memberikan pelayanan perjalanan para penumpang yang menghubungkan antar terminal di Bandara International Soekarno Hatta serta merawat semua peralatan persinyalan, telekomunikasi, sistem power/traksi, power rail, Platform Screen Door (PSD) dan sarana yang merupakan asset PT. Angkasa Pura 2.</p>\r\n', 'apms-skytrain'),
('26', '2', 'Perocbaan 1 line', './uploads/projects/perocbaan-1-edit1.jpg', '<p>1Perocbaan 1 edit</p>\r\n\r\n<figure class="easyimage easyimage-full"><img alt="" sizes="100vw" src="https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/c98907bdd1bd5275540e826627b7e614ea952407566ee3ae.jpg" srcset="https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/c98907bdd1bd5275540e826627b7e614ea952407566ee3ae.jpg/w_80 80w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/c98907bdd1bd5275540e826627b7e614ea952407566ee3ae.jpg/w_160 160w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/c98907bdd1bd5275540e826627b7e614ea952407566ee3ae.jpg/w_240 240w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/c98907bdd1bd5275540e826627b7e614ea952407566ee3ae.jpg/w_320 320w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/c98907bdd1bd5275540e826627b7e614ea952407566ee3ae.jpg/w_400 400w" width="400" />\r\n<figcaption>sadfghjklasdfghjksadfghjklasdfghjksadfghjklasdfghjksadfghjklasdfghjksadfghjklasdfghjksadfghjklasdfghjksadfghjklasdfghjk</figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure class="easyimage easyimage-full"><img alt="" sizes="100vw" src="https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/1d30b63c023a7c58957484545bcceb6177917432d1fe123b.jpg" srcset="https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/1d30b63c023a7c58957484545bcceb6177917432d1fe123b.jpg/w_80 80w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/1d30b63c023a7c58957484545bcceb6177917432d1fe123b.jpg/w_160 160w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/1d30b63c023a7c58957484545bcceb6177917432d1fe123b.jpg/w_240 240w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/1d30b63c023a7c58957484545bcceb6177917432d1fe123b.jpg/w_320 320w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/1d30b63c023a7c58957484545bcceb6177917432d1fe123b.jpg/w_400 400w" width="400" />\r\n<figcaption>dsfghjkjlk;fhdfhdfh</figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>\r\n', 'perocbaan-1-line'),
('34', '2', 'double track kedung banteng - madiun', './uploads/projects/double-track-kedung-banteng-madiun.jpg', '<p>Pekerjaan perawatan fasiitas operasi di Double Track Kedung Banteng &ndash; Madiun salah satu pekerjaan perawatan PT. Len Rekaprima Semesta mendatang. Direncanakan pada tahun 2020 untuk memulai pekerjaan perawatan. Beberapa stasiun yang akan dilakukan pekerjaan perawatan sebagai berikut :</p>\r\n\r\n<ol>\r\n	<li>Stasiun Walikukun</li>\r\n	<li>Stasiun Paron</li>\r\n	<li>Stasiun Kedunggalar</li>\r\n	<li>Stasiun Geneng</li>\r\n	<li>Stasiun Barat</li>\r\n	<li>Stasiun Madiun</li>\r\n</ol>', 'double-track-kedung-banteng-madiun'),
('35', '2', 'double track baturaja - martapura', './uploads/projects/double-track-baturaja-martapura.jpg', '<p>Pekerjaan perawatan fasilitas operasi di Double Track Baturaja &ndash; Martapura mulai per Mei 2018 setelah serah terima pekerjaan proyek instalasi selesai dan saat ini masih dilakukannya pekerjaan perawatan hingga tahun 2020. Stasiun-stasiun yang dilakukan pekerjaan perawatan fasilitas operasi diantaranya adalah :</p>\r\n\r\n<ol>\r\n	<li>Stasiun Baturaja</li>\r\n	<li>Stasiun Gilas</li>\r\n	<li>Stasiun Sungai Tuha</li>\r\n	<li>Stasiun Air Tuba</li>\r\n	<li>Stasiun Sepancar</li>\r\n	<li>Stasiun Kemelak</li>\r\n	<li>Stasiun Martapura</li>\r\n</ol>', 'double-track-baturaja-martapura'),
('36', '2', 'double track cirebon - surabaya', './uploads/projects/double-track-cirebon-surabaya.jpg', '<p>Pekerjaan perawatan fasilitas operasi di Double Track Cirebon &ndash; Surabaya saat ini sudah selesai, dimulai pada tahun 2014 hingga 2016 kurang lebih sebanyak 55 stasiun dan 11 intermediate blok yang sudah dilakukan perawatan. Ini menjadi titik awal kami membangun divisi Maintenance di PT. Len Railway System.</p>\r\n\r\n<p>&nbsp;</p>', 'double-track-cirebon-surabaya'),
('37', '2', 'double track purwokerto - kroya', './uploads/projects/double-track-purwokerto-kroya.jpg', '<p>Pekerjaan perawatan fasilitas operasi di Double Track Purwokerto &ndash; Kroya dilakukan parsial sesuai serah terima proyek instalasi. Pekerjaan perawatan fasilitas operasi yang pertama dilakukan per bulan Februari 2019 adalah stasiun Randegan dan stasiun Kebasen sedangkan pekerjaan perawatan fasilitas operasi berikutnya sesuai serah terima proyek instalasi per bulan Maret 2019 adalah stasiun Purwokerto dan stasiun Notog. Tidak hanya perawatan pada masing-masing stasiun di lintas Double Track Purwokerto &ndash; Kroya, tetapi juga dikarenakan pengaktifan CTC (Centralized Train Control) di pusat kendali operasi kereta api milik PT. Kereta Api Indonesia per bulan akhir April 2019.</p>', 'double-track-purwokerto-kroya'),
('5d118840f11', '5d0c42f97ae', 'Coba upload Inggris', './uploads/projects/apms-skytrain.jpg', '$foto EN', 'coba-upload-inggris');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id_service` int(11) NOT NULL,
  `nama_service` varchar(100) NOT NULL,
  `gambar_service` varchar(100) NOT NULL,
  `deskripsi_service` text NOT NULL,
  `link_service` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id_service`, `nama_service`, `gambar_service`, `deskripsi_service`, `link_service`) VALUES
(1, 'Maintenance of OCC & SCADA System', './uploads/services/maintenance-of-occ-scada-system-edit.jpg', '<p>service ed</p>\r\n', 'maintenance-of-occ-scada-system'),
(2, 'Maintenance of Electric Propulsion System', './uploads/services/maintenance-of-electric-propulsion-system.png', '<p>Maintenance of Electric Propulsion System</p>', 'maintenance-of-electric-propulsion-system'),
(3, 'Railway Operation', './uploads/services/railway-operation.png', '<p>Railway Operation</p>', 'railway-operation'),
(4, 'Maintenance of Power, Third Rail & Substation System', './uploads/services/maintenance-of-power-third-rail-substation-system.jpg', '<p>Maintenance of Power, Third Rail &amp; Substation System</p>\r\n', 'maintenance-of-power-third-rail-substation-system');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `video_perusahaan` varchar(100) NOT NULL,
  `struktur_organisasi` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telpon` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `title`, `favicon`, `logo`, `visi`, `misi`, `video_perusahaan`, `struktur_organisasi`, `alamat`, `email`, `no_telpon`) VALUES
(1, 'PT. Len Rekaprima Semesta', './uploads/settings/Ampeross-Smooth-Uplay.ico', './uploads/settings/lrs-logo.png', 'Menjadi Perusahaan Operator dan Maintenance Perkeretaapian Nasional yang Handal', 'Membangun Rekaprima menjadi entitas bisnis baru yang dapat menjadi mitra bisnis terdepan dari pemilik infrastuktur perkeretaapian dalam meningkatkan produktifitas dan mobilitas masyarakat Indonesia dengan pengelolaan Operasi dan perawaran berkelas internasional dan handal', 'Video_Distorsi.MP4', './uploads/settings/struktur.png', 'Jl. Soekarno Hatta No 293, Bandung 40235', 'it@lenrekaprima.co.id', '123455');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` varchar(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` bit(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `judul`, `gambar`, `deskripsi`, `status`) VALUES
('26', 'AGILE', './uploads/sliders/Rekaprima_45.jpg', 'Menciptakan nilai tambah dengan orientasi komersial, mengambil keputusan berdasarkan prinsip-prinsip bisnis yang sehat.', b'1'),
('27', 'RESPONSIBLE', './uploads/sliders/responsible.jpg', 'Mampu berkompetisi dalam skala regional maupun internasional, mendorong pertumbuhan investasi, membangun budaya sadar biaya dan menghargai kinerja.', b'1'),
('25', 'MAINTAIN', './uploads/sliders/Rekaprima_47.jpg', 'Berperan dalam pembangunan ekonomi nasional, menjadi pelopor dalam reformasi Badan Usaha Milik Negara (BUMN), dan membangun kebanggaan bangsa. ', b'1'),
('28', 'TOTAL', './uploads/sliders/total.jpg', 'Berorientasi pada kepentingan pelanggan dan berkomitmen untuk memberikan pelayanan terbaik kepada pelanggan.', NULL),
('24', 'SUPPORT', './uploads/sliders/Rekaprima_43.jpg', 'Dikelola secara profesional, menghindari benturan kepentingan, tidak menoleransi suap, menjunjung tinggi kepercayaan dan integritas. Berpedoman pada asasasas tata kelola korporasi yang baik.', b'1'),
('5d11be4b676', 'Slider Indo Edit', './uploads/sliders/codeigniter.jpg', 'Slider Indo Edit Des', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_en`
--

CREATE TABLE `slider_en` (
  `id_slider_en` varchar(11) NOT NULL,
  `judul_en` varchar(100) NOT NULL,
  `gambar_en` varchar(100) NOT NULL,
  `deskripsi_en` text NOT NULL,
  `status_en` bit(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_en`
--

INSERT INTO `slider_en` (`id_slider_en`, `judul_en`, `gambar_en`, `deskripsi_en`, `status_en`) VALUES
('26', 'AGILE', './uploads/sliders/Rekaprima_45.jpg', 'Menciptakan nilai tambah dengan orientasi komersial, mengambil keputusan berdasarkan prinsip-prinsip bisnis yang sehat.', b'1'),
('27', 'RESPONSIBLE', './uploads/sliders/responsible.jpg', 'Mampu berkompetisi dalam skala regional maupun internasional, mendorong pertumbuhan investasi, membangun budaya sadar biaya dan menghargai kinerja.', b'1'),
('25', 'MAINTAIN', './uploads/sliders/Rekaprima_47.jpg', 'Berperan dalam pembangunan ekonomi nasional, menjadi pelopor dalam reformasi Badan Usaha Milik Negara (BUMN), dan membangun kebanggaan bangsa. ', b'1'),
('28', 'TOTAL', './uploads/sliders/total.jpg', 'Berorientasi pada kepentingan pelanggan dan berkomitmen untuk memberikan pelayanan terbaik kepada pelanggan.', NULL),
('24', 'SUPPORT', './uploads/sliders/Rekaprima_43.jpg', 'Dikelola secara profesional, menghindari benturan kepentingan, tidak menoleransi suap, menjunjung tinggi kepercayaan dan integritas. Berpedoman pada asasasas tata kelola korporasi yang baik.', b'1'),
('5d11be4b676', 'Slider Ing Edit', './uploads/sliders/coba1.jpg', 'Slider Ing Edit Des', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id_training` int(11) NOT NULL,
  `nama_training` varchar(100) NOT NULL,
  `gambar_training` varchar(64) NOT NULL,
  `deskripsi_training` text NOT NULL,
  `link_training` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id_training`, `nama_training`, `gambar_training`, `deskripsi_training`, `link_training`) VALUES
(1, 'Training 3 edit', './uploads/trainings/training-3-edit.jpg', '<p>Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti &quot;Bagian isi disini, bagian isi disini&quot;, sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat &quot;Lorem Ipsum&quot; akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)</p>\r\n', 'training-3-edit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `kategori_maintenances`
--
ALTER TABLE `kategori_maintenances`
  ADD PRIMARY KEY (`id_kategori_maintenance`);

--
-- Indexes for table `kategori_maintenances_en`
--
ALTER TABLE `kategori_maintenances_en`
  ADD PRIMARY KEY (`id_kategori_maintenance_en`);

--
-- Indexes for table `kategori_maintenances_old`
--
ALTER TABLE `kategori_maintenances_old`
  ADD PRIMARY KEY (`id_kategori_maintenance`);

--
-- Indexes for table `kategori_projects`
--
ALTER TABLE `kategori_projects`
  ADD PRIMARY KEY (`id_kategori_project`);

--
-- Indexes for table `kategori_projects_en`
--
ALTER TABLE `kategori_projects_en`
  ADD PRIMARY KEY (`id_kategori_project_en`);

--
-- Indexes for table `maintenances`
--
ALTER TABLE `maintenances`
  ADD PRIMARY KEY (`id_maintenances`),
  ADD KEY `id_kategori_kategori_maintenance` (`id_kategori_kategori_maintenance`);

--
-- Indexes for table `maintenances_en`
--
ALTER TABLE `maintenances_en`
  ADD PRIMARY KEY (`id_maintenance_en`),
  ADD UNIQUE KEY `id` (`id_maintenance_en`);

--
-- Indexes for table `maintenances_old`
--
ALTER TABLE `maintenances_old`
  ADD PRIMARY KEY (`id_maintenance`),
  ADD UNIQUE KEY `id` (`id_maintenance`);

--
-- Indexes for table `manajemen`
--
ALTER TABLE `manajemen`
  ADD PRIMARY KEY (`id_manajemen`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `news_en`
--
ALTER TABLE `news_en`
  ADD PRIMARY KEY (`id_news_en`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_project`),
  ADD UNIQUE KEY `id` (`id_project`);

--
-- Indexes for table `projects_en`
--
ALTER TABLE `projects_en`
  ADD PRIMARY KEY (`id_project_en`),
  ADD UNIQUE KEY `id` (`id_project_en`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_service`),
  ADD UNIQUE KEY `id` (`id_service`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `slider_en`
--
ALTER TABLE `slider_en`
  ADD PRIMARY KEY (`id_slider_en`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id_training`),
  ADD UNIQUE KEY `id` (`id_training`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kategori_maintenances`
--
ALTER TABLE `kategori_maintenances`
  MODIFY `id_kategori_maintenance` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `maintenances`
--
ALTER TABLE `maintenances`
  MODIFY `id_maintenances` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `manajemen`
--
ALTER TABLE `manajemen`
  MODIFY `id_manajemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `maintenances`
--
ALTER TABLE `maintenances`
  ADD CONSTRAINT `maintenances_ibfk_1` FOREIGN KEY (`id_kategori_kategori_maintenance`) REFERENCES `kategori_maintenances` (`id_kategori_maintenance`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
