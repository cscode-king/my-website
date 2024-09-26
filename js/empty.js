document.getElementById("post").addEventListener("click", function(event) {

    const author = document.getElementById("author").value;
    const title = document.getElementById("title").value;
    const blog = document.getElementById("blog").value;

    if (title.trim() === "" || blog.trim() === "") {
        event.preventDefault();
        if (author.trim() === "") {
            document.getElementById("author").classList.add("error");
        }
        
        if (title.trim() === "") {
            document.getElementById("title").classList.add("error");
        }
        if (blog.trim() === "") {
            document.getElementById("blog").classList.add("error");
        }
        alert("Please fill in all fields before posting.");
    }
});
