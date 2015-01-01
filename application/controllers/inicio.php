<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Inicio extends CI_Controller {
	public function index() {
		$data ['body'] = 'site/index';
		$this->load->view ( 'template/index', $data );
	}
	public function crawl() {
		$this->load->library ( 'crawler' );
		
		$data ['body'] = 'site/crawl';
		$data ['info'] = $this->crawler->my_crawler( $this->input->post ( 'url' ) );
		// $data['info'] = $this->crawler->algo();
		$this->load->view ( 'template/index', $data );
	}
	public function sitemap() {
		$this->load->library ( 'crawler' );
		
		$data ['body'] = 'site/sitemap';
		$data['info'] = $this->crawler->sitemap($this->input->post('url'));
		$this->load->view ( 'template/index', $data );
	}
}

