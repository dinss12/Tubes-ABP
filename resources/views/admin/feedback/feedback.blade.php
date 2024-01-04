@extends('admin.adminLayout.main')
@section('content')
    <form action="feedback.php" method="POST">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Feedback</h1>
        </div>
        @if(session()->has('success'))
        <div class="alert alert-success col-lg-10" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <div class="table-responsive col-lg-10">
            
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama_Lengkap</th>
                <th scope="col">Kategori</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            
                @foreach ($feedbacks as $feedback)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $feedback->nama }}</td>
                <td>{{ $feedback->kategori }}</td>
                
                <td>
                    <a href="/feedback/{{ $feedback->id }}" class="badge bg-primary"> <span data-feather="eye"></span></a>
                    <form action="" method="" class="d-inline" hidden>
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" hidden>
                            <span data-feather="trash-2"></span>
                        </button>
                    </form>
                    <form action="/feedback/{{ $feedback->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" >
                          <span data-feather="trash-2"></span>
                        </button>
                    </form>
                </td>
                </tr> 
                @endforeach
            </tbody>
            </table>
        </div>

    </form>
@endsection