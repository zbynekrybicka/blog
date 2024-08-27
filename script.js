document.querySelectorAll('.thumbnail').forEach(img => {
    img.addEventListener('click', () => {
        document.getElementById('fullscreen-image').src = img.src;
        document.getElementById('fullscreen-overlay').style.display = 'flex';
    });
});

document.getElementById('fullscreen-overlay').addEventListener('click', () => {
    document.getElementById('fullscreen-overlay').style.display = 'none';
});
