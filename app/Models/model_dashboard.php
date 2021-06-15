<?php
namespace App\Models;
use CodeIgniter\Model;

class model_dashboard extends Model
{
	protected $table = "pengajuan";

	public function getTotalPengajuan()
	{
		$result = $this->db->query("SELECT count(*) as total_pengajuan FROM v_pengajuan");
		return $result->getRow();
	}

	public function getPengajuanClosing()
	{
		$result = $this->db->query("SELECT count(*) as closing FROM v_pengajuan WHERE ajuanStatusAkhir != ''");
		return $result->getRow();
	}

	public function getPengajuanAlert()
	{
		$result = $this->db->query("SELECT count(*) as Alert FROM v_pengajuan WHERE status_open LIKE 'Sebelum IKU%' OR status_open LIKE 'Tepat Waktu%'");
		return $result->getRow();
	}

	public function getPengajuanLate()
	{
		$result = $this->db->query("SELECT count(*) as Late FROM v_pengajuan WHERE status_open LIKE 'Lewat Wakt%'");
		return $result->getRow();
	}


	public function getPengajuanSTGClosing()
	{
		$result = $this->db->query("SELECT count(*) as closing FROM pengajuansub WHERE ajuanStatusAkhir != ''");
		return $result->getRow();
	}


	// Function detail dashboard
	public function getDashboardPengajuanClosing()
	{
		$result = $this->db->query("SELECT * FROM v_pengajuan WHERE ajuanStatusAkhir != ''");
		return $result->getResultArray();
	}

	public function getDashboardPengajuanAlert()
	{

		$result = $this->db->query("SELECT * FROM v_pengajuan WHERE status_open LIKE 'Sebelum IKU%'");
		return $result->getResultArray();
	}

	public function getDashboardPengajuanLate()
	{

		$result = $this->db->query("SELECT * FROM v_pengajuan WHERE status_open LIKE 'Lewat Waktu%'");
		return $result->getResultArray();
	}

	//Pengajuan SUBSTG
	public function getTotalPengajuanSTG()
	{
		$result = $this->db->query("SELECT count(*) as total_pengajuan FROM pengajuansub");
		return $result->getRow();
	}

	public function getPengajuanLateSub()
	{
		$result = $this->db->query("SELECT count(*) as Late FROM v_pengajuansub WHERE status_open LIKE 'Lewat Wakt%'");
		return $result->getRow();
	}

	//Pengajuan SUBSTG
	public function getDashboardPengajuanClosingsub()
	{
		$result = $this->db->query("SELECT * FROM pengajuansub WHERE ajuanStatusAkhir != ''");
		return $result->getResultArray();
	}

	public function getPengajuanSubAlert()
	{
		$result = $this->db->query("SELECT count(*) as Alert FROM v_pengajuansub WHERE status_open LIKE 'Sebelum IKU%'");
		return $result->getRow();
	}

	public function getDashboardPengajuanAlertSub()
	{

		$result = $this->db->query("SELECT * FROM v_pengajuansub WHERE status_open LIKE 'Sebelum IKU%'");
		return $result->getResultArray();
	}

	public function getDashboardPengajuanLateSub()
	{

		$result = $this->db->query("SELECT * FROM v_pengajuansub WHERE status_open LIKE 'Lewat Waktu%'");
		return $result->getResultArray();
	}

}

?>