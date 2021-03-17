-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table db_mm_iq.barang: ~12 rows (approximately)
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` (`id`, `kode_barang`, `produk_id`, `nama_barang`, `satuan`, `harga_jual`, `stok`, `created_at`, `updated_at`) VALUES
	(1, 'B001', 2, 'Energy Drink', 'Pcs', 6000, '11', NULL, '2021-03-04 12:49:26'),
	(2, 'B002', 2, 'Coca Cola', 'Pcs', 7000, '10', NULL, '2021-03-04 12:49:44'),
	(3, 'B12', 4, 'Barang A', 'kardus', 5105, '30', '2021-03-08 04:42:59', '2021-03-08 04:42:59'),
	(4, 'B14', 6, 'Barang C', 'item', 2574, '84', '2021-03-08 04:42:59', '2021-03-08 04:42:59'),
	(5, 'B6', 1, 'Barang C', 'pcs', 8466, '19', '2021-03-08 04:42:59', '2021-03-08 04:42:59'),
	(6, 'B20', 2, 'Barang A', 'item', 4293, '78', '2021-03-08 04:42:59', '2021-03-08 04:42:59'),
	(7, 'B11', 6, 'Barang C', 'kardus', 3159, '69', '2021-03-08 04:42:59', '2021-03-08 04:42:59'),
	(8, 'B6', 2, 'Barang C', 'item', 1378, '59', '2021-03-08 04:42:59', '2021-03-08 04:42:59'),
	(9, 'B23', 5, 'Barang A', 'item', 5903, '11', '2021-03-08 04:42:59', '2021-03-08 04:42:59'),
	(10, 'B40', 6, 'Barang A', 'item', 9533, '15', '2021-03-08 04:42:59', '2021-03-08 04:42:59'),
	(11, 'B29', 2, 'Barang A', 'item', 5611, '97', '2021-03-08 04:42:59', '2021-03-08 04:42:59'),
	(12, 'B5', 4, 'Barang A', 'pcs', 7104, '55', '2021-03-08 04:42:59', '2021-03-08 04:42:59');
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;

-- Dumping data for table db_mm_iq.detail_pembelian: ~10 rows (approximately)
/*!40000 ALTER TABLE `detail_pembelian` DISABLE KEYS */;
INSERT INTO `detail_pembelian` (`id`, `pembelian_id`, `barang_id`, `harga_beli`, `jumlah`, `total`, `created_at`, `updated_at`) VALUES
	(1, 6, 9, 6478385, 490, 5205774, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(2, 10, 4, 7920493, 753, 2462343, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(3, 3, 3, 1368962, 921, 4521030, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(4, 9, 6, 5249881, 891, 6994230, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(5, 7, 7, 8383496, 894, 1235197, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(6, 4, 9, 9216092, 44, 2250484, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(7, 9, 12, 2352480, 850, 8066555, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(8, 8, 9, 7282045, 59, 465435, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(9, 4, 9, 5993638, 768, 4521606, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(10, 4, 12, 9673695, 69, 1086457, '2021-03-17 04:17:51', '2021-03-17 04:17:51');
/*!40000 ALTER TABLE `detail_pembelian` ENABLE KEYS */;

-- Dumping data for table db_mm_iq.detail_penjualan: ~10 rows (approximately)
/*!40000 ALTER TABLE `detail_penjualan` DISABLE KEYS */;
INSERT INTO `detail_penjualan` (`id`, `penjualan_id`, `barang_id`, `harga_jual`, `jumlah`, `sub_total`, `created_at`, `updated_at`) VALUES
	(1, 4, 8, 7515131, 7302, 81834230, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(2, 5, 7, 48484412, 2295, 9421573, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(3, 4, 1, 58159177, 8820, 15522030, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(4, 6, 2, 91259340, 5817, 97804995, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(5, 5, 6, 73173407, 7411, 33786494, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(6, 10, 10, 1368295, 4815, 81694677, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(7, 9, 6, 72219979, 9147, 24161521, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(8, 10, 7, 33541618, 5677, 39726152, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(9, 7, 9, 41221757, 8171, 23271983, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(10, 1, 1, 4985880, 1446, 69220915, '2021-03-17 04:17:51', '2021-03-17 04:17:51');
/*!40000 ALTER TABLE `detail_penjualan` ENABLE KEYS */;

-- Dumping data for table db_mm_iq.migrations: ~11 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(29, '2014_10_12_000000_create_users_table', 1),
	(30, '2014_10_12_100000_create_password_resets_table', 1),
	(31, '2021_02_09_023745_create_table_kategori_barang', 1),
	(32, '2021_02_16_010747_create_table_barang', 1),
	(33, '2021_02_16_011307_create_table_pemasok', 1),
	(34, '2021_02_16_012014_create_table_pelanggan', 1),
	(35, '2021_02_16_014726_create_table_pembelian', 1),
	(36, '2021_02_16_014832_create_table_penjualan', 1),
	(37, '2021_02_16_014905_create_table_tampung_bayar', 1),
	(38, '2021_02_16_020631_create_table_detail_pembelian', 1),
	(39, '2021_02_16_020724_create_table_detail_penjualan', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table db_mm_iq.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table db_mm_iq.pelanggan: ~12 rows (approximately)
/*!40000 ALTER TABLE `pelanggan` DISABLE KEYS */;
INSERT INTO `pelanggan` (`id`, `kode_pelanggan`, `nama`, `alamat`, `no_telp`, `email`, `created_at`, `updated_at`) VALUES
	(1, 'PL01', 'Agus', 'Cianjur', '0818000001', 'bangagus@gmail.com', '2021-03-08 08:20:45', '2021-03-05 14:06:51'),
	(3, 'PL02', 'Udin Saepulah', 'Kp. Lama', '085314273394', 'im12april@gmail.com', '2021-03-05 14:07:35', '2021-03-05 14:07:35'),
	(4, 'PL47', 'Yessi Cici Susanti', 'Gg. K.H. Wahid Hasyim (Kopo) No. 485, Probolinggo 42091, Lampung', '0440 0542 7838', 'xanana36@yahoo.co.id', '2021-03-08 04:55:33', '2021-03-08 04:55:33'),
	(5, 'PL57', 'Heru Budiman', 'Jr. Dahlia No. 29, Banda Aceh 37951, SumUt', '(+62) 345 4189 961', 'swastuti@gmail.com', '2021-03-08 04:55:33', '2021-03-08 04:55:33'),
	(6, 'PL43', 'Sakura Ophelia Pertiwi', 'Jln. Cut Nyak Dien No. 604, Pangkal Pinang 15584, SulSel', '0681 1668 5318', 'cmardhiyah@gmail.com', '2021-03-08 04:55:33', '2021-03-08 04:55:33'),
	(7, 'PL55', 'Emas Wasis Adriansyah', 'Psr. Kiaracondong No. 46, Bontang 97983, SumSel', '(+62) 934 6470 043', 'prasetya.mardhiyah@gmail.com', '2021-03-08 04:55:33', '2021-03-08 04:55:33'),
	(8, 'PL94', 'Dono Malik Setiawan S.T.', 'Psr. Gremet No. 740, Palopo 22744, SulTeng', '(+62) 213 0038 8688', 'zahra89@hutasoit.go.id', '2021-03-08 04:55:33', '2021-03-08 04:55:33'),
	(9, 'PL19', 'Cinta Rahimah', 'Ds. Setia Budi No. 509, Lhokseumawe 71855, BaBel', '0755 4797 653', 'mangunsong.violet@maryati.in', '2021-03-08 04:55:33', '2021-03-08 04:55:33'),
	(10, 'PL55', 'Alika Nasyiah', 'Psr. Mahakam No. 145, Tidore Kepulauan 43131, DKI', '0474 9361 5983', 'awinarno@yahoo.co.id', '2021-03-08 04:55:33', '2021-03-08 04:55:33'),
	(11, 'PL10', 'Bakijan Capa Suwarno M.Farm', 'Kpg. Bahagia  No. 691, Banjarbaru 14814, BaBel', '0674 5318 814', 'ppranowo@gmail.co.id', '2021-03-08 04:55:33', '2021-03-08 04:55:33'),
	(12, 'PL98', 'Ophelia Samiah Prastuti', 'Gg. Cikutra Barat No. 625, Tual 38135, Gorontalo', '0954 5888 058', 'pradipta.carla@firmansyah.desa.id', '2021-03-08 04:55:33', '2021-03-08 04:55:33'),
	(13, 'PL40', 'Hari Prabowo S.Psi', 'Gg. Abdul Rahmat No. 908, Banda Aceh 56673, KalTeng', '0791 0808 3271', 'cakrajiya90@pranowo.in', '2021-03-08 04:55:33', '2021-03-08 04:55:33');
/*!40000 ALTER TABLE `pelanggan` ENABLE KEYS */;

-- Dumping data for table db_mm_iq.pemasok: ~9 rows (approximately)
/*!40000 ALTER TABLE `pemasok` DISABLE KEYS */;
INSERT INTO `pemasok` (`id`, `kode_pemasok`, `nama_pemasok`, `alamat`, `kota`, `no_telp`, `created_at`, `updated_at`) VALUES
	(2, 'P96', 'PT Sihombing Hutasoit', 'Psr. Sutami No. 852, Cimahi 80818, SulSel', 'Sungai Penuh', '(+62) 761 1739 445', '2021-03-08 04:48:50', '2021-03-08 04:48:50'),
	(3, 'P12', 'CV Laksmiwati Novitasari Tbk', 'Jr. R.M. Said No. 834, Langsa 25041, NTB', 'Subulussalam', '(+62) 330 7373 177', '2021-03-08 04:48:50', '2021-03-08 04:48:50'),
	(4, 'P19', 'PD Prasetyo Marpaung Tbk', 'Jln. Bazuka Raya No. 640, Sibolga 22171, SulBar', 'Sungai Penuh', '(+62) 691 3520 545', '2021-03-08 04:48:50', '2021-03-08 04:48:50'),
	(5, 'P98', 'PT Riyanti Handayani', 'Kpg. Rajawali Barat No. 760, Palopo 12688, DIY', 'Cimahi', '(+62) 995 6826 5690', '2021-03-08 04:48:50', '2021-03-08 04:48:50'),
	(6, 'P83', 'CV Mustofa Utami Tbk', 'Kpg. Labu No. 245, Batu 50024, KalTim', 'Blitar', '(+62) 407 5436 428', '2021-03-08 04:48:50', '2021-03-08 04:48:50'),
	(7, 'P49', 'CV Anggraini', 'Jln. Gardujati No. 81, Sabang 98111, JaBar', 'Binjai', '0662 5250 1439', '2021-03-08 04:48:50', '2021-03-08 04:48:50'),
	(8, 'P12', 'Perum Hartati', 'Jr. Cokroaminoto No. 612, Magelang 65588, BaBel', 'Padang', '(+62) 21 9021 337', '2021-03-08 04:48:50', '2021-03-08 04:48:50'),
	(9, 'P24', 'CV Haryanti (Persero) Tbk', 'Jr. Yogyakarta No. 885, Bekasi 17061, Lampung', 'Sukabumi', '0460 8797 5105', '2021-03-08 04:48:50', '2021-03-08 04:48:50'),
	(10, 'P39', 'CV Safitri Purwanti Tbk', 'Gg. Sukabumi No. 33, Lhokseumawe 71527, NTT', 'Langsa', '0721 6276 3160', '2021-03-08 04:48:50', '2021-03-08 04:48:50');
/*!40000 ALTER TABLE `pemasok` ENABLE KEYS */;

-- Dumping data for table db_mm_iq.pembelian: ~10 rows (approximately)
/*!40000 ALTER TABLE `pembelian` DISABLE KEYS */;
INSERT INTO `pembelian` (`id`, `kode_masuk`, `tanggal_masuk`, `total`, `pemasok_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, '4999', '1975-10-22', 522432, 9, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(2, '76190', '1982-12-26', 327914, 7, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(3, '53655', '1974-03-06', 695899, 6, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(4, '81741', '2020-05-28', 671684, 3, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(5, '80126', '1992-10-24', 292351, 9, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(6, '96720', '2011-08-04', 946782, 4, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(7, '27906', '1970-09-06', 746334, 9, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(8, '62258', '2020-05-01', 596201, 6, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(9, '30045', '1979-05-23', 363464, 9, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(10, '14496', '1990-09-21', 274297, 7, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51');
/*!40000 ALTER TABLE `pembelian` ENABLE KEYS */;

-- Dumping data for table db_mm_iq.penjualan: ~10 rows (approximately)
/*!40000 ALTER TABLE `penjualan` DISABLE KEYS */;
INSERT INTO `penjualan` (`id`, `no_faktur`, `tanggal_faktur`, `total_bayar`, `pelanggan_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, '275210', '1975-10-23', 5731005, 8, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(2, '844753', '2004-01-08', 2132965, 11, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(3, '602073', '1970-08-25', 3114619, 3, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(4, '455269', '1991-03-24', 4667272, 13, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(5, '716052', '2007-02-24', 3268856, 4, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(6, '117965', '2001-10-11', 5107552, 8, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(7, '962876', '2011-05-25', 8711907, 6, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(8, '520142', '2010-09-06', 5701400, 10, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(9, '991859', '2007-11-14', 9970826, 1, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(10, '426235', '1981-06-03', 6185178, 9, 1, '2021-03-17 04:17:51', '2021-03-17 04:17:51');
/*!40000 ALTER TABLE `penjualan` ENABLE KEYS */;

-- Dumping data for table db_mm_iq.produk: ~6 rows (approximately)
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` (`id`, `produk`, `created_at`, `updated_at`) VALUES
	(1, 'Permen', '2021-03-08 04:40:42', '2021-03-08 04:40:42'),
	(2, 'Air Mineral', '2021-03-08 04:40:42', '2021-03-10 10:00:56'),
	(3, 'Susu', '2021-03-08 04:40:42', '2021-03-08 04:40:42'),
	(4, 'Air Soda', '2021-03-08 04:40:42', '2021-03-10 10:01:06'),
	(5, 'Es Krim', '2021-03-08 04:40:42', '2021-03-10 10:01:17'),
	(6, 'Roti', '2021-03-08 04:40:42', '2021-03-10 10:01:24');
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;

-- Dumping data for table db_mm_iq.tampung_bayar: ~10 rows (approximately)
/*!40000 ALTER TABLE `tampung_bayar` DISABLE KEYS */;
INSERT INTO `tampung_bayar` (`id`, `penjualan_id`, `total`, `terima`, `kembali`, `created_at`, `updated_at`) VALUES
	(1, 5, 1513550, 311466, 297917, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(2, 6, 3889365, 7517211, 9340439, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(3, 7, 622556, 9740630, 8868470, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(4, 3, 1034957, 3890239, 8450713, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(5, 4, 3698911, 7967955, 4593009, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(6, 8, 9661530, 5619567, 7627129, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(7, 9, 3305766, 3562123, 5990162, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(8, 6, 6485979, 647465, 178066, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(9, 3, 6431758, 1507794, 3851386, '2021-03-17 04:17:51', '2021-03-17 04:17:51'),
	(10, 10, 2642978, 31336, 5980291, '2021-03-17 04:17:51', '2021-03-17 04:17:51');
/*!40000 ALTER TABLE `tampung_bayar` ENABLE KEYS */;

-- Dumping data for table db_mm_iq.users: ~10 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Baktiadi Jarwa Hutagalung S.Pd', 'zulkarnain.hana@example.com', '2021-03-08 02:38:41', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'WrHX1X3PnM', '2021-03-08 02:38:41', '2021-03-08 02:38:41'),
	(2, 'Zelda Suartini', 'fpuspita@example.net', '2021-03-08 02:38:41', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'oXx1dNcTzE', '2021-03-08 02:38:41', '2021-03-08 02:38:41'),
	(3, 'Warji Kairav Budiman S.E.I', 'darmanto.narpati@example.org', '2021-03-08 02:38:41', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'qoQldDyY2c', '2021-03-08 02:38:41', '2021-03-08 02:38:41'),
	(4, 'Widya Purnawati', 'hutagalung.laila@example.org', '2021-03-08 02:38:41', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'MPGlBhFHXY', '2021-03-08 02:38:41', '2021-03-08 02:38:41'),
	(5, 'Adika Hidayanto', 'gunawan.pardi@example.org', '2021-03-08 02:38:41', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'uzUN0QDdmg', '2021-03-08 02:38:41', '2021-03-08 02:38:41'),
	(6, 'Zulfa Fujiati M.M.', 'endah93@example.net', '2021-03-08 02:38:41', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'eQ3G50IN6M', '2021-03-08 02:38:41', '2021-03-08 02:38:41'),
	(7, 'Kairav Suwarno', 'endah95@example.net', '2021-03-08 02:38:41', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'pivVuyujFX', '2021-03-08 02:38:41', '2021-03-08 02:38:41'),
	(8, 'Maya Gawati Wulandari', 'isiregar@example.com', '2021-03-08 02:38:41', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'k7k7GqV0UM', '2021-03-08 02:38:41', '2021-03-08 02:38:41'),
	(9, 'Sakti Hidayanto', 'panji.suryatmi@example.com', '2021-03-08 02:38:41', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '9wudheICCr', '2021-03-08 02:38:41', '2021-03-08 02:38:41'),
	(10, 'Adinata Hairyanto Mustofa', 'utama.mulyanto@example.net', '2021-03-08 02:38:41', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '2aBOukjDnB', '2021-03-08 02:38:41', '2021-03-08 02:38:41');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
