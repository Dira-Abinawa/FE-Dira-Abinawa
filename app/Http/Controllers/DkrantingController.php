<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDkrantingRequest;
use App\Http\Requests\UpdateDkrantingRequest;
use App\Repositories\DkrantingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Http;
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
     * Display a listing of the Dkrantings.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $apiUrl = "http://127.0.0.1:3000/dkr/";

        $response = Http::get($apiUrl);
        if ($response->successful()) {
            $dkrantingData = $response->json();
        } else {
            Flash::error('Failed to fetch data from the API.');

            return redirect(route('dkrantings.index'));
        }

        return view('dkrantings.index', ['dkrantingData' => $dkrantingData]);
    }

    /**
     * Show the form for creating a new dkrantings.
     *
     * @return Response
     */
    public function create()
    {
        return view('dkrantings.create');
    }

    /**
     * Store a newly created dkranting in storage.
     *
     * @param CreatedkrantingRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $apiResponse = Http::post('http://127.0.0.1:3000/dkr/', $input);
        if ($apiResponse->successful()) {
            Flash::success('dkranting saved and data sent to the API successfully.');
        } else {
            Flash::error('Failed to send data to the API. dkranting saved locally.');
        }

        return redirect(route('dkrantings.index'));
    }
    /**
     * Display the specified dkrantings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $response = Http::get("http://127.0.0.1:3000/dkr/{$id}");
        if ($response->successful()) {
            $dkranting = $response->json();
        } else {
            Flash::error('Failed to fetch school data from the API.');
            return redirect(route('dkrantings.index'));
        }
        return view('dkrantings.show')->with('dkranting', $dkranting);
    }

    /**
     * Show the form for editing the specified dkrantings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $response = Http::get("http://127.0.0.1:3000/dkr/{$id}");
        if ($response->successful()) {
            $dkranting = $response->json();
        } else {
            Flash::error('Failed to fetch school data from the API.');
            return redirect(route('dkrantings.index'));
        }
        return view('dkrantings.edit')->with('dkranting', $dkranting);
    }


    /**
     * Update the specified dkranting in storage.
     *
     * @param int $id
     * @param UpdatedkrantingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedkrantingRequest $request)
    {
        $response = Http::get("http://127.0.0.1:3000/dkr/{$id}");
        if ($response->successful()) {
            $dkranting = $response->json();
            $updatedData = array_merge($dkranting, $request->all());
            $updateResponse = Http::put("http://127.0.0.1:3000/dkr/{$id}", $updatedData);
            if ($updateResponse->successful()) {
                Flash::success('dkranting updated successfully.');
            } else {
                Flash::error('Failed to update school data in the API.');
            }
        } else {
            Flash::error('Failed to fetch school data from the API.');
        }
        return redirect(route('dkrantings.index'));
    }

    /**
     * Remove the specified dkranting from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $response = Http::get("http://127.0.0.1:3000/dkr/{$id}");
        if ($response->successful()) {
            $deleteResponse = Http::delete("http://127.0.0.1:3000/dkr/{$id}");
            if ($deleteResponse->successful()) {
                Flash::success('dkranting deleted successfully from the API.');
            } else {
                Flash::error('Failed to delete school data from the API.');
            }
        } else {
            Flash::error('Failed to fetch school data from the API.');
        }
        // $this->dkrantingRepository->destroy($id);
        Flash::success('dkranting deleted successfully from the local database.');
        return redirect(route('dkrantings.index'));
    }
}
