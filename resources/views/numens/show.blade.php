@extends('lay.first')
@section('title')
Менеджер - {{ Auth::user()->name }}
@endsection
@php
$i = 0;
@endphp
@section('content')
    <style>
        .popup-black{
           display: none;
        }
    </style>

<script>
    $(document).ready(function () {
            $('.addimage').click(function(){
               console.log('fgdfh');
               var div = document.getElementById('popup-black')
            div.style.display = div.style.display === 'none' ? 'block' : 'none'
})

});
</script>
<script>
    $(document).ready(function () {
            $('.addatrib').click(function(){
               var div = document.getElementById('popup-atrib')
            div.style.display = div.style.display === 'none' ? 'block' : 'none'
})

});
</script>
<script>
    $(document).ready(function () {
            $('.addsymist').click(function(){
               console.log('fgdfh');
               var div = document.getElementById('popup-symist')
            div.style.display = div.style.display === 'none' ? 'block' : 'none'
})

});
</script>



<div class="header page-header collapsed detail-page-header" style="width: 1460px; margin-left: 200px;"><div class="row">
    <div>
        <h3><div class="header-breadcrumbs fixed-header-breadcrumbs"><a href="#Dashboard" class="action">Dashboard</a><span class="subsection"><a href="/product" class="action" data-action="navigateToRoot">Номенклатури</a></span><span>{{$product[0]->name}}</span></div><div class="header-title">{{$product[0]->name}}</div></h3>
        @if (session('success'))
        <div class="alert alert-success" role="alert">

            <h4><i class="icon fa fa-check"></i> {{ session('success')}}</h4>
        </div>
        @endif
    </div>
    <div class="col-lg-4 col-sm-4 header-buttons-container">
       
    </div>
    <div class="col-lg-5 col-sm-5 search-container hidden"></div>
</div>

</div>
<div class="record"><div class="detail" id="product-detail-4490">
    <div class="detail-button-container button-container record-buttons clearfix collapsed detail-tree-button-container" style="width: 1489px; margin-left: 201px;">
        <div class="btn-group pull-left" role="group">
        
        </div>
        <div class="panel-navigation panel-left pull-left" style="width: calc(100% - 132px);"><ul class="nav nav-pills">
   
</ul></div>
        <div class="clearfix"></div>
    </div>
    <div class="detail-button-container button-container edit-buttons hidden clearfix collapsed detail-tree-button-container" style="width: 1489px; margin-left: 201px;">
        <div class="btn-group pull-left" role="group">
        <button class="btn btn-primary action" data-action="save" type="button">Зберегти</button><button class="btn btn-default action" data-action="cancelEdit" type="button">Скасувати</button>
        </div>
        <div class="panel-navigation panel-right pull-left" style="width: calc(100% - 9px);">
          </div>
    </div><div style="height: 24px; display: none;">&nbsp;</div>


    <div class="row">
       
        <div class="catalog-tree-panel col-lg-3 col-xs-12" style="width: 200px;"><button type="button" class="btn btn-default collapse-panel" data-action="collapsePanel">

    <span class="toggle-icon-right fas fa-angle-right hidden"></span>
</button>
<div class="category-panel">
    <div class="panel-group text-center">
       
    </div>
    <div class="panel-group category-search">
        <div class="field" data-name="category-search">
    <input type="text" class="form-control category-search search-in-tree-input" tabindex="1" placeholder="Введіть для пошуку...">
    <button class="fas fa-times reset-search-in-tree-button" style="display: none"></button>
    <button class="fas fa-search search-in-tree-button"></button>
