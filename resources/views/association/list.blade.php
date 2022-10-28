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
        <h3><div class="header-breadcrumbs fixed-header-breadcrumbs"><a href="#Dashboard" class="action">Dashboard</a><span>Групи сумістності</span></div><div class="header-title">Групи сумістності</div></h3>
    </div>
    <div class="col-lg-4 col-sm-4 header-buttons-container">
        <div class="header-buttons btn-group pull-right">
            <div class="header-items">
                <a href="{{route('grupsatrib.create')}}" style="margin-left: 15px" class="btn btn-primary action" data-name="create" data-action="create">
                    Створити групу сумістності
                </a>


            </div>
        </div>
    </div>
    <div class="col-lg-5 col-sm-5 search-container">

<div class="advanced-filters-bar hidden" style="margin-bottom: 12px;"></div>
<div class="row advanced-filters grid-auto-fill-sm" style="width: 1670px;">
</div></div>
</div>

</div>
<div class="list-container">


<div class="list">
    <table class="table fixed-header-table hidden" style="position: fixed; left: 220px; top: 47px; right: 0px; z-index: 1; width: 1700px;">
        <thead>
            <tr>
               
                <th style="width: 374px;">
                        <div>
                            <a href="javascript:" class="sort" data-name="name">
                                    Назва
                            </a>
                        </div>
                </th>
               
                <th style="width: 414px;">
                        <div>
                            <a href="javascript:" class="sort" data-name="backwardAssociation">
                                    Зворотній зв'язок
                            </a>
                        </div>
                </th>
                <th style="width: 374px;">
                        <div>
                            <a href="javascript:" class="sort" data-name="isActive">
                                    Активний
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
                            <a href="javascript:" class="sort" data-name="name">Назва</a>
                            
                    </div>
                </th>
               
            
               
                <th width="25">
                    <div>
                                
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            
           @foreach($association as $itema)
            <tr data-id="/INK" class="list-row">
            <td class="cell" data-name="name">
                <a href="#Association/view//INK" class="link" data-id="/INK" title="/INK">{{$itema->name}}</a>

             </td>
    <td class="cell" data-name="buttons">
    <div class="list-row-buttons btn-group pull-right">
    <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fas fa-ellipsis-v"></span>
    </button>
    <ul class="dropdown-menu pull-right">
        <li><a href="#Association/edit//INK" class="action" data-action="quickEdit" data-id="/INK">редагувати</a></li>
        <li><a href="javascript:" class="action" data-action="quickRemove" data-id="/INK">Вилучити</a></li>
    </ul>
</div>
    </td>
            </tr>
            @endforeach



        </tbody>
    </table>
 

<div class="fixed-scrollbar" style="display: none; width: 1700px;"><div></div></div></div>


</div>



@endsection



