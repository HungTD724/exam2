<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Company Form - Laravel 9 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Student</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('students.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        @foreach ($students as $student)
            <form method="POST" action="{{ route('students.update', $student->student_id) }}">
                @csrf
                @method('PUT')
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                        value="{{ $student->name }}">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="date_of_birth" placeholder="date_of_birth"
                        name="date_of_birth" value="{{ $student->date_of_birth }}">
                    <label for="date_of_birth">Birht Day</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="yearEnrolled" placeholder="yearEnrolled"
                        name="yearEnrolled" value="{{ $student->yearEnrolled }}">
                    <label for="yearEnrolled">yearEnrolled</label>
                </div>

                <input type="submit" name="submit" id="submit" value="Update">

            </form>
        @endforeach
    </div>
</body>

</html>
