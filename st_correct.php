<html>
	<head>
		<title>기우회 전술 정보 수정</title>
	</head>
	
	<body>
		<h1> 
			<a href = "index.php"><고려대학교 농구 동아리 기우회 처음 페이지로 돌아가기></a>
		</h1>
		<?php
			$ID = $_POST['st'];
			$connect = mysqli_connect("localhost", "db2018170603", "eslee850@naver.com", "db2018170603");
			$sql1 = "SELECT * FROM stretegy
								WHERE st_code = '$ID'";
			
			$result1 = mysqli_query($connect, $sql1);
			
			foreach($result1 as $st){
				$st_code = $st['st_code'];
				$st_name = $st['st_name'];
			}
			echo "전술 정보를 수정합니다. <br>";
		?>
		
			<form action="st_correct2.php" method="post">
			<table border="1">
				<tr> <td>전술 코드</td> <td> <input type="text" value = "<?php echo $st_code;?>" name="st_code"> </td> </tr>
				<tr> <td>전술명</td> <td> <input type="text" value = "<?php echo $st_name;?>" name="st_name"> </td> </tr>
				<tr> <td>내용</td> <td> <textarea name="st_contents" rows="10" cols="50">
				</textarea> </td> </tr>
				<tr> <td>참고 영상 링크</td> <td> <input type="text" name="st_Link"> </td> </tr>
				<tr> <td colspan="2" align="center"> <input type="submit" value="Submit"> </td> </tr>
			</table>
		</form>
		
	</body>
</html>