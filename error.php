<?php 
if (($this->error->getCode()) == '404') {
		header('Location: /404');
		exit;
	}
?>
