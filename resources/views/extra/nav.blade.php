        <div class="container ">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand header_log" href="{{ route('welcome') }}"><img src="image/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link mr_20" href="{{ route('welcome') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr_20" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('contact') }}">Contact Us</a>
                        </li>

                        <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="btn mrl_10 btn-outline-success my-2 my-sm-0 btn-primary"  href="{{ route('login') }}">log in</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-outline-success my-2 my-sm-0 btn-primary" href="{{ route('register') }}"  >Sign Up</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
                        
                        
                        <li>

                            <button style="height:39px;width:60px;background:#6f86c4; border-redious:10px; margin-left:20px;cursor: pointer; "><a href="{{ route('cart') }}" style="color:#f1f1f1;"><i class="fas fa-cart-plus"><span> -0</span></i></a></button>

                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input type="text" placeholder="Search.." name="search" style="border:2px solid #bcbcbc;padding:6px;">
                        <button type="submit" style="height:39px; width:100%; background:#3264ea; color:#f1f1f1;  cursor: pointer; "><i class="fa fa-search"></i></button>

                    </form>

                </div>
            </nav>
        </div>
        <!--bootstrap modal-->

        <div class="log_modal">
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form action="">


                                <div class="container">
                                    <label for="uname"><b>Username</b></label>
                                    <input type="text" placeholder="Enter Username" name="uname" required>

                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="psw" required>

                                    <button type="submit" class="button_m">Login</button>
                                    <label>
                                              <input type="checkbox" checked="checked" name="remember"> Remember me 
                                           </label>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Sing up modal-->
        <div class="log_modal">
            <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form action="action_page.php" style="border:1px solid #ccc">
                                <div class="container">
                                    <h1>Sign Up</h1>
                                    <p>Please fill in this form to create an account.</p>
                                    <hr>

                                    <label for="email"><b>Email</b></label>
                                    <input type="text" placeholder="Enter Email" name="email" required>

                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="psw" required>

                                    <label for="psw-repeat"><b>Repeat Password</b></label>
                                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                                    <label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

                                    <div class="clearfix">
                                        <button type="button" class="signupbtn">Sign Up</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Sing up modal-->