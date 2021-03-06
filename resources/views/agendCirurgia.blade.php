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
                    <input type="number" id="codCliente" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="codAnimal">COD Animal</label>
                    <input type="number" class="form-control" id="codAnimal" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEspecialidade">Cirurgia</label>
                    <select id="inputEspecialidade" class="form-control" placeholder="Cl??nica" required>
                        <option selected hidden>Escolha...</option>
                        <option value="Cesariana">Cesariana</option>
                        <option value="H??rnias">H??rnias</option>
                        <option value="Caudectomia">Caudectomia</option>
                        <option value="Gastrotomias">Gastrotomias</option>
                        <option value="Castra????o">Castra????o</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="codAnimal">M??dico</label>
                    <select id="inputMedico" class="form-control" required>
                        <option selected hidden>M??dicos dispon??veis</option>
                        <option value="0">Dr. Jorge Ara??jo</option>
                        <option value="1">Dra. Aline Medrado</option>
                        <option value="2">Dr. F??bio Akita</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputDataConsulta">Data</label>
                    <input type="date" class="form-control" id="inputDataConsulta" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputHora">Hora</label>
                    <select id="inputHora" class="form-control" required>
                        <option value="08h">08h</option>
                        <option value="08h30">08h30</option>
                        <option value="09h">09h</option>
                        <option value="09h30">09h30</option>
                        <option value="10h">10h</option>
                        <option value="10h30">10h30</option>
                        <option value="11h">11h</option>
                        <option value="11h30">11h30</option>
                        <option value="12h">12h</option>

                        <option value="14h">14h</option>
                        <option value="14h30">14h30</option>
                        <option value="15h">15h</option>
                        <option value="15h30">15h30</option>
                        <option value="16h">16h</option>
                        <option value="16h30">16h30</option>
                        <option value="17h">17h</option>

                    </select>
                </div>
            </div>
            <div class="col-md-5">
                <button type="submit" class="btn btn-primary">Agendar</button>
            </div>
           
        </form>
    </main>
    <footer class="footer">
      <p class="parag"><img class="HeadIcon" src="img/headset_icon.png" alt=""> (11) 4003-2321</p>
      <p class="parag" id="suporte">Suporte</p>
    </footer>
</body>
</html>