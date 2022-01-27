@extends('layouts.plantilla')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="section-title">
                <h2>Trending Item</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="product-info">
                <div class="nav-main">
                    <!-- Tab Nav -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        @foreach($categories as $category)
                            <li class="nav-item"><a class="nav-link @if($category->id == 1) active @endIf" data-toggle="tab" href="#category{{ $category->id }}" role="tab">{{ $category->title }}</a></li>
                        @endforeach
                    </ul>
                    <!--/ End Tab Nav -->
                </div>
                <div class="tab-content" id="myTabContent">
                    <!-- Start Single Tab -->
                    @foreach($gangesCategories as $key => $gangesCategory)
                        <div class="tab-pane fade show @if($key == 1) active @endIf" id="category{{ $key }}" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    @foreach($gangesCategory as $ganga)
                                        @include('ganga.fitxa')
                                    @endforeach
                                </div>
                            </div>
                        </div>
                @endforeach
                <!--/ End Single Tab -->
                </div>
            </div>
        </div>
    </div>
@endsection
