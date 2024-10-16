document.getElementById('loginForm').addEventListener('submit', function(event){
    event.preventDefault();

    const correctUsername= "Damar";
    const correctPassword= "Damar123";

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === correctUsername && password === correctPassword){
        alert('Mantap');
        window.location.href = 'index.html'
    }else{
        alert('Username atau Password salah');
    }
});