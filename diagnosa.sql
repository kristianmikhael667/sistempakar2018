-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jan 2021 pada 17.51
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diagnosa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judulberita` varchar(300) NOT NULL,
  `subjudul` varchar(255) NOT NULL,
  `sekilas` varchar(2000) NOT NULL,
  `isiberita` varchar(6000) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judulberita`, `subjudul`, `sekilas`, `isiberita`, `foto`, `tanggal`, `waktu`) VALUES
(1, 'CEGAH KANKER OTAK', 'Penyakit yang Menaklukkan Agung Hercules', '        Kabar duka kembali datang dari dunia hiburan. Pada Kamis (1/8) kemarin, Komedian Agung Hercules baru saja meninggal dunia. Pria bernama asli Agung Santoso yang identik dengan tubuh kekar dan rambut gondrong ini ditaklukkan oleh kanker otak setelah berjuang lebih dari 1 tahun. Lalu, bagaimana cara mencegah kanker otak?        ', '<p><code>&nbsp; &nbsp;Menurut penelitian, kejadian kanker otak di seluruh dunia mencapai 3,4 per 100.000 penduduk dan dengan angka kematian mencapai 4 dari 100.000 penduduk per tahunnya. Selain itu, angka kematian pada kanker otak ditemukan lebih tinggi pada pria. Dalam dunia medis, tumor merupakan adanya massa atau jaringan yang tumbuh secara abnormal. Dalam hal ini, yaitu tumor yang tumbuh di jaringan otak. Tumor memang tidak selalu ganas, sebab 70 persen tumor otak adalah tumor yang jinak. Namun, jenis kanker otak yang menyerang Agung Hercules, yaitu glioblastoma, merupakan tumor ganas (kanker) derajat IV. Tips Cegah Kanker Otak Dengan mengetahui fakta tentang berbahayanya kanker otak, mungkin Anda akan merasa takut dengan penyakit ini. Namun, sebenarnya Anda tidak perlu khawatir karena pada dasarnya kanker disebabkan oleh banyak faktor. Faktor genetik, usia, jenis kelamin, riwayat penyakit memang sulit untuk dicegah, tapi ada juga faktor gaya hidup yang bisa Anda modifikasi agar kanker tidak mudah menyerang. </code></p>\r\n\r\n<p><code>Berikut adalah beberapa tips untuk mencegah kanker otak: </code></p>\r\n\r\n<ol>\r\n	<li><code>Pilih Makanan yang Baik Bisa dibilang, pola makan sehat saat ini tidak lagi menganut 4 Sehat 5 Sempurna, melainkan gizi lengkap dan seimbang. Anda perlu memenuhi kebutuhan karbohidrat, protein, lemak, mineral dan vitamin, tetapi dalam jumlah yang sesuai dan seimbang. Selain itu, hindari juga konsumsi makanan yang bersifat karsinogenik (memicu kanker), seperti makanan kaleng, daging olahan, dan bakar-bakaran. </code></li>\r\n	<li><code>Olahraga Rutin Olahraga rutin yang disarankan adalah minimal 30 menit, 3-5 kali dalam seminggu. Dengan olahraga yang teratur, Anda dapat membantu metabolisme sel menjadi lebih baik dan menghindari dari berbagai penyakit metabolik, seperti diabetes yang berhubungan dengan insulin. Selain itu, olahraga juga bisa membantu menjaga berat badan badan Anda. </code></li>\r\n	<li><code>Jaga Berat Badan Insulin diketahui sebagai salah satu sel yang mempromosikan sel kanker. Pada orang dengan berat badan berlebih atau obesitas, insulin menjadi resistan dan akan meningkat di dalam tubuh, sehingga risiko kanker pun akan meningkat. </code></li>\r\n	<li><code>Hindari Rokok dan Alkohol Zat dalam rokok dan alkohol diketahui bisa meningkatkan munculnya radikal bebas dalam tubuh, sehingga dapat memicu kanker. Namun tidak hanya pada perokok aktif, perokok pasif juga dapat terkena dampak dari kandungan radikal bebas asap rokok. </code></li>\r\n	<li><code>Istirahat yang Cukup Jika kurang istirahat, tanpa Anda sadari tubuh akan mengalami stres. Ketika stres terjadi, maka hormon stres yang dapat memicu radikal bebas akan meningkat di dalam tubuh. </code></li>\r\n	<li><code>Rutin periksa Kesehatan Tindakan ini merupakan tindakan yang penting karena salah satu pencegahan kanker adalah dengan deteksi dini. Anda bisa mendeteksi dini suatu kanker tentu jika melakukan pemeriksaan kesehatan secara rutin. Gejala kanker otak yang umum adalah nyeri kepala, mual, muntah menyembur, penurunan fungsi neurologis seperti lumpuh, gangguan kognitif, dan kejang. Jika Anda mengalami gejala ini, maka segera periksakan ke dokter. Selain menyisakan duka bagi para keluarga, sahabat, dan penggemarnya, meninggalnya Agung Hercules juga harus membuat siapa pun waspada terhadap kanker otak. Mencegah kanker otak bisa Anda mulai dengan menjalankan pola hidup sehat seperti tips di atas. Bukan hanya kanker otak yang bisa dicegah, tapi juga kanker lainnya. Deteksi dini juga merupakan kunci agar gejala kanker dapat segera ditangani. [MS/ RVS]</code></li>\r\n</ol>\r\n', '4932ab66ba2529a00967d08bc3142563.jpg', '2020-09-24', '14:38:00'),
(2, 'Kanker Darah', 'Mengenal Kanker Darah Seperti yang Diderita Ani SBY', '  Mantan Ibu Negara Ani Yudhoyono, istri Susilo Bambang Yudhoyono (SBY) diketahui jatuh sakit. Berdasar penyataan SBY, Ani mengidap kanker darah.  ', '  Dia diketahui mengidap kanker darah setelah menjalani medical treatment di Singapura. Saat ini, dia menjalani pengobatan dan perawatan yang intensif di University Hospital Singapura.\r\n\r\nSecara umum, ada tiga jenis kanker darah yang dikenal di dunia medis. Ketiganya adalah leukemia, myeloma, dan limfoma.\r\nLeukemia adalah kanker yang menyerang sel darah putih. Sedangkan limfoma adalah kanker darah yang menyerang kelenjar getah bening. Sementara myeloma merupakan kanker pada sel plasma.\r\n\r\nKanker darah sendiri merupakan jenis kanker yang menyerang jaringan pembentuk darah. Hal itu berakibat pada menurunnya sistem kekebalan tubuh. Secara tidak langsung, kanker darah juga menghambat kemampuan tubuh melawan infeksi.\r\n\r\nSetiap tipe kanker darah memiliki gejala dan juga penyebabnya masing-masing. Hanya saja, secara umum, kanker darah memiliki satu gejala yang nyaris sama.\r\n\r\nMengutip berbagai sumber, anemia adalah gejala paling umum dari kanker darah. Penyakit kanker darah juga bisa menyebabkan kelelahan ekstrem.\r\n\r\nOrang yang mengalami kanker darah juga bisa mengalami sesak napas, pucat, nyeri dada, sampai pusing\r\nSelain itu, pendarahan di hidung, gusi, luka, pendarahaan hebat saat menstruasi, dan lainnya. Penurunan berat badan melebihi lima persen tanpa diet atau olahraga juga bisa menjadi gejala kanker darah.\r\n\r\nPada beberapa kasus menemukan hal-hal seperti usia, faktor genetik, infeksi kronis, penekanan sistem kekebalan tubuh, paparan kemoterapi dan radiasi, serta kelainan darah menjadi beberapa faktor risiko yang memicu timbulnya kanker darah.\r\n\r\nKonsultan Hematologi Parkway Cancer Center, Colin Phipps Diong menjelaskan kanker darah memang merupakan penyakit genetik tapi tidak diturunkan oleh orang tua kepada anaknya.\r\n\r\n\"Ini bukan salah orang tua. Tidak, penyakit ini tidak diturunkan dari orang tua kepada anaknya. Penderita yang hamil, bayinya akan baik-baik saja. Tidak seperti jenis kanker lain,\" kata Phipps.\r\n\r\nPhipps menyebut perubahan gen pada penderita kanker darah terjadi secara spontan dan tiba-tiba. Perubahan ini tidak diturunkan, melainkan terjadi ketika sudah dikembangkan dalam tubuh.\r\n\r\nHingga saat ini, tak diketahui secara pasti apa yang menyebabkan terjadinya perubahan sel darah menjadi sel kanker itu. Beberapa penelitian mengaitkan dengan beberapa faktor seperti lingkungan, pola makan dan stres.\r\n\r\n\"Kanker darah tidak bisa dikaitkan dengan hal lain seperti merokok pada kanker paru atau alkohol pada liver,\" ujar Phipps.\r\n\r\nSecara umum, risiko terkena kanker darah akan meningkat seiring bertambahnya usia. Namun, ada pengecualian untuk kanker leukimia limfoblastik yang kebanyakan menyerang anak-anak.  ', '005bb9f3a07173354a2fecd746804b72.jpeg', '2020-09-15', '05:03:00'),
(3, 'Perbedaan Gejala Kanker Usus Besar Berdasarkan Letak Kanker', 'Gejala kanker kolorektal yang ditimbulkan dapat berbeda tergantung lokasi kanker.', '  Dokter spesialis bedah konsultan bedah digestif RSPAD Gatot Soebroto Abdul Hamid Rochanan, M.Kes menjelaskan tentang gejala kanker kolorektal atau kanker usus besar. Menurutnya, gejala yang ditimbulkan dapat berbeda tergantung lokasi kanker.  ', '  Langkah Deteksi Dini\r\nJika seseorang mengalami gejala-gejala tersebut, Abdul menyarankan untuk segera menemui dokter. Pasien dapat menceritakan berbagai keluhan yang dialami secara rinci.\r\n\r\n“Ceritakan jika ada tanda-tanda seperti diare kronis, badan lemas, terlihat pucat, atau buang air besar ada darah. Mohon segera periksa ke dokter, terutama yang buang air besar ada darah mohon minta untuk diperiksa.”\r\n\r\nIa menambahkan, di era pandemi COVID-19 setiap orang memang berusaha meminimalisasi kontak tubuh. Namun, jika ada gejala kanker usus maka perlu diusahakan untuk tetap diperiksa.\r\n\r\n“Karena pemeriksaan colok dubur itu sangat bermanfaat untuk mengetahui apakah itu ambeien atau tumor. Banyak pasien yang terlambat ke dokter itu karena salah pengobatan, malah mengobati ambeien selama 3 bulan dan ketika datang ke kita (dokter) kondisinya sudah menjadi parah.”\r\n\r\nAbdul juga menjelaskan hal yang membedakan ambeien dengan tumor usus. Jika seseorang mengidap ambeien, biasanya darah dari anus akan keluar setelah kotoran dan tidak disertai lendir. Sedang, tumor atau kanker usus ditandai dengan darah yang menempel dan keluar bersama kotoran disertai lendir.  ', '50e2ec9ce985df2a3e762df4f89609ff.jpg', '2020-08-30', '22:05:00'),
(4, '9 Gejala Kanker Serviks yang Harus Diwaspadai dan Cara Mencegahnya', 'Tips Pencegahan', '  serviks atau kanker leher rahim masih menjadi salah satu penyakit dengan kasus kematian tinggi. Menurut Globocan, terdapat 32.469 kasus baru kanker serviks di Indonesia pada tahun 2018, dengan angka kematian 18.279 per tahun. Hal inilah yang kemudian membuat gejala kanker serviks harus lebih diwaspadai agar bisa segera ditangani.   ', '  Nyeri perut dan pinggang bisa mengindikasikan gejala kanker serviks. Kondisi ini terjadi ketika kanker berkembang pada dinding adenosid rongga rahim. Gejala ini bisa datang sewaktu-waktu, terkadang bisa sangat nyeri setelah melakukan aktivitas seks.\r\n\r\nSementara bagi yang masih berusia subur, rasa nyeri ini bisa semakin kuat pada saat menstruasi datang. Selain perut dan pinggang, nyerinya bisa sampai ke punggung berulang. Pada kasus ini, kanker sudah sampai usus buntu dan harus sangat diwaspadai.\r\n\r\nBeberapa wanita pun akan mengalami aki membengkak dan nyeri. Nyeri ini bisa terjadi ketika sel kanker menekan pembuluh darah di panggul. Pada akhirnya, kondisi ini akan menghambat sirkulasi darah ke kaki. Hingga terjadi penimbunan cairan yang membuat kaki menjadi bengkak.\r\n\r\n  ', '739e22d363fcd4ea729d1463a722601f.jpg', '2020-09-11', '03:01:00'),
(5, 'Selain Chadwick Boseman, 7 Figur Ternama Dunia Ini Juga Wafat Lantaran Kanker', 'Hidup Avengers 2020', '              Chadwick Boseman berpose saat tiba di Oscar di Dolby Theatre di Los Angeles pada 4 Maret 2018. Aktor pemeran Black Panther ini meninggal dunia karena penyakit kanker usus, yang ia derita selama empat tahun. (AP Photo/Jordan Strauss)              ', '<p>Dukacita menyelimuti dunia hiburan Hollywood. Chadwick Boseman (43), yang tersohor sebagai pemeran Black Panther, wafat akibat penyakit kanker usus yang diidap selama empat tahun. Chadwick Boseman, yang selama ini merahasiakan penyakitnya, mengembuskan napas terakhir di rumahnya di Los Angeles, Amerika Serikat, pada 28 Agustus 2020 waktu setempat. Demikian seperti dikutip dari Deadline dan TMZ, Sabtu 29 Agustus 2020. Untuk diketahui, kanker adalah penyakit yang menyerang jutaan orang setiap tahun dan tanpa pandang bulu. Penyakit itu pun turut menyerang beberapa orang paling terkenal di dunia, tak terkecuali Chadwick Boseman.</p>\r\n', 'c6c8cacf4573285c36070c6ece631181.png', '2020-09-29', '13:11:00'),
(6, 'David Robert Jones', 'dikenal secara profesional sebagai David Bowie adalah seorang penyanyi-penulis lagu dan aktor Inggris.', '  David Robert Jones (8 Januari 1947 - 10 Januari 2016), dikenal secara profesional sebagai David Bowie adalah seorang penyanyi-penulis lagu dan aktor Inggris.  ', '  David Robert Jones (8 Januari 1947 - 10 Januari 2016), dikenal secara profesional sebagai David Bowie adalah seorang penyanyi-penulis lagu dan aktor Inggris.\r\n\r\nDia adalah tokoh terkemuka dalam industri musik dan dianggap sebagai salah satu musisi paling berpengaruh di abad ke-20. Ini diakui oleh para kritikus dan musisi, terutama untuk karya inovatifnya selama dekade 1970-an.\r\n\r\nPada 10 Januari 2016, penyanyi, penulis lagu, dan aktor Inggris David Bowie meninggal di rumahnya di Lafayette Street di New York City, Amerika Serikat, setelah menderita kanker hati selama 18 bulan. Dia meninggal dua hari setelah rilis album studio kedua puluh lima, Blackstar, yang bertepatan dengan ulang tahunnya yang ke-69.\r\n\r\nBowie didiagnosis menderita kanker hati pada pertengahan 2014.  ', '325625a4db0113a3cc9ae20e5b8815d0.jpg', '2020-08-30', '19:06:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `ids` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `namagejala` varchar(1000) NOT NULL,
  `kelompok_gejala_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`ids`, `kode`, `namagejala`, `kelompok_gejala_id`) VALUES
(89, 'G-01', 'Gangguan ingatan.', 3),
(90, 'G-02', 'Penglihatan hilang', 3),
(91, 'G-04', 'Nyeri Kepala', 3),
(92, 'G-05', 'Muntah atau Mual', 3),
(93, 'G-07', 'Kejang - Kejang', 3),
(94, 'G-03', 'Kesadaran Menurun', 4),
(95, 'G-06', 'Nyeri kepala semakin memburuk', 4),
(96, 'G-08', 'Kebingungan mental', 4),
(97, 'G-09', 'Nyeri kepala berat', 4),
(98, 'G-10', 'Lemah pada salah satu anggota badan', 4),
(99, 'G-11', 'Sering Lupa', 4),
(100, 'G-12', 'Mual muntah berlebihan', 4),
(101, 'G-13', 'Epilepsy atau ayan', 4),
(102, 'G-14', 'Perubahan drastis pada indera penglihatan', 4),
(103, 'G-15', 'Susah berbicara', 4),
(104, 'G-09', 'Keluarnya cairan dari puting', 3),
(105, 'G-10', 'Sakit kepala', 4),
(106, 'G-18', 'Siklus menstruasi irreguler atau amenorrhea (amenore)', 4),
(107, 'G-19', 'Disfungsi seksual pada pria', 4),
(108, 'G-20', 'Penglihatan ganda', 4),
(109, 'G-21', 'Tidak sadarkan diri', 4),
(110, 'G-22', 'Pilek', 4),
(111, 'G-23', 'Masalah pada indera penciuman', 4),
(112, 'G-24', 'Cushing’s syndrome', 4),
(113, 'G-25', 'Penurunan pendengaran', 3),
(114, 'G-26', 'Telinga berdengung / Tinitus', 4),
(115, 'G-27', 'Gangguan keseimbangan', 4),
(116, 'G-28', 'Gangguan sensasi pada wajah', 4),
(117, 'G-29', 'Vertigo', 4),
(118, 'G-30', 'Masalah koordinasi gerak tubuh.', 4),
(119, 'G-31', 'Perubahan mental muncul secara perlahan selama 1-2 tahun. ', 4),
(120, 'G-32', 'Susah tidur', 4),
(121, 'G-33', 'Masalah dengan penglihatan muncul secara perlahan selama 1-2 tahun.', 4),
(122, 'G-34', 'Sakit Kepala muncul secara perlahan selama 1-2 tahun. ', 4),
(123, 'G-35', 'Muntah dan mual muncul secara perlahan selama 1-2 tahun. ', 4),
(124, 'G-36', 'Buang air kecil berlebihan', 4),
(125, 'G-37', 'Kelelahan', 4),
(126, 'G-38', 'Kelebihan cairan di otak (hidrosefalus)', 3),
(127, 'G-39', 'Lekas Marah', 3),
(128, 'G-40', 'Mual atau Muntah', 3),
(129, 'G-41', 'Sakit Kepala', 3),
(134, 'G-46', 'Sakit kepala hebat dan kronis', 4),
(135, 'G-47', 'Gerakan mata yang tidak disengaja', 3),
(136, 'G-48', 'Gangguan memori bila menekan syaraf dibagian temporal', 3),
(137, 'G-49', 'Kehilangan selera makan', 3),
(138, 'G-50', 'Keterlambatan pertumbuhan', 3),
(139, 'G-51', 'Ketidakmampuan untuk melihat ke atas', 3),
(140, 'G-52', 'Perubahan  mental, misalnya  linglung, disorientasi,  penurunan kemampuan mengingat, serta mudah tersinggung. ', 3),
(141, 'G-53', 'Lemas pada otot lengan atau kaki salah satu sisi tubuh', 4),
(142, 'G-54', 'Sakit kepala disertai mual dan muntah', 3),
(143, 'G-55', 'Masalah penglihatan atau berbicara', 3),
(146, 'contoh', 'contoh', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL,
  `penyakit_id` int(11) NOT NULL,
  `pencegahan_id` int(11) NOT NULL,
  `stadium_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id`, `gejala_id`, `penyakit_id`, `pencegahan_id`, `stadium_id`) VALUES
(14, 89, 2, 8, 6),
(15, 90, 2, 8, 6),
(16, 91, 2, 8, 6),
(18, 93, 2, 8, 6),
(21, 96, 2, 8, 7),
(22, 97, 3, 6, 9),
(23, 98, 3, 4, 9),
(24, 99, 3, 3, 9),
(25, 100, 3, 7, 9),
(26, 101, 3, 6, 9),
(27, 102, 3, 4, 9),
(28, 103, 3, 7, 9),
(29, 104, 4, 9, 6),
(30, 105, 4, 9, 6),
(31, 106, 4, 9, 6),
(32, 107, 4, 9, 6),
(33, 108, 4, 9, 6),
(34, 109, 4, 9, 6),
(35, 110, 4, 9, 6),
(36, 111, 4, 9, 6),
(37, 112, 4, 9, 6),
(38, 113, 5, 17, 6),
(39, 114, 5, 17, 6),
(40, 115, 5, 17, 6),
(41, 117, 5, 17, 6),
(42, 118, 6, 9, 6),
(43, 119, 6, 9, 6),
(44, 120, 6, 9, 6),
(45, 121, 6, 9, 6),
(46, 122, 6, 9, 6),
(47, 123, 6, 9, 6),
(48, 124, 6, 9, 6),
(49, 125, 6, 9, 6),
(50, 126, 7, 9, 6),
(51, 127, 7, 9, 6),
(52, 129, 7, 9, 6),
(53, 128, 7, 9, 6),
(54, 134, 13, 14, 6),
(55, 135, 13, 14, 6),
(56, 136, 13, 14, 6),
(57, 137, 13, 14, 6),
(58, 138, 13, 14, 6),
(59, 140, 14, 15, 6),
(60, 141, 14, 16, 6),
(61, 139, 14, 16, 6),
(62, 142, 14, 16, 6),
(63, 143, 14, 15, 6),
(69, 99, 14, 17, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_analisis`
--

CREATE TABLE `hasil_analisis` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `namaa` varchar(50) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judulinfo` varchar(400) NOT NULL,
  `tanggal` date NOT NULL,
  `sekilas` varchar(4000) NOT NULL,
  `isiinfo` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `judulinfo`, `tanggal`, `sekilas`, `isiinfo`, `foto`) VALUES
(1, 'Makanan yang Berfungsi untuk Mencegah Kanker', '2020-10-02', '     Kanker merupakan kondisi tubuh seseorang dengan sel yang tumbuh secara tidak terkendali hingga menjadi ganas. Sel ganas pada tubuh ini kemudian secara perlahan merusak tubuh hingga membuat tubuh pasien menjadi tidak dapat berfungsi. Penyakit kanker sendiri bisa timbul di berbagai bagian tubuh. \r\n\r\nKanker payudara adalah salah satu kanker yang paling banyak dialami oleh kaum hawa. Sementara kanker juga bisa timbul pada bagian tubuh lainnya termasuk organ pencernaan hingga kanker kulit.      ', '<p>&nbsp; &nbsp;Kanker merupakan kondisi tubuh seseorang dengan sel yang tumbuh secara tidak terkendali hingga menjadi ganas. Sel ganas pada tubuh ini kemudian secara perlahan merusak tubuh hingga membuat tubuh pasien menjadi tidak dapat berfungsi. Penyakit kanker sendiri bisa timbul di berbagai bagian tubuh.</p>\r\n\r\n<p>&nbsp; &nbsp;Kanker payudara adalah salah satu kanker yang paling banyak dialami oleh kaum hawa. Sementara kanker juga bisa timbul pada bagian tubuh lainnya termasuk organ pencernaan hingga kanker kulit. Makanan yang Memiliki Kemampuan Sebagai Pencegah Kanker Meski obat yang dapat bekerja efektif 100% menangkal kanker belum ada, namun penelitian membuktikan bahwa beberapa jenis makanan ternyata memiliki kemampuan sebagai pencegah kanker.</p>\r\n\r\n<p>&nbsp; &nbsp;Berikut adalah beberapa jenis makanannya, dirangkum khusus oleh tim Ngovee, sumber informasi kesehatan terpercaya.</p>\r\n\r\n<ul>\r\n	<li>Teh Hijau Selain memiliki ciri khas sebagai minuman herbal bagi wanita yang tengah diet, teh hijau ternyata memiliki manfaat lain yang tak kalah menakjubkan. Di dalam segelas teh hijau terdapat kandungan senyawa epigallocatechin gallate serta katekin yang mampu menurunkan kecepatan perkembangan sel kanker pada perut dan paru-paru.</li>\r\n	<li>Jahe Di dalam rempah jahe terkandung senyawa aktif yang berfungsi sebagai obat antikanker. Kemampuannya yang menakjubkan ini menjadikan jahe salah satu herbal yang dilirik sebagai pencegah kanker.</li>\r\n	<li>Cokelat Hitam Kandungan kakao di dalam cokelat hitam hingga sebesar 70% memiliki kemampuan dalam menurunkan pertumbuhan sel kanker. Di dalam biji kakao terdapat kandungan katekin dan antioksidan polifenol untuk menurunkan risiko stroke, kanker hingga penyakit jantung.</li>\r\n	<li>Bawang Putih Selain memiliki manfaat sebagai pelengkap pada bumbu masakan, bawang putih juga bermanfaat untuk membunuh sel kanker yang berkembang di dalam tubuh. Hal ini dikarenakan di dalam bawang putih terdapat zat aktif allicin yang memang bekerja secara aktif dalam membunuh radikal bebas dan zat perusak dalam tubuh.</li>\r\n	<li>Kunyit Di dalam kunyit terdapat zat aktif curcumin yang bekerja sebagai antiradang dan antioksidan sehingga dapat menjaga sel-sel tubuh rusak dan berpotensi meningkatkan risiko kanker. Senyawa curcumin ini akan bekerja menyerang enzim yang terdapat di dalam radikal bebas. Hanya saja, walau khasiat sebagai antioksidan dan antiinflamasi sudah dikenal, kemampuan kunyit sebagai obat antikanker masih harus diteliti lebih lanjut.</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp;Metode Pengobatan Medis untuk Pasien Kanker Selain melakukan pencegahan dengan mengkonsumsi makanan ataupun herbal yang dapat membunuh sel kanker, bagi mereka yang telah menderita kanker ganas, pengobatan medis tentu menjadi hal tak terelakkan. Dokter akan menyarankan beberapa jenis pengobatan yang disesuaikan dengan tingkat keganasan kanker dan juga kondisi tubuh pasien. Imunoterapi Manfaat dari perlakuan imunoterapi adalah untuk meningkatkan sistem imun tubuh dalam melawan serangan sel kanker. Dalam prosedurnya, tubuh akan disuntikkan zat kekebalan tubuh buatan yang mirip protein imun. Pada metode imunoterapi kanker, maka yang disuntikkan adalah vaksin kanker, antibodi monoklonal serta terapi sel T. Efek samping dari perlakuan imunoterapi yakni mual, demam, sakit kepala dan muntah. Terapi Hormon Pada kasus kanker payudara maupun prostat, maka terapi yang paling sering diberikan adalah terapi hormon. Cara kerja terapi hormon yakni mengecilkan ukuran dari sel tumor sebelum dilakukannya terapi radiasi ataupun operasi. Selain itu, terapi hormon berfungsi untuk menurunkan risiko kembali aktifnya sel kanker. Terapi Target Untuk menghambat kecepatan pertumbuhan sel kanker pada tubuh, maka akan dilakukan terapi target. Terapi target dilakukan dengan memberikan senyawa ataupun obat-obatan ke dalam tubuh untuk merusak sel kanker. Tujuan pemberian senyawa ini adalah agar sel sehat di sekitar kanker tidak ikut rusak. Kemoterapi Kemoterapi yakni pemberian senyawa kimia ke dalam tubuh agar pertumbuhan sel kanker bisa terhenti. Selain itu, kemoterapi juga akan bekerja merusak sel kanker yang ada di dalam tubuh. Sayangnya, kemoterapi memiliki efek negatif berupa tubuh terasa nyeri, kerontokan pada rambut, mual, nafsu makan menurun dan sebagainya. Pola Hidup Sehat dalam Mencegah Pertumbuhan Sel Kanker Pada Tubuh Riset dari WHO menunjukkan bahwa sebanyak 30 hingga 50 persen kasus penyakit kanker seluruh dunia sebenarnya dapat dicegah. Kunci utama dalam mencegah pertumbuhan sel kanker adalah penerapan hidup sehat seperti berikut: Tidak Mengkonsumsi Alkohol Kanker yang paling banyak disebabkan oleh alkohol adalah kanker hati, rongga mulut, payudara, laring, faring dan juga kerongkongan. Jauhi konsumsi alkohol karena memang memiliki dampak buruk bagi tubuh. Berolahraga Lakukan olahraga secara teratur agar tubuh tidak mengalami obesitas. Riset menunjukkan kelebihan berat badan meningkatkan risiko kanker. Berhenti Merokok Rokok terbukti menjadi faktor terbesar timbulnya kanker yang menyebabkan kematian. Terdapat setidaknya 7000 zat kimia di dalam tembakau dengan 250 di antaranya berbahaya. Bahkan 50 zat di antara bahan kimia tersebut diketahui bisa menimbulkan kanker. Itulah beberapa makanan yang dapat mencegah kanker. Untuk menurunkan risiko terjadinya kanker sebenarnya bisa dilakukan dengan menjalani gaya hidup sehat dan mengkonsumsi makanan pencegah kanker. Pola hidup sehat sangat penting karena merupakan kunci dari keberhasilan pencegahan kanker.</p>\r\n\r\n<p><em>Sumber : https://ngovee.com/healthy-food/makanan-yang-berfungsi-untuk-mencegah-kanker/</em></p>\r\n', 'c6b580df963be77cfe4c76370964a4aa.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenispenyakit`
--

CREATE TABLE `jenispenyakit` (
  `id` int(11) NOT NULL,
  `namajenis` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenispenyakit`
--

INSERT INTO `jenispenyakit` (`id`, `namajenis`) VALUES
(3, 'Stadium I'),
(4, 'Stadium II'),
(5, 'Stadium III');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pencegahan`
--

CREATE TABLE `pencegahan` (
  `id` int(11) NOT NULL,
  `kode` varchar(500) NOT NULL,
  `namapencegahan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pencegahan`
--

INSERT INTO `pencegahan` (`id`, `kode`, `namapencegahan`) VALUES
(3, 'P-01', 'Mengurangi paparan radiasi di daerah kepala'),
(4, 'P-02', 'Makan makanan yang bergizi'),
(5, 'P-03', 'Hindari lingkungan pemicu kanker seperti pabrik kimia'),
(6, 'P-04', 'Berhenti merokok'),
(7, 'P-05', 'Berhenti minum alkohol'),
(8, 'P-06', 'Karena penyebab dari meningioma belum diketahui secara pasti, belum ada strategi pencegahan yang terbukti efektif dalam menghindari terjadinya meningioma.'),
(9, 'P-07', 'Untuk saat ini pencegahannya belum diketahui'),
(10, 'P-08', 'Melindungi diri dari pajanan sinar matahari'),
(11, 'P-09', 'Mendapatkan imunisasi'),
(12, 'P-10', 'Menghindari perilaku yang berisiko menimbulkan penyakit, seperti melakukan seks bebas atau berbagi jarum suntik'),
(13, 'P-11', 'Mempertahankan berat badan ideal dengan menjalani pola makan sehat dan rutin olahraga'),
(14, 'P-12', 'Pada saat ini, tidak ada cara yang diketahui untuk mencegah atau mengurangi risiko glioma saraf optik pada anak.'),
(15, 'P-13', 'Ikuti seluruh ketentuan yang diberikan oleh dokter pasca?pengobatan.'),
(16, 'P-14', 'Lakukan pemeriksaan ulang secara berkala untuk memantau perkembangan penyakit serta kondisi kesehatan anda.'),
(17, 'P-15', 'Tidak semua neuroma akustik dapat dicegah, terutama bila penyakit ini berkaitan dengan kelainan genetik yang diturunkan dari orang tua. Namun, risiko terjadinya neuroma akustik dapat diturunkan dengan menghindari paparan suara bising, juga dengan melakukan konsultasi sebelum dan sesudah menjalani radioterapi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `namapenyakit` varchar(100) NOT NULL,
  `gejala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `namapenyakit` varchar(1000) NOT NULL,
  `definisi` varchar(3000) NOT NULL,
  `penanganan` varchar(1000) NOT NULL,
  `obat` varchar(1000) NOT NULL,
  `rumahsakit` varchar(1000) NOT NULL,
  `spesialis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id`, `kode`, `foto`, `namapenyakit`, `definisi`, `penanganan`, `obat`, `rumahsakit`, `spesialis`) VALUES
(2, 'P-01', '2c4e91795f4fe6af60512fd824c1a35a.jpg', 'Meningioma', '<p>tumor yang berasal dari selaput otak, bahasa medisnya meningens, meningioma sebagian besar bersifat jinak, tapi jika dibiarkan akan semakin ganas</p>\r\n', '<ol>\r\n	<li>Melakukan tindakan operasi untuk pengangkatan&nbsp;tumor</li>\r\n	<li>Kemoterapi</li>\r\n	<li>Radioterapi atau Sinar Radiasi adalah tindakan yang dapat dilakukan pada penderita yang tidak dapat menjalani operasi</li>\r\n</ol>\r\n', '<ol>\r\n	<li>CT Scan dengan kontras untuk menentukan lokasi pasti dan juga ukuran daripada tumor, jika tanpa kontras, sangat sulit membedakan dengan jaringan sekitar</li>\r\n	<li>MRI memiliki peran yang hampir serupa dengan CT scan.</li>\r\n</ol>\r\n', 'Rumah Sakit Pusat Otak Nasional Prof. Dr. dr. Mahar Mardjono Jakarta, RSUPN Dr. Cipto Mangunkusumo', 'Spesialis Onkologi Radiasi'),
(3, 'P-02', '5e5894bf2d72d59408e74b0161688913.jpg', 'Glioblastoma Multiforme (GBM)', '<p>kanker ganas yang berasal dari sel-sel saraf otak, yaitu sel astrosit dan oligodendrosit</p>\r\n', '<ol>\r\n	<li><strong>Operasi Kepala</strong> untuk mengambil sebanyak mungkin yang dapat diambil tumor tersebut tanpa merusak bagian jaringan otak</li>\r\n	<li><strong>Kemoterapi</strong> yang dilakukan oleh dokter untuk pengobatan glioblastoma</li>\r\n	<li><strong>Nanoparticle Therapy</strong> menggunakan partikel kecil untuk membawa kemoterapi langsung ke dalam tumor</li>\r\n	<li><strong>Water Therapy (Gliadel)</strong> yaitu menggunakan cakram implan yang dapat terbiodegrasi, yang kemudian melepaskan kemoterapi ke jaringan kanker yang tertinggal setelah operasi</li>\r\n	<li><strong>Terapi Radiasi </strong>yaitu diberikan sebagai terapi tambahan pasca operasi</li>\r\n</ol>\r\n', '<ul>\r\n	<li>Dokter akan melakukan tindakan foto MRI dengan kontras</li>\r\n	<li>Pemeriksaan Neurologis dimana dokter akan melakukan pemeriksa pada penglihatan, keseimbangan, koordinasi, kekuata, dan refleks.</li>\r\n	<li>Melakukan tindakan Biopsi yang akan dilakukan sebelum melakukan tindakan operasi, tujuannya untuk mengambil sampel jaringan yang mencurigakan dianakisis di laboratorium untuk menentukan jenis sel dan tingkat agresivitasnya.</li>\r\n</ul>\r\n', 'Rumah Sakit Pusat Otak Nasional Prof. Dr. dr. Mahar Mardjono Jakarta, Rumah Sakit Siloam, RSUPN Dr. Cipto Mangunkusumo, Rumah Sakit Kanker Dharmais', '  Dokter Bedah Saraf  '),
(4, 'P-03', 'a66b2880837ad934966a46383a268cf4.jpg', ' Tumor Hipofisis (Adenoma Pituitari)', '<p>tumor jinak yang berasal dari kelenjar pituitari, lokasinya persis dibelakang mata</p>\r\n', '<ol>\r\n	<li>Terapi radiasi<strong> </strong>yaitu tindakan terapi&nbsp;yang digunakan untuk mengecilkan tumor untuk yang tidak dapat dioperasi.</li>\r\n	<li>Apabila tumor terlihat besar, dokter akan melakukan tindakan operasi</li>\r\n</ol>\r\n', '<ul>\r\n	<li>Melakukan tes darah maupun urin untuk mengukur tingkat hormon</li>\r\n	<li>Melakukan pemeriksaan menggunakan MRI pada otak untuk mencari tumor dan mengukur besarnya tumor</li>\r\n	<li>Mengecek penglihatan untuk mengeliminasi kemungkinan cedera umum pada area penglihatan dekat dengan kelenjar pituitary</li>\r\n</ul>\r\n', 'Rumah Sakit Umum Pusat Nasional Dr. Cipto Mangunkusumo', '  Spesialis endokrinologi, spesialis bedah saraf, perawatan utama, oftalmologi, Dokter Onkologi Radiasi'),
(5, 'P-04', 'a61e962b4eef5f63ded7eb03d64a41c2.jpg', 'Neuroma Akustik', '<p>tumor jinak pada saraf penghubung telinga dan otak</p>\r\n', '<ol>\r\n	<li>Pembedahan mikro</li>\r\n	<li>Radioterapi dengan fraksi konvensional terutama diberikan pada tumor yang berukuran besar, yang menekan struktur penting seperti batang otak, NF2 atau ketidakadaan fasilitas radiasi teknik tinggi seperti radioterapi dengan teknik stereotaktik.</li>\r\n</ol>\r\n', '<ul>\r\n	<li>Tes pendengaran, antara lain audiometri, tes garpu tala, dan&nbsp;auditory brain stem response test</li>\r\n	<li>Electronystagmography, untuk mendeteksi gangguan keseimbangan melalui pergerakan bola mata</li>\r\n	<li>Pemindaian dengan CT scan dan MRI, untuk melihat lokasi dan ukuran tumor</li>\r\n</ul>\r\n', 'Dharmais Cancer Hospital ', '  Ahli Onkologi, Ahli Hematologi-onkologi anak, Ahli Hematologi       '),
(6, 'P-05', '2265122f41bead7a37c202b74b6fcb41.jpg', 'Craniopharyngioma', '<p>tumor jinak di regio sella atau suprasella</p>\r\n', '<ul>\r\n	<li>Operasi Pembedahan merupakan tindakan yang dilakukan untuk mengangkat semua atau sebagian besar tumor. Jenis operasi yang dilakukan akan tergantung dari lokasi dan ukuran tumor pada pengidap. Jika kondisi memungkinkan, dokter akan mengangkat seluruh jaringan tumor.</li>\r\n	<li>Terapi Radiasi&nbsp;menggunakan terapi radiasi dengan sinar eksternal. Metode ini juga biasa dilakukan pengidap setelah prosedur operasi dilakukan guna mengatasi&nbsp;<em>Craniopharyngioma</em>&nbsp;yang belum terangkat.</li>\r\n	<li>Metode Kemoterapi yaitu obat-obatan kemoterapi yang dikonsumsi pun bahkan mengandung bahan kimia yang dapat disuntikkan langsung ke tumor, sehingga pengobatan dapat langsung mencapai sel target tanpa merusak jaringan sehat yang ada di sekitarnya.</li>\r\n</ul>\r\n', '<p>Untuk mendiagnosis tumor otak jenis&nbsp;Craniopharyngioma pada anak dapat dilakukan dengan cara pemeriksaan fisik, tes MRI atau CT scan,&nbsp;dan tes genetik.&nbsp;</p>\r\n', 'Rumah Sakit Kanker Dharmais', 'Ahli bedah saraf, Onkologi radiasi, Hemato onkologi, Radiologi'),
(7, 'P-06', 'd8c7f4ca6c27893212dda8f510d175e8.jpg', 'Karsinoma Pleksus Koroid ', '<p>keganasan pada pleksus chroid, pleksus chroid ini yang memprodiksi cairan serebrospinal</p>\r\n', '<ol>\r\n	<li>Tindakan operasi bedah saraf</li>\r\n	<li>Terapi konservatif medikamentosa berguna untuk mengurangi cairan dari pleksus khoroid</li>\r\n</ol>\r\n', '<ol>\r\n	<li>CT Scan dapat digunakan untuk mengukur dilatasi ventrikel secara kasar dan menentukan sumber obstruksi</li>\r\n</ol>\r\n', 'Rumah Sakit Pusat Otak Nasional Prof. Dr. dr. Mahar Mardjono Jakarta', ' Spesialis Ahli Onkologi, Spesialis Bedah Saraf  '),
(13, 'P-09', '3fd38dd376ebb7b915ab3a226a2b7521.jpg', 'Optic Glioma', '<p>glioma tumor jinak pada saraf optik</p>\r\n', '<ul>\r\n	<li>Pembedahan dan terapi&nbsp;radiasi&nbsp;merupakan dua cara tindakan&nbsp;untuk mengobati glioma saraf optik. Dokter Anda dapat menentukan jenis perawatan yang terbaik untuk Anda.</li>\r\n	<li>Tindakan&nbsp;operasi&nbsp;tidak selalu menjadi pilihan utama. Pembedahan dapat dilakukan jika tumor dapat diangkat secara tuntas. Sebagai alternatif, jika tumor tidak sepenuhnya dapat diangkat, dokter&nbsp;bedah&nbsp;akan mengangkat beberapa bagian untuk membantu meringankan tekanan pada tengkorak.</li>\r\n	<li>Terapi radiasi&nbsp;dapat dilakukan sebelum operasi untuk mengecilkan tumor. Atau dapat dilakukan setelah operasi untuk membunuh sel kanker&nbsp;yang tersisa. Terapi radiasi melibatkan&nbsp;penggunaan&nbsp;mesin untuk mengarahkan sinar berenergi tinggi di lokasi tumor. Terapi radiasi tidak selalu disarankan karena dapat menyebabkan&nbsp;kerusakan&nbsp;lebih lanjut pada mata dan otak.</li>\r\n	<li>Kemoterapi&nbsp;dapat dilakukan untuk membunuh sel&nbsp;kanker. Terapi ini sangat berguna', '<ol>\r\n	<li>Pemeriksaan fisik syaraf kranial</li>\r\n	<li>Pemindaian&nbsp;computed tomography (CT) otak,&nbsp;</li>\r\n	<li>Magnetic resonance imaging (MRI) otak,</li>\r\n	<li>Biopsi.</li>\r\n</ol>\r\n', 'Rumah Sakit Pusat Otak Nasional Prof. Dr. dr. Mahar Mardjono Jakarta, RSUPN Dr. Cipto Mangunkusumo, Rumah Sakit Kanker Dharmais', '  Spesialis Saraf, Spesialis Bedah Saraf, Spesialis Onkologi  '),
(14, 'P-10', 'fc9e65aae970c99c28605e039cc94117.jpeg', 'Astrositoma', '<p>tumor jinak atau bisa ganas tergantung gradenya, gradenya terdiri dari grade 1-2 adalah&nbsp;jinak dan grade 3-4 adalah tumor ganas</p>\r\n', '<ul>\r\n	<li>Operasi</li>\r\n	<li>Terapi radiasi</li>\r\n	<li>Kemoterapi</li>\r\n</ul>\r\n', '<p>Pemeriksaan dengan menggunakan MRI dan pindaian CT Scan. Jika MRI atau CT Scan menunjukkan adanya suatu massa di dalam&nbsp;otak, satu?satunya&nbsp;cara&nbsp;untuk&nbsp;membuktikan diagnosis&nbsp;adalah&nbsp;melakukan&nbsp;biopsi.</p>\r\n', 'Rumah Sakit Pusat Otak Nasional Prof. Dr. dr. Mahar Mardjono Jakarta, Rumah Sakit Dharmais, RSUPN Dr. Cipto Mangunkusumo', ' Ahli bedah saraf, Ahli Onkologi, Ahli onkologi radiasi, Ahli saraf ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor` int(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pesan` varchar(2000) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `nomor`, `email`, `pesan`, `waktu`) VALUES
(6, 'Mikhael Kristiana', 2147483647, 'kristian.mikhael@yahoo.com', 'd', '2020-10-14 11:36:06'),
(7, 'Mikhael Kristian', 2147483647, 'kristianmikhael667@gmail.com', 'Aturan menggunakan IF-THEN Pada Depth First Search\r\n\r\nIF Gangguan Ingatan (G-01) AND Penglihatan Hilang(G-02) \r\nAND Nyeri Kepala (G-03) AND Muntah atau Mual (G-04) \r\nAND Kejang-kejang (G-05)) \r\nTHEN Meningioma (P-01)\r\n\r\nIF Kesadaran Menurun (G-06) AND Nyeri Kepala semakin memburuk (G-07) \r\nAND Kebingungan Mental (G-08) AND Nyeri Kepala Berat (G-09) \r\nAND Lemah pada satu anggota tubuh (G-10) AND Sering Lupa (G-11)\r\nAND Mual dan Muntah berlebihan (G-12) AND Ayan (G-13)\r\nAND Perubahan drastis pada indra penciuman (G-14) AND Susah Bicara (G-15)) \r\nTHEN Glioblastoma Multiforme (GBM) (P-02)\r\n\r\nIF Keluarnya cairan di puting (G-16) AND Sakit Kepala (G-17) \r\nAND siklus mestruasi irreguler (G-18) AND Disfungsi seksual pada pria (G-19) \r\nAND penglihatan ganda (G-20) AND tidak sadar (G-21)\r\nAND pilek (G-22) AND Masalah penciuman(G-23)\r\nAND Cushing’s syndrome (G-24)) \r\nTHEN Tumor hipofisis (P-03)', '2020-10-14 17:38:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesandokter`
--

CREATE TABLE `pesandokter` (
  `id` int(11) NOT NULL,
  `pesandokter` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stadium`
--

CREATE TABLE `stadium` (
  `idf` int(11) NOT NULL,
  `kode` varchar(500) NOT NULL,
  `namastadium` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stadium`
--

INSERT INTO `stadium` (`idf`, `kode`, `namastadium`) VALUES
(6, 'S-01', 'Stadium I'),
(7, 'S-02', 'Stadium II'),
(8, 'S-03', 'Stadium III'),
(9, 'S-04', 'Stadium IV');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jeniskelamin` enum('L','P') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status` enum('AKTIF','NONE') NOT NULL,
  `role_id` tinyint(1) NOT NULL,
  `nomor` varchar(15) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `is_logged_in` tinyint(1) NOT NULL,
  `is_activated` enum('0','1') DEFAULT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `password`, `nama`, `lahir`, `tanggal_lahir`, `jeniskelamin`, `alamat`, `status`, `role_id`, `nomor`, `foto`, `is_logged_in`, `is_activated`, `last_login`) VALUES
(221, '123', 'admin', '', '0000-00-00', 'L', 'Depok', 'AKTIF', 2, '0891234890', '', 0, NULL, '2020-10-02 04:03:17'),
(1122, '123', 'Mikhael Kristian', 'Jakarta', '2002-03-23', 'L', 'Jalan Raya Citayam Depok', 'AKTIF', 1, '08568045059', '6e2fc2a1ad508d8b40020a415bd98987.jpeg', 0, NULL, '2020-10-08 07:06:10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `kelompok_gejala_id` (`kelompok_gejala_id`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gejala_id` (`gejala_id`),
  ADD KEY `penyakit_id` (`penyakit_id`),
  ADD KEY `pencegahan_id` (`pencegahan_id`),
  ADD KEY `stadium_id` (`stadium_id`);

--
-- Indeks untuk tabel `hasil_analisis`
--
ALTER TABLE `hasil_analisis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenispenyakit`
--
ALTER TABLE `jenispenyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pencegahan`
--
ALTER TABLE `pencegahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesandokter`
--
ALTER TABLE `pesandokter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stadium`
--
ALTER TABLE `stadium`
  ADD PRIMARY KEY (`idf`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `nama` (`nama`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `hasil_analisis`
--
ALTER TABLE `hasil_analisis`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jenispenyakit`
--
ALTER TABLE `jenispenyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pencegahan`
--
ALTER TABLE `pencegahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pesandokter`
--
ALTER TABLE `pesandokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `stadium`
--
ALTER TABLE `stadium`
  MODIFY `idf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1123;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD CONSTRAINT `gejala_ibfk_1` FOREIGN KEY (`kelompok_gejala_id`) REFERENCES `jenispenyakit` (`id`);

--
-- Ketidakleluasaan untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_2` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`),
  ADD CONSTRAINT `hasil_ibfk_3` FOREIGN KEY (`pencegahan_id`) REFERENCES `pencegahan` (`id`),
  ADD CONSTRAINT `hasil_ibfk_4` FOREIGN KEY (`gejala_id`) REFERENCES `gejala` (`ids`),
  ADD CONSTRAINT `hasil_ibfk_5` FOREIGN KEY (`stadium_id`) REFERENCES `stadium` (`idf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
