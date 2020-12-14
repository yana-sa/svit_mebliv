@extends('layouts.default')
@section('content')
<div id="register_form" class="container">
    <h3>Register</h3>

    <div id="loader" style="display: none">
        Processing...
    </div>

    <div id="success" class="alert alert-success" role="alert" style="display:none;">Registration successful. Redirecting...</div>

    <div id="main">
        <div class="alert alert-danger" role="alert" id="error" style="display: none">ERROR OCCURRED!</div>
        <input id='email' type="email" placeholder="email@example.com" class="form-group"><br>
        <input id='password' type="password" placeholder="Your password" class="form-group"><br>
        <button class="btn btn-success" onclick="register()">Register</button>
    </div>
</div>
</body>
<script>
    function register()
    {
        window.document.getElementById("error").style.display = 'none';
        document.getElementById('loader').style.display = 'block';
        document.getElementById('main').style.display = 'none';
        let ema = window.document.getElementById('email').value;
        let pass = window.document.getElementById('password').value;
        let http = new XMLHttpRequest();
        let url = '/register';
        let params = JSON.stringify({email: ema, password: pass});
        http.open('POST', url, true);
        http.setRequestHeader('Content-type', 'application/json');
        http.setRequestHeader('Accept', 'application/json');
        http.onreadystatechange = function() {//Call a function when the state changes.
            if(http.readyState === 4 && http.status === 201) {
                document.getElementById('loader').style.display = 'none';
                document.getElementById('success').style.display = 'block';
                window.location.href = '/';
            } else if (http.readyState === 4 && http.status > 399) {
                let response = JSON.parse(http.responseText);
                window.document.getElementById("error").innerHTML = response.error;
                window.document.getElementById("error").style.display = 'block';
                document.getElementById('loader').style.display = 'none';
                document.getElementById('main').style.display = 'block';
            }
        };
        http.send(params);
    }
</script>
@stop
