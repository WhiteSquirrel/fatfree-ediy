<?php

interface IDataAccessor {

    public function getConnection();

    public function getMenu();

    public function getPostCategories();

    public function getPost($id);

    public function getPosts($postCategory, $skip, $count);

}