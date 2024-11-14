console.log("ici!! ")

document.getElementById("elem").onclick = test(event);

function test(e) {
    this.style.display = "none";
}