<!doctype html>
<html lang="en">
	
	<head>
		<!-- Jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

		<!-- Bootstrap CSS --> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/
		bootstrap.min.css" integrity="sha384-Vkoo8×4CGsO3+Hhxv8T/
		Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<!-- Bootstrap JS -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
		crossorigin="anonymous"></script>

		<title>Edit Profile</title>

	</head>

	<style>
			h1{
    			font-size: 30px;
    			font-family: "Times New Roman", Times, serif;
			    position: absolute;
			    text-align: center;
			    top: 20%;
    			width: 100%;
    		}

    		.form-group1{
    			font-family: "Times New Roman", Times, serif;
			    position: absolute;
			    text-align: center;
			    top: 30%;
    			width: 100%;
    		}

    		#firstname{
    			font-family: "Times New Roman", Times, serif;
			    position: absolute;
			    margin-top: 10px;
			    margin-left: 36%;
    			width: 400px;
    		}

    		.form-group2{
    			font-family: "Times New Roman", Times, serif;
			    position: absolute;
			    text-align: center;
			    top: 45%;
    			width: 100%;
    		}

    		#middlename{
    			font-family: "Times New Roman", Times, serif;
			    position: absolute;
			    margin-top: 10px;
			    margin-left: 36%;
    			width: 400px;
    		}

    		.form-group3{
    			font-family: "Times New Roman", Times, serif;
			    position: absolute;
			    text-align: center;
			    top: 60%;
    			width: 100%;
    		}

    		#lastname{
    			font-family: "Times New Roman", Times, serif;
			    position: absolute;
			    margin-top: 10px;
			    margin-left: 36%;
    			width: 400px;
    		}

    		button{
    			font-family: "Times New Roman", Times, serif;
			    position: absolute;
			    text-align: center;
			    margin-top: 500px;
			    margin-left: 40%;
    			width: 300px;
    		}

    		p{
    			font-family: "Times New Roman", Times, serif;
			    position: absolute;
			    text-align: center;
			    margin-top: 510px;
			    margin-left: 40%;
    			width: 300px;
    		
    		}
		</style>

	<body>
		<h1>Edit your Profile</h1>
		<?php
			foreach($data as $item){

			}	
		?> 
		
		   <form action='' method='post'>
						<div class="form-group1">
		    			<label for="firstname">First Name</label>
		    			<input type='text' class='form-control' id='firstname' name='first_name' value='<?=$item->first_name ?>' />
			    	</div><br>

		  			<div class="form-group2">
		    			<label for="middlename">Middle Name</label>
		    			<input type="text" class="form-control" id="middlename" name='middle_name' value="<?=$item->middle_name ?>">
		  			</div><br>

		  			<div class="form-group3">
		    			<label for="lastname">Last Name</label>
		    			<input type="text" class="form-control" id="lastname" name='last_name' value="<?=$item->last_name ?>">
		  			</div>
		  			
            <button type="submit" name='action' class="btn btn-primary">Save Changes</button>
            <br><br>
       </form>
       	<p><a class="btn btn-primary" href='/Publication/index'>Back Button</a></p>

	</body>
</html>