<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        // Ha API-nál nem szükséges, hagyhatod üresen, vagy visszaadhatsz validációs adatot
        return response()->json(['message' => 'Form endpoint']);
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {
        // Validálás
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'vip' => 'required|boolean',
            'permission' => 'required|boolean',
        ]);

        // Jelszó hash-elése
        $validated['password'] = Hash::make($validated['password']);

        // User létrehozása
        $user = User::create($validated);

        return response()->json($user, 201);
    }

    /**
     * Display the specified user.
     */
    public function show(User $user)
    {
        return response()->json($user);
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(User $user)
    {
        // Ha API-nál nem szükséges, hagyhatod üresen, vagy visszaadhatsz validációs adatot
        return response()->json(['user' => $user]);
    }

    /**
     * Update the specified user in storage.
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => ['sometimes','required','email', Rule::unique('users')->ignore($user->id)],
            'password' => 'sometimes|nullable|string|min:6',
            'vip' => 'sometimes|required|boolean',
            'permission' => 'sometimes|required|boolean',
        ]);

        if (isset($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        }

        $user->update($validated);

        return response()->json($user);
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['message' => 'User deleted']);
    }
}

