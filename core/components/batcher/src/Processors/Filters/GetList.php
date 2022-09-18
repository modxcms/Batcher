<?php
namespace Batcher\Processors\Filters;

use MODX\Revolution\Processors\Model\GetListProcessor;
use MODX\Revolution\modResource;

class GetList extends GetListProcessor
{
	public function getFilters()
    {
		$filters = array();

		$object = $this->modx->newObject(modResource::class);
        $object = $object->toArray();

        /*
         * Exclude fields from filter based on system setting.
         */
        $excludeFilters = $this->modx->getOption('batcher.excludefilters');
        $excludeArray = [];
        if ($excludeFilters) {
        	$excludeArray = explode(',', $excludeFilters);
        }

        foreach($object as $key => $val){
        	if ($excludeArray && in_array($key, $excludeArray)){
        		continue;
        	}

        	$filters[] = array(
        		'key' => $key,
        		'value' => $key
        	);
        }

		return $filters;
	}

    public function process()
    {
        $filters = $this->getFilters();

        return $this->outputArray($filters);
    }
}