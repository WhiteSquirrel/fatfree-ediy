<?php

class PostController extends BaseController {
    function view($f3, $args) {
        $f3->set('page', '/post/'.$args['id']);

        $f3->set('toolbar', [
            'template' => 'toolbar.htm',
            'data' => ''
        ]);

        $f3->set('sidebar', [
            'data' => $this->provider->getMenu()
        ]);

        $f3->set('content', [
            'template' => 'post.htm',
            'navigation' => $this->provider->getPostCategories(),
            'data' => $this->provider->getPost($args['id']),
        ]);

        echo $args['id'];

        echo Template::instance()->render('layout.htm');
    }
}