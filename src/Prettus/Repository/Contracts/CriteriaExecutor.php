<?php
namespace Prettus\Repository\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;


/**
 * Interface CriteriaExecutor
 * @package Prettus\Repository\Contracts
 * @author Anderson Andrade <contato@andersonandra.de>
 */
interface CriteriaExecutor
{
    /**
     * Apply one or multiple criteria to a model
     *
     * @param Model|Builder $query
     * @param Criteria|Criteria[]|Collection $criteria
     * @param Criteria[] $otherCriteria
     * @return Builder
     */
    public function applyCriteriaToQuery($query, $criteria, ...$otherCriteria);
    public function pluckByCriteria($column, $criteria, ...$otherCriteria);
    public function findAllByCriteria($criteria, ...$otherCriteria);
    public function paginateByCriteria($limit, $criteria, ...$otherCriteria);
    public function countByCriteria($criteria, ...$otherCriteria);
    public function firstByCriteria($criteria, ...$otherCriteria);
    public function firstOrNewByCriteria(array $attributes, $criteria, ...$otherCriteria);
    public function firstOrCreateByCriteria(array $attributes, $criteria, ...$otherCriteria);
    public function firstOrFailsByCriteria($criteria, ...$otherCriteria);
    public function findByCriteria($criteria, ...$otherCriteria);
    public function existsByCriteria($criteria, ...$otherCriteria);
}
