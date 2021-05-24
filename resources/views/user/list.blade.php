<!-- Created by: Santiago Albisser -->

@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Auth::user()->getRole()=="admin")
                <div class="card bg-light mb-3 text-center">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black">
                            <div class="divider-custom divider-light">
                                <div class="divider-custom-icon">
                                    <form method="POST" action="{{ route('mail.stats') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input name="sobre" type="hidden">
                                        </div>
                                        <button type="submit" id='btn-contact' class="btn text-center text-uppercase text-green" style="background-color: white;">
                                            @lang('messages.emailus')
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </h5>
                    </div>
                </div>
            @endif
            @foreach($data["user"] as $user)
                <div class="card bg-light mb-3 text-center">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black">
                        ID:{{ $user->getId() }} @lang('messages.user'):{{ $user->getUser() }} @lang('messages.name'):{{ $user->getName() }}| @lang('messages.carrera'):{{ $user->getCarrera() }}- @lang('messages.comuna'):{{ $user->getComuna() }}
                        </h5>
                        @if (Auth::user()->getRole()=="admin")
                            <a href="{{ route('user.edit',$user->getId()) }}" id="button_go" class="btn btn-primary">@lang('messages.edit')</messagges></a>
                        @endif
                    </div>
                </div>
            @endforeach  
        </div>
    </div>
</div>
@endsection