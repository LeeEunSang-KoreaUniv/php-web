<html>
	<head>
		<title>기우회 신입생 가입 신청서 작성</title>
	</head>
	
	<body>
		<h1> 
			<a href = "index.php"><고려대학교 농구 동아리 기우회 첫 페이지로 돌아가기></a>
		</h1>
		
		<?php
			$connect = mysqli_connect("localhost", "db2018170603", "eslee850@naver.com", "db2018170603");
			$sql = "SELECT backnumber FROM players";
			$result = mysqli_query($connect, $sql);
			$back = [];
			for($i = 0; $i < 100; $i++) {
				$back[$i] = 0;
			}
			while($row = mysqli_fetch_array($result)){
				$back[$row['0']] = 1;
			}
		?>
		<form name="register" action="register2.php" method="POST">
			<p>학번 : <input type = "text" name="stu_ID"></p>
			<p>이름 : <input type = "text" name="stu_name"></p>
			<p>등번호 : 
				<select name="backnumber">
					<option value = "">등번호 선택</option>
					<?php for ($j = 0; $j <= 99; $j++) {?>
						<?php if($back[$j] == 0){?>
								<option value = "<?php echo $j?>"><?php echo $j?></option>
						<?php }?>	
					<?php }?>
				</select>
			</p>
			<p>포지션 :
				<input type="radio" name="position" value="G">G
				<input type="radio" name="position" value="F">F
				<input type="radio" name="position" value="C">C
			</p>
			<p>
				<input type="submit" name="formbutton1" value="Send">
			</p>
		</form>
	</body>
</html>