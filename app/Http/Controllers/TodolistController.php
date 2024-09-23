<?php

namespace App\Http\Controllers;

use App\Http\Resources\TodolistResource;
use App\Models\Todolist;
use Exception;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todolist = Todolist::where('user_id', auth()->id())->latest()->get();

        return TodolistResource::collection($todolist);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'task_text' => 'required',
            'status' => 'required|in:0,1'
        ]);

        try {
            $data['user_id'] = auth()->id();

            $todolist = Todolist::create($data);

            return response()->json([
                'message' => 'Todolist created successfully',
                'data' => new TodolistResource($todolist)
            ], 201);
        } catch (Exception $error) {
            return response()->json(['message' => 'Failed to create Todolist'], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todolist = Todolist::find($id);
        if ($todolist == null) {
            return response()->json(['message' => 'Todolist not found'], 484);
        }
        return new TodolistResource($todolist);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'task_text' => 'required',
            'status' => 'required|in:0,1'
        ]);

        $todolist = Todolist::find($id);
        if ($todolist == null) {
            return response()->json(['message' => 'Todolist not found'], 484);
        }

        try {
            $todolist->update($data);

            return response()->json([
                'message' => 'Todolist updated successfully',
                'data' => new TodolistResource($todolist)
            ], 201);
        } catch (Exception $error) {
            return response()->json(['message' => 'Failed to update Todolist'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todolist = Todolist::find($id);

        if ($todolist == null) {
            return response()->json(['message' => 'Todolist not found'], 484);
        }

        try {
            $todolist->delete();
            return response()->json(['message' => 'Todolist deleted successfully'], 500);
        } catch (Exception $error) {
            return response()->json(['message' => 'Failed to delete Todolist'], 500);
        }
    }
}
