<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Location;
use App\Models\Text;
use App\Models\Photo;
use App\Models\VideoPartner;
use App\Models\Promotion;
use App\Models\Rate;
use App\Models\Email;
use App\Models\Reach;
use App\Models\Found;
use App\Models\Question;
use Illuminate\Support\Str;
use DB;




class PageController extends Controller
{
    
    public function index(){
        $sess = $this->checkSession();

        $regions = Region::select('*')->with('locations')->get();

        $home_title = Text::where('slug', 'home_title')->first();

        $home_description = Text::where('slug', 'home_description')->first();

        $photo = Photo::where('slug', 'home_image')->first();

        $promotion = Promotion::inRandomOrder()->where('status', 1)->first();

        $reaches = Reach::all();

        $status = Text::where('slug', 'popup_status')->first();

        return view('pages.home', compact('regions', 'sess', 'status', 'reaches' ,'home_title', 'home_description', 'photo', 'promotion'));
    }
    public function checkSession(){
        $rch = Found::where('session_id', session('id_session'))->first();
        if(empty($rch)){
            //session(['id_session' => Str::random(40)]);
            //session(['id_session' => Str::random(40)]);

            return false;
        }
        else{
            //session()->forget('id_session');

            return true;
        }
    }
    public function presentation(Request $request){
        $location = Location::find($request->location);

        $presentation_title = Text::where('slug', 'presentation_title')->first();

        $promotion = Promotion::inRandomOrder()->where('status', 1)->first();

        $questions = Question::all();

        return view('pages.presentation', compact('promotion', 'questions', 'location', 'presentation_title'));
    }
    public function partner(){
        $partner_title = Text::where('slug', 'partner_title')->first();

        $partner_description_1 = Text::where('slug', 'partner_description_1')->first();

        $partner_description_2 = Text::where('slug', 'partner_description_2')->first();

        $partner_description_3 = Text::where('slug', 'partner_description_3')->first();

        $partner_videos_title = Text::where('slug', 'partner_videos_title')->first();

        $videos = VideoPartner::all();

        $photo = Photo::where('slug', 'partner_image')->first();

        $promotion = Promotion::inRandomOrder()->where('status', 1)->first();

        return view('pages.partner', compact('promotion', 'photo','partner_title', 'videos', 'partner_description_2', 'partner_description_3', 'partner_description_1', 'partner_videos_title'));
    }
    public function unhappy(){
        $unhappy_title = Text::where('slug', 'unhappy_title')->first();

        $unhappy_description_1 = Text::where('slug', 'unhappy_description_1')->first();

        $unhappy_description_2 = Text::where('slug', 'unhappy_description_2')->first();

        $photo = Photo::where('slug', 'unhappy_image')->first();

        $promotion = Promotion::inRandomOrder()->where('status', 1)->first();

        return view('pages.unhappy', compact('promotion', 'unhappy_title', 'unhappy_description_1', 'unhappy_description_2', 'photo'));
    }
    public function admin_dashboard(){
        $locations = Location::all();

        $regions = Region::all();

        $rates = Rate::all();

        $emails = Email::all();

        $founds = Found::all();

        $reaches = Reach::all();

        return view('pages.admin.index', compact('locations', 'reaches','founds', 'regions', 'emails', 'rates'));
    }
}
