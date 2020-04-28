<!DOCTYPE html>
<html>
<head>
	<title> Message </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	
	* {
			box-sizing: border-box;
		}
		.row::after {
			content: "";
			clear: both;
			display: table;
			}
		[class*="col-"] {
			float: left;
			padding: 15px;
		}
		
		.col-1 {width: 8.33%;}
		.col-2 {width: 16.66%;}
		.col-3 {width: 25%;}
		.col-4 {width: 33.33%;}
		.col-5 {width: 41.66%;}
		.col-6 {width: 50%;}
		.col-7 {width: 58.33%;}
		.col-8 {width: 66.66%;}
		.col-9 {width: 75%;}
		.col-10 {width: 83.33%;}
		.col-11 {width: 91.66%;}
		.col-12 {width: 100%;}
		
	a:link {
			color: black;
			background-color: transparent;
			text-decoration: none;
		}
		
		a:visited {
			color: black;
			background-color: transparent;
			text-decoration: none;
		}
		
		a:hover {
			color:black;
			background-color: transparent;
			text-decoration: underline;
		}

		a:active {
			color: black;
			background-color: transparent;
			text-decoration: underline;
		}
		
		.form{
			border: 5px #000000;
			border-style: double;
			border-radius: 12px;
			width: 620px;
			font-weight: bold5
			font-family:"Times New Roman";
		}
		
		.button {
			background-color:#555555; 
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 10px 100px;
			cursor: pointer;
			border-radius: 25px 25px 25px 25px;
			width:50px;
		}
		
		.div2{
			background-color:#1f1f14;
			font-style: italic;
			font-size: 14px;
			color:black;
			font-weight:bold;
			opacity:0.7;
		}

		.cancelbtn{
		background-color: #cecdce;
		border: none;
		border-radius: none;
	}
	</style>
</head>

	<body>
		<div class="header1 ">

			<div class="col-1">
			<a href="employee.php"><img src="Employee/employee.png" style="height:30%;width:30%"></a>
			</div>

			<div class="col-2" align="center" >
			<a href="mydetails.php">MY DETAILS </a>
			</div>
			
			<div class="col-2" align="center">
			<a href="leaveapplication.php">LEAVE APPLICATION</a>
			</div>
			
			<div class="col-2" align="center">
			<a href="CompanyMaintenanceSystem.php"><img src="Header & Footer/Camera.png" style="height:25%;width:25%"></a>
			</div>
			
			<div class="col-2" align="center">
			<a href="task.php">TASK </a>
			</div>
			
			<div class="col-2" align="center">
			<a href="logout.php"><button type="submit" class="cancelbtn" name="logout">LOG OUT</button></a>
			</div>
			
			<div class="col-1">
			</div>
		<div>
		
	<div class="div1 col-12 ">
	<div class="img col-6">
	<img src="Employee/WorkFromHome.jpg" style="width:100%;height:300px;border-radius: 25px 25px 25px 25px;" >
	</div>
	
	
	<div class="table col-6">
		<table border="1">
			<tr>
				
				<th> Message ID   </th>
				<th> Message Subject	  </th>
				<th> Message Date </th>
				
			</tr>

			
		</table>
		</div>
	</div>
</body>
</html>