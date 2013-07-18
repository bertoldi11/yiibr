<?php
$this->breadcrumbs=array(
	'Hangouts',
);

$this->menu=array(
array('label'=>'Create Hangouts','url'=>array('create')),
array('label'=>'Manage Hangouts','url'=>array('admin')),
);
?>

<h1>Hangouts</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
