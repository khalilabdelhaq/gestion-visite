<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\VisitorRepository;
use App\Entities\Visitor;
use App\Validators\VisitorValidator;

/**
 * Class VisitorRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class VisitorRepositoryEloquent extends BaseRepository implements VisitorRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Visitor::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return VisitorValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
