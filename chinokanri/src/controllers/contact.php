<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
        $data = array(
            'title' => '千野建物管理株式会社',
            'meta_description' => 'ビル管理事業、マンション管理事業、プロパテイマネジメント事業、清掃事業なら横浜市鶴見区の千野建物管理株式会社',
            'meta_keywords' => '千野建物管理,千野建物管理株式会社,横浜,鶴見,ビル管理,マンション管理,プロパテイマネジメント,清掃',
        );
        $this->load->view('templates/header', $data);
        $this->load->view('pages/contact');
        $this->load->view('templates/footer');
	} 

    public function finish()
    {
        $data = array(
            'title' => '千野建物管理株式会社',
            'meta_description' => 'ビル管理事業、マンション管理事業、プロパテイマネジメント事業、清掃事業なら横浜市鶴見区の千野建物管理株式会社',
            'meta_keywords' => '千野建物管理,千野建物管理株式会社,横浜,鶴見,ビル管理,マンション管理,プロパテイマネジメント,清掃',
        );
        $this->load->view('templates/header', $data);
        $this->load->view('pages/form-finish');
        $this->load->view('templates/footer');
    }

    public function naiken()
    {
        $data = array(
            'title' => '千野建物管理株式会社',
            'meta_description' => 'ビル管理事業、マンション管理事業、プロパテイマネジメント事業、清掃事業なら横浜市鶴見区の千野建物管理株式会社',
            'meta_keywords' => '千野建物管理,千野建物管理株式会社,横浜,鶴見,ビル管理,マンション管理,プロパテイマネジメント,清掃',
        );
        $this->load->view('templates/header', $data);
        $this->load->view('contacts/naiken');
        $this->load->view('templates/footer');
    }

    public function finish_naiken()
    {
        $data = array(
            'title' => '千野建物管理株式会社',
            'meta_description' => 'ビル管理事業、マンション管理事業、プロパテイマネジメント事業、清掃事業なら横浜市鶴見区の千野建物管理株式会社',
            'meta_keywords' => '千野建物管理,千野建物管理株式会社,横浜,鶴見,ビル管理,マンション管理,プロパテイマネジメント,清掃',
        );
        $this->load->view('templates/header', $data);
        $this->load->view('contacts/thanks_page_naiken');
        $this->load->view('templates/footer');
    }

    public function chintai()
    {
        $data = array(
            'title' => '千野建物管理株式会社',
            'meta_description' => 'ビル管理事業、マンション管理事業、プロパテイマネジメント事業、清掃事業なら横浜市鶴見区の千野建物管理株式会社',
            'meta_keywords' => '千野建物管理,千野建物管理株式会社,横浜,鶴見,ビル管理,マンション管理,プロパテイマネジメント,清掃',
        );
        $this->load->view('templates/header', $data);
        $this->load->view('contacts/chintai');
        $this->load->view('templates/footer');
    }

    public function bunjyo()
    {
        $data = array(
            'title' => '千野建物管理株式会社',
            'meta_description' => 'ビル管理事業、マンション管理事業、プロパテイマネジメント事業、清掃事業なら横浜市鶴見区の千野建物管理株式会社',
            'meta_keywords' => '千野建物管理,千野建物管理株式会社,横浜,鶴見,ビル管理,マンション管理,プロパテイマネジメント,清掃',
        );

        $this->load->view('templates/header', $data);
        $this->load->view('contacts/bunjyo');
        $this->load->view('templates/footer');
    }

    public function kaiyaku()
    {
        $data = array(
            'title' => '千野建物管理株式会社',
            'meta_description' => 'ビル管理事業、マンション管理事業、プロパテイマネジメント事業、清掃事業なら横浜市鶴見区の千野建物管理株式会社',
            'meta_keywords' => '千野建物管理,千野建物管理株式会社,横浜,鶴見,ビル管理,マンション管理,プロパテイマネジメント,清掃',
        );
        $this->load->view('templates/header', $data);
        $this->load->view('contacts/kaiyaku');
        $this->load->view('templates/footer');
    }

    public function important()
    {
        $data = array(
            'title' => '千野建物管理株式会社',
            'meta_description' => 'ビル管理事業、マンション管理事業、プロパテイマネジメント事業、清掃事業なら横浜市鶴見区の千野建物管理株式会社',
            'meta_keywords' => '千野建物管理,千野建物管理株式会社,横浜,鶴見,ビル管理,マンション管理,プロパテイマネジメント,清掃',
        );
        $this->load->view('templates/header', $data);
        $this->load->view('contacts/important');
        $this->load->view('templates/footer');
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/home.php */