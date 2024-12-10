<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clotheses;

class ClothesController extends Controller
{
    public function tampilclotheses() {
        $clothess = clotheses::all();
        return view('clothesAdmin.tampilclotheses', compact('clothess'));
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

        $clothess = new clotheses();
        $clothess->name = $request->name;
        $clothess->description = $request->description;
        $clothess->price = $request->price;
        $clothess->image = 'images/'. $imagename;
        $clothess->save();
        return redirect()->route('clothesAdmin.tampilclotheses');
    }

    public function updateclotheses($id) {
        $clothess = clotheses::findOrFail($id);
        return view('clothesAdmin.updateclotheses', compact('clothess'));
    }

    public function editclotheses(Request $request, $id) {
        $clothess = clotheses::findOrFail($id);
        $clothess->name = $request->name;
        $clothess->description = $request->description;
        $clothess->price = $request->price;
        $clothess->image = $request->image;
        $clothess->save();
        return redirect()->route('clothesAdmin.tampilclotheses');
    }

    public function deleteclotheses($id) {
        $clothess = clotheses::findOrFail($id);
        $clothess->delete();
        return redirect()->route('clothesAdmin.tampilclotheses');
    }
}
