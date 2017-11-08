<?php
$Tal1 =$_REQUEST["Tal1"];
$Tal2 =$_REQUEST["Tal2"];
$dropdown = $_REQUEST["dropdown"];
switch ($dropdown)
{
    case "P":
        $Result = $Tal1 + $Tal2;
        break;
    case "M":
        $Result = $Tal1 - $Tal2;
        break;
    case "G":
        $Result = $Tal1 * $Tal2;
        break;
    case "D":
        $Result = $Tal1 / $Tal2;
        break;
    default:
        $result = "Wrong dropdown" + $dropdown;
}
$longResult = $Tal1 . $dropdown . $Tal2 . "=" . $Result;


require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../View');
$twig = new Twig_Environment($loader, array(
    'auto_reload' => true
));
$template = $twig->loadTemplate('showit.html.twig');
$parameters = array('Tal1' => $Tal1, 'Tal2' => $Tal2, 'Result' => $Result);
echo $template->render($parameters);


?>
