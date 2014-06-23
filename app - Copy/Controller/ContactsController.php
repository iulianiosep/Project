<?php
class ContactsController extends Controller {

    var $components = array('Email','Session');


    function send() {
        if(!empty($this->data)) {
            $this->Contact->set($this->data);

            if($this->Contact->validates()) {
                if(!empty($this->data['Contact']['company'])) {
                    $this->Email->from = $this->data['Contact']['telephone'] .
                    ' - ' . $this->data['Contact']['name'] .
                    ' <' . $this->data['Contact']['email'] . '>';
                } else {
                    $this->Email->from = $this->data['Contact']['name'] .
                    ' <' . $this->data['Contact']['email'] . '>';
                }
                $this->Email->to = 'malessandrox@gmail.com';
                $this->Email->subject = 'Website request';
                $this->Email->send($this->data['Contact']['message']);
                $this->Session->setFlash('Your message has been sent.');
                // Display the success.ctp page instead of the form again
                $this->render('success');
            } else {
                $this->render('index');
            }
        }
    }

    function index() {
        // Placeholder for index. No actual action here, everything is submitted to the send function.
    }

}

?>