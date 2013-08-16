<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| routing array
	|--------------------------------------------------------------------------
	|
	| This is passed to the Route::group and allows us to group and filter the
	| routes for our package
	|
	*/
	'routing' => array(
		'prefix' => '/assets'
	),

	/*
	|--------------------------------------------------------------------------
	| paths
	|--------------------------------------------------------------------------
	|
	| These are the directories we search for files in. 
	|
	| NOTE that the '.' in require_tree . is relative to where the manifest file 
	| (i.e. app/assets/javascripts/application.js) is located
	|
	*/
	'paths' => array(
		'app/assets/javascripts',
		'app/assets/stylesheets',
		'lib/assets/javascripts',
		'lib/assets/stylesheets',
		'vendor/assets/javascripts',
		'vendor/assets/stylesheets'
	),

	/*
	|--------------------------------------------------------------------------
	| filters
	|--------------------------------------------------------------------------
	|
	| In order for a file to be included with sprockets, it needs to be listed 
	| here and we can also do any preprocessing on files with the extension if
	| we choose to. 
	|
	| NOTE that the minification filter will be ran automatically
	| for us, we don't have to specify it here (it kicks in when the environment
	| is set to production.
	|
	*/
	'filters' => array(
		'.js' => array(

		),
		'.css' => array(

		),
		'.js.coffee' => array(
			new Codesleeve\AssetPipeline\Filters\CoffeeScriptFilter
		),
		'.css.less' => array(
			new Assetic\Filter\LessphpFilter
		)
	),

	/*
	|--------------------------------------------------------------------------
	| ignores
	|--------------------------------------------------------------------------
	|
	| This allows us to specify any files that we don't want included in the
	| asset pipeline ever. If you have multiple files named foobar.js then you will
	| need to put a fully qualified path in there like /cool-foobars/foobar.js
	|
	*/
	'ignores' => array(
		'/test/',
		'/tests/',
		'.ignoreme'
	),

	/*
	|--------------------------------------------------------------------------
	| directoryScan
	|--------------------------------------------------------------------------
	|
	| ** on production environment only **
	| This controls how often we scan the directory relative to where our assets 
	| are. If we scan the assets directory and a file is found to have been changed 
	| based on greatest filemtime then we will rebuild our cache of those assets. 
	| We may not want to scan a directory of assets for changes everytime we hit 
	| the server so this only happens every <you pick below> minutes.
	| 
	| ** on development environment **
	| This value doesn't do anything because we just scan the directory 
	| everytime and rebuild the assets cache anytime a file has been added 
	| or changed.
	|
	| ** this is in minutes **
	|
	*/
	'directoryScan' => 10,

);