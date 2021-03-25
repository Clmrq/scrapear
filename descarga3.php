<?php 
	
    // Definimos la función cURL
    function descarga($url) {
        $ch = curl_init($url); // Inicia sesión cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // Configura cURL para devolver el resultado como cadena
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Configura cURL para que no verifique el peer del certificado dado que nuestra URL utiliza el protocolo HTTPS
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.8) Gecko/2009032609 Firefox/3.0.8');
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 600000);
    	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);

	   curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt');
	   curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies.txt');
		//CONFIGURACION DE PROXY.
	    //Abrimos archivo de proxy y copiamos contenido en array.
	   //$array = file("proxy.txt", FILE_SKIP_EMPTY_LINES);
	   //var_dump($array);	
	    //$rand=rand(0, sizeof($array));
	
	    $prox= $array[$rand];
	    $prox='115.84.99.182:51265';
	
	  // echo $prox;
	  // $ip= explode (':', $prox);
	   //curl_setopt ($ch, CURLOPT_PROXY,'115.84.99.182:51265' ); //va el proxy
	   //curl_setopt ($ch, CURLOPT_PROXYPORT, $ip[1]);

	
        $info = curl_exec($ch); // Establece una sesión cURL y asigna la información a la variable $info
        curl_close($ch); // Cierra sesión cURL
        return $info; // Devuelve la información de la función
    }

    
    