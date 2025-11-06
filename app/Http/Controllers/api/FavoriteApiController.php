<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FavoriteResource;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteApiController extends Controller
{
    public function index($device_id)
    {
        $favorites = Favorite::with('Recipe')->where('device_id' , $device_id)->get();
        return response()->json(['message' => 'success', 'data' => $favorites]);
    }
    public function store(Request $request)
    {
        $favorites = Favorite::create($request->all());
        return response()->json(['message' => 'success',  'data' => $favorites]);
    }

    public function destroy(string $id)
    {
        $favorite = Favorite::find($id);
        $favorite->delete();
        return response()->json(['message' => 'success']);
    }
}
