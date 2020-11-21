<!DOCTYPE html>
<html lang="en">
    <head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link href="1.css" type="text/css" rel="stylesheet">
		<title>Basic Banking System</title>
	</head>
    <body>
		<div class="h">
			<div class="ih nav nav-bar">
				<nav>
					<ul>
						<li><a href="index.php" class="logo">Basic Banking System</a></li>
						<li><a href="his.php" class="link">Transaction History</a></li>
						<li><a href="users.php" class="link">Users</a></li>
						<li><a href="index.php" class="link">Home</a></li>
					</ul>
				</nav>
			</div>
		</div>
  
		<section id="home">
			<div class="container">
			</div>
		</section>	
		
		<section id="cus">
		  <center><h1><b>Users</b><h1/>
		  <h3>Users Details & Transaction History</h3><br>
		  </center>
		 </section> 
		<div class="container">
            <div class="row text-center" id="item_list">
                <div class="col-sm-6">
                    <a href="users.php" >
                        <div class="thumbnail">
                            <img src="cus.png" alt="">
							<div class="caption">
                                <h1>Users Details</h1>
                                <p>Click To View Users Details.</p>
                            </div>
                        </div> 
                    </a>
                </div>
				<div class="col-sm-6">
                    <a href="his.php" >
                        <div class="thumbnail">
                            <img src="his.jpg" alt="">
                            <div class="caption">
								<h1>Transaction History</h1>
                                <p>Click To View Transaction History.</p>
                            </div>
                        </div> 
                    </a>
                </div>
			</div>
	  </body>
</html>
