##Introduction

This is a simple debugging package for the microphork framework. The debug class is a dispatcher. The `display` handler outputs the debugging data and the `log` handler logs it to a file.

To extend this package create a `\Phork\App\Debug` class in the `app/classes` folder and an `app/config/debug.php` file to define the active handler(s).


##Usage

```
//load and initialize a new debug package
$class = \Phork::instance()->initPackage('Debug');
$debug = new $class();

//get the loaded config
$config = \Phork::config()->get('debug');

//initialize the debug handler
if ($config->handlers && $handlers = $config->handlers->export()) {
    $debug->init($handlers);
}

//send some debugging data
$debug->log('this', 'will', 'be', 'concatenated');
```


##Credits

Built by [Elenor](http://elenor.net) at [Phork Labs](http://phorklabs.com).


##License

Licensed under The MIT License
<http://www.opensource.org/licenses/mit-license.php>