</div>
    </div>
    
    <div class="panel-group category-tree"><ul class="jqtree_common jqtree-tree" role="tree">
        @foreach($catalog as $val)
        <li class="jqtree_common" role="presentation" aria-selected="false"><div class="jqtree-element jqtree_common" role="presentation"><span class="jqtree-title jqtree_common" role="treeitem" aria-level="1" aria-selected="false" aria-expanded="false"  title="Use Drag &amp; Drop to reorder"><a href="/product/{{$val->code}}">{{$val->name}}</a></span></div></li>
        @endforeach
        <li class="jqtree_common" role="presentation"><div class="jqtree-element jqtree_common" role="presentation"><span class="jqtree-title jqtree_common" role="treeitem" aria-level="1" aria-selected="false" aria-expanded="false" data-id="Site_188" title="Use Drag &amp; Drop to reorder">Стаканчики, чашки</span></div></li><li class="jqtree_common" role="presentation"><div class="jqtree-element jqtree_common" role="presentation"><span class="jqtree-title jqtree_common" role="treeitem" aria-level="1" aria-selected="false" aria-expanded="false" data-id="Site_140" title="Use Drag &amp; Drop to reorder">Ножиці</span></div></li></ul></div>
</div>
<div class="category-panel-resizer"></div>
</div>
        <div class="overview col-md-8 col-lg-6 collapsed bordered" style="width: 1190px; margin-left: 199px; min-height: 1632px;">
            <div class="middle">
                <div class="panel panel-default" data-name="panel-0">
                <div class="panel-heading"><h4 class="panel-title">Огляд</h4></div>
                <div class="panel-body panel-body-form">
                    <div class="row">
                    <div class="cell col-sm-6 form-group" data-name="isActive"><a href="javascript:" class="pull-right inline-edit-link hidden" style="margin-left: 7px"><span class="fas fa-pencil-alt fa-sm"></span></a>
                    </div>
                    <div class="col-sm-6"></div>
            </div>
            <div class="row">
                    <div class="cell col-sm-6 form-group" data-name="name"><a href="javascript:" class="pull-right inline-edit-link hidden" style="margin-left: 7px"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="name"><span class="label-text">Назва</span><span class="required-sign"> *</span></label>
                            <p>{{$product[0]->name}}</p>
                    </div>
                    <div class="cell col-sm-6 form-group" data-name="nameEnUs"><a href="javascript:" class="pull-right inline-edit-link hidden" style="margin-left: 7px"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="nameEnUs"><span class="label-text">Назва / ru</span><span class="required-sign"> *</span></label>
                            <p>{{$product[0]->name_en_us}}</p>
                    </div>
            </div>
            <div class="row">
                    <div class="cell col-sm-6 form-group" data-name="brand"><a href="javascript:" class="pull-right inline-edit-link hidden" style="margin-left: 7px"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="brand"><span class="label-text">Бренд</span></label>
                            <p>{{$brand}}</p>
                    </div>
            </div>
            <div class="row">
                    <div class="cell col-sm-6 form-group" data-name="sku"><a href="javascript:" class="pull-right inline-edit-link hidden" style="margin-left: 7px"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="sku"><span class="label-text">Код 1С</span></label>
                            <p>{{$product[0]->sku}}</p>
                    </div>
                    <div class="cell col-sm-6 form-group" data-name="mpn"><a href="javascript:" class="pull-right inline-edit-link hidden" style="margin-left: 7px"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="mpn"><span class="label-text">Код номенклатури</span></label>
                        <p>{{$product[0]->mpn}}</p>
                    </div>
                    <div class="cell col-sm-6 form-group" data-name="mpn"><a href="javascript:" class="pull-right inline-edit-link hidden" style="margin-left: 7px"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="mpn"><span class="label-text">Група закупників</span></label>
                            <p>{{ $product[0]['producer']}}</p>
                    </div>
            </div>
            <div class="row">
                    <div class="cell col-sm-6 form-group" data-name="ean"><a href="javascript:" class="pull-right inline-edit-link hidden" style="margin-left: 7px"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="ean"><span class="label-text">код ТН ЗЕД</span></label>
                            <p>{{ $product[0]['ean']}}</p>
                    </div>
                         </div>
                     <div class="row">
                    <div class="cell col-sm-6 form-group" data-name="uvp"><a href="javascript:" class="pull-right inline-edit-link hidden" style="margin-left: 7px"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="uvp"><span class="label-text">Ціна покупки</span></label>
                            <p>{{$product[0]['price']}}</p>

                    </div>
                     </div>
                    <div class="row">
                    <div class="cell col-sm-6 form-group" data-name="price"><a href="javascript:" class="pull-right inline-edit-link hidden" style="margin-left: 7px"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="price"><span class="label-text">Акційна ціна</span></label>
                    <p>{{ $product[0]['uvp']}}</p>
                    </div>
                    <div class="col-sm-6"></div>
            </div>
            <div class="row">
                    <div class="cell col-sm-6 form-group" data-name="amount"><a href="javascript:" class="pull-right inline-edit-link hidden" style="margin-left: 7px"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="amount"><span class="label-text">Кіл-ть</span></label>
        		    <p>{{$product[0]->amount}}</з>
                    </div>
                    <div class="cell col-sm-6 form-group" data-name="catalog"><a href="javascript:" class="pull-right inline-edit-link hidden" style="margin-left: 7px"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="catalog"><span class="label-text">Товарна група</span></label>
                        <div class="field" data-name="catalog"><a href="/product/{{$catgor_id}}">{{$category_name}}</a></div>
                    </div>
            </div>
            <div class="row">
                    <div class="cell col-sm-6 form-group" data-name="productStatus"><a href="javascript:" class="pull-right inline-edit-link hidden" style="margin-left: 7px"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="productStatus"><span class="label-text">Статус продукту</span><span class="required-sign"> *</span></label>
                        <div class="field" data-name="productStatus"><span class="label colored-enum" style="color:#000;background-color:#58B368;font-size:100%;font-weight:normal;border:1px solid #4ea95e">
                    Готово
                        </span>
                        </div>
                    </div>
            </div>
        
            <iframe style="width:100%; height:1050px;" src="{{ route('editdescr.show', $product[0]->mpn) }}" height="1050">
            </iframe>
         
                 </div>
             </div>

                </div>
            <div class="extra"></div>
            <div class="bottom">    
               
  
                <div class="panel panel-default panel-productAttributeValues" data-name="productAttributeValues">
        <div class="panel-heading">
            <div class="pull-right btn-group">
                <form method="POST" action="{{ route('edittatrib.store')}}">
	@csrf
	@method('POST')
	<input type="text" name="all" value="all" style="display:none;">
	<input type="text" name="prod" value="{{$product[0]['mpn']}}" style="display:none;">
	<input type="text" name="cat" value="{{$catgor_id}}" style="display:none;">
	<button type="submit" class="btn btn-default btn-sm action"><span class="fas fa-sync"> </span></button>
		</form>
		<button type="button" class="addatrib btn btn-default btn-sm action" data-action="createRelatedConfigured" data-panel="productAttributeValues" data-link="productAttributeValues" data-tab-id="" title="Create"><span class="fas fa-plus"></span></button>
            </div>
            <h4 class="panel-title">
            <span style="cursor: pointer;" class="action" title="Click to refresh" data-action="refresh" data-panel="productAttributeValues">
                Значення атрибутів
            </span>
            <span class="collapser fas fa-chevron-up" data-action="collapsePanel" data-panel="productAttributeValues"></span>
            </h4>
        </div>
        <div class="panel-body panel-collapse collapse in" data-name="productAttributeValues">
            <div class="group-container">
    <div class="group" data-name="{{$catgor_id}}">
        <div class="group-name">
            <a href="/{{$catgor_id}}"><strong>{{$category_name}}</strong></a>
            <div class="pull-right btn-group">
	            
			</div>
        </div>
        <div class="list-container">

