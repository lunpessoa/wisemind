<!--Jquery-->
<script type="text/javascript" src="js/jquery.js"></script>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">

	<!--Bootsrap 4-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="css/cadastro-padrao.css">

</head>
<body>
	<div class="container float-none">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>TORNE-SE UM WISER</h3>
				</div>
				<div class="card-body">
				<fieldset>
 					<h4>Dados Pessoais</h4>
 					<table>
  						<tr>
  							<td>
    							<label for="nome">Nome: </label>
   							</td>
   							<td align="left">
    							<input type="text" name="nome">
   							</td>
   							<td>
    							<label for="sobrenome">Sobrenome: </label>
   							</td>
   							<td align="left">
    							<input type="text" name="sobrenome">
   							</td>
  						</tr>
  						<tr>
   							<td>
    							<label>Nascimento: </label>
   							</td>
   							<td align="left">
								<select name="dia"> 
    								<option value="dia1">01</option> 
    								<option value="dia2">02</option> 
    								<option value="dia3">03</option> 
   									<option value="dia4">04</option> 
    								<option value="dia5">05</option> 
    								<option value="dia6">06</option> 
    								<option value="dia7">07</option> 
    								<option value="dia8">08</option> 
    								<option value="dia9">09</option> 
    								<option value="dia10">10</option> 
    								<option value="dia11">11</option> 
    								<option value="dia12">12</option> 
    								<option value="dia13">13</option> 
    								<option value="dia14">14</option> 
    								<option value="dia15">15</option> 
    								<option value="dia16">16</option> 
    								<option value="dia17">17</option> 
    								<option value="dia18">18</option> 
    								<option value="dia19">19</option> 
    								<option value="dia20">20</option> 
    								<option value="dia21">21</option> 
    								<option value="dia22">22</option> 
    								<option value="dia23">23</option> 
    								<option value="dia24">24</option> 
    								<option value="dia25">25</option> 
    								<option value="dia26">26</option> 
									<option value="dia27">27</option>
									<option value="dia28">28</option> 
									<option value="dia29">29</option> 
									<option value="dia30">30</option> 
									<option value="dia31">31</option>  
   								</select> 
   								<select name="mes"> 
    								<option value="jan">Janeiro</option> 
    								<option value="fev">Fevereiro</option> 
    								<option value="mar">Março</option> 
   									<option value="abr">Abril</option> 
    								<option value="mai">Maio</option> 
    								<option value="jun">Junho</option> 
    								<option value="jul">Julho</option> 
    								<option value="ago">Agosto</option> 
    								<option value="set">Setembro</option> 
    								<option value="out">Outubro</option> 
    								<option value="nov">Novembro</option> 
    								<option value="dez">Dezembro</option>   
								</select> 
								<select name="ano"> 
    								<option value="dia1">01</option> 
    								<option value="dia2">02</option> 
    								<option value="dia3">03</option> 
   									<option value="dia4">04</option> 
    								<option value="dia5">05</option> 
    								<option value="dia6">06</option> 
    								<option value="dia7">07</option> 
    								<option value="dia8">08</option> 
    								<option value="dia9">09</option> 
    								<option value="dia10">10</option> 
    								<option value="dia11">11</option> 
    								<option value="dia12">12</option> 
    								<option value="dia13">13</option> 
    								<option value="dia14">14</option> 
    								<option value="dia15">15</option> 
    								<option value="dia16">16</option> 
    								<option value="dia17">17</option> 
    								<option value="dia18">18</option> 
    								<option value="dia19">19</option> 
    								<option value="dia20">20</option> 
    								<option value="dia21">21</option> 
    								<option value="dia22">22</option> 
    								<option value="dia23">23</option> 
    								<option value="dia24">24</option> 
    								<option value="dia25">25</option> 
    								<option value="dia26">26</option> 
									<option value="dia27">27</option>
									<option value="dia28">28</option> 
									<option value="dia29">29</option> 
									<option value="dia30">30</option> 
									<option value="dia31">31</option>  
   								</select>
   							</td>
  						</tr>
  						<tr>
  							<td>
    							<label for="rg">Email </label>
   							</td>
   							<td align="left">
    							<input type="text" name="email" size="13" maxlength="13"> 
   							</td>
  						</tr>
  						<tr>
   							<td>
    							<label>Senha</label>
   							</td>
   							<td align="left">
    							<input type="text" name="senha" size="9" maxlength="9">
   							</td>
  						</tr>
						<tr>
							<td>
    							<label>Confirme a senha</label>
   							</td>
   							<td align="left">
    							<input type="text" name="senha" size="9" maxlength="9">
   							</td>
						</tr>
 					</table>
				</fieldset>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Já tem conta?<a href="login.php">Entrar!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>