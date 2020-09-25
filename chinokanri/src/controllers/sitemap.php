<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitemap extends CI_Controller {


    /**
     * Index Page for this controller.
     *
     */
    public function index()
    {
        // $this->load->database();
        // $query = $this->db->get("items");
        // $data['items'] = $query->result();
        $data['urls'] = array(
            'kaiyaku',
            'privacy-policy',
            'contact',
            'contact/naiken',
            'contact/chintai',
            'contact/kaiyaku',
            'contact/bunjyo',
            'contact/important',
        );

        $this->load->view('sitemap', $data);
    }
}

/* End of file Home.php */
/* Location: ./application/controllers/home.php */