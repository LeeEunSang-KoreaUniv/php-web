<html>
	<head>
		<title>기우회 전술 등록</title>
	</head>
	
	<body>
		<h1> 
			<a href = "index.php"><고려대학교 농구 동아리 기우회 첫 페이지로 돌아가기></a>
		</h1>
		
		<?php
		$st_code = $_POST['st_code'];
		$st_name = $_POST['st_name'];
		$st_contents = $_POST['st_contents'];
		$st_Link = $_POST['st_Link'];
		
		if ($st_code == null or $st_name == null){
			echo "신청란을 모두 작성해주세요!!";
		}
		else {
			$connect = mysqli_connect("localhost", "db2018170603", "eslee850@naver.com", "db2018170603");
			$insert_query = "INSERT INTO
							stretegy(st_code, st_name, st_contents, st_Link)
							VALUES('$st_code', '$st_name', '$st_contents', '$st_Link')";
							
			mysqli_query($connect, $insert_query);
			
			echo "등록 완료!!";
		}
		?>
	</body>
</html>
