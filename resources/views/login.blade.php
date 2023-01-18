<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/login.css')}}">

    <title>Docs</title>
</head>

<body>
    <div class="container">
        <div class="form-signin border rounded shadow">
            <h2 class="text-center fw-bold text-decoration-underline">DOCs</h2>
            @if ($mensagem = Session::get('erro'))
                <div class="text-center">
                    <div class="alert alert-danger" role="alert">
                        {{$mensagem}}
                      </div>
                </div>
                @endif
            <form class="row g-3" action="{{route('login')}}" method="POST">
                @csrf
                <div class="col-md-12">
                    <div class="form-floating">
                        <input class="form-control" type="email" name="email" id="email">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                        <input class="form-control" type="password" name="password" id="password">
                        <label for="pass">Senha</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                        <select class="form-select" name="tipo" id="tipo">
                            <option value="">Selecione</option>
                            <option value="1">Administrador</option>
                            <option value="2">Empresa</option>
                            <option value="3">Prestador</option>
                        </select>
                        <label for="tipo">Selecione o tipo do usuário</label>
                    </div>
                </div>
                <p class="text-center"> <a href="">Esqueci minha senha</a> </p>
                <div class="col-md-12 text-center">
                    <button class="btn btn-success" type="submit">Log In</button>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
            integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </footer>
</body>

</html>
