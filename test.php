<?php
/**
 * Created by PhpStorm.
 * User: Satish Khatri
 * Date: 15/09/2017
 * Time: 07:04 PM
 */
$dir = new RecursiveDirectoryIterator('vendor');
foreach ($dir as $key=>$value){

    echo $key.':'.$value;
}