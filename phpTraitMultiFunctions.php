<?php

trait NamePrint
{
    public function printName($name)
    {
        return $name;
    }
}

class CapitaliseName
{
    use NamePrint {
        // makes printName accessible as $this->standardPrint so we still have access to it
        printName as standardPrint;
    }

    public function printName($name)
    {
        $name = strtoupper($name);
        return $this->printName($name);
    }
}

$obj = new CapitaliseName();
echo $obj->printName('john'); // Prints "John"
echo $obj->standardPrint('john'); //Prints "john"
