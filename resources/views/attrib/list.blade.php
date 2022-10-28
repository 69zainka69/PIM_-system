@extends('lay.first')
@section('title')
Менеджер - {{ Auth::user()->name }}
@endsection
@php
$i = 0;
@endphp
@section('content')
<script
  src="https://code.jquery.com/jquery-3.6.1.slim.js"
  integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk="
  crossorigin="anonymous"></script>


  <div class="page-header"><div class="row">
    <div>
        <h3><div class="header-breadcrumbs fixed-header-breadcrumbs"><a href="#Dashboard" class="action">Dashboard</a><span>Групи атрибутів</span></div><div class="header-title">Групи атрибутів</div></h3>
    </div>
    <div class="col-lg-4 col-sm-4 header-buttons-container">
        <div class="header-buttons btn-group pull-right">
            <div class="header-items">
                <a href="{{route('grupsatrib.create')}}" style="margin-left: 15px" class="btn btn-primary action" data-name="create" data-action="create">Створити групу атрибутів
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-sm-5 search-container"><div class="row search-row">
    <div class="form-group ">
        <div class="input-group">
            <div class="input-group-btn left-dropdown">
                    
            </div>
            <input type="text" class="form-control text-filter" placeholder="Type and press the enter key or click on the search icon to search..." name="textFilter" value="" tabindex="1">
            <div class="input-group-btn">
                <button type="button" class="btn btn-default reset filter-btn" data-action="reset" title="Reset" style="display: none;">
                    <span class="fas fa-times"></span>
                </button>
                <button type="button" class="btn btn-primary search btn-icon btn-icon-x-wide filter-btn" data-action="search" title="Шукати">
                    <span class="fas fa-search"></span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="advanced-filters-bar hidden" style="margin-bottom: 12px;"></div>
<div class="row advanced-filters grid-auto-fill-sm" style="width: 1670px;">
</div></div>
</div>

</div>
<div class="list-container">
<div class="list-buttons-container clearfix">

    <div class="btn-group actions">

    </div>

    <div class="text-muted total-count">Показано: <span class="shown-count-span">50</span> | Усього: <span class="total-count-span">282</span></div>

</div>

