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
 * Delete multiple resources
 *
 * @package batcher
 * @subpackage processors
 */
namespace Batcher\Processors\Resource;

use MODX\Revolution\Processors\Processor;
use MODX\Revolution\modResource;

class Remove extends Processor
{
    public function process()
    {
        if (!$this->modx->hasPermission('save_document')) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        if (empty($this->properties['resources'])) {
            return $this->failure($this->modx->lexicon('batcher.resources_err_ns'));
        }

        $resourceIds = explode(',', $this->properties['resources']);
        if(is_array($resourceIds)){
            $this->modx->removeCollection(modResource::class, array("id:IN" => array($this->properties['resources']) ));
        }

        return $this->success();
    }

    public function getLanguageTopics()
    {
        return ['batcher:default'];
    }
}