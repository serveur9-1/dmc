
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="{{ route('index') }}"> <img src="{{ asset('/images/logo.PNG') }}" style="height: 60px;"></a>
	    	<form action="#" class="searchform order-sm-start order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
        </form>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item active"><a href="{{ route('index') }}" class="nav-link">Accueil</a></li>
	        	<li class="nav-item"><a href="{{ route('about') }}" class="nav-link">Apropos</a></li>
	        	<li class="nav-item"><a href="{{ route('service') }}" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
