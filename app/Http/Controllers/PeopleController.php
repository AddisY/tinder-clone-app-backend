<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        $people = Person::paginate(10);
        return response()->json($people);
    }

    public function like($id)
    {
        $person = Person::findOrFail($id);
        $person->increment('likes_count');
        $person->save();
        return response()->json(['message' => 'Person liked']);
    }

    public function dislike($id)
    {
        $person = Person::findOrFail($id);
        $person->decrement('likes_count');
        $person->save();
        return response()->json(['message' => 'Person disliked']);
    }

    public function liked()
    {
        $likedPeople = Person::where('likes_count', '>', 0)->get();
        return response()->json($likedPeople);
    }
}

