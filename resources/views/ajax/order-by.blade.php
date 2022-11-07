
<table class="table full-table table-scrolled">
    <thead>
        <tr>
            
            <th>
                <div>
                        <a  class="sort" data-name="name">Код</a>
                       
                </div>
            </th>
            <th>
                <div>
                           Назва товару
                </div>
            </th>
            <th>
                <div>
                        <a class="sort" data-name="catalog">Бренд</a>
                </div>
            </th>
            <th>
                <div>
                    Група закупників
                </div>
            </th>
            <th>
                <div>
                        <a  class="sort" data-name="sku">Ціна</a>
                        
                </div>
            </th>
            <th>
                <div>
                        <a class="sort" data-name="isActive">Асортиментна група</a>
                        
                </div>
            </th>
            <th>
                <div>
                    Зображення
                </div>
            </th>
            <th>
                <div>
                    Товарна група
                </div>
            </th>
            <th width="25" style="">
                <div>
                            
                </div>
            </th>
        </tr>
    </thead>
    <tbody>
       
        @foreach($product as $item)
        @php 
       
        
        if($item->long_description_en_us && $item->long_description && $item->price>0 && isset($images[$item->mpn])){
            $style="#88ff88";
        }elseif ($item->price<1 && !isset($images[$item->mpn])){
            $style = "7a3838";
        }else{
                $style = "#fba153";
            }
            @endphp


        <tr style="background-color: {{$style}}" class="list-row">
       
            <td class="cell" data-name="isActive">
                <a href="{{ route('productes.show', $item['mpn'])}}" class="link" data-id="{{$item->mpn}}" title="{{$item->mpn}}">{{$item->mpn}}</a>
            </td>

<td class="cell" data-name="name">
    
<a href="{{ route('productes.show', $item['mpn'])}}" class="link" data-id="{{$item->mpn}}" title="{{$item->name}}">{{$item->name}}</a>

</td>
<td class="cell" data-name="tag">
  
    {{ $brandis[mb_strtolower($item->brand_id)]}}
</td>
<td class="cell" data-name="taskStatus">
    {{$item->producer}}
    </td>
    
    <td class="cell" data-name="taskStatus">
        {{$item->price}}
        </td>
        <td class="cell" data-name="sku">
            <span class="pre-label">{{$item->tag}}</span>
            </td>

<td class="cell" data-name="mainImage">
    @if(isset($images[$item->mpn])) <div class="attachment-preview">
        <a data-action="showImagePreview" data-id="NTaJswgccclhx2RzV0of" href="http://sitesdata.vm.net/upload/files/06lsx/xjzn3/8tonu/3itw6/zwvcd/lwxu4/{{$images[$item->mpn]}}">
            <img width="64" src="http://sitesdata.vm.net/upload/files/06lsx/xjzn3/8tonu/3itw6/zwvcd/lwxu4/{{$images[$item->mpn]}}" class="image-preview"></a></div>
@endif
</td>


<td class="cell" data-name="catalog">
    <a href="/product/{{$item->catalog_id}}">{{$cataloge[mb_strtolower($item->catalog_id)]}}</a>


</td>









<td class="cell fixed-button" data-name="buttons" style="left: 1060.01px;">
<div class="list-row-buttons btn-group pull-right">
<button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
    <span class="fas fa-ellipsis-v"></span>
</button>
<ul class="dropdown-menu pull-right">
    <li><button><a href="{{ route('productes.show', $item['mpn'])}}" class="action" data-action="quickView" data-id="SCRD-1-64-930">Редагувати</a></button></li>
    <form method="POST" action="{{ route('productes.update', $item['mpn'])}}">
        @csrf
	    @method('PUT')
            <input type="text" name="arhive" id="arhive" value="1" style="display:none;">
        <li><button class="btn" type="submit" class="action" data-action="quickRemove" data-id="SCRD-1-64-930">Зробити архівним</button></li>
    </form>
</ul>
</div>

</td>


        </tr>
       
@endforeach

       
    </tbody>
</table>
{{$product->appends(request()->query())->links()}}

