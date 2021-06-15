<?php
namespace App\Models;
use CodeIgniter\Model;

class MPengajuan extends Model
{
	
	protected $table = "v_pengajuan";

	public function getPengajuan($id = false)
	{
		if($id === false){
			return $this->db->table('v_pengajuan')
						->orderBy('ajuanId','DESC')
                        ->get();
                        	 
		}else{
			return $this->table('v_pengajuan')
                        ->where('ajuanId', $id)
                        ->get()
                        ->getRowArray();
		}
	}

	public function getPengajuanAssign($PENid)
	{
		return $this->db->table('v_pengajuanAssign')
                        // ->where('ajuanId', $id)
                        ->where('STPenelaah',$PENid)
                        ->get();
                     

	}

	public function getDetailPengajuan($id=false)
	{
		$builder = $this->db->table('pengajuan');
		return $builder->get();
	}

	public function get_jenisketetapanpajak()
	{
		$builder = $this->db->table('jenisketetapan');
        return $builder->get();
	}

	public function get_jenisPermohonan()
	{
		$builder = $this->db->table('jenispemohon');
		return $builder->get();
	}

	public function get_jenisekspedisi()
	{
		$builder = $this->db->table('jenisekspedisi');
        return $builder->get();
	}
	
	public function get_amarkeputusan()
	{
		$builder = $this->db->table('amar_keputusan');
        return $builder->get();
	}
	
	// public function get_jenisPajak() 
	// {
	// 	$builder = $this->db->table('jenispajak');
	// 	return $builder->get();
	// }

	public function get_jenisPajak($id=false)
	{
		return $this->db->table('jenispajak')
                        ->where('idJenisPemohon', $id)
                        ->get()
                        ->getResultArray();
	}

	public function get_SuratPanggilan($id=false)
	{
		return $this->db->table('suratpembuktianwp')
                        ->where('SPWPnoSurat', $id)
                        ->get()
                        ->getResultArray();
	}

	public function get_ListNoSPUH($id=false)
	{
		return $this->db->table('pemberitahuanuntukhadir')
                        ->where('SPUHnoSurat', $id)
                        ->get()
                        ->getResultArray();
	}

	

	public function savePengajuan($data)
	{
		$query = $this->db->table('pengajuan')->insert($data);
		return $query;
	}

	//Cek if exist KetetapanPajak
	//KetetapanPajak hanya sekali input
	function checkKetetapanPajak($id=false)
	{
		$result  = $this->db->query("SELECT count(`KPid`) as Count FROM ketetapanpajak where `KPajuanId` = $id");
		$row = $result->getRow();
		return $count = $row->Count;
	}

	//Save after Manage
	public function saveKetetapanPajak($data)
	{
		$query = $this->db->table('ketetapanpajak')->insert($data);
		return $query;
	}

	//Cek if exist PermohonanWP
	//PermohonanWP hanya sekali input
	function checkPermohonanWP($id=false)
	{
		$result  = $this->db->query("SELECT count(`PWPid`) as Count FROM permohonanwp where `PWPajuanId` = $id");
		$row = $result->getRow();
		return $count = $row->Count;
	}

	//Save after Manage
	public function savePermohonanWP($data)
	{
		$query = $this->db->table('permohonanwp')->insert($data);
		return $query;
	}

	//Cek if exist PermohonanWP
	//PermohonanWP hanya sekali input
	function checkPengantarKPP($id=false)
	{
		$result  = $this->db->query("SELECT count(`PKPPid`) as Count FROM pengantarkpp where `PKPPajuanId` = $id");
		$row = $result->getRow();
		return $count = $row->Count;
	}
	//Save after Manage
	public function savePengantarKPP($data)
	{
		$query = $this->db->table('pengantarkpp')->insert($data);
		return $query;
	}

	//Save after Manage
	public function saveSuratTugas($data)
	{
		$query = $this->db->table('surattugas')->insert($data);
		return $query;
	}

	function checkFormalMatrix($id=false)
	{
		$result  = $this->db->query("SELECT count(`FMid`) as Count FROM formatmatrik where `FMajuanId` = $id");
		$row = $result->getRow();
		return $count = $row->Count;
	}

	public function saveFormalMatrik($data)
	{
		$query = $this->db->table('formatmatrik')->insert($data);
		return $query;
	}

	
	function checkPencabutanPermohonan($id=false)
	{
		$result  = $this->db->query("SELECT count(`QuitWPid`) as Count FROM pencabutanwp where `QuitWPajuanID` = $id");
		$row = $result->getRow();
		return $count = $row->Count;
	}

	public function savePencabutanPermohonan($data)
	{
		$query = $this->db->table('pencabutanwp')->insert($data);
		return $query;
	}
	//Detail After Click Manage
	
	public function savePermintaanSuratKPP($data)
	{
		$query = $this->db->table('permintaansuratkpp')->insert($data);
		return $query;
	}

	public function savePembuktianWP($data)
	{
		$query = $this->db->table('suratpembuktianwp')->insert($data);
		return $query;
	}

	public function UpdatePembuktianWP($data,$id,$no_surat)
	{
		$query = $this->db->table('suratpembuktianwp')->update($data,['SPWPajuanId' => $id, 'SPWPnoSurat' => $no_surat]);
		return $query;
	}

	public function UpdateSPUH($data,$id,$no_spuh)
	{
		$query = $this->db->table('pemberitahuanuntukhadir')->update($data,['SPUHajuanId' => $id, 'SPUHnoSurat' => $no_spuh]);
		return $query;
	}

