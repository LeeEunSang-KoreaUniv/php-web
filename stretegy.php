<html>
	<head>
		<title>기우회 전술 등록</title>
	</head>
	
	<body>
		<h1> 
			<a href = "index.php"><고려대학교 농구 동아리 기우회 첫 페이지로 돌아가기></a>
		</h1>
		
		<form action="stretegy2.php" method="post">
			<table border="1">
				<tr> <td>전술 코드</td> <td> <input type="text" name="st_code"> </td> </tr>
				<tr> <td>전술명</td> <td> <input type="text" name="st_name"> </td> </tr>
				<tr> <td>내용</td> <td> <textarea name="st_contents" rows="10" cols="50">
				</textarea> </td> </tr>
				<tr> <td>참고 영상 링크</td> <td> <input type="text" name="st_Link"> </td> </tr>
				<tr> <td colspan="2" align="center"> <input type="submit" value="Submit"> </td> </tr>
			</table>
		</form>
	</body>
</html>