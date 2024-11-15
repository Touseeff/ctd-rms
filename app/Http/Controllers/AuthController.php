<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\AuthMail;
use App\Mail\LoginMail;
use App\Mail\NewPasswordMail;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPasswordVerificationMail;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard');
        // return "Dashmoard"
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('login');
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
     * Matching the specified resource in storage.
     */
    public function signinMatching(Request $request)
    {
        // $validatedData = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],

        // ]);
// dd($request->toArray());
        $credentials = $request->only('email', 'password');

        // Find the user by email and password
        $user = User::where('email', $credentials['email'])
            ->where('password', $credentials['password']) // Use separate `where` clauses
            ->first();

        $remember = $request->has('remember');
        if ($user && $remember) {
            Auth::login($user);
            if (Auth::check() && Auth::user()->role_id == 1) {
                $user = Auth::user();
                $user->status = 'active';
                $notification = new Notification();
                $notification->user_id = Auth::user()->id;
                $notification->notification_type = "Super Admin Login";
                if ($notification->save() && $user->save()) {
                    // Prepare email details
                    return view('super_admin_dashboard');
                    // return redirect()->route('user')->with('success', 'User logged in successfully!');
                } else {
                    return redirect()->route('signin.create')->with('error', 'Failed to save login notification. Please try again.');
                }
            } else if (Auth::check() && Auth::user()->role_id == 2) {
                $user = Auth::user();
                $user->status = 'active';
                $notification = new Notification();
                $notification->user_id = Auth::user()->id;
                $notification->notification_type = "Admin Login";

                if ($notification->save() && $user->save()) {
                    // Prepare email details
                    // return view('admin.dashboard');
                    return redirect()->route('admin.dashboard')->with('success', 'User logged in successfully!');
                } else {
                    return redirect()->route('signin.create')->with('error', 'Failed to save login notification. Please try again.');
                }
            } else if (Auth::check() && Auth::user()->role_id == 3) {
                $user = Auth::user();
                $user->status = 'active';
                $notification = new Notification();
                $notification->user_id = Auth::user()->id;
                $notification->notification_type = "HR Login";
                if ($notification->save() && $user->save()) {
                    return redirect()->route('hr.dashboard')->with('success', 'User logged in successfully!');
                } else {
                    return redirect()->route('signin.create')->with('error', 'Failed to save login notification. Please try again.');
                }
            } else if (Auth::check() && Auth::user()->role_id == 4) {
                $user = Auth::user();
                $user->status = 'active';
                $notification = new Notification();
                $notification->user_id = Auth::user()->id;
                $notification->notification_type = "Head Login";
                if ($notification->save() && $user->save()) {
                    // Prepare email details

                    return redirect()->route('head.dashboard')->with('success', 'User logged in successfully!');
                } else {
                    return redirect()->route('signin.create')->with('error', 'Failed to save login notification. Please try again.');
                }
            } else if (Auth::check() && Auth::user()->role_id == 5) {
                $user = Auth::user();
                $user->status = 'active';
                $notification = new Notification();
                $notification->user_id = Auth::user()->id;
                $notification->notification_type = "Mananger Login";

                if ($notification->save() && $user->save()) {
                    // Prepare email details

                    return view('manager_dashboard');
                    // return redirect()->route('user')->with('success', 'User logged in successfully!');
                } else {
                    return redirect()->route('signin.create')->with('error', 'Failed to save login notification. Please try again.');
                }
            } else if (Auth::check() && Auth::user()->role_id == 6) {
                $user = Auth::user();
                $user->status = 'active';
                $notification = new Notification();
                $notification->user_id = Auth::user()->id;
                $notification->notification_type = "Lead Login";
                if ($notification->save()) {
                    // Prepare email details
                    return view('lead_dashboard');
                    // return redirect()->route('user')->with('success', 'User logged in successfully!');
                } else {
                    return redirect()->route('signin.create')->with('error', 'Failed to save login notification. Please try again.');
                }
            } else if (Auth::check() && Auth::user()->role_id == 7) {
                $user = Auth::user();
                $user->status = 'active';
                $notification = new Notification();
                $notification->user_id = Auth::user()->id;
                $notification->notification_type = "Agent Login";

                if ($notification->save() && $user->save()) {
                    // Prepare email details

                    return view('agent_dashboard');
                    // return redirect()->route('hr.dashboard')->with('success', 'User logged in successfully!');
                } else {
                    return redirect()->route('signin.create')->with('error', 'Failed to save login notification. Please try again.');
                }
            } else if (Auth::check() && Auth::user()->role_id == 8) {
                $user = Auth::user();
                // Update user status to 'active'
                $user->status = 'active';

                $notification = new Notification();
                $notification->user_id = Auth::user()->id;
                $notification->notification_type = "User Login";

                if ($notification->save() && $user->save()) {
                    // Prepare email details
                    return view('user_dashboard.user_dashboard');
                    // return redirect()->route('hr.dashboard')->with('success', 'User logged in successfully!');
                } else {
                    return redirect()->route('signin.create')->with('error', 'Failed to save login notification. Please try again.');
                }
            } else {
                return redirect()->route('signin.create')->with('error', 'User role not found. Please contact support.');
            }
        } else {
            return redirect()->route('signin.create')->with('error', 'Please Enter Valid Email and Password Tray Again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function forgotCreate()
    {
        return view('forgot_password');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function userVerify(Request $request)
    {
        // dd($request->toArray());
        $valiedation = $request->validate([
            'email' => 'required|email',
        ]);
        $user_obj = new User();
        $user_obj = User::where('email', $request->email)->first();
        // dd($user_obj->toArray());
        if ($user_obj) {

            $token = $request->_token . rand(10000, 100000000);
            // $token = $user_obj->createToken('Reset Password')->plainTextToken;
            $user_obj->forgot_password_token = $token;
            //    die();
            if ($user_obj->save()) {
                // Prepare email details
                $details = [
                    'subject' => 'Password Reset Link',
                    'first_name' => $user_obj->name,
                    'token' => $token,
                    'cc' => 'tauseefdevelopment000@gmail.com'
                ];
                $template = 'emails.password_reset_link';

                // Send email
                Mail::to($user_obj->email)
                    ->cc($details['cc'])
                    ->send(new ResetPasswordVerificationMail($details, $template));

                Log::info('Password reset link sent to user: ' . $user_obj->email);

                return redirect()->route('forgot.create')->with('success', 'Password reset link has been sent to your email address.');

            } else {
                Log::error('Failed to send password reset link to user: ' . $user_obj->email);
                return redirect()->route('forgot.create')->with('error', 'Failed to send password reset link. Please try again.');
            }

        } else {
            return redirect()->route('signin.create')->with('error', 'User record not found. Please registration first.');
        }



    }

    /**
     * Remove the specified resource from storage.
     */
    public function tokenVerify(Request $request, $token)
    {

        $user_obj = User::where('forgot_password_token', $token)->first();


        if ($user_obj) {
            return view('reset_password')->with('success', 'Token successfully verified')->with('token', $token);
        }

        // if ($user_obj->forgot_password_token === null) {
        //     return redirect()->route('forgot.create')->with('error', 'Token is invalid or expired. Please request a new password reset link.');
        // }


        // $user_obj->forgot_password_token = null;

        // if ($user_obj->save()) {
        //     return view('reset_password')->with('success', 'Token successfully verified')->with('token', $token);
        // }
        else {
            return redirect()->route('forgot.create')->with('error', 'Token is invalid or expired. Please request a new password reset link.');
            // return redirect()->route('forgot.create')->with('error', 'Failed to reset password. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function passwordCreate(Request $request)
    // {
    //     return view('reset_password');
    // }
    public function passwordstore(Request $request)
    {
        // dd($request->toArray());
        // Validate request data
        $validation = $request->validate([
            'password' => 'required|confirmed',
            // 'captcha' => 'accepted' 
        ]);

        // Find user by token
        $user_obj = User::where('forgot_password_token', $request->reset_token)->first();
        // dd($user_obj->toArray());
        if (!$user_obj) {
            return redirect()->route('forgot.create')->with('error', 'Token is invalid or expired. Please request a new password reset link.');
        }

        $notification = new Notification();

        $notification->user_id = $user_obj->id;
        $notification->notification_type = "Create New Password Successfully Updated";

        if ($notification->save()) {
            // Update user password and clear taaaahe reset token
            $user_obj->password = $request->password;
            // die();
            $user_obj->forgot_password_token = null;
            // dd($user_obj->toArray());
            if ($user_obj->save()) {
                // Prepare email details
                $details = [
                    'subject' => 'Password Reset Link',
                    'first_name' => $user_obj->name,
                    'cc' => 'tauseefdevelopment000@gmail.com'
                ];

                $template = 'emails.new_password_create';

                try {
                    // Send email
                    Mail::to($user_obj->email)
                        ->cc($details['cc'])
                        ->send(new NewPasswordMail($details, $template));

                    Log::info('Password reset link sent to user: ' . $user_obj->email);
                    return redirect()->route('signin.create')->with('success', 'Password reset successful. Please login with your new password.');
                } catch (\Exception $e) {
                    Log::error('Failed to send password reset email: ' . $e->getMessage());
                    return redirect()->route('forgot.create')->with('error', 'Password reset successful, but failed to send confirmation email. Please contact support.');
                }
            } else {
                return redirect()->route('forgot.create')->with('error', 'Failed to reset password. Please try again.');
            }
        } else {
            return redirect()->route('forgot.create')->with('error', 'Failed to create notification. Please try again.');
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
