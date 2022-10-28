<script type="text/javascript">

    function showHide(element_id) {
     
            
            var obj1 = document.getElementById('block_id');
            var obj2 = document.getElementById('block_id2');
            var obj3 = document.getElementById('block_id3');

           
                obj1.style.display = "block"; 
                obj2.style.display = "none";
                obj3.style.display = "none";
            
        }   

        function showHidet() {
   
            
            var obj1 = document.getElementById('block_id');
            var obj2 = document.getElementById('block_id2');
            var obj3 = document.getElementById('block_id3');

      
                obj2.style.display = "block"; 
                obj1.style.display = "none";
                obj3.style.display = "none";
            
        }  
        function showHider() {
   
            
   var obj1 = document.getElementById('block_id');
   var obj2 = document.getElementById('block_id2');
   var obj3 = document.getElementById('block_id3');


       obj3.style.display = "block"; 
       obj1.style.display = "none";
       obj2.style.display = "none";
   
}  

</script>

<a href="javascript:void(0)" onclick="showHide()">Скрыть/Показать 1111</a><br/><br/>
<div id="block_id" style="display: none;">
    1<br/>
    <br/>
   11111111
</div>

<a href="javascript:void(0)" onclick="showHidet()">Скрыть/Показать 2222</a><br/><br/>
<div id="block_id2" style="display: none;">
    2<br/>
    <br/>
    22222222
</div>

<a href="javascript:void(0)" onclick="showHider()">Скрыть/Показать 333333</a><br/><br/>
<div id="block_id3" style="display: none;">
    3<br/>
    <br/>
   333333333333
</div>

