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
        <h3><div class="header-breadcrumbs fixed-header-breadcrumbs"><a href="#Dashboard" class="action">Dashboard</a><span>Сумісність номенклатур</span></div><div class="header-title">Сумісність номенклатур</div></h3>
    </div>
    <div class="col-lg-4 col-sm-4 header-buttons-container">
        <div class="header-buttons btn-group pull-right">
            <div class="header-items">
                <a href="{{route('symistprod.create')}}" style="margin-left: 15px" class="btn btn-primary action" data-name="quickCreate" data-action="quickCreate">
                    Створити пов'язаний продукт
                </a>

 
            </div>
        </div>
        
    </div>
    <div class="col-lg-5 col-sm-5 search-container">
        <div class="row search-row">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control text-filter" id="textFilter" name="textFilter" value="" tabindex="1">
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
        <div class="row advanced-filters grid-auto-fill-sm" style="width: 1056px;">
        </div></div>
</div>

</div>
<div class="list-container">
<div class="list-buttons-container clearfix">

   

</div>

<div class="list">
    <table class="table fixed-header-table hidden" style="position: fixed; left: 220px; top: 47px; right: 0px; z-index: 1; width: 1690px;">
        <thead>
            <tr>
              
                <th style="width: 284px;">
                        <div>
                            <a href="javascript:" class="sort" data-name="association">
                                    група сумісності
                            </a>
                        </div>
                </th>
                <th style="width: 433px;">
                        <div>
                            <a href="javascript:" class="sort" data-name="mainProduct">
                                    номенклатура
                            </a>
                        </div>
                </th>
                <th style="width: 810px;">
                        <div>
                            <a href="javascript:" class="sort" data-name="relatedProduct">
                                    Сумісна номенклатура
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
                            <a href="javascript:" class="sort" data-name="association">група сумісності</a>
                            
                    </div>
                </th>
                <th>
                    <div>
                            <a href="javascript:" class="sort" data-name="mainProduct">номенклатура</a>
                            
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
        <tbody class="renderprod">

        @include('association.orderby')
    </tbody>
</table>
{{$association->appends(request()->query())->links()}} 
<div class="fixed-scrollbar" style="display: none; width: 1690px;"><div></div></div></div>

</div>

<script>
    $(document).ready(function () {
    $('.filter-btn').click(function(){
        let searchproduct = document.getElementById('textFilter').value;
        console.log(searchproduct);
        $.ajax({
          url: "/symistprod",
          type: "GET",
          data: {
            searchproduct: searchproduct,
          page: {{isset($_GET['page']) ? $_GET['page'] : 1}},
          },
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
          success: (data) => {
            let positionParameters = location.pathname.indexOf('?');
            let url = location.pathname.substring(positionParameters,location.pathname.length);
            let newURL = url + '?';
            newURL += 'searchproduct=' + searchproduct;
            history.pushState([], '', newURL);
            $('.renderprod').html(data)
          }
        });
      })
          })
    </script>
@endsection



