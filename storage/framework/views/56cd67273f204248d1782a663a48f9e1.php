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
            <span class="navbar-brand">Evaluator Choiceboard</span>
        </div>
        <form method="POST" action="/logout">
            <?php echo csrf_field(); ?>
            <button class="btn btn-primary"type="submit">Logout</button>
        </form>
    </nav>

    <!-- Content Section -->
    <div class="container mt-4">
        <!-- Your content goes here -->
    </div>
        

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Please select keywords for FYPs:</div>

                    <div class="card-body">
                        <form method="get" action="<?php echo e(route('showdash')); ?>">
                            <?php echo csrf_field(); ?>

                            <?php $__currentLoopData = $keywords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <label>
                                    <input type="checkbox" name="keywords[]" value="<?php echo e($keyword); ?>" />
                                    <?php echo e($keyword); ?>

                                </label><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH D:\eval-system\Openhouse_Management_Project\resources\views/evalchoice.blade.php ENDPATH**/ ?>