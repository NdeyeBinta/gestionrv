<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Rendezvous;
use App\Models\Medecin;

class RendezvousController extends Controller
{
    public function add()
    {
        $medecins = Medecin::all();
        return view('rendezvous.add',['medecins'=> $medecins]);
    }
    public function getAll()
    {
        
        $liste_rendezvous = Rendezvous::all();
        return view('rendezvous.list',['liste_rendezvous'=>$liste_rendezvous]);
    }
    public function edit($id)
    {
        $rendezvous = Rendezvous::find($id);
        return view('rendezvous.edit',['rendezvous'=>$rendezvous]);
    }
    public function update(Request $request)
    {
        $rendezvous = Rendezvous::find($request->id);
        $rendezvous->libelle = $request->libelle;
        $rendezvous->date = $request->date;
        $rendezvous->medecins_id = $request->medecins_id;
        $rendezvous->user_id = Auth::id();
        
        $result = $rendezvous->save(); //1 ou 0
        return redirect('/rendezvous/getAll');
    }
    public function delete($id)
    {
        $rendezvous = Rendezvous::find($id);
        if($rendezvous != null )
        {
            $rendezvous->delete();
        }
        return $this->getAll();
    }
    public function persist(Request $request)
    {
        $rendezvous = new Rendezvous;
        $rendezvous->libelle = $request->libelle;
        $rendezvous->date = $request->date;
        $rendezvous->medecins_id = $request->medecins_id;
        $rendezvous->user_id = Auth::id();
        
        $result = $rendezvous->save(); //1 ou 0
 
        return view('rendezvous.add',['confirmation'=> $result]);
        
    }
}
