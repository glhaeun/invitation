<!DOCTYPE html>
<html>
<head>
<audio autoplay id="myautoload">
		<source src="Canon in D (Pachelbels Canon) - Cello .ogg" type="audio/ogg">
		<source src="Canon in D (Pachelbels Canon) - Cello .mp3" type="audio/mpeg">
</audio>
    <title>Cerita Pasangan</title>
    <style>
        body {
            margin: 0;
            overflow: hidden; /* Mencegah scrolling */
        }
        #gameCanvas {
            width: 100%;
            height: 100%;
            position: absolute;
        }
        /* CSS for the modal */
/* CSS for the modal */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.7);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    text-align: center; /* Center the content */
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

/* New CSS for modal buttons */
.modal-button {
    width: 45%; /* Set lebar masing-masing tombol menjadi setengah dari modal */
    margin: 10px; /* Berikan sedikit margin antara tombol */
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    color: #fff;
}

.modal-button:nth-child(1) {
    background-color: #4CAF50; /* Warna latar belakang tombol 1 */
}

.modal-button:nth-child(2) {
    background-color: #008CBA; /* Warna latar belakang tombol 2 */
}

    </style>
</head>
<body>
    <canvas id="gameCanvas"></canvas>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p style="font-size: 2em;">Congratulations!</p> <p>You've reached the end of our story!</p>
            <!-- You can customize the content of your modal here -->
            <a href = '../../index.php'><button class='modal-button'>Return to RSVP</button></a>
            <a href='../quiz'><button class='modal-button'>Start Quiz</button></a>
        </div>
    </div>
    <script src="game.js"></script> <!-- File JavaScript untuk logika permainan -->

</body>
</html>
