-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 03:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

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
CREATE DATABASE IF NOT EXISTS `djp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE `djp`;

-- --------------------------------------------------------

--
-- Table structure for table `amar_keputusan`
--

DROP TABLE IF EXISTS `amar_keputusan`;
CREATE TABLE `amar_keputusan` (
  `IdAmar` int(11) NOT NULL,
  `AmarKeputusan` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `amar_keputusan`
--

INSERT INTO `amar_keputusan` (`IdAmar`, `AmarKeputusan`) VALUES
(1, 'Mengabulkan Sebagian'),
(2, 'Menambah');

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

DROP TABLE IF EXISTS `departemen`;
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

DROP TABLE IF EXISTS `formatmatrik`;
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
(1, 2, 'TIDAK', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `jenisekspedisi`
--

DROP TABLE IF EXISTS `jenisekspedisi`;
CREATE TABLE `jenisekspedisi` (
  `JEid` int(11) NOT NULL,
  `JEnamaEkspedisi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenisekspedisi`
--

INSERT INTO `jenisekspedisi` (`JEid`, `JEnamaEkspedisi`) VALUES
(1, 'JNE'),
(2, 'Pos Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `jenisgugatan`
--

DROP TABLE IF EXISTS `jenisgugatan`;
CREATE TABLE `jenisgugatan` (
  `GUGATid` int(11) NOT NULL,
  `GUGATjenis` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `jenisgugatan`
--

INSERT INTO `jenisgugatan` (`GUGATid`, `GUGATjenis`) VALUES
(1, 'Banding'),
(2, 'Gugat');

-- --------------------------------------------------------

--
-- Table structure for table `jenisketerangan`
--

DROP TABLE IF EXISTS `jenisketerangan`;
CREATE TABLE `jenisketerangan` (
  `JKid` int(11) NOT NULL,
  `JKnama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenisketetapan`
--

DROP TABLE IF EXISTS `jenisketetapan`;
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

DROP TABLE IF EXISTS `jenispajak`;
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
(8, 2, 'Pasal 36 ayat (1) huruf a UU KUP', '6', '5', '4', 'Dari tanggal terima permohonan (LPAD) sampai dengan tanggal SK'),
(9, 1, 'Pasal 15 UU PBB', '12', '11', '10', 'Dari tanggal terima pengajuan keberatan (LPAD) sampai dengan tanggal SK'),
(15, 2, 'Pasal 36 ayat (1) huruf c UU KUP', '6', '5', '4', 'Dari tanggal terima permohonan (LPAD) sampai dengan tanggal SK');

-- --------------------------------------------------------

--
-- Table structure for table `jenispemohon`
--

DROP TABLE IF EXISTS `jenispemohon`;
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

DROP TABLE IF EXISTS `jenistujuanrespon`;
CREATE TABLE `jenistujuanrespon` (
  `RESPTUJid` int(11) NOT NULL,
  `RESPTUnama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keputusan`
--

DROP TABLE IF EXISTS `keputusan`;
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
(1, 2, '0101', '2021-06-01', '2021-06-02', 1, 'Menolak', 2000000),
(3, 1, '0101-Dicabut', '2021-06-01', '2021-06-13', 12, 'Dicabut oleh WP', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `ketetapanpajak`
--

DROP TABLE IF EXISTS `ketetapanpajak`;
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
(1, 1, 1, '01.TAP21', '2021-06-01', 3000000),
(2, 2, 2, '01TAP', '2021-06-02', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `ketetapanpajaksub`
--

DROP TABLE IF EXISTS `ketetapanpajaksub`;
CREATE TABLE `ketetapanpajaksub` (
  `TETAPAJid` int(11) NOT NULL,
  `TETAPAJajuanSUBID` int(250) NOT NULL,
  `TETAPAJjenis` varchar(250) NOT NULL,
  `TETAPAJnomorKetetapan` varchar(100) NOT NULL,
  `TETAPAJtglKetetapan` date NOT NULL,
  `TETAPAJNilaiKetetapan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kpp`
--

DROP TABLE IF EXISTS `kpp`;
CREATE TABLE `kpp` (
  `KPPid` int(11) NOT NULL,
  `KPPnama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporanpenelitian`
--

DROP TABLE IF EXISTS `laporanpenelitian`;
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
(1, 2, '0101LP', '2021-06-09'),
(2, 1, '0101LP', '2021-06-02'),
(3, 4, '0101', '2021-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `objekdigugat`
--

DROP TABLE IF EXISTS `objekdigugat`;
CREATE TABLE `objekdigugat` (
  `OBJGUGATid` int(11) NOT NULL,
  `OBJGUGATajuanSUBID` int(100) NOT NULL,
  `OBJGUGATJenis` varchar(250) NOT NULL,
  `OBJGUGATnoSurat` varchar(250) NOT NULL,
  `OBJGUGATtglSurat` date NOT NULL,
  `OBJGUGATnilaiPutusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemberitahuanuntukhadir`
--

DROP TABLE IF EXISTS `pemberitahuanuntukhadir`;
CREATE TABLE `pemberitahuanuntukhadir` (
  `SPUHid` int(11) NOT NULL,
  `SPUHajuanId` int(250) NOT NULL,
  `SPUHnoSurat` varchar(250) NOT NULL,
  `SUPtglSurat` date NOT NULL,
  `SPUHstatusKirim` varchar(10) NOT NULL DEFAULT '0',
  `SPUHtglKirim` date NOT NULL,
  `SPWPisRespon` varchar(10) NOT NULL,
  `SPWPnoSuratRespon` varchar(100) NOT NULL,
  `SPWPtglSuratRespon` date DEFAULT NULL,
  `SPWPketeranganRespon` varchar(200) NOT NULL,
  `SPUHekpedisi` varchar(50) NOT NULL,
  `SPUHnoResi` varchar(50) NOT NULL,
  `SPUHisHadir` varchar(100) NOT NULL,
  `SPUHnoBAbahasAkhir` varchar(100) NOT NULL,
  `SPUHtglBAbahasAkhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemberitahuanuntukhadir`
--

INSERT INTO `pemberitahuanuntukhadir` (`SPUHid`, `SPUHajuanId`, `SPUHnoSurat`, `SUPtglSurat`, `SPUHstatusKirim`, `SPUHtglKirim`, `SPWPisRespon`, `SPWPnoSuratRespon`, `SPWPtglSuratRespon`, `SPWPketeranganRespon`, `SPUHekpedisi`, `SPUHnoResi`, `SPUHisHadir`, `SPUHnoBAbahasAkhir`, `SPUHtglBAbahasAkhir`) VALUES
(1, 2, '01SPUH', '2021-06-02', '1', '2021-06-02', 'Ya', '0101', '2021-06-02', 'OK', 'JNE', '0101', 'Ya', 'BA', '2021-06-04'),
(2, 2, '02SPUH', '2021-06-02', 'Ya', '2021-06-02', '', '', NULL, '', 'JNE', '010101', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pencabutanwp`
--

