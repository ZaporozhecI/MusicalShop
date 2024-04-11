
<style>

    .form-background {
        background-color: #fff685;
        border-radius: 40px;
        padding: 10%;
        margin: 1% auto; 
        width: 80%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
            </style>
             @extends('layout')
             @section('content')
            @if(!Auth::user())
            <div class="container mt-4" style="padding: 10%;">
            <h2 style="text-align: center; color:#0049B7">Авторизация</h2>
            <div class="form-background">
            <form class="d-flex" method="post" action={{url('auth')}}>
            @csrf
            
            <div style="text-align: center;">
            <input class="form-control me-2" type="text" placeholder="Логин" name="email" aria-label="Логин"
            value="{{old('email')}}"/>
            </div>
            
            <div style="text-align: center;">
            <input class="form-control me-2" type="password" placeholder="Пароль" name="password" aria-label="Пароль"
            value="{{old('password')}}"/>
            </div>
            <br>
            <div style="text-align: center;">
            <button class="btn btn-outline-success" type="submit">Войти</button> 
            </div>       
            </form>
            </div>
        </div>
            @else
            <style>
    
    .logout {
        background-color: #fff685;
        border-radius: 40px;
        padding: 5%;
        margin: 20% auto; 
        width: 45%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
                
                        </style>
            <ul class="navbar-nav">
                <div class="logout">
                <a class="nav-link active" href="/login">
                    <i class="fa fa-user" style="font-size:20px;colour:white;"></i>
                    <span>Здравствуйте,</span>{{Auth::user()->name}}</a> 
                    <a class="btn btn-outline-success my-2 my-sm-0" href="{{url('logout')}}">Выйти</a>
                </div>
            </ul>
            @endif
            @endsection 
            
