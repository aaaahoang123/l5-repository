<?php

namespace Prettus\Repository\Traits;

use Illuminate\Support\Arr;
use Prettus\Repository\Contracts\Presenter;

/**
 * Class PresentableTrait
 * @package Prettus\Repository\Traits
 * @author Anderson Andrade <contato@andersonandra.de>
 */
trait PresentableTrait
{

    /**
     * @var Presenter
     */
    protected $presenter = null;

    /**
     * @param \Prettus\Repository\Contracts\Presenter $presenter
     *
     * @return $this
     */
    public function setPresenter(Presenter $presenter)
    {
        $this->presenter = $presenter;

        return $this;
    }

    /**
     * @param      $key
     * @param null $default
     *
     * @return mixed|null
     */
    public function present($key, $default = null)
    {
        if ($this->hasPresenter()) {
            $data = $this->presenter()['data'];

            return Arr::get($data, $key, $default);
        }

        return $default;
    }

    /**
     * @return bool
     */
    protected function hasPresenter()
    {
        return isset($this->presenter) && $this->presenter instanceof Presenter;
    }

    /**
     * @return $this|mixed
     */
    public function presenter()
    {
        if ($this->hasPresenter()) {
            return $this->presenter->present($this);
        }

        return $this;
    }
}
