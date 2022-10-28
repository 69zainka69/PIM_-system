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
  <div id="main"><div class="page-header"><div class="row">
    <div>
        <h3><div class="header-breadcrumbs fixed-header-breadcrumbs"><a href="#Dashboard" class="action">Dashboard</a><span>Групи товарів</span></div><div class="header-title">Групи товарів</div></h3>
    </div>
    <div class="col-lg-4 col-sm-4 header-buttons-container">
        <div class="header-buttons btn-group pull-right">
            <div class="header-items">
                <a href="{{route('grup.create')}}" style="margin-left: 15px" class="btn btn-primary action" data-name="create" data-action="create">Створити групу товарів</a>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-sm-5 search-container"><div class="row search-row">
    <div class="form-group ">
        <div class="input-group">
            <div class="input-group-btn left-dropdown">
              
              
            </div>
            <input type="text" class="form-control text-filter" id="textFilter" placeholder="Type and press the enter key or click on the search icon to search..." name="textFilter" value="" tabindex="1">
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
<div class="row advanced-filters grid-auto-fill-sm" style="width: 1660px;">
</div></div>
</div>

</div>
<div class="list-container">
<div class="list-buttons-container clearfix">

    <div class="text-muted total-count">Показано: <span class="shown-count-span">25</span> | Усього: <span class="total-count-span">{{$count}}</span></div>

</div>

<div class="list">
    <table class="table fixed-header-table hidden" style="position: fixed; left: 220px; top: 47px; right: 0px; z-index: 1; width: 1690px;">
        <thead>
            <tr>
               
                <th style="width: 834px;">
                        <div>
                            <a href="javascript:" class="sort" data-name="name">
                                    Назва
                            </a>
                        </div>
                </th>
                <th style="width: 231px;">
                        <div>
                            <a href="javascript:" class="sort" data-name="code">
                                    Код
                            </a>
                        </div>
                </th>
                <th style="width: 231px;">
                        <div>
                            <a href="javascript:" class="sort" data-name="categories">
                                    Категорії
                            </a>
                        </div>
                </th>
                <th style="width: 231px;">
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
                <th>
                    <div>
                            <a href="javascript:" class="sort" data-name="code">Код</a>
                            
                    </div>
                </th>
                
               
                <th width="25">
                    <div>
                                
                    </div>
                </th>
            </tr>
        </thead>
        <tbody class="rendercatalod">

            @include('ajax.searchgroup')


            
        </tbody>
    </table>
    {{$catalog->appends(request()->query())->links()}}
<div class="fixed-scrollbar" style="display: none; width: 1690px;"><div></div></div></div>

<script>
    $(document).ready(function () {
    $('.search').click(function(){
        let orderBy = document.getElementById('textFilter').value;
  console.log(orderBy);
        $.ajax({
          url: "{{route('grupslist')}}",
          type: "GET",
          data: {
          orderBy: orderBy,
          page: {{isset($_GET['page']) ? $_GET['page'] : 1}},
          },
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
          success: (data) => {
            let positionParameters = location.pathname.indexOf('?');
            let url = location.pathname.substring(positionParameters,location.pathname.length);
            let newURL = url + '?';
            newURL += 'orderBy=' + orderBy;
            history.pushState([], '', newURL);
            $('.rendercatalod').html(data)
          }
        });
      })
          })
    </script>

</div>
</div>
@endsection



