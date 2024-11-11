@extends('layout.main_layout')
@section('register-content')

<div class="row">
    <div class="col-12">
        <table class="body-wrap" 
        style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f7f0f0; margin: 0; display: flex;
    justify-content: center; ">
            <tr>
                <td></td>
                <td class="container" width="600" style="max-width: 600px; margin: 0 auto;">
                    <div class="content" style="padding: 20px; background-color: #ffffff; box-shadow: 0 3px 15px rgba(30,32,37,.06); border-radius: 7px;">
                        <table width="100%" style="border: none;">
                            <tr>
                                <td style="text-align: center; margin-bottom: 15px;">
                                    <img src="assets/images/logo-dark.png" alt="" height="23">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size: 24px; text-align: center;">
                                    <h4 style="font-weight: 500;">Please Verify your email</h4>
                                </td>
                            </tr>
                            <tr>
                                <td style="color: #878a99; font-size: 15px; text-align: center;">
                                    <p>An email to verify an email.</p>
                                    <p>Please validate your email address to get started using the product.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    {{-- <h1>{{$details['token']}}</h1>? --}}
                                    <a href="{{ route('token.verify', ['token' => $details['token'] ?? null ]) }}"
                                        style="font-size: .8125rem; color: #FFF; text-decoration: none; font-weight: 400; background-color: #405189; padding: .5rem .9rem; border-radius: .25rem;">
                                        Verify Your Email
                                    </a>
                                    {{-- <a href="{{ route('token.verify', ['token' => $details['token'] ?? "NuLL"]) }}"
                                        style="font-size: .8125rem; color: #FFF; text-decoration: none; font-weight: 400; background-color: #405189; padding: .5rem .9rem; border-radius: .25rem;">
                                        Verify Your Email
                                    </a> --}}
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
