<?php

namespace App\Http\Controllers;

use App\Jobs\ContactUsJob;
use App\Mail\ContactUs;
use App\Models\Message;
use App\Models\Post;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $featuredPosts =
            Cache::remember('featuredPosts', Carbon::now()->addMinutes(2), function () {
               return Post::published()->featured()->with('categories')->latest('published_at')->take(3)->get();
            });
        $featuredProjects =
            Cache::remember('featuredProjects', Carbon::now()->addMinutes(2), function () {
               return Project::featured()->take(4)->get();
            });
        return view('home', [
            'featured' => $featuredPosts,
            'featuredProject' => $featuredProjects,
        ]);
    }

    public function send()
    {
        $data = request()->validate([
            'name' =>'required|min:3',
            'email' =>'required|email',
            'message' =>'required|min:10',
        ]);
        // Mail::to('davebudah@gmail.com')->send(new ContactUs($data));
        Message::create($data);
        $job = (new ContactUsJob($data));
        dispatch($job);

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
