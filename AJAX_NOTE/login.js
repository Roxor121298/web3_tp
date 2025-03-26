document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch('login.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        const msg = document.getElementById('message');
        if (data.success) {
            msg.textContent = 'Connexion réussie 🎉';
            msg.style.color = 'green';
        } else {
            msg.textContent = 'Échec de connexion 😞';
            msg.style.color = 'red';
        }
    })
    .catch(error => {
        console.error('Erreur AJAX :', error);
    });
});
