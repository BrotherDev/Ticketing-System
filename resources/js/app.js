import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    if (!window.Laravel || !window.Laravel.auth) {
        console.error("User authentication information not found.");
        return;
    }

    const userId = window.Laravel.auth.id;
    const notificationContainer = document.createElement("div");
    notificationContainer.id = "notification-container";
    notificationContainer.style.position = "fixed";
    notificationContainer.style.top = "60px";
    notificationContainer.style.right = "20px";
    notificationContainer.style.width = "350px";
    notificationContainer.style.zIndex = "1000";
    document.body.appendChild(notificationContainer);

    // Listen for ticket notifications
    // Listen for ticket notifications
    window.Echo.private(`ticket-create`)
        .listen("TicketCreate", (event) => {
            // Play the notification sound
            let audio = new Audio('/storage/sounds/i_phone_notification.mp3');
            audio.play();

            handleNotifications(event.notifications);
        });

    window.Echo.private(`ticket-assigned`)
        .listen("TicketAssigned", (event) => {
            // Play the notification sound
            let audio = new Audio('/storage/sounds/i_phone_notification.mp3');
            audio.play();
            
            handleNotifications(event.notifications);
        });

    window.Echo.private(`ticket-replied`)
        .listen("TicketReplied", (event) => {
            // Play the notification sound
            let audio = new Audio('/storage/sounds/i_phone_notification.mp3');
            audio.play();
            
            handleNotifications(event.notifications);
        });

    window.Echo.private(`ticket-status-updated`)
        .listen("TicketStatusUpdated", (event) => {
            // Play the notification sound
            let audio = new Audio('/storage/sounds/i_phone_notification.mp3');
            audio.play();
            
            handleNotifications(event.notifications);
        });

    function handleNotifications(notifications) {
        const userNotifications = notifications.filter(
            (notification) => parseInt(notification.user_id) === parseInt(userId)
        );

        if (userNotifications.length > 0) {
            userNotifications.forEach(notification => {
                showPopup(notification.message, notification.ticket_id);
                updateNotificationDropdown(notification);
                updateNotificationCount(); // Update the notification count in the badge
            });
        }
    }

    function showPopup(message, ticketId) {
        const popup = document.createElement("div");
        popup.className = "popup-notification";
        popup.style.position = "relative";
        popup.style.background = "DarkSlateGray";
        popup.style.border = "1px solid #ccc";
        popup.style.boxShadow = "0 4px 6px rgba(0, 0, 0, 0.1)";
        popup.style.borderRadius = "10px";
        popup.style.padding = "16px";
        popup.style.marginBottom = "10px";
        popup.style.color = "#ffffff";
        popup.style.display = "block";
        popup.dataset.ticketId = ticketId;

        const popupMessage = document.createElement("p");
        popupMessage.innerText = `${message}`;
        popup.appendChild(popupMessage);

        const buttonContainer = document.createElement("div");
        buttonContainer.style.display = "flex";
        buttonContainer.style.justifyContent = "space-between";
        buttonContainer.style.marginTop = "10px";

        const closeButton = document.createElement("button");
        closeButton.innerHTML = "&times;";
        closeButton.style.background = "#f56565";
        closeButton.style.color = "white";
        closeButton.style.padding = "4px 12px";
        closeButton.style.borderRadius = "4px";
        closeButton.style.border = "none";
        closeButton.style.cursor = "pointer";
        closeButton.onclick = function () {
            popup.remove();
        };

        const viewTicketButton = document.createElement("button");
        viewTicketButton.innerHTML = '<i class="fas fa-eye"></i>';
        viewTicketButton.style.background = "#4CAF50";
        viewTicketButton.style.color = "white";
        viewTicketButton.style.padding = "4px 12px";
        viewTicketButton.style.borderRadius = "4px";
        viewTicketButton.style.border = "none";
        viewTicketButton.style.cursor = "pointer";
        viewTicketButton.onclick = function () {
            const notificationId = ticketId;
            const csrfToken = window.Laravel.csrfToken;

            const url = `/user/ticket/notification/read/js/${notificationId}`;
            fetch(url, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: JSON.stringify({ is_read: 1 }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = `/user/ticket/view/${notificationId}`;
                } else {
                    console.error("Failed to update notification:", data.message);
                }
            })
            .catch(error => {
                console.error("Fetch error:", error);
            });
        };

        buttonContainer.appendChild(closeButton);
        buttonContainer.appendChild(viewTicketButton);
        popup.appendChild(buttonContainer);
        notificationContainer.appendChild(popup);
    }

    function updateNotificationDropdown(notification) {
        const notificationDropdown = document.querySelector(".dropdown-menu");

        if (!notificationDropdown) {
            console.error("Notification dropdown not found!");
            return;
        }

        const notificationItem = document.createElement("a");
        notificationItem.href = "#"; // Prevent default behavior
        notificationItem.className = "dropdown-item";
        notificationItem.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent direct navigation

            const notificationId = notification.ticket_id;
            const csrfToken = window.Laravel.csrfToken;

            const url = `/user/ticket/notification/read/js/${notificationId}`;

            fetch(url, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: JSON.stringify({ is_read: 1 }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = `/user/ticket/view/${notificationId}`;
                } else {
                    console.error("Failed to update notification:", data.message);
                }
            })
            .catch(error => {
                console.error("Fetch error:", error);
            });
        });

        notificationItem.innerHTML = `
            <div class="media">
                <img src="/adminlte/img/boxed-bg.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                    <h3 class="dropdown-item-title">
                        ${notification.message.split(":")[0]}
                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">${notification.message.split(":")[1]}</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> Just now</p>
                </div>
            </div>
            <div class="dropdown-divider"></div>
        `;

        // Insert at the top of the list
        notificationDropdown.prepend(notificationItem);
    }

    function updateNotificationCount() {
        const notificationCountElement = document.querySelector(".navbar-badge");

        if (!notificationCountElement) {
            console.error("Notification count element not found!");
            return;
        }

        // Get the current count of notifications
        let currentCount = parseInt(notificationCountElement.innerText) || 0;
        currentCount += 1;

        // Update the count
        notificationCountElement.innerText = currentCount;
        notificationCountElement.style.display = "block"; // Ensure it's visible
    }
});