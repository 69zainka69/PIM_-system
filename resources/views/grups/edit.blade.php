@extends('lay.first')
@section('title')
Менеджер - {{ Auth::user()->name }}
@endsection
@php
$i = 0;
@endphp
@section('content')

<div class="header page-header detail-page-header"><div class="row">
    <div>
        <h3><div class="header-breadcrumbs fixed-header-breadcrumbs"><a href="/" class="action">Dashboard</a><span class="subsection"><a href="/grups" class="action" data-action="navigateToRoot">Групи товарів</a></span><span>{{$group[0]->name}}</span></div><div class="header-title">{{$group[0]->name}}</div></h3>
    </div>
    <div class="col-lg-4 col-sm-4 header-buttons-container">
        <div class="header-buttons btn-group pull-right">
            
        </div>
    </div>
    <div class="col-lg-5 col-sm-5 search-container hidden"></div>
</div>

</div>
<div class="record"><div class="detail" id="catalog-detail-9955">
    <div class="detail-button-container button-container record-buttons clearfix">
        
        <div class="clearfix"></div>
    </div><div style="height: 24px; display: none;">&nbsp;</div>
    <div class="detail-button-container button-container edit-buttons hidden clearfix">
        <div class="btn-group pull-left" role="group">
            <button class="btn btn-primary action" data-action="save" type="button">Зберегти</button><button class="btn btn-default action" data-action="cancelEdit" type="button">Скасувати</button>
        </div>
       
    </div><div style="height: 24px; display: none;">&nbsp;</div>

    <div class="row">
       
        <div class="overview col-md-8 bordered" style="width: 1390px; min-height: 826px;">
            <div class="middle">
    <div class="panel panel-default" data-name="panel-0">
        
        
        <div class="panel-heading"><h4 class="panel-title">Огляд</h4></div>
        
        <div class="panel-body panel-body-form">
        
            <div class="row">
            

                
                
                    
                    <div class="cell col-sm-6 form-group" data-name="isActive">
                        <label class="control-label" data-name="isActive"><span class="label-text">Активний</span></label>
                        <div class="field" data-name="isActive"><input type="checkbox" @if($group[0]->is_active > 0)checked @endif>
</div>
                    </div>
                
            

                
                
                    <div class="col-sm-6"></div>
                
            
            </div>
        
            <div class="row">
            

                
                
                    
                    <div class="cell col-sm-6 form-group" data-name="name">
                        <label class="control-label" data-name="name"><span class="label-text">Назва</span><span class="required-sign"> *</span></label>
                        <form role="form" method="POST" action="{{ route('grup.update', $group[0]->code) }}">
                            @csrf
                            @method('PUT')
                            <div class="field" data-name="name"><span class="pre-label"><input style="width:100%;" type="text" name="name" value="{{$group[0]->name}}"></span></div>
                            <button type="submit"><a class="action" data-action="delete">зерігти</a></button>
                        </form>
                    </div>
                
            

                
                
                    
                    <div class="cell col-sm-6 form-group" data-name="code">
                        <label class="control-label" data-name="code"><span class="label-text">Код</span><span class="required-sign"> *</span></label>
                        <div class="field" data-name="code"><span class="pre-label">{{$group[0]->code}}</span></div>
                    </div>
                
            
            </div>
        
            <div class="row">
            

                
                
                    <div class="col-sm-6"></div>
                
            

                
                
                    <div class="col-sm-6"></div>
                
            
            </div>
        
            <div class="row">
            

                
                
                    
                    <div class="cell col-sm-6 form-group" data-name="nameEnUs">
                        <label class="control-label" data-name="nameEnUs"><span class="label-text">Назва / ru</span><span class="required-sign"> *</span></label>
                        <form role="form" method="POST" action="{{ route('grup.update', $group[0]->code) }}">
                            @csrf
                            @method('PUT')
                            <div class="field" data-name="name_en_us"><span class="pre-label"><input style="width:100%;" type="text" name="name_en_us" value="{{$group[0]->name_en_us}}"></span></div>
                            <button type="submit"><a class="action" data-action="delete">зерігти</a></button>
                        </form>
                    </div>
                
            

                
                
                    <div class="col-sm-6"></div>
                
            
            </div>
        


            <iframe style="width:100%; height:1050px;" src="{{ route('editgrupdescr.show', $group[0]->code) }}" height="1050">
            </iframe>
           
        
       
        
        </div>
    </div>

