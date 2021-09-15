<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Farmer;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Member;
use App\Models\Slider;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $lang = app()->getLocale();
        $Slider =  Slider::select('text_'.$lang.' as text', 'image')->get();
        $news =  Blog::where('language', $lang)->orderBy('id', 'desc')->paginate(3);
        return view('dragro.index', compact('news','Slider'));
    }

    public function associations(){
        $associations = Farmer::orderBy('id', 'desc')->paginate(20);
        return view('dragro.associations', compact('associations'));
    }

    public function news(){
        $news = Blog::where('language', app()->getLocale())->orderBy('id', 'desc')->paginate(15);
        $page = 'all';
        return view('dragro.news', compact('news', 'page'));
    }

    public function associationNews(){
        $news =  Blog::where('language', app()->getLocale())->where('association_id', '!=', 0)->orderBy('id', 'desc')->paginate(15);
        $page = 'association';
        return view('dragro.news', compact('news', 'page'));
    }

    public function dragroNews(){
        $news =  Blog::where('language', app()->getLocale())->where('association_id', 0)->orderBy('id', 'desc')->paginate(15);
        $page = 'dragro';
        return view('dragro.news', compact('news', 'page'));
    }

    public function associationBlog($id){
        $association = Farmer::find($id);
        $news =  Blog::where('language', app()->getLocale())->where('association_id', '=', (int) $association->user_id)->orderBy('id', 'desc')->paginate(15);
        $page = 'news';
        return view('dragro.association-inner', compact('association','news', 'page'));
    }

    public function newsInner($id){
        $news = Blog::find($id);
        $otherNews = Blog::where('language', app()->getLocale())->orderBy('id', 'desc')->limit(3)->get();
        $page = 'news';
        return view('dragro.news-inner', compact('news', 'page', 'otherNews'));
    }

    public function associationMembers($id){
        $association = Farmer::find($id);
        $members =  Member::where('association_id', '=', $association->user_id)->orderBy('id', 'desc')->paginate('15');
        $page = 'members';
        return view('dragro.association-inner', compact('association','members', 'page'));
    }

    public function associationGallery($id){
        $association = Farmer::find($id);
        $gallery = Gallery::where('association_id', $association->user_id)->orderBy('id', 'desc')->paginate(15);

        $page = 'gallery';
        return view('dragro.association-inner', compact('association','gallery', 'page'));
    }

    public function associationContact($id){
        $association = Farmer::find($id);
        $page = 'contact';
        return view('dragro.association-inner', compact('association', 'page'));
    }

    public function saveContact(Request $request, $id){
        $Association = Farmer::find($id);
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
        ],
        [
            'name.required' => trans('vendor.name_required'),
            'email.required' => trans('vendor.email_required'),
            'email.email' => trans('vendor.email_incorrect'),
            'email.unique' => trans('vendor.email_not_unique')
        ]);

        $Contact = new Contact();
        $Contact->association_id = ($Association !== null) ? $Association->user_id : 0;
        $Contact->name = $request->name;
        $Contact->surname = $request->surname;
        $Contact->email = $request->email;
        $Contact->phone = $request->phone;
        $Contact->message = $request->message;
        $Contact->save();

        return redirect()->back();
    }

    public function contact(){
        return view('dragro.contact');
    }

    public function aboutUs(){
        $aboutus = About::where('language', app()->getLocale())->first();
        return view('dragro.about-us', compact('aboutus'));
    }

    public function faq(){
        return view('dragro.faq', compact( 'faq'));
    }
}
