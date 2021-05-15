<?php


namespace App\Common\Helpers;


class VariableName
{
    public function get_var_name(){
        // read backtrace
        $bt   = debug_backtrace();
        // read file
        $file = file($bt[0]['file']);
        // select exact print_var_name($varname) line
        $src  = $file[$bt[0]['line']-1];
        // search pattern
        $pat = '#(.*)'.__FUNCTION__.' *?\( *?(.*) *?\)(.*)#i';
        // extract $varname from match no 2
        $var  = preg_replace($pat, '$2', $src);
        // return the var name
        return trim($var);
    }


}