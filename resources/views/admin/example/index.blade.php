@extends('admin.layouts.template')

@section('title')
Example
@endsection

@section('sub-title')
Description of something
@endsection

@section('action-button')
<a href="{{ route('example.create') }}" class="btn btn-primary"><i class="fas fa-plus fa-sm me-2"></i> New Example</a>
@endsection

@section('content')
<!-- Basic Tables start -->
<section class="section">
    @if(count($example) > 0)
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-3">List of Example</h4>
            <form action="" method="GET">
            <div class="input-group">
                <label for="dropdown-show" class="col-form-label me-3">Show: </label>
                <select class="form-select" name="show" id="dropdown-show">
                    <option @if(request()->show == "all") selected @endif value="all">All</option>
                    <option @if(request()->show == "onlyTrashed") selected @endif value="onlyTrashed">Only Trashed</option>
                    <option @if(request()->show == "allWithTrashed") selected @endif value="allWithTrashed">All (With Trashed)</option>
                </select>
                <button class="btn btn-info"><i class="fas fa-sync-alt me-2"></i> Reload</button>
            </div>
            </form>
        </div>
        <div class="card-body">
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Field 1</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($example as $key => $value)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $value }}</td>
                        <td class="text-center">
                            <a href="{{ route('example.edit', $key) }}" class="btn btn-sm rounded-pill btn-warning"><i class="fa fa-edit fa-sm"></i></a>
                            <a href="#" data-href="{{ route('example.destroy', $key) }}" class="btn btn-sm rounded-pill btn-danger delete-button"><i class="fa fa-trash fa-sm"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @else
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <h4 class="text-center">
                    <i class="fa fa-exclamation-circle text-center text-primary fa-2x mb-3"></i>
                    <br>
                    Example does not exists.
                </h4>
                <p class="text-center">You can add new <a href="{{ route('example.crate') }}">example</a> to see them here.</p>
            </div>
        </div>
    </div>
    @endif
</section>
<!-- Basic Tables end -->
<form id="delete-example" action="" method="POST">
    @csrf
    @method('DELETE')
</form>
@endsection

@section('js')
<script>
    // Jquery Datatable
    let jquery_datatable = $("#table").DataTable()

    $('.delete-button').click(function() {
        var action = $(this).data('href')

        Swal.fire({
            title: 'Delete example',
            text: "Are you sure to delete this example?",
            footer: "<small>Deleted example can be restored again.</small>",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#delete-example').attr('action', action)
                $('#delete-example').submit()
            }
        })
    })
</script>
@endsection