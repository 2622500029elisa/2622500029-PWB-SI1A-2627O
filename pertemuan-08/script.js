// Script buat cek buku tamu ElsFashion

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