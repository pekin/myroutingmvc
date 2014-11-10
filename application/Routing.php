<?php
use Routing\Router;
use Routing\MatchedRoute;

try {
    $router = new Router(GET_HTTP_HOST());


    //Main
    $router->add('homepage', '/', 'Controller_Main:action_index');
    $router->add('error404', '/404', 'Controller_Main:action_error404');
    $router->add('staticPage', '/(slug:str).php', 'Controller_Main:action_staticPage');

    //News
    $router->add('news', '/news', 'Controller_News:action_index');
    $router->add('newsone', '/news/(id:num)', 'Controller_News:action_newsone');

    // $router->add('about', '/about', 'AppController:aboutAction');
    // $router->add('contacts', '/contacts', 'AppController:contactsAction');
    // $router->add('user', '/user/(id:num)', 'AppController:userAction');

    //Admin
    $router->add('adminMain', '/cp', 'Controller_Edit_Panel:action_index' , 'GET|POST');
    $router->add('addnews', '/add', 'Controller_Edit_Panel:action_add_news' , 'GET|POST');
    $router->add('add', '/add/news', 'Controller_Edit_Panel:action_add' , 'GET|POST');
    $router->add('editnews', '/edit/(id:num)', 'Controller_Edit_Panel:action_edit_news' , 'GET|POST');
    $router->add('edit', '/edit/news', 'Controller_Edit_Panel:action_edit' , 'GET|POST');
    $router->add('del', '/del', 'Controller_Edit_Panel:action_del' , 'GET|POST');
    $router->add('look', '/look', 'Controller_Edit_Panel:action_look' , 'GET|POST'); 
    $router->add('valid', '/valid', 'Controller_Edit_Panel:action_valid' , 'GET|POST');
    $router->add('quit', '/quit', 'Controller_Edit_Panel:action_quit' , 'GET|POST');
    
    $router->add('contact', '/contact', 'Controller_Contact:action_index' , 'GET|POST');
    #$router->add('adminArticle', '/admin/article/id(id:num)', 'Controller_Admin:action_article' , 'GET|POST');
    #$router->add('adminPages', '/admin/pages', 'Controller_Admin:action_pages' , 'GET|POST');
    #$router->add('adminOnePage', '/admin/page/id(id:num)', 'Controller_Admin:action_onepage' , 'GET|POST');
    
    $route = $router->match(GET_METHOD(), GET_PATH_INFO());

    if (null == $route) {
        $route = new MatchedRoute('Controller_Main:action_error404');
    }

    list($class, $action) = explode(':', $route->getController(), 2);

    call_user_func_array(array(new $class($router), $action), $route->getParameters());

} catch (Exception $e) {

    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);

    echo $e->getMessage();
    echo $e->getTraceAsString();
    exit;
}
