// Form ko select karna
const loginForm = document.getElementById('loginForm');

loginForm.addEventListener('submit', function(event) {
    // Page refresh hone se rokne ke liye
    event.preventDefault();

    // Input values ko nikalna
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Ek simple validation check
    if (username === "" || password === "") {
        alert("Please fill in all fields!");
    } else {
        console.log("Login attempted with:", username);
        alert("Login successful for: " + username);
        // Yaha aap aage ka logic likh sakte hain
    }


});