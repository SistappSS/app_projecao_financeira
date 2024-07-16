<x-guest-layout>
    @section('content-guest')
        <div class="row h-100">
            <div class="col-12 col-md-10 mx-auto my-auto">
                <div class="card auth-card">
                    <div class="position-relative image-side ">
                        <p class=" text-white h2">A SOLUÇÃO QUE VOCÊ PRECISA</p>

                        <p class="white mb-0">
                            Por favor, utilize ao lado suas credenciais de acesso.
                            <br>Se ainda não for um membro,
                            <a href="#" class="text-primary font-weight-bold">cadastre-se</a>.
                        </p>
                    </div>
                    <div class="form-side">
                        <a href="#">
                            <span class="logo-single"></span>
                        </a>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <label class="form-group has-float-label mb-4">
                                <span>E-mail</span>
                                <input class="form-control" type="email" placeholder="financeiro@sistapp.com.br"
                                       id="email" name="email" :value="old('email')" required autofocus/>
                            </label>

                            <label class="form-group has-float-label mb-4">
                                <span>Senha de acesso</span>
                                <input class="form-control" type="password" placeholder="********" id="password"
                                       name="password" required autocomplete="current-password"/>
                            </label>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#">Esqueceu sua senha?</a>
                                <button class="btn btn-primary btn-lg btn-shadow" type="submit">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-guest-layout>
