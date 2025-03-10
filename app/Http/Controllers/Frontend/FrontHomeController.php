<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

use Inertia\Inertia;
use Auth;
use Session;
use DB;
use Hash;
use Illuminate\Support\Str;
use Mail; 
use Carbon\Carbon;
class FrontHomeController extends Controller
{
    public function home(){
	    return view('frontend.index');
    }
    
    public function aboutUs(){
        return view('frontend.pages.about-us');
    }

    public function contactUs(){
        return view('frontend.pages.contact-us');
    }

    public function angleBoardsAndOdProtectors(){
        return view('frontend.pages.angle-boards-and-od-protectors');
    }

    public function interLeavingPaper(){
        return view('frontend.pages.interleaving-paper');
    }

    public function stretchFilm(){
        return view('frontend.pages.stretch-film');
    }

    public function maskingFilm(){
        return view('frontend.pages.masking-film');
    }

    public function paperSurfaceBoard(){
        return view('frontend.pages.paper-surface-board');
    }

    public function ppBubbleGuard(){
        return view('frontend.pages.pp-bubble-guard');
    }

    public function mcrSheet(){
        return view('frontend.pages.mcr-sheet');
    }

    public function contactUsSubmit(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
        ]);
        
        return view('frontend.pages.contact-us');
    }
}
