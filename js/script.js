document.addEventListener('DOMContentLoaded', function () {
    const movieThumbnails = document.querySelectorAll('.movie-thumbnail');
    const trailerModal = new bootstrap.Modal(document.getElementById('trailerModal'));
    const trailerVideo = document.getElementById('trailerVideo');
    const trailerSource = document.getElementById('trailerSource');

    movieThumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function () {
            const trailerPath = this.getAttribute('data-trailer');
            trailerSource.src = trailerPath;
            trailerVideo.load(); 
            trailerVideo.style.display = 'block'; 
            trailerModal.show();
        });
    });

    document.getElementById('trailerModal').addEventListener('hidden.bs.modal', function () {
        trailerVideo.pause(); 
        trailerVideo.currentTime = 0;
    });
});
