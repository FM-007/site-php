<?php
	
	include ('../config.php');

	$data = array();
	$assunto = 'Nova mensagem do site';
	$corpo = '';

	foreach ($_POST as $key => $value) {
	    $corpo.=ucfirst($key)." : ".$value;
	    $corpo.="<hr>";
	}

	$info = ['assunto' => $assunto, 'corpo' => $corpo];

	$mail = new Email('vps.dankicode.com', 'testes@dankicode.com', 'gui123456', 'Teste Felipe');
	$mail->addAddress('felipe.moreira.da.s@gmail.com', 'Felipe Silva');
	$mail->formatarEmail($info);
	
	if ($mail->enviarEmail()) 
	{
	    $data['sucesso'] = true;
	} else 
	{
	    $data['erro'] = true;
	}

	//$data['retorno'] = 'sucesso';
    
    die(json_encode($data));

?>