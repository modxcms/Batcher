<?php
/**
 * @var \MODX\Revolution\modX $modx
 * @var array $namespace
 */
use xPDO\xPDO;
use MODX\Revolution\modX;

try {
    modX::getLoader()->addPsr4('Batcher\\', $namespace['path'] . 'src/');
}
catch (\Exception $e) {
    $modx->log(xPDO::LOG_LEVEL_ERROR, $e->getMessage());
}
