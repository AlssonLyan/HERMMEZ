<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HERMMEZ</title>
<style>
img {
  width: 250px;
}
body, input {
  font-size: 30px;
}
body {
  background-image: url("fundo.png");
  background-repeat: no-repeat;
  background-size: cover;
}
p{
    color: white;
}
.container {
  display: flex;
}
input[type="submit"] {
  background-color: black;
  color: white;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px;
  cursor: pointer;
}
</style>
</head>
<body>
<img src="hermmez.png">
<p>Um website onde empresas de cidade <br> 
    pequena que querem transportar <br> 
        materiais como soja, areia, pedra <br>
            calcário e etc. O usuário irá registrar <br>
                sua empresa e o que ela vai <br> 
                    transportar.</p>

<div class="container">
  <form action="caminhoneiros.php">
    <input type="submit" value="caminhoneiros">
  </form>
  <form action="empresas.php">
    <input type="submit" value="empresas">
  </form>
</div>
</body>
</html>