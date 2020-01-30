<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\VisitorCreateRequest;
use App\Http\Requests\VisitorUpdateRequest;
use App\Repositories\VisitorRepository;
use App\Validators\VisitorValidator;
use App\Criteria\CinCriteria;
use App\Criteria\SearchCriteria;
use App\Criteria\VisiteurDuJourCriteria;
use App\Http\Requests\VisitorSearchRequest;

/**
 * Class VisitorsController.
 *
 * @package namespace App\Http\Controllers;
 */
class VisitorsController extends Controller
{
    /**
     * @var VisitorRepository
     */
    protected $repository;

    /**
     * @var VisitorValidator
     */
    protected $validator;

    /**
     * VisitorsController constructor.
     *
     * @param VisitorRepository $repository
     * @param VisitorValidator $validator
     */
    public function __construct(VisitorRepository $repository, VisitorValidator $validator)
    {
       // $this->middleware('auth');
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitors = $this->repository->pushCriteria(VisiteurDuJourCriteria::class)->paginate(10);
                if (request()->wantsJson()) {

            return response()->json([
                'data' => $visitors,
            ]);
        }

        return view('layouts.index', compact('visitors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  VisitorCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(VisitorCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $visitor = $this->repository->create($request->all());

            $response = [
                'message' => 'Visitor created.',
                'data'    => $visitor->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $visitor = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $visitor,
            ]);
        }

        return view('visitors.show', compact('visitor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $visitor = $this->repository->find($id);

        return view('visitors.edit', compact('visitor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  VisitorUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(VisitorUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);
            //dd($request->all());

            $visitor = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Visitor updated.',
                'data'    => $visitor->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    public function search(VisitorSearchRequest $request){
        $visitors = $this->repository->pushCriteria(new CinCriteria($request))->paginate(8);
        return redirect()->back()->with('response', $visitors);
    }

    public function searchAll(VisitorSearchRequest $request){
        $visitors = $this->repository->pushCriteria(new SearchCriteria($request))->paginate(8);
        return redirect()->back()->with('response', $visitors);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$deleted = $this->repository->delete($id);

        return redirect()->back()->with('message', 'Visitor deleted.');
    }
}
