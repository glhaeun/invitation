const canvas = document.getElementById('gameCanvas');
const ctx = canvas.getContext('2d');
canvas.width = 1920;
canvas.height = 1080;

// Muat gambar latar belakang
const backgrounds = [
    'background/background1.png', // Pastikan path ini benar
    'background/background8.png',
    'background/background7.png',
    'background/background6.png',
    'background/background5.png', // Pastikan path ini benar
    'background/background4.png',
    'background/background3.png',
    'background/background2.png'
];
const bgImages = backgrounds.map(src => {
    const img = new Image();
    img.src = src;
    return img;
});

// Muat gambar item
const items = [
    'item1.png', // Pastikan path ini benar
    'item1.png',
    'item1.png',
];
const itemImages = items.map(src => {
    const img = new Image();
    img.src = src;
    return img;
});

// Muat gambar karakter berjalan
const characterFrames = [
    '1-removebg-preview.png', // Pastikan path ini benar
    '2-removebg-preview.png',
    '3-removebg-preview.png',
    '4-removebg-preview.png',
    '5-removebg-preview.png'
];
const characterImages = characterFrames.map(src => {
    const img = new Image();
    img.src = src;
    return img;
});

const loveImage = new Image();
loveImage.src = 'love.png'; // Ganti dengan path gambar love yang sesuai

const loves = [
    { x: 14000, y: 0, size: 30, fallSpeed: Math.random() * 5 + 2 },
    { x: 14250, y: 0, size: 40, fallSpeed: Math.random() * 5 + 2 },
    { x: 14300, y: 0, size: 30, fallSpeed: Math.random() * 5 + 2 },
    { x: 14950, y: 0, size: 50, fallSpeed: Math.random() * 5 + 2 },
    { x: 14600, y: 0, size: 30, fallSpeed: Math.random() * 5 + 2 },
    
    { x: 14800, y: 0, size: 30, fallSpeed: Math.random() * 5 + 2 },
    { x: 14950, y: 0, size: 60, fallSpeed: Math.random() * 5 + 2 },
    { x: 15000, y: 0, size: 30, fallSpeed: Math.random() * 5 + 2 },
    { x: 15300, y: 0, size: 20, fallSpeed: Math.random() * 5 + 2 },
    { x: 15450, y: 0, size: 30, fallSpeed: Math.random() * 5 + 2 },
    // ... Add more love data as needed
];

const stars = [
    { x: 8400, y: 100, size: 20, opacity: 0, fadeInSpeed: 1/60}, // 60 frame untuk 1 detik
    { x: 8300, y: 200, size: 15, opacity: 0, fadeInSpeed: 1/40 }, // 60 frame untuk 1 detik
    { x: 8400, y: 100, size: 20, opacity: 0, fadeInSpeed: 1/40 }, // 60 frame untuk 1 detik
    { x: 8600, y: 200, size: 15, opacity: 0, fadeInSpeed: 1/60}, // 60 frame untuk 1 detik
    { x: 8700, y: 300, size: 20, opacity: 0, fadeInSpeed: 1/40 }, // 60 frame untuk 1 detik
    { x: 8800, y: 400, size: 15, opacity: 0, fadeInSpeed: 1/40 }, // 60 frame untuk 1 detik
    { x: 8900, y: 100, size: 20, opacity: 0, fadeInSpeed: 1/60}, // 60 frame untuk 1 detik
    { x: 8800, y: 200, size: 35, opacity: 0, fadeInSpeed: 1/60}, // 60 frame untuk 1 detik
    { x: 9000, y: 300, size: 20, opacity: 0, fadeInSpeed: 1/60}, // 60 frame untuk 1 detik
    { x: 9100, y: 400, size: 15, opacity: 0, fadeInSpeed: 1/40 }, // 60 frame untuk 1 detik
    { x: 9100, y: 100, size: 22, opacity: 0, fadeInSpeed: 1/60}, // 60 frame untuk 1 detik
    { x: 9200, y: 200, size: 25, opacity: 0, fadeInSpeed: 1/40 }, // 60 frame untuk 1 detik
    // ... Tambahkan data bintang lainnya sesuai kebutuhan
];

