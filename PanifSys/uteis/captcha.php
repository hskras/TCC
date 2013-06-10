<?php
	if (!isset($_SESSION)) session_start();
	
	$captcha_w = 150; // captcha width	
	$captcha_h = 50; // captcha height
	$min_font_size = 12; //tamanho minimo fonte
	$max_font_size = 18; //tamanho máximo fonte
	$angle = 20; //angulo de inclinação	
	$bg_size = 13; // tamanho do background grid
	$font_path = 'fonts/courbd.ttf'; //caminho da fonte

	// Sorteia os números que serão exibidos
	$first_num = rand(1,9);
	$second_num = rand(1,9);
	$third_num = rand(1,9);
	$fourth_num = rand(1,9);	
	
	//guarda os valores sorteados na variavel
	$session_var = $second_num.$third_num.$fourth_num.$first_num;
	
	//Guarda na sessão a sequencia de números para depois fazer as verificações
	$_SESSION['security_number'] = $session_var;
	$_SESSION['UsuarioNivel'] = 4;
	
	// Cria a imagem
	$img = imagecreate( $captcha_w, $captcha_h );
	
	//Texto preto, fundo branco  e grid cinza
	$black = imagecolorallocate($img,0,0,0);
	$white = imagecolorallocate($img,255,255,255);
	$grey = imagecolorallocate($img,215,215,215);
	
	//faz o fundo ficar branco
	imagefill( $img, 0, 0, $white );	
	
	//linha verticais do fundo
	for ($t = $bg_size; $t<$captcha_w; $t+=$bg_size){
		imageline($img, $t, 0, $t, $captcha_h, $grey);
	}
	//linhas horizontais do fundo
	for ($t = $bg_size; $t<$captcha_h; $t+=$bg_size){
		imageline($img, 0, $t, $captcha_w, $t, $grey);
	}
	
	//posiciona os números na imagem
	$item_space = $captcha_w/4;
	
	//primeiro número
	imagettftext(
		$img,
		rand(
			$min_font_size,
			$max_font_size
		),
		rand( -$angle , $angle ),
		rand( 5,25 ),
		rand( 25, $captcha_h-25 ),
		$black,
		$font_path,
		$second_num);
	
	//segundo número
	imagettftext(
		$img,
		rand(
			$min_font_size,
			$max_font_size
		),
		rand( -$angle, $angle ),
		rand( 35,50),
		rand( 25, $captcha_h-25 ),
		$black,
		$font_path,
		$third_num);
		
	//terceiro número
	imagettftext(
		$img,
		rand(
			$min_font_size,
			$max_font_size
		),
		rand( -$angle, $angle ),
		rand( 60,80),
		rand( 25, $captcha_h-25 ),
		$black,
		$font_path,
		$fourth_num);
		
	//quarto número
	imagettftext(
		$img,
		rand(
			$min_font_size,
			$max_font_size
		),
		rand( -$angle, $angle ),
		rand( 100,120),
		rand( 25, $captcha_h-25 ),
		$black,
		$font_path,
		$first_num);
		
	//imagem é jpeg
	header("Content-type:image/jpeg");
	// nome: secure.jpg */
	header("Content-Disposition:inline ; filename=secure.jpg");
	//imagem resultante
	imagejpeg($img);
?>