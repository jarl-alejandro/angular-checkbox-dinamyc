<!DOCTYPE html>
<html lang="es" ng-app="Example">
<head>
  <meta charset="UTF-8">
  <title>Example</title>
</head>
<body>
  <section ng-controller="main">
    <form>
      <input type="text" placeholder="Escribe tu nombre" ng-model="data.user.name">
      <p>Bienvenido: {{data.user}}</p>
      <ul>
        <li ng-repeat="heroe in heroes" >
          <label>{{ $index }}.- {{ heroe.name }}</label>
          <input type="radio" value="0" name="{{ heroe.name }}" class="items" />
          <input type="radio" value="1" name="{{ heroe.name }}" class="items" />
        </li>
        <button ng-click="guardar()">Enviar</button>
      </ul>      
    </form>
  </section>
  <script src="lib/angular.min.js"></script>
  <script src="js/app.js"></script>
</body>
</html>