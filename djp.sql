-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 11:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `djp`
--

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id`, `nama`) VALUES
(1, 'Seksi KBP I'),
(2, 'Seksi KBP II'),
(3, 'Seksi KBP III'),
(6, 'Root');

-- --------------------------------------------------------

--
-- Table structure for table `formatmatrik`
--

CREATE TABLE `formatmatrik` (
  `FMid` int(11) NOT NULL,
  `FMajuanId` int(100) NOT NULL,
  `FMisFormal` varchar(100) NOT NULL,
  `FMtglMatrik` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formatmatrik`
--

INSERT INTO `formatmatrik` (`FMid`, `FMajuanId`, `FMisFormal`, `FMtglMatrik`) VALUES
(1, 1, 'YA', '2021-02-01'),
(2, 1, 'TIDAK', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `jenisekspedisi`
--

CREATE TABLE `jenisekspedisi` (
  `JEid` int(11) NOT NULL,
  `JEajuanId` int(50) NOT NULL,
  `JEnamaEkspedisi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenisekspedisi`
--

INSERT INTO `jenisekspedisi` (`JEid`, `JEajuanId`, `JEnamaEkspedisi`) VALUES
(1, 0, '1010R.');

-- --------------------------------------------------------

--
-- Table structure for table `jenisketerangan`
--

CREATE TABLE `jenisketerangan` (
  `JKid` int(11) NOT NULL,
  `JKnama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenisketetapan`
--

CREATE TABLE `jenisketetapan` (
  `JKid` int(11) NOT NULL,
  `JKnama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenisketetapan`
--

INSERT INTO `jenisketetapan` (`JKid`, `JKnama`) VALUES
(1, 'SKPKB'),
(2, 'STP'),
(4, 'STQ');

-- --------------------------------------------------------

--
-- Table structure for table `jenispajak`
--

CREATE TABLE `jenispajak` (
  `jnsPajakId` int(11) NOT NULL,
  `idJenisPemohon` int(11) NOT NULL,
  `NamajenisPajak` varchar(250) NOT NULL,
  `alert1JangkaMaksimal` varchar(250) DEFAULT NULL,
  `alert2IKU` varchar(100) DEFAULT NULL,
  `alert3MitigasiResiko` varchar(250) DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenispajak`
--

INSERT INTO `jenispajak` (`jnsPajakId`, `idJenisPemohon`, `NamajenisPajak`, `alert1JangkaMaksimal`, `alert2IKU`, `alert3MitigasiResiko`, `keterangan`) VALUES
(1, 1, 'Pasal 25 UU KUP', '12', '11', '10', 'Ok'),
(2, 2, 'Pasal 36 (1) huruf b UU KUP', '6', '5', '4', 'Ok'),
(3, 2, 'Pasal 25 UU KUPtest', '10', '8', '6', 'tes12'),
(8, 2, 'Pasal 36 ayat (1) huruf a UU KUP', '6', '5', '4', 'Dari tanggal terima permohonan (LPAD) sampai dengan tanggal SK'),
(9, 1, 'Pasal 15 UU PBB', '12', '11', '12', 'Dari tanggal terima pengajuan keberatan (LPAD) sampai dengan tanggal SK'),
(12, 8, 'Pasal 1212', '4', '5', '4', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `jenispemohon`
--

CREATE TABLE `jenispemohon` (
  `idJenisPemohon` int(11) NOT NULL,
  `JenisPemohon` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `jenispemohon`
--

INSERT INTO `jenispemohon` (`idJenisPemohon`, `JenisPemohon`) VALUES
(1, 'Keberatan'),
(2, 'Non Keberatan'),
(6, 'Dipertimbangkan '),
(8, 'Sengketa');

-- --------------------------------------------------------

--
-- Table structure for table `jenistujuanrespon`
--

CREATE TABLE `jenistujuanrespon` (
  `RESPTUJid` int(11) NOT NULL,
  `RESPTUnama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keputusan`
--

CREATE TABLE `keputusan` (
  `KEPid` int(11) NOT NULL,
  `KEPajuanId` int(250) NOT NULL,
  `KEPnoKeputusan` varchar(250) NOT NULL,
  `KEPtglKeputusan` date NOT NULL,
  `KEPtglKirimSK` date NOT NULL,
  `KEPjangkaKirim` int(100) NOT NULL,
  `KEPAmarKeputusan` varchar(100) NOT NULL,
  `KEPNilaiAkhirKeputusan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keputusan`
--

INSERT INTO `keputusan` (`KEPid`, `KEPajuanId`, `KEPnoKeputusan`, `KEPtglKeputusan`, `KEPtglKirimSK`, `KEPjangkaKirim`, `KEPAmarKeputusan`, `KEPNilaiAkhirKeputusan`) VALUES
(1, 1, '123', '2021-02-16', '2021-02-16', 0, 'Mengabulkan Sebagian', 2000000),
(2, 3, '121212', '2021-02-16', '2021-02-16', 0, 'Menambah', 21212121);

-- --------------------------------------------------------

--
-- Table structure for table `ketetapanpajak`
--

CREATE TABLE `ketetapanpajak` (
  `KPid` int(11) NOT NULL,
  `KPajuanId` int(100) NOT NULL,
  `KPJKid` int(100) NOT NULL,
  `KPNoKetetapan` varchar(100) NOT NULL,
  `KPTgl` date NOT NULL,
  `KPNilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ketetapanpajak`
--

INSERT INTO `ketetapanpajak` (`KPid`, `KPajuanId`, `KPJKid`, `KPNoKetetapan`, `KPTgl`, `KPNilai`) VALUES
(1, 1, 1, '01.456.789.1-217.000', '2020-12-01', 2000000),
(2, 7, 1, '010102', '2021-02-01', 200000),
(3, 0, 1, '145576.01-04-R', '2021-03-25', 2000),
(7, 2, 1, '2934Tf', '2021-04-17', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `ketetapanpajaksub`
--

CREATE TABLE `ketetapanpajaksub` (
  `TETAPAJid` int(11) NOT NULL,
  `TETAPAJajuanSUBID` int(250) NOT NULL,
  `TETAPAJjenis` varchar(250) NOT NULL,
  `TETAPAJnomorKetetapan` varchar(100) NOT NULL,
  `TETAPAJtglKetetapan` date NOT NULL,
  `TETAPAJNilaiKetetapan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ketetapanpajaksub`
--

INSERT INTO `ketetapanpajaksub` (`TETAPAJid`, `TETAPAJajuanSUBID`, `TETAPAJjenis`, `TETAPAJnomorKetetapan`, `TETAPAJtglKetetapan`, `TETAPAJNilaiKetetapan`) VALUES
(1, 3, 'SKPKB', 'U.1234/PAN.Wk/BG.2/2018', '2021-02-17', 200500);

-- --------------------------------------------------------

--
-- Table structure for table `kpp`
--

CREATE TABLE `kpp` (
  `KPPid` int(11) NOT NULL,
  `KPPnama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporanpenelitian`
--

CREATE TABLE `laporanpenelitian` (
  `LPid` int(11) NOT NULL,
  `LPajuanId` int(100) NOT NULL,
  `LPnoLaporan` varchar(100) NOT NULL,
  `LPtglLaporan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporanpenelitian`
--

INSERT INTO `laporanpenelitian` (`LPid`, `LPajuanId`, `LPnoLaporan`, `LPtglLaporan`) VALUES
(1, 1, '08.888.888.8-224.000', '2021-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `objekdigugat`
--

CREATE TABLE `objekdigugat` (
  `OBJGUGATid` int(11) NOT NULL,
  `OBJGUGATajuanSUBID` int(100) NOT NULL,
  `OBJGUGATJenis` varchar(250) NOT NULL,
  `OBJGUGATnoSurat` varchar(250) NOT NULL,
  `OBJGUGATtglSurat` date NOT NULL,
  `OBJGUGATnilaiPutusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `objekdigugat`
--

INSERT INTO `objekdigugat` (`OBJGUGATid`, `OBJGUGATajuanSUBID`, `OBJGUGATJenis`, `OBJGUGATnoSurat`, `OBJGUGATtglSurat`, `OBJGUGATnilaiPutusan`) VALUES
(1, 3, 'Banding', 'U.1234/PAN.Wk/BG.2/2018', '2021-02-17', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `pemberitahuanuntukhadir`
--

CREATE TABLE `pemberitahuanuntukhadir` (
  `SPUHid` int(11) NOT NULL,
  `SPUHajuanId` int(250) NOT NULL,
  `SPUHnoSurat` varchar(250) NOT NULL,
  `SUPtglSurat` date NOT NULL,
  `SPUHstatusKirim` varchar(10) NOT NULL DEFAULT '0',
  `SPUHtglKirim` date NOT NULL,
  `SPUHekpedisi` varchar(50) NOT NULL,
  `SPUHnoResi` varchar(50) NOT NULL,
  `SPUHisHadir` varchar(100) NOT NULL,
  `SPUHnoBAbahasAkhir` varchar(100) NOT NULL,
  `SPUHtglBAbahasAkhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemberitahuanuntukhadir`
--

INSERT INTO `pemberitahuanuntukhadir` (`SPUHid`, `SPUHajuanId`, `SPUHnoSurat`, `SUPtglSurat`, `SPUHstatusKirim`, `SPUHtglKirim`, `SPUHekpedisi`, `SPUHnoResi`, `SPUHisHadir`, `SPUHnoBAbahasAkhir`, `SPUHtglBAbahasAkhir`) VALUES
(1, 1, '28.888.888.8-224.000', '2020-12-01', 'Ya', '2020-12-02', 'tes', '', 'Ya', '18.888.888.8-224.000', '2021-02-16'),
(2, 7, '010102', '2021-02-01', 'Ya', '2021-02-02', '', '', 'Ya', '0102012', '2021-02-24'),
(5, 2, 'd235', '2021-04-16', 'Tidak', '2021-04-16', '40R46', '', 'Ya', 'f325', '1970-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `pencabutanwp`
--

CREATE TABLE `pencabutanwp` (
  `QuitWPid` int(100) NOT NULL,
  `QuitWPajuanID` int(100) NOT NULL,
  `QuitWPnoSurat` varchar(100) NOT NULL,
  `QuitWPtglSurat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pencabutanwp`
--

INSERT INTO `pencabutanwp` (`QuitWPid`, `QuitWPajuanID`, `QuitWPnoSurat`, `QuitWPtglSurat`) VALUES
(1, 2, '1212', '2021-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `penelaahref`
--

CREATE TABLE `penelaahref` (
  `PENid` int(100) NOT NULL,
  `PENNIP` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `PENNama` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `PENDept` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `PENisAktif` tinyint(1) NOT NULL DEFAULT 1,
  `PENPassword` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `PENUserLevelId` int(11) NOT NULL,
  `PENUserLevel` varchar(25) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `penelaahref`
--

INSERT INTO `penelaahref` (`PENid`, `PENNIP`, `PENNama`, `PENDept`, `PENisAktif`, `PENPassword`, `PENUserLevelId`, `PENUserLevel`) VALUES
(2, 'as', 'Root', 'Seksi KBP I', 1, '$2y$10$Ow61c8vK6AYurB7R9ByBcuATTql4Yug4sRK7RxcCk0qUEn7WwR5qG', 0, 'Root'),
(3, 'a1', 'Mangapul - Lv1', 'Seksi KBP II', 1, '$2y$10$GRU8slMCycF7Vh7V4zqTSe3avAn5CXyUzz2RONXVeUjc5.ePls3Vi', 0, 'Level 1'),
(4, 'a2', 'Lv2', 'Seksi KBP II', 1, '$2y$10$LwBhx2hraCSilMxdyOc5Ye77bgF5/R0FACTEiADuQvt6O82WUt7Be', 0, 'Level 2'),
(5, 'a3', 'Lv3', 'Seksi KBP III', 1, '$2y$10$i9gZrwUJbbGKxXx0Gp2PQu9HxUnZ6ZZ3bigCILZEZXte9vSqstMEW', 0, 'Level 3'),
(24, 'a1', 'Level 1 Admin', 'Seksi KBP I', 1, '$2y$10$auQyt9PIx0EWM3IRWoY7fOHXtXNqQ6XP6Nsfk7K3/1ndXlRfDbX8O', 2, 'Level 1 Admin'),
(25, 'a2', 'Level 1 Peneliti', 'Seksi KBP II', 1, '$2y$10$dRxHz/mt1kT2zZJqyyxbAezOvvCxVtbLiI6lSbAusfZTM2wEgXsbG', 1, 'Level 1 Peneliti'),
(26, 'b1', 'Level 2 Admin', 'Seksi KBP II', 1, '$2y$10$zghdMAAvvBRtbniTEz63quBNwoL1xY9PaHZ0Q43CbF6Mr5gvaooF6', 6, 'Level 2 Admin');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `ajuanId` int(11) NOT NULL,
  `ajuanNamaWP` varchar(250) DEFAULT NULL,
  `ajuanNPWP` varchar(200) DEFAULT NULL,
  `ajuanNOP` varchar(100) DEFAULT NULL,
  `ajuanKodeKPP` varchar(100) DEFAULT NULL,
  `ajuanJenisPemohonId` int(11) NOT NULL,
  `ajuanJnsPajakId` int(11) DEFAULT NULL,
  `ajuanJenisPemohon` varchar(100) NOT NULL,
  `ajuanJenisPajak` varchar(100) NOT NULL,
  `ajuanPIC` varchar(100) DEFAULT NULL,
  `ajuanMasaPajak` varchar(100) DEFAULT NULL,
  `ajuanTahunPajak` int(100) DEFAULT NULL,
  `ajuanMataUang` varchar(100) DEFAULT NULL,
  `ajuanDasarPemrosesan` varchar(200) NOT NULL,
  `ajuanTglTerima` date DEFAULT NULL,
  `ajuanAlert1` date DEFAULT NULL,
  `ajuanAlert2` date DEFAULT NULL,
  `ajuanAlert3` date DEFAULT NULL,
  `ajuanKeterangan` text DEFAULT NULL,
  `ajuanNamaSeksiKBP` varchar(250) DEFAULT NULL,
  `ajuanPenelaah` varchar(250) DEFAULT NULL,
  `ajuanClearedHari` int(100) DEFAULT NULL,
  `ajuanStatusAkhir` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`ajuanId`, `ajuanNamaWP`, `ajuanNPWP`, `ajuanNOP`, `ajuanKodeKPP`, `ajuanJenisPemohonId`, `ajuanJnsPajakId`, `ajuanJenisPemohon`, `ajuanJenisPajak`, `ajuanPIC`, `ajuanMasaPajak`, `ajuanTahunPajak`, `ajuanMataUang`, `ajuanDasarPemrosesan`, `ajuanTglTerima`, `ajuanAlert1`, `ajuanAlert2`, `ajuanAlert3`, `ajuanKeterangan`, `ajuanNamaSeksiKBP`, `ajuanPenelaah`, `ajuanClearedHari`, `ajuanStatusAkhir`) VALUES
(1, 'Michael Justin', '01.456.789.1-217.000', '02.456.789.1-217.000', '03.456.789.1-217.000', 1, 1, 'Keberatan', 'Pasal 25 UU KUP', 'Kanwil', '0', 2018, 'IDR', 'PERMOHONAN', '2020-01-31', '2020-12-01', '2020-12-31', '2021-01-31', NULL, NULL, NULL, NULL, 'Lewat Waktu'),
(2, 'Charlie Bong', '11.456.789.1-217.000', '21.456.789.1-217.000', '31.456.789.1-217.000', 2, 2, 'Non Keberatan', 'Pasal 36 (1) huruf b UU KUP', 'Kanwil', '0', 2018, 'IDR', 'PERMOHONAN', '2020-09-01', '2021-01-01', '2021-02-01', '2021-03-01', NULL, NULL, NULL, NULL, 'Pencabutan Permohonan'),
(3, 'Jack', '11.456.789.1-217.000', '01.456.789.1-217.000', '21.456.789.1-217.000', 1, 3, 'Keberatan', 'Pasal 15 UU PBB ', 'Kanwil', '0', 2019, 'IDR', 'PERMOHONAN', '2020-03-15', '2021-01-15', '2021-02-15', '2021-03-15', NULL, NULL, NULL, NULL, 'Tepat Waktu'),
(5, 'Catherine', '01.456.789.1-217.000', '02.456.789.1-217.000', '03.456.789.1-217.000', 1, 3, 'Keberatan', 'Pasal 15 UU PBB ', 'Kanwil', '0', 2019, 'IDR', 'PERMOHONAN', '2020-04-15', '2021-02-15', '2021-03-15', '2021-04-15', NULL, NULL, NULL, NULL, NULL),
(6, 'Linda', 'KEP-00212/KEB/WPJ.34/2019', 'KEP-00212/KEB/WPJ.34/2019', 'KEP-00212/KEB/WPJ.34/2019', 1, 1, 'Keberatan', 'Pasal 25 UU KUP', 'Kanwil', '0', 2019, 'IDR', 'PERMOHONAN', '2020-06-01', '2021-04-01', '2021-05-01', '2021-06-01', NULL, 'Seksi KBP I', 'Root', NULL, NULL),
(7, 'Mangapul', '0102.0202020', '0202.0202020', '03.02.0202020', 1, 1, 'Keberatan', 'Pasal 25 UU KUP', 'Kanwil', '', 2019, 'IDR', 'PERMOHONAN', '2021-01-05', '2021-11-05', '2021-12-05', '2022-01-05', NULL, 'Seksi KBP I', 'Root', NULL, NULL),
(8, 'Andi', '0101.03202', '0101.03202', '0101.03202', 8, 12, 'Sengketa', 'Pasal 1212', 'Kanwil', '', 2019, 'IDR', 'PERMOHONAN', '2021-02-24', '2021-06-24', '2021-07-24', '2021-06-24', NULL, 'Seksi KBP II', 'Mangapul - Lv1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuansub`
--

CREATE TABLE `pengajuansub` (
  `ajuanSUBID` int(11) NOT NULL,
  `ajuanSUBnoSuratPermintaan` varchar(250) NOT NULL,
  `ajuanSUBtglSuratPermintaan` date NOT NULL,
  `ajuanSUBjenisPermintaan` varchar(100) NOT NULL,
  `ajuanSUBalert1` date NOT NULL,
  `ajuanSUBalert2` date NOT NULL,
  `ajuanSUBtglDiterima` date NOT NULL,
  `ajuanSUBNomorSengketa` varchar(100) DEFAULT NULL,
  `ajuanSUBnoSuratBanding` varchar(100) DEFAULT NULL,
  `ajuanSUBtglSuratBanding` varchar(200) DEFAULT NULL,
  `ajuanSUBtglDiterimaPP` date DEFAULT NULL,
  `ajuanSUBnamaWP` varchar(250) DEFAULT NULL,
  `ajuanSUBNPWP` varchar(100) DEFAULT NULL,
  `ajuanSUBNOP` varchar(100) DEFAULT NULL,
  `ajuanSUBkodeKPP` varchar(250) DEFAULT NULL,
  `ajuanSUBjenisPajak` varchar(250) DEFAULT NULL,
  `ajuanSUBmasaPajak` varchar(100) DEFAULT NULL,
  `ajuanSUBtahunPajak` varchar(100) DEFAULT NULL,
  `ajuanSUBmataUang` varchar(100) DEFAULT NULL,
  `ajuanSUBstatusDalamLaporan` varchar(250) DEFAULT NULL,
  `ajuanSUBket` varchar(200) DEFAULT NULL,
  `ajuanSUBnoUB` varchar(250) DEFAULT NULL,
  `ajuanSUBtglUB` varchar(200) DEFAULT NULL,
  `ajuanSUBtglKirimUB` varchar(200) DEFAULT NULL,
  `ajuanSUBNamaPK` varchar(100) DEFAULT NULL,
  `ajuanSUBstatusArsip` varchar(100) DEFAULT NULL,
  `ajuanSUBjangkaWaktuSelesaiHari` varchar(100) DEFAULT NULL,
  `ajuanSUBKPB` varchar(100) DEFAULT NULL,
  `ajuanStatusAkhir` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuansub`
--

INSERT INTO `pengajuansub` (`ajuanSUBID`, `ajuanSUBnoSuratPermintaan`, `ajuanSUBtglSuratPermintaan`, `ajuanSUBjenisPermintaan`, `ajuanSUBalert1`, `ajuanSUBalert2`, `ajuanSUBtglDiterima`, `ajuanSUBNomorSengketa`, `ajuanSUBnoSuratBanding`, `ajuanSUBtglSuratBanding`, `ajuanSUBtglDiterimaPP`, `ajuanSUBnamaWP`, `ajuanSUBNPWP`, `ajuanSUBNOP`, `ajuanSUBkodeKPP`, `ajuanSUBjenisPajak`, `ajuanSUBmasaPajak`, `ajuanSUBtahunPajak`, `ajuanSUBmataUang`, `ajuanSUBstatusDalamLaporan`, `ajuanSUBket`, `ajuanSUBnoUB`, `ajuanSUBtglUB`, `ajuanSUBtglKirimUB`, `ajuanSUBNamaPK`, `ajuanSUBstatusArsip`, `ajuanSUBjangkaWaktuSelesaiHari`, `ajuanSUBKPB`, `ajuanStatusAkhir`) VALUES
(1, 'U.0099/PAN.Wk/BG.2/2018', '2021-02-01', 'SURAT URAIAN BANDING (SUB)', '2021-03-15', '2021-05-01', '2021-02-05', 'S.0099/PAN.Wk/BG.2/2018', 'B.0099/PAN.Wk/BG.2/2018', '2021-02-06', '2021-02-07', 'Brian', 'U.0099/PAN.Wk/BG.2/2018', 'N.0099/PAN.Wk/BG.2/2018', 'K.0099/PAN.Wk/BG.2/2018', 'Pasal 25 UU KUP', '', '2019', 'IDR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'U.8181/PAN.Wk/BG.2/2018', '2021-01-01', 'SURAT TANGGAPAN ATAS GUGATAN ( STG )', '2021-01-15', '2021-02-01', '2021-02-17', 'S.8181/PAN.Wk/BG.2/2018', 'S.8181/PAN.Wk/BG.2/2018', '2021-02-17', '2021-02-17', 'Budianto', 'N.8181/PAN.Wk/BG.2/2018', 'P.8181/PAN.Wk/BG.2/2018', 'K.8181/PAN.Wk/BG.2/2018', 'Pasal 36 ayat (1) huruf a UU KUP', '', '2019', 'IDR', NULL, 'Late', 'U.8181/PAN.Wk/BG.2/2018', '2021-02-17', '2021-02-17', NULL, 'Clear', '+47 days', '2', 'Lewat Waktu'),
(3, 'U.1234/PAN.Wk/BG.2/2018', '2021-01-01', 'SURAT URAIAN BANDING (SUB)', '2021-02-12', '2021-04-01', '2021-02-17', 'U.1234/PAN.Wk/BG.2/2018', 'U.1234/PAN.Wk/BG.2/2018', '2021-02-17', '2021-02-17', 'Cepi', 'N.1234/PAN.Wk/BG.2/2018', 'N.1234/PAN.Wk/BG.2/2018', 'K.1234/PAN.Wk/BG.2/2018', 'Pasal 15 UU PBB ', '', '2010', 'IDR', NULL, 'Complete', 'U.8181/PAN.Wk/BG.2/2018', '2021-02-17', '2021-02-17', NULL, 'Clear', '+47 days', '2', 'Tepat Waktu'),
(4, 'U.1234/PAN.Wk/BG.2/2018', '2021-02-01', 'SUB', '2021-03-15', '2021-05-01', '2021-02-02', 'S.1234/PAN.Wk/BG.2/2018', 'S.1234/PAN.Wk/BG.2/2018', '2021-02-05', '2021-02-05', 'Frank', 'N.1234/PAN.Wk/BG.2/2018', 'U.1234/PAN.Wk/BG.2/2018', 'U.1234/PAN.Wk/BG.2/2018', 'Pasal 25 UU KUP', '', '2008', 'IDR', NULL, NULL, NULL, NULL, NULL, 'Root', NULL, NULL, NULL, NULL),
(5, 'SP-333/WPJ.34/2019', '2021-01-15', 'SUB', '2021-02-26', '2021-04-15', '2021-02-01', 'SP-333/WPJ.34/2019', 'SP-333/WPJ.34/2019', '2021-02-02', '2021-02-02', 'Aprilia', 'SP-333/WPJ.34/2019', 'SP-333/WPJ.34/2019', 'SP-333/WPJ.34/2019', 'Pasal 25 UU KUP', '', '2009', 'IDR', NULL, NULL, NULL, NULL, NULL, 'Lv1', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengantarkpp`
--

CREATE TABLE `pengantarkpp` (
  `PKPPid` int(11) NOT NULL,
  `PKPPajuanId` int(100) NOT NULL,
  `PKPPnoSurat` varchar(100) NOT NULL,
  `PKPPtglSurat` date NOT NULL,
  `PKPPtglDiterima` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengantarkpp`
--

INSERT INTO `pengantarkpp` (`PKPPid`, `PKPPajuanId`, `PKPPnoSurat`, `PKPPtglSurat`, `PKPPtglDiterima`) VALUES
(1, 1, '08.888.888.8-224.000', '2020-12-31', '2021-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `penuserlevelref`
--

CREATE TABLE `penuserlevelref` (
  `PENUserLevelId` int(10) NOT NULL,
  `PENUserLevelNama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penuserlevelref`
--

INSERT INTO `penuserlevelref` (`PENUserLevelId`, `PENUserLevelNama`) VALUES
(1, 'Level 1 Peneliti'),
(2, 'Level 1 Admin'),
(5, 'Level 2 Peneliti'),
(6, 'Level 2 Admin'),
(7, 'Level 3');

-- --------------------------------------------------------

--
-- Table structure for table `permintaansuratkpp`
--

CREATE TABLE `permintaansuratkpp` (
  `PSKPPid` int(11) NOT NULL,
  `PSKPPajuanId` int(100) NOT NULL,
  `PSKPPNoSurat` varchar(100) NOT NULL,
  `PSKPPtglSurat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permintaansuratkpp`
--

INSERT INTO `permintaansuratkpp` (`PSKPPid`, `PSKPPajuanId`, `PSKPPNoSurat`, `PSKPPtglSurat`) VALUES
(4, 10, 'ND-444/WPJ.34/BD.06/2018', '2020-11-01'),
(5, 1, '08.888.888.8-224.000', '2020-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `permohonanwp`
--

CREATE TABLE `permohonanwp` (
  `PWPid` int(11) NOT NULL,
  `PWPajuanId` int(100) NOT NULL,
  `PWPnoSurat` varchar(100) NOT NULL,
  `PWPtglSurat` date NOT NULL,
  `PWPnoLPAD` varchar(100) NOT NULL,
  `PWPtglLPAD` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permohonanwp`
--

INSERT INTO `permohonanwp` (`PWPid`, `PWPajuanId`, `PWPnoSurat`, `PWPtglSurat`, `PWPnoLPAD`, `PWPtglLPAD`) VALUES
(1, 1, '08.888.888.8-224.000', '2021-01-01', '123', '2021-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `responkanwil`
--

CREATE TABLE `responkanwil` (
  `RESPid` int(11) NOT NULL,
  `RESPajuanSUBID` varchar(250) NOT NULL,
  `RESPjenisTujuan` varchar(250) NOT NULL,
  `RESPnoSurat` varchar(250) NOT NULL,
  `RESPtglSurat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `responkanwil`
--

INSERT INTO `responkanwil` (`RESPid`, `RESPajuanSUBID`, `RESPjenisTujuan`, `RESPnoSurat`, `RESPtglSurat`) VALUES
(1, '3', 'Pengadilan Pajak', 'U.1234/PAN.Wk/BG.2/2018', '2021-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `subketetapanpajak`
--

CREATE TABLE `subketetapanpajak` (
  `TETAPAJid` int(11) NOT NULL,
  `TETAPAJajuanSUBID` varchar(250) NOT NULL,
  `TETAPAjenis` varchar(100) NOT NULL,
  `TETAPAnomorKetetapan` int(250) NOT NULL,
  `TETAPAtglKetetapan` date NOT NULL,
  `TETAPANilaiKetetapan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `substg`
--

CREATE TABLE `substg` (
  `SUBSTGid` int(11) NOT NULL,
  `SUBSTGnama` varchar(250) NOT NULL,
  `SUBSTGalert1` varchar(100) NOT NULL,
  `SUBSTGalert2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `substg`
--

INSERT INTO `substg` (`SUBSTGid`, `SUBSTGnama`, `SUBSTGalert1`, `SUBSTGalert2`) VALUES
(1, 'SUB', '3', '1.5'),
(2, 'STG', '1', '0.5'),
(5, 'STW', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `substgref`
--

CREATE TABLE `substgref` (
  `SUBSTGId` int(11) NOT NULL,
  `SUBSTGNama` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `SUBSTGAlert1` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `SUBSTGAlert2` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `suratpembuktianwp`
--

CREATE TABLE `suratpembuktianwp` (
  `SPWPid` int(11) NOT NULL,
  `SPWPajuanId` int(100) NOT NULL,
  `SPWPnoSurat` varchar(100) NOT NULL,
  `SPWPtglSurat` date NOT NULL,
  `SPWPtujuan` varchar(250) NOT NULL,
  `SPWPStatus` tinyint(1) NOT NULL DEFAULT 0,
  `SPWPisRespon` varchar(10) NOT NULL,
  `SPWPnoSuratRespon` varchar(250) NOT NULL,
  `SPWPtglSuratRespon` date DEFAULT NULL,
  `SPWPketeranganRespon` text NOT NULL,
  `SPWPisDatang` varchar(10) NOT NULL,
  `SPWPnoBeritaAcara` varchar(250) NOT NULL,
  `SPWPtglBeritaAcara` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suratpembuktianwp`
--

INSERT INTO `suratpembuktianwp` (`SPWPid`, `SPWPajuanId`, `SPWPnoSurat`, `SPWPtglSurat`, `SPWPtujuan`, `SPWPStatus`, `SPWPisRespon`, `SPWPnoSuratRespon`, `SPWPtglSuratRespon`, `SPWPketeranganRespon`, `SPWPisDatang`, `SPWPnoBeritaAcara`, `SPWPtglBeritaAcara`) VALUES
(1, 1, '08.888.888.8-224.000', '2020-10-01', 'WP', 1, '0', '', NULL, '', 'Ya', '18.888.888.8-224.000', '2021-02-01'),
(2, 1, '09.888.888.8-224.000', '2020-11-10', 'Pemeriksa', 0, '0', '', NULL, '', '', '', '0000-00-00'),
(3, 7, '0202', '2021-02-02', 'WP', 0, '0', '', NULL, '', '', '', '0000-00-00'),
(5, 2, '1010Rr.', '2021-04-13', 'WP', 0, '', '', NULL, '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `surattugas`
--

CREATE TABLE `surattugas` (
  `STid` int(11) NOT NULL,
  `STajuanId` int(100) NOT NULL,
  `STnoSurat` int(100) NOT NULL,
  `STtglSurat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surattugas`
--

INSERT INTO `surattugas` (`STid`, `STajuanId`, `STnoSurat`, `STtglSurat`) VALUES
(1, 1, 8888, '2021-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `v_jenispajak`
--

CREATE TABLE `v_jenispajak` (
  `idJenisPemohon` int(11) DEFAULT 0,
  `JenisPemohon` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `jnsPajakId` int(11) NOT NULL DEFAULT 0,
  `NamajenisPajak` varchar(250) NOT NULL,
  `alert1JangkaMaksimal` varchar(250) DEFAULT NULL,
  `alert2IKU` varchar(100) DEFAULT NULL,
  `alert3MitigasiResiko` varchar(250) DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `v_pengajuan`
--

CREATE TABLE `v_pengajuan` (
  `ajuanId` int(11) NOT NULL,
  `ajuanNamaWP` varchar(250) DEFAULT NULL,
  `ajuanNPWP` varchar(200) DEFAULT NULL,
  `ajuanNOP` varchar(100) DEFAULT NULL,
  `ajuanKodeKPP` varchar(100) DEFAULT NULL,
  `ajuanJenisPemohonId` int(11) NOT NULL,
  `ajuanJnsPajakId` int(11) DEFAULT NULL,
  `ajuanJenisPemohon` varchar(100) NOT NULL,
  `ajuanJenisPajak` varchar(100) NOT NULL,
  `ajuanPIC` varchar(100) DEFAULT NULL,
  `ajuanMasaPajak` varchar(100) DEFAULT NULL,
  `ajuanTahunPajak` int(100) DEFAULT NULL,
  `ajuanMataUang` varchar(100) DEFAULT NULL,
  `ajuanDasarPemrosesan` varchar(200) NOT NULL,
  `ajuanTglTerima` date DEFAULT NULL,
  `ajuanAlert1` date DEFAULT NULL,
  `ajuanAlert2` date DEFAULT NULL,
  `ajuanAlert3` date DEFAULT NULL,
  `ajuanKeterangan` text DEFAULT NULL,
  `ajuanNamaSeksiKBP` varchar(250) DEFAULT NULL,
  `ajuanPenelaah` varchar(250) DEFAULT NULL,
  `ajuanClearedHari` int(100) DEFAULT NULL,
  `ajuanStatusAkhir` varchar(100) DEFAULT NULL,
  `KEPtglKeputusan` date DEFAULT NULL,
  `QuitWPtglSurat` date DEFAULT NULL,
  `jangka_waktu_selesai` bigint(21) DEFAULT NULL,
  `status_open` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `v_pengajuan`
--

INSERT INTO `v_pengajuan` (`ajuanId`, `ajuanNamaWP`, `ajuanNPWP`, `ajuanNOP`, `ajuanKodeKPP`, `ajuanJenisPemohonId`, `ajuanJnsPajakId`, `ajuanJenisPemohon`, `ajuanJenisPajak`, `ajuanPIC`, `ajuanMasaPajak`, `ajuanTahunPajak`, `ajuanMataUang`, `ajuanDasarPemrosesan`, `ajuanTglTerima`, `ajuanAlert1`, `ajuanAlert2`, `ajuanAlert3`, `ajuanKeterangan`, `ajuanNamaSeksiKBP`, `ajuanPenelaah`, `ajuanClearedHari`, `ajuanStatusAkhir`, `KEPtglKeputusan`, `QuitWPtglSurat`, `jangka_waktu_selesai`, `status_open`) VALUES
(1, 'Andi', '0101.03202', '0101.03202', '0101.03202', 1, 1, 'Keberatan', 'Pasal 25 UU KUP', 'Kanwil', '0', 2020, 'IDR', 'PERMOHONAN', '2021-03-25', '2022-01-25', '2022-02-25', '2022-03-25', NULL, 'Seksi KBP I', 'Root', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Andi', '0101.03202', '0101.03202', '0101.03202', 1, 1, 'Keberatan', 'Pasal 25 UU KUP', 'Kanwil', '0', 2020, 'SGD', 'PERMOHONAN', '2021-03-29', '2022-01-28', '2022-02-28', '2022-03-28', NULL, 'Seksi KBP II', 'Mangapul - Lv1', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'a', 'a', 'a', 'a', 6, 3, 'Dipertimbangkan ', 'Pasal 25 UU KUPtest', NULL, '2020', 2020, 'USD', 'NON-KEBERATAN', '2021-04-23', '1969-12-31', '1969-12-31', '1969-12-31', NULL, 'Seksi KBP II', 'Mangapul - Lv1', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `v_pengajuansub`
--

CREATE TABLE `v_pengajuansub` (
  `ajuanSUBID` int(11) NOT NULL DEFAULT 0,
  `ajuanSUBnoSuratPermintaan` varchar(250) NOT NULL,
  `ajuanSUBtglSuratPermintaan` date NOT NULL,
  `ajuanSUBjenisPermintaan` varchar(100) NOT NULL,
  `ajuanSUBalert1` date NOT NULL,
  `ajuanSUBalert2` date NOT NULL,
  `ajuanSUBtglDiterima` date NOT NULL,
  `ajuanSUBNomorSengketa` varchar(100) DEFAULT NULL,
  `ajuanSUBnoSuratBanding` varchar(100) DEFAULT NULL,
  `ajuanSUBtglSuratBanding` varchar(200) DEFAULT NULL,
  `ajuanSUBtglDiterimaPP` date DEFAULT NULL,
  `ajuanSUBnamaWP` varchar(250) DEFAULT NULL,
  `ajuanSUBNPWP` varchar(100) DEFAULT NULL,
  `ajuanSUBNOP` varchar(100) DEFAULT NULL,
  `ajuanSUBkodeKPP` varchar(250) DEFAULT NULL,
  `ajuanSUBjenisPajak` varchar(250) DEFAULT NULL,
  `ajuanSUBmasaPajak` varchar(100) DEFAULT NULL,
  `ajuanSUBtahunPajak` varchar(100) DEFAULT NULL,
  `ajuanSUBmataUang` varchar(100) DEFAULT NULL,
  `ajuanSUBstatusDalamLaporan` varchar(250) DEFAULT NULL,
  `ajuanSUBket` varchar(200) DEFAULT NULL,
  `ajuanSUBnoUB` varchar(250) DEFAULT NULL,
  `ajuanSUBtglUB` varchar(200) DEFAULT NULL,
  `ajuanSUBtglKirimUB` varchar(200) DEFAULT NULL,
  `ajuanSUBNamaPK` varchar(100) DEFAULT NULL,
  `ajuanSUBstatusArsip` varchar(100) DEFAULT NULL,
  `ajuanSUBjangkaWaktuSelesaiHari` varchar(100) DEFAULT NULL,
  `ajuanSUBKPB` varchar(100) DEFAULT NULL,
  `ajuanStatusAkhir` varchar(100) DEFAULT NULL,
  `jangka_waktu_selesai` bigint(21) DEFAULT NULL,
  `status_open` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formatmatrik`
--
ALTER TABLE `formatmatrik`
  ADD PRIMARY KEY (`FMid`);

--
-- Indexes for table `jenisekspedisi`
--
ALTER TABLE `jenisekspedisi`
  ADD PRIMARY KEY (`JEid`);

--
-- Indexes for table `jenisketerangan`
--
ALTER TABLE `jenisketerangan`
  ADD PRIMARY KEY (`JKid`);

--
-- Indexes for table `jenisketetapan`
--
ALTER TABLE `jenisketetapan`
  ADD PRIMARY KEY (`JKid`);

--
-- Indexes for table `jenispajak`
--
ALTER TABLE `jenispajak`
  ADD PRIMARY KEY (`jnsPajakId`);

--
-- Indexes for table `jenispemohon`
--
ALTER TABLE `jenispemohon`
  ADD PRIMARY KEY (`idJenisPemohon`);

--
-- Indexes for table `jenistujuanrespon`
--
ALTER TABLE `jenistujuanrespon`
  ADD PRIMARY KEY (`RESPTUJid`);

--
-- Indexes for table `keputusan`
--
ALTER TABLE `keputusan`
  ADD PRIMARY KEY (`KEPid`);

--
-- Indexes for table `ketetapanpajak`
--
ALTER TABLE `ketetapanpajak`
  ADD PRIMARY KEY (`KPid`);

--
-- Indexes for table `ketetapanpajaksub`
--
ALTER TABLE `ketetapanpajaksub`
  ADD PRIMARY KEY (`TETAPAJid`);

--
-- Indexes for table `kpp`
--
ALTER TABLE `kpp`
  ADD PRIMARY KEY (`KPPid`);

--
-- Indexes for table `laporanpenelitian`
--
ALTER TABLE `laporanpenelitian`
  ADD PRIMARY KEY (`LPid`);

--
-- Indexes for table `objekdigugat`
--
ALTER TABLE `objekdigugat`
  ADD PRIMARY KEY (`OBJGUGATid`);

--
-- Indexes for table `pemberitahuanuntukhadir`
--
ALTER TABLE `pemberitahuanuntukhadir`
  ADD PRIMARY KEY (`SPUHid`);

--
-- Indexes for table `pencabutanwp`
--
ALTER TABLE `pencabutanwp`
  ADD PRIMARY KEY (`QuitWPid`);

--
-- Indexes for table `penelaahref`
--
ALTER TABLE `penelaahref`
  ADD PRIMARY KEY (`PENid`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`ajuanId`);

--
-- Indexes for table `pengajuansub`
--
ALTER TABLE `pengajuansub`
  ADD PRIMARY KEY (`ajuanSUBID`);

--
-- Indexes for table `pengantarkpp`
--
ALTER TABLE `pengantarkpp`
  ADD PRIMARY KEY (`PKPPid`);

--
-- Indexes for table `penuserlevelref`
--
ALTER TABLE `penuserlevelref`
  ADD PRIMARY KEY (`PENUserLevelId`);

--
-- Indexes for table `permintaansuratkpp`
--
ALTER TABLE `permintaansuratkpp`
  ADD PRIMARY KEY (`PSKPPid`);

--
-- Indexes for table `permohonanwp`
--
ALTER TABLE `permohonanwp`
  ADD PRIMARY KEY (`PWPid`);

--
-- Indexes for table `responkanwil`
--
ALTER TABLE `responkanwil`
  ADD PRIMARY KEY (`RESPid`);

--
-- Indexes for table `subketetapanpajak`
--
ALTER TABLE `subketetapanpajak`
  ADD PRIMARY KEY (`TETAPAJid`);

--
-- Indexes for table `substg`
--
ALTER TABLE `substg`
  ADD PRIMARY KEY (`SUBSTGid`);

--
-- Indexes for table `substgref`
--
ALTER TABLE `substgref`
  ADD PRIMARY KEY (`SUBSTGId`);

--
-- Indexes for table `suratpembuktianwp`
--
ALTER TABLE `suratpembuktianwp`
  ADD PRIMARY KEY (`SPWPid`);

--
-- Indexes for table `surattugas`
--
ALTER TABLE `surattugas`
  ADD PRIMARY KEY (`STid`);

--
-- Indexes for table `v_pengajuan`
--
ALTER TABLE `v_pengajuan`
  ADD PRIMARY KEY (`ajuanId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `formatmatrik`
--
ALTER TABLE `formatmatrik`
  MODIFY `FMid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenisekspedisi`
--
ALTER TABLE `jenisekspedisi`
  MODIFY `JEid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenisketerangan`
--
ALTER TABLE `jenisketerangan`
  MODIFY `JKid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenisketetapan`
--
ALTER TABLE `jenisketetapan`
  MODIFY `JKid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenispajak`
--
ALTER TABLE `jenispajak`
  MODIFY `jnsPajakId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jenispemohon`
--
ALTER TABLE `jenispemohon`
  MODIFY `idJenisPemohon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jenistujuanrespon`
--
ALTER TABLE `jenistujuanrespon`
  MODIFY `RESPTUJid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keputusan`
--
ALTER TABLE `keputusan`
  MODIFY `KEPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ketetapanpajak`
--
ALTER TABLE `ketetapanpajak`
  MODIFY `KPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ketetapanpajaksub`
--
ALTER TABLE `ketetapanpajaksub`
  MODIFY `TETAPAJid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kpp`
--
ALTER TABLE `kpp`
  MODIFY `KPPid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporanpenelitian`
--
ALTER TABLE `laporanpenelitian`
  MODIFY `LPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `objekdigugat`
--
ALTER TABLE `objekdigugat`
  MODIFY `OBJGUGATid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemberitahuanuntukhadir`
--
ALTER TABLE `pemberitahuanuntukhadir`
  MODIFY `SPUHid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pencabutanwp`
--
ALTER TABLE `pencabutanwp`
  MODIFY `QuitWPid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penelaahref`
--
ALTER TABLE `penelaahref`
  MODIFY `PENid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `ajuanId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengajuansub`
--
ALTER TABLE `pengajuansub`
  MODIFY `ajuanSUBID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengantarkpp`
--
ALTER TABLE `pengantarkpp`
  MODIFY `PKPPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penuserlevelref`
--
ALTER TABLE `penuserlevelref`
  MODIFY `PENUserLevelId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permintaansuratkpp`
--
ALTER TABLE `permintaansuratkpp`
  MODIFY `PSKPPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permohonanwp`
--
ALTER TABLE `permohonanwp`
  MODIFY `PWPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `responkanwil`
--
ALTER TABLE `responkanwil`
  MODIFY `RESPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subketetapanpajak`
--
ALTER TABLE `subketetapanpajak`
  MODIFY `TETAPAJid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `substg`
--
ALTER TABLE `substg`
  MODIFY `SUBSTGid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `substgref`
--
ALTER TABLE `substgref`
  MODIFY `SUBSTGId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suratpembuktianwp`
--
ALTER TABLE `suratpembuktianwp`
  MODIFY `SPWPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `surattugas`
--
ALTER TABLE `surattugas`
  MODIFY `STid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `v_pengajuan`
--
ALTER TABLE `v_pengajuan`
  MODIFY `ajuanId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
