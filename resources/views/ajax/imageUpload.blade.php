<style>
    .popup {
    position: fixed;
    top: 20%;
    left: 50%;
    height: 300px;
    padding: 20px;
    width: 500px;
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
        $('.popup-close').click(function() {
            $(this).parents('.popup-black').fadeOut();
            return false;
        });       
      
        // Нажатие клавиши Esc
        $(document).keydown(function(e) {
            if (e.keyCode === 27) {
                e.stopPropagation();
                $('.popup-black').fadeOut();
            }
        });
         
        // Клик по фону
        $('.popup-black').click(function(e) {
            if ($(e.target).closest('.popup').length == 0) {
                $(this).fadeOut();                 
            }
        });
    });
    </script>





    <div class="popup-black" id="popup-black" style="display:none;">
        <div class="popup"><a class="popup-close" href="#">X</a>
            <div>
                @if (session('success'))
                <div class="alert alert-success" role="alert">
          
                    <h4><i class="icon fa fa-check"></i> {{ session('success')}}</h4>
                </div>
                @endif
                <div style="height:50px;"></div>
                <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
          
                        <div class="col-md-12">
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div style="height:50px;"></div>
                        <div class="form-group">
                            <label for="product_id">Зробити головним зображенням</label>
                            <input type="checkbox" name="glav">
                          </div>
         
                        <div style="display:none;" class="form-group">
                            <label for="product_id">продукт</label>
                            <input name="number"  value="{{$product[0]->mpn}}"/>
                          </div>
                         
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success">Завантажити зображення</button>
                        </div>
           
                    </div>
                </form>
    </div>
  
</div>
</div>
