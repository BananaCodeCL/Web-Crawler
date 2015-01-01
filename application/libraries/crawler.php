<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No permitir el acceso directo al script' );
class crawler {
	function __construct() {
		$this->CI = & get_instance (); // Esto para acceder a la instancia que carga la librería
	}
	public function my_crawler($url) {
		require 'simple_html_dom.php';
		
		$html = file_get_html ( $url );
		
		foreach ( $html->find ( "input" ) as $i ) {
			
			echo $i;
		}
	}

	function sitemap($url) {
	
		$ctx = stream_context_create(
				array(
						'http'=>array(
								'header'=>"Content-type: application/x-www-form-urlencoded",
						)
				)
		);
		
		$HTML = file_get_contents($url,0,$ctx);
		$doc = new \DOMDocument();
		@$doc->loadHTML($HTML);
		$links = array();
		foreach ($doc->getElementsByTagName('a') as $element) {
			if ($element->hasAttribute('href')) {
				$links[] = $element->getAttribute('href');
			}
		}
		return $links;
	
	}
}
	
	
