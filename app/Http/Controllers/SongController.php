<?php

namespace App\Http\Controllers;

use App\Models\Dislike;
use App\Models\Like;
use  Illuminate\Support\Facades\Auth;
use App\Models\Song;
use Illuminate\Http\Request;


class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */

    public function index()
    {
        $songs = Song::paginate(3);

        return view('explore', compact('songs'));
    }
    public function like($id)
    {
        $user_id = Auth::user()->id;
        if ($user_id == 0) {
            return redirect('/login');
        }
        $newlike = new Like();
        $newlike->user_id = $user_id;
        $newlike->song_id = $id;
        $newlike->save();


        $likes = Like::where('user_id', $user_id)->get();
        $songs = [];
        foreach ($likes as $like) {
            $song = Song::where('id', $like->song_id)->get();

            if (count($song) != 0) $songs[] = $song[0];
        }
        // $songs = [$songs[0]];
        // return $songs;
        return view('liked', compact('songs'));
    }
    public function dislike($id)
    {
        $user_id = Auth::user()->id;
        if ($user_id == 0) {
            return redirect('/login');
        }
        $newdislike = new dislike();
        $newdislike->user_id = $user_id;
        $newdislike->song_id = $id;
        $newdislike->save();


        $dislikes = Dislike::where('user_id', $user_id)->get();
        $songs = [];
        foreach ($dislikes as $dislike) {
            $song = Song::where('id', $dislike->song_id)->get();
            if (count($song) != 0) $songs[] = $song[0];
            //  if(empty($dislikes->user_id)){ //  
        }
        // return $Songs;
        return view('disliked', compact('songs'));
    }


    public function explore()
    {
        $songs = Song::all();
        return view('explore', compact('songs'));
    }
    // $songs = Song::all();



    public function dislikes()
    {
        // $user_id = Auth::user()->id;
        // if ($user_id == 0) {
        //     return redirect('/login');
        // }
        // $dislikes = Dislike::where('user_id', $user_id)->get();
        // $songs = [];
        // foreach ($dislikes as $dislike) {
        //     $song = Song::find($dislike->song_id);
        //     $songs[] = $song;
        // }
        $songs = $this->getDislikedSongs();
        return view('disliked', compact('songs'));
    }

    private function getDislikedSongs()
    {
        $user_id = Auth::user()->id;
        if ($user_id == 0) {
            return redirect('/login');
        }
        $dislikes = Dislike::where('user_id', $user_id)->get();
        $songs = [];
        foreach ($dislikes as $dislike) {
            $song = Song::where('id', $dislike->song_id)->get();

            if (count($song) != 0) $songs[] = $song[0];
        }

        return $songs;
    }


    public function likes()
    {


        $songs = $this->getlikedSongs();


        return view('liked', compact('songs'));
    }

    private function getlikedSongs()
    {
        $user_id = Auth::user()->id;
        if ($user_id == 0) {
            return redirect('/login');
        }
        $likes = Like::where('user_id', $user_id)->get();
        $songs = [];
        foreach ($likes as $like) {
            $song = Song::where('id', $like->song_id)->get();

            if (count($song) != 0) $songs[] = $song[0];
        }

        return $songs;
    }





    // return view('liked', compact('songs'));
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createsong');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'artistname' => 'required',
            'title' => 'required',
            'pic' => 'required',
            'song' => 'required'

        ]);

        $song = Auth::user()->songs()->create([
            'artistname' => $request->get('artistname'),
            'title' => $request->get('title'),
            'pic' => $request->get('pic'),
            'song' => $request->get('song'),
        ]);


        return view('Newcreation', compact('song'));
    }
    public function recentlyadded()
    {

        $user_id = Auth::user()->id;
        if ($user_id == 0) {
            return redirect('/login');
        }

        $songs = Song::Where('user_id', $user_id)->orderBy('title')->get();
        return view('recentlyadded', compact('songs'));

        //;
    }


    public function search(Request $request)
    {
        $search = $request->input('result');
        $songs = Song::where('artistname', 'like', '%' . $search . '%')
            ->orWhere('title', 'like', '%' . $search . '%')->get();


        return view('search', compact('songs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $songs = Song::orderBy('title');
        // return view('recentlyadded/{id}', compact('songs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $song = Song::where("id", Auth::user()->id);
        Like::where("id", $id)->delete();
        Dislike::where("id", $id)->delete();
        $song = Song::find($id);
        $song->delete();
        return redirect('/recentlyadded');
    }
}
