<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('users.index', [
      'title' => 'Data Users',
      'users' => User::orderBy('id', 'desc')->get()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('users.create', [
      'title' => 'Create New User'
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
      'name' => ['required', 'string'],
      'email' => ['required', 'email:dns', 'unique:App\Models\User,email'],
      'jenis_kelamin' => ['required'],
      'alamat' => ['required'],
      'no_ponsel' => ['required', 'numeric', 'unique:App\Models\User,no_ponsel']
    ]);

    $validatedData = [
      'name' => $request->name,
      'email' => $request->email,
      'jenis_kelamin' => $request->jenis_kelamin,
      'alamat' => $request->alamat,
      'no_ponsel' => $request->no_ponsel,
      'password' => Hash::make($request->no_ponsel)
    ];

    User::create($validatedData);

    return redirect('/users')->with('success_create_new_user', 'New user ' . $request->name . ' has been created! Ask the user to log in using the mobile number!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(User $user)
  {
    return view('users.edit', [
      'title' => 'Update User ' . $user->name,
      'user' => $user
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, User $user)
  {
    $role = [
      'name' => ['required', 'string'],
      'email' => ['required', 'email:dns'],
      'jenis_kelamin' => ['required'],
      'alamat' => ['required'],
      'no_ponsel' => ['required', 'numeric']
    ];

    // cek jika tidak merubah email
    if ($user->email != $request->email) {
      $role['email'] = ['required', 'email:dns', 'unique:App\Models\User,email'];
    }
    // cek jika tidak merubah no_ponsel
    if ($user->no_ponsel != $request->no_ponsel) {
      $role['no_ponsel'] = ['required', 'numeric', 'unique:App\Models\User,no_ponsel'];
    }

    $validatedData = $request->validate($role);

    $user->update($validatedData);

    return redirect('/users')->with('success_update_user', 'Successfully updated ' . $request->name . ' user data');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(User $user)
  {
    // cek apakah user yang di delete sedang active login
    $user_login = UserLogin::where('user_id', $user->id)->first();
    $user_name =  $user->name;
    if ($user_login) { // jika user sedang login
      return redirect('/users')->with('error_user_delete',  $user_name . ' is in active login status. You cannot delete a user of ' . $user_name);
    } else {  // jika user sedang tidak login
      $user->delete();

      return redirect('/users')->with('success_user_delete', 'Successfully deleted the user ' . $user_name);
    }
  }
}
