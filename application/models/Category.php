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
        $sql = 'SELECT c.*, v.value FROM `ifr1_catalog_category_entity`  AS c LEFT JOIN `ifr1_catalog_category_entity_varchar` AS v '.
            'ON c.entity_id=v.entity_id GROUP BY v.entity_id ASC';


        $categoryList = static::$mysql->query($sql);

        if(empty($categoryList)) return  [];

        $list = $this->getLevelCategory($categoryList);
//
//        var_dump($list);exit;
        return $list;


    }

    /**
     * 分类树 递归
     * @param array $catogories
     * @param int $pid
     * @return array
     */
    private function getLevelCategory($catogories=[], $pid=0)
    {
        $list = [];
        foreach($catogories as $k=>$v) {
            if ($v['parent_id'] == $pid) {
                $v['item'] = $this->getLevelCategory($catogories, $v['entity_id']);

                $list[] = $v;
            }
        }
        return $list;
    }


}