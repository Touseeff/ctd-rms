<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\AuthMail;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    // return view('sign_up');
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     */
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
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