	public function saveSPUH($data)
	{
		$query = $this->db->table('pemberitahuanuntukhadir')->insert($data);
		return $query;
	}

	
	function checkLapPenelitian($id=false)
	{
		$result  = $this->db->query("SELECT count(`LPid`) as Count FROM laporanpenelitian where `LPajuanId` = $id");
		$row = $result->getRow();
		return $count = $row->Count;
	}

	public function saveLaporanPenelitian($data)
	{
		$query = $this->db->table('laporanpenelitian')->insert($data);
		return $query;
	}

	function checkKeputusan($id=false)
	{
		$result  = $this->db->query("SELECT count(`KEPid`) as Count FROM keputusan where `KEPajuanId` = $id");
		$row = $result->getRow();
		return $count = $row->Count;
	}

	public function saveKeputusan($data)
	{
		$query = $this->db->table('keputusan')->insert($data);
		return $query;
	}

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

	//Closong jika 1. Pencabutan Permohonan & 2. Manage Keputusan
	public function closingpengajuan($data1,$id)
	{
		return $this->db->table('pengajuan')->update($data1,['ajuanId' => $id]);
		return $data1;
	}
	public function get_KetetapanPajak($id=false)
	{

		$builder = $this->db->query("SELECT jenisketetapan.JKnama,ketetapanpajak.KPNoKetetapan, ketetapanpajak.KPTgl, ketetapanpajak.KPNilai FROM ketetapanpajak left JOIN jenisketetapan ON jenisketetapan.JKid = ketetapanpajak.KPJKid WHERE ketetapanpajak.KPajuanId = $id");
		return $builder->getResultArray();
	}


	public function get_NilaiKetetapanPajak($id=false) 
	{
		return $this->db->table('ketetapanpajak')
                        ->where('KPid', $id)
                        ->get()
                        ->getResultArray();
	}

	public function get_AssignPeneliti($id=false) 
	{
		// $builder = $this->db->query("SELECT PENid,PENNIP FROM penelaahref WHERE PENUserLevel = 'Level1-Peneliti'");
		// return $builder->getResultArray();

		return $this->db->table('penelaahref')
                        ->where('PENUserLevel', 'Level1-Peneliti')
                        ->get()
                        ->getResultArray();
                        
	}



	public function get_PermohonanWP($id=false)
	{
		return $this->db->table('permohonanwp')
                        ->where('PWPajuanId', $id)
                        ->get()
                        ->getResultArray();
	}

	public function get_PengantarKPP($id=false)
	{
		return $this->db->table('pengantarkpp')
                        ->where('PKPPajuanId', $id)
                        ->get()
                        ->getResultArray();
	}

	public function get_SuratTugas($id=false)
	{
		$builder = $this->db->query("SELECT st.STid, st.STajuanId, st.STnoSurat,st.STtglSurat,pf.PENid, pf.PENNama FROM surattugas st
			LEFT JOIN penelaahref pf on st.STPenelaah = pf.PENid 
			WHERE STajuanId = '$id'");
		return $builder->getResultArray();

		// return $this->db->table('surattugas')
  //                       ->where('STajuanId', $id)
  //                       ->get()
  //                       ->getResultArray();
	}

	public function get_FormalMatrix($id=false)
	{
		return $this->db->table('formatmatrik')
                        ->where('FMajuanId', $id)
                        ->get()
                        ->getResultArray();
	}

	//Pencabutan Permohonan
	public function get_PencabutanWP($id=false)
	{
		return $this->db->table('pencabutanwp')
                        ->where('QuitWPajuanID', $id)
                        ->get()
                        ->getResultArray();
	}

	//Pembuktian ke WP
	public function get_PembuktianWP($id=false)
	{
		return $this->db->table('suratpembuktianwp')
                        ->where('SPWPajuanId', $id)
                        ->get()
                        ->getResultArray();
	}

	public function get_nosuratpanggilan($id=false)
	{
        return $this->db->table('suratpembuktianwp')
                        ->where('SPWPajuanId', $id)
                        ->where('SPWPStatus', 0)
                        ->get()
                        ->getResultArray();
	}

	public function get_listspuh($id=false)
	{
        return $this->db->table('pemberitahuanuntukhadir')
                        ->where('SPUHajuanId', $id)
                        ->where('SPUHstatusKirim', 0)
                        ->get()
                        ->getResultArray();
	}
	//Permintaan Surat KPP
	public function get_PermintaanSuratKPP($id=false)
	{
		return $this->db->table('permintaansuratkpp')
                        ->where('PSKPPajuanId', $id)
                        ->get()
                        ->getResultArray();
	}

	//SPUH - BA
	public function get_SPUHBA($id=false)
	{
		return $this->db->table('pemberitahuanuntukhadir')
                        ->where('SPUHajuanId ', $id)
                        ->get()
                        ->getResultArray();
	}

	//Laporan Penelitian
	public function get_LaporanPenelitian($id=false)
	{
		return $this->db->table('laporanpenelitian')
                        ->where('LPajuanId', $id)
                        ->get()
                        ->getResultArray();
	}

	//Keputusan keberatan / non keberatan
	public function get_Keputusan($id=false)
	{
		return $this->db->table('keputusan')
                        ->where('KEPajuanId', $id)
                        ->get()
                        ->getResultArray();
	}
} 