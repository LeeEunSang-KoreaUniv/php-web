<html>
	<head>
		<title>기우회 전술 정보 수정</title>
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
			$insert_query = "UPDATE stretegy
							SET st_name = '$st_name', st_contents = '$st_contents', st_Link = '$st_Link'
							WHERE st_code = '$st_code'";
							
			mysqli_query($connect, $insert_query);
			
			echo "수정 완료!!";
		}
		?>
	</body>
</html>
