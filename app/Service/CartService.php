<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Models\MST_ITEM;
use App\Models\MST_COMPANY;
/**
 * カートの中身を保持するクラス
 */
class CartService
{
    /**
     * カートの中にデータを入れる
     * @param $id
     */
    public function addItem($additem){
        $cartitem = session()->get('cart');
        $flug = 0;
        if(!empty($cartitem)){
            foreach($cartitem as $key => $value){
                if($value['itemid'] == $additem){
                    $cartitem[$key]['num'] += 1;
                    $flug = 1;
                }
            }
        }
        if($flug == 0){
            $cartitem[] = [
                'itemid' => $additem,
                'num' => 1
            ];
        }
        session()->put('cart',$cartitem);
    }
    public function clear(){
        session()->flush(); //sessionの全データを削除
    }
    public function deleteItem($id){
//        session()->forget("items.$index"); //sessionから選んだ商品を削除。例えば$items[0]の削除は items.0 と指定できる。

        $cartlist = session()->get('cart',[]);
        foreach ($cartlist as $key => $value) {
            if($value['itemid'] == $id){
                $itemid = $key;
            }
        }
        session()->forget("cart.$itemid");
    }
    public function getItems(){
//        $items = session()->get("items",[]); //セッションデータを取得、nullの場合は空の配列
        $cartitem = session()->get('cart',[]);
        $itemlistid = [];
        foreach($cartitem as $value){
            $itemlistid[] = $value['itemid'];
        }
        $responselist = MST_ITEM::whereIn('ITEM_ID',$itemlistid)
            ->with('company')
            ->get()
            ->toArray();

        foreach($responselist as $reskey => $resvalue){
            foreach ($cartitem as $cartkey => $cartvalue) {
                if($resvalue['ITEM_ID'] == $cartvalue['itemid']){
                    $responselist[$reskey]['pricenum'] = $cartvalue['num'];
                }
            }
        }
        return $responselist;
    }
}