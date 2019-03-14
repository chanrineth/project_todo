<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Status;
use App\Todo;

class TodoController extends Controller
{
    public function status()
    {
        $statuses = Status::get();

        return [
            'code' => 200,
            'message' => 'success',
            'data' => $statuses
        ];
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'status_id' => 'required',

        ]);

        if (isset($request->id)) {

            $todo = Todo::findOrFail($request->id);
            if ($todo instanceof Todo) {
                $todo->update($request->all());
            }
            return [
                'code' => 200,
                'message' => 'success',
                'data' => $todo
            ];
        } else {
            $todo = Todo::create($request->all());
            return [
                'code' => 200,
                'message' => 'success',
                'data' => $todo
            ];
        }

    }

    public function delete($id)
    {
        $todo = findOrFail($id);
        if ($todo instanceof Todo) {

            $todo->delete();
        }

        return [
            'code' => 200,
            'message' => 'sucesss',
            'data' => $todo

        ];

    }

    public function getshow()
    {
        $todos = Todo::with('status')->get();
        return [
            'code' => 200,
            'message' => 'sucess',
            'data' => $todos

        ];
    }
    public function getshowbyid($id)
    {
        $todo =Todo::findOrFail($id);
        return[
            'code' => 200,
            'message' =>'sucess',
            'data' => $todo

        ];
    }






}
