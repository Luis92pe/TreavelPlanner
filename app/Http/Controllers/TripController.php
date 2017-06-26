<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trips;
use Auth;
use Validator;
use Carbon\Carbon;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()){
            return Trips::where('user_id', '=', Auth::user()->id)->get();
        }
        $trips = Trips::paginate(10);
        
        return view("welcome", ["trips" => $trips]);
       
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



        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'destination' => 'required|max:255',
            'startdate' => 'date',
            'enddate' => 'date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 'WS002',
                'message' => 'Error en validacciones',
                'errors' => $validator->messages(),
            ]);
        }

        try {
            $sd = Carbon::parse($request->startdate)->format('Y-m-d h:m:s');
            $ed = Carbon::parse($request->enddate)->format('Y-m-d h:m:s');

            if(Auth::user()){
                $trip = new Trips();

                $trip->name = $request->name;
                $trip->destination = $request->destination;
                $trip->comments = $request->comments;
                $trip->startdate = $sd;
                $trip->enddate = $ed;
                // Associate the user
                $trip->user_id = Auth::user()->id;

                $trip->save();
            }
            
        } catch (Exception $e) {
            return response()->json([
                'code' => 'WS003',
                'message' => 'Error en servicio',
                'errors' => $e,
            ]);
        }

        return response()->json([
                'code' => 'WS001',
                'message' => 'Ruta Creada',
                'id' => $trip->id
            ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'destination' => 'required|max:255',
            'startdate' => 'date',
            'enddate' => 'date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 'WS002',
                'message' => 'Error en validacciones',
                'errors' => $validator->messages(),
            ]);
        }
        
        try {
            $sd = Carbon::parse($request->startdate)->format('Y-m-d h:m:s');
            $ed = Carbon::parse($request->enddate)->format('Y-m-d h:m:s');

            if(Auth::user()){
                $trip = Trips::find($id);

               $trip->name = $request->name;
                $trip->destination = $request->destination;
                $trip->comments = $request->comments;
                $trip->startdate = $sd;
                $trip->enddate = $ed;

                $trip->save();
            }
            
        } catch (Exception $e) {
            return response()->json([
                'code' => 'WS003',
                'message' => 'Error en servicio',
                'errors' => $e,
            ]);
        }

        return response()->json([
                'code' => 'WS001',
                'message' => 'Ruta Editada',
                'id' => $trip->id
            ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $trip = Trips::find($id);
            $trip->delete();
            
        } catch (Exception $e) {
            return response()->json([
                'code' => 'WS003',
                'message' => 'Error en servicio',
                'errors' => $e,
            ]);
        }

        return response()->json([
                'code' => 'WS001',
                'message' => 'Ruta eliminada permanentemente',
            ]);
    }
}
