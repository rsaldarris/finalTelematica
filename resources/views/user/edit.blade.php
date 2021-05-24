<!-- Created by: Ricardo Saldarriaga -->

@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 padding-20">
            <div class="card">
                <h5 class="card-header" style="color: black;" style="text-align: center;">Edit</h5>
                <div class="card-body">
                    @guest
                        @lang('messages.notAccess')<a href="{{ route('home.index') }}">Telematics</a>
                    @else
                        @if (Auth::user()->getId()==$data['user']['id'] || Auth::user()->getRole()=="admin")
                            <form method="POST" action="{{ route('user.saveEdit') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="user" class="col-md-4 col-form-label text-md-right">@lang('messages.user')</label>

                                    <div class="col-md-6">
                                        <input id="user" type="text" class="form-control @error('user') is-invalid @enderror" name="user" value="{{ $data['user']['user'] }}" required autocomplete="user" autofocus>

                                        @error('user')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('messages.name')</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data['user']['name'] }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="carrera" class="col-md-4 col-form-label text-md-right">@lang('messages.carrera')</label>

                                    <div class="col-md-6">
                                        <!-- <input id="carrera" type="text" class="form-control @error('carrera') is-invalid @enderror" name="carrera" value="{{ old('carrera') }}" required autocomplete="carrera" autofocus> -->
                                        <select name="carrera">
                                            <option value="Medicina" {{ (old("carrera") == "Medicina") ? "selected" : ""}}>@lang('messages.Medicina')</option> 
                                            <option value="Ingenieria" {{ (old("carrera") == "Ingenieria") ? "selected" : ""}}>@lang('messages.Ingenieria')</option>
                                            <option value="Abogacia" {{ (old("carrera") == "Abogacia") ? "selected" : ""}}>@lang('messages.Abogacia')</option>
                                            <option value="Licenciatura" {{ (old("carrera") == "Licenciatura") ? "selected" : ""}}>@lang('messages.Licenciatura')</option>
                                        </select>

                                        @error('carrera')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="comuna" class="col-md-4 col-form-label text-md-right">@lang('messages.comuna')</label>

                                    <div class="col-md-6">
                                        <!-- <input id="comuna" type="text" class="form-control @error('comuna') is-invalid @enderror" name="comuna" value="{{ old('comuna') }}" required autocomplete="comuna" autofocus> -->

                                        <select name="comuna">
                                            <option value="1" {{ (old("comuna") == "1") ? "selected" : ""}}>1</option> 
                                            <option value="2" {{ (old("comuna") == "2") ? "selected" : ""}}>2</option>
                                            <option value="3" {{ (old("comuna") == "3") ? "selected" : ""}}>3</option>
                                            <option value="4" {{ (old("comuna") == "4") ? "selected" : ""}}>4</option>
                                            <option value="5" {{ (old("comuna") == "5") ? "selected" : ""}}>5</option>
                                            <option value="6" {{ (old("comuna") == "6") ? "selected" : ""}}>6</option>
                                            <option value="7" {{ (old("comuna") == "7") ? "selected" : ""}}>7</option>
                                            <option value="8" {{ (old("comuna") == "8") ? "selected" : ""}}>8</option>
                                            <option value="9" {{ (old("comuna") == "9") ? "selected" : ""}}>9</option>
                                            <option value="10" {{ (old("comuna") == "10") ? "selected" : ""}}>10</option>
                                        </select>

                                        @error('comuna')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                        
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data['user']['email'] }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">@lang('messages.password')</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">@lang('messages.confirmpassword')</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <input type="hidden" name="id" value="{{$data['user']['id']}}">

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" id="button_register" class="btn btn-primary">
                                            <b>@lang('messages.edit')</b>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @else
                            @lang('messages.notAccess') <a href="{{ route('home.index') }}">Dulce Repostera</a>
                        @endif    
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
