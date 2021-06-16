<?php
namespace App\Models;
use CodeIgniter\Model;

class MPengajuansub extends Model
{
	
	protected $table = "v_pengajuansub";

	public function getPengajuansub($id = false)
	{
		
		if($id === false){
			// $builder =  $this->db->table('pengajuan');
			// return $builder->get();
			return $this->db->table('v_pengajuansub')
						->where('ajuanSUBjenisPermintaan','SUB')
						->orderBy('ajuanSUBID','DESC')
                        ->get();			 
		}else{
			return $this->table('v_pengajuansub')
                        ->where('ajuanSUBID', $id)
                        ->get()
                        ->getRowArray();

		}

	}

	// public function get_SuratKeputusan($id=false)
	// {
	// 	return $this->db->table('keputusan')
 //                        ->where('KEPid', $id)
 //                        ->get()
 //                        ->getResultArray();
	// }

	//getTujuanResponKanwil
	public function getTujuanResponKanwil($id=false)
	{
		 return $this->db->table('jenistujuanrespon')
                        ->get()
                        ->getResultArray();
	}
	//Get KPjenis - t_ketetapanpajak
	public function getKPjenis($id=false)
	{
        $builder = $this->db->table('ketetapanpajak');
		$builder->select('*');
		$builder->join('jenisketetapan', 'jenisketetapan.JKid = ketetapanpajak.KPJKid');
		$query = $builder->get();
		return $query->getResultArray();

	}

	//Get from t_ketetapanpajak
	public function getSuratBanding($id=false)
	{
		 return $this->db->table('ketetapanpajak')
                        ->get()
                        ->getResultArray();
	}

	public function get_ListSuratKeputusan($id=false)
	{
		 return $this->db->table('keputusan')
                        ->get()
                        ->getResultArray();
	}
	

	public function get_mwpkeputusan($id=false)
	{
		 return $this->db->table('v_kepsub')
		 				->where('KEPid', $id)
                        ->get()
                        ->getResultArray();

		// $builder = $this->db->table('keputusan');
		// $builder->select('keputusan.*, pengajuan.*, amar_keputusan.*');
		// $builder->join('pengajuan', 'pengajuan.ajuanId = keputusan.KEPajuanId');
		// $builder->join('amar_keputusan','amar_keputusan.IdAmar = keputusan.KEPjenis');
		// //$builder->where('keputusan.KEPid',$id);
		// $query = $builder->get();
		// return $query->getResultArray();
	}

	// Manage Ketetapan Pajak sub value from ketetapanpajak
	public function get_mgetTAPKP($id=false)
	{
		 return $this->db->table('ketetapanpajak')
		 				->where('KPJKid', $id)
                        ->get()
                        ->getResultArray();
	}


	public function get_msbfrketetapan($id=false)
	{
		 return $this->db->table('ketetapanpajak')
		 				->where('KPid', $id)
                        ->get()
                        ->getResultArray();
	}

	public function getDetailPengajuan($id=false)
	{
		$builder = $this->db->table('pengajuan');
		return $builder->get();
	}

	// public function get_jenisketetapanpajak()
	// {
	// 	$builder = $this->db->table('jenisketetapan');
 //        return $builder->get();
	// }

	public function get_jenispajaksub()
	{

		$builder = $this->db->query("SELECT * FROM jenispajak WHERE NamajenisPajak NOT LIKE '%SURAT%'");
		return $builder->getResultArray();
	}

	public function getJenisGugat()
	{
		$builder = $this->db->table('jenisgugatan');
		return $builder->get();
	}

	public function getAlertSUBSTG($type)
	{

		$builder = $this->db->query("SELECT * FROM substg WHERE SUBSTGnama = '$type'");
		return $builder->getResultArray();
	}

	public function get_ObjekBanding($id=false)
	{
		return $this->db->table('objekdigugat')
                        ->where('OBJGUGATajuanSUBID', $id)
                        ->get()
                        ->getResultArray();
	}

	public function get_KetetapanPajakSub($id=false)
	{
		$builder = $this->db->table('ketetapanpajaksub');
		$builder->select('*');
		$builder->join('jenisketetapan', 'jenisketetapan.JKid = ketetapanpajaksub.TETAPAJjenis');
		$builder->where('TETAPAJajuanSUBID',$id);
		$query = $builder->get();
		return $query->getResultArray();
	}

	//To view ResponKanwil
	public function get_ResponKanwil($id=false)
	{
		$builder = $this->db->table('responkanwil');
		$builder->select('*');
		$builder->join('jenistujuanrespon', 'jenistujuanrespon.RESPTUJid = responkanwil.RESPjenisTujuan');
		$builder->where('RESPajuanSUBID',$id);
		$query = $builder->get();
		return $query->getResultArray();

		// return $this->db->table('responkanwil')
  //                       ->where('RESPajuanSUBID', $id)
  //                       ->get()
  //                       ->getResultArray();
	}

	
	public function savePengajuansub($data)
	{
		$query = $this->db->table('pengajuansub')->insert($data);
		return $query;
	}

	public function saveObjekBanding($data)
	{
		$query = $this->db->table('objekdigugat')->insert($data);
		return $query;
	}

	public function saveKetetapanPajakSub($data)
	{
		$query = $this->db->table('ketetapanpajaksub')->insert($data);
		return $query;
	}

	public function saveResponKanwil($data)
	{
		$query = $this->db->table('responkanwil')->insert($data);
		return $query;
	}

	public function updateKetetapanUB($data,$id)
	{
		$query = $this->db->table('pengajuansub')->update($data,['ajuanSUBID' => $id]);
		return $query;
	}

