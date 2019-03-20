@extends('layouts.master')

@section('content')

<div class="container-fluid">
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Member') }}</div>

                <div class="card-body">
                    <form method="POST" action="/create">
                        @csrf
                        {{ csrf_field() }}


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('id') }}</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{ old('id') }}" required autofocus>

                                @if ($errors->has('id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('contact') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" value="{{ old('contact') }}" required autofocus>

                                @if ($errors->has('contact'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('DOB') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" required autofocus>

                                @if ($errors->has('dob'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="district" class="col-md-4 col-form-label text-md-right">{{ __('District') }}</label>

                            <div class="col-md-6">
                                <input id="district" type="text" class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" value="{{ old('district') }}" required autofocus>

                                @if ($errors->has('district'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('district') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="guardian" class="col-md-4 col-form-label text-md-right">{{ __('Guardian') }}</label>

                            <div class="col-md-6">
                                <input id="guardian" type="text" class="form-control{{ $errors->has('guardian') ? ' is-invalid' : '' }}" name="guardian" value="{{ old('guardian') }}" required autofocus>

                                @if ($errors->has('guardian'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('guardian') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="guardian_contact" class="col-md-4 col-form-label text-md-right">{{ __('Guardian contact') }}</label>

                            <div class="col-md-6">
                                <input id="guardian_contact" type="text" class="form-control{{ $errors->has('guardian_contact') ? ' is-invalid' : '' }}" name="guardian_contact" value="{{ old('guardian_contact') }}" required autofocus>

                                @if ($errors->has('guardian_contact'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('guardian_contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="member" class="col-md-4 col-form-label text-md-right">{{ __('Full Member') }}</label>

                            <div class="col-md-6">
                                <input id="member" type="text" class="form-control{{ $errors->has('member') ? ' is-invalid' : '' }}" name="member" value="{{ old('member') }}" required autofocus>

                                @if ($errors->has('member'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('member') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group row">
                            <label for="admit" class="col-md-4 col-form-label text-md-right">{{ __('Admission Status') }}</label>

                            <div class="col-md-6">
                                <input id="admit" type="text" class="form-control{{ $errors->has('admit') ? ' is-invalid' : '' }}" name="admit" required>

                                @if ($errors->has('admit'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('admit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="commission" class="col-md-4 col-form-label text-md-right">{{ __('Commissioned Status') }}</label>

                            <div class="col-md-6">
                                <input id="commission" type="commission" class="form-control" name="commission" required>
                           
                                @if ($errors->has('commission'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('commission') }}</strong>
                                    </span>
                                @endif
                           
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection