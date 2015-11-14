<!-- 
 The file for the Arr class

 @author     Emeka Osuagwu <emekaosuagwuandela0@gmail.com>
 @copyright  2015 Emeka Osuagwu
 @license    MIT License <http://opensource.org/licenses/MIT>   

 @CodeFuntion: Header section houses.

 Logo
 Sign up
 Sign in
 Search bar
 Top navigation
 -->

<div class="header">
    <div class="col-sm-8 header-left">
        <div class="logo">
            <a href="index.html">
                <img src="{{ asset('res/images/logo.png') }}" alt=""/>
            </a>
        </div>
        
        <div class="menu">
            <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
            <ul class="nav" id="nav">
                <li class="active"><a href="index.html">Reality</a></li>
                <li><a href="living.html">Living</a></li>
                <li><a href="education.html">Education</a></li>
                <li><a href="entertain.html">Entertainment</a></li>
                <li><a href="404.html">Mobility</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>

        <!-- start search-->
        <div class="search-box">
            <div id="sb-search" class="sb-search">
                <form>
                    <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                    <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search"> </span>
                </form>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
    
    <div class="col-sm-4 header_right">
        <div id="loginContainer"><a href="#" id="loginButton"><img src="{{ asset('res/images/login.png') }}"><span>Login</span></a>
            <div id="loginBox">                
                <form id="loginForm">
                    <fieldset id="body">
                        <fieldset>
                            <label for="email">Email Address</label>
                            <input type="text" name="email" id="email">
                        </fieldset>
                        <fieldset>
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </fieldset>
                        <input type="submit" id="login" value="Sign in">
                        <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                    </fieldset>
                    <span><a href="#">Forgot your password?</a></span>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="clearfix"></div>
</div>