<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Default Title'; ?></title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #5E0071;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .logo {
            font-size: 1.5em;
            font-weight: bold;
        }
        .header .datetime {
            font-size: 1em;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="img/logo.jpg" alt="Logo" height="40"> <!-- Adjust height as needed -->
        </div>
        <div class="datetime">
            <?php include('time.php'); ?>
        </div>
    </header>
    <main>