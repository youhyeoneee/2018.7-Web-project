<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<title>Main Page</title>
		<style type="text/css">
			#header {
				background-color: #908886;
				height: 110px;
				line-height: 110px;

			}
			#header2 {
				background-color: #949494;
				height: 50px;
				line-height: 50px;
			}
			#sideinfo{
				background-color: #F5F5F5;
				float:left;
				width:20%;
				height:700px;

			}
			#content{
				background-color: #DCDAD9;
				float:right;
				width:80%;
				height:700px;
				text-align: center;
			}
			#in{
				display: inline-block;
			}
		td{
			height: 30px;
		}
		.padding{
			padding-top: 300px;
			padding-bottom: 300px;

		}
		</style>	
		<link rel="stylesheet" type="text/css" href="./css.css">

	</head>
	<body>
		<header>
		</header>
		<section>
			 <div>
			 		<div id ='header' class="txt_center">유딱유딱</div>
			 		<div id ='header2' class="txt_center">블로그 게시판</div>
			 		<div id ='content'>
			 			<div id='in' class="padding">
							<?php
								$db = mysqli_connect('localhost','root','autoset','table');
								if (mysqli_connect_errno()){
								echo "연결 에러";
								}
								$result = mysqli_query($db,"SELECT * FROM table1");
								echo "<table border=’1′> <tr> <th>Id</th> <th>Pw</th> <th>Email</th> </tr>";
								$n = 1;
								while($row = mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>" . $row['Id'] . "</td>";
								echo "<td>" . $row['Pw'] . "</td>";
								echo "<td>" . $row['Email'] . "</td>";
								echo "</tr>";
								$n++;
								}
								echo "</table>";
								mysqli_close($db);
							?>


			 			</div>
			 		</div>
			 		<div id ='sideinfo'></div>
			 </div>
		</section>
		<footer>
		</footer>
	</body>
</html>



