<?php
/**
 * Swagger Routes
 */

 Router::connect(
    '/docs',
    array('plugin'=>'Swagger', 'controller' => 'Swagger', 'action' => 'generateDocumentation')
);

Router::connect(
    '/docs/:resource',
    array('plugin'=>'Swagger', 'controller' => 'Swagger', 'action' => 'generateDocumentation'),
    array('pass'=>array('resource'))
);