const flowers = [
    { x: 13200, y: 0, size: 50, fallSpeed: Math.random() * 5 + 2 },
    { x: 12600, y: 0, size: 40, fallSpeed: Math.random() * 5 + 2 },
    { x: 13000, y: 0, size: 50, fallSpeed: Math.random() * 5 + 2 },
    { x: 13100, y: 0, size: 60, fallSpeed: Math.random() * 5 + 2 },
    { x: 12800, y: 0, size: 20, fallSpeed: Math.random() * 5 + 2 },
    { x: 12900, y: 0, size: 50, fallSpeed: Math.random() * 5 + 2 },
    { x: 12500, y: 0, size: 30, fallSpeed: Math.random() * 5 + 2 },
    { x: 12800, y: 0, size: 50, fallSpeed: Math.random() * 5 + 2 },
    // ... Tambahkan data bunga lainnya sesuai kebutuhan
];

// Fungsi untuk mengambil nama file gambar bunga secara acak
function getRandomFlowerImage() {
    const randomIndex = Math.floor(Math.random() * 4) + 1; // Angka acak antara 1 dan 4
    return `flower/${randomIndex}.png`;
}

// Inisialisasi path gambar kelopak bunga secara acak pada setiap objek bunga
flowers.forEach(flower => {
    flower.imagePath = getRandomFlowerImage();
    flower.image = new Image();
    flower.image.src = flower.imagePath;
});


const starImage = new Image();
starImage.src = 'STAR.png';

let currentBg = 0;
let bgX = 0;
let moveBackground = false;
let itemY = canvas.height;
let showItem = false;
let currentItemIndex = 0;
let itemX = 0;
let characterFrameDelay = 0; 
let characterFrameIndex = 0;
let characterX = 100; // Posisi awal karakter pada sumbu X
let characterY = canvas.height - 465; // Posisi awal karakter pada sumbu Y, sesuaikan dengan tinggi karakter

// Fungsi untuk menggambar item dengan animasi
function drawAnimatedItem() {
    if (showItem) {
        itemY -= 40; // Kecepatan animasi item
        if (itemY <= (canvas.height - itemImages[currentItemIndex].height) / 2) {
            itemY = (canvas.height - itemImages[currentItemIndex].height) / 2;
        }
        ctx.drawImage(itemImages[currentItemIndex], itemX + bgX, itemY);
    }
}
// Tambahkan variabel fadeCount dan flag untuk menunjukkan apakah bintang telah mulai berkedip
let fadeCount = 0;
let starsStartedFlickering = false;

// ...
// Fungsi untuk menggambar dan mengatur animasi bunga berjatuhan
function drawFallingFlowers() {
    flowers.forEach(flower => {
        flower.y += flower.fallSpeed;

        // Jika bunga mencapai bagian bawah layar, reset posisinya ke atas
        if (flower.y > canvas.height) {
            flower.y = 0;
            flower.fallSpeed = Math.random() * 5 + 2; // Reset kecepatan jatuh secara acak
            flower.x = 12500 + Math.random() * 900; // Reset posisi x secara acak dalam rentang 200 - 500

            // Update path gambar kelopak bunga secara acak saat reset
            flower.imagePath = getRandomFlowerImage();
            flower.image.src = flower.imagePath;

            console.log("Flower at (" + flower.x + ", " + flower.y + ") is falling");
        }

        // Gambar kelopak bunga
        ctx.drawImage(flower.image, flower.x + bgX, flower.y, flower.size, flower.size);
    });
}

function drawFallingLoves() {
    loves.forEach(love => {
        love.y += love.fallSpeed;

        // Jika love mencapai bagian bawah layar, reset posisinya ke atas
        if (love.y > canvas.height) {
            love.y = 0;
            love.fallSpeed = Math.random() * 5 + 2; // Reset kecepatan jatuh secara acak
            love.x = 14000 + Math.random() * 1200; // Reset posisi x secara acak dalam rentang 200 - 500
            console.log("Love at (" + love.x + ", " + love.y + ") is falling");
        }

        // Gambar love
        ctx.drawImage(loveImage, love.x + bgX, love.y, love.size, love.size);
    });
}

