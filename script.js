document.querySelector("form").addEventListener("submit", function(event) {
    let nama = document.getElementById("nama").value;
    if (nama) {
        alert("Selamat datang, " + nama + "! Anda akan diarahkan untuk melihat ramalan Anda.");
    }
});