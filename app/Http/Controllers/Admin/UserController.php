<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
       $users = User::paginate(15);// $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(StoreUserRequest $request)
    {
        User::create($request->validated());

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário criado com sucesso' );
    }

    public function edit(string $id)
    {
        $user = User::where('id', $id)->first();
        if (!$user = User::find($id)){
            return redirect()->route('users.index')->with('message', 'Usuário não encontrado');
        }

        return view('admin.users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, string $id)
    {
        if (!$user = User::find($id)){
            return back()->with('message', 'Usuário não encontrado');
        }
        $data = $request->only('name', 'email');
        if ($request->password){
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário editado com sucesso' );
    }

    public function show(string $id)
    {
        if (!$user = User::find($id)){
            return redirect()->route('users.index')->with('message', 'Usuário não encontrado');
        }
         return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user)
    {
    if (Auth::id() === $user->id) {
        return redirect()->route('users.index')->with('message', 'Você não pode deletar o seu usuário');
    }

    $user->delete();

    return redirect()->route('users.index')->with('success', 'Usuário deletado com sucesso');
    }
}
