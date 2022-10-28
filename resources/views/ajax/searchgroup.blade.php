@foreach($catalog as $item)


<tr data-id="{{$item->code}}" class="list-row">



<td class="cell" data-name="name">
<a href="/grup/{{$item->code}}" class="link" data-id="{{$item->code}}" title="{{$item->name}}">{{$item->name}}</a>

</td>


<td class="cell" data-name="code">
<span class="pre-label">{{$item->code}}</span>

</td> 








<td class="cell" data-name="buttons">
<div class="list-row-buttons btn-group pull-right">
<button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
<span class="fas fa-ellipsis-v"></span>
</button>
<ul class="dropdown-menu pull-right">
<li><a href="{{route('grupslist', $item->code)}}" class="action" data-action="quickEdit" data-id="{{$item->code}}">редагувати</a></li>
<li><a href="javascript:" class="action" data-action="quickRemove" data-id="{{$item->code}}">Вилучити</a></li>
</ul>
</div>
</td>
</tr>

@endforeach
