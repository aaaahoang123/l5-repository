<?php
/**
 * @author Hoang Do
 * @date  6/7/2021 10:39 PM
 * @used PhpStorm
 */

namespace Prettus\Repository\Traits;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Prettus\Repository\Contracts\Criteria;
use Prettus\Repository\Exceptions\RepositoryException;

trait CanApplyCriteria
{
    /**
     * Apply one or multiple criteria to a model
     *
     * @param Model|Builder $query
     * @param Criteria|Criteria[]|Collection $criteria
     * @param Criteria[] $otherCriteria
     * @return Builder
     * @throws RepositoryException
     */
    public function applyCriteriaToQuery($query, $criteria, ...$otherCriteria)
    {
        $result = $query;
        if ($criteria instanceof Collection || is_array($criteria)) {
            foreach ($criteria as $c) {
                $result = $this->applySingleCriteria($query, $c);
            }
        } else {
            $result = $this->applySingleCriteria($query, $criteria);
        }
        if (is_array($otherCriteria)) {
            foreach ($criteria as $c) {
                $result = $this->applySingleCriteria($query, $c);
            }
        }
        return $result;
    }

    /**
     * Apply single criteria to model
     *
     * @param $query
     * @param $criteria
     * @return mixed
     * @throws RepositoryException
     */
    private function applySingleCriteria($query, $criteria)
    {
        if (!$criteria instanceof Criteria) {
            throw new RepositoryException("Class " . get_class($criteria) . " must be an instance of " . Criteria::class);
        }
        return $criteria->apply($query, $this);
    }
}
