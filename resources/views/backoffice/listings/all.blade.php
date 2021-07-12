@extends('backoffice.layouts.main')

@section('title', 'All Departments')

@section('listings' . '-selected', 'selected')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card spur-card">
                <div class="card-header ">
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
                                    <th scope="col">Created on</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Employment Type</th>
                                    <th scope="col">Position Level</th>
                                    <th scope="col">Applicants</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                                    <tr>
                                        <td>
                                            @php
                                                $dateTime = strtotime($job->created_at);
                                                $date = date('m/d/y', $dateTime);
                                                $time = date('h:i A', $dateTime);
                                            @endphp
                                            {{ $date }}
                                            <br>
                                            {{ $time }}
                                        </td>
                                        <td>{{ $job->title }}</td>
                                        <td>{{ $job->employment_type }}</td>
                                        <td>{{ $job->position_level }}</td>
                                        <td><a class="text-dark"
                                                href="/backoffice/applicants/{{ $job->department->slug }}/{{ $job->id }}/view">{{ $job->applicants->where('disabled', 0)->count() }}</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-info "
                                                href="/backoffice/listings/{{ $job->department->slug }}/{{ $job->id }}/view"><i
                                                    class="fas fa-eye fa-fw"></i></a>
                                            @if (Auth::user()->hasRole('superadministrator'))
                                                <a class="btn btn-primary "
                                                    href="/backoffice/listings/{{ $job->department->slug }}/{{ $job->id }}/edit"><i
                                                        class="fas fa-pen fa-fw"></i></a>
                                                <form method="POST"
                                                    action="/backoffice/listings/{{ $job->department->slug }}/{{ $job->id }}"
                                                    style="display: inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="fas fa-trash-alt fa-fw"></i></button>
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js">
    </script>
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
