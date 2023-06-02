<br><br><br>
<footer id="footer">
    <div class="container-fluid text-center" id="lepied">
        <br /><br />
        Lycée Paul-Louis Courier - 2 Pl. Grégoire de Tours, 37000 Tours
        <br /><br />
        Copyright © 2023 Manon LAURENT
        <br /><br /><br />
    </div>
</footer>


<script>
// Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>

<script>
function showhidesisr() {
    var div = document.getElementById("textesisr");
    div.classList.toggle('hidden');
}

function showhideslam() {
    var div = document.getElementById("texteslam");
    div.classList.toggle('hidden');
}
</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("btnExemple");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

