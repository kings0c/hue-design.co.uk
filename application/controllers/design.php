<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Design extends CI_Controller {

	public function index() {
		$data['baseurl'] = "https://www.hue-design.co.uk/";
		$data['pageTitle'] = "Hue Design - Web Design in Wigan";
		$data['pageDescription'] = "Professional, bespoke website design & development serving Wigan & the North-West.";
		$this->load->view('templates/header', $data);
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function contact() {
		$post = $this->input->post();
		if( count($post) > 1 ) { 
		   
			require_once('lib/recaptchalib.php');
			$privatekey = "6LeHrv0SAAAAAPBx4UwnKMgkCC5DJ4tRMWvHUaDL";
			$resp = recaptcha_check_answer ($privatekey,
										$_SERVER["REMOTE_ADDR"],
										$_POST["recaptcha_challenge_field"],
										$_POST["recaptcha_response_field"]);

			if (!$resp->is_valid) {
				// What happens when the CAPTCHA was entered incorrectly
				die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
					 "(reCAPTCHA said: " . $resp->error . ")");
			} else {
				$message = "
				<html>
				<head>
					<title>Contact Form Submission</title>
				</head>
				<body>" . 
				"<p>First Name: " . $post['name'] . "</p>" . 
				"<p>Phone No: " . $post['phone'] . "</p>" . 
				"<p>Email: " . $post['email'] . "</p>" . 
				"<p>Message: " . htmlspecialchars($post['message']) . "</p>" . 
				"</body>
				</html>";
			
				$to = 'info@l2p-gaming.co.uk';
				$subject = 'Contact Us Submission';
				// To send HTML mail, the Content-type header must be set
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

				// Additional headers
				$headers .= 'To: Info <info@l2p-gaming.co.uk>' . "\r\n";
				$headers .= 'From: Contact Us <contact@hue-design.co.uk>' . "\r\n";
				mail($to, $subject, $message, $headers);
				
				echo "<script type='text/javascript'>alert('Your message has been successfully sent." . "');</script>";
				//echo  var_dump($post);
				header("Location: http://www.hue-design.co.uk?contact=1");
				die();
			}
		// }
		
		$data['baseurl'] = "https://www.hue-design.co.uk/";
		$data['pageTitle'] = "Hue Design - Contact Us";
		$data['pageDescription'] = "Get in touch with us via email, phone or our online contact form.";
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/contact', $data);
		$this->load->view('templates/footer', $data);
		}
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */