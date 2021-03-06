@extends('backoffice.layouts.main')

@section('title', $department->name)

@section($department->slug . '-show', 'show')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if (Request::segment(4))
                <a class="btn btn-primary mb-3" href={{ url()->previous() }}>Back</a>
            @else
                @if (Auth::user()->hasRole('superadministrator'))
                    <a class="btn btn-success mb-3" href="/backoffice/applicants/{{ $department->slug }}/create"><i
                            class="fas fa-plus"></i></a>
                @endif
            @endif
            <div class="card spur-card">
                <div class="card-header">
                    <div class="spur-card-icon">
                        <i class="fas fa-table"></i>
                    </div>
                    <div class="spur-card-title">Job Applicants</div>
                </div>
                <div class="card-body ">
                    @if (count($applicants))
                        <table class="table table-in-card">
                            <thead>
                                <tr>
                                    <th scope="col">Applied on</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($applicants as $applicant)
                                    <tr>
                                        <td>
                                            @php
                                                $dateTime = strtotime($applicant->created_at);
                                                $date = date('m/d/y', $dateTime);
                                                $time = date('h:i A', $dateTime);
                                            @endphp
                                            {{ $date }}
                                            <br>
                                            {{ $time }}
                                        </td>
                                        <td>{{ $applicant->first_name }}</td>
                                        <td>{{ $applicant->last_name }}</td>
                                        <td>{{ $applicant->email }}</td>
                                        <td><a class="text-dark"
                                                href="/backoffice/listings/{{ $applicant->job->department->slug }}/{{ $applicant->job->id }}/view">
                                                {{ $applicant->position }}
                                                <br>
                                                ({{ $applicant->job->position_level }},
                                                {{ $applicant->job->employment_type }})
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-info"
                                                href="/backoffice/applicants/{{ $applicant->job->department->slug }}/{{ $applicant->id }}/download"><i
                                                    class="fas fa-download"></i></a>
                                            @if (Auth::user()->hasRole('superadministrator'))
                                                <a class="btn btn-primary"
                                                    href="/backoffice/applicants/{{ $applicant->job->department->slug }}/{{ $applicant->id }}/edit"><i
                                                        class="fas fa-pen"></i></a>
                                                <form method="POST"
                                                    action="/backoffice/applicants/{{ $applicant->job->department->slug }}/{{ $applicant->id }}"
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
