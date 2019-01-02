<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
   <div class="container">
      <a class="navbar-brand" href="{{ url('/')}}">e_bid <i class="fas fa-shopping-cart"></i> </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/')}}">Home</a>
               </li>
               <li class="nav-item">
                  <a href="#" class="nav-link">Sign up <i class="fas fa-user-plus"></i></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" onclick="logout()">Logout <i class="fas fa-sign-out-alt"></i></a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="{{ url('/home') }}">Login <i class="fas fa-user-lock"></i></a>
               </li>
            </ul>
         </div>
   </div>
</nav>
