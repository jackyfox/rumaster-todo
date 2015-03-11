<?php
// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;
$filename = 'todos.xml';
$todos = simplexml_load_file($filename);

$app->get('/', function () use ($todos) {
	$output = '<ul>';
	foreach ($todos->item as $item)
	{
		$output .= '<li>' . $item->text;
		if ($item->done == 1) $output .= ' (выполнено)';
		$output .= '</li>';
	}
	$output .= '</ul>';
	return $output;
});

$app->run();
?>
