<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clotheses;

class ClothesController extends Controller
{
    public function tampilclotheses() {
        $clothes = clotheses::all();
        return view('clothesAdmin.tampilclotheses', compact('clothes'));
    }

    public function tambahclotheses() {
        return view('clothesAdmin.addclotheses');
    }


    public function submitclotheses(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagename = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imagename);

        $clothes = new clotheses();
        $clothes->name = $request->name;
        $clothes->description = $request->description;
        $clothes->price = $request->price;
        $clothes->image = 'images/'. $imagename;
        $clothes->save();
        return redirect()->route('clothesAdmin.tampilclotheses');
    }

    public function updateclotheses($id) {
        $clothes = clotheses::findOrFail($id);
        return view('clothesAdmin.updateclotheses', compact('clothes'));
    }

    public function editclotheses(Request $request, $id) {
        $clothes = clotheses::findOrFail($id);
        $clothes->name = $request->name;
        $clothes->description = $request->description;
        $clothes->price = $request->price;
        $clothes->image = $request->image;
        $clothes->save();
        return redirect()->route('clothesAdmin.tampilclotheses');
    }

    public function deleteclotheses($id) {
        $clothes = clotheses::findOrFail($id);
        $clothes->delete();
        return redirect()->route('clothesAdmin.tampilclotheses');
    }
}
