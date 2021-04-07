<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-07 13:28:12 --> 404 Page Not Found: Freelancer/submit-review
ERROR - 2021-04-07 18:53:01 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\uk_feedback\application\controllers\Freelancer.php 63
ERROR - 2021-04-07 18:53:35 --> Query error: Unknown column 'reviewer_name' in 'field list' - Invalid query: INSERT INTO `completed_reviews` (`review_id`, `link_id`, `gig_id`, `buyer_id`, `gig_cat_id`, `reviewer_name`, `freelancer_id`, `created_date`, `screenshot`) VALUES ('16', '25', '5', '35', '1', 'moin', '26', '2021-04-07', 'uploads/review_screenshot/1617801815_Capture.PNG')
ERROR - 2021-04-07 18:55:36 --> Query error: Unknown column 'reveiw_status' in 'field list' - Invalid query: UPDATE `buyer_links` SET `reveiw_status` = 0, `link_status` = 0
WHERE `id` = '25'
ERROR - 2021-04-07 19:08:10 --> Severity: Notice --> Undefined index: link_id C:\xampp\htdocs\uk_feedback\application\controllers\Freelancer.php 87
ERROR - 2021-04-07 19:08:10 --> Severity: Notice --> Undefined index: gig_id C:\xampp\htdocs\uk_feedback\application\controllers\Freelancer.php 87
ERROR - 2021-04-07 19:08:10 --> Severity: Notice --> Undefined index: buyer_id C:\xampp\htdocs\uk_feedback\application\controllers\Freelancer.php 87
ERROR - 2021-04-07 19:08:10 --> Severity: Notice --> Undefined index: gig_cat_id C:\xampp\htdocs\uk_feedback\application\controllers\Freelancer.php 87
ERROR - 2021-04-07 19:08:10 --> Severity: Notice --> Undefined index: link_id C:\xampp\htdocs\uk_feedback\application\controllers\Freelancer.php 90
ERROR - 2021-04-07 19:08:10 --> Severity: Notice --> Undefined index: gig_id C:\xampp\htdocs\uk_feedback\application\controllers\Freelancer.php 90
ERROR - 2021-04-07 19:08:10 --> Severity: Notice --> Undefined index: buyer_id C:\xampp\htdocs\uk_feedback\application\controllers\Freelancer.php 90
ERROR - 2021-04-07 19:08:10 --> Severity: Notice --> Undefined index: gig_cat_id C:\xampp\htdocs\uk_feedback\application\controllers\Freelancer.php 90
ERROR - 2021-04-07 19:11:08 --> Severity: Notice --> Undefined index: link_id C:\xampp\htdocs\uk_feedback\application\controllers\Freelancer.php 113
ERROR - 2021-04-07 19:11:08 --> Severity: Notice --> Undefined index: gig_cat_id C:\xampp\htdocs\uk_feedback\application\controllers\Freelancer.php 113
ERROR - 2021-04-07 19:11:08 --> Severity: error --> Exception: Too few arguments to function Freelancer::show_reviews(), 0 passed in C:\xampp\htdocs\uk_feedback\system\core\CodeIgniter.php on line 532 and exactly 2 expected C:\xampp\htdocs\uk_feedback\application\controllers\Freelancer.php 41
ERROR - 2021-04-07 19:27:11 --> Query error: Unknown column 'buyer_links_reviews.id' in 'on clause' - Invalid query: SELECT `buyer_links`.*, `gigs`.`title`
FROM `buyer_links`
LEFT JOIN `gigs` ON `gigs`.`g_id`=`buyer_links`.`gig_id`
LEFT JOIN `completed_reviews` ON `buyer_links_reviews`.`id`=`completed_reviews`.`review_id`
WHERE `buyer_links`.`approve_status` = '1'
AND `buyer_links`.`link_status` = '1'
AND `buyer_links`.`gig_cat_id` = '1'
ORDER BY `id` DESC
ERROR - 2021-04-07 19:27:13 --> Query error: Unknown column 'buyer_links_reviews.id' in 'on clause' - Invalid query: SELECT `buyer_links`.*, `gigs`.`title`
FROM `buyer_links`
LEFT JOIN `gigs` ON `gigs`.`g_id`=`buyer_links`.`gig_id`
LEFT JOIN `completed_reviews` ON `buyer_links_reviews`.`id`=`completed_reviews`.`review_id`
WHERE `buyer_links`.`approve_status` = '1'
AND `buyer_links`.`link_status` = '1'
AND `buyer_links`.`gig_cat_id` = '1'
ORDER BY `id` DESC
ERROR - 2021-04-07 19:33:06 --> Severity: Notice --> Trying to get property 'freelancer_id' of non-object C:\xampp\htdocs\uk_feedback\application\views\freelancer\dashboard.php 106
ERROR - 2021-04-07 19:33:06 --> Severity: Notice --> Undefined variable: ser_id C:\xampp\htdocs\uk_feedback\application\views\freelancer\dashboard.php 106
ERROR - 2021-04-07 19:33:06 --> Severity: Notice --> Trying to get property 'freelancer_id' of non-object C:\xampp\htdocs\uk_feedback\application\views\freelancer\dashboard.php 106
ERROR - 2021-04-07 19:33:06 --> Severity: Notice --> Undefined variable: ser_id C:\xampp\htdocs\uk_feedback\application\views\freelancer\dashboard.php 106
ERROR - 2021-04-07 19:34:14 --> Severity: Notice --> Trying to get property 'freelancer_id' of non-object C:\xampp\htdocs\uk_feedback\application\views\freelancer\dashboard.php 106
ERROR - 2021-04-07 19:34:14 --> Severity: Notice --> Undefined variable: ser_id C:\xampp\htdocs\uk_feedback\application\views\freelancer\dashboard.php 106
ERROR - 2021-04-07 19:34:14 --> Severity: Notice --> Trying to get property 'freelancer_id' of non-object C:\xampp\htdocs\uk_feedback\application\views\freelancer\dashboard.php 106
ERROR - 2021-04-07 19:34:14 --> Severity: Notice --> Undefined variable: ser_id C:\xampp\htdocs\uk_feedback\application\views\freelancer\dashboard.php 106
ERROR - 2021-04-07 19:34:35 --> Severity: Notice --> Trying to get property 'freelancer_id' of non-object C:\xampp\htdocs\uk_feedback\application\views\freelancer\dashboard.php 106
ERROR - 2021-04-07 19:34:35 --> Severity: Notice --> Trying to get property 'freelancer_id' of non-object C:\xampp\htdocs\uk_feedback\application\views\freelancer\dashboard.php 106
ERROR - 2021-04-07 20:18:07 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 311
ERROR - 2021-04-07 20:18:54 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 311
ERROR - 2021-04-07 20:21:02 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 309
ERROR - 2021-04-07 22:18:31 --> Severity: error --> Exception: Too few arguments to function Common_model::fetch_multiple_row_bywhere_with_join(), 4 passed in C:\xampp\htdocs\uk_feedback\application\controllers\Front.php on line 87 and at least 5 expected C:\xampp\htdocs\uk_feedback\application\models\Common_model.php 66
ERROR - 2021-04-07 22:18:55 --> Query error: Column 'link_id' in where clause is ambiguous - Invalid query: SELECT *
FROM `buyer_links_reviews`
LEFT JOIN `completed_reviews` ON `buyer_links_reviews`.`id`=`completed_reviews`.`review_id`
WHERE `link_id` = '1'
ORDER BY `id` ASC
ERROR - 2021-04-07 22:19:18 --> Query error: Column 'id' in order clause is ambiguous - Invalid query: SELECT *
FROM `buyer_links_reviews`
LEFT JOIN `completed_reviews` ON `buyer_links_reviews`.`id`=`completed_reviews`.`review_id`
WHERE `buyer_links_reviews`.`link_id` = '1'
ORDER BY `id` ASC
ERROR - 2021-04-07 22:21:48 --> Query error: Column 'id' in order clause is ambiguous - Invalid query: SELECT *
FROM `buyer_links_reviews`
LEFT JOIN `completed_reviews` ON `buyer_links_reviews`.`id`=`completed_reviews`.`review_id`
WHERE `buyer_links_reviews`.`link_id` = '15'
ORDER BY `id` ASC
ERROR - 2021-04-07 22:21:50 --> Query error: Column 'id' in order clause is ambiguous - Invalid query: SELECT *
FROM `buyer_links_reviews`
LEFT JOIN `completed_reviews` ON `buyer_links_reviews`.`id`=`completed_reviews`.`review_id`
WHERE `buyer_links_reviews`.`link_id` = '15'
ORDER BY `id` ASC
ERROR - 2021-04-07 22:28:15 --> Query error: Unknown column 'buyer_links.id' in 'on clause' - Invalid query: SELECT `buyer_links_reviews`.*, `completed_reviews`.`freelancer_id`
FROM `buyer_links_reviews`
LEFT JOIN `completed_reviews` ON `buyer_links`.`id`=`completed_reviews`.`link_id`
WHERE `buyer_links_reviews`.`link_id` = '1'
ORDER BY `id` DESC
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:29:38 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:25 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:30:32 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:31:04 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:31:04 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:31:04 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:31:04 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:31:04 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:31:04 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:32:27 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:32:27 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:32:27 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:32:50 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:32:50 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:32:50 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:32:50 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:32:50 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:32:50 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:32:52 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:32:52 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:32:52 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:32:52 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:32:52 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 302
ERROR - 2021-04-07 22:32:52 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:33:06 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:33:06 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:33:06 --> Severity: Notice --> Trying to get property 'review_details' of non-object C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 305
ERROR - 2021-04-07 22:42:11 --> Severity: Notice --> Trying to get property 'category_id' of non-object C:\xampp\htdocs\uk_feedback\application\controllers\Front.php 193
ERROR - 2021-04-07 22:42:28 --> Severity: Notice --> Trying to get property 'category_id' of non-object C:\xampp\htdocs\uk_feedback\application\controllers\Front.php 140
ERROR - 2021-04-07 22:42:28 --> Severity: Notice --> Trying to get property 'no_of_reviews' of non-object C:\xampp\htdocs\uk_feedback\application\controllers\Front.php 146
ERROR - 2021-04-07 22:42:36 --> Severity: Notice --> Trying to get property 'category_id' of non-object C:\xampp\htdocs\uk_feedback\application\controllers\Front.php 140
ERROR - 2021-04-07 22:42:36 --> Severity: Notice --> Trying to get property 'no_of_reviews' of non-object C:\xampp\htdocs\uk_feedback\application\controllers\Front.php 146
ERROR - 2021-04-07 19:13:38 --> 404 Page Not Found: 13/index
ERROR - 2021-04-07 22:50:26 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\uk_feedback\application\views\admin\view_work_stream.php 25
ERROR - 2021-04-07 23:45:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'OUTER JOIN `completed_reviews` ON `buyer_links`.`id`=`completed_reviews`.`lin...' at line 4 - Invalid query: SELECT `buyer_links`.*, `gigs`.`title`, `completed_reviews`.`freelancer_id`
FROM `buyer_links`
LEFT JOIN `gigs` ON `gigs`.`g_id`=`buyer_links`.`gig_id`
OUTER JOIN `completed_reviews` ON `buyer_links`.`id`=`completed_reviews`.`link_id`
WHERE `buyer_links`.`approve_status` = '1'
AND `buyer_links`.`link_status` = '1'
AND `buyer_links`.`gig_cat_id` = '1'
ORDER BY `id` DESC
ERROR - 2021-04-07 23:46:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'OUTER JOIN `completed_reviews` ON `buyer_links`.`id`=`completed_reviews`.`lin...' at line 4 - Invalid query: SELECT `buyer_links`.*, `gigs`.`title`, `completed_reviews`.`freelancer_id`
FROM `buyer_links`
LEFT JOIN `gigs` ON `gigs`.`g_id`=`buyer_links`.`gig_id`
OUTER JOIN `completed_reviews` ON `buyer_links`.`id`=`completed_reviews`.`link_id`
WHERE `buyer_links`.`approve_status` = '1'
AND `buyer_links`.`link_status` = '1'
AND `buyer_links`.`gig_cat_id` = '1'
ORDER BY `id` DESC
ERROR - 2021-04-07 23:46:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'OUTER JOIN `completed_reviews` ON `buyer_links`.`id` = `completed_reviews`.`l...' at line 4 - Invalid query: SELECT `buyer_links`.*, `gigs`.`title`, `completed_reviews`.`freelancer_id`
FROM `buyer_links`
LEFT JOIN `gigs` ON `gigs`.`g_id`=`buyer_links`.`gig_id`
OUTER JOIN `completed_reviews` ON `buyer_links`.`id` = `completed_reviews`.`link_id`
WHERE `buyer_links`.`approve_status` = '1'
AND `buyer_links`.`link_status` = '1'
AND `buyer_links`.`gig_cat_id` = '1'
ORDER BY `id` DESC
ERROR - 2021-04-07 23:49:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'OUTER JOIN `gigs` ON `gigs`.`g_id`=`buyer_links`.`gig_id`
OUTER JOIN `complet...' at line 3 - Invalid query: SELECT `buyer_links`.*, `gigs`.`title`, `completed_reviews`.`freelancer_id`
FROM `buyer_links`
OUTER JOIN `gigs` ON `gigs`.`g_id`=`buyer_links`.`gig_id`
OUTER JOIN `completed_reviews` ON `buyer_links`.`id` = `completed_reviews`.`link_id`
WHERE `buyer_links`.`approve_status` = '1'
AND `buyer_links`.`link_status` = '1'
AND `buyer_links`.`gig_cat_id` = '1'
ORDER BY `id` DESC
