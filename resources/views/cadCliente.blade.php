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
                    <label for="inputName">Nome</label>
                    <input type="text" id="inputName" class="form-control" placeholder="Carlos" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputSurname">Sobrenome</label>
                    <input type="text" class="form-control" id="inputSurname" placeholder="Silva" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="carlos@email.com" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">CPF</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="999.000.999-11" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Endere??o</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Av Fernandes Lima, 521" required>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Complemento</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, casa, s??tio...">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Cidade</label>
                    <input type="text" class="form-control" id="inputCity" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">CEP</label>
                    <input type="text" class="form-control" id="inputZip" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Estado</label>
                    <select id="inputState" class="form-control" required>
                        <option selected hidden>Escolha...</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amap??</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Cear??</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Esp??rito Santo</option>
                        <option value="GO">Goi??s</option>
                        <option value="MA">Maranh??o</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Par??</option>
                        <option value="PB">Para??ba</option>
                        <option value="PR">Paran??</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piau??</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rond??nia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">S??o Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
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