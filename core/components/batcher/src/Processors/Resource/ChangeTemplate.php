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
 * Change template for multiple resources
 *
 * @package batcher
 * @subpackage processors
 */
namespace Batcher\Processors\Resource;

use MODX\Revolution\Processors\Processor;
use MODX\Revolution\modResource;
use MODX\Revolution\modTemplate;

class ChangeTemplate extends Processor
{
    public function process()
    {
        if (!$this->modx->hasPermission('save_document')) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        if (empty($this->properties['resources'])) {
            return $this->failure($this->modx->lexicon('batcher.resources_err_ns'));
        }
        /* get parent */
        if (empty($this->properties['template'])) {
            return $this->failure($this->modx->lexicon('batcher.template_err_ns'));
        }
        $template = $this->modx->getObject(modTemplate::class, $this->properties['template']);
        if (empty($template)) {
            return $this->failure($this->modx->lexicon('batcher.template_err_nf'));
        }

        /* iterate over resources */
        $resourceIds = explode(',', $this->properties['resources']);
        foreach ($resourceIds as $resourceId) {
            $resource = $this->modx->getObject(modResource::class, $resourceId);
            if ($resource == null) continue;

            $resource->set('template', $this->properties['template']);

            if ($resource->save() === false) {

            }
        }

        return $this->success();
    }

    public function getLanguageTopics()
    {
        return ['batcher:default'];
    }
}