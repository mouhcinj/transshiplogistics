<?php
// process-contact.php
<?php
header('Content-Type: application/json');

// Enable CORS
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Get form data
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$company = trim($_POST['company'] ?? '');
$service = trim($_POST['service'] ?? '');
$message = trim($_POST['message'] ?? '');
$language = trim($_POST['language'] ?? 'en');

// Validation
$errors = [];

if (empty($name)) {
    $errors[] = $language === 'fr' ? 'Le nom est requis.' : 'Name is required.';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = $language === 'fr' ? 'Une adresse courriel valide est requise.' : 'A valid email address is required.';
}

if (empty($service)) {
    $errors[] = $language === 'fr' ? 'Veuillez sélectionner un type de service.' : 'Please select a service type.';
}

if (empty($message)) {
    $errors[] = $language === 'fr' ? 'Le message est requis.' : 'Message is required.';
}

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// Prepare email content
$service_names = [
    'vehicle' => $language === 'fr' ? 'Transport de Véhicules' : 'Vehicle Transport',
    'maritime' => $language === 'fr' ? 'Expédition Maritime' : 'Maritime Shipping',
    'towing' => $language === 'fr' ? 'Services de Remorquage' : 'Towing Services'
];

$service_name = $service_names[$service] ?? $service;

// Email to company
$to_company = 'info@transshiplogistics.com';
$subject_company = $language === 'fr' ? 'Nouveau Contact - TransShipLogistics' : 'New Contact - TransShipLogistics';

$message_company = "
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #2563eb, #1d4ed8); color: white; padding: 30px; text-align: center; border-radius: 10px 10px 0 0; }
        .content { background: #f8f9fa; padding: 30px; border-radius: 0 0 10px 10px; }
        .info-row { margin: 15px 0; padding: 10px; background: white; border-radius: 5px; }
        .label { font-weight: bold; color: #2563eb; }
        .footer { text-align: center; margin-top: 20px; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1>🚚 " . ($language === 'fr' ? 'Nouveau Contact Reçu' : 'New Contact Received') . "</h1>
            <p>TransShipLogistics</p>
        </div>
        <div class='content'>
            <h2>" . ($language === 'fr' ? 'Détails du Contact' : 'Contact Details') . "</h2>
            
            <div class='info-row'>
                <span class='label'>" . ($language === 'fr' ? 'Nom:' : 'Name:') . "</span> $name
            </div>
            
            <div class='info-row'>
                <span class='label'>" . ($language === 'fr' ? 'Courriel:' : 'Email:') . "</span> $email
            </div>
            
            " . ($phone ? "<div class='info-row'><span class='label'>" . ($language === 'fr' ? 'Téléphone:' : 'Phone:') . "</span> $phone</div>" : "") . "
            
            " . ($company ? "<div class='info-row'><span class='label'>" . ($language === 'fr' ? 'Entreprise:' : 'Company:') . "</span> $company</div>" : "") . "
            
            <div class='info-row'>
                <span class='label'>" . ($language === 'fr' ? 'Type de Service:' : 'Service Type:') . "</span> $service_name
            </div>
            
            <div class='info-row'>
                <span class='label'>" . ($language === 'fr' ? 'Message:' : 'Message:') . "</span><br>
                $message
            </div>
            
            <div class='info-row'>
                <span class='label'>" . ($language === 'fr' ? 'Reçu le:' : 'Received:') . "</span> " . date('Y-m-d H:i:s') . "
            </div>
        </div>
        <div class='footer'>
            <p>TransShipLogistics - " . ($language === 'fr' ? 'Solutions Logistiques d\'Excellence' : 'Excellence in Logistics Solutions') . "</p>
            <p>1-800-SHIP-LOG | info@transshiplogistics.com</p>
        </div>
    </div>
</body>
</html>
";

$headers_company = "MIME-Version: 1.0" . "\r\n";
$headers_company .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers_company .= "From: website@transshiplogistics.com" . "\r\n";

// Email to client (confirmation)
$subject_client = $language === 'fr' ? 'Merci pour votre message - TransShipLogistics' : 'Thank you for your message - TransShipLogistics';

$message_client = "
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #2563eb, #1d4ed8); color: white; padding: 30px; text-align: center; border-radius: 10px 10px 0 0; }
        .content { background: #f8f9fa; padding: 30px; border-radius: 0 0 10px 10px; }
        .footer { text-align: center; margin-top: 20px; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1>" . ($language === 'fr' ? 'Merci!' : 'Thank You!') . "</h1>
            <p>TransShipLogistics</p>
        </div>
        <div class='content'>
            <h2>" . ($language === 'fr' ? 'Bonjour' : 'Hello') . " $name,</h2>
            
            <p>" . ($language === 'fr' ? 
                'Merci pour votre intérêt envers TransShipLogistics. Nous avons bien reçu votre message concernant nos services de ' . strtolower($service_name) . '.' :
                'Thank you for your interest in TransShipLogistics. We have received your message regarding our ' . strtolower($service_name) . ' services.'
            ) . "</p>
            
            <p>" . ($language === 'fr' ? 
                'Notre équipe d\'experts vous contactera dans les prochaines 24 heures pour discuter de vos besoins logistiques.' :
                'Our team of experts will contact you within the next 24 hours to discuss your logistics needs.'
            ) . "</p>
            
            <p><strong>" . ($language === 'fr' ? 'En attendant:' : 'In the meantime:') . "</strong></p>
            <ul>
                <li>" . ($language === 'fr' ? 'Visitez notre site web pour plus d\'informations' : 'Visit our website for more information') . "</li>
                <li>" . ($language === 'fr' ? 'Appelez-nous au 1-800-SHIP-LOG pour un service immédiat' : 'Call us at 1-800-SHIP-LOG for immediate service') . "</li>
                <li>" . ($language === 'fr' ? 'Pour les urgences: 1-800-EMERGENCY' : 'For emergencies: 1-800-EMERGENCY') . "</li>
            </ul>
            
            <p>" . ($language === 'fr' ? 
                'Nous avons hâte de vous servir!' :
                'We look forward to serving you!'
            ) . "</p>
        </div>
        <div class='footer'>
            <p>TransShipLogistics - " . ($language === 'fr' ? 'Solutions Logistiques d\'Excellence' : 'Excellence in Logistics Solutions') . "</p>
            <p>1-800-SHIP-LOG | info@transshiplogistics.com</p>
        </div>
    </div>
</body>
</html>
";

$headers_client = "MIME-Version: 1.0" . "\r\n";
$headers_client .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers_client .= "From: TransShipLogistics <info@transshiplogistics.com>" . "\r\n";

// Send emails
$company_sent = mail($to_company, $subject_company, $message_company, $headers_company);
$client_sent = mail($email, $subject_client, $message_client, $headers_client);

// Log the contact (optional - create contacts.log file)
$log_entry = date('Y-m-d H:i:s') . " | $name | $email | $service_name | " . substr($message, 0, 50) . "...\n";
file_put_contents('contacts.log', $log_entry, FILE_APPEND | LOCK_EX);

if ($company_sent) {
    echo json_encode([
        'success' => true, 
        'message' => $language === 'fr' ? 
            'Merci! Votre message a été envoyé avec succès. Nous vous contacterons bientôt.' :
            'Thank you! Your message has been sent successfully. We will contact you soon.'
    ]);
} else {
    echo json_encode([
        'success' => false, 
        'message' => $language === 'fr' ? 
            'Erreur lors de l\'envoi du message. Veuillez réessayer ou nous appeler directement.' :
            'Error sending message. Please try again or call us directly.'
    ]);
}
?>