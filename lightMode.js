
lightMode = sessionStorage.getItem('lightMode') === 'true';
    // Apply the appropriate css file based on the stored light mode value
    if (lightMode) {
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="light.css">';
    } else {
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="dark.css">';
    }

function light_mode_toggle() {
    if (lightMode) {
        document.body.style.backgroundColor = "Black";
        document.body.style.color = "White";
        document.querySelectorAll("button").forEach(button => {
            button.style.color = "lightcoral";
        });
    } else {
        document.body.style.backgroundColor = "White";
        document.body.style.color = "Black";
        document.querySelectorAll("button").forEach(button => {
            button.style.color = "teal";
        });
    }
    lightMode = !lightMode;
    sessionStorage.setItem('lightMode', lightMode);
}