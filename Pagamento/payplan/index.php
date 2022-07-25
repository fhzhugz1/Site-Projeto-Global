<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php
if(isset($_SESSION['status']))
{
  ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Pagamento Concluido!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php 
  
  unset($_SESSION['status']);
}
?>
<title>Pagamento</title>

<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body class="agileits_">
    <h1 class="agile_head text-center">Pagamento</h1>
 <div class="_main wrap">
	  <h3> </h3>


    
	    <form  action="feedback.php" method="post" class="agile_form">
		  <div class="caixa"> 
			<h2>Dados Pessoais</h2>
			
			<input type="text" placeholder="Nome" name="name" minlength="3"  required/>
			<input type="email" placeholder="Email " name="mail" required/>
			<input type="text" placeholder="Telemóvel " name="num" maxlength="10" required /><br>
<!-- Card Number -->
<h2>Dados Cartão</h2>
    <div class="form-group">
      <label class="col-sm-4 control-label" for="textinput"></label>
      <div class="col-sm-6">
        <input type="text" id="cardnumber"  minlength="16" maxlength="16" placeholder="Número do cartão" class="card-number form-control" required>
      </div>

<!-- CVV -->
      <label class="col-sm-4 control-label" for="textinput"></label>
      <div class="col-sm-3">
        <input type="text" id="cvv" placeholder="CVV" minlength="3" maxlength="3" class="card-cvc form-control" required>
      </div>
    </div>
<h2><left>Data de validade do cartão</left></h2>
    <!-- Expiry-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="textinput"></label>
      <div class="col-sm-6">
        <div class="form-inline">
        <select name="select2" data-stripe="exp-month" class="card-expiry-month stripe-sensitive required form-control">
            <option value="01" selected="selected">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select> 
          <span> / </span>
    <select name="select2" data-stripe="exp-year" class="card-expiry-year stripe-sensitive required form-control">
<option value="2022" selected="selected">2022</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
            <option value="2030">2030</option>
            
          </select> 

          <script type="text/javascript">
            var select = $(".card-expiry-year"),
            year = new Date().getFullYear();
 
            for (var i = 0; i < 12; i++) {
                select.append($("<option value='"+(i + year)+"' "+(i === 0 ? "selected" : "")+">"+(i + year)+"</option>"))
            }
        </script> 
        </div>
      </div>
    </div>
			<center><input type="submit" value="Pagar" class="agileinfo" /></center>
      
<br>

<br>
<p>
 <a href="/Projeto Global/loja/index.php"><b><h1><center><h1 class="voltar" >Voltar</h1> </b></h1></center></a> </p></br></br>
	  </form>
	</div>
          </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</html>