	function checkDataKanwil($id=false)
	{
		$result  = $this->db->query("SELECT count(`RESPid`) as Count FROM responkanwil where `RESPajuanSUBID` = $id");
		$row = $result->getRow();
		return $count = $row->Count;
	}

	// public function get_jenisPajak($id=false)
	// {
	// 	return $this->db->table('jenispajak')
 //                        ->where('idJenisPemohon', $id)
 //                        ->get()
 //                        ->getResultArray();
	// }

	

	// //Save after Manage
	

	// //Save after Manage
	// public function savePermohonanWP($data)
	// {
	// 	$query = $this->db->table('permohonanwp')->insert($data);
	// 	return $query;
	// }

	// //Save after Manage
	// public function savePengantarKPP($data)
	// {
	// 	$query = $this->db->table('pengantarkpp')->insert($data);
	// 	return $query;
	// }

	// //Save after Manage
	// public function saveSuratTugas($data)
	// {
	// 	$query = $this->db->table('surattugas')->insert($data);
	// 	return $query;
	// }

	// //Save after Manage
	// public function savePencabutanPermohonan($data)
	// {
	// 	$query = $this->db->table('pencabutanwp')->insert($data);
	// 	return $query;
	// }
	// //Detail After Click Manage
	
	// public function savePermintaanSuratKPP($data)
	// {
	// 	$query = $this->db->table('permintaansuratkpp')->insert($data);
	// 	return $query;
	// }

	// public function savePembuktianWP($data)
	// {
	// 	$query = $this->db->table('suratpembuktianwp')->insert($data);
	// 	return $query;
	// }

	// public function saveSPUH($data)
	// {
	// 	$query = $this->db->table('pemberitahuanuntukhadir')->insert($data);
	// 	return $query;
	// }

	
	// public function saveLaporanPenelitian($data)
	// {
	// 	$query = $this->db->table('laporanpenelitian')->insert($data);
	// 	return $query;
	// }

	
	// public function saveKeputusan($data)
	// {
	// 	$query = $this->db->table('keputusan')->insert($data);
	// 	return $query;
	// }

	// function checkPencabutan($id=false)
	// {
	// 	$result  = $this->db->query("SELECT count(QuitWPid) as Count FROM pencabutanwp where QuitWPajuanID = $id");
	// 	$row = $result->getRow();
	// 	return $count = $row->Count;
	// }

	// function checkKeputusan($id=false)
	// {
	// 	$result  = $this->db->query("SELECT count(`KEPajuanId`) as Count FROM keputusan where `KEPajuanId` = $id");
	// 	$row = $result->getRow();
	// 	return $count = $row->Count;
	// }

	// public function closepengajuan($data,$id)
	// {
		
	// 	return $this->db->table('pengajuan')->update($data,['ajuanId' => $id]);
	// 	return $query;
	// }

	// public function get_KetetapanPajak($id=false)
	// {

	// 	$builder = $this->db->query("SELECT jenisketetapan.JKnama,ketetapanpajak.KPNoKetetapan, ketetapanpajak.KPTgl, ketetapanpajak.KPNilai FROM ketetapanpajak left JOIN jenisketetapan ON jenisketetapan.JKid = ketetapanpajak.KPJKid WHERE ketetapanpajak.KPajuanId = $id");
	// 	return $builder->getResultArray();
	// }

	// public function get_PermohonanWP($id=false)
	// {
	// 	return $this->db->table('permohonanwp')
 //                        ->where('PWPajuanId', $id)
 //                        ->get()
 //                        ->getResultArray();
	// }

	// public function get_PengantarKPP($id=false)
	// {
	// 	return $this->db->table('pengantarkpp')
 //                        ->where('PKPPajuanId', $id)
 //                        ->get()
 //                        ->getResultArray();
	// }

	// public function get_SuratTugas($id=false)
	// {
	// 	return $this->db->table('surattugas')
 //                        ->where('STajuanId', $id)
 //                        ->get()
 //                        ->getResultArray();
	// }

	// //Pencabutan Permohonan
	// public function get_PencabutanWP($id=false)
	// {
	// 	return $this->db->table('pencabutanwp')
 //                        ->where('QuitWPajuanID', $id)
 //                        ->get()
 //                        ->getResultArray();
	// }

	// //Pembuktian ke WP
	// public function get_PembuktianWP($id=false)
	// {
	// 	return $this->db->table('suratpembuktianwp')
 //                        ->where('SPWPajuanId', $id)
 //                        ->get()
 //                        ->getResultArray();
	// }

	//Permintaan Surat KPP
	// public function get_PermintaanSuratKPP($id=false)
	// {
	// 	return $this->db->table('permintaansuratkpp')
 //                        ->where('PSKPPajuanId', $id)
 //                        ->get()
 //                        ->getResultArray();
	// }

	// //SPUH - BA
	// public function get_SPUHBA($id=false)
	// {
	// 	return $this->db->table('pemberitahuanuntukhadir')
 //                        ->where('SPUHajuanId ', $id)
 //                        ->get()
 //                        ->getResultArray();
	// }

	// //Laporan Penelitian
	// public function get_LaporanPenelitian($id=false)
	// {
	// 	return $this->db->table('laporanpenelitian')
 //                        ->where('LPajuanId', $id)
 //                        ->get()
 //                        ->getResultArray();
	// }

	// //Keputusan keberatan / non keberatan
	// public function get_Keputusan($id=false)
	// {
	// 	return $this->db->table('keputusan')
 //                        ->where('KEPajuanId', $id)
 //                        ->get()
 //                        ->getResultArray();
	// }
} 