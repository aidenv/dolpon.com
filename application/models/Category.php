<?php

class CategoryModel extends BaseModel
{

    protected static $mysql;

    public function __construct()
    {

        parent::__construct();

        static::$mysql = parent::$mysql;
    }

    /**
     * get menu for index page
     * @author jun <jun90610@gmail.com>
     * @return array
     */
    public function getMenuList()
    {
        $sql = 'SELECT c.parent_id , v.* FROM `ifr1_catalog_category_entity` AS c LEFT JOIN `ifr1_catalog_category_entity_varchar` AS v '.
 'ON c.entity_id=v.entity_id  WHERE c.parent_id<>0 AND v.value IS NOT NULL '.
 'ORDER BY c.parent_id ASC , v.value_id ASC';


        $categoryList = static::$mysql->query($sql);

        return $categoryList;


    }


}