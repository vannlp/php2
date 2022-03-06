<?php
function view($viewName, $masterLayout = null)
{
    if ($masterLayout === null) {
        return require_once "./views/" . $viewName . ".php";
    } else {
        return require_once "./views/" . $masterLayout . ".php";
    }
}

function model($modelName)
{
    require_once "./model/" . $modelName . ".php";

    return new $modelName;
}

function asset($assetName)
{
    if (isset($urlWeb)) {
        return $urlWeb . "/public/" . $assetName;
    } else {
        return "/public/" . $assetName;
    }
}
