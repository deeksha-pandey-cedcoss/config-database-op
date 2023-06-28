<?php

use Phalcon\Mvc\Controller;

use MyApp\Config\config;


// defalut controller view
class IndexController extends Controller
{
    public function indexAction()
    {
        // version name and host name of configuration

        $config = new config();
        $d = $config->demo();

        $this->view->data = $d;
    }
    public function detailAction()
    {
        // version name and host name of configuration

        $config = new config();
        $d = $config->demo();

        foreach ($d as $key => $value) {

            foreach ($value as  $v) {

                if ($_POST['db'] == $key) {
                    echo "Details of the selected database are .$v <br>";
                }
            }
        }
    }
}
