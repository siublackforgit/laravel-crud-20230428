 

<nav class="navbar navbar-default bg-light"> 

    <div class="container-fluid"> 
    
    <div class="navbar-header "> 
    
    <a class="navbar-brand " href="/student">Ricky's Crud Site</a> 
    
    </div> 
    
    <ul class="nav "> 
    @auth
    <li class="nav-item"style="margin-right:20px;"><a href="/" style="text-decoration:none;">Home</a></li>
    <li class="nav-item" style="margin-right:20px;"><a href="/student" style="text-decoration:none;">index</a></li> 
    <li class="nav-item" style="margin-right:20px;"><a href="/student/create" style="text-decoration:none;">Create</a></li> 
    <li class="nav-item" style="text-decoration:none;"><a href="{{route('logout')}}" style="text-decoration:none;">Logout</a></li>
    @else
    <li class="nav-item" style="text-decoration:none;"><a href="{{route('registration')}}" style="text-decoration:none;">Registration</a></li>
    <li class="nav-item" style="text-decoration:none;"><a href="{{route('login')}}" style="text-decoration:none;">Login</a></li>
    <li class="nav-item"style="margin-right:20px;"><a href="/" style="text-decoration:none;">Home</a></li>
    @endauth
    </ul> 
    
    </div> 
    
    </nav> 