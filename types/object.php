<?php 

class Example{

    public function getMyType(){
        return "type of \$example : " . gettype($this);
    }

}

$example = new Example;
echo $example->getMyType();



