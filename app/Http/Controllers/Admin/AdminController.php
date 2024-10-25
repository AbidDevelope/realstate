<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Artist;
use App\Models\property;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Hash;
class AdminController extends Controller
{



    public function index()
    {

        $properties = property::all();
        return view('frontend.home', compact('properties'));
    }





        public function Admindashboard()
        {
        
        if (Auth::guard('admin')->check()) {
                return view('admin.dashboard');
            } else {
                return view('admin.login');
            }
        }
        

       


    
        public function login()
        {
        return view("admin.login");
        }

        public function checklogin(Request $request)
        {
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
            $admin = Admin::where('email', $request->email)->first();
            if ($admin) {
                if ($request->password === $admin->password) {
                    Auth::guard('admin')->login($admin);
                        $request->session()->put('id', $admin->id);
                        $message = 'Admin ' . $admin->name . ' (' . $admin->email . ') successfully logged in.';
                        session()->flash('success', $message);

                    return redirect()->route('Admindashboard');
                } else {
                
                    return redirect('admin')->with('error', 'Email-Address and Password Are Wrong.');
                }
            } else {
            
                return back()->with('error', 'This Email is Not Registered');
            }
        }
        
        public function logout()
        {
            Session::flush();
            Auth::logout();
            
            return redirect('admin');
        }

        

       

        public function Property()
        {


            return view('admin/Property');
        }

        public function insertproperty(Request $request)
        {
            
            $rules = [
                'property_title' => 'required|string|max:255',
                'property_type' => 'required|string|max:255',
                'property_area' => 'required|numeric',
                'price' => 'required|numeric',
                'status' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
                'description' => 'required|string',
            ];
        
            $request->validate($rules);
            $property = new Property;
            $property->property_title = $request->input('property_title');
            $property->property_type = $request->input('property_type');
            $property->property_area = $request->input('property_area');
            $property->price = $request->input('price');
            $property->status = $request->input('status');
            $property->address = $request->input('address');
        
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/images/', $filename);
                $property->image = $filename;
            }
        
            $property->description = $request->input('description');
            $property->save();
            return redirect()->back()->with('status', 'Property added successfully');
        }
        
        public function viewproperty()
        {

            $properties = property::all();
            return view('admin/viewproperty', compact('properties'));
        }


        public function active_artist($id)
        {
              $data=Artist::find($id);
            if($data){
                if($data->status){
                $data->status=0;  
                }
                else
                {
                $data->status=1;   
                }
                $data->save();
            }
            return redirect()->back();
        
        }

        public function profile()        
        {
            if (Auth::guard('admin')->check()) {
                $adminData = Admin::find(auth()->guard('admin')->user()->id);
                // echo "<pre>";
                // print_r($adminData);die;
                // echo "</pre>";
                return view('admin.profile', ['adminData' => $adminData]);
            } 
        }

        public function update_admin(Request $request, $id)
        {
           
            $admin = Admin::find($id);
    
            $admin->name = $request->input('name');
            $admin->email = $request->input('email');
            $admin->mobile = $request->input('mobile');

            if($request->hasfile('profile'))
            {
                $destination = 'uploads/profile/'. $admin->profile;
                if(File::exists( $destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('profile');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('uploads/profile/', $filename);
                $admin->profile = $filename;
            }

            $admin->update();
        
            return redirect()->back()->with('success', 'Admin Updated Successfully');
        }
           

        public function userslist()
        {     
            $users = User::paginate(5);
            // print_r($users);die;
            return view('admin/userslist', compact('users'));
        }


        public function artistevents ()
        {     
            $events = Event::paginate(5);
         
            return view('admin/artistevents', compact('events'));
        }
            
            
}