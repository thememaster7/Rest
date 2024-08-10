<?php
// Recipient phone number in international format (e.g., 911234567890 for India)
$phoneNumber = '919612534158';

// URL encode the message to handle spaces and special characters
$message = urlencode('Hello India');

// Create the WhatsApp URL
$whatsappUrl = "https://api.whatsapp.com/send?phone={$phoneNumber}&text={$message}";

// Output the URL as a clickable link
echo "<a href='{$whatsappUrl}' target='_blank'>Send WhatsApp Message</a>";
?>
