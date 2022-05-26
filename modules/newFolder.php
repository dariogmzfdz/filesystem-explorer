<!DOCTYPE html>
<?php
	function createDirectory() {
		$add = $_POST["add"];
		//mkdir("".$add);
		$path = '/uploads'; 
		mkdir($path, 0777, true);
	
		echo "<script type = 'text/javascript'>alert('Done!');</script>";
	}
?>
<html>
	<head>
		<title>
			Create directory with HTML button and PHP
		</title>
	</head>
	
	<body>
	<?php
		if (!isset($_POST['submit'])) {
	?>
		<form action = "" method = "post">
			
			<table>
			<tr>
				<td style = " border-style: none;"></td>
				<td bgcolor = "lightgreen" style = "font-weight: bold">
					Enter Dummy Text and Then Press 'Create Directory'
				</td>
				
				<td bgcolor = "lightred">
					<input type = "text" style = "width: 120px;"
					class = "form-control" name = "add" id = "add" />
				</td>
				
				<td bgcolor = "lightgreen" colspan = "2">
					<input type = "submit" name = "submit"
						value = "Create directory" />
				</td>
			</tr>
			</table>
		</form>
	<?php
		}
		else {
			createDirectory();
			
		}
	?>
	</body>
</html>