function drawStars() {
    // Check apakah user telah mencapai halaman keempat sebelum bintang mulai berkedip
    if (bgX <= -1920 * 3 && !starsStartedFlickering) {
        starsStartedFlickering = true;
    }

    if (starsStartedFlickering) {
        stars.forEach(star => {
            // Animasi fade in dan fade out
            if (star.opacity === 0 || star.opacity === 1) {
                fadeCount++; // Tambahkan satu kali animasi fade in-fade out saat mencapai 0 atau 1
            }

            star.opacity += star.fadeInSpeed;

            if (star.opacity > 1 || star.opacity < 0) {
                star.opacity = star.opacity > 1 ? 1 : 0; // Pastikan opacity tetap di rentang 0-1
                star.fadeInSpeed *= -1; // Ubah arah animasi saat mencapai 1 atau 0
                console.log(`Star at (${star.x}, ${star.y}) is fading ${star.fadeInSpeed > 0 ? 'in' : 'out'}`);
            }

            // Gambar bintang dengan efek fade in dan fade out
            ctx.globalAlpha = star.opacity;
            ctx.drawImage(starImage, star.x + bgX, star.y, star.size, star.size);
            ctx.globalAlpha = 1; // Reset global alpha setelah menggambar bintang
        });

        // Reset fadeCount dan starsStartedFlickering jika mencapai 5
        if (fadeCount === 5) {
            fadeCount = 0;
            starsStartedFlickering = false; // Reset flag untuk memulai kembali bintang berkedip
        }
    }
}



// ...


// Fungsi untuk menggambar karakter berjalan
function drawWalkingCharacter() {
     if (characterFrameDelay++ >= 20) { // Tambahkan delay sesuai kebutuhan
        characterFrameIndex = (characterFrameIndex + 1) % characterImages.length;
        characterFrameDelay = 0;
    }
    ctx.drawImage(characterImages[characterFrameIndex], characterX, characterY);
}

// Event listener untuk tombol spasi dan scroll
document.addEventListener('keydown', function(event) {
    if (event.code === 'Space') {
        moveBackground = true;
    }
});
document.addEventListener('wheel', function(event) {
    if (event.deltaY !== 0) {
        moveBackground = true;
    }
});

let touchStartX = 0;
let touchStartY = 0;

canvas.addEventListener('touchstart', function(event) {
    touchStartX = event.touches[0].clientX;
    touchStartY = event.touches[0].clientY;
});

canvas.addEventListener('touchmove', function(event) {
    const touchX = event.touches[0].clientX;
    const touchY = event.touches[0].clientY;

    const deltaX = touchX - touchStartX;
    const deltaY = touchY - touchStartY;

    if (Math.abs(deltaX) > Math.abs(deltaY)) {
        // Horizontal swipe detected
        moveBackground = true;
    }

    touchStartX = touchX;
    touchStartY = touchY;
});

function updateGame() {
    if (moveBackground) {
        bgX -= 30; // Kecepatan gulir latar belakang

        // Cek apakah sudah mencapai halaman terakhir
        if (bgX <= -1920 * (backgrounds.length - 1)) {
            bgX = -1920 * (backgrounds.length - 1); // Tetapkan ke halaman terakhir
            moveBackground = false; // Berhenti menggulir

            modalTimeout = setTimeout(openModal, 3000);
        }

        // Menampilkan item pada kelipatan 1000 dari bgX
        if (-bgX % 1000 === 0 && !showItem) {
            currentItemIndex = Math.floor(Math.random() * itemImages.length);
            itemY = canvas.height; // Reset posisi awal item
            showItem = true; // Mulai menampilkan item
            itemX = 960 - (itemImages[currentItemIndex].width / 2); // Mengatur posisi x item
        }

        if ((itemX + bgX < -itemImages[currentItemIndex].width) || (itemX + bgX > canvas.width)) {
            showItem = false; // Hentikan menampilkan item jika sudah melewati batas layar
        }

        moveBackground = false; // Reset pemicu gerakan
    }

    ctx.clearRect(0, 0, canvas.width, canvas.height); // Bersihkan canvas

    // Gambar latar belakang dari array buffer ke canvas utama
    for (let i = 0; i < bgImages.length; i++) {
        let offsetX = bgX - i * 1920;
        if (offsetX < -1920) offsetX += 1920 * backgrounds.length;
        ctx.drawImage(bgImages[i], offsetX, 0);
    }

    
    drawStars(); // Gambar bintang
    //if (showItem) drawAnimatedItem(); // Gambar item jika harus ditampilkan
    drawWalkingCharacter(); // Gambar karakter berjalan
    drawFallingFlowers(); // Draw falling flowers
    drawFallingLoves(); // Gambar love berjatuhan

    

    requestAnimationFrame(updateGame);

 
}



updateGame(); // Mulai loop game
   
// Fungsi untuk membuka modal
function openModal() {
    var modal = document.getElementById('myModal');
    modal.style.display = 'block';
}

// Fungsi untuk menutup modal
function closeModal() {
    var modal = document.getElementById('myModal');
    modal.style.display = 'none';
}