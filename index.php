<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
	<link rel="stylesheet" href="">

	<link rel="stylesheet/text" href="index.css">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	
	<style type="text/css" media="screen">
		*{
			border:  solid black 0px;
		}
		.showPword, .viewPword{
			cursor:  pointer;
		}
	</style>

</head>
<body>
	
		<div class ='wrapper'>
			<header id='header' class='container-fluid p-0'>
				<nav  class='navbar navbar-expand-sm text-light bg-primary'>
					<h2 class='navbar-brand company-name text-light p-3 m-0'>
						CANORECO
						<br/> MOTORPOOL
					</h2>
	        	</nav>
			</header>

			<main class='container'>
				<center>
					<form method="POST" action="home.php"
					class= 'loginForm col-sm-5 border border-primary rounded my-5'
					style="padding: 30px"
					id='loginForm'>
						<table style='width: 100%;' >
							<tbody>
								<tr>
									<td >
										<p class = 'notify '
										style='font-size: 20px; color: #F7CD2E' 
										id='notify'>
										Please enter your account.</p>
									</td>
								</tr>
								<tr>
									<td>
										<!-- username-->
										<div class='form-floating my-3'>
											<input type='text' 
											class='form-control shadow-none' 
											id='floatingInput'
											placeholder='name@example.com'
											maxlength='60'>
												<label for='floatingInput'>
													<i class = 'bx bx-user'></i> 
													Username
												</label>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<!-- password-->
										<div class='form-floating my-3'>
											<input type='password' 
											class='form-control shadow-none' 
											id='floatingPassword' placeholder='Password'
											maxlength='60'>
											<label for='floatingPassword'>
												<i class='bx bx-lock'></i> 
												Password
											</label>
										</div>

										<input type='checkbox'
										class='showPword my-3' 
										id='showPword' 
										onclick='showPassword();' role='button'>
										<label for='showPword' 
										class='viewPword'>
											Show Password
										</label>
									</td>
								</tr>
								<tr>
									<td>
										<!-- login button-->
										<button type='button'
										class='btn btn-outline-primary mt-4 shadow-none'
										style='width: 100%' 
										id='submit'
										onclick='myFunction();'>
										Login
										</button>

										<script>
											function myFunction() {
												window.location.href="home.php";
											}
										</script>
										
										<!-- <a><center><p style='font-size: 12px;
										visibility:hidden;'>
										Forgot username or password</p></center>
										</a>
 -->									</td>
								</tr>
							</tbody>
						</table>
					</form>
				</center>
			</main>
		</div>
	
</body>
</html>