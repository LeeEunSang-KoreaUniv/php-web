<html>
	<head>
		<title>기우회 선수단 명단</title>
	</head>
	
	<body>
		<h1> 
			<a href = "index.php"><고려대학교 농구 동아리 기우회 처음 페이지로 돌아가기></a>
		</h1>
		
		<form name="p_search" action="players.php" method="POST">
			선수 학번 검색 : <input type = 'text' name = 'ID'>
			<input type = 'submit' value = 'Search'>
		</form>
		
		<?php
		$connect = mysqli_connect("localhost", "db2018170603", "eslee850@naver.com", "db2018170603");
		$insert_query = "SELECT * FROM players";
		$result = mysqli_query($connect, $insert_query);
		$ID = $_POST['ID'];
		?>
	
		<table width = "800" border = "1">
			<tr bgcolor = 'lightgray' align = 'center'>
				<th>선수단</th> <th>학번</th> <th>이름</th> <th>등번호</th> <th>포지션</th> <th>기타</th>
			</tr>
			<?php if ($ID == Null) {?>
				<?php $i = 1; ?>
				<?php foreach($result as $player) {?>
				
					<tr align = 'center'>
						<td><?php echo $i;?></td>
						<td><?php echo $player['stu_ID'];?></td>
						<td><?php echo $player['stu_name'];?></td>
						<td><?php echo $player['backnumber'];?></td>
						<td><?php echo $player['position'];?></td>
						<td>
							<form name="correct" action="player_correct.php" method="POST">
								<button type = "submit" name = "player" value = <?php echo $player['stu_ID'];?>>수정</button> 
							</form>
							<form name="correct" action="player_delete.php" method="POST">
								<button type = "submit" name = "player" value = <?php echo $player['stu_ID'];?>>삭제</button> 
							</form>
						</td>
					</tr>
					
					<?php $i++;}?>
				
			<?php } else {?>
				<?php $i = 1; ?>
				<?php foreach($result as $player) {?>
				
					<tr align = 'center'>
						<?php if ($ID == $player['stu_ID']) {?>
						<td><?php echo $i;?></td>
						<td><?php echo $player['stu_ID'];?></td>
						<td><?php echo $player['stu_name'];?></td>
						<td><?php echo $player['backnumber'];?></td>
						<td><?php echo $player['position'];?></td>
						<td>
							<form name="correct" action="player_correct.php" method="POST">
								<button type = "submit" name = "player" value = <?php echo $player['stu_ID'];?>>수정</button> 
							</form>
							<form name="correct" action="player_delete.php" method="POST">
								<button type = "submit" name = "player" value = <?php echo $player['stu_ID'];?>>삭제</button> 
							</form>
						</td>
						<?php $i++;}?>
						<?php }?>
					</tr>
					
			<?php }?>
		</table>
		
	</body>
</html>
