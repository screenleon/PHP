<?php
include('./IRequest.php');

class Request implements IRequest
{
    function __construct()
    {
        $this->bootstrapSelf();
    }

    private function bootstrapSelf()
    {
        // var_dump($this);
        // echo "<br>" ;
        foreach ($_SERVER as $key => $value) {
            $this->{$this->toCamelCase($key)} = $value;
        }
        // foreach ($this as $key => $value) {
        //     echo $key . ' => ' . $value . '<br>';
        // }
        // echo "<br>" ;
    }

    private function toCamelCase($string)
    {
        $result = strtolower($string);
        echo $result . '<br>';
        preg_match_all('/_[a-z]/', $result, $matches);
        var_dump($matches);
        echo '<br>';
        foreach ($matches[0] as $match) {
            $c = str_replace('_', '', strtoupper($match));
            $result = str_replace($match, $c, $result);
        }

        return $result;
    }

    public function getBody()
    {
        if ($this->requestMethod === "GET") {
            return;
        }

        if ($this->requestMethod === "POST") {
            $body = array();
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }

            return $body;
        }
    }
}
