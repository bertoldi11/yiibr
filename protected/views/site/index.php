<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<?php if(is_null($modelHangoutAcontecendo)):?>
	<p>Nenhum Hangout está acontecendo no momento!</p>
	<p>Aproveite para ler um artigo em nosso <a href="/blog">blog</a></p>
	<p>Ou dê uma mãozinha em nosso <a href="/forum">forum</a></p>
<?php else:?>
	<iframe width="420" height="315" src="<?php echo $modelHangoutAcontecendo->youtube;?>" frameborder="0" allowfullscreen></iframe>
<?php endif;?>