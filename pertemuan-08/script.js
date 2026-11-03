// Script buat cek buku tamu ElsFashion

const sections = document.querySelectorAll('section');
const menuLinks = document.querySelectorAll('nav a');
const heroButton = document.querySelector('.hero-button');

function showSection(targetid) {
    sections .foreach(section => {
        section.hidden = section.id !== targetid;
    });
    menuLinks.forEach(link => {
        link.classList.toggle('active', link.getAttribute('href') === '#' + targetid);
    });

    history.pushState(null, null, '#' + targetid);
}

menuLinks.forEach(link => {
    link.addEventListener('click', event => {
        event.preventDefault();
        const targetid = link.getAttribute('href').substring(1);
        showSection(targetid);
    });
});


function cekForm(){

    var nama = document.getElementById("nama").value;
    var email = document.getElementById("email").value;
    var hp = document.getElementById("hp").value;
    var pesan = document.getElementById("pesan").value;

    // Cek kalau nama kosong
    if(nama.trim() == ""){
        alert("Nama belum diisi !!");
        return false;
    }

    // Cek kalau email kosong
    if(email.trim() == ""){
        alert("Email belum diisi !!");
        return false;
    }

    // Cek kalau nomor HP kosong
    if(hp.trim() == ""){
        alert("Nomor HP belum diisi !!");
        return false;
    }

    // Cek kalau pesan kosong
    if(pesan.trim() == ""){
        alert("Pesan belum diisi !!");
        return false;
    }

    // Jika semua sudah diisi
    alert("Makasih ya " + nama + " udah berkunjung ke ElsFashion. Semoga harimu menyenangkan !!");

    return true;
}