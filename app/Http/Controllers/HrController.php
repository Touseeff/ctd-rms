<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\AuthMail;
use App\Models\Section;
use App\Models\Department;

use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use function Laravel\Prompts\password;

class HrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // echo "hr-dashbord";
        // return view('hr_dashboard');
        return view('hr_dashboard.hr_dashboard');

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
        $users = User::with(['department', 'section'])->orderBy('id', 'DESC')->get();
        // dd($users->toArray());


        return view('hr_dashboard.show_user', compact('users'));
    }





    public function createUser()
    {
        $url = 'store.user';
        $title = 'Add New User';
        // return view('')

        return view('hr_dashboard.add_user', compact('url', 'title'));
    }
    public function storeUser(Request $request)
    {
        // dd($request->toArray());
        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            return redirect()->route('show.user')->with('error', 'Email is already registered. Please use a different email.');
        }
        // Validate the request data here if needed
        // dd($request->toArray());
        // Create a new User instance

        $user = new User();
        $user->role_id = $request->role;
        $user->department_id = $request->department;
        $user->section_id = $request->section;
        $user->first_name = $request->firstName;
        // $user->middle_name = $request->middleName;
        $user->last_name = $request->lastName;
        $user->email = $request->email;
        $password = Str::random(10);
        // $user->password = bcrypt($password);
        $user->password = $password;
        // Log::debug('Hashed Password:', ['password' => $user->password]);
        $user->contact_number = $request->contactNumber;
        $user->nic_number = $request->nicNumber;
        $user->date_of_birth = $request->dateOfBirth;
        $user->gendar = $request->gender;
        $user->qualification = $request->qualification;
        $user->designation = $request->designation;
        $user->joining_date = $request->dateOfJoining;
        $user->designation_role = $request->designationRole;
        $user->address_one = $request->addressOne;
        $user->address_two = $request->addressTwo;

        if ($user->save()) {
            $notification_obj = new Notification;
            $notification_obj->notification_type = "HR create a new user record";

            if ($notification_obj->save()) {
                $details = [
                    'title' => 'HR create a new user record',
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
                return redirect()->route('show.user')->with('success', 'User registered successfully!');
            }
        } else {
            Log::error('User registration failed for: ' . $user->email);
            return redirect()->route('create.user')->with('error', 'Failed to register user. Please try again.');
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

    /**
     * Show the form for editing the specified resource.p
     */

    public function editUser(string $id)
    {
        // Define view data
        $url = 'update.user';
        $title = 'Edit User';

        // Retrieve user by ID
        // $user = User::find($id);
        $user = User::with('department', 'section')->where('id', $id)->first();
        // dd($user->toArray());

        // Check if the user exists
        if (!$user) {
            return redirect()->route('show.user')->with('error', 'User not found.');
        }
        // Render the view with the user data and other variables

        return view('hr_dashboard.add_user', compact('user', 'url', 'title'));
    }

    public function updateUser(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);

        // dd($user->toArray());

        $user->role_id = $request->role;
        $user->department_id = $request->department;
        $user->section_id = $request->section;
        $user->first_name = $request->firstName;
        $user->middle_name = $request->middleName;
        $user->last_name = $request->lastName;
        $user->email = $request->email;
        // $user->password = bcrypt($password);
        $user->contact_number = $request->contactNumber;
        $user->nic_number = $request->nicNumber;
        $user->gendar = $request->gender;
        $user->qualification = $request->qualification;
        $user->date_of_birth = $request->dateOfBirth;
        $user->designation = $request->designation;
        $user->joining_date = $request->dateOfJoining;
        $user->designation_role = $request->designationRole;
        $user->address_one = $request->addressOne;
        $user->address_two = $request->addressTwo;
        // $user->department = $request->department;
        // $user->status = $request->status;

        if ($user->save()) {
            // echo "ok";
            return redirect()->route('show.user')->with('success', 'User record updated successfully.');
        } else {
            // echo "not ok";
            return redirect()->route('show.user')->with('error', 'Failed to update user. Please try again.');
        }
    }

    public function viewUser(string $id)
    {

        $user = User::with(['department', 'section'])->where('id', $id)->first();
        return view('hr_dashboard.show_user_details', compact('user'));


        // $user = User::find($id);
        // // $user = DB::table('users')()
        // return view('hr_dashboard.show_user_details', compact('user'));

    }
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    // YourController.php
    public function getSections($department_id)
    {
        // echo $department_id;

        $sections = DB::table('sections')
            ->where('department_id', $department_id)
            ->get();
        return response()->json($sections);

    }

    /**
     * Remove the specified resource from storage.
     */

    //  Profile controller methods 

    public function viewProfile(string $id)
    {
        // $user = User::find($id);
        $user = User::with('department', 'section')->where('id', $id)->first();
        return view('hr_dashboard.show_hr_profile_details', compact('user'));
    }
    public function editProfile(string $id)
    {
        // Define view data
        $url = 'hr.update.profile';
        $title = 'Edit Profile';

        // Retrieve user by ID
        // $user = User::find($id);
        $user = User::with('department', 'section')->where('id', $id)->first();
        // dd($user->toArray());



        // Check if the user exists
        if (!$user) {
            return redirect()->route('hr_dashboard')->with('error', 'User not found.');
        }


        // Render the view with the user data and other variables

        return view('hr_dashboard.edit_hr_profile', compact('user', 'url', 'title'));
    
    }






    public function updateProfile(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);

        // Store the fields that can be updated
        $fieldsToUpdate = [
            'first_name' => $request->firstName,
            // 'middle_name' => $request->middleName,
            'last_name' => $request->lastName,
            // 'contact_number' => $request->contactNumber,
            'nic_number' => $request->nicNumber,
            'gendar' => $request->gender,
            'qualification' => $request->qualification,
            'date_of_birth' => $request->dateOfBirth,
            'address_one' => $request->addressOne,
            'address_two' => $request->addressTwo,
        ];

        // Track if any field is actually modified
        $isModified = false;

        foreach ($fieldsToUpdate as $field => $newValue) {
            if ($user->$field != $newValue) {
                $user->$field = $newValue;
                $isModified = true;
            }
        }

        // Handle profile image upload
        if ($request->hasFile('profileImage')) {
            // Define the upload path
            $uploadPath = 'uploads/profile_images/';

            // Delete the previous image if it exists
            if ($user->profile_image && file_exists(public_path($uploadPath . $user->profile_image))) {
                unlink(public_path($uploadPath . $user->profile_image));
            }

            // Store the new image
            $newImageName = $user->first_name."_".time() . '_' . $request->file('profileImage')->getClientOriginalName();
            $request->file('profileImage')->move(public_path($uploadPath), $newImageName);

            // Update the user's profile image field
            $user->profile_image = $newImageName;
            $isModified = true;
        }


        // Save only if any field is modified
        if ($isModified && $user->save()) {
            return redirect()->route('hr.dashboard')->with('success', 'User record updated successfully.');
        } elseif (!$isModified) {
            return redirect()->route('hr.dashboard')->with('info', 'No changes detected.');
        } else {
            return redirect()->route('hr.dashboard')->with('error', 'Failed to update user. Please try again.');
        }
    }

    public function hrLogout()
    {
        Auth::logout();
        return redirect()->route('signin.create')->with('success', 'You have been logged out successfully.');
    }

    public function destroy(string $id)
    {
        //
    }
}