<div class="list">
    <table class="table fixed-header-table hidden">
        <thead>
            <tr>
                <th>
                            Attribute
                </th>
                <th>
                            Value
                </th>
                <th>
                            Канал
                </th>
                <th>
                            
                </th>
            </tr>
        </thead>
    </table>
    <table class="table full-table">
        <thead>
            <tr>
                <th width="20%">
                    <div>Атрибут</div>
                </th>
                <th width="60%">
                    <div>Значення</div>
                </th>
                
                <th width="25">
                    <div>
			<div>Фільтр</div>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($attributesvalue as $val)
            @php $namesid = $val->attribute_id; @endphp
                <tr class="list-row">
    <td class="cell" data-name="attribute" width="20%">
        <a>{{$attriutesname[$namesid]['name']}}</a>

</td>
<td class="cell" data-name="value" width="60%">

    <div class="field" data-name="valueField"><span class="complex-text">
        <form role="form" method="POST" action="{{ route('edittatrib.update', $namesid) }}">
            @csrf
            @method('PUT')
    <select name="atrib">
	    <option value="{{$val->text_value}}">{{$val->text_value}}</option>
	    @foreach($attriutesname[$namesid]['val'] as $atrvals)
		<option value="{{$atrvals}}">{{$atrvals}}</option>
	    @endforeach
    </select>
	    <input name="prod" value="{{$product[0]->mpn}}" style="display:none;">
	    <button type="submit">зберігти</button>
    </form>
	    <form method="POST" action="{{ route('edittatrib.update', $namesid) }}">
	    @csrf
	    @method('PUT')
            <input name="atrib" value="{{$val->text_value}}" placeholder="{{$val->text_value}}" type="text">
            <input name="prod" value="{{$product[0]->mpn}}" style="display:none;">
            <button type="submit">зберігти</button>
        </form>

