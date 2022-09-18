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
if (!$modx->hasPermission('save_template')) {
    return $modx->error->failure($modx->lexicon('access_denied'));
}

if (empty($scriptProperties['element_ids'])) {
    return $modx->error->failure($modx->lexicon('batcher.templates_err_ns'));
}

/* Get the element type from request */
$elementType = 'modTemplate';
if (!empty($scriptProperties['element_type'])) {
    $elementType = $scriptProperties['element_type'];
}
/* get parent */
if (!empty($scriptProperties['category'])) {
    $category = $modx->getObject('modCategory', $scriptProperties['category']);
    if (empty($category)) {
        return $modx->error->failure(
            $modx->lexicon(
                'batcher.category_err_nf',
                array('id' => $scriptProperties['category'])
            )
        );
    }
}
/* iterate over resources */
$elementIds = explode(',', $scriptProperties['element_ids']);
foreach ($elementIds as $elementId) {
    $element = $modx->getObject($elementType, $elementId);
    if ($element == null) {
        continue;
    }
    $element->set('category', $scriptProperties['category']);
    $element->save();
}

return $modx->error->success();
