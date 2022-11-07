

@extends('lay.first')


@section('title')
Менеджер - {{ Auth::user()->name }}
@endsection
@section('content')


<p>Менеджер - {{ Auth::user()->name }}</p> 
<form method="POST" action="{{ route('edituser.update', Auth::user()->name)}}">
@csrf
@method('PUT')
<p>Група закупників - <select class="select_send_ajax" name ="grupss">
<option>{{ Auth::user()->group_id }}</option>
@foreach($producer as $grups)
<option value="{{$grups}}">{{$grups}}</option>
@endforeach
</select></p>
</form>


<form method="POST" action="{{ route('edituser.update', Auth::user()->name)}} ">
@csrf
@method('PUT')
<p>Асортиментна група - 
<select class="select_send_ajaxy" name="price">
  <option value="{{Auth::user()->price}}">
    @if(Auth::user()->price == 'price')
    Асортимент+Під замовлення
    @endif
    @if(Auth::user()->price == 'asortment')
    АССОРТИМЕНТ
    @endif
    @if(Auth::user()->price == 'all')
    Весь список
    @endif
  </option>
<option value="price">Асортимент+Під замовлення</option> <!--(всі номенклатури, які містять ціну продажу оптову або роздрібну) тут будуть підтягуватись і номенклатури асортименту і під замовлення і реалізації і розпродажу і т.д-->
<option value="asortment">Асортимент</option> <!--(лише номенклатури з позначкою Асортимент) -->
<option value="all">Весь список</option> <!--(відображаються всі номенклатури, окрім вже перенесених в Архів раніше) -->
</select>
</p>
</form>




<p>Номенклатур - {{ $count }}</p>

