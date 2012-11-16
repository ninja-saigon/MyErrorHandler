<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'view_manager' => array(
        'not_found_template'       => 'error/404',
        'template_map' => array(
            'error'         => __DIR__ . '/../view/error/default.phtml',
            'error/404'     => __DIR__ . '/../view/error/404.phtml',
            'error/plain'   => __DIR__ . '/../view/error/plain.phtml'
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
    'translator' => array(
        'translation_file_patterns' => array(
            array(
                'type'          => 'gettext',
                'base_dir'      => __DIR__ . '/../language',
                'pattern'       => '%s.mo',
                'text_domain'   => 'exceptions'
            ),
        ),
    ),
    
);
