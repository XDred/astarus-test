@extends('layouts.overall')
@section('body')

<div class="wrapper" style="height: auto; min-height: 100%;">

<header class="main-header">
    <a href="{{ url('/') }}" class="logo">
      <span class="logo-mini"><b>ast</b></span>
      <span class="logo-lg"><b>{{ config('app.name', 'Laravel') }}</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          @guest
		  <li class="dropdown">
			  <a href="{{ route('login') }}" class="dropdown-toggle" >
              <i class="fa fa-sign-in"></i>  
            </a>            
          </li>
		  <li class="dropdown">
			  <a href="{{ route('register') }}" class="dropdown-toggle" >
              <i class="fa fa-user-plus"></i>  
            </a>            
          </li>
		  @else
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }}
                  <small>{{ __('Member since') }} {{ Auth::user()->created_at }}</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                </div>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
              </li>
            </ul>
          </li>
          @endguest
          
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
		<li @if(Request::url() === url('/')) class="active"@endif>
          <a href="{{ url('/') }}">
            <i class="fa fa-th"></i> <span>{{ __('Main page') }}</span>
          </a>
        </li>
		@guest
		<li @if(Request::url() === route('login')) class="active"@endif>
          <a href="{{ route('login') }}">
            <i class="fa fa-sign-in"></i> <span>{{ __('Login') }}</span>
          </a>
        </li>
		<li>
          <a href="{{ route('register') }}">
            <i class="fa fa-user-plus"></i> <span>{{ __('Register') }}</span>
          </a>
        </li>
		@else
        
        <li @if(Request::url() === route('upload')) class="active"@endif>
          <a href="{{ route('upload') }}">
            <i class="fa fa-upload"></i> <span>{{ __('Upload') }}</span>
          </a>
        </li>
        <li @if(Request::url() === route('search')) class="active"@endif>
          <a href="{{ route('search') }}">
            <i class="fa fa-search"></i> <span>{{ __('Search') }}</span>
          </a>
        </li>
        @endguest
        
        
        
      </ul>
    </section>
  </aside>
  <div class="content-wrapper" style="min-height: 913px;">
    @yield('content')
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.2.4
    </div>
    <strong>Copyright © 2018 <a href="mailto://hikita.beer@gmail.com">XDred</a>.</strong> All rights reserved.
  </footer>
</div>

@endsection