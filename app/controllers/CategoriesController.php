<?php

class CategoriesController extends BaseController {
    function view($f3, $args) {
        $f3->set('page', '/category/'.$args['name']);

        $pageSize = 8;
        $pageIndex = isset($args['pageIndex']) ? $args['pageIndex'] : 1;

        $posts = $this->provider->getPosts();

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
            'menu' => $this->provider->getMenu()
        ]);

        $f3->set('content', [
            'template' => $args['name'] == 'news' ? 'posts.htm' : 'article.htm',
            'navigation' => $this->provider->getPostCategories(),
            'pagination' => [
                'pageIndex' => $pageIndex,
                'pageCount' => (int)(count($posts) / $pageSize)
            ],
            'data' => array_slice($posts, $pageIndex * $pageSize, $pageSize)
        ]);

        $f3->set('toolbar', [
            'template' => 'toolbar.htm',
            'data' => 'Simple page content'
        ]);

        echo Template::instance()->render('layout.htm');
    }
}