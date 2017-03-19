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
 * Get a list of resources
 *
 * @package batcher
 * @subpackage processors
 */

class BatcherResourceGetListProcessor extends modObjectGetListProcessor
{
    public $classKey = 'modResource';
    public $objectType = 'resource';
    public $defaultSortField = 'pagetitle';
    public $defaultSortDirection = 'ASC';
    public $checkListPermission = true;

    public function prepareQueryBeforeCount(xPDOQuery $c)
    {
        $search      = $this->getProperty('search');
        $template    = $this->getProperty('template');
        $contextKey  = $this->getProperty('context_key');
        $published   = $this->getProperty('published');
        $deleted     = $this->getProperty('deleted');
        $filterField = $this->getProperty('filter_field');
        $filterType  = $this->getProperty('filter_type');
        $filterValue = $this->getProperty('filter_value');

        $c->leftJoin('modTemplate', 'Template');

        if ($filterField) {
            switch ($filterType) {
                case 'BETWEEN':
                case 'IN':
                case 'NOT IN':
                    $filterValue = explode(',', $filterValue);
                    break;
                case 'IS NULL':
                    $filterType  = 'IS';
                    $filterValue = null;
                    break;
                case 'IS NOT NULL':
                    $filterType  = 'IS NOT';
                    $filterValue = null;
                    break;
            }

            $filterQuery = [$filterField . ':' . $filterType => $filterValue];

            if ($filterType === 'BETWEEN' && count($filterValue) === 2) {
                $filterQuery = $this->classKey . '.' . $filterField . ' BETWEEN ' . $filterValue[0] . ' AND ' . $filterValue[1];
            }

            $c->where($filterQuery);
        }

        if (!empty($search)) {
            $c->where([
                'pagetitle:LIKE'      => '%' . $search . '%',
                'OR:longtitle:LIKE'   => '%' . $search . '%',
                'OR:description:LIKE' => '%' . $search . '%',
                'OR:content:LIKE'     => '%' . $search . '%',
                'OR:introtext:LIKE'   => '%' . $search . '%',
                'OR:alias:LIKE'       => '%' . $search . '%',
                'OR:id:='             => $search
            ]);
        }

        if (isset($template)) {
            $c->where([
                'template' => $template
            ]);
        }

        if (!empty($contextKey)) {
            $c->where([
                'context_key' => $contextKey
            ]);
        }

        if (!empty($published) || $published === '0') {
            $c->where([
                'published' => $published
            ]);
        }

        if (!empty($deleted)) {
            $c->where([
                'deleted' => $deleted
            ]);
        }

        return $c;
    }

    public function prepareQueryAfterCount(xPDOQuery $c)
    {
        $c->select([
            'modResource.*',
            'Template.templatename'
        ]);
       
        return $c;
    }

    public function prepareRow(xPDOObject $object)
    {
        $objectArray = $object->toArray();
        $objectArray['hidemenu'] = (boolean) $objectArray['hidemenu'];

        unset($objectArray['content']);

        return $objectArray;
    }
}

return 'BatcherResourceGetListProcessor';