DROP TABLE IF EXISTS `pencabutanwp`;
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
(1, 1, '0101-Dicabut', '2021-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `penelaahref`
--

DROP TABLE IF EXISTS `penelaahref`;
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
(2, 'as', 'Root', 'Seksi KBP I', 1, '$2y$10$JxJqhfQv0nqCwGLNiobXlO.sAyAnGv..Cj2k1AaALjwOcet1aICmy', 0, 'Root'),
(3, 'l1a', 'Lv1 - Admin', 'Seksi KBP II', 1, '$2y$10$lxJ8HLMYFumhhKgFIu1zpOQj2iiQA6.mjpNCvZLv6U687SyAXVuEy', 1, 'Level1-Admin'),
(4, 'l1p', 'L1Peneliti', 'Seksi KBP II', 1, '$2y$10$gfzz0lA7KJAEnPozApH45ejRHSRUvE8QSmiBoW/wgQ0ORPHc5v0M2', 0, 'Level1-Peneliti'),
(5, 'editor', 'Editor', 'Seksi KBP III', 1, '$2y$10$96Nk4vEH6fW960VXTcl3kOGxmDE7ifry3jXM59bQCKMDY7FnhWCPS', 0, 'Editor'),
(25, 'peneliti', 'NamaPeneliti', 'Seksi KBP II', 1, '$2y$10$jQ7NXXXhDw280OmOBJyj2etdcLz3/v5rSBb.MPN7J.FXy2WJSgScy', 1, 'Level1-Peneliti');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

DROP TABLE IF EXISTS `pengajuan`;
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
(1, 'PT. Kencana Perkasa', '01.2123.NPWP.0121', '', '218', 1, 1, 'Keberatan', 'Pasal 25 UU KUP', 'Kanwil', '', 2010, 'IDR', 'KEBERATAN', '2021-06-01', '2022-03-31', '2022-04-30', '2022-05-31', NULL, 'Seksi KBP II', 'Lv1 - Admin', NULL, 'Pencabutan Permohonan'),
(2, 'PT. Baharu Putera', '0202', '0212', '21', 1, 9, 'Keberatan', 'Pasal 15 UU PBB', 'Kanwil', '', 2005, 'IDR', 'KEBERATAN', '2021-06-10', '2022-04-09', '2022-05-09', '2022-06-09', NULL, 'Seksi KBP II', 'Lv1 - Admin', NULL, 'Pencabutan Permohonan'),
(3, 'ForPeneliti', '0101', '21', '21', 1, 1, 'Keberatan', 'Pasal 25 UU KUP', 'Kanwil', '', 2010, 'IDR', 'KEBERATAN', '2021-06-02', '2022-04-01', '2022-05-01', '2022-06-01', NULL, 'Seksi KBP II', 'Lv1 - Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuansub`
--

DROP TABLE IF EXISTS `pengajuansub`;
CREATE TABLE `pengajuansub` (
  `ajuanSUBID` int(11) NOT NULL,
  `ajuanSUBnoSuratPermintaan` varchar(250) NOT NULL,
  `ajuanSUBtglSuratPermintaan` date NOT NULL,
  `ajuanSUBjenisPermintaan` varchar(100) NOT NULL,
  `ajuanSUBNoKeputusanLama` int(50) NOT NULL,
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
  `ajuanStatusAkhir` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuansub`
--

INSERT INTO `pengajuansub` (`ajuanSUBID`, `ajuanSUBnoSuratPermintaan`, `ajuanSUBtglSuratPermintaan`, `ajuanSUBjenisPermintaan`, `ajuanSUBNoKeputusanLama`, `ajuanSUBalert1`, `ajuanSUBalert2`, `ajuanSUBtglDiterima`, `ajuanSUBNomorSengketa`, `ajuanSUBnoSuratBanding`, `ajuanSUBtglSuratBanding`, `ajuanSUBtglDiterimaPP`, `ajuanSUBnamaWP`, `ajuanSUBNPWP`, `ajuanSUBNOP`, `ajuanSUBkodeKPP`, `ajuanSUBjenisPajak`, `ajuanSUBmasaPajak`, `ajuanSUBtahunPajak`, `ajuanSUBmataUang`, `ajuanSUBstatusDalamLaporan`, `ajuanSUBket`, `ajuanSUBnoUB`, `ajuanSUBtglUB`, `ajuanSUBtglKirimUB`, `ajuanSUBNamaPK`, `ajuanSUBstatusArsip`, `ajuanSUBjangkaWaktuSelesaiHari`, `ajuanStatusAkhir`) VALUES
(1, 'U.0099/PAN.Wk/BG.2/2018', '2021-02-01', 'SURAT URAIAN BANDING (SUB)', 0, '2021-03-15', '2021-05-01', '2021-02-05', 'S.0099/PAN.Wk/BG.2/2018', 'B.0099/PAN.Wk/BG.2/2018', '2021-02-06', '2021-02-07', 'Brian', 'U.0099/PAN.Wk/BG.2/2018', 'N.0099/PAN.Wk/BG.2/2018', 'K.0099/PAN.Wk/BG.2/2018', 'Pasal 25 UU KUP', '', '2019', 'IDR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'U.8181/PAN.Wk/BG.2/2018', '2021-01-01', 'SURAT TANGGAPAN ATAS GUGATAN ( STG )', 0, '2021-01-15', '2021-02-01', '2021-02-17', 'S.8181/PAN.Wk/BG.2/2018', 'S.8181/PAN.Wk/BG.2/2018', '2021-02-17', '2021-02-17', 'Budianto', 'N.8181/PAN.Wk/BG.2/2018', 'P.8181/PAN.Wk/BG.2/2018', 'K.8181/PAN.Wk/BG.2/2018', 'Pasal 36 ayat (1) huruf a UU KUP', '', '2019', 'IDR', NULL, 'Late', 'U.8181/PAN.Wk/BG.2/2018', '2021-02-17', '2021-02-17', NULL, 'Clear', '+47 days', 'Lewat Waktu'),
(3, 'U.1234/PAN.Wk/BG.2/2018', '2021-01-01', 'SURAT URAIAN BANDING (SUB)', 0, '2021-02-12', '2021-04-01', '2021-02-17', 'U.1234/PAN.Wk/BG.2/2018', 'U.1234/PAN.Wk/BG.2/2018', '2021-02-17', '2021-02-17', 'Cepi', 'N.1234/PAN.Wk/BG.2/2018', 'N.1234/PAN.Wk/BG.2/2018', 'K.1234/PAN.Wk/BG.2/2018', 'Pasal 15 UU PBB ', '', '2010', 'IDR', NULL, 'Complete', 'U.8181/PAN.Wk/BG.2/2018', '2021-02-17', '2021-02-17', NULL, 'Clear', '+47 days', 'Tepat Waktu'),
(4, 'U.1234/PAN.Wk/BG.2/2018', '2021-02-01', 'SUB', 0, '2021-03-15', '2021-05-01', '2021-02-02', 'S.1234/PAN.Wk/BG.2/2018', 'S.1234/PAN.Wk/BG.2/2018', '2021-02-05', '2021-02-05', 'Frank', 'N.1234/PAN.Wk/BG.2/2018', 'U.1234/PAN.Wk/BG.2/2018', 'U.1234/PAN.Wk/BG.2/2018', 'Pasal 25 UU KUP', '', '2008', 'IDR', NULL, NULL, NULL, NULL, NULL, 'Root', NULL, NULL, NULL),
(5, 'SP-333/WPJ.34/2019', '2021-01-15', 'SUB', 0, '2021-02-26', '2021-04-15', '2021-02-01', 'SP-333/WPJ.34/2019', 'SP-333/WPJ.34/2019', '2021-02-02', '2021-02-02', 'Aprilia', 'SP-333/WPJ.34/2019', 'SP-333/WPJ.34/2019', 'SP-333/WPJ.34/2019', 'Pasal 25 UU KUP', '', '2009', 'IDR', NULL, NULL, NULL, NULL, NULL, 'Lv1', NULL, NULL, NULL),
(6, '0101SUB', '2021-06-10', 'SUB', 0, '2021-07-22', '2021-09-10', '2021-06-01', '0101Sengketa', 'No Banding', '2021-06-09', '2021-06-10', 'MyWP', '01.02.RSDS', '21', '217', 'Pasal 25 UU KUP', '', '2005', 'IDR', NULL, NULL, NULL, NULL, NULL, 'Lv1 - Peneliti', NULL, NULL, NULL),
(7, '0101', '2021-06-01', 'SUB', 0, '2021-07-13', '2021-09-01', '2021-06-02', 'NOSengketa', 'NoSuratBanding', '2021-06-03', '2021-06-04', 'NmWP', '01.202012', '1212', '219', 'Pasal 15 UU PBB', '', '2005', 'IDR', NULL, NULL, NULL, NULL, NULL, 'Lv1 - Peneliti', NULL, NULL, NULL),
(8, '01-Mangapul', '2021-06-01', 'SUB', 0, '2021-07-13', '2021-09-01', '2021-06-02', 'Sengketa', 'Banding', '2021-06-03', '2021-06-04', 'Mangapul', '01', '01', '010', 'Pasal 15 UU PBB', '1221', '2005', 'IDR', NULL, NULL, NULL, NULL, NULL, 'Lv1 - Peneliti', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengantarkpp`
--

DROP TABLE IF EXISTS `pengantarkpp`;
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
(1, 1, '01KPP', '2021-06-02', '2021-12-03'),
(2, 2, '01KPP', '2021-06-04', '2021-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `penuserlevelref`
--

DROP TABLE IF EXISTS `penuserlevelref`;
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

DROP TABLE IF EXISTS `permintaansuratkpp`;
CREATE TABLE `permintaansuratkpp` (
  `PSKPPid` int(11) NOT NULL,
  `PSKPPajuanId` int(100) NOT NULL,
  `PSKPPNoSurat` varchar(100) NOT NULL,
  `PSKPPtglSurat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `permohonanwp`
--

DROP TABLE IF EXISTS `permohonanwp`;
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
(1, 1, '0101', '2021-06-02', '0101LPD', '2021-06-02'),
(2, 2, '0101S_WP', '2021-06-02', '01LPAD', '2021-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `responkanwil`
--

DROP TABLE IF EXISTS `responkanwil`;
CREATE TABLE `responkanwil` (
  `RESPid` int(11) NOT NULL,
  `RESPajuanSUBID` varchar(250) NOT NULL,
  `RESPjenisTujuan` varchar(250) NOT NULL,
  `RESPnoSurat` varchar(250) NOT NULL,
  `RESPtglSurat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subketetapanpajak`
--

DROP TABLE IF EXISTS `subketetapanpajak`;
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

DROP TABLE IF EXISTS `substg`;
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

DROP TABLE IF EXISTS `substgref`;
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

DROP TABLE IF EXISTS `suratpembuktianwp`;
CREATE TABLE `suratpembuktianwp` (
  `SPWPid` int(11) NOT NULL,
  `SPWPajuanId` int(100) NOT NULL,
  `SPWPnoSurat` varchar(100) NOT NULL,
  `SPWPtglSurat` date NOT NULL,
  `SPWPtujuan` varchar(10) NOT NULL,
  `SPWPStatus` int(1) NOT NULL DEFAULT 0,
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
(1, 2, '01SP1', '2021-06-01', 'WP', 1, 'Ya', 'R1', '2021-06-01', 'R1', 'Ya', '12BA', '2021-06-02'),
(2, 2, '02SP2', '2021-06-02', 'WP', 1, 'Tidak', 'R2', '2021-06-15', 'OK', 'Tidak', 'BA', '2021-06-08'),
(3, 2, '01R3', '2021-06-03', 'WP', 0, '', '', NULL, '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `surattugas`
--

DROP TABLE IF EXISTS `surattugas`;
CREATE TABLE `surattugas` (
  `STid` int(11) NOT NULL,
  `STajuanId` int(100) NOT NULL,
  `STnoSurat` varchar(50) NOT NULL,
  `STtglSurat` date NOT NULL,
  `STPenelaah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surattugas`
--

INSERT INTO `surattugas` (`STid`, `STajuanId`, `STnoSurat`, `STtglSurat`, `STPenelaah`) VALUES
(1, 1, '0101', '2021-06-01', 4),
(2, 2, '0202', '2021-06-02', 4),
(3, 3, '0303', '2021-06-03', 25);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_jenispajak`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_jenispajak`;
CREATE TABLE `v_jenispajak` (
`jnsPajakId` int(11)
,`JenisPemohon` varchar(100)
,`NamajenisPajak` varchar(250)
,`alert1JangkaMaksimal` varchar(250)
,`alert2IKU` varchar(100)
,`alert3MitigasiResiko` varchar(250)
,`keterangan` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pengajuan`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_pengajuan`;
CREATE TABLE `v_pengajuan` (
`ajuanId` int(11)
,`ajuanNamaWP` varchar(250)
,`ajuanNPWP` varchar(200)
,`ajuanNOP` varchar(100)
,`ajuanKodeKPP` varchar(100)
,`ajuanJenisPemohonId` int(11)
,`ajuanJnsPajakId` int(11)
,`ajuanJenisPemohon` varchar(100)
,`ajuanJenisPajak` varchar(100)
,`ajuanPIC` varchar(100)
,`ajuanMasaPajak` varchar(100)
,`ajuanTahunPajak` int(100)
,`ajuanMataUang` varchar(100)
,`ajuanDasarPemrosesan` varchar(200)
,`ajuanTglTerima` date
,`ajuanAlert1` date
,`ajuanAlert2` date
,`ajuanAlert3` date
,`ajuanKeterangan` text
,`ajuanNamaSeksiKBP` varchar(250)
,`ajuanPenelaah` varchar(250)
,`ajuanClearedHari` int(100)
,`ajuanStatusAkhir` varchar(100)
,`KEPtglKeputusan` date
,`QuitWPtglSurat` date
,`jangka_waktu_selesai` bigint(21)
,`status_open` varchar(12)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pengajuanassign`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_pengajuanassign`;
CREATE TABLE `v_pengajuanassign` (
`ajuanId` int(11)
,`ajuanNamaWP` varchar(250)
,`ajuanNPWP` varchar(200)
,`ajuanNOP` varchar(100)
,`ajuanKodeKPP` varchar(100)
,`ajuanJenisPemohonId` int(11)
,`ajuanJnsPajakId` int(11)
,`ajuanJenisPemohon` varchar(100)
,`ajuanJenisPajak` varchar(100)
,`ajuanPIC` varchar(100)
,`ajuanMasaPajak` varchar(100)
,`ajuanTahunPajak` int(100)
,`ajuanMataUang` varchar(100)
,`ajuanDasarPemrosesan` varchar(200)
,`ajuanTglTerima` date
,`ajuanAlert1` date
,`ajuanAlert2` date
,`ajuanAlert3` date
,`ajuanKeterangan` text
,`ajuanNamaSeksiKBP` varchar(250)
,`ajuanPenelaah` varchar(250)
,`ajuanClearedHari` int(100)
,`ajuanStatusAkhir` varchar(100)
,`KEPtglKeputusan` date
,`QuitWPtglSurat` date
,`jangka_waktu_selesai` bigint(21)
,`status_open` varchar(12)
,`STPenelaah` int(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pengajuansub`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_pengajuansub`;
CREATE TABLE `v_pengajuansub` (
`ajuanSUBID` int(11)
,`ajuanSUBnoSuratPermintaan` varchar(250)
,`ajuanSUBtglSuratPermintaan` date
,`ajuanSUBjenisPermintaan` varchar(100)
,`ajuanSUBalert1` date
,`ajuanSUBalert2` date
,`ajuanSUBtglDiterima` date
,`ajuanSUBNomorSengketa` varchar(100)
,`ajuanSUBnoSuratBanding` varchar(100)
,`ajuanSUBtglSuratBanding` varchar(200)
,`ajuanSUBtglDiterimaPP` date
,`ajuanSUBnamaWP` varchar(250)
,`ajuanSUBNPWP` varchar(100)
,`ajuanSUBNOP` varchar(100)
,`ajuanSUBkodeKPP` varchar(250)
,`ajuanSUBjenisPajak` varchar(250)
,`ajuanSUBmasaPajak` varchar(100)
,`ajuanSUBtahunPajak` varchar(100)
,`ajuanSUBmataUang` varchar(100)
,`ajuanSUBstatusDalamLaporan` varchar(250)
,`ajuanSUBket` varchar(200)
,`ajuanSUBnoUB` varchar(250)
,`ajuanSUBtglUB` varchar(200)
,`ajuanSUBtglKirimUB` varchar(200)
,`ajuanSUBNamaPK` varchar(100)
,`ajuanSUBstatusArsip` varchar(100)
,`ajuanSUBjangkaWaktuSelesaiHari` varchar(100)
,`ajuanStatusAkhir` varchar(100)
,`jangka_waktu_selesai` int(7)
,`status_open` varchar(12)
);

-- --------------------------------------------------------

--
-- Structure for view `v_jenispajak`
--
DROP TABLE IF EXISTS `v_jenispajak`;

DROP VIEW IF EXISTS `v_jenispajak`;
CREATE OR REPLACE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_jenispajak`  AS  select `jpjk`.`jnsPajakId` AS `jnsPajakId`,`jph`.`JenisPemohon` AS `JenisPemohon`,`jpjk`.`NamajenisPajak` AS `NamajenisPajak`,`jpjk`.`alert1JangkaMaksimal` AS `alert1JangkaMaksimal`,`jpjk`.`alert2IKU` AS `alert2IKU`,`jpjk`.`alert3MitigasiResiko` AS `alert3MitigasiResiko`,`jpjk`.`keterangan` AS `keterangan` from (`jenispajak` `jpjk` left join `jenispemohon` `jph` on(`jph`.`idJenisPemohon` = `jpjk`.`idJenisPemohon`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pengajuan`
--
DROP TABLE IF EXISTS `v_pengajuan`;

DROP VIEW IF EXISTS `v_pengajuan`;
CREATE OR REPLACE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_pengajuan`  AS  select `p`.`ajuanId` AS `ajuanId`,`p`.`ajuanNamaWP` AS `ajuanNamaWP`,`p`.`ajuanNPWP` AS `ajuanNPWP`,`p`.`ajuanNOP` AS `ajuanNOP`,`p`.`ajuanKodeKPP` AS `ajuanKodeKPP`,`p`.`ajuanJenisPemohonId` AS `ajuanJenisPemohonId`,`p`.`ajuanJnsPajakId` AS `ajuanJnsPajakId`,`p`.`ajuanJenisPemohon` AS `ajuanJenisPemohon`,`p`.`ajuanJenisPajak` AS `ajuanJenisPajak`,`p`.`ajuanPIC` AS `ajuanPIC`,`p`.`ajuanMasaPajak` AS `ajuanMasaPajak`,`p`.`ajuanTahunPajak` AS `ajuanTahunPajak`,`p`.`ajuanMataUang` AS `ajuanMataUang`,`p`.`ajuanDasarPemrosesan` AS `ajuanDasarPemrosesan`,`p`.`ajuanTglTerima` AS `ajuanTglTerima`,`p`.`ajuanAlert1` AS `ajuanAlert1`,`p`.`ajuanAlert2` AS `ajuanAlert2`,`p`.`ajuanAlert3` AS `ajuanAlert3`,`p`.`ajuanKeterangan` AS `ajuanKeterangan`,`p`.`ajuanNamaSeksiKBP` AS `ajuanNamaSeksiKBP`,`p`.`ajuanPenelaah` AS `ajuanPenelaah`,`p`.`ajuanClearedHari` AS `ajuanClearedHari`,`p`.`ajuanStatusAkhir` AS `ajuanStatusAkhir`,`k`.`KEPtglKeputusan` AS `KEPtglKeputusan`,`pwp`.`QuitWPtglSurat` AS `QuitWPtglSurat`,timestampdiff(MONTH,`p`.`ajuanTglTerima`,`k`.`KEPtglKeputusan`) AS `jangka_waktu_selesai`,case when `p`.`ajuanStatusAkhir` <> '' then '-' when curdate() < `p`.`ajuanAlert1` then 'Sebelum IKU1' when curdate() < `p`.`ajuanAlert2` then 'Sebelum IKU2' when curdate() < `p`.`ajuanAlert3` then 'Sebelum IKU3' when curdate() > `p`.`ajuanAlert3` then 'Lewat Waktu' end AS `status_open` from ((`pengajuan` `p` left join `keputusan` `k` on(`k`.`KEPajuanId` = `p`.`ajuanId`)) left join `pencabutanwp` `pwp` on(`pwp`.`QuitWPajuanID` = `p`.`ajuanId`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pengajuanassign`
--
DROP TABLE IF EXISTS `v_pengajuanassign`;

DROP VIEW IF EXISTS `v_pengajuanassign`;
CREATE OR REPLACE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_pengajuanassign`  AS  select `p`.`ajuanId` AS `ajuanId`,`p`.`ajuanNamaWP` AS `ajuanNamaWP`,`p`.`ajuanNPWP` AS `ajuanNPWP`,`p`.`ajuanNOP` AS `ajuanNOP`,`p`.`ajuanKodeKPP` AS `ajuanKodeKPP`,`p`.`ajuanJenisPemohonId` AS `ajuanJenisPemohonId`,`p`.`ajuanJnsPajakId` AS `ajuanJnsPajakId`,`p`.`ajuanJenisPemohon` AS `ajuanJenisPemohon`,`p`.`ajuanJenisPajak` AS `ajuanJenisPajak`,`p`.`ajuanPIC` AS `ajuanPIC`,`p`.`ajuanMasaPajak` AS `ajuanMasaPajak`,`p`.`ajuanTahunPajak` AS `ajuanTahunPajak`,`p`.`ajuanMataUang` AS `ajuanMataUang`,`p`.`ajuanDasarPemrosesan` AS `ajuanDasarPemrosesan`,`p`.`ajuanTglTerima` AS `ajuanTglTerima`,`p`.`ajuanAlert1` AS `ajuanAlert1`,`p`.`ajuanAlert2` AS `ajuanAlert2`,`p`.`ajuanAlert3` AS `ajuanAlert3`,`p`.`ajuanKeterangan` AS `ajuanKeterangan`,`p`.`ajuanNamaSeksiKBP` AS `ajuanNamaSeksiKBP`,`p`.`ajuanPenelaah` AS `ajuanPenelaah`,`p`.`ajuanClearedHari` AS `ajuanClearedHari`,`p`.`ajuanStatusAkhir` AS `ajuanStatusAkhir`,`k`.`KEPtglKeputusan` AS `KEPtglKeputusan`,`pwp`.`QuitWPtglSurat` AS `QuitWPtglSurat`,timestampdiff(MONTH,`p`.`ajuanTglTerima`,`k`.`KEPtglKeputusan`) AS `jangka_waktu_selesai`,case when `p`.`ajuanStatusAkhir` <> '' then '-' when curdate() < `p`.`ajuanAlert1` then 'Sebelum IKU1' when curdate() < `p`.`ajuanAlert2` then 'Sebelum IKU2' when curdate() < `p`.`ajuanAlert3` then 'Sebelum IKU3' when curdate() > `p`.`ajuanAlert3` then 'Lewat Waktu' end AS `status_open`,`st`.`STPenelaah` AS `STPenelaah` from (((`pengajuan` `p` left join `keputusan` `k` on(`k`.`KEPajuanId` = `p`.`ajuanId`)) left join `pencabutanwp` `pwp` on(`pwp`.`QuitWPajuanID` = `p`.`ajuanId`)) left join `surattugas` `st` on(`st`.`STajuanId` = `p`.`ajuanId`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pengajuansub`
--
DROP TABLE IF EXISTS `v_pengajuansub`;

DROP VIEW IF EXISTS `v_pengajuansub`;
CREATE OR REPLACE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_pengajuansub`  AS  select `pengajuansub`.`ajuanSUBID` AS `ajuanSUBID`,`pengajuansub`.`ajuanSUBnoSuratPermintaan` AS `ajuanSUBnoSuratPermintaan`,`pengajuansub`.`ajuanSUBtglSuratPermintaan` AS `ajuanSUBtglSuratPermintaan`,`pengajuansub`.`ajuanSUBjenisPermintaan` AS `ajuanSUBjenisPermintaan`,`pengajuansub`.`ajuanSUBalert1` AS `ajuanSUBalert1`,`pengajuansub`.`ajuanSUBalert2` AS `ajuanSUBalert2`,`pengajuansub`.`ajuanSUBtglDiterima` AS `ajuanSUBtglDiterima`,`pengajuansub`.`ajuanSUBNomorSengketa` AS `ajuanSUBNomorSengketa`,`pengajuansub`.`ajuanSUBnoSuratBanding` AS `ajuanSUBnoSuratBanding`,`pengajuansub`.`ajuanSUBtglSuratBanding` AS `ajuanSUBtglSuratBanding`,`pengajuansub`.`ajuanSUBtglDiterimaPP` AS `ajuanSUBtglDiterimaPP`,`pengajuansub`.`ajuanSUBnamaWP` AS `ajuanSUBnamaWP`,`pengajuansub`.`ajuanSUBNPWP` AS `ajuanSUBNPWP`,`pengajuansub`.`ajuanSUBNOP` AS `ajuanSUBNOP`,`pengajuansub`.`ajuanSUBkodeKPP` AS `ajuanSUBkodeKPP`,`pengajuansub`.`ajuanSUBjenisPajak` AS `ajuanSUBjenisPajak`,`pengajuansub`.`ajuanSUBmasaPajak` AS `ajuanSUBmasaPajak`,`pengajuansub`.`ajuanSUBtahunPajak` AS `ajuanSUBtahunPajak`,`pengajuansub`.`ajuanSUBmataUang` AS `ajuanSUBmataUang`,`pengajuansub`.`ajuanSUBstatusDalamLaporan` AS `ajuanSUBstatusDalamLaporan`,`pengajuansub`.`ajuanSUBket` AS `ajuanSUBket`,`pengajuansub`.`ajuanSUBnoUB` AS `ajuanSUBnoUB`,`pengajuansub`.`ajuanSUBtglUB` AS `ajuanSUBtglUB`,`pengajuansub`.`ajuanSUBtglKirimUB` AS `ajuanSUBtglKirimUB`,`pengajuansub`.`ajuanSUBNamaPK` AS `ajuanSUBNamaPK`,`pengajuansub`.`ajuanSUBstatusArsip` AS `ajuanSUBstatusArsip`,`pengajuansub`.`ajuanSUBjangkaWaktuSelesaiHari` AS `ajuanSUBjangkaWaktuSelesaiHari`,`pengajuansub`.`ajuanStatusAkhir` AS `ajuanStatusAkhir`,to_days(`pengajuansub`.`ajuanSUBtglKirimUB`) - to_days(`pengajuansub`.`ajuanSUBtglSuratPermintaan`) AS `jangka_waktu_selesai`,case when `pengajuansub`.`ajuanStatusAkhir` <> '' then '-' when curdate() < `pengajuansub`.`ajuanSUBalert1` then 'Sebelum IKU1' when curdate() < `pengajuansub`.`ajuanSUBalert2` then 'Sebelum IKU2' end AS `status_open` from `pengajuansub` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amar_keputusan`
--
ALTER TABLE `amar_keputusan`
  ADD PRIMARY KEY (`IdAmar`);

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
-- Indexes for table `jenisgugatan`
--
ALTER TABLE `jenisgugatan`
  ADD PRIMARY KEY (`GUGATid`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amar_keputusan`
--
ALTER TABLE `amar_keputusan`
  MODIFY `IdAmar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `formatmatrik`
--
ALTER TABLE `formatmatrik`
  MODIFY `FMid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenisekspedisi`
--
ALTER TABLE `jenisekspedisi`
  MODIFY `JEid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenisgugatan`
--
ALTER TABLE `jenisgugatan`
  MODIFY `GUGATid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `jnsPajakId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `KEPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ketetapanpajak`
--
ALTER TABLE `ketetapanpajak`
  MODIFY `KPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ketetapanpajaksub`
--
ALTER TABLE `ketetapanpajaksub`
  MODIFY `TETAPAJid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kpp`
--
ALTER TABLE `kpp`
  MODIFY `KPPid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporanpenelitian`
--
ALTER TABLE `laporanpenelitian`
  MODIFY `LPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `objekdigugat`
--
ALTER TABLE `objekdigugat`
  MODIFY `OBJGUGATid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemberitahuanuntukhadir`
--
ALTER TABLE `pemberitahuanuntukhadir`
  MODIFY `SPUHid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `ajuanId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengajuansub`
--
ALTER TABLE `pengajuansub`
  MODIFY `ajuanSUBID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengantarkpp`
--
ALTER TABLE `pengantarkpp`
  MODIFY `PKPPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penuserlevelref`
--
ALTER TABLE `penuserlevelref`
  MODIFY `PENUserLevelId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permintaansuratkpp`
--
ALTER TABLE `permintaansuratkpp`
  MODIFY `PSKPPid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permohonanwp`
--
ALTER TABLE `permohonanwp`
  MODIFY `PWPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `responkanwil`
--
ALTER TABLE `responkanwil`
  MODIFY `RESPid` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `SPWPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surattugas`
--
ALTER TABLE `surattugas`
  MODIFY `STid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
