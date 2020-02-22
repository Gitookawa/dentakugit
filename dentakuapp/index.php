<!DOCTYPE html>
 <head>
  <meta charset="UTF-8">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link href="css/index.css" rel="stylesheet">

<div class="result">計算する値を入力してください</div>
<!--<input type="number" value="10" class="input_number" placeholder="数値を入力してください">-->

<!--<input type="hidden" class="input_number" value="6">-->
<div id ="dentaku">
<input type="button" class="input_number0" value="0">
<input type="button" class="input_number1" value="1">
<input type="button" class="input_number2" value="2">
<input type="button" class="input_number3" value="3">
<input type="button" class="input_number4" value="4">
<input type="button" class="input_number5" value="5">
<input type="button" class="input_number6" value="6">
<input type="button" class="input_number7" value="7">
<input type="button" class="input_number8" value="8">
<input type="button" class="input_number9" value="9">
<input type="button" class="input_numberC" value="C">
<input type="button" class="input_number10" value="+">
<input type="button" class="input_number11" value="−">
<input type="button" class="input_number12" value="×">
<input type="button" class="input_number13" value="÷">
<input type="button" class="input_number14" value="=">
</div>




<script>
$(function(){

    $('.input_number14').click(function(){
        $.ajax({
            url: 'test.php',
            type: 'GET',
            dataType: 'text',
            data : {
                no : $('.input_number14').val()
            }
        }).done(function(data){

            $('.result').text(data);

        }).fail(function(data){

            alert('通信失敗！');

        });
    });
});


$(function(){

    $('.input_number13').click(function(){
        $.ajax({
            url: 'test.php',
            type: 'GET',
            dataType: 'text',
            data : {
                no : $('.input_number13').val()
            }
        }).done(function(data){

            $('.result').text(data);

        }).fail(function(data){

            alert('通信失敗！');

        });
    });
});

 $(function(){

    $('.input_number12').click(function(){
        $.ajax({
            url: 'test.php',
            type: 'GET',
            dataType: 'text',
            data : {
                no : $('.input_number12').val()
            }
        }).done(function(data){

            $('.result').text(data);

        }).fail(function(data){

            alert('通信失敗！');

        });
    });
});

$(function(){

    $('.input_number11').click(function(){
        $.ajax({
            url: 'test.php',
            type: 'GET',
            dataType: 'text',
            data : {
                no : $('.input_number11').val()
            }
        }).done(function(data){

            $('.result').text(data);

        }).fail(function(data){

            alert('通信失敗！');

        });
    });
});

  $(function(){

    $('.input_number10').click(function(){
        $.ajax({
            url: 'test.php',
            type: 'GET',
            dataType: 'text',
            data : {
                no : $('.input_number10').val()
            }
        }).done(function(data){

            $('.result').text(data);

        }).fail(function(data){

            alert('通信失敗！');

        });
    });
});




    $(function(){

    $('.input_numberC').click(function(){
        $.ajax({
            url: 'test.php',
            type: 'GET',
            dataType: 'text',
            data : {
                no : $('.input_numberC').val()
            }
        }).done(function(data){

            $('.result').text(data);

        }).fail(function(data){

            alert('通信失敗！');

        });
    });
});

$(function(){
    $('.input_number0').click(function(){
        $.ajax({
            url: 'test.php',
            type: 'GET',
            dataType: 'text',
            data : {
                no : $('.input_number0').val()
            }
        }).done(function(data){

            $('.result').text(data);

        }).fail(function(data){

            alert('通信失敗！');

        });
    });
});

$(function(){
    
    $('.input_number1').click(function(){
        $.ajax({
            url: 'test.php',
            type: 'GET',
            dataType: 'text',
            data : {
                no : $('.input_number1').val()
            }
        }).done(function(data){
            
            $('.result').text(data); 
            
        }).fail(function(data){
           
            alert('通信失敗！');
                    
        });
    });
});



$(function(){

    $('.input_number2').click(function(){
        $.ajax({
            url: 'test.php',
            type: 'GET',
            dataType: 'text',
            data : {
                no : $('.input_number2').val()
            }
        }).done(function(data){

            $('.result').text(data);

        }).fail(function(data){

            alert('通信失敗！');

        });
    });
});

$(function(){
    
    $('.input_number3').click(function(){
        $.ajax({
            url: 'test.php',
            type: 'GET',
            dataType: 'text',
            data : {
                no : $('.input_number3').val()
            }
        }).done(function(data){
            
            $('.result').text(data); 
            
        }).fail(function(data){
           
            alert('通信失敗！');
                    
        });
    });
});



$(function(){
    
    $('.input_number4').click(function(){
        $.ajax({
            url: 'test.php',
            type: 'GET',
            dataType: 'text',
            data : {
                no : $('.input_number4').val()
            }
        }).done(function(data){
            
            $('.result').text(data); 
            
        }).fail(function(data){
           
            alert('通信失敗！');
                    
        });
    });
});



$(function(){
    
    $('.input_number5').click(function(){
        $.ajax({
            url: 'test.php',
            type: 'GET',
            dataType: 'text',
            data : {
                no : $('.input_number5').val()
            }
        }).done(function(data){
            
            $('.result').text(data); 
            
        }).fail(function(data){
           
            alert('通信失敗！');
                    
        });
    });
});


$(function(){
    
    $('.input_number6').click(function(){
        $.ajax({
            url: 'test.php',
            type: 'GET',
            dataType: 'text',
            data : {
                no : $('.input_number6').val()
            }
        }).done(function(data){
            
            $('.result').text(data); 
            
        }).fail(function(data){
           
            alert('通信失敗！');
                    
        });
    });
});

$(function(){
    
    $('.input_number7').click(function(){
        $.ajax({
            url: 'test.php',
            type: 'GET',
            dataType: 'text',
            data : {
                no : $('.input_number7').val()
            }
        }).done(function(data){
           
            $('.result').text(data); 
            
        }).fail(function(data){
          
            alert('通信失敗！');
                    
        });
    });
});
$(function(){
    
    $('.input_number8').click(function(){
        $.ajax({
            url: 'test.php',
            type: 'GET',
            dataType: 'text',
            data : {
                no : $('.input_number8').val()
            }
        }).done(function(data){
            
            $('.result').text(data);
            
        }).fail(function(data){
          
            alert('通信失敗！');
                    
        });
    });
});

$(function(){
    
    $('.input_number9').click(function(){
        $.ajax({
            url: 'test.php',
            type: 'GET',
            dataType: 'text',
            data : {
                no : $('.input_number9').val()
            }
        }).done(function(data){
            
            $('.result').text(data); 
            
        }).fail(function(data){
            
            alert('通信失敗！');
                    
        });
    });
});

</script>

</head>
