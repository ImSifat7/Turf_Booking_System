window.onload = function () {
    const form = document.querySelector("form");
    const resetBtn = document.querySelector('input[type="reset"]');

    form.onsubmit = function (e) {
        
        const fname = document.getElementById("fname").value.trim();
        const lname = document.getElementById("lname").value.trim();
        const phone = document.getElementById("PhoneNo").value.trim();
        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value.trim();
        const gender1 = document.getElementById("Gender1").checked;
        const gender2 = document.getElementById("Gender2").checked;
        const gender3 = document.getElementById("Gender3").checked;

       
        if (fname === "" || lname === "") {
            alert("First and Last Name are required.");
            e.preventDefault();
            return false;
        }

        
        if (!/^\d{11}$/.test(phone)) {
            alert("Phone number must be exactly 11 digits.");
            e.preventDefault();
            return false;
        }

        
    if (!email.includes("@") || email.indexOf(".") === -1) 
    {
    alert("Please enter a valid email address.");
    e.preventDefault();
    return false;
    }


        
        if (password.length < 8) {
            alert("Password must be at least 8 characters long.");
            e.preventDefault();
            return false;
        }

        
        if (!gender1 && !gender2 && !gender3) {
            alert("Please select your gender.");
            e.preventDefault();
            return false;
        }

        
        alert("Form submitted successfully!");
    };


    resetBtn.onclick = function () {
        return confirm("Are you sure you want to reset the form?");
    };
   
};

