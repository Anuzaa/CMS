<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth',['except' => ['index', 'show']]);
    //     //Authorization for the blog page
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients= Client::orderBy('created_at','desc')->paginate(4);
    //    $clients = Client::all();
       //Mapping to table clients
        return view('clients.index')->with('clients',$clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required',
            'gender'=>'required',
            'contact_no'=>'required',
            'email'=>'required',
            'address'=>'required',
            'nationality'=>'required',
            // 'birth_date'=>'required',
            'education'=>'required'
        ]);
        
        
        //Store Client Records
        $client=new Client();
        $client->name = $request->input('name');
        $client->gender = $request->input('gender');
        $client->contact_no = $request->input('contact_no');
        $client->email = $request->input('email');
        $client->address = $request->input('address');
        $client->nationality = $request->input('nationality');
        $client->birth_date = $request->input('birth_date');
        $client->education = $request->input('education');
        // $client->user_id = auth()->user()->id;
        $client->save();
        return redirect('/clients')->with('success','Client Information Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client= Client::find($id); 
        return view('clients.show')->with('client',$client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client= Client::find($id); 
        //Check for correct user
        // if(auth()->user()->id !== $client->user_id){
        //     return redirect('/clients')->with('Error','Unauthorized User');
        // }
        return view('clients.edit')->with('client',$client);
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
        $this->validate($request,
        [
            'name'=>'required',
            'gender'=>'required',
            'contact_no'=>'required',
            'email'=>'required',
            'address'=>'required',
            'nationality'=>'required',
            // 'birth_date'=>'required',
            'education'=>'required'
        ]);
        
        
        //Store Client Records
        $client=new Client();
        $client->name = $request->input('name');
        $client->gender = $request->input('gender');
        $client->contact_no = $request->input('contact_no');
        $client->email = $request->input('email');
        $client->address = $request->input('address');
        $client->nationality = $request->input('nationality');
        $client->birth_date = $request->input('birth_date');
        $client->education = $request->input('education');
        // $client->user_id = auth()->user()->id;
        $client->save();

        return redirect('/clients')->with('success','Client Information Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client=Client::find($id);
        // Check for correct user
        // if(auth()->user()->id !== $client->user_id){
        //     return redirect('/clients')->with('Error','Unauthorized User');
        // } 
        $client->delete();
        return redirect('/clients')->with('success','Deleted'); 
    
    }
}
