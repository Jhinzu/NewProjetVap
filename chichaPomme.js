document.getElementById("reference").addEventListener("input", function() {
    if (this.value.length > 10) {
      this.value = this.value.slice(0,10);
    }
})

teste = document.getElementById("reference")
console.log(teste);

