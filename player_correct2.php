<html>
	<head>
		<title>기우회 선수 명단 수정</title>
	</head>
	
	<body>
		<h1> 
			<a href = "index.php"><고려대학교 농구 동아리 기우회 첫 페이지로 돌아가기></a>
		</h1>
		
		<?php
		
		$stu_ID = $_POST['stu_ID'];
		$stu_name = $_POST['stu_name'];
		$backnumber = $_POST['backnumber'];
		$position = $_POST['position'];
		
		if ($stu_ID == null or $stu_name == null or $backnumber == null or $position == null){
			echo "신청란을 모두 작성해주세요!!";
		}
		else {
			$connect = mysqli_connect("localhost", "db2018170603", "eslee850@naver.com", "db2018170603");
			$insert_query = "UPDATE players 
							SET stu_name = '$stu_name', backnumber = '$backnumber', position = '$position'
							WHERE stu_ID = '$stu_ID'";
							
			mysqli_query($connect, $insert_query);
			
			echo "수정 완료!!";
		}
		?>
	</body>
</html>
