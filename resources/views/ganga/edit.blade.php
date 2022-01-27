@extends('layouts.plantilla')
@section('content')
    <section class="py-4">
        <form method="post" action="{{ route("ganga.update", $gangaEdit->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            @if(isset($gangaEdit->id))
                <div class="form-group">
                    <label for="id">Id: {{ $gangaEdit->id }}</label>
                    <input name="id" type="hidden" value="{{ $gangaEdit->id }}">
                </div>
            @endif

            <div class="form-group">
                <label for="title">Nom:</label>
                <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp"
                       placeholder="Enter Name" value="{{ $old_name??$gangaEdit->title }}">
                @if($errors->has('title'))

                @endif
            </div>
            <div class="form-group">
                <label for="description">Descripció:</label>
                <textarea name="description" class="form-control" id="description" aria-describedby="titleHelp"
                          placeholder="Descripcio de la ganga">{{ $old_name??$gangaEdit->description }}</textarea>
                @if($errors->has('description'))

                @endif
            </div>
            <div class="form-group">
                <label for="url">URL:</label>
                <input name="url" type="text" class="form-control" id="url" aria-describedby="titleHelp"
                       placeholder="Enter Name" value="{{ $old_name??$gangaEdit->url }}">
                @if($errors->has('url'))

                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="discount_price">Preu amb descompte:</label>
                    <input name="discount_price" type="number" class="form-control" id="discount_price" aria-describedby="dpriceHelp"
                           placeholder="Enter Discount Price" value="{{ $old_dprice??$gangaEdit->discount_price }}">
                    @if($errors->has('discount_price'))

                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="price">Preu Original:</label>
                    <input name="price" type="number" class="form-control" id="price" aria-describedby="priceHelp"
                           placeholder="Enter Original" value="{{ $old_price??$gangaEdit->price }}">
                    @if($errors->has('price'))

                    @endif
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <label class="col-form-label col-sm-2 pt-0">Disponible</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" name="available" type="radio" value="1" id="available" aria-describedby="saleHelp" @if($gangaEdit->available) checked @endif>
                            <label class="form-check-label" for="gridRadios1">
                                SI
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="available" type="radio" value="0" id="available" aria-describedby="saleHelp" @if(!$gangaEdit->available) checked @endif>
                            <label class="form-check-label" for="gridRadios2">
                                NO
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <label for="category">Categoria:</label><br>
            <select class="form-control" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ ($gangaEdit->category_id == $category->id)?'selected':'' }}>
                        {{ $category->title }}</option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="points">Punts:</label>
                <input name="points" type="number" class="form-control" id="points" value="{{ $old_name??$gangaEdit->points }}">
                @if($errors->has('points'))

                @endif
            </div>
            <div class="form-group">
                <label for="photo">Puja Foto</label>
                <input type="file" name="photo" value="{{ $old_img??$gangaEdit->img }}" class="form-control-file" id="photo">
                @if ($errors->has('img'))
                    <div class="text-danger">
                        {{ $errors->first('img') }}
                    </div>
                @endif
            </div>
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection
