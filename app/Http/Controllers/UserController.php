<?php 

 
 

namespace App\Http\Controllers; 

use App\Models\user; 

use Illuminate\Http\Request; 

use Illuminate\Support\Facades\Auth; 

use Illuminate\Support\Facades\Hash; 

 
 
 

class UserController extends Controller 

{ 

    public function showRegister() 

    { 
        
        return view('register'); 

    } 

    

 
 

    public function showLogin() 

    { 
        return view('login'); 
    } 

    // register user :chtjib les donnes mn l front 

    public function postRegister(Request $request) { 
        $request->validate([ 
            'name' => 'required|min:3|max:255', 
            'email' => 'required|email|max:255|unique:users', 
            'password' => 'required|min:8|confirmed', 
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]); 

     

        // Check if the image field exists 

        if ($request->hasFile('image')) { 

            $image_name = 'users/' . time() . rand(0,9999) . '.' . $request->image->getClientOriginalExtension(); 

            $request->image->storeAs('public', $image_name); 

        } else { 

            $image_name = null; 

        } 

     

        $user = User::create([ 

            'name' => $request->name, 

            'email' => $request->email, 

            'password' => Hash::make($request->password), 

            'image' => $image_name, 
            
            'color' => $request->color, 

        ]); 

     

        Auth::login($user); 

     

        // return back()->with('success', 'Successfully logged in!'); 
        return redirect()->route('index');

    } 

 
 
 

        public function postLogin(Request $request){ 

 
 

            // validate 

            $details = $request->validate([ 

                'email'=>'Required|email', 

                'password'=>'Required', 

     

            ]); 

     

            // login 

     

            if(Auth::attempt($details)) 

        { 

            return redirect()->route('index');

        } 

            // return 

            return back()->withErrors([ 

                'email'=>'invalid login details' 

            ]); 

        } 

     

        // logout 

        public function logout() 
            { 
                Auth::logout(); 

                return redirect()->route('login');

            } 

} 