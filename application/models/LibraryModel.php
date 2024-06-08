<?php

defined("BASEPATH") or exit("No direct Script Access Allowed");

class LibraryModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getBooks()
    {
        $books = $this->db->get("books")->result();
        if ($books != null) {
            return $books;
        }
        return null;
    }

    function getBookByName($bookname)
    {
        $book = $this->db->get_where("books", array("booktitle" => $bookname))->row();
        if ($book != null) {
            return $book;
        }
        return null;
    }

    function getBookByBookId($id)
    {
        $book = $this->db->get_where("books", array("bookid" => $id))->row();
        if ($book != null) {
            return $book;
        }
        return null;
    }

    function getStudentById($id)
    {
        $student = $this->db->get_where("studentdetails", array("student_id" => $id))->row();
        if ($student != null) {
            return $student;
        }
        return null;
    }
    function addBook($formData)
    {
        $this->db->insert("books", $formData);
    }

    function updateBook($id, $formData)
    {
        $this->db->where("id", $id);
        $this->db->update("books", $formData);
    }

    function getBook($id)
    {
        $data=$this->db->get_where("books", array("id"=>$id))->row();
        if($data!=null)
        {
            return $data;
        }
        return null;
    }

    function deleteBook($id)
    {
        $this->db->delete("books", array("id"=>$id));
    }

    function getDepartments($course)
    {

        $datacourse=$this->db->get_where("department", array("course"=>$course))->result();
        $both=$this->db->get_where("department", array("course"=>"Both"))->result();
        $combinedData = array_merge($datacourse, $both);
        if($combinedData!=null)
        {
            return $combinedData;
        }
        return null;
    }

    function getIssuedBooks()
    {
        $data=$this->db->get("booksissued")->result();
        if($data!=null)
        {
            return $data;
        }
        return null;
    }

    function issueBook($formdata)
    {
        $this->db->insert("booksissued",$formdata);
    }

    function getIssuedBookData($id)
    {
        
        $data=$this->db->get_where("booksissued",array("id"=>$id))->row();
        if($data!=null)
        {
            return $data;
        }
        return null;
    }
}
