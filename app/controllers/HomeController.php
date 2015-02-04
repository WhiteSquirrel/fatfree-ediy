<?php

class HomeController extends BaseController {
    function view($f3, $args) {
        $f3->set('page', '/');

        $f3->set('toolbar', [
            'template' => 'toolbar.htm',
            'data' => ''
        ]);

        $f3->set('sidebar', [
            'menu' => $this->provider->getMenu()
        ]);


        $f3->set('content', [
            //'template' => 'test_array.htm',
            'template' => 'main-page.html',
            'navigation' => $this->provider->getPostCategories(),
            'data' => $this->provider->getPosts(),
        ]);

        $f3->set('mainposts', $this->provider->getPosts(PostCategory::All,0,3));

        echo Template::instance()->render('layout.htm');
    }
}