	    __    _ __       ______           __ 
	   / /   (_) /____  / ____/___ ______/ /_
	  / /   / / __/ _ \/ /   / __ `/ ___/ __/
	 / /___/ / /_/  __/ /___/ /_/ / /  / /_  
	/_____/_/\__/\___/\____/\__,_/_/   \__/  
	                      www.litecart.net
	                                         

################
# Instructions #
################

1. Always backup data before making changes to your store.

2. Upload the contents of the folder public_html/* to the corresponding path of your LiteCart installation.

3. Open ~/vqmod/xml/phpmailer.xml

  Edit the following lines to suit your configuration:

    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->Port = 587; // Set 587 for GMail
    $phpmailer->SMTPSecure = 'tls'; // Set tls for GMail
    
    $phpmailer->SMTPAuth = true;
    $phpmailer->Username = 'info@yourstore.com';
    $phpmailer->Password = 'yourpassword';

4.  Do some testing making sure your e-mails delivers fine.

________________________________________________________________________

Done!

Note: This contribution has vQmod technology, meaning you can disable it in Admin -> vQmods.