<div class="list">
    <table class="table fixed-header-table hidden" style="position: fixed; left: 220px; top: 47px; right: 0px; z-index: 1; width: 1690px;">
        <thead>
            <tr>
                <th style="width: 936px;">
                        <div>
                            <a href="javascript:" class="sort" data-name="name">
                                    Назва групи
                            </a>
                        </div>
                </th>
                <th style="width: 259px;">
                        <div>
                            <a href="javascript:" class="sort" data-name="code">
                                    Код
                            </a>
                        </div>
                </th>
                <th style="width: 332px;">
                        <div>
                            <a href="javascript:" class="sort" data-name="sortOrder">
                                    Порядок сортування
                            </a>
                        </div>
                </th>
                <th style="width: 123px;">
                            
                </th>
            </tr>
        </thead>
    </table>
    <table class="table full-table">
        <thead>
            <tr>
                
                <th>
                    <div>
                            <a href="javascript:" class="sort" data-name="name">Назва групи</a>
                            
                    </div>
                </th>
                <th>
                    <div>
                            <a href="javascript:" class="sort" data-name="code">Код</a>
                            
                    </div>
                </th>
                <th>
                    <div>
                            <a href="javascript:" class="sort" data-name="sortOrder">Порядок сортування</a>
                            
                    </div>
                </th>
                <th width="25">
                    <div>
                                
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr data-id="Site_055" class="list-row">
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_055" class="link" data-id="Site_055" title="Ремонт лазерних принтерів та БФП">Ремонт лазерних принтерів та БФП</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_055</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_055" class="action" data-action="quickView" data-id="Site_055">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_055" class="action" data-action="quickEdit" data-id="Site_055">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_055">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_037" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_037"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_037" class="link" data-id="Site_037" title="CD та DVD диски">CD та DVD диски</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_037</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_037" class="action" data-action="quickView" data-id="Site_037">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_037" class="action" data-action="quickEdit" data-id="Site_037">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_037">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_040" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_040"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_040" class="link" data-id="Site_040" title="Жорсткі диски">Жорсткі диски</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_040</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_040" class="action" data-action="quickView" data-id="Site_040">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_040" class="action" data-action="quickEdit" data-id="Site_040">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_040">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_042" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_042"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_042" class="link" data-id="Site_042" title="USB Кабелі та подовжувачі">USB Кабелі та подовжувачі</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_042</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_042" class="action" data-action="quickView" data-id="Site_042">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_042" class="action" data-action="quickEdit" data-id="Site_042">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_042">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_043" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_043"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_043" class="link" data-id="Site_043" title="Клавіатури та комплекти">Клавіатури та комплекти</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_043</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_043" class="action" data-action="quickView" data-id="Site_043">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_043" class="action" data-action="quickEdit" data-id="Site_043">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_043">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_045" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_045"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_045" class="link" data-id="Site_045" title="Засоби для чищення">Засоби для чищення</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_045</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_045" class="action" data-action="quickView" data-id="Site_045">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_045" class="action" data-action="quickEdit" data-id="Site_045">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_045">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_046" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_046"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_046" class="link" data-id="Site_046" title="Батарейки та акумулятори">Батарейки та акумулятори</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_046</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_046" class="action" data-action="quickView" data-id="Site_046">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_046" class="action" data-action="quickEdit" data-id="Site_046">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_046">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_048" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_048"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_048" class="link" data-id="Site_048" title="Заправка картриджів для струменевих принтерів і БФП">Заправка картриджів для струменевих принтерів і БФП</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_048</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_048" class="action" data-action="quickView" data-id="Site_048">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_048" class="action" data-action="quickEdit" data-id="Site_048">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_048">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_049" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_049"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_049" class="link" data-id="Site_049" title="Заправка картриджів для лазерних принтерів, БФП і КМА">Заправка картриджів для лазерних принтерів, БФП і КМА</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_049</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_049" class="action" data-action="quickView" data-id="Site_049">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_049" class="action" data-action="quickEdit" data-id="Site_049">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_049">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_050" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_050"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_050" class="link" data-id="Site_050" title="Відновлення картриджів для струменевих принтерів і БФП">Відновлення картриджів для струменевих принтерів і БФП</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_050</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_050" class="action" data-action="quickView" data-id="Site_050">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_050" class="action" data-action="quickEdit" data-id="Site_050">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_050">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_051" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_051"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_051" class="link" data-id="Site_051" title="Відновлення картриджів для лазерних принтерів, БФП і КМА">Відновлення картриджів для лазерних принтерів, БФП і КМА</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_051</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_051" class="action" data-action="quickView" data-id="Site_051">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_051" class="action" data-action="quickEdit" data-id="Site_051">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_051">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_052" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_052"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_052" class="link" data-id="Site_052" title="Перепрограмування чипів картриджів">Перепрограмування чипів картриджів</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_052</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_052" class="action" data-action="quickView" data-id="Site_052">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_052" class="action" data-action="quickEdit" data-id="Site_052">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_052">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_054" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_054"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_054" class="link" data-id="Site_054" title="Ремонт струменевих принтерів та БФП">Ремонт струменевих принтерів та БФП</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_054</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_054" class="action" data-action="quickView" data-id="Site_054">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_054" class="action" data-action="quickEdit" data-id="Site_054">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_054">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_035" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_035"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_035" class="link" data-id="Site_035" title="Факси, телефони, АТС та обладннання до них">Факси, телефони, АТС та обладннання до них</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_035</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_035" class="action" data-action="quickView" data-id="Site_035">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_035" class="action" data-action="quickEdit" data-id="Site_035">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_035">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_056" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_056"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_056" class="link" data-id="Site_056" title="Ремонт матричних принтерів">Ремонт матричних принтерів</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_056</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_056" class="action" data-action="quickView" data-id="Site_056">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_056" class="action" data-action="quickEdit" data-id="Site_056">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_056">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_057" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_057"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_057" class="link" data-id="Site_057" title="Ремонт копіювальних апаратів (КМА)">Ремонт копіювальних апаратів (КМА)</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_057</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_057" class="action" data-action="quickView" data-id="Site_057">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_057" class="action" data-action="quickEdit" data-id="Site_057">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_057">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_059" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_059"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_059" class="link" data-id="Site_059" title="Ремонт іншої техніки">Ремонт іншої техніки</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_059</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_059" class="action" data-action="quickView" data-id="Site_059">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_059" class="action" data-action="quickEdit" data-id="Site_059">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_059">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_060" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_060"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_060" class="link" data-id="Site_060" title="Перепрограмування принтерів і БФП">Перепрограмування принтерів і БФП</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_060</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_060" class="action" data-action="quickView" data-id="Site_060">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_060" class="action" data-action="quickEdit" data-id="Site_060">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_060">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_061" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_061"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_061" class="link" data-id="Site_061" title="Технічна консультація, діагностика та дефектація">Технічна консультація, діагностика та дефектація</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_061</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_061" class="action" data-action="quickView" data-id="Site_061">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_061" class="action" data-action="quickEdit" data-id="Site_061">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_061">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_063" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_063"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_063" class="link" data-id="Site_063" title="Онлайн-замовлення фотодруку">Онлайн-замовлення фотодруку</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_063</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_063" class="action" data-action="quickView" data-id="Site_063">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_063" class="action" data-action="quickEdit" data-id="Site_063">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_063">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_064" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_064"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_064" class="link" data-id="Site_064" title="Побудова ICC-профілю">Побудова ICC-профілю</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_064</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_064" class="action" data-action="quickView" data-id="Site_064">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_064" class="action" data-action="quickEdit" data-id="Site_064">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_064">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_065" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_065"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_065" class="link" data-id="Site_065" title="Струменеві БФП">Струменеві БФП</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_065</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_065" class="action" data-action="quickView" data-id="Site_065">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_065" class="action" data-action="quickEdit" data-id="Site_065">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_065">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_066" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_066"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_066" class="link" data-id="Site_066" title="Веб-камери ">Веб-камери </a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_066</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_066" class="action" data-action="quickView" data-id="Site_066">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_066" class="action" data-action="quickEdit" data-id="Site_066">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_066">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_067" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_067"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_067" class="link" data-id="Site_067" title="Зовнішні HDD/SSD накопичувачі">Зовнішні HDD/SSD накопичувачі</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_067</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_067" class="action" data-action="quickView" data-id="Site_067">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_067" class="action" data-action="quickEdit" data-id="Site_067">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_067">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_068" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_068"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_068" class="link" data-id="Site_068" title="Акустичні колонки">Акустичні колонки</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_068</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_068" class="action" data-action="quickView" data-id="Site_068">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_068" class="action" data-action="quickEdit" data-id="Site_068">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_068">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_332" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_332"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_332" class="link" data-id="Site_332" title="Колонки">Колонки</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_332</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_332" class="action" data-action="quickView" data-id="Site_332">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_332" class="action" data-action="quickEdit" data-id="Site_332">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_332">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_020" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_020"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_020" class="link" data-id="Site_020" title="Фотоциліндри для лазерних принтерів та БФП">Фотоциліндри для лазерних принтерів та БФП</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_020</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_020" class="action" data-action="quickView" data-id="Site_020">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_020" class="action" data-action="quickEdit" data-id="Site_020">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_020">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_003" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_003"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_003" class="link" data-id="Site_003" title="Полотна">Полотна</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_003</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_003" class="action" data-action="quickView" data-id="Site_003">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_003" class="action" data-action="quickEdit" data-id="Site_003">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_003">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_004" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_004"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_004" class="link" data-id="Site_004" title="Офісний папір">Офісний папір</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_004</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_004" class="action" data-action="quickView" data-id="Site_004">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_004" class="action" data-action="quickEdit" data-id="Site_004">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_004">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_005" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_005"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_005" class="link" data-id="Site_005" title="Матеріали для творчості">Матеріали для творчості</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_005</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_005" class="action" data-action="quickView" data-id="Site_005">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_005" class="action" data-action="quickEdit" data-id="Site_005">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_005">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_008" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_008"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_008" class="link" data-id="Site_008" title="Картриджі та тонер-картриджі для лазерних принтерів та БФП">Картриджі та тонер-картриджі для лазерних принтерів та БФП</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_008</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_008" class="action" data-action="quickView" data-id="Site_008">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_008" class="action" data-action="quickEdit" data-id="Site_008">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_008">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_009" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_009"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_009" class="link" data-id="Site_009" title="Картриджі для струменевих принтерів та БФП">Картриджі для струменевих принтерів та БФП</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_009</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_009" class="action" data-action="quickView" data-id="Site_009">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_009" class="action" data-action="quickEdit" data-id="Site_009">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_009">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_010" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_010"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_010" class="link" data-id="Site_010" title="Картриджі  стрічки для матричних принтерів">Картриджі  стрічки для матричних принтерів</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_010</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_010" class="action" data-action="quickView" data-id="Site_010">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_010" class="action" data-action="quickEdit" data-id="Site_010">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_010">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_011" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_011"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_011" class="link" data-id="Site_011" title="Картриджі  та плівки для факсів">Картриджі  та плівки для факсів</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_011</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_011" class="action" data-action="quickView" data-id="Site_011">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_011" class="action" data-action="quickEdit" data-id="Site_011">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_011">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_013" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_013"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_013" class="link" data-id="Site_013" title="Чорнила для струменевих принтерів">Чорнила для струменевих принтерів</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_013</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_013" class="action" data-action="quickView" data-id="Site_013">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_013" class="action" data-action="quickEdit" data-id="Site_013">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_013">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_014" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_014"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_014" class="link" data-id="Site_014" title="Системи неперервної подачі чорнила (СНПЧ)">Системи неперервної подачі чорнила (СНПЧ)</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_014</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_014" class="action" data-action="quickView" data-id="Site_014">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_014" class="action" data-action="quickEdit" data-id="Site_014">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_014">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_015" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_015"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_015" class="link" data-id="Site_015" title="Картриджі перезаправні та СБПЧ для струменевих принтерів">Картриджі перезаправні та СБПЧ для струменевих принтерів</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_015</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_015" class="action" data-action="quickView" data-id="Site_015">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_015" class="action" data-action="quickEdit" data-id="Site_015">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_015">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_018" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_018"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_018" class="link" data-id="Site_018" title="Тонер  для  лазерних принтерів та БФП">Тонер  для  лазерних принтерів та БФП</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_018</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_018" class="action" data-action="quickView" data-id="Site_018">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_018" class="action" data-action="quickEdit" data-id="Site_018">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_018">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_019" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_019"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_019" class="link" data-id="Site_019" title="Фотоциліндри для копіювальних апаратів">Фотоциліндри для копіювальних апаратів</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_019</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_019" class="action" data-action="quickView" data-id="Site_019">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_019" class="action" data-action="quickEdit" data-id="Site_019">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_019">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_002" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_002"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_002" class="link" data-id="Site_002" title="Фотопапір">Фотопапір</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_002</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_002" class="action" data-action="quickView" data-id="Site_002">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_002" class="action" data-action="quickEdit" data-id="Site_002">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_002">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_021" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_021"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_021" class="link" data-id="Site_021" title="Леза очищувальні та дозувальні">Леза очищувальні та дозувальні</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_021</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_021" class="action" data-action="quickView" data-id="Site_021">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_021" class="action" data-action="quickEdit" data-id="Site_021">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_021">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_022" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_022"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_022" class="link" data-id="Site_022" title="Вали та оболонки">Вали та оболонки</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_022</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_022" class="action" data-action="quickView" data-id="Site_022">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_022" class="action" data-action="quickEdit" data-id="Site_022">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_022">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_023" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_023"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_023" class="link" data-id="Site_023" title="Чіпи та мікросхеми">Чіпи та мікросхеми</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_023</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_023" class="action" data-action="quickView" data-id="Site_023">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_023" class="action" data-action="quickEdit" data-id="Site_023">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_023">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_024" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_024"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_024" class="link" data-id="Site_024" title="Змазки та мастила">Змазки та мастила</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_024</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_024" class="action" data-action="quickView" data-id="Site_024">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_024" class="action" data-action="quickEdit" data-id="Site_024">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_024">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_025" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_025"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_025" class="link" data-id="Site_025" title="Запчастини до лазерних друкуючих пристроїв">Запчастини до лазерних друкуючих пристроїв</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_025</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_025" class="action" data-action="quickView" data-id="Site_025">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_025" class="action" data-action="quickEdit" data-id="Site_025">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_025">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_028" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_028"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_028" class="link" data-id="Site_028" title="Обладнання для сервісних центрів">Обладнання для сервісних центрів</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_028</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_028" class="action" data-action="quickView" data-id="Site_028">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_028" class="action" data-action="quickEdit" data-id="Site_028">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_028">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_029" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_029"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_029" class="link" data-id="Site_029" title="Компоненти для СНПЧ">Компоненти для СНПЧ</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_029</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_029" class="action" data-action="quickView" data-id="Site_029">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_029" class="action" data-action="quickEdit" data-id="Site_029">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_029">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_031" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_031"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_031" class="link" data-id="Site_031" title="Струменеві принтери">Струменеві принтери</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_031</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_031" class="action" data-action="quickView" data-id="Site_031">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_031" class="action" data-action="quickEdit" data-id="Site_031">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_031">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_032" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_032"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_032" class="link" data-id="Site_032" title="Лазерні принтери">Лазерні принтери</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_032</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_032" class="action" data-action="quickView" data-id="Site_032">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_032" class="action" data-action="quickEdit" data-id="Site_032">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_032">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
            <tr data-id="Site_033" class="list-row">
            

    
    <td class="cell" data-name="r-checkbox">
    <span class="record-checkbox-container"><input type="checkbox" class="record-checkbox" data-id="Site_033"></span>
    </td>

    
    <td class="cell" data-name="name">
    <a href="#AttributeGroup/view/Site_033" class="link" data-id="Site_033" title="Копіювальні апарати">Копіювальні апарати</a>

    </td>

    
    <td class="cell" data-name="code">
    <span class="pre-label">site_033</span>

    </td>

    
    <td class="cell" data-name="sortOrder">
    <span title="0">0</span>

    </td>

    
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#AttributeGroup/view/Site_033" class="action" data-action="quickView" data-id="Site_033">Переглянути</a></li>
        <li><a href="#AttributeGroup/edit/Site_033" class="action" data-action="quickEdit" data-id="Site_033">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="Site_033">Вилучити</a></li>
    </ul>
</div>




    </td>


            </tr>
        </tbody>
    </table>
    <div class="show-more">
        <a type="button" href="javascript:" class="btn btn-default btn-block" data-action="showMore" title="Усього: 282">
            <span class="more-label">Show 50 more</span>
        </a>
        <img class="preloader" style="display:none;height:12px;margin-top: 5px" src="client/img/atro-loader.svg">
    </div>
<div class="fixed-scrollbar" style="display: none; width: 1690px;"><div></div></div></div>


</div>



@endsection



