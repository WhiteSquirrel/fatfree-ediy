<?php

class ContactsController extends BaseController {
    function view($f3, $args) {
        $f3->set('page', '/contacts');

        $f3->set('sections', [
            'sidebar' => [
                'template' => 'sidebar.htm',
                'data' => $this->provider->getMenu()
            ],
            'content' => [
                'template' => 'section_empty.htm',
                'data' => ''
            ],
            'toolbar' => [
                'template' => 'toolbar.htm',
                'data' => 'Simple page content'
            ]
        ]);

        echo Template::instance()->render('layout.htm');
    }
}