<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDataPotensiRequest;
use App\Http\Requests\UpdateDataPotensiRequest;
use App\Repositories\DataPotensiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Http;
use Response;

class DataPotensiController extends AppBaseController
{
    /** @var DataPotensiRepository $dataPotensiRepository */
    private $dataPotensiRepository;

    public function __construct(DataPotensiRepository $dataPotensiRepo)
    {
        $this->dataPotensiRepository = $dataPotensiRepo;
    }

    /**
     * Display a listing of the DataPotensi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $apiUrl = "http://127.0.0.1:3000/dapot/";

        $response = Http::get($apiUrl);
        if ($response->successful()) {
            $dataPotensis = $response->json();
        } else {
            Flash::error('Failed to fetch data from the API.');

            return redirect(route('dataPotensis.index'));
        }

        return view('data_potensis.index')
            ->with('dataPotensis', $dataPotensis);
    }

    /**
     * Show the form for creating a new DataPotensi.
     *
     * @return Response
     */
    public function create()
    {
        return view('data_potensis.create');
    }

    /**
     * Store a newly created DataPotensi in storage.
     *
     * @param CreateDataPotensiRequest $request
     *
     * @return Response
     */
    public function store(CreateDataPotensiRequest $request)
    {
        $input = $request->all();
        $apiResponse = Http::post('http://127.0.0.1:3000/dapot/', $input);

        if ($apiResponse->successful()) {
            Flash::success('Data Potensi saved and data sent to the API successfully.');
        } else {
            Flash::error('Failed to send data to the API. Data Potensi saved locally.');
        }

        return redirect(route('dataPotensis.index'));
    }

    /**
     * Display the specified DataPotensi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $response = Http::get("http://127.0.0.1:3000/dapot/{$id}");
        if ($response->successful()) {
            $dataPotensi = $response->json();
        } else {
            Flash::error('Failed to fetch Data Potensi data from the API.');
            return redirect(route('dataPotensis.index'));
        }

        return view('data_potensis.show')->with('dataPotensi', $dataPotensi);
    }

    /**
     * Show the form for editing the specified DataPotensi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $response = Http::get("http://127.0.0.1:3000/dapot/{$id}");
        if ($response->successful()) {
            $dataPotensi = $response->json();
        } else {
            Flash::error('Failed to fetch Data Potensi data from the API.');
            return redirect(route('dataPotensis.index'));
        }

        return view('data_potensis.edit')->with('dataPotensi', $dataPotensi);
    }

    /**
     * Update the specified DataPotensi in storage.
     *
     * @param int $id
     * @param UpdateDataPotensiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataPotensiRequest $request)
    {
        $response = Http::get("http://127.0.0.1:3000/dapot/{$id}");
        if ($response->successful()) {
            $dataPotensi = $response->json();
            $updatedData = array_merge($dataPotensi, $request->all());
            $updateResponse = Http::put("http://127.0.0.1:3000/dapot/{$id}", $updatedData);

            if ($updateResponse->successful()) {
                Flash::success('Data Potensi updated successfully.');
            } else {
                Flash::error('Failed to update Data Potensi data in the API.');
            }
        } else {
            Flash::error('Failed to fetch Data Potensi data from the API.');
        }

        return redirect(route('dataPotensis.index'));
    }

    /**
     * Remove the specified DataPotensi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $response = Http::get("http://127.0.0.1:3000/dapot/{$id}");
        if ($response->successful()) {
            $deleteResponse = Http::delete("http://127.0.0.1:3000/dapot/{$id}");

            if ($deleteResponse->successful()) {
                Flash::success('Data Potensi deleted successfully from the API.');
            } else {
                Flash::error('Failed to delete Data Potensi data from the API.');
            }
        } else {
            Flash::error('Failed to fetch Data Potensi data from the API.');
        }

        Flash::success('Data Potensi deleted successfully from the local database.');
        return redirect(route('dataPotensis.index'));
    }
}
