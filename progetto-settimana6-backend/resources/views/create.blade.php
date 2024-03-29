<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Create New Project</h1>
        <p>Author: {{ auth()->user()->name }}</p>

        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <div class="mb-3">
                <label for="name" class="form-label">Project Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <input type="hidden" name="id" value="{{ $newProjectId }}">
            <button type="submit" class="btn btn-primary">Create Project</button>
        </form>
    </div>
</body>

</html>
