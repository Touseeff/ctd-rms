<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\AuthMail;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin_dashboard.admin_dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showUser()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin_dashboard.show_user', compact('users'));
        // return view('admin_dashboard.show_user', compact('users'));
    }


    public function viewUser(string $id)
    {
        $user = User::find($id);
        return view('admin_dashboard.show_user_details', compact('user'));
    }
    public function createUser()
    {
        $url = 'admin.store.user';
        $title = 'Add New User';
        // return view('')

        return view('admin_dashboard.add_user', compact('url', 'title'));
    }

    
    public function storeUser(Request $request)
    {
        // dd($request->toArray());
        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            return redirect()->route('create.user')->with('error', 'Email is already registered. Please use a different email.');
        }
        // Validate the request data here if needed
        // dd($request->toArray());
        // Create a new User instance

        $user = new User();
        $user->role_id = $request->role;
        $user->first_name = $request->firstName;
        $user->middle_name = $request->middleName;
        $user->last_name = $request->lastName;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        // Log::debug('Hashed Password:', ['password' => $user->password]);
        $user->contact_number = $request->contactNumber;
        $user->nic_number = $request->nicNumber;
        $user->date_of_birth = $request->dateOfBirth;
        $user->gendar = $request->gender;
        $user->qualification = $request->qualification;
        $user->designation = $request->designation;
        $user->joining_date = $request->dateOfJoining;
        $user->designation_role = $request->designationRole;
        $user->skills = $request->skills;
        $user->address = $request->address;
        $user->department = $request->department;
        $user->status = $request->status;


        // $user->status = 'pending';

        if ($user->save()) {
            $notification_obj = new Notification;
            $notification_obj->notification_type = "Admin create a new user record";

            if ($notification_obj->save()) {
                $details = [
                    'title' => 'Admin create a new user record',
                    'first_name' => $request->firstName,
                    'message' => 'Thank you for registering! We’re excited to have you with us.',
                    'cc' => 'tauseefdevelopment000@gmail.com'
                ];
                $template = 'emails.registration_notification';

                try {
                    Mail::to($user->email)
                        ->cc($details['cc'])
                        ->send(new AuthMail($details, $template));

                    Log::info('Registration successful for user: ' . $user->email);

                } catch (\Exception $e) {
                    Log::error('Failed to send registration email to ' . $user->email . ': ' . $e->getMessage());
                    // Adding a session message here
                    session()->flash('warning', 'User registered, but failed to send email notification.');
                }

                // Redirect to the login page regardless of email success or failure
                return redirect()->route('admin.show.user')->with('success', 'User registered successfully!');
            }
        } else {
            Log::error('User registration failed for: ' . $user->email);
            return redirect()->route('admin.create.user')->with('error', 'Failed to register user. Please try again.');
        }
        

        // Handle the image upload if the file exists
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $file_name = time() . '_' . $image->getClientOriginalName();
        //     $destinationPath = public_path('assets/images/users'); 
        //     $image->move($destinationPath, $file_name); 
        //     $user->profile_image = $file_name; 
        // }

    }


    public function editUser(string $id)
    {
        // Define view data
        $url = 'admin.update.user';
        $title = 'Edit User';

        // Retrieve user by ID
        $user = User::find($id);

        // Check if the user exists
        if (!$user) {
            return redirect()->route('show.user')->with('error', 'User not found.');
        }

        // Render the view with the user data and other variables
        return view('admin_dashboard.add_user', compact('user', 'url', 'title'));
    }

    public function updateUser(Request $request)
    {
        // dd($request->toArray());


        // dd($request->toArray());

        $id = $request->id;
        $user = User::find($id);

        // dd($user->toArray());
        $user->first_name = $request->firstName;
        $user->middle_name = $request->middleName;
        $user->last_name = $request->lastName;
        // $user->email = $user['email'];
        // $user->password = $user['password'];
        $user->contact_number = $request->contactNumber;
        $user->nic_number = $request->nicNumber;
        $user->date_of_birth = $request->dateOfBirth;
        $user->gendar = $request->gender;
        $user->qualification = $request->qualification;
        $user->designation = $request->designation;
        $user->joining_date = $request->dateOfJoining;
        $user->designation_role = $request->designationRole;
        $user->skills = $request->skills;
        $user->address = $request->address;
        $user->department = $request->department;
        $user->status = $request->status;

        if ($user->save()) {
            // echo "ok";
            return redirect()->route('admin.show.user')->with('success', 'User record updated successfully.');
        } else {
            // echo "not ok";
            return redirect()->route('admin.show.user')->with('error', 'Failed to update user. Please try again.');
        }
    }


    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function adminLogout()
    {
        Auth::logout();
        return redirect()->route('signin.create')->with('success', 'You have been logged out successfully.');

    }
    public function destroy(string $id)
    {
        //
    }
}
