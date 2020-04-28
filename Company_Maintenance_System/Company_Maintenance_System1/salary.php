<!DOCTYPE html>
<html>
	<head>
		<title> Salary </title>
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
				text-decoration: none;
			}

			a:active {
				color: black;
				background-color: transparent;
				text-decoration: none;
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
		
		
		}
			.footer{
			background-color:#aaaa55;
		}

		.cancelbtn{
		background-color: #cecdce;
		border: none;
		border-radius: none;
	}
		
		
		</style>
	</head>
	
	<body>

		<div class="header1">

			<div class="col-1">
			<a href="administrator.php"><img src="Administrator/admin.png" style="height:30%;width:30%"></a>
			</div>

			<div class="col-2" align="center" >
			<a href="staffdetails.php">STAFF DETAILS</a>
			</div>
			<div class="col-2" align="center">
			<a href="leavedetails.php">LEAVE DETAILS</a>
			</div>
			<div class="col-2" align="center">
			<a href="CompanyMaintenanceSystem.php"><img src="Header & Footer/Camera.png" style="height:25%;width:25%"></a>
			</div>
			<div class="col-2" align="center">
			<a href="adminviewtask.php">GIVE TASK </a>
			</div>
			<div class="col-2" align="center">
			<a href="logout.php"><button type="submit" class="cancelbtn" name="logout">LOG OUT</button></a>
			</div>
					
			<div class="col-1">
			</div>

		</div>
		
			
		<div class="form1 col-12">
		<h1> Salary Calculation </h1>
		<form >
		<fieldset>
		<pre>
		<legend> Employee Details </legend>
		Employee Name:  	<input type="text" name="firstname"> <br>
		Employee ID  :    	<input type="text" name="emid">      <br>
		Designation  :      	<input type="text" name="designation"><br>
		</div>
		
		<div class="form2 col-12">
		<div class="form2 col-7">
		<form>
		<fieldset>
		<pre>
		<legend> Gross Salary </legend>
		Basic Salary(Rs)	:<input type="text" name="bsalary">    <br>  <br>
		Allowances(Rs)		:<input type="text" name="allow">   <br>   <br>
		Total Submission	:<input type="text" name="totsub">  Total Rate:<input type="text" name="totrate"> <br><br>
		Total Cross Salary  	:<input type="text" name="totsubamt">  <br>    <br>
			<button class = "button"> Calculate Cross Salary </button>
		</pre>
		</fieldset>
		</form>
		</div>
		<div class="form2 col-5">
		<form>
		<fieldset>
		<pre>
		<legend> Deductions </legend>
		EPF(10%)(Rs)		:<input type="text" name="bsalary">    <br>  <br>
		Loan(Rs)		:<input type="text" name="bsalary">    <br>  <br>
		Total Deduction(Rs)	:<input type="text" name="bsalary">    <br>  <br>
		<button class = "button"> Calculate Deduction </button>
		</pre>
		</fieldset>
		</form>
		</div>
		</div>
		
		<div class="form3 col-12">
		<form >
		<fieldset>
		<pre>
		Net Salary(Rs):  	<input type="text" name="firstname"> <br>
			<button class = "button"> Calculate All </button><button class = "button"> Delete </button>
		</pre>
		</fieldset>
		</form>
		</div>
	</body>
</html>
	