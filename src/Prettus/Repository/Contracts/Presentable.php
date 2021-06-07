<?php
namespace Prettus\Repository\Contracts;

/**
 * Interface Presentable
 * @package Prettus\Repository\Contracts
 * @author Anderson Andrade <contato@andersonandra.de>
 */
interface Presentable
{
    /**
     * @param Presenter $presenter
     *
     * @return mixed
     */
    public function setPresenter(Presenter $presenter);

    /**
     * @return mixed
     */
    public function presenter();
}
