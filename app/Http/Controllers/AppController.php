<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\File as HttpFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use InstagramScraper\Instagram;
use Intervention\Image\File as ImageFile;
use Phpfastcache\Helper\Psr16Adapter;

class AppController extends Controller
{
    public function index()
    {
       return view('app.index', []);
    }

    public function strategy()
    {
        return view('app.strategy');
    }

    public function social()
    {
        return view('app.social');
    }

    public function identite()
    {
        return view('app.identite');
    }

    public function development()
    {
        return view('app.development');
    }

    public function feeds()
    {
        $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), 'matmat_25', 'Clementine2411', new Psr16Adapter('Files'));
        $instagram->login(); // will use cached session if you want to force login $instagram->login(true)
        $instagram->saveSession();  //DO NOT forget this in order to save the session, otherwise have no sense
        $account = $instagram->getAccount('agence_emency');
        $accountMedias = array_slice($account->getMedias(), 0, 4); 
        foreach ($accountMedias as $key => $accountMedia) {
            $images[$key] = str_replace("&amp;","&", $accountMedia->getimageHighResolutionUrl());     
            $path = $images[$key];
            $imageName = 'insta/'.$key.'.jpeg';
            $img = public_path('storage') . $imageName;
            Storage::disk('public')->put($imageName, file_get_contents($path));
        }
        //sleep(2);
        $pictures = Storage::disk('public_insta')->allfiles();
        foreach($pictures as $k => $picture){
            $images[] = $picture;
        }

        return view('partials.app.feed', ['images' => $images]);
    }

    public function legacy()
    {
        return view('app.legacy');
    }
}
