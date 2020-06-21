<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Item;
use App\ItemContent;
use App\ItemDirection;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
      
        $data = [];
        $content = [];
<<<<<<< HEAD
        foreach($items as $i => $item){
            $singleData = [];
            foreach($item->ItemContents as $content){
                    $content->options = json_decode($content->options);
            }
            $singleData = ['item_id'=>$item->id, 'item_name'=>$item->header, 'item_content'=>$item->ItemContents];
=======
        $ordersObj = ItemDirection::find(1);

        
        $orders = explode(',', $ordersObj->value);
        
     
        foreach($items as $i => $item){
            $singleData = [];
            $key = (int)$orders[$i] - 1;
            foreach($item->ItemContents as $content){
                    $content->options = json_decode($content->options);
            }
            $singleData = ['id'=>$item->id, 'item_id'=>$items[$key]->id, 'item_name'=>$items[$key]->header, 'item_content'=>$items[$key]->ItemContents];
>>>>>>> 21 june home
            
            $data[] = $singleData;
        };
        return response($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $row = ItemDirection::find(1);
        $row->update([
            'value'=> $request->dire
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
        
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 21 june home
