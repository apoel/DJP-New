-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 05:59 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `amar_keputusan`
--

CREATE TABLE `amar_keputusan` (
  `IdAmar` int(11) NOT NULL,
  `AmarKeputusan` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `amar_keputusan`
--

INSERT INTO `amar_keputusan` (`IdAmar`, `AmarKeputusan`) VALUES
(1, 'Menolak'),
(2, 'Mengabulkan Sebagian'),
(3, 'Mengabulkan Keseluruhan'),
(4, 'Kesalahan Jumlah'),
(5, 'Dicabut Oleh WP');

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
(1, 2, 'TIDAK', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `jenisekspedisi`
--

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
(8, 2, 'Pasal 36 ayat (1) huruf a UU KUP', '6', '5', '4', 'Dari tanggal terima permohonan (LPAD) sampai dengan tanggal SK'),
(9, 1, 'Pasal 15 UU PBB', '12', '11', '10', 'Dari tanggal terima pengajuan keberatan (LPAD) sampai dengan tanggal SK'),
(15, 2, 'Pasal 36 ayat (1) huruf c UU KUP', '6', '5', '4', 'Dari tanggal terima permohonan (LPAD) sampai dengan tanggal SK'),
(16, 1, 'SUB', '3', '2', '1', 'SUB'),
(17, 1, 'STG', '1', '0.5', '0.25', 'STG');

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

--
-- Dumping data for table `jenistujuanrespon`
--

INSERT INTO `jenistujuanrespon` (`RESPTUJid`, `RESPTUnama`) VALUES
(1, 'Pengadilan Pajak'),
(2, 'Kantor Pusat DJP');

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
  `KEPjenis` int(10) NOT NULL,
  `KEPAmarKeputusan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keputusan`
--

INSERT INTO `keputusan` (`KEPid`, `KEPajuanId`, `KEPnoKeputusan`, `KEPtglKeputusan`, `KEPtglKirimSK`, `KEPjangkaKirim`, `KEPjenis`, `KEPAmarKeputusan`) VALUES
(1, 2, '0101F', '2021-06-01', '2021-06-15', 14, 1, 2000000),
(2, 1, '02PencabutanWP', '2021-06-01', '2021-06-15', 14, 5, 3000000);

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
(1, 1, 1, '01.TAP21', '2021-06-01', 3000000),
(2, 2, 2, '01TAP', '2021-06-02', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `ketetapanpajaksub`
--

CREATE TABLE `ketetapanpajaksub` (
  `TETAPAJid` int(11) NOT NULL,
  `TETAPAJajuanSUBID` int(250) NOT NULL,
  `TETAPAJjenis` varchar(250) NOT NULL,
  `TETAPAJnomorKeputusan` varchar(100) NOT NULL,
  `TETAPAJtglKeputusan` date NOT NULL,
  `TETAPAJamarKeputusan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ketetapanpajaksub`
--

INSERT INTO `ketetapanpajaksub` (`TETAPAJid`, `TETAPAJajuanSUBID`, `TETAPAJjenis`, `TETAPAJnomorKeputusan`, `TETAPAJtglKeputusan`, `TETAPAJamarKeputusan`) VALUES
(1, 1, '1', '01.TAP21', '2021-06-01', 3000000),
(2, 1, '2', '01TAP', '2021-06-02', 2000000),
(3, 2, '1', '01.TAP21', '2021-06-01', 3000000),
(4, 3, '4', '0101.SQ', '2021-06-15', 1500000);

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
(1, 2, '0101LP', '2021-06-09'),
(2, 1, '0101LP', '2021-06-02'),
(3, 4, '0101', '2021-06-12');

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
(1, 2, 'Banding', '01.TAP21', '2021-06-01', '3000000'),
(2, 3, 'Gugat', '0102.Gugat', '2021-06-16', '2000000');

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
(1, 1, '02PencabutanWP', '2021-06-01');

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
(2, 'as', 'Root', 'Seksi KBP I', 1, '$2y$10$JxJqhfQv0nqCwGLNiobXlO.sAyAnGv..Cj2k1AaALjwOcet1aICmy', 0, 'Root'),
(3, 'l1a', 'Lv1 - Admin', 'Seksi KBP II', 1, '$2y$10$lxJ8HLMYFumhhKgFIu1zpOQj2iiQA6.mjpNCvZLv6U687SyAXVuEy', 1, 'Level1-Admin'),
(4, 'l1p', 'L1Peneliti', 'Seksi KBP II', 1, '$2y$10$gfzz0lA7KJAEnPozApH45ejRHSRUvE8QSmiBoW/wgQ0ORPHc5v0M2', 0, 'Level1-Peneliti'),
(5, 'editor', 'Editor', 'Seksi KBP III', 1, '$2y$10$96Nk4vEH6fW960VXTcl3kOGxmDE7ifry3jXM59bQCKMDY7FnhWCPS', 0, 'Editor'),
(25, 'peneliti', 'NamaPeneliti', 'Seksi KBP II', 1, '$2y$10$jQ7NXXXhDw280OmOBJyj2etdcLz3/v5rSBb.MPN7J.FXy2WJSgScy', 1, 'Level1-Peneliti');

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
(1, 'PT. Kencana Perkasa', '01.2123.NPWP.0121', '', '218', 1, 1, 'Keberatan', 'Pasal 25 UU KUP', 'Kanwil', '2000', 2010, 'IDR', 'KEBERATAN', '2021-06-01', '2022-03-31', '2022-04-30', '2022-05-31', NULL, 'Seksi KBP II', 'Lv1 - Admin', NULL, 'Pencabutan Permohonan'),
(2, 'PT. Baharu Putera', '0202', '0212', '21', 1, 9, 'Keberatan', 'Pasal 15 UU PBB', 'Kanwil', '', 2005, 'IDR', 'KEBERATAN', '2021-06-10', '2022-04-09', '2022-05-09', '2022-06-09', NULL, 'Seksi KBP II', 'Lv1 - Admin', NULL, 'Lewat Waktu'),
(3, 'ForPeneliti', '0101', '21', '21', 1, 1, 'Keberatan', 'Pasal 25 UU KUP', 'Kanwil', '', 2010, 'IDR', 'KEBERATAN', '2021-06-02', '2022-04-01', '2022-05-01', '2022-06-01', NULL, 'Seksi KBP II', 'Lv1 - Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuansub`
--

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
(1, '01.16062021.SUB', '2021-06-01', 'SUB', 1, '2021-07-12', '2021-08-31', '2021-06-16', '01.16062021.SKT', '01.16062021.SBDNG', '2021-06-04', '2021-06-05', 'PT. Baharu Putera', '0202', '0212', '21', 'Pasal 15 UU PBB', '', '2005', 'IDR', NULL, 'UBKet', '01.16062021UB', '2021-06-10', '2021-06-15', 'L1Peneliti', 'Clear', '+9 days', 'Tepat Waktu'),
(2, '02.16062021', '2021-06-01', 'SUB', 2, '2021-07-12', '2021-08-31', '2021-06-05', '02.Sengketa', '02.SBNDING', '2021-06-06', '2021-06-07', 'PT. Kencana Perkasa', '01.2123.NPWP.0121', '', '218', 'Pasal 25 UU KUP', '2000', '2010', 'IDR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '0101.STG', '2021-06-01', 'STG', 0, '2021-06-14', '2021-06-30', '2021-06-04', '01.Sengketa', '01.SGUGAT', '2021-06-10', '2021-06-16', 'Mince', '01.NPWP', '01.NOP', '01KPP', 'STG', '12', '2005', 'IDR', NULL, 'Tes.STG', '01.STGUB', '2021-06-16', '2021-06-16', 'L1Peneliti', 'Clear', '+15 days', 'Tepat Waktu');

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
(1, 1, '01KPP', '2021-06-02', '2021-12-03'),
(2, 2, '01KPP', '2021-06-04', '2021-12-06');

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
(1, 1, '0101', '2021-06-02', '0101LPD', '2021-06-02'),
(2, 2, '0101S_WP', '2021-06-02', '01LPAD', '2021-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `responkanwil`
--

CREATE TABLE `responkanwil` (
  `RESPid` int(11) NOT NULL,
  `RESPajuanSUBID` varchar(250) NOT NULL,
  `RESPjenisTujuan` int(20) NOT NULL,
  `RESPnoSurat` varchar(250) NOT NULL,
  `RESPtglSurat` date NOT NULL,
  `RESPtglKirim` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `responkanwil`
--

INSERT INTO `responkanwil` (`RESPid`, `RESPajuanSUBID`, `RESPjenisTujuan`, `RESPnoSurat`, `RESPtglSurat`, `RESPtglKirim`) VALUES
(1, '1', 2, '01No.Surat16062001', '2021-06-01', '2021-06-03'),
(5, '3', 2, '0101STG', '2021-06-16', '2021-06-16');

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
(2, 'STG', '1', '0.5');

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
(3, 2, '01R3', '2021-06-03', 'WP', 0, '', '', NULL, '', '', '', '0000-00-00'),
(4, 2, '021606SP', '2021-06-01', 'WP', 0, '', '', NULL, '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `surattugas`
--

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
(4, 2, '0202', '2021-06-02', 4),
(5, 3, '01212', '2021-06-02', 25);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_jenispajak`
-- (See below for the actual view)
--
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
-- Stand-in structure for view `v_kepsub`
-- (See below for the actual view)
--
CREATE TABLE `v_kepsub` (
`KEPid` int(11)
,`KEPajuanId` int(250)
,`KEPnoKeputusan` varchar(250)
,`KEPtglKeputusan` date
,`KEPtglKirimSK` date
,`KEPjangkaKirim` int(100)
,`KEPjenis` int(10)
,`KEPAmarKeputusan` double
,`ajuanId` int(11)
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
,`IdAmar` int(11)
,`AmarKeputusan` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pengajuan`
-- (See below for the actual view)
--
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
CREATE TABLE `v_pengajuansub` (
`ajuanSUBID` int(11)
,`ajuanSUBnoSuratPermintaan` varchar(250)
,`ajuanSUBtglSuratPermintaan` date
,`ajuanSUBjenisPermintaan` varchar(100)
,`ajuanSUBNoKeputusanLama` int(50)
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
,`jangka_waktu_selesai` bigint(21)
,`status_open` varchar(12)
,`KEPnoKeputusan` varchar(250)
,`KEPtglKeputusan` date
,`KEPjenis` int(10)
,`KEPAmarKeputusan` double
);

-- --------------------------------------------------------

--
-- Structure for view `v_jenispajak`
--
DROP TABLE IF EXISTS `v_jenispajak`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jenispajak`  AS  select `jpjk`.`jnsPajakId` AS `jnsPajakId`,`jph`.`JenisPemohon` AS `JenisPemohon`,`jpjk`.`NamajenisPajak` AS `NamajenisPajak`,`jpjk`.`alert1JangkaMaksimal` AS `alert1JangkaMaksimal`,`jpjk`.`alert2IKU` AS `alert2IKU`,`jpjk`.`alert3MitigasiResiko` AS `alert3MitigasiResiko`,`jpjk`.`keterangan` AS `keterangan` from (`jenispajak` `jpjk` left join `jenispemohon` `jph` on(`jph`.`idJenisPemohon` = `jpjk`.`idJenisPemohon`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_kepsub`
--
DROP TABLE IF EXISTS `v_kepsub`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kepsub`  AS  select `kp`.`KEPid` AS `KEPid`,`kp`.`KEPajuanId` AS `KEPajuanId`,`kp`.`KEPnoKeputusan` AS `KEPnoKeputusan`,`kp`.`KEPtglKeputusan` AS `KEPtglKeputusan`,`kp`.`KEPtglKirimSK` AS `KEPtglKirimSK`,`kp`.`KEPjangkaKirim` AS `KEPjangkaKirim`,`kp`.`KEPjenis` AS `KEPjenis`,`kp`.`KEPAmarKeputusan` AS `KEPAmarKeputusan`,`p`.`ajuanId` AS `ajuanId`,`p`.`ajuanNamaWP` AS `ajuanNamaWP`,`p`.`ajuanNPWP` AS `ajuanNPWP`,`p`.`ajuanNOP` AS `ajuanNOP`,`p`.`ajuanKodeKPP` AS `ajuanKodeKPP`,`p`.`ajuanJenisPemohonId` AS `ajuanJenisPemohonId`,`p`.`ajuanJnsPajakId` AS `ajuanJnsPajakId`,`p`.`ajuanJenisPemohon` AS `ajuanJenisPemohon`,`p`.`ajuanJenisPajak` AS `ajuanJenisPajak`,`p`.`ajuanPIC` AS `ajuanPIC`,`p`.`ajuanMasaPajak` AS `ajuanMasaPajak`,`p`.`ajuanTahunPajak` AS `ajuanTahunPajak`,`p`.`ajuanMataUang` AS `ajuanMataUang`,`p`.`ajuanDasarPemrosesan` AS `ajuanDasarPemrosesan`,`p`.`ajuanTglTerima` AS `ajuanTglTerima`,`p`.`ajuanAlert1` AS `ajuanAlert1`,`p`.`ajuanAlert2` AS `ajuanAlert2`,`p`.`ajuanAlert3` AS `ajuanAlert3`,`p`.`ajuanKeterangan` AS `ajuanKeterangan`,`p`.`ajuanNamaSeksiKBP` AS `ajuanNamaSeksiKBP`,`p`.`ajuanPenelaah` AS `ajuanPenelaah`,`p`.`ajuanClearedHari` AS `ajuanClearedHari`,`p`.`ajuanStatusAkhir` AS `ajuanStatusAkhir`,`ak`.`IdAmar` AS `IdAmar`,`ak`.`AmarKeputusan` AS `AmarKeputusan` from ((`keputusan` `kp` left join `pengajuan` `p` on(`kp`.`KEPajuanId` = `p`.`ajuanId`)) left join `amar_keputusan` `ak` on(`ak`.`IdAmar` = `kp`.`KEPjenis`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pengajuan`
--
DROP TABLE IF EXISTS `v_pengajuan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pengajuan`  AS  select `p`.`ajuanId` AS `ajuanId`,`p`.`ajuanNamaWP` AS `ajuanNamaWP`,`p`.`ajuanNPWP` AS `ajuanNPWP`,`p`.`ajuanNOP` AS `ajuanNOP`,`p`.`ajuanKodeKPP` AS `ajuanKodeKPP`,`p`.`ajuanJenisPemohonId` AS `ajuanJenisPemohonId`,`p`.`ajuanJnsPajakId` AS `ajuanJnsPajakId`,`p`.`ajuanJenisPemohon` AS `ajuanJenisPemohon`,`p`.`ajuanJenisPajak` AS `ajuanJenisPajak`,`p`.`ajuanPIC` AS `ajuanPIC`,`p`.`ajuanMasaPajak` AS `ajuanMasaPajak`,`p`.`ajuanTahunPajak` AS `ajuanTahunPajak`,`p`.`ajuanMataUang` AS `ajuanMataUang`,`p`.`ajuanDasarPemrosesan` AS `ajuanDasarPemrosesan`,`p`.`ajuanTglTerima` AS `ajuanTglTerima`,`p`.`ajuanAlert1` AS `ajuanAlert1`,`p`.`ajuanAlert2` AS `ajuanAlert2`,`p`.`ajuanAlert3` AS `ajuanAlert3`,`p`.`ajuanKeterangan` AS `ajuanKeterangan`,`p`.`ajuanNamaSeksiKBP` AS `ajuanNamaSeksiKBP`,`p`.`ajuanPenelaah` AS `ajuanPenelaah`,`p`.`ajuanClearedHari` AS `ajuanClearedHari`,`p`.`ajuanStatusAkhir` AS `ajuanStatusAkhir`,`k`.`KEPtglKeputusan` AS `KEPtglKeputusan`,`pwp`.`QuitWPtglSurat` AS `QuitWPtglSurat`,timestampdiff(MONTH,`p`.`ajuanTglTerima`,`k`.`KEPtglKeputusan`) AS `jangka_waktu_selesai`,case when `p`.`ajuanStatusAkhir` <> '' then '-' when curdate() < `p`.`ajuanAlert1` then 'Sebelum IKU1' when curdate() < `p`.`ajuanAlert2` then 'Sebelum IKU2' when curdate() < `p`.`ajuanAlert3` then 'Sebelum IKU3' when curdate() > `p`.`ajuanAlert3` then 'Lewat Waktu' end AS `status_open` from ((`pengajuan` `p` left join `keputusan` `k` on(`k`.`KEPajuanId` = `p`.`ajuanId`)) left join `pencabutanwp` `pwp` on(`pwp`.`QuitWPajuanID` = `p`.`ajuanId`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pengajuanassign`
--
DROP TABLE IF EXISTS `v_pengajuanassign`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pengajuanassign`  AS  select `p`.`ajuanId` AS `ajuanId`,`p`.`ajuanNamaWP` AS `ajuanNamaWP`,`p`.`ajuanNPWP` AS `ajuanNPWP`,`p`.`ajuanNOP` AS `ajuanNOP`,`p`.`ajuanKodeKPP` AS `ajuanKodeKPP`,`p`.`ajuanJenisPemohonId` AS `ajuanJenisPemohonId`,`p`.`ajuanJnsPajakId` AS `ajuanJnsPajakId`,`p`.`ajuanJenisPemohon` AS `ajuanJenisPemohon`,`p`.`ajuanJenisPajak` AS `ajuanJenisPajak`,`p`.`ajuanPIC` AS `ajuanPIC`,`p`.`ajuanMasaPajak` AS `ajuanMasaPajak`,`p`.`ajuanTahunPajak` AS `ajuanTahunPajak`,`p`.`ajuanMataUang` AS `ajuanMataUang`,`p`.`ajuanDasarPemrosesan` AS `ajuanDasarPemrosesan`,`p`.`ajuanTglTerima` AS `ajuanTglTerima`,`p`.`ajuanAlert1` AS `ajuanAlert1`,`p`.`ajuanAlert2` AS `ajuanAlert2`,`p`.`ajuanAlert3` AS `ajuanAlert3`,`p`.`ajuanKeterangan` AS `ajuanKeterangan`,`p`.`ajuanNamaSeksiKBP` AS `ajuanNamaSeksiKBP`,`p`.`ajuanPenelaah` AS `ajuanPenelaah`,`p`.`ajuanClearedHari` AS `ajuanClearedHari`,`p`.`ajuanStatusAkhir` AS `ajuanStatusAkhir`,`k`.`KEPtglKeputusan` AS `KEPtglKeputusan`,`pwp`.`QuitWPtglSurat` AS `QuitWPtglSurat`,timestampdiff(MONTH,`p`.`ajuanTglTerima`,`k`.`KEPtglKeputusan`) AS `jangka_waktu_selesai`,case when `p`.`ajuanStatusAkhir` <> '' then '-' when curdate() < `p`.`ajuanAlert1` then 'Sebelum IKU1' when curdate() < `p`.`ajuanAlert2` then 'Sebelum IKU2' when curdate() < `p`.`ajuanAlert3` then 'Sebelum IKU3' when curdate() > `p`.`ajuanAlert3` then 'Lewat Waktu' end AS `status_open`,`st`.`STPenelaah` AS `STPenelaah` from (((`pengajuan` `p` left join `keputusan` `k` on(`k`.`KEPajuanId` = `p`.`ajuanId`)) left join `pencabutanwp` `pwp` on(`pwp`.`QuitWPajuanID` = `p`.`ajuanId`)) left join `surattugas` `st` on(`st`.`STajuanId` = `p`.`ajuanId`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pengajuansub`
--
DROP TABLE IF EXISTS `v_pengajuansub`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pengajuansub`  AS  select `psub`.`ajuanSUBID` AS `ajuanSUBID`,`psub`.`ajuanSUBnoSuratPermintaan` AS `ajuanSUBnoSuratPermintaan`,`psub`.`ajuanSUBtglSuratPermintaan` AS `ajuanSUBtglSuratPermintaan`,`psub`.`ajuanSUBjenisPermintaan` AS `ajuanSUBjenisPermintaan`,`psub`.`ajuanSUBNoKeputusanLama` AS `ajuanSUBNoKeputusanLama`,`psub`.`ajuanSUBalert1` AS `ajuanSUBalert1`,`psub`.`ajuanSUBalert2` AS `ajuanSUBalert2`,`psub`.`ajuanSUBtglDiterima` AS `ajuanSUBtglDiterima`,`psub`.`ajuanSUBNomorSengketa` AS `ajuanSUBNomorSengketa`,`psub`.`ajuanSUBnoSuratBanding` AS `ajuanSUBnoSuratBanding`,`psub`.`ajuanSUBtglSuratBanding` AS `ajuanSUBtglSuratBanding`,`psub`.`ajuanSUBtglDiterimaPP` AS `ajuanSUBtglDiterimaPP`,`psub`.`ajuanSUBnamaWP` AS `ajuanSUBnamaWP`,`psub`.`ajuanSUBNPWP` AS `ajuanSUBNPWP`,`psub`.`ajuanSUBNOP` AS `ajuanSUBNOP`,`psub`.`ajuanSUBkodeKPP` AS `ajuanSUBkodeKPP`,`psub`.`ajuanSUBjenisPajak` AS `ajuanSUBjenisPajak`,`psub`.`ajuanSUBmasaPajak` AS `ajuanSUBmasaPajak`,`psub`.`ajuanSUBtahunPajak` AS `ajuanSUBtahunPajak`,`psub`.`ajuanSUBmataUang` AS `ajuanSUBmataUang`,`psub`.`ajuanSUBstatusDalamLaporan` AS `ajuanSUBstatusDalamLaporan`,`psub`.`ajuanSUBket` AS `ajuanSUBket`,`psub`.`ajuanSUBnoUB` AS `ajuanSUBnoUB`,`psub`.`ajuanSUBtglUB` AS `ajuanSUBtglUB`,`psub`.`ajuanSUBtglKirimUB` AS `ajuanSUBtglKirimUB`,`psub`.`ajuanSUBNamaPK` AS `ajuanSUBNamaPK`,`psub`.`ajuanSUBstatusArsip` AS `ajuanSUBstatusArsip`,`psub`.`ajuanSUBjangkaWaktuSelesaiHari` AS `ajuanSUBjangkaWaktuSelesaiHari`,`psub`.`ajuanStatusAkhir` AS `ajuanStatusAkhir`,timestampdiff(MONTH,`psub`.`ajuanSUBtglSuratPermintaan`,`psub`.`ajuanSUBtglUB`) AS `jangka_waktu_selesai`,case when `psub`.`ajuanStatusAkhir` <> '' then '-' when curdate() < `psub`.`ajuanSUBalert1` then 'Sebelum IKU1' when curdate() < `psub`.`ajuanSUBalert2` then 'Sebelum IKU2' when curdate() > `psub`.`ajuanSUBalert2` then 'Lewat Waktu' end AS `status_open`,`kep`.`KEPnoKeputusan` AS `KEPnoKeputusan`,`kep`.`KEPtglKeputusan` AS `KEPtglKeputusan`,`kep`.`KEPjenis` AS `KEPjenis`,`kep`.`KEPAmarKeputusan` AS `KEPAmarKeputusan` from (`pengajuansub` `psub` left join `keputusan` `kep` on(`kep`.`KEPid` = `psub`.`ajuanSUBNoKeputusanLama`)) ;

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
  MODIFY `IdAmar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `jnsPajakId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jenispemohon`
--
ALTER TABLE `jenispemohon`
  MODIFY `idJenisPemohon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jenistujuanrespon`
--
ALTER TABLE `jenistujuanrespon`
  MODIFY `RESPTUJid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keputusan`
--
ALTER TABLE `keputusan`
  MODIFY `KEPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ketetapanpajak`
--
ALTER TABLE `ketetapanpajak`
  MODIFY `KPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ketetapanpajaksub`
--
ALTER TABLE `ketetapanpajaksub`
  MODIFY `TETAPAJid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `OBJGUGATid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `ajuanSUBID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `RESPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `SPWPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surattugas`
--
ALTER TABLE `surattugas`
  MODIFY `STid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
