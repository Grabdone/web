
<div class="navbar">
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width:100%">
    <a class="navbar-brand" href="{{ url('/adminheadlines') }}">Cric</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/adminheadlines') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Highlights</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/admingallery') }}">Gallery</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('/adminheadlines') }}"><span class="glyphicon glyphicon-log-in"></span> saad_yousaf@gmail.com</a></li>
      <li class="nav-item">
          <a class="nav-link " href="{{ url('/main/logout') }}">Logout</a>
        </li>
    </ul>
    </div>
  </nav>
  </div>