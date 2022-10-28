@foreach($catalog as $val)
<li class="jqtree_common" role="presentation" aria-selected="false"><div class="jqtree-element jqtree_common" role="presentation"><span class="jqtree-title jqtree_common" role="treeitem" aria-level="1" aria-selected="false" aria-expanded="false"  title="Use Drag &amp; Drop to reorder"><a href="/product/{{$val->code}}">{{$val->name}}</a></span></div></li>
@endforeach
