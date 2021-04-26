<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-15 14:22:20 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\uk_feedback\application\controllers\Front.php 96
ERROR - 2021-04-15 14:22:41 --> Severity: Notice --> Undefined property: stdClass::$price C:\xampp\htdocs\uk_feedback\application\controllers\Front.php 96
ERROR - 2021-04-15 14:22:41 --> Severity: Notice --> Undefined property: Front::$common_model C:\xampp\htdocs\uk_feedback\application\controllers\Front.php 98
ERROR - 2021-04-15 14:22:41 --> Severity: error --> Exception: Call to a member function print_r2() on null C:\xampp\htdocs\uk_feedback\application\controllers\Front.php 98
ERROR - 2021-04-15 14:23:03 --> Severity: Notice --> Undefined property: Front::$common_model C:\xampp\htdocs\uk_feedback\application\controllers\Front.php 98
ERROR - 2021-04-15 14:23:03 --> Severity: error --> Exception: Call to a member function print_r2() on null C:\xampp\htdocs\uk_feedback\application\controllers\Front.php 98
ERROR - 2021-04-15 14:28:44 --> Severity: Notice --> Undefined variable: price C:\xampp\htdocs\uk_feedback\application\controllers\Front.php 94
ERROR - 2021-04-15 14:41:34 --> Severity: Notice --> Undefined property: stdClass::$price C:\xampp\htdocs\uk_feedback\application\controllers\Front.php 95
ERROR - 2021-04-15 14:41:41 --> Severity: Notice --> Undefined property: stdClass::$price C:\xampp\htdocs\uk_feedback\application\controllers\Front.php 95
ERROR - 2021-04-15 14:44:22 --> Query error: Unknown column 'user_id' in 'where clause' - Invalid query: UPDATE `freelancer_payments` SET `wallet` = 0.5
WHERE `user_id` = '47'
ERROR - 2021-04-15 14:47:30 --> Severity: error --> Exception: Object of class stdClass could not be converted to string C:\xampp\htdocs\uk_feedback\application\views\freelancer\myPayments.php 83
ERROR - 2021-04-15 15:28:24 --> Severity: Notice --> Trying to get property 'wallet' of non-object C:\xampp\htdocs\uk_feedback\application\controllers\Admin.php 121
ERROR - 2021-04-15 15:44:31 --> Severity: Notice --> Trying to get property 'wallet' of non-object C:\xampp\htdocs\uk_feedback\application\controllers\Admin.php 124
ERROR - 2021-04-15 15:44:31 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\uk_feedback\application\controllers\Admin.php 124
ERROR - 2021-04-15 15:45:20 --> Severity: Notice --> Trying to get property 'wallet' of non-object C:\xampp\htdocs\uk_feedback\application\controllers\Admin.php 124
ERROR - 2021-04-15 15:45:20 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\uk_feedback\application\controllers\Admin.php 124
ERROR - 2021-04-15 15:45:49 --> Severity: Notice --> Undefined variable:  C:\xampp\htdocs\uk_feedback\application\controllers\Admin.php 123
ERROR - 2021-04-15 12:30:44 --> 404 Page Not Found: Ad/index
ERROR - 2021-04-15 12:30:48 --> 404 Page Not Found: Ad/index
ERROR - 2021-04-15 16:48:10 --> Query error: Unknown column 'gigs.id' in 'on clause' - Invalid query: SELECT `gigs`.*, `buyer_gigs`.*
FROM `gigs`
LEFT JOIN `buyer_gigs` ON `gigs`.`id`=`buyer_gigs`.`gigs_id`
WHERE `buyer_gigs`.`payment_status` = 1
AND `buyer_gigs`.`status` = 1
AND `user_id` = '23'
ORDER BY `id` DESC
ERROR - 2021-04-15 16:48:25 --> Query error: Unknown column 'gigs.gig_id' in 'on clause' - Invalid query: SELECT `gigs`.*, `buyer_gigs`.*
FROM `gigs`
LEFT JOIN `buyer_gigs` ON `gigs`.`gig_id`=`buyer_gigs`.`gigs_id`
WHERE `buyer_gigs`.`payment_status` = 1
AND `buyer_gigs`.`status` = 1
AND `user_id` = '23'
ORDER BY `id` DESC
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:56:40 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Undefined variable: b C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
ERROR - 2021-04-15 22:57:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp_28_02\htdocs\uk_feedback\application\views\admin\manage_gigs.php 51