</span>
</div>
    </td>
    <td class="cell" data-name="buttons">
    <form method="POST" action={{ route('edittatrib.update', $namesid) }}>
    @csrf
    @method('PUT')
    <input name="filters" value="ok" type="text" style="display:none;">
    @if(isset($attriutesname[$namesid]['filter']))
	@if($attriutesname[$namesid]['filter'] == "filter")
    <input type="checkbox" checked name="filter">
    @else
	<input type="checkbox" name="filter">
    @endif
    @endif
    <button type="sumbit">
	Змінити
    </button>
    </form>
    </td>
</div>
 </td>
                    </tr>
                    @endforeach

        </tbody>
    </table>
</div>


</div>
    </div>
</div>

        </div>
    </div>
   
  
    <div class="panel panel-default panel-associatedMainProducts" data-name="associatedMainProducts">
        <div class="panel-heading">
            <div class="pull-right btn-group">
                    <button type="button" class="btn btn-default btn-sm action addsymist" data-action="createRelated" data-panel="associatedMainProducts" data-link="associatedMainProducts" title="Create"><span class="fas fa-plus"></span></button>
            </div>
            <h4 class="panel-title">
            <span style="cursor: pointer;" class="action" title="Click to refresh" data-action="refresh" data-panel="associatedMainProducts">
                Сумісні номенклатури
            </span>
            <span class="collapser fas fa-chevron-up" data-action="collapsePanel" data-panel="associatedMainProducts"></span>
            </h4>
        </div>
        <div class="panel-body panel-collapse collapse in" data-name="associatedMainProducts">
            <div class="list-container">

<div class="list">
    <table class="table fixed-header-table hidden">
        <thead>
            <tr>
               
                <th>
                        <div>
                            <a href="javascript:" class="sort" data-name="association">
                                    група сумісності
                            </a>
                        </div>
                </th>
                <th>
                        <div>
                            <a href="javascript:" class="sort" data-name="relatedProduct">
                                    Сумісна номенклатура
                            </a>
                        </div>
                </th>
                <th>
                            
                </th>
            </tr>
        </thead>
    </table>
    <table class="table full-table">
        <thead>
            <tr>
               
                <th>
                    <div>
                            <a href="javascript:" class="sort" data-name="association">група сумісності</a>
                            
                    </div>
                </th>
                <th>
                    <div>
                            <a href="javascript:" class="sort" data-name="relatedProduct">Сумісна номенклатура</a>
                            
                    </div>
                </th>
                <th width="25">
                    <div>
                                
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>


