<style>
    .popups {
    position: fixed;
    top: 18%;
    left: 34%;
    height: 500px;
    padding: 20px;
    width: 1100px;
    margin-left: -200px;
    background: #fff;
    border: 1px solid orange;
    border-radius: 4px;
    z-index: 99999;
    opacity: 1;
}

</style>
<script>
    $(document).ready(function($) {
        // Нажатие "Закрыть"
        $('.popup-closed').click(function() {
            $(this).parents('.popup-symist').fadeOut();
            return false;
        });       
      
        // Нажатие клавиши Esc
        $(document).keydown(function(e) {
            if (e.keyCode === 27) {
                e.stopPropagation();
                $('.popup-symist').fadeOut();
            }
        });
         
        // Клик по фону
        $('.popup-іньшіе').click(function(e) {
            if ($(e.target).closest('.popups').length == 0) {
                $(this).fadeOut();                 
            }
        });
    });
    </script>





    <div class="popup-symist" id="popup-symist" style="display:none;">
        <div class="popups"><a class="popup-closed" href="#">X</a>
            <div>
                @if (session('success'))
                <div class="alert alert-success" role="alert">
          
                    <h4><i class="icon fa fa-check"></i> {{ session('success')}}</h4>
                </div>
                @endif
                <div style="height:20px;"></div>
                <form action="{{ route('symistprod.store')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<input type="text" name="num" style="display:none;" value="{{$product[0]->mpn}}">
		<div class="form-group">
		</div>
		
		<div class="form-group">
		<label><p>Один до багатьох </p>Скопіювати сумісність з обраної номенклатури:</label><p></p>
		<input type="checkbox" name="full"><p></p>

		<div class="form-group">
	    <label><p>Оберіть товарну групу для пошуку сумісної номенклатури</p></label><p></p>
		    <select name="cat" id="cat">
		    <option>Оберіть товарну групу</option>
		    @foreach($cats as $vic)
			<option value="{{ $vic['code'] }}">{{ $vic['name'] }}</option>
		    @endforeach
		    </select>
		</div>
		<label class="control-label" data-name="nameEnUs"><span class="label-text">Оберіть сумістну номенклатуру</span><span class="required-sign"> *</span></label>
                        <div class="field" data-name="nameEnUs">
			    <p>По назві</p>
                            <input style="width:50%" list="search_results" type="text" name="symproduct" placeholder="Пошук номенлатури по назві"  id="search_fields" onkeyup="search(this.value)">
                            <datalist class="search_results" id="search_results"></datalist>
		</div>
		<div>
			    <p>По коду номенклатури</p>
			    <input style="width:50%;" list="search_resultk" type="text" name="synkod" placeholder="Поук номенлатури по коду номенклатури" id="search_kod" onkeyup="searchk(this.value)">
			    <datalist class="search_resultk" id="search_resultk"></datalist>
		</div>
		<div class="form-group">
		    <p> </p>
		    <label>Оберіть групу сумісності</label>
		    <p> </p>
		    <select name="symista">
			<option value="null">Оберіть групу сумісності</option>
			    @foreach($symisteds as $vi)
			<option value="{{ $vi['code'] }}">{{ $vi['name'] }}</option>
			    @endforeach
		    </select>
		</div>
    <div><p> </p></div>
		<button class="btn btn-primary action" type="submit">Додати сумістність</button>
		</form>
    </div>
</div>
</div>
</div>
<script>
    function search(word) {
    if ($('#search_fields').val()!='') {
    
    console.log(word);
	var cat = document.getElementById('cat').value;
    console.log(cat);
    $.ajax({
          url: "{{route('searchprod')}}",
          type: "GET",
          data: {
            name: word,
	    cat: cat,
          },
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
          success: (data) => {
           
            $('.search_results').html(data)
          }
        });      
    }
}
</script>
<script>
    function searchk(word) {
	if ($('#search_kod').val()!='') {
		var cat = document.getElementById('cat').value;
		console.log(cat);
		$.ajax({
		    url: "{{route('searchprod')}}",
		    type: "GET",
		    data:{
			    kod:word,
			    cat:cat,
},
		    headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
	    success: (data) => {
		$('.search_resultk').html(data)
	}	
});
}
}
</script>




