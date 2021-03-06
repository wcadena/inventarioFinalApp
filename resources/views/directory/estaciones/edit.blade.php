@extends('layouts.master')

@section('content')

    <h1>@lang('fo.Edit Estacione')</h1>
    <hr/>

    {!! Form::model($estacione, [
        'method' => 'PATCH',
        'url' => ['estaciones', $estacione->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nombre_largo') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('nombre_largo', trans('fo.nombre_largo'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('nombre_largo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombre_largo', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pais') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('pais', trans('fo.pais'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::select('pais', \App\Estaciones::getENUM('pais'), null, ['class' => 'form-control']) !!}
                    {!! $errors->first('pais', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estacion') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('estacion', trans('fo.estacion'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('estacion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('estacion', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
    <div class="form-group {{ $errors->has('empresa') ? ' form-control-alt is-invalid' : ''}}">
        {!! Form::label('empresa', trans('form.empresa'), ['class' => 'control-label']) !!}
        <div class="ekihk">
            {!! Form::text('empresa', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
            {!! $errors->first('empresa', '<p class="invalid-feedback">:message</p>') !!}
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit(trans('fo.Update'), ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection