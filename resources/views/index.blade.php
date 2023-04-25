<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Web</title>

    @vite([
        'resources/js/app.js',
        'resources/css/app.css',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'    
    ])
</head>
<body class="bg-secondary">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-sm text-light bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SISTEMA  WEB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Consulta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="main bg-white">
            <div class="container px-5">
                <div class="row">
                    <div class="col mt-3">
                        <h4>Cadastrar - Agendamento de Potenciais Clientes</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Sistema utilizado para agendamento de serviços.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form>
                            <div class="mb-3 form-group">
                                <label for="exampleFormControlInput1">Nome:</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="exampleFormControlInput1">Telefone:</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="(xx)xxxxx-xxxx">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="exampleFormControlSelect1">Origem:</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Celular</option>
                                    <option>Telefone</option>
                                    <option>Email</option>
                                </select>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="exampleFormControlInput1">Data:</label>
                                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="(xx)xxxxx-xxxx">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="exampleFormControlTextarea1">Observação</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mb-5">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>