<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Session;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }
    
    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Todo::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'is_completed' => false,
        ]);

        return redirect()->route('todos.index')->with('success', 'Todo created successfully!');
    }

    public function show($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.show', compact('todo'));
    }

    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'is_completed' => 'boolean',
        ]);

        $todo->update($validated);

        return redirect()->route('todos.index')->with('success', 'Todo updated successfully!');
    }

    public function destroy(Request $request)
    {
        $todo = Todo::findOrFail($request->todo_id);

        $todo->delete();

        return redirect()->route('todos.index')->with('success', 'Todo deleted successfully!');
    }

    public function exportToSVG()
    {
        // Your logic to generate SVG data from the todos
        $todos = Todo::all();

        // Example SVG content
        $svgContent = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <text x="10" y="20" font-family="Arial" font-size="12">Todo List</text>';

        foreach ($todos as $index => $todo) {
            $yPosition = 40 + ($index * 20);
            $svgContent .= '<text x="10" y="' . $yPosition . '" font-family="Arial" font-size="12">' . $todo->title . '</text>';
        }

        $svgContent .= '</svg>';

        return response($svgContent)->header('Content-Type', 'image/svg+xml');
    }
}

?>