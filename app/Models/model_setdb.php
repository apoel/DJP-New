<?php
namespace App\Models;
use CodeIgniter\Model;

class model_setdb extends Model
{
	
	protected $table = "jenispemohon";

	public function getListPermohonan($id = false)
	{
		$builder = $this->db->table('jenispemohon');
		return $builder->get();

	}

	public function getListPajak($id = false)
	{
		$builder = $this->db->table('v_jenispajak');
		return $builder->get();

	}

	public function getJK($id = false)
	{
		$builder = $this->db->table('jenisketetapan');
		return $builder->get();

	}

	public function SubSTG($id = false)
	{
		$builder = $this->db->table('substg');
		return $builder->get();

	}

	public function get_IdSubSTG($id=false)
	{
		return $this->db->table('substg')
                        ->where('SUBSTGid', $id)
                        ->get()
                        ->getResultArray();
	}

	public function saveSubSTG($data)
	{
		$query = $this->db->table('substg')->insert($data);
		return $query;
	}

	public function UpdateSubSTG($data,$id)
	{
		$query = $this->db->table('substg')->update($data,['SUBSTGid' => $id]);
		return $query;
	}
	
	
	public function getSubSTG($id = false)
	{

		return $this->db->table('substg')
						// ->orderBy('ajuanId','DESC')
                        ->get();

	}

	public function delete_substg($id)
    {
        return $this->db->table('substg')->delete(['SUBSTGid' => $id]);
    }

    //JK
    public function saveJK($data)
	{
		$query = $this->db->table('jenisketetapan')->insert($data);
		return $query;
	}

	public function get_IdJK($id=false)
	{
		return $this->db->table('jenisketetapan')
                        ->where('JKid', $id)
                        ->get()
                        ->getResultArray();
	}

	public function UpdateJK($data,$id)
	{
		$query = $this->db->table('jenisketetapan')->update($data,['JKid' => $id]);
		return $query;
	}

	public function delete_JK($id)
    {
        return $this->db->table('jenisketetapan')->delete(['JKid' => $id]);
    }

    //Jenis Permohonan
     public function saveJP($data)
	{
		$query = $this->db->table('jenispemohon')->insert($data);
		return $query;
	}

	public function get_IdJP($id=false)
	{
		return $this->db->table('jenispemohon')
                        ->where('idJenisPemohon', $id)
                        ->get()
                        ->getResultArray();
	}

	public function UpdateJP($data,$id)
	{
		$query = $this->db->table('jenispemohon')->update($data,['idJenisPemohon' => $id]);
		return $query;
	}

	public function delete_JP($id)
    {
        return $this->db->table('jenispemohon')->delete(['idJenisPemohon' => $id]);
    }

    public function get_jenisPermohonan()
	{
		$builder = $this->db->table('jenispemohon');
		return $builder->get();
	}


	//Jenis Pajak
	public function saveJenisPajak($data)
	{
		$query = $this->db->table('jenispajak')->insert($data);
		return $query;
	}

	public function get_IdJenisPajak($id=false)
	{
		return $this->db->table('v_jenispajak')
                        ->where('jnsPajakId', $id)
                        ->get()
                        ->getResultArray();
	}

	public function updateJenisPajak($data,$id)
	{
		$query = $this->db->table('jenispajak')->update($data,['jnsPajakId' => $id]);
		return $query;
	}

	public function delete_JenisPajak($id)
    {
        return $this->db->table('jenispajak')->delete(['jnsPajakId' => $id]);
    }

	
	

} 