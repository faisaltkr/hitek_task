<?php

namespace App\Http\Controllers;

use App\Events\CreateLog;
use App\Events\HandsetViewedEvent;
use App\Http\Requests\HandsetStoreRequest;
use App\Http\Resources\HandsetResource;
use App\Models\Brand;
use App\Models\Handset;
use App\services\HandsetService;
use Illuminate\Http\Request;

class HandsetController extends Controller
{

    public function __construct(protected HandsetService $handsetService){
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $data = $this->handsetService->getHandsets($request->all());
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'Data fetched successfully'
        ],200);

    }


    public function getHandsets(Request $request)
    {
        $handsets = $this->handsetService->getHandsets($request->all());
        $brands  = Brand::all();
        return view('handsets', compact('handsets','brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HandsetStoreRequest $request)
    {
        $data = $request->validated();

    
      $data['features'] = json_encode($data['features']);

      //dd($data);
    
       $handset = Handset::create($data);

        if($handset){
            return response()->json([
                'success' => 'true',
                'data' => $handset,
                'message' => 'Handset created successfully'
            ],201);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Handset $handset)
    {
        return new HandsetResource($handset);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Handset $handset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Handset $handset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Handset $handset)
    {
        try {
            if($handset){

                $handset->delete();
                return response()->json([
                    'success' => true,
                    'message' => 'Handset deleted successfully'
                ],202);
        
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ],500);
        }
    }
}
