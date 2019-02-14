<?php 

class Router 
{
    protected $base_path;
    protected $request_uri;
    protected $request_method;
    protected $http_methods = array('get', 'post', 'put', 'patch', 'delete');

    function __construct($base_path = '')
    {
        $this->base_path = $base_path;
        $this->request_uri = rtrim(strtok($_SERVER['REQUEST_URI'], '?'),'/');
        $this->request_method = $this->_determine_http_method();
    }

    private function _determine_http_method() 
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);

        if (in_array($method, $this->http_methods)) return $method;
        return 'get';
    }
}