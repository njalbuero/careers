@extends('backoffice.layouts.main')

@section('title', $department->name)

@section($department->slug . '-show', 'show')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if (Auth::user()->hasRole('superadministrator'))
                <a class="btn btn-success mb-3" href="/backoffice/listings/{{ $department->slug }}/create"><i
                        class="fas fa-plus"></i></a>
            @endif
            <div class="card spur-card">
                <div class="card-header bg-hsi text-white">
                    <div class="spur-card-icon">
                        <i class="fas fa-table"></i>
                    </div>
                    <div class="spur-card-title">Job Listings</div>
                </div>
                <div class="card-body ">
                    @if (count($jobs))
                        <table class="table table-in-card">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Employment Type</th>
                                    <th scope="col">Position Level</th>
                                    <th scope="col">Salary</th>
                                    <th scope="col">Applicants</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                                    <tr>
                                        <td>{{ $job->title }}</td>
                                        <td>{{ $job->employment_type }}</td>
                                        <td>{{ $job->position_level }}</td>
                                        <td>{{ $job->salary_min }} - {{ $job->salary_max }}</td>
                                        <td>{{ $job->applicants->where('disabled', 0)->count() }}</td>
                                        <td>
                                            <a class="btn btn-info mr-2"
                                                href="/backoffice/listings/{{ $job->department->slug }}/{{ $job->id }}/view"><i
                                                    class="fas fa-eye"></i></a>
                                            @if (Auth::user()->hasRole('superadministrator'))
                                                <a class="btn btn-primary mr-2"
                                                    href="/backoffice/listings/{{ $job->department->slug }}/{{ $job->id }}/edit"><i
                                                        class="fas fa-pen"></i></a>
                                                <form method="POST"
                                                    action="/backoffice/listings/{{ $job->department->slug }}/{{ $job->id }}"
                                                    style="display: inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="text-center">No records</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        const deleteBtns = document.getElementsByClassName("btn-danger");
        Array.from(deleteBtns).forEach(element => {
            element.addEventListener('click', deleteThis);
        });

        function deleteThis() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.form.submit();
                }
            })
        }
    </script>
@endsection
