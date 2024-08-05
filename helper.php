<?php

function dd($log)
{
    echo '<pre style="background-color: #f4f4f4; padding: 10px; border: 1px solid #ddd;">';
    var_dump($log);
    echo '</pre>';
    die();
}
