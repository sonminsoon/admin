<?php
/**
 * Created by PhpStorm.
 * User: hs
 * Date: 2017-01-19
 * Time: 오전 11:31
 */
$config = array(

           'login'=> array(
                array(
                    'field'   => 'id',
                    'label'   => 'ID',
                    'rules'   => 'required'
                ),
                array(
                    'field'   => 'password',
                    'label'   => 'Password',
                    'rules'   => 'required'
                )
            ),
           'email' => array(
                array(
                    'field' => 'emailaddress',
                    'label' => 'EmailAddress',
                    'rules' => 'required|valid_email'
                ),
                array(
                    'field' => 'name',
                    'label' => 'Name',
                    'rules' => 'required|alpha'
                ),
                array(
                    'field' => 'title',
                    'label' => 'Title',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'message',
                    'label' => 'MessageBody',
                    'rules' => 'required'
                )
            )
);