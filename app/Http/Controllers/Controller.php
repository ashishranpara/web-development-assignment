<?php

namespace App\Http\Controllers;

use App\ListItems;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Load the item selection page with list and selected items by user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function homePage()
    {

        $items = ListItems::all();
        return view('homepage', compact('items'));
    }

    /**
     * add new item to list
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addItem(Request $request)
    {
        try {
            if (ListItems::where('item_name', '=', $request->input('item_name'))->exists()) {
                return response()->json(array('status' => false, 'message' => 'Item Name already exists!'));
            } else {
                $newItem = new ListItems();
                $newItem->item_name = $request->input('item_name');
                if ($newItem->save()) {
                    return response()->json(array('status' => true, 'id' => $newItem->id));
                }
            }
        } catch (\Exception $e) {
            return response()->json(array('status' => false, 'message' => 'Error Try Again'));
        }
    }

    /**
     * update onlist column of list_items table
     * 0 = list items
     * 1 = selected items
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addSelectedItem(Request $request)
    {
        $id = $request->input('item');
        $getItem = ListItems::find($id);
        if ($getItem) {
            $getItem->onlist = $request->input('onlist');
            $getItem->save();
            return response()->json(array('status' => true));
        } else {
            return response()->json(array('status' => false));
        }
    }
}
