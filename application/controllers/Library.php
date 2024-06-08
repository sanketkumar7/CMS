<?php 


defined("BASEPATH") or exit("No direct Script Accesss Allowed");

class Library extends CI_Controller
{
    function __construct()
    {
      parent::__construct();
      $this->load->model("LibraryModel");
      $this->load->model("DepartmentModel");
      $this->load->library("session");
    }

    function LibraryDashboard()
    {
      $this->load->view("LibraryViews/LibraryDashboard"); 
      $this->load->view("layout/librarySidebar");

    }

    function AllBooks()
    {
      $Books["books"]=$this->LibraryModel->getBooks();
      $this->load->view("LibraryViews/BooksList",$Books); 
      $this->load->view("layout/librarySidebar");
    }
    function AddBook()
    {
      $this->load->view("LibraryViews/addBook");
      $this->load->view("layout/librarySidebar");
    }


    function AddBookPost()
    {
      $formData=$this->input->post();
      $this->LibraryModel->addBook($formData);
      $this->session->set_flashdata('BookAddSuccess','Book Added Successfully');
      
      return redirect("Library/AllBooks");
    }

    function checkbookidvalidity()
    {
      $bookid=$this->input->get("bookid");
      $book=$this->LibraryModel->getBookByBookId($bookid);
      if($book!=null)
      {
        $response=array("message"=>"Book Found");
      }
      else{
        $response=array("message"=>"No Book Found");
      }

      $this->output->set_content_type("application/json");
      $this->output->set_output(json_encode($response));
    }

    function checkbooknamevalidity()
    {
      $bookname=$this->input->get("booktitle");
      $book=$this->LibraryModel->getBookByName($bookname);
      if($book!=null)
      {
        $response=array("message"=>"Book Found");
      }
      else{
        $response=array("message"=>"No Book Found");
      }

      $this->output->set_content_type("application/json");
      $this->output->set_output(json_encode($response));
    }


    function getDepartments()
    {
      $course=$this->input->get("course");
      if($course=="NA")
      {
        $response=array("message"=>"No Department Found");
        $this->output->set_content_type("application/json");
        $this->output->set_output(json_encode($response));
      }
      else{
        $departments=$this->LibraryModel->getDepartments($course);
        if($departments!=null)
        {
          $response=array("message"=>"Departments Found",
                          "data"=>$departments
                        );
        }
        else{
        }
        $this->output->set_content_type("application/json");
        $this->output->set_output(json_encode($response));
      }

    }

    function EditBook()
    {
      $id=$this->input->get("id");
      $book["book"]=$this->LibraryModel->getBook($id);
      $this->load->view("LibraryViews/updateBook",$book);
      $this->load->view("layout/librarySidebar");
    }

    function updatePost()
    {
      $formData=$this->input->post();
      $id=$formData["id"];
      unset($formData["id"]);
      $this->LibraryModel->updateBook($id,$formData);
      $this->session->set_flashdata('BookUpdateSuccess','Book Updated Successfully');
      return redirect("Library/AllBooks");
    }

    function DeleteBook()
    {
      $id=$this->input->get("id");
      $this->LibraryModel->deleteBook($id);
      $this->session->set_flashdata('BookDeleteSuccess','Book Deleted Successfully');
      return redirect("Library/AllBooks");
    }

    function ViewBook()
    {
      $id=$this->input->get("id");
      $book["book"]=$this->LibraryModel->getBook($id);
      $this->load->view("LibraryViews/viewBook",$book);
      $this->load->view("layout/librarySidebar");
    }


    function IssueBooks()
    {
      $this->load->view("LibraryViews/issueBook");
      $this->load->view("layout/librarySidebar");
    }

    function getBookbyId()
    {
      $bookid=$this->input->get("bookid");
      $book=$this->LibraryModel->getBookByBookId($bookid);
      if($book!=null)
      {
        $response=array("message"=>"Book Found",
                        "data"=>$book);
      }
      else{
        $response=array("message"=>"No Book Found");
      }
      $this->output->set_content_type("application/json");
      $this->output->set_output(json_encode($response));
    }



    function GetStudentbyId()
    {
      $studentid=$this->input->get("studentid");
      $student=$this->LibraryModel->getStudentById($studentid);
      if($student!=null)
      {
        $response=array("message"=>"Student Found",
                        "data"=>$student);
      }
      else{
        $response=array("message"=>"No Student Found");
      }
      $this->output->set_content_type("application/json");
      $this->output->set_output(json_encode($response));
    }

    function IssuedBooksList()
    {
      $issuedbooks["data"]=$this->LibraryModel->getIssuedBooks();
      $this->load->view("LibraryViews/issuedBooksList",$issuedbooks);
      $this->load->view("layout/librarySidebar");

    }

    function IssueBookPost()
    {
      $formdata=$this->input->post();
      $this->LibraryModel->issueBook($formdata);
      return redirect("Library/IssuedBooksList");
    }


    function ViewIssuedBookData()
    {
      $id=$this->input->get("id");
      $bookdata["data"]=$this->LibraryModel->getIssuedBookData($id);
      $this->load->view("LibraryViews/ViewIssuedBookDetails",$bookdata);
      $this->load->view("layout/librarySidebar");
    }
}


?>