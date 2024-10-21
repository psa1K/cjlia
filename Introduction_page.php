<!-- index.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jialiang Cai's Blog</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <base target="_blank" />
</head>

<body>
    <div class="container">
        <?php include('header.php'); ?>
        <div class="row content">
            <div class="info">
                <img src="./head.jpg" alt="my Photo" class="profile-image" />
                <div class="name">Jialiang Cai</div>
                <div class="social-icons">
                    <a href="https://github.com/psa1K/" class="icon-link">
                        <img src="./github.png" alt="GitHub" class="icon" />
                    </a>
                </div>
                <div class="column catalogue sidebar">
                    <ul>
                        <li data-target="Introduction">Introduction</li>
                        <li data-target="Notebook">Notebook</li>
                    </ul>
                </div>
            </div>
            <div class="right-content" id="content-area">
                <?php include'introduction.php'; ?>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>
    

    
    <script src="script.js"></script>
</body>

</html>