<!DOCTYPE html>
<html>
<head>
  <meta charset = 'UTF-8'>
  <title> Promove Nutrição </title>
  <link rel= 'stylesheet'
        href= 'estilo.css'>
</head> 
<body>
  <header> 
    <h1> Promove Nutrição </h1>
  
  <p > 
    <h2 >Meus pacientes<h2> 
  </p>
  </header>
  <table >
  <thead>
    <tr class= 'linha1'>
      <th> Nome </th>
      <th> Peso(Kg) </th>
      <th> Altura(m) </th>
      <th> IMC </th>
      <th> Data de nascimento </th>
      <th> Idade </th>
    </tr>
  </thead>
  <tbody>
    <tr class= 'linha2'>
      <td> John Petrucci </td>
      <td> 100 </td>
      <td> 2.00 </td>
      <td> 
        <?php
          /*$Altura = 2.00;
          $Peso = 100;*/               //  Peso/($Altura * $Altura) Fórmula para o cálculo de imc.
          $imc = 100 /(2.00*2.00);    
          echo number_format($imc,2);    // number_format usado para limitar o numero de casas decimais
        ?>
      </td>
      <td> 01/01/1980 </td>
      <td>
      <?php
        //echo "hoje é ".date("Y")."<br>"; 
        $dataatual = date("Y");    // aatribuindo data a variável. Parâmetro "Y" corresponde a Year( ano) em 4 dígitos. 
        $datadenasc = "1980"; 
        $idade = $dataatual - $datadenasc; 
        echo "$idade";

      ?>
      </td>
    </tr>
    <tr class= 'linha1'>
      <td> John Myung </td>
      <td> 80 </td>
      <td> 1.72 </td>
      <td>
        <?php
           $imc = 80 /(1.72*1.72);    
           echo number_format($imc,2);  
         ?>
      </td>
      <td> 28/02/1990 </td>
      <td>
          <?php
              $dataatual = date("Y");     
              $datadenasc = 1990;
              $idade = $dataatual - $datadenasc; 
              echo "$idade";
          ?>  
      </td>
    </tr>
    <tr class= 'linha2'>
      <td> James Labrie </td>
      <td> 54 </td>
      <td> 1.64 </td>
      <td>
          <?php
             $imc = 54 /(1.64*1.64);    
             echo number_format($imc,2); 
          ?>
      </td>
      <td> 10/09/1985 </td>
      <td> 
        <?php
              $dataatual = date("Y");     
              $datadenasc = 1985; 
              $idade = $dataatual - $datadenasc; 
              echo "$idade";
          ?>
      </td>
    </tr>
    <tr class= 'linha1'>
      <td> Jordan Rudess </td>
      <td> 85 </td>
      <td> 1.73 </td>
      <td>
        <?php
           $imc = 85 /(1.73*1.73);    
           echo number_format($imc,2);   
          ?>
      </td>
      <td> 04/09/1989 </td>
      <td>
        <?php
              $dataatual = date("Y");     
              $datadenasc = 1989; 
              $idade = $dataatual - $datadenasc; 
              echo "$idade";
          ?>
      </td>
    </tr>
    <tr class= 'linha2'>
      <td> Mike Mangini </td>
      <td> 46 </td>
      <td> 1.55 </td>
      <td >
        <?php
           $imc = 46 /(1.55*1.55);    
           echo number_format($imc,2);   
         ?>
      </td>
      <td> 31/12/1978 </td>
      <td> 
        <?php
              $dataatual = date("Y");     
              $datadenasc = 1978;
              $idade = $dataatual - $datadenasc; 
              echo "$idade";
          ?>
      </td>
    </tr>
  <tbody>  
  </table>
</body>
</html>