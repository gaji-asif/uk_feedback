<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-02 00:20:07 --> Severity: Notice --> Undefined variable: link C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 274
ERROR - 2021-04-02 00:20:44 --> Severity: Notice --> Undefined variable: link C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 274
ERROR - 2021-04-02 00:21:22 --> Severity: Notice --> Undefined variable: link C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 274
ERROR - 2021-04-02 00:21:28 --> Severity: Notice --> Undefined variable: link C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 274
ERROR - 2021-04-02 00:21:29 --> Severity: Notice --> Undefined variable: link C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 274
ERROR - 2021-04-02 00:21:46 --> Severity: Notice --> Undefined variable: link C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 274
ERROR - 2021-04-02 00:21:46 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 274
ERROR - 2021-04-02 00:22:23 --> Severity: Notice --> Undefined variable: link C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 274
ERROR - 2021-04-02 00:22:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\uk_feedback\application\views\front\viewworkstream.php 274
ERROR - 2021-04-02 00:42:47 --> Query error: Unknown column 'gigs.name' in 'field list' - Invalid query: SELECT `buyer_links`.*, `gigs`.`name`
FROM `buyer_links`
LEFT JOIN `gigs` ON `buyer_links`.`link_id`=`gigs`.`id`
GROUP BY `buyer_links`.`link_url`
ERROR - 2021-04-02 00:42:58 --> Query error: Unknown column 'gigs' in 'field list' - Invalid query: SELECT `buyer_links`.*, `gigs`
FROM `buyer_links`
LEFT JOIN `gigs` ON `buyer_links`.`link_id`=`gigs`.`id`
GROUP BY `buyer_links`.`link_url`
ERROR - 2021-04-02 00:43:24 --> Query error: Unknown column 'buyer_links.link_id' in 'on clause' - Invalid query: SELECT `buyer_links`.*, `gigs`.`title`
FROM `buyer_links`
LEFT JOIN `gigs` ON `buyer_links`.`link_id`=`gigs`.`id`
GROUP BY `buyer_links`.`link_url`
ERROR - 2021-04-02 00:44:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`link_id`)
GROUP BY `buyer_links`.`link_url`' at line 3 - Invalid query: SELECT `buyer_links`.*, `gigs`.`title`
FROM `buyer_links`
JOIN `gigs` USING (`buyer_links`.`link_id`)
GROUP BY `buyer_links`.`link_url`
ERROR - 2021-04-02 00:44:25 --> Query error: Unknown column 'buyer_links.link_id' in 'on clause' - Invalid query: SELECT `buyer_links`.*, `gigs`.`title`
FROM `buyer_links`
LEFT JOIN `gigs` ON `buyer_links`.`link_id`=`gigs`.`id`
GROUP BY `buyer_links`.`link_url`
ERROR - 2021-04-02 00:44:26 --> Query error: Unknown column 'buyer_links.link_id' in 'on clause' - Invalid query: SELECT `buyer_links`.*, `gigs`.`title`
FROM `buyer_links`
LEFT JOIN `gigs` ON `buyer_links`.`link_id`=`gigs`.`id`
GROUP BY `buyer_links`.`link_url`
ERROR - 2021-04-02 00:44:41 --> Query error: Unknown column 'buyer_links.link_id' in 'on clause' - Invalid query: SELECT `buyer_links`.*, `gigs`.`title`
FROM `buyer_links`
JOIN `gigs` ON `buyer_links`.`link_id`=`gigs`.`id`
GROUP BY `buyer_links`.`link_url`
ERROR - 2021-04-02 00:46:03 --> Query error: Unknown column 'gigs.id' in 'on clause' - Invalid query: SELECT `buyer_links`.*, `gigs`.`title`
FROM `buyer_links`
LEFT JOIN `gigs` ON `buyer_links`.`gig_id`=`gigs`.`id`
GROUP BY `buyer_links`.`link_url`
ERROR - 2021-04-02 00:46:13 --> Query error: Unknown column 'gigs.id' in 'on clause' - Invalid query: SELECT `buyer_links`.*, `gigs`.*
FROM `buyer_links`
LEFT JOIN `gigs` ON `buyer_links`.`gig_id`=`gigs`.`id`
GROUP BY `buyer_links`.`link_url`
ERROR - 2021-04-02 00:46:24 --> Query error: Unknown column 'gigs.id' in 'on clause' - Invalid query: SELECT `buyer_links`.*, `gigs`.`title`
FROM `buyer_links`
LEFT JOIN `gigs` ON `buyer_links`.`gig_id`=`gigs`.`id`
ERROR - 2021-04-02 00:47:22 --> Query error: Unknown column 'gigs.id' in 'on clause' - Invalid query: SELECT `buyer_links`.*, `gigs`.`title`
FROM `buyer_links`
LEFT JOIN `gigs` ON `gigs`.`id`=`buyer_links`.`gig_id`
GROUP BY `buyer_links`.`link_url`
ERROR - 2021-04-02 00:49:53 --> Query error: Unknown column 'gigs.id' in 'on clause' - Invalid query: SELECT `buyer_links`.*, `gigs`.`title`
FROM `buyer_links`
LEFT JOIN `gigs` ON `buyer_links`.`gig_id`=`gigs`.`id`
GROUP BY `buyer_links`.`link_url`
ERROR - 2021-04-02 00:50:01 --> Query error: Unknown column 'gigs.id' in 'on clause' - Invalid query: SELECT `buyer_links`.*, `gigs`.`title`
FROM `buyer_links`
JOIN `gigs` ON `buyer_links`.`gig_id`=`gigs`.`id`
GROUP BY `buyer_links`.`link_url`
ERROR - 2021-04-02 00:50:50 --> Query error: Unknown column 'gigs.id' in 'on clause' - Invalid query: SELECT `buyer_links`.*
FROM `buyer_links`
LEFT JOIN `gigs` ON `gigs`.`id`=`buyer_links`.`gig_id`
GROUP BY `buyer_links`.`link_url`
ERROR - 2021-04-02 00:57:45 --> Severity: Notice --> Undefined variable: links C:\xampp\htdocs\uk_feedback\application\views\admin\work_stream.php 37
ERROR - 2021-04-02 00:57:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\uk_feedback\application\views\admin\work_stream.php 37
ERROR - 2021-04-02 00:57:52 --> Severity: Notice --> Undefined variable: links C:\xampp\htdocs\uk_feedback\application\views\admin\work_stream.php 37
ERROR - 2021-04-02 00:57:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\uk_feedback\application\views\admin\work_stream.php 37
ERROR - 2021-04-02 01:22:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '12
WHERE `gigs` IS NULL' at line 2 - Invalid query: SELECT *
FROM 12
WHERE `gigs` IS NULL
ERROR - 2021-04-02 01:23:47 --> Severity: error --> Exception: Object of class stdClass could not be converted to string C:\xampp\htdocs\uk_feedback\application\views\admin\view_work_stream.php 25
ERROR - 2021-04-02 01:24:11 --> Severity: error --> Exception: Object of class stdClass could not be converted to string C:\xampp\htdocs\uk_feedback\application\views\admin\view_work_stream.php 25
ERROR - 2021-04-02 01:30:58 --> Severity: error --> Exception: Object of class stdClass could not be converted to string C:\xampp\htdocs\uk_feedback\application\views\admin\view_work_stream.php 36
ERROR - 2021-04-02 01:59:49 --> Severity: Notice --> Undefined variable: b C:\xampp\htdocs\uk_feedback\application\views\admin\payment-request.php 68
ERROR - 2021-04-02 01:59:49 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\admin\payment-request.php 68
ERROR - 2021-04-02 01:59:49 --> Severity: Notice --> Undefined variable: b C:\xampp\htdocs\uk_feedback\application\views\admin\payment-request.php 68
ERROR - 2021-04-02 01:59:49 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\admin\payment-request.php 68
ERROR - 2021-04-02 01:59:49 --> Severity: Notice --> Undefined variable: b C:\xampp\htdocs\uk_feedback\application\views\admin\payment-request.php 68
ERROR - 2021-04-02 01:59:49 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\admin\payment-request.php 68
ERROR - 2021-04-02 01:59:49 --> Severity: Notice --> Undefined variable: b C:\xampp\htdocs\uk_feedback\application\views\admin\payment-request.php 68
ERROR - 2021-04-02 01:59:49 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\admin\payment-request.php 68
ERROR - 2021-04-02 01:59:49 --> Severity: Notice --> Undefined variable: b C:\xampp\htdocs\uk_feedback\application\views\admin\payment-request.php 68
ERROR - 2021-04-02 01:59:49 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\admin\payment-request.php 68
ERROR - 2021-04-02 01:59:49 --> Severity: Notice --> Undefined variable: b C:\xampp\htdocs\uk_feedback\application\views\admin\payment-request.php 68
ERROR - 2021-04-02 01:59:49 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\admin\payment-request.php 68
ERROR - 2021-04-02 01:59:49 --> Severity: Notice --> Undefined variable: b C:\xampp\htdocs\uk_feedback\application\views\admin\payment-request.php 68
ERROR - 2021-04-02 01:59:49 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\admin\payment-request.php 68
ERROR - 2021-04-02 01:59:49 --> Severity: Notice --> Undefined variable: b C:\xampp\htdocs\uk_feedback\application\views\admin\payment-request.php 68
ERROR - 2021-04-02 01:59:49 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\uk_feedback\application\views\admin\payment-request.php 68
