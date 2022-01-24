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

class adController extends Controller
{

    public function index()  // AFFICHE LA LISTE DE TOUTES LES ANNONONCES
    {
        $annonces = Ad::all();
        return view('ads.list', compact('annonces'));
    }

    public function create() // AFFICHE LA VUE FORMULAIRE POUR CREER UNE ANNONCE
    {
        return view('ads.create');
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'type' => 'required',
            'ageanimal' => 'required',
            'taille' => 'required',
            'sexe' => 'required',
            'description' => 'required|max:500',
            'price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $ad= Ad::create([
            'name' => $request->name,
            'type' => $request->type,
            'ageanimal' => $request->ageanimal,
            'taille' => $request->taille,
            'sexe' => $request->sexe,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        

        $user = User::find(Auth::Id());
        $user->Ad()->save($ad);


        //$ad = Ad::create($validatedData);
        $filename = time() . '.' . $request->image->extension();
        $mimeType = $request->image->getMimeType();
        $path = $request->file('image')->storeAs('img', $filename, 'public');
        Image::create([
            'image' => $path,
            'type' => $mimeType,
            'ad_id' => $ad['id']
        ]);
        return redirect('/profile/ads')->with('success', 'Annonce crée avec succès');
    }


    public function edit($id) //RECUPERE LES DONNEES DUNE ANNONCE POUR MODIFICATION (FORMULAIRE REMPLI AVEC LES DONNEES DE LANNONCE EXISTANTE)
    {
        $ad = Ad::findOrFail($id);
        return view('ads.edit', compact('ad'));
    }

    
    public function update(Request $request, $id) //la méthode edit() submit les données du formulaire à la méthode update()
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'type' => 'required',
            'ageanimal' => 'required',
            'taille' => 'required',
            'sexe' => 'required',
            'description' => 'required|max:500',
            'price' => 'required',
        ]);

        $ad = Ad::find($id);
        $ad->update($validatedData);
        
        if ($request->file('image')) {
            $request->validate(['image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
            $filename = time() . '.' . $request->image->extension();
            $oldImage = Image::where('ad_id', $id)->get();
            $oldImage[0]->delete();

            $mimeType = $request->image->getMimeType();
            $path = $request->file('image')->storeAs('img', $filename, 'public');
            $image = Image::create([
                'image' => $path,
                'type' => $mimeType,
                'ad_id' => $ad->id,
            ]);
        }
        
        return redirect('/profile/ads')->with('success', 'Annonce mise à jour avec succès');
    }

    public function destroy($id) //supprime une ANNONCE
    {
        $ad = Ad::findOrFail($id);
        $ad->delete();
        return redirect('/profile/ads')->with('success', 'Annonce supprimée avec succès');
    }

    public function liste()
    {
        return redirect('/search');
    }

    
    public function show($id) //RECUPERE LES DONNEES DUNE ANNONCE POUR MODIFICATION (FORMULAIRE REMPLI AVEC LES DONNEES DE LANNONCE EXISTANTE)
    {
        $annonce = Ad::findOrFail($id);
        return view('ads.show', compact('annonce'));
    }

}
