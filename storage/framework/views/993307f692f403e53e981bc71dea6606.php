<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FYP Project Group Dashboard</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Custom styles go here */
        .navbar-dark.bg-custom {
            background-color: #001f3f; /* Adjust the color code as needed */
        }

        /* Adjust the overall form styling */
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 20px;
        }

        /* Adjust individual input styles */
        .mb-6 input,
        .mb-6 textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Adjust the button style */
        .mb-6 button {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .mb-6 button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<!-- Navigation Bar with Full-Width Blue Background -->
<nav class="navbar navbar-expand-lg navbar-dark bg-custom">
    <div class="container-fluid">
        <span class="navbar-brand">FYP Project Group Dashboard</span>
        <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
            <form method="POST" action="/logout">
                <?php echo csrf_field(); ?>
                <button class="btn btn-primary"type="submit">Logout</button>
            </form>
        </nav>
    </div>
</nav>
<h2>Fill In Your Project Details</h2>
<!-- Form -->
<form method="POST" action="/studentdash" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class="mb-6">
        <label for="user_id" class="form-label">Project Group ID</label>
        <input type="text" class="form-control" name="user_id" value="<?php echo e(old('user_id')); ?>" />
        <?php $__errorArgs = ['user_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="mb-6">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo e(old('title')); ?>" placeholder="Example: Project Title" />
        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="mb-6">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" rows="5" placeholder="Include project details"><?php echo e(old('description')); ?></textarea>
        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="mb-6">
        <label for="keywords" class="form-label">Keywords</label>
        <input type="text" class="form-control" name="keywords" value="<?php echo e(old('keywords')); ?>" placeholder="Example: Laravel, Backend, etc" />
        <?php $__errorArgs = ['keywords'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="mb-6">
        <button type="submit" class="btn btn-primary">
            Create Project
        </button>
    </div>
</form>

<!-- Include Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Openhouse_Management_Project\resources\views/projectform.blade.php ENDPATH**/ ?>