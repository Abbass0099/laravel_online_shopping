@extends('adminlte::page')
@section("content-header")
<h3>Dashbord</h3>
@endsection

@section('css')
<style>
    .empty-dash{
        min-height: 200px;
        display: flex;
        justify-content: center;
        font-weight: bold;
        font-size: 1.1em;
    }
</style>    
@endsection
@section('content')
<div class="box box-solid box-default">
    <div class="box-header">
        <h3>Dashbord</h3>
    </div>
    <div class="box-body">
        @if($ads->count() == 0 )
            <div class="empty-dash">
                Sorry. Dashboard is empty
            </div>
        @endif
    </div>
</div>

@endsection