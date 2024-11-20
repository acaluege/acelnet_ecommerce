<?php

function show($tete)
{
    echo "<pre>";
    print_r($tete);
    echo "</pre>";
}


show($_GET);