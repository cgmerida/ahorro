<form action="{{ route('login.post') }}" id="loginForm" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Ingrese su Usuario">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña">
    </div>

    <div class="other-actions row">
        <div class="col-4">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                <label class="form-check-label" for="rememberMe">Recuerdame</label>
            </div>
        </div>
        <div class="col-8 text-right">
            <a href="{{route('forgot-password.index')}}" class="forgot-link">¿Olvidaste tú contraseña?</a>
        </div>
    </div>
    <button class="btn btn-theme btn-full">Iniciar Session</button>
</form>