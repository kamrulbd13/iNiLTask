<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Exception;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //index
    public function index(){
        $todos = Todo::all();
        return view('todomodule.index',compact('todos')
        );
    }

    // create
    public function create(){
        return view('todomodule.create');
    }
    // store
    public function store(Request $request){

         try {
        Todo::saveData($request);
        return redirect()->route('index')->withMessage('message','Record added Successfully.');
        }
        catch (Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
    // edit
    public function edit($id){
        return view('todomodule.edit',[
            'item' => Todo::find($id),
        ]);
    }
    // view
    public function view($id){

        return view('todomodule.view',[
            'item' => Todo::find($id),
        ]);
    }

    // update
    public function update(Request $request, $id){

      try {
        Todo::updateItem($request, $id);
        return redirect()->route('index')->withMessage('message','Record Update Successfully.');
        }
        catch (Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    // delete
    public function delete($id){

      Todo::deleteItem($id);
      return redirect()->back();
    }


}
