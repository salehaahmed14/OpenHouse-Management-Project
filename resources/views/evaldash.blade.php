


<!-- resources/views/projects.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Custom styles go here */
        .project-div {
            
            margin: 10px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .navbar-dark.bg-custom {
            background-color: #001f3f; 
        }
    </style>
</head>
<body>

            <!-- Navigation Bar with Full-Width Blue Background -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
        <div class="container-fluid">
            <span class="navbar-brand">Evaluator Dashboard</span>
        </div>
        <form method="POST" action="/logout">
            @csrf
            <button class="btn btn-primary"type="submit">Logout</button>
        </form>
    </nav>

    <!-- Content Section -->
    <div class="container mt-4">
        <!-- Your content goes here -->
    </div>


    @foreach($projects as $project)
    <div class="project-div">
        <b>Project ID:</b> {{ $project->proj_id }}<br>
        <b>Group ID:</b> {{ $project->user_id }}<br>
        <b>Title:</b> {{ $project->title }}<br>
        <b>Description:</b> {{ $project->description }}<br>
        <b>Table:</b> {{ $project->table }}<br>
        <b>Score:</b> {{ $project->score }}<br>

        <form method="post" action="{{ route('assignScore', ['projectId' => $project->proj_id]) }}">
            @csrf
            <div class="login__field">
                <b>Score: </b>
                <select name="selectedScore" class="login__input" required>
                    <!-- Your table options go here -->
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>

            <button class="btn btn-primary" type="submit">Assign Score</button>
        </form>
    </div>
@endforeach

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
