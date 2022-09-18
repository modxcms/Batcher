<?php
class BatcherFilterGetListProcessor extends modObjectGetListProcessor {

	public function getFilters(){
		$filters = array();

		$object = $this->modx->newObject('modResource');
        $object = $object->toArray();

        /*
         * Exclude fields from filter based on system setting.
         */
        $excludeFilters = $this->modx->getOption('batcher.excludefilters');
        if($excludeFilters){
        	$excludeArray = explode(',', $excludeFilters);	
        }


        foreach($object as $key => $val){
        	if($excludeArray && in_array($key, $excludeArray)){
        		continue;
        	}

        	$filters[] = array(
        		'key' => $key,
        		'value' => $key
        	);
        }

		return $filters;
	}	


    public function process() {
        $filters = $this->getFilters();
       
        return $this->outputArray($filters);
    }

}
return 'BatcherFilterGetListProcessor';