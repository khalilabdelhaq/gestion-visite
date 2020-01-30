<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;
use App\Http\Requests\VisitorSearchRequest;

/**
 * Class CinCriteria.
 *
 * @package namespace App\Criteria;
 */
class CinCriteria implements CriteriaInterface
{

    protected $resquest;

    public function __construct(VisitorSearchRequest $request)
    {   
        $this->request=$request;
    }

    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model->where('cin','=',$this->request->get('cin') );
        $model = $model->where('created_at','>',\Carbon\Carbon::today());
        return $model;
    }
}
