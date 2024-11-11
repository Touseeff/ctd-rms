@extends('layout.main_layout')
@section('register-content')
<div class="row">
    <div class="col-12">
        <table class="body-wrap" 
        style="font-family: 'Roboto', sans-serif; display: flex;
    justify-content: center; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f7f0f0; margin: 0; ">
            <tr>
                <td></td>
                <td class="container" width="600" style="max-width: 600px; margin: 0 auto;">
                    <div class="content" style="padding: 20px;">
                        <table class="main" width="100%" cellpadding="0" cellspacing="0" style="border-radius: 10px; box-shadow: 0 3px 15px rgba(30,32,37,.06); background-color: #f7f0f0;">
                            <tr>
                                <td class="content-wrap" style="padding: 30px; background-color: #ffffff; border-radius: 10px; color: #000000;">
                                    <div style="text-align: center; margin-bottom: 20px;">
                                        {{-- Uncomment this line to display a logo --}}
                                        {{-- <img src="{{ $logoSrc }}" alt="Logo" height="50"> --}}
                                    </div>
                                    <h2 style="text-align: center; font-size: 24px; font-weight: 600; margin-bottom: 20px;">
                                        Login Successful
                                    </h2>
                                    <p style="text-align: center; font-size: 16px; margin: 0 0 20px;">
                                        Dear {{ $details['first_name'] }},
                                    </p>
                                    <p style="text-align: center; font-size: 16px; margin: 0 0 20px;">
                                        Thank you for logging in! We’re excited to have you with us.
                                    </p>
                                    <p style="text-align: center; font-size: 14px; margin-top: 30px; color: #878a99;">
                                        If you did not attempt to log in, please disregard this email or contact our support team.
                                    </p>
                                    <p style="text-align: center; font-size: 16px; margin-top: 20px;">
                                        Regards,<br>
                                        Craftech Digital
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection
