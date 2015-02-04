<?php

class WPDataAccessor extends Prefab implements IDataAccessor {
    private $db, $menu, $post;

    public function __construct() {
        $f3 = Base::instance();
        $this->db = new DB\SQL($f3->get('db'), $f3->get('db_user'), $f3->get('db_pass'));
        new DB\SQL\Session($this->db);
    }

    function getConnection() {
        return $this->db;
    }

    function getMenu() {
        return [
            ['text' => 'Новости', 'path' => '/category/news'],
            ['text' => 'Статьи', 'path' => '/category/articles'],
            ['text' => 'Аналитика', 'path' => '/category/analytics'],
            ['text' => 'О ресурсе', 'path' => '/about'],
            ['text' => 'Контакты', 'path' => '/contacts']
        ];
    }

    function getPostCategories() {
        return [
            ['text' => 'Все материалы', 'path' => '/category/all'],
            ['text' => 'Новости', 'path' => '/category/news'],
            ['text' => 'Статьи', 'path' => '/category/articles'],
            ['text' => 'Аналитика', 'path' => '/category/analytics']
        ];
    }

    function getCategories() {
        $mapper = new \DB\SQL\Mapper($this->db, 'wp_post_category');
        return $mapper->find();
    }

    function getPost($id) {
        $posts = new PostAccessor($this->db);
        return $posts->load(['ID = ?', $id]);
    }


    function getPosThumbnail($post_id){
        $pthumb = $this->db->exec('select p.* from wp_postmeta pm, wp_posts p where pm.meta_key = \'_thumbnail_id\' and p.ID = pm.meta_value and p.post_type = \'attachment\' and pm.post_id=?'
            ,array(1=>$post_id));
        //TODO PROCESS ATTACH
        return $pthumb;
    }

    function getPosts($postCategory = PostCategory::All, $skip = 0, $count = 10) {
        $filter = $postCategory == PostCategory::All ? [] : ['post_category_slug = ?', $postCategory];
        $posts = new PostAccessor($this->db);
        $foundPosts = $posts->find($filter, ['offset' => $skip, 'limit' => $count]);
        foreach ( $foundPosts as $p) {
            $t = $this->getPosThumbnail($p['ID']);
            $p->tn = '';
            if (!empty($t)) {
                $p->tn = $t[0]["guid"];
            }

        }
        return $foundPosts;
    }

}