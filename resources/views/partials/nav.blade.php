    <nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
        <div class="container">
            <!-- Nav superior -->
            <a  class="navbar-brand" href="{{route('home')}}" >
                <img src="/img/Logo.jpg" alt="Manheim Logo" class="main-logo">
            </a>
            <button class="navbar-toggler" type="button" 
                data-toggle="collapse" 
                data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link {{ CommonHelper::setActive('home') }}"
                        href="{{route('home')}}">
                        @lang('Home')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ CommonHelper::setActive('about') }}"
                    href="{{route('about')}}">
                    @lang('About')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ CommonHelper::setActive('contact') }}"
                    href="{{route('contact')}}">
                    @lang('Contact')</a>
                </li>
                              
            </ul>
        </div>    
    </div>
    </nav>
   