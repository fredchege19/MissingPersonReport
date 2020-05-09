<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;
class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(Input::has('image')){
            $file= Input::file('image');
            $file->move('uploads', $file->getClientOriginalName());

        $data = new Report([
            'fullName' =>$request->get('name'),
            'age' =>$request->get('age'),
            'address' =>$request->get('address'),
            'homeNumber' =>$request->get('homeNumber'),
            'mobile' =>$request->get('mobile'),
            'clothing' =>$request->get('clothing'),
            'lastSeen' =>$request->get('lastSeen'),
            'stepsTaken' =>$request->get('stepsTaken'),
            'relationship' =>$request->get('relationship'),
            'yourNumber' =>Auth::User()->phone,
            'image'=>$file->getClientOriginalName(),
            'description' =>$request->get('description'),
            'status' =>1,
        ]);

        $data->userId = Auth::User()->id;
        $data->save();
        session()->flash('notif', 'Event has been added successful');
        $request = $client->get('http://infopi.io/text/index.php?app=ws&u=softconsult&h=2b854647a1987873f77bcde5e99c847b&op=pv&to='.Auth::User()->phone.'&msg=Your Report Has Been Filed Successfully');
        return redirect()->back();
        }
        echo "no image";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view_more($id)
    {
        $ticket = Report::find($id);
        return view('view_more', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function found($id)
    {
        $data = Report::find($id);
        $data->status=0;
        $data->update();
        session()->flash('found', 'Event has been added successful');
        return redirect()->back();

    }

    public function reports()
    {
        $open = Report::where('status', 1)->get();
        return view('faq', compact('open'));
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
        //
    }
}
