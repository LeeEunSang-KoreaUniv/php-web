<html>
	<head>
		<title>기우회 전술 정보 삭제</title>
	</head>
	
	<body>
		<h1> 
			<a href = "index.php"><고려대학교 농구 동아리 기우회 첫 페이지로 돌아가기></a>
		</h1>
		
		<?php
			$ID = $_POST['st'];

			$connect = mysqli_connect("localhost", "db2018170603", "eslee850@naver.com", "db2018170603");
			$insert_query = "DELETE FROM stretegy WHERE st_code = '$ID'";
							
			mysqli_query($connect, $insert_query);
			
			echo "삭제 완료!!";
		?>
	</body>
</html>