<?php

class HomeController extends BaseController {
    function view($f3, $args) {
        $f3->set('page', '/category/all');

        $f3->set('toolbar', [
            'template' => 'toolbar.htm',
            'data' => ''
        ]);

        $f3->set('sidebar', [
            'data' => $this->provider->getMenu()
        ]);

        $f3->set('content', [
            //'template' => 'test_array.htm',
            'template' => 'main-page.html',
            'navigation' => $this->provider->getPostCategories(),
            'data' => $this->provider->getPosts(),
        ]);

        $f3->set('main_posts', $this->provider->getPosts(PostCategory::Articles,0,1));


        $f3->set('getPostThumbnail', function($id) {
            return $this->provider->getPostThumbnail($id);
        });

        $f3->set('getPostEntry', function($text) {
            $textPat = getTextFromTag('h4', $text);
            return strlen($textPat) > 0 ? $textPat : $text;
        });

        function getTextFromTag($tagName, $text){
            $matches = [];
            $pattern = '/<'.$tagName.'.*>(.+)<\/'.$tagName.'>/';
            if(preg_match($pattern, html_entity_decode($text), $matches)){
                return $matches[1];
            }
        };

        echo Template::instance()->render('layout.htm');
    }
}