<style>
    .pie {
  --p:20;
  --b:22px;
  --c:rgb(28, 139, 0);
  --w:150px;
  
  width:var(--w);
  aspect-ratio:1;
  position:relative;
  display:inline-grid;
  margin:5px;
  place-content:center;
  font-size:25px;
  font-weight:bold;
  font-family:sans-serif;
}
.pie:before,
.pie:after {
  content:"";
  position:absolute;
  border-radius:50%;
}
.pie:before {
  inset:0;
  background:
    radial-gradient(farthest-side,var(--c) 98%,#0000) top/var(--b) var(--b) no-repeat,
    conic-gradient(var(--c) calc(var(--p)*1%),#0000 0);
  -webkit-mask:radial-gradient(farthest-side,#0000 calc(99% - var(--b)),#000 calc(100% - var(--b)));
          mask:radial-gradient(farthest-side,#0000 calc(99% - var(--b)),#000 calc(100% - var(--b)));
}
.pie:after {
  inset:calc(50% - var(--b)/2);
  background:var(--c);
  transform:rotate(calc(var(--p)*3.6deg)) translateY(calc(50% - var(--w)/2));
}
.animate {
  animation:p 1s .5s both;
}
.no-round:before {
  background-size:0 0,auto;
}
.no-round:after {
  content:none;
}
@keyframes p {
  from{--p:0}
}


.pies {
  --p:20;
  --b:22px;
  --c:rgb(255, 136, 0);
  --w:150px;
  
  width:var(--w);
  aspect-ratio:1;
  position:relative;
  display:inline-grid;
  margin:5px;
  place-content:center;
  font-size:25px;
  font-weight:bold;
  font-family:sans-serif;
}
.pies:before,
.pies:after {
  content:"";
  position:absolute;
  border-radius:50%;
}
.pies:before {
  inset:0;
  background:
    radial-gradient(farthest-side,var(--c) 98%,#0000) top/var(--b) var(--b) no-repeat,
    conic-gradient(var(--c) calc(var(--p)*1%),#0000 0);
  -webkit-mask:radial-gradient(farthest-side,#0000 calc(99% - var(--b)),#000 calc(100% - var(--b)));
          mask:radial-gradient(farthest-side,#0000 calc(99% - var(--b)),#000 calc(100% - var(--b)));
}
.pies:after {
  inset:calc(50% - var(--b)/2);
  background:var(--c);
  transform:rotate(calc(var(--p)*3.6deg)) translateY(calc(50% - var(--w)/2));
}



.piess {
  --p:20;
  --b:22px;
  --c:rgb(255, 0, 0);
  --w:150px;
  
  width:var(--w);
  aspect-ratio:1;
  position:relative;
  display:inline-grid;
  margin:5px;
  place-content:center;
  font-size:25px;
  font-weight:bold;
  font-family:sans-serif;
}
.piess:before,
.piess:after {
  content:"";
  position:absolute;
  border-radius:50%;
}
.piess:before {
  inset:0;
  background:
    radial-gradient(farthest-side,var(--c) 98%,#0000) top/var(--b) var(--b) no-repeat,
    conic-gradient(var(--c) calc(var(--p)*1%),#0000 0);
  -webkit-mask:radial-gradient(farthest-side,#0000 calc(99% - var(--b)),#000 calc(100% - var(--b)));
          mask:radial-gradient(farthest-side,#0000 calc(99% - var(--b)),#000 calc(100% - var(--b)));
}
.piess:after {
  inset:calc(50% - var(--b)/2);
  background:var(--c);
  transform:rotate(calc(var(--p)*3.6deg)) translateY(calc(50% - var(--w)/2));
}



.dia{
    border:1px solid black;
    background-color: #7575ff;
    border-radius: 5%;
    width:200px;
    margin-left:20px;
    padding-right: 20px;
}
.dia p{
    text-align: center;
}
.diagrams{
    display: flex;
}
</style>


<div class="diagrams">
        <div class="dia first">
            <div class="pie" style="--p:{{$green}}"> {{$green}}%</div>
            <p>номенклатури які повністю заповненні</p>
        </div>
        
        <div class="dia first">
            <div class="pies" style="--p:{{$orange}}"> {{$orange}}%</div>
            <p>номенклатури частково заповненні</p>
        </div>
       
        <div class="dia first">
            <div class="piess" style="--p:{{$red}}"> {{$red}}%</div>
            <p>номенклатури без даних</p>
        </div>
</div>
<div style="padding-top:50px;">
  <div id="dashlet-d964187" class="panel panel-default dashlet" data-name="GeneralStatistics" data-id="d964187">
    <div class="panel-heading">
        
        <h4 class="panel-title">
          <span data-action="refresh" class="action" title="Refresh" style="cursor: pointer;">PIM загальна статистика</span>
        </h4>
    </div>
    <div class="dashlet-body panel-body"><div class="list-container">

<div class="list">
    <table class="table fixed-header-table hidden">
        <thead>
            <tr>
                <th>
                            Назва
                </th>
                <th>
                            Кількість
                </th>
            </tr>
        </thead>
    </table>
    <table class="table full-table">
        <thead>
            <tr>
                <th width="80%">
                    <div>
                                Назва
                    </div>
                </th>
                <th width="20%">
                    <div>
                                Кількість
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr data-id="product" class="list-row">
            

    
    <td class="cell" data-name="name" width="80%">
    <a href="/product">Номенклатури</a>

    </td>

    
    <td class="cell" data-name="amount" width="20%">
    <span class="pre-label">{{ $count }}</span>

    </td>


            </tr>
            <tr data-id="category" class="list-row">
            

    
    <td class="cell" data-name="name" width="80%">
    <a href="/grups">Категорії</a>

    </td>

    
    <td class="cell" data-name="amount" width="20%">
    <span class="pre-label">{{$count_cat}}</span>

    </td>


            </tr>
          
            <tr data-id="attribute" class="list-row">
            

    
    <td class="cell" data-name="name" width="80%">
    <a href="/atributes">Атрибути</a>

    </td>

    
    <td class="cell" data-name="amount" width="20%">
    <span class="pre-label">{{$attrib}}</span>

    </td>


            </tr>

        </tbody>
    </table>
    
</div>


</div></div>
</div>
</div>
<script>
  $('.select_send_ajax').on('change', function () {
    console.log('ddd');
      this.form.submit();
  });
    </script>
    <script>
  $('.select_send_ajaxy').on('change', function () {
    console.log('ddd');
      this.form.submit();
  });
    </script>
@endsection
