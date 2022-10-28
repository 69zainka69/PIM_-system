
    @foreach ($association as $item)


<tr data-id="{{$item->association_id}}" class="list-row">
<td class="cell" data-name="association">
<a title="{{$item->association_id}}">{{$item->association_id}}</a>
</td>


<td class="cell" data-name="mainProduct">
<a href="/productes/{{$item->main_product_id}}" title="{{$item->main_product_id}}">{{$item->main_product_id}}</a>


</td>


<td class="cell" data-name="relatedProduct">
<a href="/productes/{{$item->related_product_id}}" title="{{$item->related_product_id}}">{{$item->related_product_id}}</a>


</td>


<td class="cell" data-name="buttons">
<div class="list-row-buttons btn-group pull-right">
<button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
<span class="fas fa-ellipsis-v"></span>
</button>
<ul class="dropdown-menu pull-right">
<form>
<li><a href="#AssociatedProduct/edit/ADAPT-CAN-3218B001/PMFD-CAN-IR2320" class="action" data-action="quickEdit" data-id="ADAPT-CAN-3218B001/PMFD-CAN-IR2320">видалити</a></li>
</form>
</ul>
</div>
</td>
    </tr>
    


    @endforeach

 
