<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDkrantingRequest;
use App\Http\Requests\UpdateDkrantingRequest;
use App\Repositories\DkrantingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DkrantingController extends AppBaseController
{
    /** @var DkrantingRepository $dkrantingRepository*/
    private $dkrantingRepository;

    public function __construct(DkrantingRepository $dkrantingRepo)
    {
        $this->dkrantingRepository = $dkrantingRepo;
    }

    /**
     * Display a listing of the Dkranting.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $dkrantings = $this->dkrantingRepository->all();

        return view('dkrantings.index')
            ->with('dkrantings', $dkrantings);
    }

    /**
     * Show the form for creating a new Dkranting.
     *
     * @return Response
     */
    public function create()
    {
        return view('dkrantings.create');
    }

    /**
     * Store a newly created Dkranting in storage.
     *
     * @param CreateDkrantingRequest $request
     *
     * @return Response
     */
    public function store(CreateDkrantingRequest $request)
    {
        $input = $request->all();

        $dkranting = $this->dkrantingRepository->create($input);

        Flash::success('Dkranting saved successfully.');

        return redirect(route('dkrantings.index'));
    }

    /**
     * Display the specified Dkranting.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dkranting = $this->dkrantingRepository->find($id);

        if (empty($dkranting)) {
            Flash::error('Dkranting not found');

            return redirect(route('dkrantings.index'));
        }

        return view('dkrantings.show')->with('dkranting', $dkranting);
    }

    /**
     * Show the form for editing the specified Dkranting.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dkranting = $this->dkrantingRepository->find($id);

        if (empty($dkranting)) {
            Flash::error('Dkranting not found');

            return redirect(route('dkrantings.index'));
        }

        return view('dkrantings.edit')->with('dkranting', $dkranting);
    }

    /**
     * Update the specified Dkranting in storage.
     *
     * @param int $id
     * @param UpdateDkrantingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDkrantingRequest $request)
    {
        $dkranting = $this->dkrantingRepository->find($id);

        if (empty($dkranting)) {
            Flash::error('Dkranting not found');

            return redirect(route('dkrantings.index'));
        }

        $dkranting = $this->dkrantingRepository->update($request->all(), $id);

        Flash::success('Dkranting updated successfully.');

        return redirect(route('dkrantings.index'));
    }

    /**
     * Remove the specified Dkranting from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dkranting = $this->dkrantingRepository->find($id);

        if (empty($dkranting)) {
            Flash::error('Dkranting not found');

            return redirect(route('dkrantings.index'));
        }

        $this->dkrantingRepository->delete($id);

        Flash::success('Dkranting deleted successfully.');

        return redirect(route('dkrantings.index'));
    }
}
