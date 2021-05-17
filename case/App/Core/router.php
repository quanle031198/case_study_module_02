    <?php

class Router
{
    protected $controller = "Home";
    protected $action = "index";
    protected $param = [];
    function __construct()
    {
        $arr = $this->urlProcess();
        //    print_r($arr);

        //xu ly controller
        if (isset($arr[0])) {
            if (file_exists("./App/Controller/" . $arr[0] . ".php")) {
                $this->controller = $arr[0];
                unset($arr[0]);
            }
        }
        require_once "./App/Controller/" . $this->controller . ".php";
        $this->controller = new $this->controller();

        //xu ly action
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        //xu ly param
        if (!empty($arr)) {
            $this->param = $arr;
        }

        call_user_func_array([$this->controller, $this->action], $this->param);
    }
    public function urlProcess()
    {
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
