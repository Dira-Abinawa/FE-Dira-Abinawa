<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSchoolsRequest;
use App\Http\Requests\UpdateSchoolsRequest;
use App\Repositories\SchoolsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Http;
use Response;

class SchoolsController extends AppBaseController
{
    /** @var SchoolsRepository $schoolsRepository*/
    private $schoolsRepository;
    
    /**
     * Display a listing of the Schools.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $apiUrl = "http://127.0.0.1:3000/school/";
        
        $response = Http::get($apiUrl);
        if ($response->successful()) {
            $schoolsData = $response->json(); 
        } else {
            Flash::error('Failed to fetch data from the API.');

            return redirect(route('schools.index'));
        }

        return view('schools.index', ['schoolsData' => $schoolsData]);
    }

    /**
     * Show the form for creating a new Schools.
     *
     * @return Response
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created Schools in storage.
     *
     * @param CreateSchoolsRequest $request
     *
     * @return Response
     */
    public function store(CreateSchoolsRequest $request)
    {
        $input = $request->all();
        $schools = $this->schoolsRepository->create($input);
        $apiResponse = Http::post('http://127.0.0.1:3000/school/', $input);
        if ($apiResponse->successful()) {
            Flash::success('Schools saved and data sent to the API successfully.');
        } else {
            Flash::error('Failed to send data to the API. Schools saved locally.');
        }
    
        return redirect(route('schools.index'));
    }
    /**
     * Display the specified Schools.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $response = Http::get("http://127.0.0.1:3000/school/{$id}");
        if ($response->successful()) {
            $schools = $response->json();
        } else {
            Flash::error('Failed to fetch school data from the API.');
            return redirect(route('schools.index'));
        }
        return view('schools.show')->with('schools', $schools);
    }
    
    /**
     * Show the form for editing the specified Schools.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $response = Http::get("http://127.0.0.1:3000/school/{$id}");
        if ($response->successful()) {
            $schools = $response->json();
        } else {
            Flash::error('Failed to fetch school data from the API.');
            return redirect(route('schools.index'));
        }
        return view('schools.edit')->with('schools', $schools);
    }
    

    /**
     * Update the specified Schools in storage.
     *
     * @param int $id
     * @param UpdateSchoolsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSchoolsRequest $request)
    {
        $response = Http::get("http://127.0.0.1:3000/school/{$id}");
        if ($response->successful()) {
            $schools = $response->json();
            $updatedData = array_merge($schools, $request->all());
            $updateResponse = Http::put("http://127.0.0.1:3000/school/{$id}", $updatedData);
            if ($updateResponse->successful()) {
                Flash::success('Schools updated successfully.');
            } else {
                Flash::error('Failed to update school data in the API.');
            }
        } else {
            Flash::error('Failed to fetch school data from the API.');
        }
        return redirect(route('schools.index'));
    }
    
    /**
     * Remove the specified Schools from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $response = Http::get("http://127.0.0.1:3000/school/{$id}");
        if ($response->successful()) {
            $deleteResponse = Http::delete("http://127.0.0.1:3000/school/{$id}");
            if ($deleteResponse->successful()) {
                Flash::success('Schools deleted successfully from the API.');
            } else {
                Flash::error('Failed to delete school data from the API.');
            }
        } else {
            Flash::error('Failed to fetch school data from the API.');
        }
        $this->schoolsRepository->delete($id);
        Flash::success('Schools deleted successfully from the local database.');
        return redirect(route('schools.index'));
    }
    
}