</div>
            <div class="extra"></div>
            <div class="bottom">    
              
    <div class="panel panel-default panel-products" data-name="products">
        <div class="panel-heading">
           
            <h4 class="panel-title">
            <span style="cursor: pointer;" class="action" title="Click to refresh" data-action="refresh" data-panel="products">
                Номенклатури
            </span>
            <span class="collapser fas fa-chevron-up" data-action="collapsePanel" data-panel="products"></span>
            </h4>
        </div>
        <div class="panel-body panel-collapse collapse in" data-name="products">
            <div class="list-container">

<div class="list">
    <table class="table fixed-header-table hidden">
        <thead>
            <tr>
                <th>
                        <div>
                            <a href="javascript:" class="sort" data-name="name">
                                    Назва
                            </a>
                                    <span>↑</span>
                        </div>
                </th>
                <th>
                        <div>
                            <a href="javascript:" class="sort" data-name="sku">
                                    Код аксапти
                            </a>
                        </div>
                </th>
                <th>
                        <div>
                            <a href="javascript:" class="sort" data-name="isActive">
                                    Код 1С
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
                            <a href="javascript:" class="sort" data-name="name">Назва</a>
                            <span>↑</span>
                    </div>
                </th>
                <th>
                    <div>
                            <a href="javascript:" class="sort" data-name="sku"> Код аксапти</a>
                            
                    </div>
                </th>
                <th>
                    <div>
                            <a href="javascript:" class="sort" data-name="isActive">  Код 1С</a>
                            
                    </div>
                </th>
                <th width="25">
                    <div>
                                
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($product as $itemp)
           
            <tr data-id="SRV-R-LSR-COL-A4" class="list-row">
    <td class="cell" data-name="name">
    <a href="/productes/{{$itemp->mpn}}" class="link" data-id="{{$itemp->mpn}}" title="Ремонт кольорового лазерного принетра формата А4, від:">{{$itemp->name}}</a>

    </td>

    
    <td class="cell" data-name="sku">
    <span class="pre-label">{{$itemp->mpn}}</span>

    </td>

    
    <td class="cell" data-name="isActive">
        <span class="pre-label">{{$itemp->sku}}</span>
    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
 
</div>
    </td>
            </tr>
            
            @endforeach



        </tbody>
    </table>
    <div class="show-more hide">
        <a type="button" href="javascript:" class="btn btn-default btn-block" data-action="showMore" title="Усього: 13">
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
        <div class="side  col-md-4" style="width: 300px; min-height: 412.906px;">
            <button type="button" class="btn btn-default collapse-panel" data-action="collapsePanel">
    <span class="toggle-icon-left fas fa-angle-left hidden"></span>
    <span class="toggle-icon-right fas fa-angle-right"></span>
</button>
<div class="panel panel-default panel-default" data-name="default">
    <div class="panel-heading">
        <div class="pull-right btn-group">
        </div>
        <h4 class="panel-title">
            <span style="cursor: pointer;" class="action" title="Click to refresh" data-action="refresh" data-panel="default">
                Управління доступом
            </span>
        </h4>
    </div>
    <div class="panel-body panel-body-form" data-name="default">
        
<div class="row">
    <div class="cell form-group col-sm-6 col-md-12" data-name="complexCreated">
        <label class="control-label" data-name="complexCreated"><span class="label-text">Створено</span></label>
        <div class="field" data-name="complexCreated">
            <span data-name="createdAt" class="field">07 Sep 10:44</span> <span class="text-muted">»</span> <span data-name="createdBy" class="field"><a href="#User/view/1">Admin</a></span>
        </div>
    </div>
    <div class="cell form-group col-sm-6 col-md-12 hidden-cell" data-name="complexModified">
        <label class="control-label hidden" data-name="complexModified"><span class="label-text">Змінено</span></label>
        <div class="field hidden" data-name="complexModified">
            <span data-name="modifiedAt" class="field">07 Sep 10:44</span> <span class="text-muted">»</span> <span data-name="modifiedBy" class="field">
    Ні
</span>
        </div>
    </div>
</div>


    </div>
</div>
<div class="side-panel-resizer"></div>

        </div>
    </div>
</div>
</div>
<div class="bottom"></div>


@endsection



