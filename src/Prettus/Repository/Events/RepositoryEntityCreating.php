<?php

namespace Prettus\Repository\Events;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Repository;

/**
 * Class RepositoryEntityCreated
 *
 * @package Prettus\Repository\Events
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class RepositoryEntityCreating extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "creating";

    public function __construct(Repository $repository, array $model)
    {
        parent::__construct($repository);
        $this->model = $model;
    }
}
