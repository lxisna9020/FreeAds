<?php
namespace App\Http\Controllers;
use App\Models\Ad;
use App\Models\Type;
use App\Models\User;
use App\Models\Image;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class searchController extends Controller
{
    public function filter(Request $request){
        $annonces = Ad::when       ($request->q && strlen($request->q)>1 , function ($query) use ($request){
                                    return $query ->where ('name', 'like', "%$request->q%")->orWhere('description', 'like', "%$request->q%")->orWhere('type', 'like', "%$request->q%")->orWhere('ageanimal', 'like', "%$request->q%")->orWhere('sexe', 'like', "%$request->q%")->orWhere('description', 'like', "%$request->q%")->orWhere('price', 'like', "%$request->q%") ;})
                        ->when    (   $request->type  &&  $request->type != 'Tous'    ,   function ($query) use ($request) {
                                    return $query->where('type', $request->type);})
                        ->when  (   $request->ageanimal && $request->ageanimal !='Tous', function ($query) use ($request) {
                                    return $query-> where('ageanimal', $request->ageanimal);})
                        ->when  (   $request->taille && $request->taille != 'Tous', function ($query) use( $request) {
                                    return $query-> where('taille', $request->taille);})
                        ->when  (   $request->sexe && $request->sexe != 'Tous', function ($query) use ($request) {
                                    return $query-> where('sexe', $request->sexe);})
                        
                        ->when  (   $request->price && $request->price =='B', function($query) use ($request) {
                                    return $query -> wherebetween('price',[0, 500] );})
                        ->when  (   $request->price && $request->price =='C', function($query) use ($request) {
                                    return $query -> wherebetween('price',[500, 1000] );})
                        ->when  (   $request->price && $request->price =='D', function($query) use ($request) {
                                    return $query -> wherebetween('price',[1000,2000] );})
                        ->when  (   $request->price && $request->price =='E', function($query) use ($request) {
                                    return $query -> wherebetween('price',[2000,6000] );})
                        ->paginate(8);                            

                        return view('search', compact('annonces'));
    }

   
    public function filterPerProfile()  // AFFICHE LA LISTE DE TOUTES LES ANNONONCES DU USER CONNECTE
    {
        if (Auth::guest()){
            return view ('index');
        }
        if (Auth::check()){
            $user = Auth::Id();
            $annonces = Ad::where('user_id', $user)->get();
            return view('profile.ads', compact('annonces'));
        }
    }

    public function RedirectSignup(){
        return view('auth.register');
    }
    




}
