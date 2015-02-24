<?php
namespace Zhivankin\DeskPROCalculator\Operations;

interface OperatorsInterface
{

    /**
     * runOperation function that each operators' class should implement
     *
     * @param int $number            
     * @param int $result            
     */
    public function runOperation($number, $result);
}
