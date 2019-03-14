<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Status;
use App\Todo;
use Illuminate\Support\Facades\Request;

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

    public function store(\Illuminate\Http\Request $request)
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
        $todo = Todo::findOrFail($id);
        if ($todo instanceof Todo) {

            $todo->delete();
        }
        return [
            'code' => 200,
            'message' => 'sucesss',
            'data' => $todo

        ];

    }

    public function getshow(Request $request)
    {
        $keyword = $request->keyword;
        $filter = $request->filter;

        $todos = Todo::with('status');

        if (isset($keyword)) {
            $todos->where('title', 'ilike', $keyword.'%');
        }

        if (isset($filter)) {
            $todos->where('status_id', $filter);
        }

        $todos->get();
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

    public function searchbyid(Request $request)
    {
        $todo =Todo::findOrFail();
        return[
            'code' => 200,
            'message' =>'sucess',
            'data' => $todo

        ];
    }







}
