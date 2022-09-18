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
 * Change template for multiple elements
 *
 * @package batcher
 * @subpackage processors
 */
namespace Batcher\Processors\Element;

use MODX\Revolution\Processors\Processor;
use MODX\Revolution\modTemplate;
use MODX\Revolution\modCategory;

class ChangeCategory extends Processor
{
    public function process()
    {
        if (!$this->modx->hasPermission('save_template')) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        if (empty($this->properties['element_ids'])) {
            return $this->failure($this->modx->lexicon('batcher.templates_err_ns'));
        }

        /* Get the element type from request */
        $elementType = modTemplate::class;
        if (!empty($this->properties['element_type'])) {
            $elementType = $this->properties['element_type'];
        }

        if ($elementType === modCategory::class) {
            return $this->failure();
        }

        /* get parent */
        if (!empty($this->properties['category'])) {
            $category = $this->modx->getObject(modCategory::class, $this->properties['category']);
            if (empty($category)) {
                return $this->failure(
                    $this->modx->lexicon(
                        'batcher.category_err_nf',
                        array('id' => $this->properties['category'])
                    )
                );
            }
        }
        /* iterate over resources */
        $elementIds = explode(',', $this->properties['element_ids']);
        foreach ($elementIds as $elementId) {
            $element = $this->modx->getObject($elementType, $elementId);
            if ($element == null) {
                continue;
            }
            $element->set('category', $this->properties['category']);
            $element->save();
        }

        return $this->success();
    }

    public function getLanguageTopics()
    {
        return ['batcher:default'];
    }
}