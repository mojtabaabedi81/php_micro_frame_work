<?php

function dd($log)
{
    echo '<pre style="background-color: #000; color: #fff; padding: 10px; border: 1px solid #ddd;">';
    var_dump($log);
    echo '</pre>';
    die();
}
