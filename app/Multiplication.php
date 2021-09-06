<?php


namespace Liw\app;

class Multiplication implements InterfaceTables
{
    private $arrayData = [1,2,3,4,5,6,7,8,9,10];
    const Number = 0;
    private $number = 10;
    private $red = "class = 'text-danger'";
    private $blue = "class = 'text-primary'";
    private $yellow = "class = 'text-warning'";
    private $green = "class ='text-success'";

    public function multiplicationAction(){
        $array = [];
        foreach ($this->arrayData as $key=>$arrayDatum){
            $array[$key] = static::Number.' * '. $arrayDatum.' = '. $arrayDatum * static::Number;
        }
        return $array;
    }

    public function multiplicationActionColor(){
        $array = [];
        foreach ($this->arrayData as $key=>$arrayDatum){
            if(static::Number < $this->number){
                $firstNumber = "<abbr ".$this->yellow.">".static::Number."</abbr>";
            }else{
                $nums = str_split(static::Number);
                $result = [];
                foreach ($nums as $k=>$num){
                    $result[] = $this->checker($k, $num);
                }
                $firstNumber = implode('',$result);
            }
            if($arrayDatum < $this->number){
                $secondNumber = "<abbr ".$this->blue.">".$arrayDatum."</abbr>";
            }else{
                $nums = str_split($arrayDatum);
                $result = [];
                foreach ($nums as $k=>$num){
                    $result[] = $this->checker($k, $num);
                }
                $secondNumber = implode('',$result);
            }

            $results = $arrayDatum * static::Number;
            if($results < $this->number){
                $result = "<abbr ".$this->red.">".$results."</abbr>";
            }else{
                $nums = str_split($results);
                $res = [];
                foreach ($nums as $k=>$num){
                    $res[] = $this->checker($k, $num);
                }
                $result = implode('',$res);
            }
            $array[$key] = $firstNumber.' * '. $secondNumber.' = '. $result;
        }
        return $array;
    }

    private function checker($k, $var)
    {
        if($k % 2 === 0){
            return "<abbr ".$this->red.">".$var."</abbr>";
        }else{
            return "<abbr ".$this->green.">".$var."</abbr>";
        }
    }
}