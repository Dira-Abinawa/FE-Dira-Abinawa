<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Repositories\NewsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Http;
use Response;

class NewsController extends AppBaseController
{
    /** @var NewsRepository $newsRepository*/
    private $newsRepository;

    public function __construct(NewsRepository $newsRepo)
    {
        $this->newsRepository = $newsRepo;
    }

    /**
     * Display a listing of the News.
     *
     * @param Request $request
     *
     * @return Response
     */

     public function index(Request $request)
     {
         $apiUrl = "http://127.0.0.1:3000/news/";
 
         $response = Http::get($apiUrl);
         if ($response->successful()) {
             $newsData = $response->json();
         } else {
             Flash::error('Failed to fetch data from the API.');
 
             return redirect(route('news.index'));
         }
 
         return view('news.index', ['newsData' => $newsData]);
     }
 
     public function detailNewsUser($id)
     {
         $response = Http::get("http://127.0.0.1:3000/news/{$id}");
         if ($response->successful()) {
             $news = $response->json();
         } else {
             Flash::error('Failed to fetch school data from the API.');
             return redirect(route('news.index'));
         }
         return view('user.detail-news')->with('news', $news);
     }
     /**
      * Show the form for creating a new news.
      *
      * @return Response
      */
     public function create()
     {
         return view('news.create');
     }
 
     /**
      * Store a newly created news in storage.
      *
      * @param CreatenewsRequest $request
      *
      * @return Response
      */
     public function store(Request $request)
     {
         $input = $request->all();
         $apiResponse = Http::post('http://127.0.0.1:3000/news/', $input);
         if ($apiResponse->successful()) {
             Flash::success('news saved and data sent to the API successfully.');
         } else {
             Flash::error('Failed to send data to the API. news saved locally.');
         }
 
         return redirect(route('news.index'));
     }
     /**
      * Display the specified news.
      *
      * @param int $id
      *
      * @return Response
      */
     public function show($id)
     {
         $response = Http::get("http://127.0.0.1:3000/news/{$id}");
         if ($response->successful()) {
             $news = $response->json();
         } else {
             Flash::error('Failed to fetch school data from the API.');
             return redirect(route('news.index'));
         }
         return view('news.show')->with('news', $news);
     }
 
     /**
      * Show the form for editing the specified news.
      *
      * @param int $id
      *
      * @return Response
      */
     public function edit($id)
     {
         $response = Http::get("http://127.0.0.1:3000/news/{$id}");
         if ($response->successful()) {
             $news = $response->json();
         } else {
             Flash::error('Failed to fetch school data from the API.');
             return redirect(route('news.index'));
         }
         return view('news.edit')->with('news', $news);
     }
 
 
     /**
      * Update the specified news in storage.
      *
      * @param int $id
      * @param UpdateNewsRequest $request
      *
      * @return Response
      */
     public function update($id, UpdateNewsRequest $request)
     {
         $response = Http::get("http://127.0.0.1:3000/news/{$id}");
         if ($response->successful()) {
             $news = $response->json();
             $updatedData = array_merge($news, $request->all());
             $updateResponse = Http::put("http://127.0.0.1:3000/news/{$id}", $updatedData);
             if ($updateResponse->successful()) {
                 Flash::success('news updated successfully.');
             } else {
                 Flash::error('Failed to update school data in the API.');
             }
         } else {
             Flash::error('Failed to fetch school data from the API.');
         }
         return redirect(route('news.index'));
     }
 
     /**
      * Remove the specified news from storage.
      *
      * @param int $id
      *
      * @throws \Exception
      *
      * @return Response
      */
     public function destroy($id)
     {
         $response = Http::get("http://127.0.0.1:3000/news/{$id}");
         if ($response->successful()) {
             $deleteResponse = Http::delete("http://127.0.0.1:3000/news/{$id}");
             if ($deleteResponse->successful()) {
                 Flash::success('news deleted successfully from the API.');
             } else {
                 Flash::error('Failed to delete school data from the API.');
             }
         } else {
             Flash::error('Failed to fetch school data from the API.');
         }
         // $this->newsRepository->destroy($id);
         Flash::success('news deleted successfully from the local database.');
         return redirect(route('news.index'));
     }
}
