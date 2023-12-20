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
            /* Add any additional styling you want for each project div */
            margin: 10px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .navbar-dark.bg-custom {
            background-color: #001f3f; /* Adjust the color code as needed */
        }
    </style>
</head>
<body>

            <!-- Navigation Bar with Full-Width Blue Background -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
        <div class="container-fluid">
            <span class="navbar-brand">FYP Project Group Dashboard</span>
        </div>
    </nav>

<div class="container mt-4">
    <h1>Updated Group Projects</h1>
    <p><strong>Project Group ID:</strong> <?php echo e($user_id); ?></p>
    <?php if(count($projects) > 0): ?>
        <ul class="list-group">
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item">
                    <h4><?php echo e($project->title); ?></h4>
                    <p> <b>Description:</b> <?php echo e($project->description); ?></p>
                    <p><b>Keywords:</b> <?php echo e($project->keywords); ?></p>
                    <p><b>Assigned Table:</b> <?php echo e($project->table); ?></p>
                    <p><b>Evaluated by:</b> <?php echo e($project->eval_by); ?></p>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
        <p>No projects found.</p>
    <?php endif; ?>
</div>

<!-- Include Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Openhouse_Management_Project\resources\views/showStudentProject.blade.php ENDPATH**/ ?>