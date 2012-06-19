## Bootstrapper Bundle, by Patrick Talmadge

Bootstrapper is a set of classes that allow you to quickly create Twitter Bootstrap style markup.

##View bundle site for full install instructions.
http://laravelbootstrapper.phpfogapp.com


Install using Artisan CLI:

	php artisan bundle:install bootstrapper

Add the following line to application/bundles.php

	return array(
		'bootstrapper' => array('auto' => true),
	);

Change Form and Paginator in the application.php config file to:

	'Form' 			=> 'Bootstrapper\\Form',
	'Paginator'		=> 'Bootstrapper\\Paginator',

Add the following to the application.php config file:

	'Alert' 		=> 'Bootstrapper\\Alert',
	'Tabbable' 		=> 'Bootstrapper\\Tabbable',
	'Navigation'	=> 'Bootstrapper\\Navigation',
	'Progress'		=> 'Bootstrapper\\Progress',
	'Badges'		=> 'Bootstrapper\\Badges',
	'Labels'		=> 'Bootstrapper\\Labels',
	'DropdownButton'=> 'Bootstrapper\\DropdownButton',
	'SplitDropdownButton'=> 'Bootstrapper\\SplitDropdownButton',
	'ButtonGroup'	=> 'Bootstrapper\\ButtonGroup',
	'ButtonToolbar'	=> 'Bootstrapper\\ButtonToolbar',
	'Navbar'		=> 'Bootstrapper\\Navbar',
	'Breadcrumbs'	=> 'Bootstrapper\\Breadcrumbs',
	'Carousel'		=> 'Bootstrapper\\Carousel',
	'Typeahead'		=> 'Bootstrapper\\Typeahead',
	'Buttons'		=> 'Bootstrapper\\Buttons',


Update laravel\database\query.php to use the Bootstrapper Paginator and not the core class by changing the use statement.

	//Change 
	use Laravel\Paginator; 

	//To
	use Paginator;


Publish the bundle assets to your public folder.

	php artisan bundle:publish


Add the following to your template view file to include the Twitter Bootstrap CSS and Javascript.

	Asset::container('bootstrapper')->styles();
	Asset::container('bootstrapper')->scripts();



##Current Twitter Bootstrap version is 2.0.4.

- Homepage:		http://twitter.github.com/bootstrap/
- GitHub:   	https://github.com/twitter/bootstrap/