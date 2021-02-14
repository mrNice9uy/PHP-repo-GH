<?php
include_once ENGINE_DIR . "menu.php";
include_once  ENGINE_DIR . "auth.php";

function render(string $templateName, array $params = [])
{
    extract(prepareViewParams());
    extract($params);
    include VIEWS_DIR . $templateName . ".php";
}

function prepareViewParams()
{
    $menuAccessLevel = [0];
    if($user = getCurrentUser()) {
        $menuAccessLevel[] = 2;
    } else {
        $menuAccessLevel[] = 1;
    }
    $menu = getMenu($menuAccessLevel);
    return ['menu' => $menu, 'user' => $user];
}