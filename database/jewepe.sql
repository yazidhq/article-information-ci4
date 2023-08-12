-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 11:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jewepe`
--

-- --------------------------------------------------------

--
-- Table structure for table `jwp_admin`
--

CREATE TABLE `jwp_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_username` varchar(15) NOT NULL,
  `admin_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jwp_admin`
--

INSERT INTO `jwp_admin` (`admin_id`, `admin_name`, `admin_username`, `admin_password`) VALUES
(1, 'Yazid Dhiaulhaq Ismail', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `jwp_artikel`
--

CREATE TABLE `jwp_artikel` (
  `artikel_id` int(11) NOT NULL,
  `artikel_judul` varchar(60) NOT NULL,
  `artikel_isi` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jwp_artikel`
--

INSERT INTO `jwp_artikel` (`artikel_id`, `artikel_judul`, `artikel_isi`, `created_at`) VALUES
(5, 'Bisakah Gigitan Kucing Menyebabkan Rabies?', 'Anda pasti pernah mendengar tentang seseorang yang mengalami rabies usai digigit anjing, bukan? Yah, banyak kasus orang meninggal karena rabies setelah diggiti anjing. Penyakit ini memang bisa menular ke manusia lewat gigitan hewan yang terinfeksi. Apakah rabies hanya menular dari anjing? Bisakah gigitan kucing menyebabkan rabies? Rabies adalah infeksi yang ditularkan melalui gigitan hewan yang terinfeksi. Selain anjing, hewan karnivora dan kelewar juga bisa terinfeksi virus rabies. Hewan seperti anjing, kucing, rakun, sigung, dan kelelawar dapat menularkan virus ke manusia melalui cakaran atau gigitan. Virus rabies bisa mempengaruhi sistem saraf pusat mamalia, akhirnya mempengaruhi otak, dan menyebabkan kematian.Kucing dapat terinfeksi virus rabies melalui gigitan hewan yang terinfeksi, dan virus menyebar melalui air liur. Virus rabies pada kucing juga bisa menular ke manusia. Kucing dengan rabies mentransfer virus ke manusia melalui cakaran atau air liur setelah gigitan. Rabies adalah infeksi yang ditularkan melalui gigitan hewan yang terinfeksi. Selain anjing, hewan karnivora dan kelewar juga bisa terinfeksi virus rabies. Hewan seperti anjing, kucing, rakun, sigung, dan kelelawar dapat menularkan virus ke manusia melalui cakaran atau gigitan. Virus rabies bisa mempengaruhi sistem saraf pusat mamalia, akhirnya mempengaruhi otak, dan menyebabkan kematian. Kucing dapat terinfeksi virus rabies melalui gigitan hewan yang terinfeksi, dan virus menyebar melalui air liur. Virus rabies pada kucing juga bisa menular ke manusia. Kucing dengan rabies mentransfer virus ke manusia melalui cakaran atau air liur setelah gigitan.', '2023-06-16 13:37:03'),
(6, 'Kapan Waktu Terbaik untuk Tidur Malam?', 'Mendapatkan waktu tidur yang cukup dan istirahat yang berkualitas adalah salah satu kunci kesehatan. Ada dua aspek penting yang perlu dipertimbangkan dalam hal tidur, yakni durasi tidur setiap malam dan konsistensi waktu. Beberapa dari kita mungkin masih bingung dalam menentukan waktu tidur terbaik, yang bisa jadi berbeda antar individu. Jumlah tidur yang dibutuhkan seseorang bergantung pada banyak faktor, termasuk usia. Dilansir dari WebMD, secara umum, berikut adalah jumlah tidur yang dibutuhkan berdasarkan usia: Bayi (usia 0-3 bulan) membutuhkan 14-17 jam sehari, Bayi (usia 4-11 bulan) membutuhkan 12-15 jam sehari, Balita (usia 1-2 tahun) membutuhkan sekitar 11-14 jam sehari, Anak balita (usia 3-5) membutuhkan 10-13 jam sehari, Anak usia 6-13 tahun membutuhkan 9-11 jam sehari, Remaja (usia 14-17) membutuhkan sekitar 8-10 jam setiap hari, Sebagian besar orang dewasa membutuhkan 7 hingga 9 jam, Orang dewasa yang lebih tua (usia 65 tahun ke atas) membutuhkan 7-8 jam tidur setiap hari, Wanita dalam 3 bulan pertama kehamilan seringkali membutuhkan beberapa jam tidur lebih lama dari biasanya.\r\n', '2023-06-16 13:38:56'),
(7, 'Kenang Babak Eliminasi Indonesian Idol, Salma Salsabil: Ment', 'Juara Indonesian Idol 2023 Salma Salsabil mengungkapkan cerita pengalaman dirinya selama mengikuti ajang Indonesian Idol. Kontestan asal Probolinggo, Jawa Timur ini mengingat betul bagaimana dirinya pernah dikumpulkan bersama ratusan peserta di suatu tempat usai lolos audisi Indonesian Idol. Salma Salsabil mengaku tak tahu ternyata dirinya tengah memasuki babak eliminasi. “Kita pernah dikumpulin 108 orang dalam 1 gedung, itu babak eliminasi setelah dapat golden tiket,” ucap Salma Salsabil dikutip dari kanal YouTube Tuah Kreasi, Jumat (16/6/2023). Tak hanya dikumpulkan bersama ratusan peserta lainnya, Salma Salsabil juga diminta bernyanyi. Melihat semua kontestan bernyanyi dalam satu ruangan, Salma Salsabil mengaku sempat drop secara mental. Salma Salsabil kena mental karena mendengar langsung kualitas suara ratusan kontestan. “Itu lihat sebelah sana nyanyi, sebelah sini nyanyi, itu lumayan kena mental, mental berasagoyang,” ucap Salma Salsabil. Meski demikian, Salma Salsabil bersyukur bisa lolos ke tahap berikutnya. Bahkan, Salma Salsabil berhasil melalui persaingan yang ketat di Indonesian Idol 2023 atau Indonesian Idol XII. Salma sendiri bernama lengkap Salma Salsabil \'Aliyyah Putri Mandaya. Salma lahir di 12 Februari 2002 (umur 21) Probolinggo, Jawa Timur. Sebelum menjadi juara Indonesian Idol, Salma Salsabil harus merasakan perjuangan di berbagai ajang bernyanyi. Salma sempat mengikuti ajang Idola Cilik, The Voice Kids, The Voice, Rising Star, Hijab Hunt, sampai Indonesian Idol. Saat ini, Salma merupakan mahasiswi jurusan Penyajian Musik di Institut Seni Indonesia Yogyakarta.', '2023-06-16 14:43:24'),
(8, 'Bakal Beda Tipis dengan Argo Parahyangan, Berapa Tarif Ideal', 'Tarif Kereta Cepat Jakarta-Bandung (KCJB) masih digodok oleh operator dan pemerintah jelang dioperasikan secara komersial pada Oktober 2023. Lalu berapa tarif Kereta Cepat Jakarta-Bandung yang ideal dan kompetitif? Mengingat perjalanan Jakarta-Bandung memiliki alternatif lain yang bisa dipilih masyarakat seperti Kereta Api (KA) Argo Parahyangan dan jalan tol. Sebagai informasi, tarif KA Argo Parahyangan dibanderol Rp 150.000 untuk kelas ekonomi dan Rp 200.000 untuk kelas eksekutif. Ada juga KA Argo Parahyangan Luxury seharga Rp 380.000-510.000 kelas luxury, dan kereta panoramic Rp 375.000-400.000. Sementara biaya Tol Jakarta-Bandung rute terpendek yakni Jakarta IC-Padalarang (Kabupaten Bandung Barat) sebesar Rp 63.000 dan sebesar Rp 66.000 jika keluar di Gerbang Tol Pasteur. KCIC Pastikan Tarif Kereta Cepat Jakarta-Bandung Bakal Beda Tipis dengan Tarif KA Argo Parahyangan. Sebelumnya, operator KCJB yakni PT Kereta Cepat Indonesia China (KCIC) memastikan tarif kereta cepat Jakarta-Bandung akan terjangkau. Bahkan harganya bakal beda tipis dengan KA Argo Parahyangan. Dengan besaran tarif yang mirip dengan kereta konvensional, diharapkan tarif kereta cepat ini tidak akan memberatkan masyarakat. \"Dibandingkan dengan Argo Parahyangan itu kurang lebih akan mirip. Beda tipis,\" ujar General Manager Property & Non-Farebox Business Development KCIC, Devin Pranata saat site visit di Stasiun Halim, Jakarta, Rabu (14/6/2023). Tarif Kereta Cepat Jakarta-Bandung Diperkirakan Berkisar Rp 150.000 Sampai Rp 350.000. Ketua Bidang Advokasi dan Kemasyarakatan Masyarakat Transportasi Indonesia (MTI) Djoko Setijowarno memperkirakan tarif Kereta Cepat Jakarta-Bandung bakal lebih mahal sedikit dari KA Argo Parahyangan yakni di kisaran Rp 150.000 sampai Rp 350.000. Perkiraan tarif ini untuk rute perjalanan terjauh dan bukan saat peak hour (jam sibuk). Dia merincikan tarif kelas terendah akan sebesar Rp 150.000 dan tarif kelas tertinggi sekitar Rp 350.000.  Sebagai informasi, nantinya tarif kereta cepat Jakarta-Bandung akan dibagi berdasarkan tiga kelas, yaitu premium ekonomi, bisnis, dan first class dimana kelas terendah ialah premium ekonomi dan kelas tertinggi ialah first class. \"Ya lebih tinggi daripada Argo Parahyangan lah. Mungkin yang (kelas) paling rendah setingkat Argo Parahyangan lah. Rp 150.000-350.000 rangenya seperti itu,\" kata Djoko kepada Kompas.com, Jumat (16/6/2023). Menurutnya, tarif kereta cepat Jakarta-Bandung akan bervariasi pada peak hour. Pasalnya, moda transportasi ini juga harus bersaing dengan kereta api konvensional dan jalan tol. Namun meski bakal lebih mahal dari KA Argo Parahyangan dan biaya jalan tol, dia menilai tarif Kereta Cepat Jakarta-Bandung yang mahal akan sebanding dengan kenyamanan dan waktu tempuh yang lebih cepat. Adapun waktu tempuh Kereta Cepat Jakarta-Bandung tercepat dari Stasiun Halim Jakarta ke Stasiun Padalarang Bandung memakan waktu hanya 30 menit dan menjadi 46 menit jika sampai Stasiun Tegalluar. Sementara waktu tempuh KA Argo Parahyangan sekitar 3 jam sedangkan waktu tempuh dari GT Cawang ke GT Pasteur sekitar 2,5 jam. \"Lebih mahal wajar lah. Mereka kan pasti memperhitungkan. Kalau tol tiap dua tahun pasti naik ya. Tapi kalau yang kereta cepat kan ada investasi, itu pertimbangannya,\" ungkapnya.', '2023-06-16 14:46:41'),
(9, 'Indonesia Open 2023, Rinov/Pitha Akui Tertekan', 'Perjuangan Rinov Rivaldy/Pitha Haningtyas Mentari terhenti di perempatfinal turnamen bulu tangkis Indonesia Open 2023.\r\n\r\nBerlaga di Istora Gelora Bung Karno, Senayan, Jumat (16/6/2023), ganda campuran rangking 15 dunia itu harus tersingkir karena takluk dari wakil Jepang, Yuta Watanabe/Arisa Higashino dengan skor 11-21, 18-21.\r\n\r\nPada pertandingan ini, peraih medali perunggu SEA Games 2021 itu mengaku tidak bisa keluar dari tekanan lawan. Terlihat saat lawan mengarahkan shuttlecock di depan net, baik Rinov maupun Pitha tidak mampu mengembalikan dengan baik, sehingga Yuta/Arisa berbalik menekan.\r\n\r\n\"Saya sangat sedih dan kecewa, terutama di gim pertama dan kedua karena tidak bisa lepas dari tekanan. Pada laga ini kami tidak bermain baik hari ini,\" ungkap Pitha.\r\n\r\nJuara Spain Masters 2021 itu mengaku sudah mengeluarkan bentuk permainan terbaiknya selama turnamen BWF Super 1000 itu. Tercatat sebelum ke perempatfinal, Rinov/Pitha melangkah dari babak 32 besar dengan mengalahkan pasangan Prancis, Thom Gicquel/Delphine Delrue 21-14, 21-15.\r\n\r\nSetelah membungkam pasangan Perancis, giliran ganda campuran Malaysia, Tan Kian Meng/Lai Pei Jing ditekuk dengan skor 21-17, 21-16.\r\n\r\nSayang di babak perempatfinal, ganda campuran berakronim Ripit menyerah dari Yuta/Arisa dengan skor 11-21, 18-21.\r\n\r\n\"Kami sudah memberikan permainan terbaik di sini. Kami tidak terbebani sebagai satu-satunya ganda campuran di perempatfinal. Kami merasa kalah terhormat dan sudah memberikan yang terbaik,\" tambah Rinov. Hal senada juga diungkapkan oleh pelatih sektor ganda campuran Indonesia, Amon Sunaryo. Suksesor Nova Widianto itu menyebut perjuangan Rinov/Pitha pada ajang Kapal Api Group Indonesia Open 2023 sudah maksimal. \"Apresiasi buat Rinov/Pitha yang sudah memberikan permainan terbaik, meski hasilnya agak mengecewakan buat fans bulutangkis Tanah Air,\" ujar Amon. \"Saya menilai perjuangan mereka sudah luar biasa dengan telah mengalahkan ganda campuran terbaik milik Prancis dan Malaysia,\" tambah Amon. Dengan hasil ini Indonesia tidak mengirimkan satu pun wakil di ganda campuran pada babak empat besar turnamen BWF Super 1000. Selain Rinov/Pitha, sektor ganda campuran Indonesia menurunkan pemain-pemain seperti Adnan Maulana/Nita Violina Marwah dan Rehan Naufal Kusharjanto/Lisa Ayu Kusumawati. Tercatat Adnan/Nita tersingkir di babak awal dari wakil China, Zheng Si Wei/Huang Ya Qiong dengan skor 15-21, 9-21. Adapun untuk Rehan/Lisa gagal membuka asa juara seusai di 16 besar menyerah dari ganda campuran Denmark, Mathias Thyrri/Amalie Magelund dengan skor 14-21, 16-21. Melihat hal itu, Amon akan cepat melakukan evaluasi, mengingat perhitungan poin menuju Olimpiade Paris 2024 sudah berlangsung. \"Evaluasi akan kami lakukan untuk sektor ganda campuran Indonesia. Saya sangat menyayangkan Rehan/Lisa yang gugur di 16 besar dari pasangan Denmark, padahal rekor pertemuan mereka menang,\" sebut Amon. \"Untuk Adnan/Nita saya tidak banyak evaluasi mengingat baru kali pertama tampil di ajang BWF Super 1000,\" pungkas Amon.', '2023-06-16 14:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `jwp_komentar`
--

CREATE TABLE `jwp_komentar` (
  `komentar_id` int(11) NOT NULL,
  `artikel_id` int(11) NOT NULL,
  `komentar_nama` varchar(30) NOT NULL,
  `komentar_email` varchar(30) NOT NULL,
  `komentar_isi` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jwp_komentar`
--

INSERT INTO `jwp_komentar` (`komentar_id`, `artikel_id`, `komentar_nama`, `komentar_email`, `komentar_isi`, `created_at`) VALUES
(11, 9, 'Adnan Olson', 'adnan@gmail.com', 'Tercatat Adnan/Nita tersingkir di babak awal dari wakil China, Zheng Si Wei/Huang Ya Qiong dengan skor 15-21, 9-21. Adapun untuk Rehan/Lisa gagal membuka asa juara seusai di 16 besar menyerah dari ganda campuran Denmark, Mathias Thyrri/Amalie Magelund dengan skor 14-21, 16-21. Melihat hal itu, Amon akan cepat melakukan evaluasi, mengingat perhitungan poin menuju Olimpiade Paris 2024 sudah berlangsung. \"Evaluasi akan kami lakukan untuk sektor ganda campuran Indonesia. ', '2023-06-16 14:51:21'),
(13, 9, 'Darcey Benjamin', 'benjamin@gmail.com', 'Rehan/Lisa gagal membuka asa juara seusai di 16 besar menyerah dari ganda campuran Denmark, Mathias Thyrri/Amalie Magelund dengan skor 14-21, 16-21. Melihat hal itu, Amon akan cepat melakukan evaluasi, mengingat perhitungan poin menuju Olimpiade Paris 2024 sudah berlangsung.', '2023-06-17 09:21:40'),
(14, 8, 'Krystal Wolf', 'krystal@gmail.com', 'Tarif Kereta Cepat Jakarta-Bandung Diperkirakan Berkisar Rp 150.000 Sampai Rp 350.000. Ketua Bidang Advokasi dan Kemasyarakatan Masyarakat Transportasi Indonesia (MTI) Djoko Setijowarno memperkirakan tarif Kereta Cepat Jakarta-Bandung bakal lebih mahal sedikit dari KA Argo Parahyangan yakni di kisaran Rp 150.000 sampai Rp 350.000. Perkiraan tarif ini untuk rute perjalanan terjauh dan bukan saat peak hour (jam sibuk). Dia merincikan tarif kelas terendah akan sebesar Rp 150.000 dan tarif kelas ter', '2023-06-17 09:22:17'),
(15, 7, 'Harri Burnett', 'harri@gmail.com', 'Salma Salsabil juga diminta bernyanyi. Melihat semua kontestan bernyanyi dalam satu ruangan, Salma Salsabil mengaku sempat drop secara mental. Salma Salsabil kena mental karena mendengar langsung kualitas suara ratusan kontestan.', '2023-06-17 09:22:46'),
(16, 7, 'Zuzanna Best', 'zuzanna@gmail.com', 'Kontestan asal Probolinggo, Jawa Timur ini mengingat betul bagaimana dirinya pernah dikumpulkan bersama ratusan peserta di suatu tempat usai lolos audisi Indonesian Idol.', '2023-06-17 09:23:19'),
(17, 7, 'Arjun Mcdaniel', 'arjun@gmail.com', 'Saat ini, Salma merupakan mahasiswi jurusan Penyajian Musik di Institut Seni Indonesia Yogyakarta.', '2023-06-17 09:23:40'),
(18, 6, 'Yousef Lloyd', 'yousef@gmail.com', 'Beberapa dari kita mungkin masih bingung dalam menentukan waktu tidur terbaik, yang bisa jadi berbeda antar individu. Jumlah tidur yang dibutuhkan seseorang bergantung pada banyak faktor, termasuk usia. Dilansir dari WebMD, secara umum, berikut adalah jumlah tidur yang dibutuhkan berdasarkan usia: Bayi (usia 0-3 bulan) membutuhkan 14-17 jam sehari,', '2023-06-17 09:24:21'),
(19, 5, 'Mohsin Fitzpatrick', 'mohsin@gmail.com', 'Virus rabies bisa mempengaruhi sistem saraf pusat mamalia, akhirnya mempengaruhi otak, dan menyebabkan kematian. Kucing dapat terinfeksi virus rabies melalui gigitan hewan yang terinfeksi, dan virus menyebar melalui air liur. Virus rabies pada kucing juga bisa menular ke manusia.', '2023-06-17 09:24:42'),
(20, 6, 'Zaid Mcgrath', 'zaid@gmail.com', 'Beberapa dari kita mungkin masih bingung dalam menentukan waktu tidur terbaik, yang bisa jadi berbeda antar individu. Jumlah tidur yang dibutuhkan seseorang bergantung pada banyak faktor, termasuk usia.', '2023-06-17 09:24:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jwp_admin`
--
ALTER TABLE `jwp_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `jwp_artikel`
--
ALTER TABLE `jwp_artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `jwp_komentar`
--
ALTER TABLE `jwp_komentar`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `artikel_id` (`artikel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jwp_admin`
--
ALTER TABLE `jwp_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jwp_artikel`
--
ALTER TABLE `jwp_artikel`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jwp_komentar`
--
ALTER TABLE `jwp_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jwp_komentar`
--
ALTER TABLE `jwp_komentar`
  ADD CONSTRAINT `jwp_komentar_ibfk_1` FOREIGN KEY (`artikel_id`) REFERENCES `jwp_artikel` (`artikel_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
