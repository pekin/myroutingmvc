<?php
// Запускаем сессию
 	session_start();


//подключаем конфигурационный файл
require_once 'Config.php';

// подключаем файлы ядра
require_once 'Core/Model.php';
require_once 'Core/Controller.php';

//подключаем Twig
require_once dirname(__FILE__) . '/../lib/Twig/Autoloader.php';
Twig_Autoloader::register(true);

//__autoload

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

    if (is_file($path)) {
        require $path;
        return;
    }
    else {
    	$pathMy = __DIR__ . '/' .  substr($class, 0, strpos($class, '_')) . '/' .str_replace('\\', '/', $class) . '.php';
	     if (is_file($pathMy)) {
        require $pathMy;
        return;
    }
    }
    throw new \LogicException(sprintf('Class "%s" not found in "%s" and in "%s"', $class, $path, $pathMy));
});

//запускаем роутинг 
require __DIR__ . '/Routing/func.php';
require_once __DIR__ .'/Routing.php';
