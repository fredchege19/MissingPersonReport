<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fargo Courier Reset Password</title>
    <link rel="stylesheet" type="text/css" href="../log/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../log/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../log/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="../log/css/iofrm-theme18.css">
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="/">
                <div class="logo">
                    <img class="logo-size" src="../log/images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="../log/images/graphic3.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Password Reset</h3>
                        <p>To reset your password, enter the email address you use to sign in to Fargo Courier</p>
                        <form method="POST" action="{{ route('password.email') }}"> 
                        @csrf
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-button full-width">
                                <button id="submit" type="submit" class="ibtn btn-forget">Send Reset Link</button>
                            </div>
                        </form>
                    </div>
                    <div class="form-sent">
                        <div class="tick-holder">
                            <div class="tick-icon"></div>
                        </div>
                        <h3>Password link sent</h3>
                        <p>Please check your inbox <a href="http://brandio.io/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4d24222b3f200d24222b3f203928203d212c3928632422">[email&#160;protected]</a></p>
                        <div class="info-holder">
                            <span>Unsure if that email address was correct?</span> <a href="#">We can help</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/forget18.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2019 07:53:19 GMT -->
</html>