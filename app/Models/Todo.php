<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    public static $todoItem;
    
    // save item
    public static function saveData($request){
        
        self::$todoItem = new Todo();
        
        self::$todoItem->title          = $request->title;
        self::$todoItem->description    = $request->description;
        self::$todoItem->status         = $request->status;
        self::$todoItem->save();
    }

    // update item
    public static function updateItem($request, $id){
        self::$todoItem = Todo::find($id);

        self::$todoItem->title          = $request->title;
        self::$todoItem->description    = $request->description;
        self::$todoItem->status         = $request->status;
        self::$todoItem->save();
    }

    // delete item
    public static function deleteItem($id){
        self::$todoItem = Todo::find($id);
        
        self::$todoItem->delete();
    }

}
