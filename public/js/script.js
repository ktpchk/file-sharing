const fileLoader = document.getElementById("fileLoader");
const output = document.getElementById("output");
const form = document.getElementById("form");
fileLoader.addEventListener("change", loadFile);

function loadFile(e) {
    let file = e.target.files[0].name;
    output.innerHTML = '<i class="fa-solid fa-check"></i> ' + file;

    if (form.classList.contains("hidden")) {
        form.classList.remove("hidden");
    }
}