@if($associated!=null)
@foreach($associated as $assod)

    <tr data-id="{{ $assodfull[$assod['association_id']] }}" class="list-row">
    <td class="cell" data-name="association">
        <a>{{$assodfull[$assod['association_id']]}}</a>
    </td>
    <td class="cell" data-name="relatedProduct">
        <a href="/productes/{{$assod['related_product_id']}}" title="{{ $assod['name'] }}">{{$assod['name']}}</a>
    </td>
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
<li>
<form method="POST" style="display:inline-blok;" action="{{route('symistprod.destroy', $product[0]['mpn'])}}" enctype="multipart/form-data">
@csrf
@method('DELETE')
<input style="display:none;" name="prod" type="text" value="{{ $product[0]['mpn'] }}">
<input style="display:none" name="toprod" type="text" value="{{ $assod['related_product_id'] }}">
<button type="submit" class="btn btn-danger btn-sm delete-btn">
<i class="fas fa-trash">
</i>
Видалити
</button>
</form>
</li>
    </ul>
        </div>
            </td>
                </tr>
            
@endforeach
@endif

        </tbody>
    </table>
</div>
</div>

        </div>


        <div class="panel panel-default panel-assets" data-name="assets">
            <div class="panel-heading">
                <div class="pull-right btn-group">
                        <button type="button" class="btn btn-default btn-sm action addimage" data-action="createRelated" data-panel="assets" data-link="assets" title="Create"><span class="fas fa-plus"></span></button>
                </div>
                <h4 class="panel-title">
                <span style="cursor: pointer;" class="action" title="Click to refresh" data-action="refresh" data-panel="assets">
                    Файли
                </span>
                <span class="collapser fas fa-chevron-up" data-action="collapsePanel" data-panel="assets"></span>
                </h4>
            </div>
            <div class="panel-body panel-collapse collapse in" data-name="assets">
                <div class="list-container">
    
    <div class="list">
        <table class="table fixed-header-table hidden">
            <thead>
                <tr>
                    <th style="text-align: center;">
                                
                    </th>
                    <th>
                                Назва
                    </th>
                    <th style="text-align: center;">
                                Передпрогляд
                    </th>
                   
                    <th>
                                Tags
                    </th>
                  
                    <th>
                                
                    </th>
                </tr>
            </thead>
        </table>
        <table class="table full-table">
            <thead>
                <tr>
                    <th width="40" style="text-align: center;">
                        <div>
                                    
                        </div>
                    </th>
                    <th>
                        <div>
                                    Назва
                        </div>
                    </th>
                    <th style="text-align: center;">
                        <div>
                                    Передпрогляд
                        </div>
                    </th>
                    <th>
                       
                    </th>
                    
                    <th width="25">
                        <div>
                                    
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody class="ui-sortable">
                @if($images!=null)
                @foreach($images as $img)

                <tr data-id="Xh0pIZpeo7JDYVrR4aRJ" class="list-row main-image global-main-image">
                @if($img['main']>0)
        <td class="cell" style="border-left-color: red; vertical-align: middle; width: 40px;" data-name="draggableIcon" width="40" align="center">
        <span class="flaticon flaticon-move-arrows" style="font-size: 12px;" data-id="Xh0pIZpeo7JDYVrR4aRJ"></span>
        </td>
        @endif
        @if($img['main']<1)
        <td class="" data-name="draggableIcon" width="40" align="center" style="vertical-align: middle; width: 40px;">
            <span class="flaticon flaticon-move-arrows" style="font-size: 12px;" data-id="PyKza9KKrsma2Mf1PCLv"></span>
            </td>
        @endif
        
        <td class="cell" data-name="name" style="width: 187px;">
        <a href="#Asset/view/Xh0pIZpeo7JDYVrR4aRJ" class="link" data-id="Xh0pIZpeo7JDYVrR4aRJ" title="{{$img['name']}}">{{$img['name']}}</a>
    
        </td>
    
        
        <td class="cell" data-name="preview" align="center" style="width: 187px;">
        <a data-action="showImagePreview" data-id="Xh0pIZpeo7JDYVrR4aRJ" href="http://sitesdata.vm.net/upload/files/06lsx/xjzn3/8tonu/3itw6/zwvcd/lwxu4/{{$img['name']}}">
        <img src="http://sitesdata.vm.net/upload/files/06lsx/xjzn3/8tonu/3itw6/zwvcd/lwxu4/{{$img['name']}}" style="max-width: 100px;">
    </a>
    
        </td>
    
        <td class="cell" data-name="buttons" style="width: 25px;">
        <div class="list-row-buttons btn-group pull-right">
        <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
            <span class="fas fa-ellipsis-v"></span>
        </button>
        <ul class="dropdown-menu pull-right">
           <li>
	<form action="{{route('images.update', $img['id'])}}" method="POST" style="display:inline-block;">
	@csrf
	@method('PUT')
    <input type="text" name="glav" value="on" style="display:none;">
    <input type="text" name="prod" value="{{$product[0]['mpn']}}" style="display:none;">
    <button class="btn" type="submit>">Зробити головним</button>
    </form>
