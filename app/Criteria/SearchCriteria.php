<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;
use App\Http\Requests\VisitorSearchRequest;
use App\Utils\DateUtils;

/**
 * Class SearchCriteria.
 *
 * @package namespace App\Criteria;
 */
class SearchCriteria implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */

    protected $resquest;

    public function __construct(VisitorSearchRequest $request)
    {   
        $this->request=$request;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        if($this->request->filled('cin')){
            $model = $model->where('cin','=',$this->request->get('cin') );
        }
        if($this->request->filled('date_depart')){
            $model = $model->whereDate('created_at','>=',DateUtils::stringToDate($this->request->get('date_depart')));
        }

        if($this->request->filled('date_arrive')){
            $model = $model->whereDate('created_at','<=',DateUtils::stringToDate($this->request->get('date_arrive')));
        }
        return $model;
    }
}
