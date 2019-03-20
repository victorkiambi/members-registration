<?php

namespace App\Http\Controllers;

use App\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


use DB;
class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Members:: all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'contact' => 'required|numeric',
            'id' => 'required|numeric',
            'email' => 'required|email',
            'dob' => 'required|date',
            'district' => 'required',
            'guardian' => 'required',
            'guardian_contact' => 'required|numeric',
            'member' => 'required',
            'admit' => 'required',
            'commission' => 'required',
        ]);

        if ($validator->fails()) {
            // return $validator->errors();

            return view('create', ['errors' =>  $validator->errors()]);

        }
       
try {
    

    $members= new Members();
    $members->contact= $request['contact'];
    $members->names= $request['name'];
    $members->id= $request['id'];
    $members->email= $request['email'];
    $members->dob= $request['dob'];
    $members->district= $request['district'];
    $members->guardian= $request['guardian'];
    $members->guardian_contact= $request['guardian_contact'];
    $members->full_member= $request['member'];
    $members->admitted= $request['admit'];
    $members->commissioned= $request['commission'];
    // $members->names= $request['name'];
// add other fields
$members->save();

    return redirect('/members');


} catch (\Exception $e) {
    \Log::error($e->getMessage());
}

       

        // var_dump(request('name'));
        // var_dump(request('contact'));
        // var_dump(request('id'));
        // var_dump(request('dob'));
        // var_dump(request('district'));
        // var_dump(request('guardian'));
        // var_dump(request('guardian_contact'));
        // // var_dump(request('image'));
        // var_dump(request('member'));
        // var_dump(request('admit'));
        // var_dump(request('commission'));
        // var_dump(request('dob'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function show(Members $members)
    {
        $members = DB::table('members')->get();
    // return $members;

    return view('members', ['members' => $members]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function edit(Members $members)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Members $members)
    {
        //
        // $members = Article::findOrFail($contact);
        $members->update($request->all());

        return response()->json($members,200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function destroy(Members $members)
    {
        //
    }

    public function delete(Members $members)
    {
        // $members = Members::findOrFail($contact);
        $members->delete();

        return response()->json(null, 204);
    }

    public function __construct()
    {
      $this->middleware('auth');
    }
}
