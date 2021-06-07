<?php
namespace Prettus\Repository\Contracts;

/**
 * Interface PresenterInterface
 * @package Prettus\Repository\Contracts
 * @author Anderson Andrade <contato@andersonandra.de>
 */
interface Presenter
{
    /**
     * Prepare data to present
     *
     * @param $data
     *
     * @return mixed
     */
    public function present($data);
}
