<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\AuthorModel;
use App\Models\BookModel;

class Author extends ResourceController
{
    use ResponseTrait;

    //Untuk mengambil semua data author
    public function index()
    {
        $model = new AuthorModel();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }

    //untuk mengambil data author tertentu berdasarkan id
    public function show($id = null)
    {
        $model = new AuthorModel();
        $data = $model->getWhere(['id' => $id])->getResult();
        if ($data) {
            return $this->respond($data);
        }
        else{
            return $this->failNotFound('Data tidak ditemukan');
        }
    }

    //Untuk Membuat/menambahkan data author
    public function create()
    {
        $model = new AuthorModel();
        $data = $this->request->getPost();
        if ($model->insert($data)) {
            $response = [
                'Status' => 201,
                'messages' => ['Succes' => 'Data berhasil disimpan']
            ];
            return $this->respondCreated($response);
        }
        else{
            $erorrs = $model->errors();
            return $this->fail($errors, 400);
        }
        
    }

    //Untuk mengubah data author
    public function update($id = null)
    {
        $model = new AuthorModel();
        $data = $this->request->getRawInput();
        $getid = $model->find($id);
        if($getid){
            if ($model->update($id, $data)) {
                $response = [
                    'Status' => 201,
                    'messages' => ['Succes' => 'Data berhasil diubah']
                ];
                return $this->respond($response);
            }
            else{
                $erorrs = $model->errors();
                return $this->fail($errors, 400);
            }

        }
        else{
            return $this->failNotFound('Data tidak ditemukan');
        }
        
        
    }

    //Untuk menghapus data author
    public function delete($id = null)
    {
        $model = new AuthorModel();
        $data = $model->find($id);
        if($data){
            if($model->delete($id)){
                $response = [
                    'Status' => 200,
                    'messages' => ['Succes' => 'Data berhasil dihapus']
                ];
                return $this->respondDeleted($response);
            }
            else{
                $erorrs = $model->errors();
                return $this->fail($errors, 400);
            }

        }
        else{
            return $this->failNotFound('Data tidak ditemukan');
        }
    }
    
    public function book($author_id = null)
    {
        $author_model = new AuthorModel();
        $book_model = new BookModel();
        $author = $author_model->find($author_id);
        if (!$author) {
            return $this->failNotFound('Data tidak ditemukan');
        }
        else{
            $books = $book_model->where('author_id', $author_id)->findAll();
            return $this->respond($books);
        }
        
    }
}
