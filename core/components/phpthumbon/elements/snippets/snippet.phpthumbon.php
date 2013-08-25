<?php
/**
 * phpThumbOn
 * Создание превьюх картинок
 *
 * Copyright 2013 by Agel_Nash <Agel_Nash@xaker.ru>
 *
 * @category images
 * @license GNU General Public License (GPL), http://www.gnu.org/copyleft/gpl.html
 * @author Agel_Nash <Agel_Nash@xaker.ru>
 * @date 25.08.2013
 * @version 1.0.1
 */

if(empty($modx) || !($modx instanceof modX)) return '';

$componentPath = (string)$modx->getOption('phpthumbon.core_path', null, $modx->getOption('core_path').'components/phpthumbon/');

if(!isset($modx->phpThumbOn)){
    $modx->phpThumbOn = $modx->getService("phpthumbon","phpThumbOn",$componentPath.'model/phpthumbon/', $scriptProperties);
}

if(!($flag = ($modx->phpThumbOn instanceof phpThumbOn))){
    $modx->phpThumbOn = null;
}
return $flag ? $modx->phpThumbOn->run($scriptProperties) : '';