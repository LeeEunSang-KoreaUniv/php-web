<html>
	<head>
		<title>기우회 전술 정보 조회</title>
	</head>
	
	<body>
		<h1> 
			<a href = "index.php"><고려대학교 농구 동아리 기우회 처음 페이지로 돌아가기></a>
		</h1>
		
		<form name="p_search" action="stretegy_display.php" method="POST">
			전술 코드 검색 : <input type = 'text' name = 'code'>
			<input type = 'submit' value = 'Search'>
		</form>
		
		<?php
		$connect = mysqli_connect("localhost", "db2018170603", "eslee850@naver.com", "db2018170603");
		$insert_query = "SELECT * FROM stretegy";
		$result = mysqli_query($connect, $insert_query);
		$ID = $_POST['code'];
		?>
	
		<table width = "1500" border = "1">
			<tr bgcolor = 'lightgray' align = 'center'>
				<th>전술 정보</th> <th>전술 코드</th> <th>전술명</th> <th>내용</th> <th>참고 영상 링크</th> <th>기타</th>
			</tr>
			<?php if ($ID == Null) {?>
				<?php $i = 1; ?>
				<?php foreach($result as $st) {?>
				
					<tr align = 'center'>
						<td><?php echo $i;?></td>
						<td><?php echo $st['st_code'];?></td>
						<td><?php echo $st['st_name'];?></td>
						<td><?php echo $st['st_contents'];?></td>
						<td><?php echo $st['st_Link'];?></td>
						<td>
							<form name="correct" action="st_correct.php" method="POST">
								<button type = "submit" name = "st" value = <?php echo $st['st_code'];?>>수정</button> 
							</form>
							<form name="correct" action="st_delete.php" method="POST">
								<button type = "submit" name = "st" value = <?php echo $st['st_code'];?>>삭제</button> 
							</form>
						</td>
					</tr>
					
					<?php $i++;}?>
				
			<?php } else {?>
				<?php $i = 1; ?>
				<?php foreach($result as $st) {?>
				
					<tr align = 'center'>
						<?php if ($ID == $st['st_code']) {?>
						<td><?php echo $i;?></td>
						<td><?php echo $st['st_code'];?></td>
						<td><?php echo $st['st_name'];?></td>
						<td><?php echo $st['st_contents'];?></td>
						<td><?php echo $st['st_Link'];?></td>
						<td>
							<form name="correct" action="st_correct.php" method="POST">
								<button type = "submit" name = "st" value = <?php echo $st['st_code'];?>>수정</button> 
							</form>
							<form name="correct" action="st_delete.php" method="POST">
								<button type = "submit" name = "st" value = <?php echo $st['st_code'];?>>삭제</button> 
							</form>
						</td>
						<?php $i++;}?>
						<?php }?>
					</tr>
					
			<?php }?>
		</table>
		
	</body>
</html>