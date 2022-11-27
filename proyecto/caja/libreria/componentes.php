<?php

function asg_input($id, $label, $value = "", $opts = [])
{

    $type = "";
    $class = "form-control";
    extract($opts);

    $more = "REQUIRED";

    $input = <<<INPUT
    <input type="{$type}" {$more} value="{$value}" class="{$class}" name="{$id}" id="{$id}" >

    INPUT;

    return <<<COMPONENTE

    <div class="mb-3">
        <label for="" class="form-label">{$label}</label>
        {$input}
    </div>
    COMPONENTE;
}
