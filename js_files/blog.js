document.getElementById('commentButton').addEventListener('click', function() {
    document.getElementById('commentSection').classList.toggle('hidden');
});

document.getElementById('publishButton').addEventListener('click', function() {
    const commentInput = document.getElementById('commentInput');
    const comment = commentInput.value.trim();

    if (comment) {
        const commentsDisplay = document.getElementById('commentsDisplay');
        const newComment = document.createElement('div');
        newComment.classList.add('p-2', 'border', 'rounded', 'mb-2');
        newComment.textContent = comment;
        commentsDisplay.appendChild(newComment);
        commentInput.value = ''; // Limpiar el campo de entrada
    }
});
