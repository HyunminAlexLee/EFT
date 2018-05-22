<style media="screen">
/*Header*/
header {
    height:50px;
    width: 100%;
    position: fixed;
    top: 0;
    border-bottom: 1px solid #c9c9c9;
    z-index: 5;
    background: rgba(255,255,255,1);
}
nav ul, li {
    display: inline-block;
}
nav a{
    font-size: 1rem;
    margin: 5px;
    font-family: 'Jeju Gothic';
    display: inline-block;
    padding: 10px;
}
#nav-link, #nav-login{
    display: inline-block;
}
#nav-link {
    min-width: 320px;
}
#nav-login {
    position: absolute;
    right: 10px;
}
nav a.nav-link {
}
nav a.login-link{
    margin-top: 1.0rem;
    padding: 0.4rem 0.4rem;
    border: 3px solid #c9c9c9;
}
.logo-text {
    font-size: 1.4rem;
    font-family: 'Jeju Gothic';
    display: inline-block;
    padding: 1.4rem 0.5rem;
    max-width: 120px;
}
.logo-text img {
    width:25%;
    display: inline-block;
    vertical-align: middle;
    margin-right: 10px;
}


/*Header End*/
</style>
<header>
    <nav>
        <div class="container-fluid">
            <div class="logo-text">
                <img src="/images/logo_shape.png" /><span>POOMAT</span>
            </div>
            <!--
            <div id="nav-login">
                <a class="login-link" href="/about">LOGIN</a>
                <a class="login-link" href="/">SIGN-UP</a>
            </div>
        -->
            <div id="nav-link" class="hidden-xs">
                <a class="nav-link" id="about-link" href="/home/#about">ABOUT</a>
                <a class="nav-link" id="contact-link" href="/home/#contact">CONTACT</a>
                <a class="nav-link" id="apply-link" href="/worker/apply">BECOME A HELPER</a>
            </div>
        </div>
    </nav>
</header>
