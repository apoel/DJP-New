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

	//Respon Kanwil
	public function getArsip($id = false)
	{
		$builder = $this->db->table('subarsip');
		return $builder->get();
	}

	//Respon Kanwil
	public function getResponKanwil($id = false)
	{
		$builder = $this->db->table('jenistujuanrespon');
		return $builder->get();
	}

	//get keputusan
	public function getKeputusan($id = false)
	{
		$builder = $this->db->table('amar_keputusan');
		return $builder->get();
	}

	public function getEkspedisi($id = false)
	{
		$builder = $this->db->table('jenisekspedisi');
		return $builder->get();
	}

	public function MataUang($id = false)
	{
		$builder = $this->db->table('matauang');
		return $builder->get();

	}

	public function get_IdMataUang($id=false)
	{
		return $this->db->table('matauang')
                        ->where('MataUangId', $id)
                        ->get()
                        ->getResultArray();
	}

	public function saveMataUang($data)
	{
		$query = $this->db->table('matauang')->insert($data);
		return $query;
	}

	public function UpdateMataUang($data,$id)
	{
		$query = $this->db->table('matauang')->update($data,['MataUangId' => $id]);
		return $query;
	}
	
	
	public function getSubSTG($id = false)
	{

		return $this->db->table('substg')
						// ->orderBy('ajuanId','DESC')
                        ->get();

	}

	public function delete_matauang($id)
    {
        return $this->db->table('matauang')->delete(['MataUangId' => $id]);
    }

    //Save Arsip
    public function saveArsip($data)
	{
		$query = $this->db->table('subarsip')->insert($data);
		return $query;
	}

    //TujuanRespon
    public function saveTujuanRespon($data)
	{
		$query = $this->db->table('jenistujuanrespon')->insert($data);
		return $query;
	}
    //Keputusan
    public function saveKeputusan($data)
	{
		$query = $this->db->table('amar_keputusan')->insert($data);
		return $query;
	}


    //Ekspedisi
    public function saveJE($data)
	{
		$query = $this->db->table('jenisekspedisi')->insert($data);
		return $query;
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

	
	//ajax arsip
	public function get_IdArsip($id=false)
	{
		return $this->db->table('subarsip')
                        ->where('SUBArsipId', $id)
                        ->get()
                        ->getResultArray();
	}

	//ajax tujuan respon
	public function get_IdTR($id=false)
	{
		return $this->db->table('jenistujuanrespon')
                        ->where('RESPTUJid', $id)
                        ->get()
                        ->getResultArray();
	}

	//Eidt ajax Keputusan
	public function get_IdKep($id=false)
	{
		return $this->db->table('amar_keputusan')
                        ->where('IdAmar', $id)
                        ->get()
                        ->getResultArray();
	}

	//ajax model edit ekspedisi
	public function get_IdJE($id=false)
	{
		return $this->db->table('jenisekspedisi')
                        ->where('JEid', $id)
                        ->get()
                        ->getResultArray();
	}

	//Update arsip
	public function UpdateArsip($data,$id)
	{
		$query = $this->db->table('subarsip')->update($data,['SUBArsipId' => $id]);
		return $query;
	}

	//Update tujuan respon
	public function UpdateTR($data,$id)
	{
		$query = $this->db->table('jenistujuanrespon')->update($data,['RESPTUJid' => $id]);
		return $query;
	}

	//Update Keputusan
	public function UpdateKep($data,$id)
	{
		$query = $this->db->table('amar_keputusan')->update($data,['IdAmar' => $id]);
		return $query;
	}
	//ekspedisi
	public function UpdateJE($data,$id)
	{
		$query = $this->db->table('jenisekspedisi')->update($data,['JEid' => $id]);
		return $query;
	}

	public function UpdateJK($data,$id)
	{
		$query = $this->db->table('jenisketetapan')->update($data,['JKid' => $id]);
		return $query;
	}

	//Delete arsip
	public function delete_Arsip($id)
    {
        return $this->db->table('subarsip')->delete(['SUBArsipId ' => $id]);
    }

	//delete tujaun respon
	public function delete_TR($id)
    {
        return $this->db->table('jenistujuanrespon')->delete(['RESPTUJid' => $id]);
    }
	//Delete Keputusan
	public function delete_Kep($id)
    {
        return $this->db->table('amar_keputusan')->delete(['IdAmar' => $id]);
    }

	public function delete_JE($id)
    {
        return $this->db->table('jenisekspedisi')->delete(['JEid' => $id]);
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