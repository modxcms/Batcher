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
namespace Batcher;

use MODX\Revolution\modX;

class Batcher
{
    function __construct(modX &$modx, array $config = array())
    {
    	$this->modx =& $modx;
        $corePath = $modx->getOption('batcher.core_path', null, $modx->getOption('core_path').'components/batcher/');
        $assetsUrl = $modx->getOption('batcher.assets_url', null, $modx->getOption('assets_url').'components/batcher/');

        $this->config = array_merge(array(
            'corePath' => $corePath,
            'templatesPath' => $corePath.'templates/',
            'assetsUrl' => $assetsUrl,
            'cssUrl' => $assetsUrl.'css/',
            'jsUrl' => $assetsUrl.'js/'
        ), $config);

        if ($this->modx->lexicon) {
            $this->modx->lexicon->load('batcher:default');
        }
    }
}
