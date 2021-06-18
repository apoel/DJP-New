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

	public function getPengajuanSUBClosing()
	{
		$result = $this->db->query("SELECT count(*) as closing FROM pengajuansub WHERE ajuanStatusAkhir != '' AND ajuanSUBjenisPermintaan = 'SUB'");
		return $result->getRow();
	}

	public function getPengajuanSTGClosing()
	{
		$result = $this->db->query("SELECT count(*) as closing FROM pengajuansub WHERE ajuanStatusAkhir != '' AND ajuanSUBjenisPermintaan = 'STG'");
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

	//Pengajuan SUB
	public function getTotalPengajuanSUB()
	{
		$result = $this->db->query("SELECT count(*) as total_pengajuan FROM pengajuansub WHERE ajuanSUBjenisPermintaan = 'SUB'");
		return $result->getRow();
	}

	//Pengajuan STG
	public function getTotalPengajuanSTG()
	{
		$result = $this->db->query("SELECT count(*) as total_pengajuan FROM pengajuansub WHERE ajuanSUBjenisPermintaan = 'STG'");
		return $result->getRow();
	}

	//SUB
	public function getPengajuanLateSub()
	{
		$result = $this->db->query("SELECT count(*) as Late FROM v_pengajuansub WHERE status_open LIKE 'Lewat Wakt%' AND ajuanSUBjenisPermintaan = 'SUB'");
		return $result->getRow();
	}

	//STG
	public function getPengajuanLateSTG()
	{
		$result = $this->db->query("SELECT count(*) as Late FROM v_pengajuansub WHERE status_open LIKE 'Lewat Wakt%' AND ajuanSUBjenisPermintaan = 'STG'");
		return $result->getRow();
	}

	//Pengajuan SUBSTG
	public function getDashboardPengajuanClosingsub()
	{
		$result = $this->db->query("SELECT * FROM pengajuansub WHERE ajuanStatusAkhir != '' AND ajuanSUBjenisPermintaan = 'SUB'");
		return $result->getResultArray();
	}

	
	public function getDashboardPengajuanClosingstg()
	{
		$result = $this->db->query("SELECT * FROM pengajuansub WHERE ajuanStatusAkhir != '' AND ajuanSUBjenisPermintaan = 'STG'");
		return $result->getResultArray();
	}
	//SUB Alert
	public function getPengajuanSubAlert()
	{
		$result = $this->db->query("SELECT count(*) as Alert FROM v_pengajuansub WHERE status_open LIKE 'Sebelum IKU%' AND ajuanSUBjenisPermintaan = 'SUB'");
		return $result->getRow();
	}

	//STG Alert
	public function getPengajuanSTGAlert()
	{
		$result = $this->db->query("SELECT count(*) as Alert FROM v_pengajuansub WHERE status_open LIKE 'Sebelum IKU%' AND ajuanSUBjenisPermintaan = 'STG'");
		return $result->getRow();
	}

	//Alert SUB
	public function getDashboardPengajuanAlertSub()
	{

		$result = $this->db->query("SELECT * FROM v_pengajuansub WHERE status_open LIKE 'Sebelum IKU%' AND ajuanSUBjenisPermintaan = 'SUB'");
		return $result->getResultArray();
	}

	//Alert STG
	public function getDashboardPengajuanAlertStg()
	{

		$result = $this->db->query("SELECT * FROM v_pengajuansub WHERE status_open LIKE 'Sebelum IKU%' AND ajuanSUBjenisPermintaan = 'STG'");
		return $result->getResultArray();
	}

	//Late SUB
	public function getDashboardPengajuanLateSub()
	{

		$result = $this->db->query("SELECT * FROM v_pengajuansub WHERE status_open LIKE 'Lewat Waktu%' AND ajuanSUBjenisPermintaan = 'SUB'");
		return $result->getResultArray();
	}

	//Late STG
	public function getDashboardPengajuanLateStg()
	{

		$result = $this->db->query("SELECT * FROM v_pengajuansub WHERE status_open LIKE 'Lewat Waktu%' AND ajuanSUBjenisPermintaan = 'STG'");
		return $result->getResultArray();
	}

}

?>