<?php
    namespace Phork\Pkg\Debug;

    /**
     * The debug class is used to output or log any debugging data by
     * dispatching the debugging data to one or more handler classes.
     * If no handlers have been defined then the debugging data is
     * disregarded.
     *
     * <code>
     *   $debug = new Debug();
     *   $debug->addHandler('log', new Handlers\Log('/path/to/logfile'));
     *   $debug->addHandler('display', new Handlers\Display());
     *   $debug->log('Debugged!');
     * </code>
     *
     * @author Elenor Collings <elenor@phork.org>
     * @package \Phork\Pkg\Debug
     */
    class Debug extends \Phork\Core\Dispatcher
    {
        protected $instanceOf = '\\Phork\\Pkg\\Debug\\Handlers\\HandlerInterface';
    }
