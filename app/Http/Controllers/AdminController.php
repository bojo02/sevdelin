<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Text;
use App\Models\Photo;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
    public function editHome(){
        $home_title = Text::where('slug', 'home_title')->first();

        $home_description = Text::where('slug', 'home_description')->first();

        return view('pages.edit.home', compact('home_title', 'home_description'));
    }
    public function homeStore(Request $request){
        $home_title = Text::where('slug', 'home_title')->first();

        $home_title->content = $request->title;

        $home_title->save();



        $home_description = Text::where('slug', 'home_description')->first();

        $home_description->content = $request->content;

        $home_description->save();

        if($request->has('photo')){
            $file = $request->file('photo');
    
            $name =  Str::random(30) . $request->photo->getClientOriginalName();
    
            $path = $request->file('photo')->storeAs('/images', $name);
    
            $request->file('photo')->move(public_path('images'), $name);
    
            $photo = Photo::where('slug', 'home_image')->first();
    
            $photo->name = $name;

            $photo->path = $path;
    
            $photo->save();
        }

        return redirect()->back()->with('alert_success', 'The content was changed!');
    }

    public function presentationEdit(){
        $presentation_title = Text::where('slug', 'presentation_title')->first();

        return view('pages.edit.presentation', compact('presentation_title'));
    }
    public function presentationStore(Request $request){
        $presentation_title = Text::where('slug', 'presentation_title')->first();
        $presentation_title->content = $request->title;
        $presentation_title->save();

        return redirect()->back()->with('alert_success', 'The content was changed!');
    }
    public function unhappyEdit(){
        $unhappy_title = Text::where('slug', 'unhappy_title')->first();

        $unhappy_description_1 = Text::where('slug', 'unhappy_description_1')->first();

        $unhappy_description_2 = Text::where('slug', 'unhappy_description_2')->first();

        return view('pages.edit.unhappy', compact('unhappy_title', 'unhappy_description_1', 'unhappy_description_2'));
    }
    public function unhappyStore(Request $request){

        $unhappy_title = Text::where('slug', 'unhappy_title')->first();

        $unhappy_title->content = $request->title;

        $unhappy_title->save();



        $unhappy_description_1 = Text::where('slug', 'unhappy_description_1')->first();

        $unhappy_description_1->content = $request->content1;

        $unhappy_description_1->save();



        $unhappy_description_2 = Text::where('slug', 'unhappy_description_2')->first();

        $unhappy_description_2->content = $request->content2;

        $unhappy_description_2->save();



        if($request->has('photo')){
            $file = $request->file('photo');
    
            $name =  Str::random(30) . $request->photo->getClientOriginalName();
    
            $path = $request->file('photo')->storeAs('/images', $name);
    
            $request->file('photo')->move(public_path('images'), $name);
    
            $photo = Photo::where('slug', 'unhappy_image')->first();
    
            $photo->name = $name;

            $photo->path = $path;
    
            $photo->save();
        }

        return redirect()->back()->with('alert_success', 'The content was changed!');
    }
    public function partnerEdit(){
        $partner_title = Text::where('slug', 'partner_title')->first();

        $partner_description_2 = Text::where('slug', 'partner_description_2')->first();

        $partner_description_3 = Text::where('slug', 'partner_description_3')->first();

        $partner_description_1 = Text::where('slug', 'partner_description_1')->first();

        $partner_videos_title = Text::where('slug', 'partner_videos_title')->first();

        return view('pages.edit.partner', compact('partner_title', 'partner_description_2', 'partner_description_3', 'partner_description_1', 'partner_videos_title'));
    }
    public function partnerStore(Request $request){
        $partner_title = Text::where('slug', 'partner_title')->first();
        $partner_title->content = $request->partner_title;

        $partner_description_2 = Text::where('slug', 'partner_description_2')->first();
        $partner_description_2->content = $request->partner_description_2;

        $partner_description_3 = Text::where('slug', 'partner_description_3')->first();
        $partner_description_3->content = $request->partner_description_3;

        $partner_description_1 = Text::where('slug', 'partner_description_1')->first();
        $partner_description_1->content = $request->partner_description_1;

        $partner_videos_title = Text::where('slug', 'partner_videos_title')->first();
        $partner_videos_title->content = $request->partner_videos_title;

        if($request->has('photo')){
            $file = $request->file('photo');
    
            $name =  Str::random(30) . $request->photo->getClientOriginalName();
    
            $path = $request->file('photo')->storeAs('/images', $name);
    
            $request->file('photo')->move(public_path('images'), $name);
    
            $photo = Photo::where('slug', 'partner_image')->first();
    
            $photo->name = $name;

            $photo->path = $path;
    
            $photo->save();
        }


        $partner_title->save();
        $partner_videos_title->save();
        $partner_description_1->save();
        $partner_description_3->save();
        $partner_description_2->save();

        return redirect()->back()->with('alert_success', 'The content was changed!');
    }
}
