@extends('auth.layout')
@section('content')

    <div class="row justify-content-center">

        <div class="col-lg-6 col-md-10">
            <div class="card card-default mb-0">

                <div class="card-header pb-0">
                    <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                        <a class="w-auto pl-0" href="/index.html">
                            <img src="images/logo.png" alt="Mono">
                        </a>
                    </div>
                </div>
                <div class="card-body px-5 pb-5 pt-0">
                    <h4 class="text-dark mb-6 text-center">{{ __('auth.sign_in') }}</h4>
                    @if (session()->get('message_login'))
                        <div class="alert alert-danger alert-icon" role="alert">
                            <i class="mdi mdi-diameter-variant"></i> {{ session()->get('message_login') }}
                        </div>
                        @php
                            session()->forget('message_login');
                        @endphp
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('do_login') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <input type="email" class="form-control input-lg" id="email" name="email"
                                    aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12 ">
                                <input type="password" class="form-control input-lg" id="password" name="password"
                                    placeholder="{{ __('auth.password') }}">
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="custom-control custom-checkbox mr-3 mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label"
                                            for="customCheck2">{{ __('auth.remember') }}</label>
                                    </div>
                                    <a class="text-color" href="#"> {{ __('auth.forgot') }} </a>
                                </div>
                                <button type="submit"
                                    class="btn btn-primary btn-pill mb-4">{{ __('auth.sign_in') }}</button>
                                <p>{{ __('auth.dont_have_account') }}
                                    <a class="text-blue" href="{{ route('register') }}">{{ __('auth.sign_up') }}</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
