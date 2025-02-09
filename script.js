document.querySelector("form").addEventListener("submit", function(event) {
    let input = document.querySelector("input[name='message']").value;
    if (input.trim() === "") {
        alert("Veuillez entrer un message !");
        event.preventDefault();
    }
});
