@extends('layouts.master')

@section('content')

    <h1>@lang('fo.Areas') <a href="{{ url('areas/create') }}" class="btn btn-primary pull-right btn-sm">@lang('fo.Add New Area') </a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>@lang('form.sno')</th><th>@lang('fo.Area')</th><th>@lang('fo.Actions')</th>
                </tr>
            </thead>
            <tbody>
            @php $x=0; @endphp
            @foreach($areas as $item)
                @php $x++;@endphp
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('areas', $item->id) }}">{{ $item->area }}</a></td>
                    <td>
                        <a href="{{ url('areas/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">@lang('fo.Update')</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['areas', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit(trans('fo.Delete'), ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $areas->render() !!} </div>
    </div>

@endsection
