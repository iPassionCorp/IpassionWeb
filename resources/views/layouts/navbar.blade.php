<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('/images/logo.png') }}" width="56" id="logo">
        <span>iPassion</span>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          <a class="nav-link @if(Request::path() == '/') active @endif" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link @if(Request::path() == 'development') active @endif" href="{{ url('/development') }}">Development</a>
          </li>
          <li class="nav-item">
          <a class="nav-link @if(Request::path() == 'devops') active @endif" href="{{ url('/devops') }}">Devops</a>
          </li>
          <li class="nav-item">
          <a class="nav-link @if(Request::path() == 'careers') active @endif" href="{{ url('/careers') }}">Careers</a>
          </li>
          <li class="nav-item">
          <a class="nav-link @if(Request::path() == 'contact-us') active @endif" href="{{ url('/contact-us') }}">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>