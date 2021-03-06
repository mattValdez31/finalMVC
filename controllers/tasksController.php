<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
    	if (!empty($_REQUEST['id']))
	{
	  $record = todos::findOne($_REQUEST['id']);
	}
	else
	{
	   $record = todos::findOne($_POST['findID']);
	}
        self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        $records = todos::findAll();
        session_start();

        $userID = $_SESSION['userID'];

        $records = todos::findTasksbyID($userID);

        self::getTemplate('all_tasks', $records);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

	//function to view new record form
    public static function newTask()
    {
	self::getTemplate('new_task');
    }

	//function for sending the new task form
    public static function taskCreate()
    {
    	session_start();

	$record = todos::create();
	$record->owneremail = $_SESSION['userEmail'];
	$record->ownerid = $_SESSION['userID'];
	$record->duedate = $_POST['duedate'];
	$record->message = $_POST['message'];
	$record->save();
	header("Location: index.php?page=tasks&action=show&id=$record->id");

    }

    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);

        self::getTemplate('edit_task', $record);

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {
	$record = todos::findOne($_REQUEST['id']);

	$record->owneremail = $_POST['owneremail'];
	$record->duedate = $_POST['duedate'];
	$record->message = $_POST['message'];
	$record->isdone = $_POST['isdone'];
	$record->save();
	header("Location: index.php?page=tasks&action=show&id=$record->id");

        /*$record = todos::findOne($_REQUEST['id']);
        $record->body = $_REQUEST['body'];
        $record->save();*/
        //print_r($_POST);

    }

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        print_r($_POST);

    }

}
