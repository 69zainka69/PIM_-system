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
        <h3><div class="header-breadcrumbs fixed-header-breadcrumbs"><a href="#Dashboard" class="action">Dashboard</a><span class="subsection"><a href="/symistgrups" class="action" data-action="navigateToRoot">Групи сумістності</a></span><span>новий</span></div><div class="header-title">новий</div></h3>
    </div>
    <div class="col-lg-4 col-sm-4 header-buttons-container">
        <div class="header-buttons btn-group pull-right">
            <div class="header-items">
             

            </div>
        </div>
    </div>
    <div class="col-lg-5 col-sm-5 search-container hidden"></div>
</div>
@if (session('success'))
<div class="alert alert-success" role="alert">

    <h4><i class="icon fa fa-check"></i> {{ session('success')}}</h4>
</div>
@endif 
</div>
<div class="record"><div class="edit" id="association-edit-3590">
    <form method="POST" action="{{ route('grupsatrib.store')}}" enctype="multipart/form-data">
        @csrf 
    <div class="detail-button-container button-container record-buttons clearfix">
        <div class="btn-group" role="group">
            <button type="submit" class="btn btn-primary action" data-action="save" type="button">Зберегти</button><button class="btn btn-default action" data-action="cancel" type="button"><a href="/symistgrups">Скасувати</a></button>
        </div>
    </div><div style="height: 24px; display: none;">&nbsp;</div>

    <div class="row">
        <div class="overview col-md-8" style="width: 1391px;">
            <div class="middle">
    <div class="panel panel-default" data-name="panel-0">
        
        
        <div class="panel-heading"><h4 class="panel-title">Огляд</h4></div>
        
        <div class="panel-body panel-body-form">
        
            <div class="row"> 
                    <div class="cell col-sm-6 form-group" data-name="isActive">
                        <label class="control-label" data-name="isActive"><span class="label-text">Активний</span></label>
                        <div class="field" data-name="isActive"><input type="checkbox" name="isActive" class="main-element">
                            </div>
                    </div>
                    <div class="col-sm-6"></div>
            </div>
            <div class="row">
                    <div class="cell col-sm-6 form-group" data-name="name">
                        <label class="control-label" data-name="name"><span class="label-text">Назва</span><span class="required-sign"> *</span></label>
                        <div class="field" data-name="name"><input type="text" class="main-element form-control" name="name" value="" autocomplete="off">

</div>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="cell col-sm-6 form-group" data-name="nameEnUs">
                        <label class="control-label" data-name="nameEnUs"><span class="label-text">Назва ru</span><span class="required-sign"> *</span></label>
                        <div class="field" data-name="nameEnUs"><input type="text" class="main-element form-control" name="nameEnUs" value="" autocomplete="off">

</div>
                    </div>
                
            
            
            

                
                
                   
                
            

                
                
                    
                    <div class="cell col-sm-6 form-group" data-name="code">
                        <label class="control-label" data-name="code"><span class="label-text">Код</span></label>
                        <div class="field" data-name="code"><input type="text" class="main-element form-control" name="code" value="" autocomplete="off">

</div>
                    </div>
                
            
            </div>
        
            <div class="row">
            

                
                
                    
                    <div class="cell col-sm-12 form-group" data-name="description">
                        <label class="control-label" data-name="description"><span class="label-text">Опис</span></label>
                        <div class="field" data-name="description">
<textarea class="main-element form-control auto-height" name="description" rows="2"></textarea>
</div>
                    </div>
                
            
            </div>
        
            <div class="row">
            

                
                
            

                
                
                    
                    <div class="cell col-sm-12 form-group" data-name="descriptionEnUs">
                        <label class="control-label" data-name="descriptionEnUs"><span class="label-text">Опис / en_US</span></label>
                        <div class="field" data-name="descriptionEnUs">
<textarea class="main-element form-control auto-height" name="descriptionEnUs" rows="2"></textarea>
</div>
                    </div>
                
            
            </div>
        
        </div>
    </div>

</div>
            <div class="extra"></div>
            <div class="bottom"></div>
        </div>
        <div class="side  col-md-4 bordered" style="width: 300px; min-height: 473.969px;">
            <button type="button" class="btn btn-default collapse-panel" data-action="collapsePanel">
    <span class="toggle-icon-left fas fa-angle-left hidden"></span>
    <span class="toggle-icon-right fas fa-angle-right"></span>
</button>
<div class="side-panel-resizer"></div>

        </div>
    </form>
    </div>
</div></div>



@endsection



