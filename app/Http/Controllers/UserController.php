<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
   /**
    * Show User profile
    *
    * @return Illuminate\Http\Response 
    */
    public function show() {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        return view('user.profile')->with('user',$user);
    }
   /**
    * Upadte User profile
    *
    * @return Illuminate\Http\Response 
    */
    public function update(Request $request) {
       // Validation
       $this->validate($request,[
        'name' => 'required|string|max:255',
        'profile_image' => 'image|nullable|max:1999'
       ]);
       
        // Handle file upload
        if($request->hasFile('profile_image')) {
            // Get the file name with extenation
            $fileNameWithExt = $request->file('profile_image')->getClientOriginalName();
            // Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just extenation
            $extension = $request->file('profile_image')->getClientOriginalExtension();
            // Set fileName to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('profile_image')->storeAs('public/profile_images', $fileNameToStore);
        }

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $user->name = $request->input('name');
        // Check image file not changed
        if($request->hasFile('profile_image')) {
            $user->profile_image = $fileNameToStore;
        }
        $user->save();

        return redirect('/user/profile')->with('success', 'Profile Updated');
    }
}
