document.addEventListener("DOMContentLoaded", function () {
    // Get all buttons with the class 'notify-btn'
    const notifyButtons = document.querySelectorAll('.notify-btn');
    
    // Get the notification div
    const notification = document.getElementById('notification');

    // Loop through all buttons and add event listeners
    notifyButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Show the notification
            notification.classList.add('show');

            // After 3 seconds, hide the notification again
            setTimeout(function () {
                notification.classList.remove('show');
            }, 3000); // Notification disappears after 3 seconds
        });
    });
});
