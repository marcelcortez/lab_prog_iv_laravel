<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="js/login.js"></script>
    <title>Menu</title>
</head>
<body>
  <header>
    <nav class="navbar justify-content-start">
      <div>
        <button class="btn bg-transparent text-white" type="button" id="btn-home" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Home
        </button>
      </div>
      <div class="dropdown">
        <button class="btn bg-transparent text-white  dropdown-toggle" type="button" id="btn-cliente" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cliente
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="cadcliente.html">Cadastrar</a>
          <a class="dropdown-item" href="#">Localizar</a>
        </div>
      </div>

      <div class="dropdown">
        <button class="btn bg-transparent text-white  dropdown-toggle" type="button" id="btn-cliente" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Animal
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="cadAnimal.html">Cadastrar</a>
          <a class="dropdown-item" href="#">Localizar</a>
        </div>
      </div>

        <div class="dropdown">
          <button class="btn bg-transparent text-white  dropdown-toggle" type="button" id="btn-cliente" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            M??dico
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="cadMedico.html">Cadastrar</a>
            <a class="dropdown-item" href="#">Localizar</a>
          </div>
        </div>

          <div class="dropdown">
            <button class="btn bg-transparent text-white  dropdown-toggle" type="button" id="btn-cliente" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Consulta
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="agendConsulta.html">Agendar</a>
              <a class="dropdown-item" href="#">Localizar</a>
            </div>
          </div>

          <div class="dropdown">
            <button class="btn bg-transparent text-white  dropdown-toggle" type="button" id="btn-cliente" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Exame
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="agendExame.html">Agendar</a>
              <a class="dropdown-item" href="#">Localizar</a>
            </div>
          </div>

          <div class="dropdown">
            <button class="btn bg-transparent text-white  dropdown-toggle" type="button" id="btn-cliente" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Cirurgia
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="agendCirurgia.html">Agendar</a>
              <a class="dropdown-item" href="#">Localizar</a>
            </div>
          </div>

          <div class="dropdown">
            <button class="btn bg-transparent text-white  dropdown-toggle" type="button" id="btn-cliente" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Urg??ncia
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Agendar</a>
              <a class="dropdown-item" href="#">Localizar</a>
            </div>
          </div>

      </div>         
    </nav>
  </header>
    <main class="mainMenu d-flex justify-content-center align-items-center">
      
        <form action="https://acesso.cesmac.edu.br/abertura" method="POST" onsubmit="">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="codCliente">COD Cliente</label>
                    <input type="number" class="form-control" id="codCliente" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="nomeAnimal">Nome Animal</label>
                    <input type="text" class="form-control" id="nomeAnimal" placeholder="Beethoven" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="especie">Esp??cie</label>
                    <input type="text" class="form-control" id="especie" placeholder="Canino" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="raca">Ra??a</label>
                    <input type="text" class="form-control" id="raca" placeholder="Shitsu" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="corAnimal">Cor(es)</label>
                    <input type="text" class="form-control" id="corAnimal" placeholder="Preto" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="porte">Porte</label>
                    <select id="porte" class="form-control" required>
                        <option selected hidden>Escolha</option>
                        <option value="pequeno">Pequeno</option>
                        <option value="medio">M??dio</option>
                        <option value="grande">Grande</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="peso">Peso</label>
                    <input type="number" class="form-control" id="peso" placeholder="Kg" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="altura">Altura</label>
                    <input type="number" class="form-control" id="altura" placeholder="cm" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="nascimento">Data Nascimento</label>
                    <input type="date" class="form-control" id="nascimento" required>
                </div>
            </div>
            </div>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </main>
    <footer class="footer">
      <p class="parag"><img class="HeadIcon" src="img/headset_icon.png" alt=""> (11) 4003-2321</p>
      <p class="parag" id="suporte">Suporte</p>
    </footer>
</body>
</html>