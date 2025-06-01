document.getElementById("uploadForm").addEventListener("submit", function(event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);
    fetch("upload.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(msg => {
        document.getElementById("responseMsg").innerText = msg;
        form.reset();
    })
    .catch(error => {
        document.getElementById("responseMsg").innerText = "Erreur lors de l'upload.";
    });
});
