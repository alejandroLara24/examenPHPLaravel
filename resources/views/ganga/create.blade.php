@extends('layouts.plantilla')
@section('content')
    <section class="py-4">
        <form method="post" action="{{ route("ganga.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nom:</label>
                <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp"
                       placeholder="Enter Name" value="">
                @if($errors->has('title'))
                    <div class="text-danger">
                        {{ $errors->first('title') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="description">Descripció:</label>
                <textarea name="description" class="form-control" id="title" aria-describedby="titleHelp"
                          placeholder="Descripcio de la ganga"></textarea>
                @if($errors->has('description'))
                    <div class="text-danger">
                        {{ $errors->first('description') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="url">URL:</label>
                <input name="url" type="text" class="form-control" id="url" aria-describedby="titleHelp"
                       placeholder="Enter Name" value="">
                @if($errors->has('url'))
                    <div class="text-danger">
                        {{ $errors->first('url') }}
                    </div>
                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="discount_price">Preu amb descompte:</label>
                    <input name="discount_price" type="number" class="form-control" id="discount_price" aria-describedby="dpriceHelp"
                           placeholder="Introdueix el preu amb descompte" value="">
                    @if($errors->has('discount_price'))
                        <div class="text-danger">
                            {{ $errors->first('discount_price') }}
                        </div>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="price">Preu Original:</label>
                    <input name="price" type="number" class="form-control" id="price" aria-describedby="priceHelp"
                           placeholder="Introdueix el preu" value="">
                    @if($errors->has('price'))
                        <div class="text-danger">
                            {{ $errors->first('price') }}
                        </div>
                    @endif
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <label class="col-form-label col-sm-2 pt-0">Disponible</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" name="available" type="radio" value="1" id="available" aria-describedby="saleHelp">
                            <label class="form-check-label" for="gridRadios1">
                                SI
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="available" type="radio" value="0" id="available" aria-describedby="saleHelp">
                            <label class="form-check-label" for="gridRadios2">
                                NO
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            @if($errors->has('available'))
                <div class="text-danger">
                    {{ $errors->first('available') }}
                </div>
            @endif
            <label for="category">Categoria:</label><br>
            <select class="form-control" name="category_id">
                <option disabled selected>-- Selecciona una categoria --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->title }}</option>
                @endforeach
            </select>
            @if($errors->has('category_id'))
                <div class="text-danger">
                    {{ $errors->first('category_id') }}
                </div>
            @endif
            <div class="form-group">
                <label for="points">Punts:</label>
                <input name="points" type="number" class="form-control" id="title" value="">
                @if($errors->has('points'))
                    <div class="text-danger">
                        {{ $errors->first('points') }}
                    </div>
                @endif
            </div>
        <!--<div class="form-group">
                <label for="PhotoFile">Puja Foto</label>
                <input type="file" name="photo" value="" class="form-control-file" id="PhotoFile">
            </div>
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">-->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection
