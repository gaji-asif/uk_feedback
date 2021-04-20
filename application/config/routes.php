<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['company-overview'] = 'front/companyOverview';
// $route['blogs'] = 'front/blogs';
// $route['testimonial'] = 'front/testimonial';
// $route['testimonial/(:num)'] = 'front/testimonial';
// $route['career'] = 'front/career';
// $route['case-study'] = 'front/caseStudy';
// $route['portfolio'] = 'front/portfolio';
// $route['business-plan-and-information-memorandum'] = 'front/bussinessPlanAndInformation';
// $route['business-plan-and-information-memorandum1'] = 'front/bussinessPlanAndInformationm';
// $route['financial-modeling-services'] = 'front/financialModelingService';
// $route['financial-modeling-services1'] = 'front/financialModelingServicem1';
// $route['market-research-and-analysis'] = 'front/marketResearchAnalysis';
// $route['market-research-and-analysis1'] = 'front/marketResearchAnalysism1';
// $route['pitch-deck-design-services'] = 'front/pitchDeckDesignServices';
// $route['pitch-deck-design-services1'] = 'front/pitchDeckDesignServicesm1';
// $route['outsource-bookkeeping-and-accounting-services'] = 'front/outsourceBookKeeping';
// $route['outsource-bookkeeping-and-accounting-services1'] = 'front/outsourceBookKeepingm1';
// $route['startup-and-smes-funding'] = 'front/startUpAndFunding';
// $route['startup-and-smes-funding1'] = 'front/startUpAndFundingm1';
// $route['contact-us'] = 'front/contactUs';
// $route['content-marketing-outsourcing'] = 'front/contentMarketingOutsource';
// $route['content-marketing-outsourcing1'] = 'front/contentMarketingOutsourcem1';
// $route['corporate-branding-services'] = 'front/corporativeBrandingServices';
// $route['corporate-branding-services1'] = 'front/corporativeBrandingServicesm1';
// $route['privacy-policy'] = 'front/privacyPolicy';
// $route['packages'] = 'front/packages';
// $route['gallery'] = 'front/gallery';
// $route['brands'] = 'front/brands';
// $route['dissertation'] = 'front/dissertation';
// $route['blog-details/(:num)'] = 'front/blogDetails';
// $route['case-study-single/(:num)'] = 'front/caseStudySingle';
// $route['news'] = 'front/news';
// $route['news/(:num)'] = 'front/news';
// $route['news-details/(:num)'] = 'front/newsDetails';
// $route['affiliates'] = 'front/affiliates';
// $route['affiliates/(:num)'] = 'front/affiliates';


// $route['admin/add-blog'] = 'admin/addBlog';
// $route['admin/blog-category'] = 'admin/addBlogCategory';
// $route['admin/manage-blog'] = 'admin/manageBlogs';
// $route['admin/add-testimonial'] = 'admin/addTestimonial';
// $route['admin/manage-testimonial'] = 'admin/manageTestimonial';
// $route['admin/company-who-we-are'] = 'admin/companyWhoAre';
// $route['admin/home-who-we-are'] = 'admin/homeWhoAre';
// $route['admin/add-popular-brand'] = 'admin/addBrands';
// $route['admin/manage-brand'] = 'admin/manageBrands';


