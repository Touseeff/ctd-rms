<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\AuthMail;
use App\Models\Notification;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
=======
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Log;
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        return view('user_dashboard.user_dashboard');
=======
        //
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        // return view('sign_up');
=======
    // return view('sign_up');
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(Request $request)
=======
    //     public function store(UserRequest $request)
//     {

    //         $existingUser = User::where('email', $request->email)->first();

    //         if ($existingUser) {

    //             return redirect()->route('signup.create')->with('error', 'Email is already registered. Please use a different email.');
//         }


    //         $user = new User();
//         $user->role_id = 5;
//         $user->first_name = $request->username;
//         $user->email = $request->email;
//         $user->password = password_hash($request->password, PASSWORD_DEFAULT);

    //         if ($user->save()) {
//             $notification_obj = new Notification;
//             // $notification_obj->user_id = $last_insert_id;
//             $notification_obj->notification_type = "User Registration";
//             if ($notification_obj->save()) {
//                 $details = [
//                     'title' => 'Registration Successful',
//                     'first_name' => $request->username,
//                     'message' => 'Thank you for registering! We’re excited to have you with us.',
//                     'cc' => 'tauseefdevelopment000@gmail.com'
//                 ];
//                 $template = 'emails.registration_notification';


    //                $mail =  Mail::to($user->email)
//                     ->cc($details['cc'])
//                     ->send(new AuthMail($details, $template));

    //                 Log::info('Registration successful for user: ' . $user->email);
// if($mail){

    //     return redirect()->route('signin.create')->with('success', 'User registered successfully!');
// }
//             }
//         } else {
//             Log::error('User registration failed for: ' . $user->email);
//             return redirect()->route('signup.create')->with('error', 'Failed to register user. Please try again.');
//         }
//     }

    // public function store(UserRequest $request)
    // {
    //     $existingUser = User::where('email', $request->email)->first();

    //     if ($existingUser) {
    //         return redirect()->route('signup.create')->with('error', 'Email is already registered. Please use a different email.');
    //     }

    //     $user = new User();
    //     $user->role_id = 5;
    //     $user->first_name = $request->username;
    //     $user->email = $request->email;
    //     $user->password = password_hash($request->password, PASSWORD_DEFAULT);

    //     if ($user->save()) {
    //         $notification_obj = new Notification;
    //         $notification_obj->notification_type = "User Registration";

    //         if ($notification_obj->save()) {
    //             $details = [
    //                 'title' => 'Registration Successful',
    //                 'first_name' => $request->username,
    //                 'message' => 'Thank you for registering! We’re excited to have you with us.',
    //                 'cc' => 'tauseefdevelopment000@gmail.com'
    //             ];
    //             $template = 'emails.registration_notification';

    //             try {
    //                 Mail::to($user->email)
    //                     ->cc($details['cc'])
    //                     ->send(new AuthMail($details, $template));

    //                 Log::info('Registration successful for user: ' . $user->email);
    //                 return redirect()->route('signin.create')->with('success', 'User registered successfully!');
    //             } catch (\Exception $e) {
    //                 Log::error('Failed to send registration email to ' . $user->email . ': ' . $e->getMessage());
    //                 return redirect()->route('signup.create')->with('error', 'User registered, but failed to send email notification. Please contact support.');
    //             }
    //         }
    //     } else {
    //         Log::error('User registration failed for: ' . $user->email);
    //         return redirect()->route('signup.create')->with('error', 'Failed to register user. Please try again.');
    //     }
    // }




    public function store(UserRequest $request)
{
    $existingUser = User::where('email', $request->email)->first();

    if ($existingUser) {
        return redirect()->route('signup.create')->with('error', 'Email is already registered. Please use a different email.');
    }

    $user = new User();
    $user->role_id = 5;
    $user->first_name = $request->username;
    $user->email = $request->email;
    $user->password = password_hash($request->password, PASSWORD_DEFAULT);

    if ($user->save()) {
        $notification_obj = new Notification;
        $notification_obj->notification_type = "User Registration";

        if ($notification_obj->save()) {
            $details = [
                'title' => 'Registration Successful',
                'first_name' => $request->username,
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
            return redirect()->route('signin.create')->with('success', 'User registered successfully!');
        }
    } else {
        Log::error('User registration failed for: ' . $user->email);
        return redirect()->route('signup.create')->with('error', 'Failed to register user. Please try again.');
    }
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
    {
        //
    }

    /**
<<<<<<< HEAD
     * Display the specified resource.
     */
    public function showUser()
    {

    }


    public function viewProfile(string $id)
    {
        // $user = User::find($id);
        $user = User::with('department', 'section')->where('id', $id)->first();
        return view('user_dashboard.show_user_profile_details', compact('user'));
    }



    public function createUser()
    {

    }


    public function storeUser(Request $request)
    {

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
            return redirect()->route('user_dashboard')->with('error', 'User not found.');
        }

        // Render the view with the user data and other variables

        return view('user_dashboard.edit_user_profile', compact('user', 'url', 'title'));
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
            return redirect()->route('user.dashboard')->with('success', 'User record updated successfully.');
        } elseif (!$isModified) {
            return redirect()->route('user.dashboard')->with('info', 'No changes detected.');
        } else {
            return redirect()->route('user.dashboard')->with('error', 'Failed to update user. Please try again.');
        }
    }



    /**
     * Show the form for editing the specified resource.
     */


=======
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a

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
<<<<<<< HEAD

    public function userLogout()
    {
        Auth::logout();
        return redirect()->route('signin.create')->with('success', 'You have been logged out successfully.');

    }


=======
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
    public function destroy(string $id)
    {
        //
    }
}
