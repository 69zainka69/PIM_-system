@extends('lay.first')
@section('title')
Менеджер - {{ Auth::user()->name }}
@endsection
@php
$i = 0;
@endphp
@section('content')
<style>
.one{
    border:1px solid black;
    border-radius: 5px;
}
.grid{
    display:flex;
}
.part {
  display: none;
  width: 340px;
  margin: 20px auto 10px;
  text-align: center;
}

.part_active {
  display: block;
}

.button {
  background: #444;
  border: none;
  padding: 15px 10px;
  color: #fff;
  cursor: pointer;
}
.hidden {
    display: none; 
}
</style>
<div class="header page-header detail-page-header"><div class="row">
    <div>
        <h3><div class="header-breadcrumbs fixed-header-breadcrumbs"><a href="#Dashboard" class="action">Dashboard</a><span class="subsection"><a href="/symistprod" class="action" data-action="navigateToRoot">Сумісність номенклатур</a></span><span>новa</span></div>
            <div class="header-title">Нова</div></h3>
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
    <form method="POST" action="{{ route('associatedproduct.store')}}" enctype="multipart/form-data">
        @csrf 
    <div class="detail-button-container button-container record-buttons clearfix">
        <div class="btn-group" role="group">
            <button type="submit" class="btn btn-primary action" data-action="save" type="button">Зберегти</button><button class="btn btn-default action" data-action="cancel" type="button"><a href="/symistgrups">Скасувати</a></button>
        </div>
    </div><div style="height: 24px; display: none;">&nbsp;</div>

   


    <div class="row">
        <div class="overview col-md-8" style="width: 1391px;">
            <div class="middle">
    <div class="panel panel-default grid" data-name="panel-0">
       
        <div class="panel-body panel-body-form one">
        
         
            <div class="row">
                    <div class="cell col-sm-12 form-group" data-name="name">
                        <label class="control-label" data-name="name"><span class="label-text">Група сумісності</span><span class="required-sign"> *</span></label>
                        <div class="field" data-name="name">
                           <select name="associationname">
                            <option>Оберіть групу сумістності</option>
                            @foreach($association as $itema)
                                <option value="{{$itema->name}}">{{$itema->name}}</option>
                            @endforeach
                           </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12"></div>
                    <div class="cell col-sm-6 form-group" data-name="nameEnUs">
                        <label class="control-label" data-name="nameEnUs"><span class="label-text">Номенклатура</span><span class="required-sign"> *</span></label>
                        <div class="field" data-name="nameEnUs">
                            <input list="search_results" type="text" name="product" id="search_fields" onkeyup="searchs(this.value)">
                            <datalist class="search_results" id="search_results"></datalist>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12"></div>
                    <div class="cell col-sm-6 form-group" data-name="nameEnUs">
                        <label class="control-label" data-name="nameEnUs"><span class="label-text">Оберіть сумістну номенклатуру</span><span class="required-sign"> *</span></label>
                        <div class="field" data-name="nameEnUs">
                            <input list="search_result" type="text" name="symproduct"  id="search_field" onkeyup="search(this.value)">
                            <datalist class="search_result" id="search_result"></datalist>
                           

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

<script>
    function search(words) {
    if ($('#search_field ').val()!='') {
    
    console.log(words);
    $.ajax({
          url: "{{route('searchprod')}}",
          type: "GET",
          data: {
            words: words,
         
          },
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
          success: (data) => {
           
            $('.search_result').html(data)
          }
        });      
    }
}
</script>
<script>
    function searchs(word) {
    if ($('#search_fields').val()!='') {
    
    console.log(word);
    $.ajax({
          url: "{{route('searchprod')}}",
          type: "GET",
          data: {
            word: word,
         
          },
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
          success: (data) => {
           
            $('.search_results').html(data)
          }
        });      
    }
}
</script>

 
@endsection



