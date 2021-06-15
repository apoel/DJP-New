<?php
namespace App\Models;
use CodeIgniter\Model;

class model_manageuser extends Model
{
	
	protected $table = "penelaahref";

	public function getListUser($id = false)
	{
		if($id === false){
			return $this->db->table('penelaahref')
						->orderBy('PENid','ASC')
                        ->get();
                        	 
		}else{
			return $this->table('penelaahref')
                        ->where('PENid', $id)
                        ->get()
                        ->getRowArray();
		}
		// $builder = $this->db->table('penelaahref');
		// return $builder->get();

	}

	// public function getListUser($id = false) {
	// 	$builder = $this->db->table('penelaahhref', 'penelaahhref.PENid=penuserlevelref.PENUserLevelNo')
	// 						->join('penuserlevelref', true);
	// 	return $builder->get();
	// }

	public function get_tingkatLevel() {
		$builder = $this->db->table('penuserlevelref');
		return $builder->get();
	}

	public function getListDepartmen($id = false)
	{
		$builder = $this->db->table('departemen');
		return $builder->get();
	}

    public function getDept($id = false)
	{
		return $this->db->table('departemen')
                        ->get()
                        ->getResultArray();
	}

	public function saveUser($data)
	{
		$query = $this->db->table('penelaahref')->insert($data);
		return $query;
	}

	public function get_IdUser($id=false)
	{
		return $this->db->table('penelaahref')
                        ->where('PENid', $id)
                        ->get()
                        ->getResultArray();
	}

	public function GetIDUser($id=false)
	{
		// $query = $this->db->table('penelaahref')->update($data,['SPWPajuanId' => $id, 'SPWPnoSurat' => $no_surat]);
		// return $query;
		
		return $this->db->table('penelaahref')
                        ->where('PENid', $id)
                        ->get()
                        ->getResultArray();
	}

	public function UpdateUser($data,$id)
	{
		$query = $this->db->table('penelaahref')->update($data,['PENid' => $id]);
		return $query;
	}

	public function ResetPassword($data, $id=false)
	{
		$query = $this->db->table('penelaahref')->update($data,['PENid' => $id]);
		return $query;

	}

	public function delete_User($id)
    {
        return $this->db->table('penelaahref')->delete(['PENid' => $id]);
    }

	//Departemen
	public function saveDept($data)
	{
		$query = $this->db->table('departemen')->insert($data);
		return $query;
	}

	public function get_IdDept($id=false)
	{
		return $this->db->table('departemen')
                        ->where('id', $id)
                        ->get()
                        ->getResultArray();
	}

	public function UpdateDept($data,$id)
	{
		$query = $this->db->table('departemen')->update($data,['id' => $id]);
		return $query;
	}

	public function delete_Dept($id)
    {
        return $this->db->table('departemen')->delete(['id' => $id]);
    }


} 