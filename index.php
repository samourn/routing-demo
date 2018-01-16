<?php

//Require the autoload file
require_once ('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Set debug level
$f3->set('DEBUG', 3); //0(off), 3(max)

//Define a default route
$f3->route('GET /', function() {
        echo'<h1>Routing Demo</h1>';
        //$view = new View();
        //echo $view->render ('views/home.html');
}
);

//Define a page1 route
$f3->route('GET /page1', function() {
    echo'<h1>This is page 1</h1>';
}
);

//Define a page1 route
$f3->route('GET /page1/subpage-a', function() {
    echo'<h1>This is page 1, subpage a</h1>';
}
);

//Define a jewlery route
$f3->route('GET /jewelry/rings/toe-rings', function() {
    //echo'<h1>Buy a toe ring today</h1>';
    $template = new Template();
    echo $template->render('views/toe-rings.html');
}
);

//Run Fat-Free
$f3->run();
?>