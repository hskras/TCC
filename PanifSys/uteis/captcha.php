<?php
	if (!isset($_SESSION)) session_start();
	// captcha width
	$captcha_w = 150;
	// captcha height
	$captcha_h = 50;
	// minimum font size; each operation element changes size
	$min_font_size = 12;
	// maximum font size
	$max_font_size = 18;
	// rotation angle
	$angle = 20;
	// background grid size
	$bg_size = 13;
	// path to font - needed to display the operation elements
	$font_path = 'fonts/courbd.ttf';
	// array of possible operators
	// first number random value; keep it lower than $second_num
	$first_num = rand(1,9);
	// second number random value
	$second_num = rand(1,9);
	$third_num = rand(1,9);
	$fourth_num = rand(1,9);	
	/*===============================================================
		From here on you may leave the code intact unless you want
		or need to make it specific changes. 
	  ===============================================================*/
	
	//$expression = $second_num.$operators[0].$first_num;
	/*
		operation result is stored in $session_var
	*/
	$session_var = $second_num.$third_num.$fourth_num.$first_num;
	/* 
		save the operation result in session to make verifications
	*/
	$_SESSION['security_number'] = $session_var;
	$_SESSION['UsuarioNivel'] = 4;
	
	/*
		start the captcha image
	*/
	$img = imagecreate( $captcha_w, $captcha_h );
	/*
		Some colors. Text is $black, background is $white, grid is $grey
	*/
	$black = imagecolorallocate($img,0,0,0);
	$white = imagecolorallocate($img,255,255,255);
	$grey = imagecolorallocate($img,215,215,215);
	/*
		make the background white
	*/
	imagefill( $img, 0, 0, $white );	
	/* the background grid lines - vertical lines */
	for ($t = $bg_size; $t<$captcha_w; $t+=$bg_size){
		imageline($img, $t, 0, $t, $captcha_h, $grey);
	}
	/* background grid - horizontal lines */
	for ($t = $bg_size; $t<$captcha_h; $t+=$bg_size){
		imageline($img, 0, $t, $captcha_w, $t, $grey);
	}
	
	/* 
		this determinates the available space for each operation element 
		it's used to position each element on the image so that they don't overlap
	*/
	$item_space = $captcha_w/4;
	
	/* first number */
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
	
	
	/* second number */
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
	/* third number */
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
	/* fourth number */
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
		
	/* image is .jpg */
	header("Content-type:image/jpeg");
	/* name is secure.jpg */
	header("Content-Disposition:inline ; filename=secure.jpg");
	/* output image */
	imagejpeg($img);
?>