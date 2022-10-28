<script>
    $(document).ready(function($) {
        // Нажатие "Закрыть"
        $('.popup-close').click(function() {
            $(this).parents('.popup-atrib').fadeOut();
            return false;
        });       
      
        // Нажатие клавиши Esc
        $(document).keydown(function(e) {
            if (e.keyCode === 27) {
                e.stopPropagation();
                $('.popup-atrib').fadeOut();
            }
        });
         
        // Клик по фону
        $('.popup-atrib').click(function(e) {
            if ($(e.target).closest('.popup').length == 0) {
                $(this).fadeOut();                 
            }
        });
    });
    </script>





    <div class="popup-atrib" id="popup-atrib" style="display:none;">
        <div class="popup"><a class="popup-close" href="#">X</a>
            <div>
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <h4><i class="icon fa fa-check"></i> {{ session('success')}}</h4>
                </div>
                @endif
                <div style="height:50px;"></div>
                <form action="{{ route('edittatrib.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
		    @method('POST')
                    <div class="row">
          
                        <div class="col-md-12">
				<label>Назва нового атрибуту</label>
                            <input type="text" name="nameatrib" class="form-control">
                        </div>
                        <div style="height:50px;"></div>
			<label>Зробити цей атрибут фільтром</label>
			<input type="checkbox" name="isfilter">
                        <div style="display:none;" class="form-group">
                            <label for="product_id">продукт</label>
                          <input type="text" name="product" value="{{$product[0]->mpn}}"/>
                          <input type="text" name="site" value="{{$product[0]->product_family_id}}">

		    </div>
		    <div style="height:30px;"></div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success">Додати новий атрибут</button>
                        </div>
           
                    </div>
                </form>
    </div>
  
</div>
</div>
