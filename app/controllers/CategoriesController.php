<?php

class CategoriesController extends BaseController {
    function view($f3, $args) {
        $f3->set('page', '/category/'.$args['name']);

        $posts = $this->provider->getPosts($args['name'], 0, 30);

        $f3->set('getPreview', function ($text) {
            $matches = null;
            $tagName = 'strong';

            if(preg_match("/<$tagName ?.*>(.+)<\/$tagName>/", $text, $matches)){
                return $matches[1];
            } else {
                return '<strong style="color: #ff0000">Не удалось обрезать</strong>';
            }
        });

        $f3->set('sidebar', [
            'data' => $this->provider->getMenu()
        ]);

        $f3->set('content', [
            'template' => $args['name'] == 'all' || $args['name'] == 'news' ? 'posts.htm' : 'article.htm',
            'navigation' => $this->provider->getPostCategories(),
            'data' => $posts
        ]);

        $f3->set('toolbar', [
            'template' => 'toolbar.htm',
            'data' => 'Simple page content'
        ]);

        echo Template::instance()->render('layout.htm');
    }
}