<?php
    return array(
        'debug'             => array(
            'handlers'          => array(
                'display'           => array(
                    'active'            => false,
                    'class'             => '\Phork\Pkg\Debug\Handlers\Display',
                    'params'            => array(
                        'html'              => true,
                        'verbose'           => true
                    )
                ),
                'log'               => array(
                    'active'            => false,
                    'class'             => '\Phork\Pkg\Debug\Handlers\Log',
                    'params'            => array(
                        'logfile'           => LOG_PATH.'debug.log',
                        'verbose'           => true
                    )
                )
            )
        ),
    );