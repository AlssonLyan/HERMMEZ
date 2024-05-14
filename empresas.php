<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HERMMEZ</title>
<style>
  body{
    display: flex;
    align-items: center;
    height: 100vh;
    margin: 0;   
  }
.container{
  width: 90%; 
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  text-align: center;
  border: 1px solid #ccc;
  position: relative;
  
}
 
input[type="submit"] {
  background-color: black;
  color: white;
  border: none;
  padding: 10px 20px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px;
  cursor: pointer;
}
 
p{
  font-family: sans-serif;
  font-size: 30px;
}
 
h2{
  font-size: 20px;
}
 
.form-group {
  display: inline-block;
  margin: 10px;
}
 
.saiba-mais {
  position: absolute;
  bottom: 10px;
  right: 10px;
}
</style>
</head>
<body>
<div class="container">
  <p>Registre sua empresa agora <br> mesmo</p>
  <h2>O Hermmez conectado é a solução ideal para otimizar suas operações de transportes </h2>
  <div class="form-group">
    <form action="registrarE.php">
      <input type="submit" value="Registrar">
    </form>
  </div>
  <div class="form-group">
    <form action="entrar.php">
      <input type="submit" value="Entrar">
    </form>
  </div>
  <div class="saiba-mais">
    <div class="form-group">
      <form action="sb+.php">
        <input type="submit" value="Saiba Mais">
      </form>
    </div>
  </div>
</div>
</body>
</html>