function validateForm() {
    let firstName = document.getElementById("firstName").value;
    let lastName = document.getElementById("lastName").value;
    let password = document.getElementById("password").value;
    let email = document.getElementById("email").value;
    let mobile = document.getElementById("mobile").value;
    let address = document.getElementById("address").value;
    
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    let mobilePattern = /^[0-9]{10}$/;
    let namePattern = /^[a-zA-Z]{6,}$/;
    
    if (!namePattern.test(firstName)) {
        alert("First Name should contain only alphabets and be at least 6 characters long.");
        return false;
    }
    if (lastName.trim() === "") {
        alert("Last Name should not be empty.");
        return false;
    }
    if (password.length < 6) {
        alert("Password should be at least 6 characters long.");
        return false;
    }
    if (!emailPattern.test(email)) {
        alert("Enter a valid Email ID (e.g., name@domain.com). ");
        return false;
    }
    if (!mobilePattern.test(mobile)) {
        alert("Mobile number should contain exactly 10 digits.");
        return false;
    }
    if (address.trim() === "") {
        alert("Address should not be empty.");
        return false;
    }
    alert("Form submitted successfully!");
    return true;
}
