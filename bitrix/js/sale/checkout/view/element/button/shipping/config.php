<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/registry.bundle.css',
	'js' => 'dist/registry.bundle.js',
	'rel' => [
		'main.core',
		'sale.checkout.const',
		'ui.vue',
		'sale.checkout.view.mixins',
	],
	'skip_core' => false,
];