<?php
/**
 * Batcher
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of Batcher, a batch resource editing Extra.
 *
 * Batcher is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Batcher is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Batcher; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package batcher
 */
/**
 * Get a list of templates
 *
 * @package batcher
 * @subpackage processors
 */
class BatcherTemplateGetListProcessor extends modObjectGetListProcessor {
    public $classKey = 'modTemplate';
    public $defaultSortField = 'id';
    public $defaultSortDirection = 'ASC';
    public $checkListPermission = true;

    public function prepareQueryBeforeCount(xPDOQuery $c) {

        $search = $this->getProperty('search');
        $type = $this->getProperty('element-type');
        if (!empty($search)) {
            $c->where(array(
                'name:LIKE' => '%'.$search.'%',
                'OR:description:LIKE' => '%'.$search.'%',
            ));
        }

        return $c;
    }

    public function getData() {
        $data = array();
        $limit = intval($this->getProperty('limit'));
        $start = intval($this->getProperty('start'));

        $type = $this->getProperty('element-type');
        if (!empty($type)) {
            $this->classKey = $type;
        }

        $c = $this->modx->newQuery($this->classKey);
        $c = $this->prepareQueryBeforeCount($c);
        $data['total'] = $this->modx->getCount($this->classKey,$c);
        $c = $this->prepareQueryAfterCount($c);

        $sortClassKey = $this->getSortClassKey();
        $sortKey = $this->modx->getSelectColumns($sortClassKey,$this->getProperty('sortAlias',$sortClassKey),'',array($this->getProperty('sort')));
        if (empty($sortKey)) $sortKey = $this->getProperty('sort');
        $c->sortby($sortKey,$this->getProperty('dir'));
        if ($limit > 0) {
            $c->limit($limit,$start);
        }

        $data['results'] = $this->modx->getCollection($this->classKey, $c);
        return $data;
    }

    public function prepareRow(xPDOObject $object)
    {
        $objectArray = $object->toArray();
        $objectArray['category_name'] = '-';
        if ($this->classKey === 'modCategory') {
            $objectArray['name'] = $objectArray['category'];
            unset($objectArray['category']);
        } else {
            if ($objectArray['category']) {
                $category = $this->modx->getObject('modCategory', $objectArray['category']);
                if ($category) {
                    $objectArray['category_name'] = $category->get('category');
                }
            }
        }
        if ($this->classKey === 'modTemplate') {
            $objectArray['name'] = $objectArray['templatename'];
        }
        return $objectArray;
    }
}
return 'BatcherTemplateGetListProcessor';