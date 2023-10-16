<?php
require 'vendor/autoload.php';

// Tạo một thể hiện của Smarty
$smarty = new Smarty();

// Đặt đường dẫn thư mục cho template và template đã biên dịch
$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');

// Truyền dữ liệu cho template
$smarty->assign('title', 'Hello, Smarty!');
$smarty->assign('content', 'This is a simple Smarty template example.');
$smarty->assign('percent', '75%');

// Hiển thị template
$smarty->display('example.tpl');
