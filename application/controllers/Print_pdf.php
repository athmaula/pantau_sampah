<?php 

/**
* 
*/
class print_pdf extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function pdf($id_data, $user_id)
	{
		error_reporting(0);
		
		if (! empty($id_data) && ! empty($user_id)) {
			$id_user = $this->session->userdata('id');
			$this->db->select('*');
			$this->db->join('user', 'user.id = data_sampah_user.user_id', 'left');
			$this->db->where('data_sampah_user.user_id', $id_user);
			$query = $this->db->get();
			return $query->row();

			$parameter = array(
				'paper' => 'A4',
				'orientation' => 'portrait',
				);
			$this->load->library('pdf, $parameter');
			$this->pdf->selectfont(APPPATH."/third_party/font/Helvetica.afm");

			$this->pdf->ezText("Your Garbage Data", 20,
				array('justification' => 'centre'));

			$this->pdf->ezSetDy(-15);

			$data = $this->print_pdf($id_data, $user_id);

			$no = 0;
			$i = 0;
			$data_rekap = array();

			foreach ($data->result_array() as $key => $value) {
				$data_rekap[$key] = $value;
				$data_rekap[$i] ['$no'] = ++$no;
				$i++;

				$column_header = array(
					'no' => 'No',
					'input_sampah' => 'Garbage Weight',
					'action' => 'Disposal Method',
					'jenis_sampah' => 'Garbage type',
					'tanggal' => 'Date'
					);

				$this->pdf->ezTable($data_rekap, $column_header);

				$nama_file = 'Garbage Data' . '.pdf';

				$this->pdf->ezStream(array(
					'Content-Disposition' => $nama_file));
			}
		}
		else
		{
			$this->session->set_flashdata('error', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error</strong>,</div>');
			redirect('user');
		}
	}
}