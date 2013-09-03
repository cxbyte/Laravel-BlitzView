# BlitzView - Laravel View Replacement #
BlitzView replaces the default Laravel View class with the [Blitz Template Engine](http://alexeyrybak.com/blitz/blitz_en.html).

## Installation Blitz ##
wget http://alexeyrybak.com/blitz/blitz-0.8.6.tar.gz

tar zxvf blitz-0.8.6.tar.gz

cd blitz-0.8.6

phpize

./configure

make install

in php.ini add extension=blitz.so

## Installation BlitzView ##

in your app composer.json add

	"require": {
	
    ...
		"cxbyte/blitz-view": "dev-master"
	},

then in your app root directory

composer.phar update

Loading composer repositories with package information
Updating dependencies (including require-dev)
  - Installing cxbyte/blitz-view (dev-master 45223c2)
    Downloading: 100%

Writing lock file
Generating autoload files

all fine, then in app config file (/app/config/app.php) add service provider


	'providers' => array(

		...
		'Cxbyte\BlitzView\BlitzViewServiceProvider',
	),

## Using BlitzView ##

You can use views as usually

create view file index.tpl

and in your controller

class HomeController extends BaseController
{

    public function HomePage()
    
    {
        return View::make('index', array());
    }
}

That's all :-)


