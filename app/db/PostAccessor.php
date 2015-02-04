<?php

class PostAccessor extends DB\SQL\Mapper {
    public function __construct($db) {
        parent::__construct($db, 'v_posts');
    }

}