$route['admin/add-case-study'] = 'admin/addCaseStudy';
$route['admin/case-study-category'] = 'admin/addCaseStudyCategory';
$route['admin/edit-case-study/(:num)'] = 'admin/editCaseStudy';
$route['admin/view-case-study/(:num)'] = 'admin/viewCaseStudy';
$route['admin/manage-case-study'] = 'admin/manageCaseStudy';
$route['admin/add-package'] = 'admin/addPackages';
$route['admin/edit-package/(:num)'] = 'admin/editPackages';
$route['admin/manage-package'] = 'admin/managePackages';
$route['admin/add-portfolio'] = 'admin/addPortfolio';
$route['admin/edit-portfolio/(:num)'] = 'admin/editPortfolio';
$route['admin/add-portfolio-category'] = 'admin/addPortfolioCategory';
$route['admin/manage-portfolio'] = 'admin/managePortfolio';
$route['admin/add-news'] = 'admin/addNews';
$route['admin/manage-news'] = 'admin/manageNews';
$route['admin/contact-enquiry'] = 'admin/contactEnquiry';
$route['admin/career-enquiry'] = 'admin/careerEnquiry';
$route['admin/contact-enquiry-view/(:num)'] = 'admin/contactEnquiryView';
$route['admin/career-enquiry-view/(:num)'] = 'admin/careerEnquiryView';
$route['admin/package-enquiry'] = 'admin/packages';
$route['admin/package-enquiry-view/(:num)'] = 'admin/packageEnquiryView';
$route['admin/forget-password'] = 'admin/forgetPassword';
$route['admin/reset-password/(:any)/(:any)'] = 'admin/resetPassword';


$route['admin/edit-blog/(:num)'] = 'admin/editBlog';
$route['admin/view-blog/(:num)'] = 'admin/viewBlogs';
$route['admin/edit-testimonial/(:num)'] = 'admin/editTestimonial';
$route['admin/view-testimonial/(:num)'] = 'admin/viewTestimonial';
$route['admin/edit-brand/(:num)'] = 'admin/editBrand';
$route['admin/view-brand/(:num)'] = 'admin/viewBrand';
$route['admin/edit-news/(:num)'] = 'admin/editNews';
$route['admin/view-news/(:num)'] = 'admin/viewNews';
$route['admin/edit-affiliate/(:num)'] = 'admin/editAffiliate';
$route['admin/view-affiliate/(:num)'] = 'admin/viewAffiliate';
$route['admin/add-affiliate'] = 'admin/addAffiliate';
$route['admin/manage-affiliate'] = 'admin/manageAffiliate';
$route['admin/change-password'] = 'admin/changePassword';
$route['admin/my-profile'] = 'admin/myProfile';
$route['admin/linkedin-link'] = 'admin/linkedInLink';
$route['admin/facebook-link'] = 'admin/facebookLink';


$route['admin/buyer-list'] = 'admin/buyer_list';
$route['admin/freelancer-list'] = 'admin/freelancer_list';
$route['admin/create-category'] = 'admin/create_category';
$route['admin/manage-category'] = 'admin/manage_category';
$route['admin/create-gigs'] = 'admin/create_gigs';
$route['admin/manage-gigs'] = 'admin/manage_gigs';
$route['admin/rejectedReview'] = 'admin/rejected-review';

$route['about-us'] = 'front/aboutus';
$route['signup'] = 'front/register';
$route['login'] = 'front/login';
$route['affiliates'] = 'front/affiliates';
$route['get-money'] = 'front/getMoney';
$route['terms-condition'] = 'front/termsCondition';
$route['privacy-policy'] = 'front/privacyPolicy';
$route['how-it-works'] = 'front/howitWorks';
$route['create-ticket'] = 'front/createTickets';
$route['support-ticket'] = 'front/supportTicket';
$route['buyer/my-profile'] = 'buyer/myProfile';
$route['freelancer/my-profile'] = 'freelancer/myProfile';
$route['buyer/my-gigs'] = 'buyer/myGigs';
$route['buyer/my-referrals'] = 'buyer/myReferrals';
$route['freelancer/my-referrals'] = 'freelancer/myReferrals';
$route['buyer/my-payments'] = 'buyer/myPayments';
$route['freelancer/profile'] = 'freelancer/profile';
$route['freelancer/my-payments'] = 'freelancer/myPayments';
$route['admin/payment-request'] = 'admin/paymentRequest';
$route['freelancer/change-password'] = 'freelancer/changePassword';
$route['buyer/change-password'] = 'buyer/changePassword';

$route['cancel'] = 'front/cancel';
$route['notify'] = 'front/notify';
$route['return'] = 'front/return';

$route['offers/(:num)'] = 'offers/index/$1';

$route['thankyou'] = 'front/thankyou';



/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'front';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
