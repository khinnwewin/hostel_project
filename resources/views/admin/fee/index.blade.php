@extends('admin.layout.app')
@section('content')
    <section class="content-header">
        <h1>
            Fees
        </h1>
        
        <span class="breadcrumb"><a href='{{ route("fee.create") }}' class="btn btn-sm btn-primary"><i
                class="fa fa-plus-square"></i>&nbsp;&nbsp;Create New Fee</a></span>
    </section>
    <div class="content">
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

        <!-- Flash -->
        
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">

                <table class="table table-striped table-hover tbl_repeat" id="sortable">
                    <thead>
                        <th>No.</th>
                        <th>English Title</th>
                        <th>Myanmar Title</th>
                        <th>Price/Month (Kyats)</th>
                        <th>English Remark</th>
                        <th>Myanmar Remark</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                    <?php $index = 1; ?>
                    @foreach($fees as $fee)
                        <tr>
                            <td>{{ $index++ }}</td>
                            <td>{!! en($fee->title) !!}</td>
                            <td>{!! mm($fee->title) !!}</td>
                            <td>{!! $fee->price !!}</td>
                            <td>{!! en($fee->content) !!}</td>
                            <td>{!! mm($fee->content) !!}</td>
                            <td>
                            <a href="{!! route('fee.edit', [$fee->id]) !!}"
                               class='btn btn-xs btn-primary'><i class="fa fa-check-square-o"></i>&nbsp;Edit</a>
                            <a href="#" type="button" data-id="{{ $fee->id }}"
                               class="btn btn-xs btn-danger" data-toggle="modal"
                               data-url="{{ url('admin/fee/'.$fee->id) }}"
                               data-target="#deleteFormModal"><i
                                    class="fa fa-trash-o"></i>&nbsp;Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pull-right">
                    {{ $fees->appends($_GET)->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection