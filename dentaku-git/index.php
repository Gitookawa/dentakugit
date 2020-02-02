<!DOCTYPE html>
 <head>
  <meta charset="UTF-8" />
   <title>電卓プログラム</title>
 <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
　</head>
<body>
<button id="update">プログラムテスト</button>
<button id="btn">2</button>
<div id="result"></div>
<!--
<form method="post" name="form_1" action="index.php">
     <input type="hidden" name="kensaku" value="チェア">
      <a href="javascript:form_1.submit()">オフィスチェア</a>
-->
<script>
$(function() {
  // ボタンクリック時にload.phpを非同期通信で取得
  $('#update').click(function() {
    $('#result').load('dentaku.php');
  });
});
</script>
<script>
$(function() {
$('#btn').click(function(){
  type: 'POST',
  url: './dentaku.php',
  data: {
    name1 : "a"
 });
});

</script>
</body>
</html>
