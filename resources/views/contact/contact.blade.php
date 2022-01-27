@extends('layouts.plantilla')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="section-title">
                <h2>Contacta con nosotros</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                    <div class="col-md-5 mx-auto">
                        @foreach (config('datos') as $data)
                            @php $nameClass = key($data); $content = $data[$nameClass]; @endphp
                        <div class="col-12 justify-center fa-2x">
                            <span><i class="{{ $nameClass }}"></i>{{ $content }}</span>
                        </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
@endsection
