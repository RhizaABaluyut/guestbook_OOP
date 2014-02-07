<?php

/**
 * Filename: MessageDAO.php (Data Access Object)
 * Message class for the Guestbook
 */
class MessageDAO {

    /**
     * @param Message object
     * @return Boolean is the message added to messages table or not
     */
    public static function create_message($name, $email, $message, $approved) {
        // Execute SQL query to INSERT into messages table
        $query = "INSERT INTO messages(name , message, email, date_posted, is_approved ) VALUES('$name', '$email', '$message', CURRENT_DATE, '$approved')";
        $result = mysql_query($query);
    }

    /**
     * @param Integer ID number of user
     * @return is_approved object
     */
    public static function view_data($id) {
        // Execute SQL to fetch message based on ID
        $query = "SELECT is_approved FROM messages WHERE id = '$id' ";
        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);
        return $row; 
    }

    /**
     * @return Array of Message objects
     */
    public static function getAllMessages() {
        // Execute SQL to fetch all messages
        $query = "SELECT * FROM messages";
        $result = mysql_query($query);
        $list = array();
        if(mysql_num_rows($result)>0){
            while($row = mysql_fetch_assoc($result)){
                    $list[] = $row;
            }
        }
        return $list;
    }

    /**
     * @param Integer ID number of message
     * @return Message object
     */
    public static function deleteMessage($id) {
        // Execute SQL to delete the message based on ID
        $query = "DELETE FROM messages WHERE id = '$id' ";
        $result = mysql_query($query);
    }

    /**
     * Set is_approved to 'Y'
     * @param Integer id number
     * @return Boolean
     */
    public static function approveMessage($id) {
        // Execute SQL to update the is_approved into Y
        $query = "UPDATE messages SET is_approved = 'Y' WHERE id = '{$id}'";
        $result = mysql_query($query);
    }

    /**
     * Set is_approved to 'N'
     * @param Integer id number
     * @return Boolean
     */
    public static function rejectMessage($id) {
        // Execute SQL to update the is_approved into N
        $query = "UPDATE messages SET is_approved = 'N' WHERE id = '{$id}' ";
        $result = mysql_query($query);
    }

    // View all message that are approved
    // @param is_approved
    // @return message object

    public static function view_approved(){
        // Execute SQL to view all approved messages
        $query = "SELECT * FROM messages WHERE is_approved = 'Y' ";
        $result = mysql_query($query);
        $list = array();
        if(mysql_num_rows($result)>0){
            while($row = mysql_fetch_assoc($result)){
                $list[] = $row;
            }
        }
        return $list;

    }
}

?>