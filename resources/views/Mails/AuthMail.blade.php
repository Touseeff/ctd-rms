@extends('layout.main_layout')
@section('register-content')
    <div class="row">
        <!--end col-->
        <div class="col-12">
            <table class="body-wrap"
                style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f7f0f0; margin: 0; display: flex;   justify-content: center; ">
                <tr style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                    <td style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;"
                        valign="top"></td>
                    <td class="container" width="600"
                        style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;"
                        valign="top">
                        <div class="content"
                            style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                            <table class="main" width="100%" cellpadding="0" cellspacing="0"
                                style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 10px; margin: 0; border: none; box-shadow: 0 3px 15px rgba(30,32,37,.06);">
                                <tr style="font-family: 'Roboto', sans-serif; font-size: 14px; margin: 0;">
                                    <td class="content-wrap"
                                        style="font-family: 'Roboto', sans-serif; box-sizing: border-box; color: #000000; font-size: 14px; vertical-align: top; margin: 0; padding: 30px; border-radius: 10px; background-color: #ffffff;"
                                        valign="top">
                                        <div style="text-align: center; margin-bottom: 20px;">
                                            {{-- <img src="{{ $logoSrc }}" alt="Logo" height="50"> --}}
                                        </div>
                                        <h2
                                            style="text-align: center; font-size: 24px; font-weight: 600; margin: 0 0 20px;">
                                            Registration Successful</h2>
                                        <p style="text-align: center; font-size: 16px; margin: 0; padding-bottom: 20px;">
                                            Dear {{ $details['first_name'] ?? 'User' }},
                                        </p>
                                        <p style="text-align: center; font-size: 16px; margin: 0; padding-bottom: 20px;">
                                            Thank you for registering with us. We are excited to have you on board.
                                        </p>
                                        <p style="text-align: center; font-size: 14px; margin-top: 30px; color: #878a99;">
                                            If you did not register, please ignore this email.
                                        </p>
                                        <p style="text-align: center; font-size: 16px; margin: 0; padding-top: 20px;">
                                            Regards,<br>
                                            Craftech Digital.
                                        </p>
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </td>
                </tr>
            </table>
            <!-- end table -->
        </div>
        <!--end col-->
    </div>
@endsection
<!-- end row -->
