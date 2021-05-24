<!-- Created by: Santiago Albisser -->

@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card bg-light mb-3 text-center">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black">
                        @lang('messages.comuna')["1"]["Medicina"] : {{$data["1"]["Medicina"]}}%<br>
                        @lang('messages.comuna')["1"]["Ingenieria"]: {{$data["1"]["Ingenieria"]}}%<br>
                        @lang('messages.comuna')["1"]["Abogacia"]: {{$data["1"]["Abogacia"]}}%<br>
                        @lang('messages.comuna')["1"]["Licenciatura"]: {{$data["1"]["Licenciatura"]}}%<br>
                        @lang('messages.comuna')["1"]["cantidad"]: {{$data["1"]["cantidad"]}}%<br>
                        <br>
                        @lang('messages.comuna')["2"]["Medicina"]: {{$data["2"]["Medicina"]}}%<br>
                        @lang('messages.comuna')["2"]["Ingenieria"]: {{$data["2"]["Ingenieria"]}}%<br>
                        @lang('messages.comuna')["2"]["Abogacia"]: {{$data["2"]["Abogacia"]}}%<br>
                        @lang('messages.comuna')["2"]["Licenciatura"]: {{$data["2"]["Licenciatura"]}}%<br>
                        @lang('messages.comuna')["2"]["cantidad"]: {{$data["2"]["cantidad"]}}%<br>
                        <br>
                        @lang('messages.comuna')["3"]["Medicina"]: {{$data["3"]["Medicina"]}}%<br>
                        @lang('messages.comuna')["3"]["Ingenieria"]: {{$data["3"]["Ingenieria"]}}%<br>
                        @lang('messages.comuna')["3"]["Abogacia"]: {{$data["3"]["Abogacia"]}}%<br>
                        @lang('messages.comuna')["3"]["Licenciatura"]: {{$data["3"]["Licenciatura"]}}%<br>
                        @lang('messages.comuna')["3"]["cantidad"]: {{$data["3"]["cantidad"]}}%<br>
                        <br>
                        @lang('messages.comuna')["4"]["Medicina"]: {{$data["4"]["Medicina"]}}%<br>
                        @lang('messages.comuna')["4"]["Ingenieria"]: {{$data["4"]["Ingenieria"]}}%<br>
                        @lang('messages.comuna')["4"]["Abogacia"]: {{$data["4"]["Abogacia"]}}%<br>
                        @lang('messages.comuna')["4"]["Licenciatura"]: {{$data["4"]["Licenciatura"]}}%<br>
                        @lang('messages.comuna')["4"]["cantidad"]: {{$data["4"]["cantidad"]}}%<br>
                        <br>
                        @lang('messages.comuna')["5"]["Medicina"]: {{$data["5"]["Medicina"]}}%<br>
                        @lang('messages.comuna')["5"]["Ingenieria"]: {{$data["5"]["Ingenieria"]}}%<br>
                        @lang('messages.comuna')["5"]["Abogacia"]: {{$data["5"]["Abogacia"]}}%<br>
                        @lang('messages.comuna')["5"]["Licenciatura"]: {{$data["5"]["Licenciatura"]}}%<br>
                        @lang('messages.comuna')["5"]["cantidad"]: {{$data["5"]["cantidad"]}}%<br>
                        <br>
                        @lang('messages.comuna')["6"]["Medicina"]: {{$data["6"]["Medicina"]}}%<br>
                        @lang('messages.comuna')["6"]["Ingenieria"]: {{$data["6"]["Ingenieria"]}}%<br>
                        @lang('messages.comuna')["6"]["Abogacia"]: {{$data["6"]["Abogacia"]}}%<br>
                        @lang('messages.comuna')["6"]["Licenciatura"]: {{$data["6"]["Licenciatura"]}}%<br>
                        @lang('messages.comuna')["6"]["cantidad"]: {{$data["6"]["cantidad"]}}%<br>
                        <br>
                        @lang('messages.comuna')["7"]["Medicina"]: {{$data["7"]["Medicina"]}}%<br>
                        @lang('messages.comuna')["7"]["Ingenieria"]: {{$data["7"]["Ingenieria"]}}%<br>
                        @lang('messages.comuna')["7"]["Abogacia"]: {{$data["7"]["Abogacia"]}}%<br>
                        @lang('messages.comuna')["7"]["Licenciatura"]: {{$data["7"]["Licenciatura"]}}%<br>
                        @lang('messages.comuna')["7"]["cantidad"]: {{$data["7"]["cantidad"]}}%<br>
                        <br>
                        @lang('messages.comuna')["8"]["Medicina"]: {{$data["8"]["Medicina"]}}%<br>
                        @lang('messages.comuna')["8"]["Ingenieria"]: {{$data["8"]["Ingenieria"]}}%<br>
                        @lang('messages.comuna')["8"]["Abogacia"]: {{$data["8"]["Abogacia"]}}%<br>
                        @lang('messages.comuna')["8"]["Licenciatura"]: {{$data["8"]["Licenciatura"]}}%<br>
                        @lang('messages.comuna')["8"]["cantidad"]: {{$data["8"]["cantidad"]}}%<br>
                        <br>
                        @lang('messages.comuna')["9"]["Medicina"]: {{$data["9"]["Medicina"]}}%<br>
                        @lang('messages.comuna')["9"]["Ingenieria"]: {{$data["9"]["Ingenieria"]}}%<br>
                        @lang('messages.comuna')["9"]["Abogacia"]: {{$data["9"]["Abogacia"]}}%<br>
                        @lang('messages.comuna')["9"]["Licenciatura"]: {{$data["9"]["Licenciatura"]}}%<br>
                        @lang('messages.comuna')["9"]["cantidad"]: {{$data["9"]["cantidad"]}}%<br>
                        <br>
                        @lang('messages.comuna')["10"]["Medicina"]: {{$data["10"]["Medicina"]}}%<br>
                        @lang('messages.comuna')["10"]["Ingenieria"]: {{$data["10"]["Ingenieria"]}}%<br>
                        @lang('messages.comuna')["10"]["Abogacia"]: {{$data["10"]["Abogacia"]}}%<br>
                        @lang('messages.comuna')["10"]["Licenciatura"]: {{$data["10"]["Licenciatura"]}}%<br>
                        @lang('messages.comuna')["10"]["cantidad"]: {{$data["10"]["cantidad"]}}%<br>


                        </h5>
                    </div>
                </div>
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