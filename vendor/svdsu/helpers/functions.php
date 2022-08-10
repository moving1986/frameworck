<?php

function debaug($data, $die = false)
{
    echo '<pre>' .print_r($data, return: 1). '</pre>';
    if(die) {
        die;
    }
}
