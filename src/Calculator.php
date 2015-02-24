<?php
namespace Zhivankin\DeskPROCalculator;

class Calculator
{
    // Define a few properties to hold the result of the operation and the current operation
    protected $result;

    protected $operation;

    /**
     * Operation setter
     *
     * @param object $operation            
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
    }

    /**
     * Method to do the actual calculation for the given operation
     */
    public function calculate()
    {
        // Go through the supplied numbers and perform the designated operations
        foreach (func_get_args() as $number) {
            // Run the necessary operation on the number
            $this->result = $this->operation->runOperation($number, $this->result);
        }
    }
    
    /** Get result method
     */
    public function getResult()
    {
        return $this->result;
    }
}