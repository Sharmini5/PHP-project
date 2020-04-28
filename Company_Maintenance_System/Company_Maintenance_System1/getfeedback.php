<?php
$connect = mysqli_connect("localhost", "root","", "company maintenance system");
?>
<!DOCTYPE html>
<html>
	<head>
		
		<title> View Feedback</title>
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
		
			.header {
				color: #ffffff;
				padding: 15px;
				font-size:25px;
			}
			input[type=text],input[type=number], input[type=date] {
						width: 70%;
						padding: 12px 20px;
						margin: 8px 0;
						display: block;
						border: 1px solid #ccc;
						border-radius: 4px;
						box-sizing: border-box;
					}

					input[type=submit] {
						width: 40%;
						background-color: #4CAF50;
						color: white;
						padding: 14px 20px;
						margin: 8px 0;
						border: none;
						border-radius: 4px;
						cursor: pointer;
					}

					input[type=submit]:hover {
						background-color: #45a049;
					}
					textarea{
						width: 70%;
						padding: 12px 20px;
						margin: 8px 0;
						display: block;
						border: 1px solid #ccc;
						border-radius: 4px;
						box-sizing: border-box;
					}
		

		
			.footer{
			background-color:#aaaa55;
			}
		h1{
			float: center;
		}
		table {
		    border-collapse: collapse;
		    width: 100%;
		}

		td {
   			 height: 50px;
		}
		th{
			border: 0;
		}
		</style>
		
	</head>

<body>

		<div>
  				<div class="row">
  					<div class="col-12">
						
						<div class="col-3">
							<form  action="getfeedback.php" method="POST">
								<label for="feedId">Feedback ID</label>
							
								    <input type="number" id="Feedback ID" name="CID" required> 
								    
								    <input type="submit" name="submit" value="View Details">

							
							</form> 
							</div>

						<div class="col-8">
							
	
							<form name="Feedback" method="POST" action="view_feedback.php" style="border:5px solid #ccc" >
								<h1>FeedBack</h1>
								<p>Your thoughts are appreciated..</p>
								<hr>
								
								<label><b>Client ID</b></label>
								<input type="text"  name="CID" value="">

								<label><b>Client Name</b></label>
								<input type="text" name="cname" value="">

								<label><b>Project Name</b></label>
								<input type="text" name="Task_Name" value="">

								<label><b>Client Submission Rate</b></label>
								<input type="text"  name="Client_Sub_Rate" value="">

								<label><b>Services Rate</b></label>
								<input type="number" name="Services_Status">

								<label><b>Comments</b></label>
								<textarea></textarea>
								
								

								<input type="submit" name="submit">
							</div>
							</form>
						
							
					</div>
					
  				</div>
			
		</div>


		
	</body>
</html>
