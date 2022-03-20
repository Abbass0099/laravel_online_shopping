@extends('adminlte::page')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/uikit.min.css')}}" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<style>
    .content-wrapper{
        background: none !important;
    }
    .form-part{
        background: white;
        padding: 15px;
    }

    .uk-form-stacked input{
        border: none;
        border-bottom: 1px solid #ccc;
    }
</style>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    $(document).ready(function(){
    flatpickr("#expire_date", {
    enableTime: false,
    dateFormat: "Y-m-d",
});
    })
</script>
@endsection
@section('content')
    <div class="col-sm-12">
        <div class="container-fluid">
                <form class="uk-grid-small uk-form-stacked" action="{{url('ads/create')}}" method="POST" id="" uk-grid>
                        @csrf
                        @method('post')
                        <div class="col-sm-7">
                            <div class="form-part">
                            <h3>Ad Details</h3>
                            {{-- Title --}}
                            <div class="uk-inline uk-width-1-1@s">
                                    <label for="" class="uk-form-label">Title</label>
                                    <input class="uk-input" type="text" name="title" placeholder="Enter ad title">
                            </div>
                            {{-- Expire_date --}}
                            <div class="uk-inline uk-width-1-1@s">
                                    <label for="" class="uk-form-label">Expire Date Ad</label>
                                    <input class="uk-input" type="text" id="expire_date" name="expire_date" placeholder="Enter expire date">
                            </div>
                            
                            <div class="uk-child-width-expand@s" uk-grid>
                                {{-- Price --}}
                                <div>
                                        <label for="" class="uk-form-label">Price</label>
                                        <input class="uk-input" type="text" name="price" placeholder="Enter ad price">
                                </div>
                                {{-- Discount --}}
                                <div>
                                        <label for="" class="uk-form-label">Discount Percentage</label>
                                        <input class="uk-input" type="text" name="discount" placeholder="%">
                                </div>
                                {{-- Currency --}}
                                <div>
                                        <label for="" class="uk-form-label">Currency</label>
                                        <input class="uk-input" type="text" name="email" placeholder="Enter Ad curreny">
                                </div>
                            </div>
                            {{-- Condition --}}
                            <div class="uk-inline uk-width-1-1@s">
                                    <label for="" class="uk-form-label">Condition</label>
                                    <input class="uk-input" type="text" name="email" placeholder="Enter ad condition">
                             </div>
                             {{-- Images  --}}
                             <div class="uk-inline uk-width-1-1@s">
                                 <div class="jumbotron">
                                     <p>Drag&Drop files</p>
                                    <input class="uk-file uk-file-primary" type="file" name="images[]" multiple/>
                                 </div>
                             </div>
                             {{-- Description --}}
                             <div class="uk-inline uk-width-1-1@s">
                                    <label for="" class="uk-form-label">Description</label>
                                    <textarea name="desc" id="" class="uk-textarea" cols="30" rows="10" placeholder="Description Ad"></textarea>
                             </div>

                             <div class="uk-inline uk-width-1-1@s text-center">
                                 <br/>
                                    <input type="submit" name="save" value="Save Ad" id="" class="uk-button uk-button-primary">
                             </div>
                            </div>
                        </div>
                            
                        <div class="col-sm-5">
                            <div class="col-sm-12">
                                <div class="row">
                                        <div class="col-sm-12">
                                                <div class="uk-inline uk-width-1-1@s">
                                                        <div class="form-part">
                                                                <h3>Ad Category</h3>
                                                                <label for="" class="uk-form-label">Choose Sector</label>
                                                                <select name="sector_id" class="uk-select" id="">
                                                                    @if(!empty($sectors))
                                                                        @foreach($sectors as $sector)
                                                                            <option value="{{$sector->id}}">{{$sector->sector_name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                        </div>                                        
                                                     </div>
                    
                                        </div>
                                        <div class="col-sm-12">
                                            <br/>
                                            {{-- Location --}}
                                            <div class="form-part">
                                                    <h3>Ad Location & Contact</h3>
                                                    <div class="uk-inline uk-width-1-1@s">
                                                            <label for="" class="uk-form-label">Location</label>
                                                            <input class="uk-input" type="text" name="location" placeholder="Enter location">
                                                    </div>
                                                </div>

                                                {{-- City --}}
                                                <div class="form-part">
                                                        <div class="uk-inline uk-width-1-1@s">
                                                                <label for="" class="uk-form-label">City</label>
                                                                <input class="uk-input" type="text" name="city" placeholder="Enter city">
                                                        </div>
                                                    </div>
                                                    {{-- Country --}}
                                                    <div class="form-part">
                                                            <div class="uk-inline uk-width-1-1@s">
                                                                    <label for="" class="uk-form-label">Country</label>
                                                                    <input class="uk-input" type="text" name="county" placeholder="Enter Ad Country">
                                                            </div>
                                                        </div>
                                                    {{-- State --}}
                                                    <div class="form-part">
                                                            <div class="uk-inline uk-width-1-1@s">
                                                                    <label for="" class="uk-form-label">State</label>
                                                                    <input class="uk-input" type="text" name="state" placeholder="Enter ad state">
                                                            </div>
                                                        </div>
                                                    {{-- Street --}}
                                                    <div class="form-part">
                                                            <div class="uk-inline uk-width-1-1@s">
                                                                    <label for="" class="uk-form-label">Street</label>
                                                                    <input class="uk-input" type="text" name="street" placeholder="Enter ad street">
                                                            </div>
                                                        </div>
                                                    {{-- phone --}}
                                                    <div class="form-part">
                                                            <div class="uk-inline uk-width-1-1@s">
                                                                    <label for="" class="uk-form-label">Phone</label>
                                                                    <input class="uk-input" type="text" name="phone" placeholder="Enter ad phone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
        </div>
    </div>
@endsection