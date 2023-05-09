<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
  <title>PHP ToDo List JSON</title>
</head>

<body>
  <div id="app">
    <div class="container">


      <h1>{{title}}</h1>
      <div class="col">
        <div v-for="(todo,index) in todoList">
          <p> {{todo}}</p>

        </div>

      </div>

      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Inserisci elemento.." aria-label="Recipient's username" aria-describedby="button-addon2" v-model="todoItem" @keyup.enter="updateList">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2" @click="updateList">Inserisci</button>
      </div>
    </div>
  </div>
  <script src="./js/script.js"></script>
</body>

</html>