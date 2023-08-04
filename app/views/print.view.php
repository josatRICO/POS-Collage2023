<?php 

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

 		$WshShell = new COM("WScript.Shell");
 		///$obj = $WshShell->Run("cmd /c wscript.exe www/public/file.vbs",0, true); 
 		$obj = $WshShell->Run("cmd /c wscript.exe ".ABSPATH."/file.vbs",0, true); 
 		
 		$WshShell = new COM("WScript.Shell");
 		///$obj = $WshShell->Run("cmd /c wscript.exe www/public/file.vbs",0, true); 
 		$obj = $WshShell->Run("cmd /c wscript.exe ".ABSPATH."/file.vbs",0, true); 
  
 	 
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=esc(APP_NAME)?></title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>
	<?php 

		$vars = $_GET['vars'] ?? "";

		$obj = json_decode($vars,true);

	?>
<?php if(is_array($obj)):?>

	<center>
		<h1><?=$obj['company']?></h1>
		<center><h6>FastFood Chain Address:</h6></center>
		<center><h5>Brgy. ZONE III,</h5></center>
		<center><h5>CM Building, Osmeña St.</h5></center>
		<center><h5>Atimonan, Quezon.</h5></center>
		<center><div><h6><i><?=date("F j, Y")?></h1></i></div></center>
	</center>

	<table class="table table-striped">
		<tr>
			<th>Qty</th><th>Description</th><th>Price</th><th>Amount</th>
		</tr>

		<?php foreach ($obj['data'] as $row):?>
			<tr>
				<td><?=$row['qty']?></td><td><?=$row['description']?></td><td>₱ <?=$row['amount']?></td><td>₱ <?=number_format($row['qty'] * $row['amount'],2)?></td>
			</tr>
		<?php endforeach;?>

		<tr>
			<td colspan="2"></td><td><b>Total:</b></td><td><b>₱ <?=$obj['gtotal']?></b></td>
		</tr>
		<tr>
			<td colspan="2"></td><td>Amount paid:</td><td>₱ <?=$obj['amount']?></td>
		</tr>
		<tr>
			<td colspan="2"></td><td>Change:</td><td>₱ <?=$obj['change']?></td>
		</tr>
		
		
	</table>

	<center><p><i>........Thank you and come again.......</i></p></center>

<?php endif;?>

<script>
	
	window.print();

	var ajax = new XMLHttpRequest();

	ajax.addEventListener('readystatechange',function(){

		if(ajax.readyState == 4)
		{
			//console.log(ajax.responseText);
		}
	});

	ajax.open('POST','',true);
	//ajax.send();

</script>
</body>
</html>