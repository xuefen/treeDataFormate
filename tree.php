﻿<?php
/**
 * 将数据格式化成树形结构
 * @author Xuefen.Tong
 * @param array $items
 * @return array 
 */
function genTree($items) {
    $tree = array(); //格式化好的树
    foreach ($items as $item)
        if (isset($items[$item['pid']]))
            $items[$item['pid']]['son'][] = &$items[$item['id']];
        else
            $tree[] = &$items[$item['id']];
    return $tree;
}

$items = array(
    1 => array('id' => 1, 'pid' => 0, 'name' => '江西省'),
    2 => array('id' => 2, 'pid' => 0, 'name' => '黑龙江省'),
    3 => array('id' => 3, 'pid' => 1, 'name' => '南昌市'),
    4 => array('id' => 4, 'pid' => 2, 'name' => '哈尔滨市'),
    5 => array('id' => 5, 'pid' => 2, 'name' => '鸡西市'),
    6 => array('id' => 6, 'pid' => 4, 'name' => '香坊区'),
    7 => array('id' => 7, 'pid' => 4, 'name' => '南岗区'),
    8 => array('id' => 8, 'pid' => 6, 'name' => '和兴路'),
    9 => array('id' => 9, 'pid' => 7, 'name' => '西大直街'),
    10 => array('id' => 10, 'pid' => 8, 'name' => '东北林业大学'),
    11 => array('id' => 11, 'pid' => 9, 'name' => '哈尔滨工业大学'),
    12 => array('id' => 12, 'pid' => 8, 'name' => '哈尔滨师范大学'),
    13 => array('id' => 13, 'pid' => 1, 'name' => '赣州市'),
    14 => array('id' => 14, 'pid' => 13, 'name' => '赣县'),
    15 => array('id' => 15, 'pid' => 13, 'name' => '于都县'),
    16 => array('id' => 16, 'pid' => 14, 'name' => '茅店镇'),
    17 => array('id' => 17, 'pid' => 14, 'name' => '大田乡'),
    18 => array('id' => 18, 'pid' => 16, 'name' => '义源村'),
    19 => array('id' => 19, 'pid' => 16, 'name' => '上坝村'),
);
echo "<pre>";
var_dump(genTree($items));
//输出格式
/*
Array
(
[0] => Array
    (
        [id] => 1
        [pid] => 0
        [name] => 江西省
        [son] => Array
            (
                [0] => Array
                    (
                        [id] => 3
                        [pid] => 1
                        [name] => 南昌市
                    )

                [1] => Array
                    (
                        [id] => 13
                        [pid] => 1
                        [name] => 赣州市
                        [son] => Array
                            (
                                [0] => Array
                                    (
                                        [id] => 14
                                        [pid] => 13
                                        [name] => 赣县
                                        [son] => Array
                                            (
                                            [0] => Array
                                                (
                                                    [id] => 16
                                                    [pid] => 14
                                                    [name] => 茅店镇
                                                    [son] => Array
                                                        (
                                                        [0] => Array
                                                            (
                                                            [id] => 18
                                                            [pid] => 16
                                                            [name] => 义源村
                                                            )

                                                        [1] => Array
                                                            (
                                                            [id] => 19
                                                            [pid] => 16
                                                            [name] => 上坝村
                                                            )

                                                        )

                                                )

                                            [1] => Array
                                                (
                                                    [id] => 17
                                                    [pid] => 14
                                                    [name] => 大田乡
                                                )

                                            )

                                    )

                                [1] => Array
                                    (
                                        [id] => 15
                                        [pid] => 13
                                        [name] => 于都县
                                    )

                            )

                    )

            )

    )

[1] => Array
    (
        [id] => 2
        [pid] => 0
        [name] => 黑龙江省
        [son] => Array
            (
                [0] => Array
                    (
                        [id] => 4
                        [pid] => 2
                        [name] => 哈尔滨市
                        [son] => Array
                            (
                            [0] => Array
                                (
                                    [id] => 6
                                    [pid] => 4
                                    [name] => 香坊区
                                    [son] => Array
                                        (
                                        [0] => Array
                                            (
                                                [id] => 8
                                                [pid] => 6
                                                [name] => 和兴路
                                                [son] => Array
                                                    (
                                                        [0] => Array
                                                            (
                                                            [id] => 10
                                                            [pid] => 8
                                                            [name] => 
                                                             东北林业大学
                                                            )

                                                        [1] => Array
                                                            (
                                                            [id] => 12
                                                            [pid] => 8
                                                            [name] => 
                                                            哈尔滨师范大学
                                                            )

                                                    )

                                            )

                                        )

                                )

                            [1] => Array
                                (
                                    [id] => 7
                                    [pid] => 4
                                    [name] => 南岗区
                                    [son] => Array
                                        (
                                        [0] => Array
                                            (
                                            [id] => 9
                                            [pid] => 7
                                            [name] => 西大直街
                                            [son] => Array
                                                (
                                                [0] => Array
                                                    (
                                                    [id] => 11
                                                    [pid] => 9
                                                    [name] => 
                                                     哈尔滨工业大学
                                                    )

                                                )

                                            )

                                        )

                                )

                            )

                    )

                [1] => Array
                    (
                        [id] => 5
                        [pid] => 2
                        [name] => 鸡西市
                    )

            )

    )
)*/
