#microphork

* [By Phork Labs](http://phorklabs.com/)
* Version: 0.1


##Introduction

This is a simple debugging package for the microphork framework. The debug class is a dispatcher. The `display` handler outputs the debugging data and the `log` handler logs it to a file.


##Usage

```
//load and initialize a new debug package
$debug = \Phork::instance()->initPackage('Debug', (
    function($result, $type) {
        $class = sprintf('\\Phork\\%s\\Debug\\Debug', $type);
        return new $class();
    }
));

//get the loaded config
$config = \Phork::config()->get('debug');

//initialize the debug handler
if ($config->handlers && $handlers = $config->handlers->export()) {
    $debug->init($handlers);
}

//send some debugging data
$debug->log('this', 'will', 'be', 'concatenated');
```


##License

Licensed under The MIT License
<http://www.opensource.org/licenses/mit-license.php>