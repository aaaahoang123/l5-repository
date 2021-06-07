<?php
namespace Prettus\Repository\Contracts;

/**
 * Interface CriteriaInterface
 * @package Prettus\Repository\Contracts
 * @author Anderson Andrade <contato@andersonandra.de>
 */
interface Criteria
{
    /**
     * Apply criteria in query repository
     *
     * @param                     $model
     * @param $context
     *
     * @return mixed
     */
    public function apply($model, $context);
}
