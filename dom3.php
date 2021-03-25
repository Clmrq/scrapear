<?php
	include_once('./simple_html_dom.php');

/*proxyurl = '149.56.1.48:8181';

	$context = stream_context_create();
	stream_context_set_params($context, array(
				'proxy' => $proxyurl,
				'ignore_errors' => true, 
				'max_redirects' => 3)
				);
		

	$html = file_get_html('https://www.fontaneriamarquez.com/', 0, $context);*/

	echo "Buscando datos de contacto... \n\n";


	$file = "./marquez.html";
	$doc = new DOMDocument('1.0', 'UTF-8');
	
	
	echo '<pre>'.print_r(  get_class_methods($doc ),1).'</pre>';	
	
	$doc->loadHTMLFile($file);


if ($doc->validate()) {
	echo "¡Este documento es válido!\n";	}
		// example 1:
		//$elements = $doc->getElementsByTagName('tele');
		// example 2:
		//$elements = $doc->getElementsByTagName('html');
		// example 3:
		//$elements = $doc->getElementsByTagName('body');
		// example 4:
		//$elements = $doc->getElementsByTagName('table');
		// example 5:
		$elements = $doc->getElementById('tele');
		var_dump($elements);
?>

