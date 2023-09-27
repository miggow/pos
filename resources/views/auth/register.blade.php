@extends('auth.layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6 col-xl-5 col-md-10 ">
            <div class="card card-default mb-0">
                <div class="card-header pb-0">
                    <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                        <a class="w-auto pl-0" href="/index.html">
                            <img src="images/logo.png" alt="Mono">
                        </a>
                    </div>
                </div>
                <div class="card-body px-5 pb-5 pt-0">
                    <h4 class="text-dark text-center mb-5">{{ __('auth.sign_up') }}</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('do_register') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <input type="text" class="form-control input-lg" id="name"
                                    aria-describedby="nameHelp" placeholder="{{ __('auth.Name') }}" name="name" required>
                            </div>
                            <div class="form-group col-md-12 mb-4">
                                <input type="number" min="0" class="form-control input-lg" id="phone"
                                    aria-describedby="phoneHelp" placeholder="{{ __('auth.phone') }}" name="phone"
                                    required>
                            </div>
                            <div class="form-group col-md-12 mb-4">
                                <input type="email" class="form-control input-lg" id="email"
                                    aria-describedby="emailHelp" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group col-md-12 ">
                                <input type="password" class="form-control input-lg" id="password" name="password"
                                    placeholder="{{ __('auth.password') }}">
                            </div>
                            <div class="form-group col-md-12 ">
                                <input type="password" class="form-control input-lg" id="cpassword"
                                    placeholder="{{ __('auth.confirm') }}" name="cpassword">
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex justify-content-between mb-3">

                                    <div class="custom-control custom-checkbox mr-3 mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label"
                                            for="customCheck2">{{ __('auth.argee') }}</label>
                                    </div>

                                </div>

                                <button type="submit"
                                    class="btn btn-primary btn-pill mb-4">{{ __('auth.sign_up') }}</button>

                                <p>{{ __('auth.already_have') }}
                                    <a class="text-blue" href="{{ route('login') }}">{{ __('auth.sign_in') }}</a>
                                </p>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
