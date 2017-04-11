<?php

namespace App\Http\Controllers\Api;

use Artesaos\Defender\Facades\Defender;
use Validator;
use App\Phone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhoneController extends Controller
{

    public function __construct()
    {
                $this->middleware('auth');
//                $this->middleware('needsRole:member');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Phone::all()->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Defender::hasRole('admin'))
            return [ 'success' => false, 'errors' => [ 'permission' => true ] ];

        $validator = $this->validator($request->all());

        if ($validator->fails())
            return [ 'success' => false, 'errors' => $validator->errors() ];

        $phone = Phone::create($request->all());

        return [ 'success' => true, 'data' => $phone ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'description' => 'required|max:255',
            'phone'       => 'required|size:9|regex:/^[0-9]{4}\\-[0-9]{4}/'
        ]);
    }
}
