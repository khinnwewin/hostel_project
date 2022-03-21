@extends('frontend.layout.app')
@section('content')
    <div>
    <center><h3><b>{{trans('app.hostel_and_other_fees')}}</b></h3></center>
    </div>
    <div class="content table-m-50">
        {{-- <div class="row">
            <form method="GET">
                <div class="form-group col-sm-3 mmtext">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <a href="{!! route('law.index') !!}" class="btn btn-info">Clear</a>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div> --}}
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table>
                    <thead>
                        <th>{{trans('app.no')}}</th>
                        <th>{{trans('app.title')}}</th>
                        <th>{{trans('app.price')}}</th>
                        <th>{{trans('app.remark')}}</th>
                    </thead>
                    <tbody>
                    <?php $index = 1; ?>
                    @foreach($fees as $fee)
                        <tr style="width: 100px;height: 50px;">
                            <td>{{ $index++ }}</td>
                            <td>{{ languageSwitcher($fee->title) }}</td>
                            <td>{!! $fee->price !!}</td>
                            <td>{{ languageSwitcher($fee->content) }}</td>
                            {{--<td>
                            <a href="{!! route('fee.edit', [$fee->id]) !!}"
                               class='btn btn-xs btn-primary'><i class="fa fa-check-square-o"></i>&nbsp;Edit</a>
                            <a href="#" type="button" data-id="{{ $fee->id }}"
                               class="btn btn-xs btn-danger" data-toggle="modal"
                               data-url="{{ url('admin/fee/'.$fee->id) }}"
                               data-target="#deleteFormModal"><i
                                    class="fa fa-trash-o"></i>&nbsp;Delete</a>
                            </td> --}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pull-right">
                    {{-- $fees->appends($_GET)->links() --}}
                </div>
            </div>
        </div>
    </div>
@endsection
