<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id = "box">


     <h1>Rifa sorteio</h1>
     <p1> Valor da rifa:R$50</p1>
  <br><br>
  <p2> numeros das rifas 50 </p2> 
  <p2> Essa rifa é um agradecimento pelo trabalho de Vocês </p2> 
 <br><br>
 <br><br>
 <p3>Data do sorteio: 28/04/2022 </p3> 
 <br><br>
 <p4>Premio: Playstation 5 </p4> 
 <br><br>
 <img src="https://cdn.pocket-lint.com/r/s/970x/assets/images/154419-games-review-hands-on-playstation-5-hands-on-pics-image1-tbq3hzlrkw.jpg" alt="rifa" >
  <p>Nome:<input name="nome" id="nome"></p>
  
  
 <p>Endereço:<input nome="endereço" id="endereço"> </p>
 <p>n Telofone<input type="nunber" nome="telefone"></p>


   <form action="gerar.php" method="post">
     <h3>Insira quantas rifa você vai comprar</h3>
     <input type="number" name="valor" id="valor">
     <button type="submit">mostrar</button>
   </form>
  
</div>
</body>
</html>