<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\IUserService;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    private $userService;

    /**
     * HomeController constructor.
     *
     * @param IUserService $IUserService
     */
    public function __construct(IUserService $IUserService)
    {
        //$this->middleware('auth');

        $this->userService = $IUserService;
    }

    /**
     * Index Page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Amazon S3 get files
        $allFiles = collect(Storage::disk('s3')->files());

        // Filter images
        $allImages = $allFiles->filter(function($item, $key){
            $ext = pathinfo($item, PATHINFO_EXTENSION);
            if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif']))
                return $item;
        })->toArray();

        // Push images with url
        $files = [];
        foreach($allImages as $file){
            $files[] = Storage::disk('s3')->url($file);
        }

        // Users List
        $users = $this->userService->getAllUsers();

        return view('welcome', compact('files', 'users'));
    }
}
