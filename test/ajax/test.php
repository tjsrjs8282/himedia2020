<!DOCTYPE html>
<html lang="ko">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<title>문서 제목</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
	<script>
		$(function(){

			// json 파일을 data로 가져옴
			$.getJSON('book.json', function(data){
				var books = data.book;	// 배열 객체 선택

				// 데이터 순회
				$(books).each(function(i,obj){
					var title = obj.title;
					var author = obj.author;
					var price = obj.price;
					var txt = "<li>" + title + ", " + author + ", "+ price + "</li><hr>";
						$('.han').append(txt);
				}); // 순회 끝
				
			});	// AJAX 호출 끝
		});	
		
	</script>
	<style>
		li{list-style:none}
	</style>
</head>
<body>
	<div class="wrap">
		<ul class="han"></ul>
	</div>
</body>
</html>