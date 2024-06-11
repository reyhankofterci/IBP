$('.owl-carousel').owlCarousel({
    rtl: true,
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
});


document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var username = document.getElementById('registerUsername').value;
    var password = document.getElementById('registerPassword').value;

    // Burada kayıt işlemini gerçekleştirebilirsiniz
    // Örneğin: bir API'ye POST isteği göndererek kayıt işlemini gerçekleştirebilirsiniz
    console.log('Kayıt: Kullanıcı Adı:', username, 'Şifre:', password);
});

document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var username = document.getElementById('loginUsername').value;
    var password = document.getElementById('loginPassword').value;

    // Burada giriş işlemini gerçekleştirebilirsiniz
    // Örneğin: bir API'ye POST isteği göndererek giriş işlemini gerçekleştirebilirsiniz
    console.log('Giriş: Kullanıcı Adı:', username, 'Şifre:', password);
});
