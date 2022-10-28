<table class="table fixed-header-table hidden table-scrolled" style="position: fixed; left: 419.986px; top: 47px; right: 0px; z-index: 1; width: 1176px;">
    <thead>
        <tr>
            <th width="40" data-name="r-checkbox" style="width: 36px;">
                <span class="select-all-container"><input type="checkbox" class="select-all fixed"></span>
                <div class="btn-group checkbox-dropdown">
                    <a class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:" data-action="selectAllResult">Select All Results</a></li>
                    </ul>
                </div>
            </th>
            <th style="width: 444px;">
                    <div>
                        <a href="javascript:" class="sort" data-name="name">
                                Назва
                        </a>
                                <span>↑</span>
                    </div>
            </th>
            <th style="width: 116px;">
                        Основне зображення
            </th>
            <th style="width: 116px;">
                    <div>
                        <a href="javascript:" class="sort" data-name="catalog">
                                Товарна група
                        </a>
                    </div>
            </th>
            <th style="width: 116px;">
                        Бренд
            </th>
            <th style="width: 116px;">
                    <div>
                        <a href="javascript:" class="sort" data-name="sku">
                                код 1С
                        </a>
                    </div>
            </th>
            <th style="width: 116px;">
                    <div>
                        <a href="javascript:" class="sort" data-name="isActive">
                                Активний
                        </a>
                    </div>
            </th>
            <th style="width: 116px;">
                        Ціна
            </th>
            <th style="width: 25px;">
                        
            </th>
        </tr>
    </thead>
</table>
<table class="table full-table table-scrolled">
    <thead>
        <tr>
            
            <th>
                <div>
                        <a  class="sort" data-name="name">Назва</a>
                       
                </div>
            </th>
            <th>
                <div>
                            Основне зображення
                </div>
            </th>
            <th>
                <div>
                        <a class="sort" data-name="catalog">Товарна група</a>
                </div>
            </th>
            <th>
                <div>
                    Бренд
                </div>
            </th>
            <th>
                <div>
                        <a  class="sort" data-name="sku">код 1С</a>
                        
                </div>
            </th>
            <th>
                <div>
                        <a class="sort" data-name="isActive">код номенклатури</a>
                        
                </div>
            </th>
            <th>
                <div>
                            Ціна
                </div>
            </th>
            <th>
                <div>
                            Група закупників
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
       




<td class="cell" data-name="name">
    
<a href="{{ route('productes.show', $item['mpn'])}}" class="link" data-id="{{$item->mpn}}" title="{{$item->name}}">{{$item->name}}</a>

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


<td class="cell" data-name="tag">
  
    {{ $brandis[mb_strtolower($item->brand_id)]}}
</td>


<td class="cell" data-name="sku">
<span class="pre-label">{{$item->sku}}</span>

</td>


<td class="cell" data-name="isActive">
    <span class="pre-label">{{$item->mpn}}</span>
</td>


<td class="cell" data-name="taskStatus">
{{$item->price}}
</td>
<td class="cell" data-name="taskStatus">
    {{$item->producer}}
    </td>

<td class="cell fixed-button" data-name="buttons" style="left: 1060.01px;">
<div class="list-row-buttons btn-group pull-right">
<button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
    <span class="fas fa-ellipsis-v"></span>
</button>
<ul class="dropdown-menu pull-right">
    <li><a href="{{ route('productes.show', $item['mpn'])}}" class="action" data-action="quickView" data-id="SCRD-1-64-930">Редагувати</a></li>
    <li><a href="{{ route('productes.destroy', $item['mpn'])}}" class="action" data-action="quickRemove" data-id="SCRD-1-64-930">Вилучити</a></li>
</ul>
</div>

</td>


        </tr>
       
@endforeach

       
    </tbody>
</table>
{{$product->appends(request()->query())->links()}}

