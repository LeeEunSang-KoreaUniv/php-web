<html>
	<head>
		<title>기우회 선수단 명단 수정</title>
	</head>
	
	<body>
		<h1> 
			<a href = "index.php"><고려대학교 농구 동아리 기우회 처음 페이지로 돌아가기></a>
		</h1>
		<?php
			$ID = $_POST['player'];
			$connect = mysqli_connect("localhost", "db2018170603", "eslee850@naver.com", "db2018170603");
			$sql1 = "SELECT * FROM players
								WHERE stu_ID = '$ID'";
			
			$result1 = mysqli_query($connect, $sql1);
			
			foreach($result1 as $player){
				$stu_ID = $player['stu_ID'];
				$stu_name = $player['stu_name'];
				$backnumber = $player['backnumber'];
				$postion = $player['position'];
			}
			echo "선수 정보를 수정합니다. <br>";
		?>
		
		<?php
			$sql2 = "SELECT backnumber FROM players";
			$result2 = mysqli_query($connect, $sql2);
			$back = [];
			for($i = 0; $i < 100; $i++) {
				$back[$i] = 0;
			}
			while($row = mysqli_fetch_array($result2)){
				$back[$row['0']] = 1;
			}
		?>
		
		<form name="register" action="player_correct2.php" method="POST">
			<p>학번 : <input type = "text" value = "<?php echo $stu_ID;?>" name="stu_ID"></p>
			<p>이름 : <input type = "text" value = "<?php echo $stu_name;?>" name="stu_name"></p>
			<p>등번호 : 
				<select name="backnumber">
					<option value = "<?php echo $backnumber;?>"><?php echo $backnumber;?></option>
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
		
		<?php
			$connect = mysqli_connect("localhost", "db2018170603", "eslee850@naver.com", "db2018170603");
			$insert_query = "SELECT * FROM players
								WHERE stu_ID = '$ID'";
			
			$result = mysqli_query($connect, $insert_query);
		?>
	
		
	</body>
</html>