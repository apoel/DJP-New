<?php
namespace App\Models;
use CodeIgniter\Model;

class MPengajuan extends Model
{
	
	protected $table = "pengajuan";

	public function getPengajuan($id = false)
	{
		
		$builder = $this->db->table('v_pengajuan');
        return $builder->get();

		// if($id === false){
		// 	return $this->table('pengajuan')
		// 				->get()
		// 				->getResultArray();
		// }else{
		// 	return $this->table('pengajuan')
		// 				->where('pengajuan',$id)
		// 				->get()
		// 				->getRowArray();
		// }

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

	public function get_jenisPajak()
	{
		$builder = $this->db->table('jenispajak');
		return $builder->get();
	}

	public function savePengajuan($data)
	{
		$query = $this->db->table('pengajuan')->insert($data);
		return $query;
	}
} 