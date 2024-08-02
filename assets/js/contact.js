// Initialize EmailJS
(function() {
    emailjs.init("KC202gAKFgLdT9Pl9"); // Replace with your EmailJS user ID
})();

document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();

    // Get form values
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    // Send email using EmailJS
    emailjs.send("service_skh4btf", "template_irma2f5", {
        from_name: name,
        from_email: email,
        maths_level: document.querySelector('input[name="mathsLevel"]:checked').value,
        exam_board: document.getElementById('examBoard').value,
        message: message
    })
    .then(function(response) {
        console.log("SUCCESS", response);
        document.getElementById('success-message').style.display = 'block';
        document.getElementById('error-message').style.display = 'none';
        document.getElementById('contact-form').reset();
    }, function(error) {
        console.log("FAILED", error);
        document.getElementById('error-message').style.display = 'block';
        document.getElementById('success-message').style.display = 'none';
    });
});