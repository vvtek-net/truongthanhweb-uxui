<?php

header('Content-Type: application/json; charset=UTF-8');

include '../../configs/db_connection.php';

// Lấy dữ liệu từ AJAX (JSON) và chuyển đổi thành mảng PHP
$data = json_decode(file_get_contents("php://input"), true);
// var_dump($data);
// exit();

// insert contact
$email = isset($data['email']) ? $data['email'] : '';
$fullname = isset($data['fullname']) ? $data['fullname'] : '';
$phone = isset($data['phone']) ? $data['phone'] : '';
$description = isset($data['description']) ? $data['description'] : '';
$service_package = isset($data['service_package']) ? $data['service_package'] : '';
$link_website_template = isset($data['link_website_template']) ? $data['link_website_template'] : '';

$sql = "INSERT INTO contact_customer (fullname, email, phone, description, link_website_template, service_package, created_at)
        VALUES (?, ?, ?, ?, ?, ?, NOW());";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $fullname, $email, $phone, $description, $link_website_template, $service_package);

if ($stmt->execute()) {
    $response = [
        'status' => 'success',
        'message' => "Thành Công",
        'msg' => 'success'
    ];
}

//   if ($stmt->execute()) {
//     // Tạo email template
//     $emailTemplate = new EmailTemplate();
//     $template = $emailTemplate->getTemplate('contact_customers');

//     $title = "New Contacts";
//     $email = "ngxtuananh99@gmail.com";
//     $fullname = "Nguyễn Tuấn Anh";
//     $template = str_replace("{user_name}", $fullname, $template);

//     sendEmail($email, $fullname, $template, $title);
//   }

else {
    $response = [
        'status' => 'error',
        'message' => "Lỗi",
        'msg' => 'error'
    ];
}

echo json_encode($response);
exit();