<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data = array(
            'title' => '千野建物管理株式会社',
            'meta_description' => 'ビル管理事業、マンション管理事業、プロパテイマネジメント事業、清掃事業なら横浜市鶴見区の千野建物管理株式会社',
            'meta_keywords' => '千野建物管理,千野建物管理株式会社,横浜,鶴見,ビル管理,マンション管理,プロパテイマネジメント,清掃',
        );
        $this->load->view('templates/header', $data);
		$this->load->view('pages/home');
        $this->load->view('templates/footer');
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/home.php */