<?php

/**
 * Filename: Message.php
 * Message class for the Guestbook
 */
class Message {
    private $_name;
    private $_message;
    private $_email;
    private $_is_approved;

    /**
     * @param Array
     * array(
     * 'id' => 1,
     * 'name' => 'Juan',
     * 'message' => 'Hello',
     * 'email' => 'juan@mail.com',
     * 'date_posted' => 'January 1, 2013',
     * 'is_approved' => 'Y'
     * )
     */
    public function __construct($config) {
        if (isset($config['name'])) {
            $this->_name = $config['name'];
        }
        if (isset($config['message'])) {
            $this->_message = $config['message'];
        }
        if (isset($config['email'])) {
            $this->_email = $config['email'];
        }
        if (isset($config['is_approved'])) {
            $this->_is_approved = $config['is_approved'];
        }
    }

    public function getMessage() {
        return $this->_message;
    }

    public function getName() {
        if(ctype_alpha($this->_name)){
            return $this->_name;
        }else{
            echo "<script>alert('Please enter your name in Alphabet only');window.location.href='index.php'</script>";
        }        
    }

    public function getEmail() {
        $search1 = stripos($this->_email, '@');        
        if($search1 !== false){
            $search2 = stripos($this->_email, '.');
            if($search2 !== false){
                return $this->_email;
            }else{
                echo "<script>alert('Your Email is not valid');window.location.href='index.php'</script>";
            }
        }else{
            echo "<script>alert('Your Email is not valid');window.location.href='index.php'</script>";
        }
    }
    public function isApproved() {
        // return ($this->_is_approved == 'Y') ? true: false;
        return $this->_is_approved;
   
    }
}

?>