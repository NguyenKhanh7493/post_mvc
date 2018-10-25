<?php
include_once('models/ContactModel.php');
class ContactController{
    public function contact(){
        $menuModel = new ContactModel();
        $data = $menuModel->menu();
        include_once('views/layout/contact/contact.php');
    }
}