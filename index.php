<?php
$images = [
    'images/love1.jpg', // Ganti dengan nama gambar yang sesuai
    'images/love2.jpg',
    'images/love3.jpg',
];

?>
git branch -m main <BRANCH>
git fetch origin
git branch -u origin/<BRANCH> <BRANCH>
git remote set-head origin -a
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BY IBRA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #ffe6e6;
            animation: fadeIn 2s;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            animation: slideIn 1.5s ease-out;
        }
        h1 {
            color: #ff4d4d;
            animation: bounce 1.5s infinite;
        }
        .image-gallery {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .image-gallery img {
            width: 30%; /* Mengurangi ukuran gambar */
            max-width: 200px; /* Batas maksimal lebar gambar */
            height: auto;
            margin: 10px;
            border-radius: 10px;
            transition: transform 0.3s;
            animation: fadeIn 2s ease-in;
        }
        .image-gallery img:hover {
            transform: scale(1.1);
        }
        .footer {
            margin-top: 20px;
            font-size: 18px;
            color: #ff4d4d;
            font-style: italic;
            animation: fadeIn 2s ease-in-out;
        }
        .love-button {
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
        .love-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }
        .heart {
            position: absolute;
            color: red;
            font-size: 24px;
            animation: floatUp 2s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        @keyframes floatUp {
            0% { transform: translateY(0); opacity: 1; }
            100% { transform: translateY(-100px); opacity: 0; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>❤️ bocil alinn ❤️</h1>
        <p>"Cinta bukan hanya tentang kata-kata, tetapi juga tentang momen yang kita bagikan."</p>
        
        <div class="image-gallery">
            <?php foreach ($images as $image) : ?>
                <img src="<?= $image ?>" alt="Gambar Romantis">
            <?php endforeach; ?>
        </div>
        
        <button class="love-button" onclick="showLove()"> Cinta 💖</button>
        <div class="love-container" id="love-container"></div>
        
        <div class="footer">
            <p>💕 Kamu adalah alasan aku tersenyum setiap hari 💕</p>
        </div>
    </div>
    
    <script>
        function showLove() {
            const loveContainer = document.getElementById("love-container");
            const heart = document.createElement("div");
            heart.innerHTML = "❤️";
            heart.classList.add("heart");
            
            heart.style.left = Math.random() * 100 + "vw";
            heart.style.top = "90vh";
            heart.style.position = "absolute";
            
            loveContainer.appendChild(heart);
            
            setTimeout(() => {
                heart.remove();
            }, 2000);
        }
    </script>
</body>
</html>