</li>


<li><form action="{{route('images.destroy', $img['id'])}}" method="POST" style="display:inline-block;">
                             @csrf
                             @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm delete-btn">
                              <i class="fas fa-trash">
                              </i>
                              Вдалити
                          </button>
                          </form></li>
        </ul>
    </div>
        </td>
                </tr>
@endforeach
@endif



            </tbody>
        </table>
        <div class="show-more hide">
            <a type="button" href="javascript:" class="btn btn-default btn-block" data-action="showMore" title="Усього: 2">
                <span class="more-label">Show 0 more</span>
            </a>
            <img class="preloader" style="display:none;height:12px;margin-top: 5px" src="client/img/atro-loader.svg">
        </div>
    </div>
    
    
    </div>
    
            </div>
        </div>


    </div>
   </div>
</div>






<div class="side col-md-4 col-lg-3 fixed-top" style="width: 301px; min-height: 236px; top: 91px;">
    <button type="button" class="btn btn-default collapse-panel" data-action="collapsePanel">
<span class="toggle-icon-left fas fa-angle-left hidden"></span>
<span class="toggle-icon-right fas fa-angle-right"></span>
</button>
<div class="panel panel-default panel-mainImage" data-name="mainImage"><a href="javascript:" class="pull-right inline-edit-link hidden" style="margin-left: 7px"><span class="fas fa-pencil-alt fa-sm"></span></a><a href="upload/files/06lsx/xjzn3/8tonu/3itw6/zwvcd/lwxu4/{{$image}}" class="pull-right hidden" download=""><span class="fas fa-download fa-sm"></span></a>
<div class="panel-heading">
    <div class="pull-right btn-group">
    </div>
    <h4 class="panel-title">
        <span style="cursor: pointer;" class="action" title="Click to refresh" data-action="refresh" data-panel="mainImage">
            Основне зображення
        </span>
    </h4>
</div>
<div class="panel-body" data-name="mainImage">
       @if(isset($image))
    <div class="attachment-preview" style="display: block;"><a data-action="showImagePreview" data-id="iksr62nFuWD82Yn82BQK" href="http://sitesdata.vm.net/upload/files/06lsx/xjzn3/8tonu/3itw6/zwvcd/lwxu4/{{$image}}"><img src="http://sitesdata.vm.net/upload/files/06lsx/xjzn3/8tonu/3itw6/zwvcd/lwxu4/{{$image}}" class="image-preview" style="display: block; margin: 0px auto;"></a></div>
@endif
</div>
</div>

    </div>

        </div>
        
    </div>
</div>
</div>

@include('ajax.imageUpload')
@include('ajax.symist')
@include('ajax.atrib')
@endsection



