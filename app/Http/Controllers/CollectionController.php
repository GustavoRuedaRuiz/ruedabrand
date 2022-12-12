<?php

namespace App\Http\Controllers;

use App\Models\Clothe;
use App\Models\Collection;
use App\Models\Size;
use App\Models\TypeSize;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function form()
    {
        return view('design.coleccion.formularioAniadirColeccion');
    }

    public function store(Request $request)
    {
        $request->validate([
            'avatar' => ['required'],
            'collection_name' => ['required', 'string', 'max:255','unique:collections'],
        ]);

        Collection::create([
            'collection_name' => $request['collection_name'],
        ]);

        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            Collection::where('collection_name',$request['collection_name'])->first()->addMedia($request['avatar'])->toMediaCollection();
        }

        return redirect()->route('home')
            ->with('message','Colección creada correctamente');
    }

    public function destroy(Collection $collection)
    {
        $collection->delete();
        return redirect()->route('home')
            ->with('message','Colección deshabilitada correctamente');
    }

    public function restore($id)
    {
        Collection::where('id', $id)->withTrashed()->restore();

        return redirect()->route('home')
            ->with('message','Colección restablecida correctamente');
    }

    public function editCollection($collection_name)
    {
        return view('design.coleccion.editarColeccion',['collection_name'=>$collection_name]);
    }


    public function update(Request $request,$collection_name)
    {
        if ($request['collection_name'] != $collection_name){
            $request->validate([
                'collection_name' => ['required', 'string', 'max:255','unique:collections'],
            ]);
        }
        else{
            $request->validate([
                'collection_name' => ['required', 'string', 'max:255'],
            ]);
        }


        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            Collection::where('collection_name',$collection_name)->withTrashed()->first()->clearMediaCollection();
            Collection::where('collection_name',$collection_name)->withTrashed()->first()->addMedia($request['avatar'])->toMediaCollection();
        }

        $collection = Collection::where('collection_name',$collection_name)->withTrashed()->first();

        $collection->update($request->all());

        return redirect()->route('home')
            ->with('info','La colección fue actualizada correctamente');
    }

    public function clothe($clothe_name)
    {
        $typeSizes  = TypeSize::all();
        $clothe = Clothe::where('clothe_name',$clothe_name)->withTrashed()->first();
        $sizes = Size::where('clothe_id',$clothe->id)->get();
        return view('design.clothe.clothe',['clothe'=>$clothe,'typeSizes'=>$typeSizes,'sizes'=>$sizes]);
    }

}
