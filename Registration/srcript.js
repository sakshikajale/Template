function previewTemplate() {
    // Get selected template and user details
    const template = document.getElementById("templateSelect").value;
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;

    // Create an XMLHttpRequest object
    const xhr = new XMLHttpRequest();

    // Configure the request
    xhr.open("POST", "process.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Set up the callback function
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Handle the response from the server
                document.getElementById("previewArea").innerHTML = xhr.responseText;
            } else {
                // Handle errors
                console.error("Error:", xhr.status);
            }
        }
    };

    // Send the request with the data
    xhr.send("action=preview&template=" + encodeURIComponent(template) + "&name=" + encodeURIComponent(name) + "&email=" + encodeURIComponent(email));
}

function downloadTemplate() {
    // Get selected template and user details
    const template = document.getElementById("templateSelect").value;
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;

    // Create an anchor element to trigger the download
    const link = document.createElement("a");

    // Set the href attribute to the download URL
    link.href = "process.php?action=download&template=" + encodeURIComponent(template) + "&name=" + encodeURIComponent(name) + "&email=" + encodeURIComponent(email);

    // Set the download attribute to specify the filename
    link.download = "resume";

    // Append the link to the document body and trigger the click event
    document.body.appendChild(link);
    link.click();

    // Clean up
    document.body.removeChild(link);
}
