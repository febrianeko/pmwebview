<nav class="navbar navbar-default">
<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="{{ url('/') }}">Preventive Maintenance</a>
	</div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
	    	@if (!empty($halaman) && $halaman == 'engineer')
		    <li class="active">
		    	<a href="{{ url('engineer') }}">Engineer</a>
		    	<span class="sr-only">(current)</span>
		    </li>
		    @else
		    <li><a href="{{ url('engineer') }}">Engineer</a></li>
		    @endif
		</ul>

		<ul class="nav navbar-nav">
	    	@if (!empty($halaman) && $halaman == 'about')
	    	<li class="active">
	    		<a href="{{ url('about') }}">About</a>
	    		<span class="sr-only">(current)</span>
	    	</li>
	    	@else
	    	<li><a href="{{ url('about') }}">About</a></li>
	    	@endif
		</ul>		

		<ul class="nav navbar-nav navbar-right">
			@if (!empty($halaman) && $halaman == 'login')
		    <li class="active">
		    	<a href="{{ url('login') }}">Login</a>
		    	<span class="sr-only">(current)</span>
		    </li>
		    @else
		    <li><a href="{{ url('login') }}">Login</a></li>
		    @endif
		</ul>
	</div> <!-- navbar-collapse -->
</div><!--  container-fluid -->
</nav>
