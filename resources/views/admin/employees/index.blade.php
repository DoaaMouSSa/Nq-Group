@extends('layouts.admin')

@section('content')
    <h1>All employees</h1>
    <a type="button" class="btn btn-primary" href="{{ route('admin.employees.create') }}">New</a>

       <!-- /.row -->
       <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Employees Data</h3>

              <div class="card-tools">

                <div class="input-group input-group-sm" style="width: 150px;">

                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Job</th>
                    <th>Department</th>
                    <th>Details</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->employee_code }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->job_title }}</td>
                        <td>{{ $employee->department }}</td>
                        <td><a href="{{ route('admin.employees.show', $employee->id) }}">Details</a></td>

                        <td>
                            <a class="text-success" href="{{ route('admin.employees.edit') }}">Edit</a>
                        </td>
                        <td>
                            <form id="delete-form-{{ $employee->id }}" action="{{ route('admin.employees.destroy', $employee->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm" onclick="deleteEmployee(event, 'delete-form-{{ $employee->id }}')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->

@endsection
<script>
    function deleteEmployee(event, formId) {
        event.preventDefault();
        document.getElementById(formId).submit();
    }
</script>
