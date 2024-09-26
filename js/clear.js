
function clearFields() {

    const authorInput = document.getElementById('author');
    const titleInput = document.getElementById('title');
    const blogInput = document.getElementById('blog');

    authorInput.value = '';
    titleInput.value = '';
    blogInput.value = '';
}

document.getElementById('clearBtn').addEventListener('click', clearFields);
