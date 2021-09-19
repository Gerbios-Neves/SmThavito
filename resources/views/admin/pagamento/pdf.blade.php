<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Invoice Template</title>
  <link rel="stylesheet" href="invoice/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="invoiceholder">

  <div id="headerimage"></div>
  <div id="invoice" class="effect2">
    
    <div id="invoice-top">
      <div class="logo"></div>
      <div class="info">
        <h2>Michael Truong</h2>
        <p> hello@michaeltruong.ca </br>
            289-335-6503
        </p>
      </div><!--End Info-->
      <div class="title">
        <h1>Invoice #1069</h1>
        <p>Issued: May 27, 2015</br>
           Payment Due: June 27, 2015
        </p>
      </div><!--End Title-->
    </div><!--End InvoiceTop-->


    
    <div id="invoice-mid">
      
      <div class="clientlogo"></div>
      <div class="info">
        <h2>Client Name</h2>
        <p>JohnDoe@gmail.com</br>
           555-555-5555</br>
      </div>

      <div id="project">
        <h2>Project Description</h2>
        <p>Proin cursus, dui non tincidunt elementum, tortor ex feugiat enim, at elementum enim quam vel purus. Curabitur semper malesuada urna ut suscipit.</p>
      </div>   

    </div><!--End Invoice Mid-->
    
    <div id="invoice-bot">
      
      <div id="table">
        <table>
			<thead>
				<tr>
					<th>#</th>
					<th>Valor Pago</th>
					<th>Descricao</th>
					<th>Nome do Aluno</th>
					<th>Nome do Usuario</th>
					<th>Hora do Pagamento</th>
				</tr>
			</thead>

			<tbody>
				@foreach ($pagamentos as $pagamento)
					<tr class="odd gradeX">
						<td>{{$pagamento->id}}</td>
						<td>{{$pagamento->valor_pago}}</td>
						<td>{{$pagamento->tipo_pagamento}}</td>
						<td>{{$pagamento->aluno->nome}}</td>
						<td>{{$pagamento->user->name}}</td>
						<td>{{$pagamento->created_at}}</td>
					</tr>
				@endforeach
			</tbody>
        </table>
      </div><!--End Table-->
      
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="QRZ7QTM9XRPJ6">
      <input type="image" src="http://michaeltruong.ca/images/paypal.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    </form>

      
      <div id="legalcopy">
        <p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices. 
        </p>
      </div>
      
    </div><!--End InvoiceBot-->
  </div><!--End Invoice-->
</div><!-- End Invoice Holder-->
<!-- partial -->
  
</body>
</html>
