<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\BookModel;

class Book extends ResourceController
{
    use ResponseTrait;

    //Untuk mengambil semua data book
    public function index()
    {
        $model = new BookModel();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }

    //untuk mengambil data book tertentu berdasarkan id
    public function show($id = null)
    {
        $model = new BookModel();
        $data = $model->getWhere(['id' => $id])->getResult();
        if ($data) {
            return $this->respond($data);
        }
        else{
            return $this->failNotFound('Data tidak ditemukan');
        }
    }

    //Untuk Membuat/menambahkan data book
    public function create()
    {
        $model = new BookModel();
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

    //Untuk mengubah data book
    public function update($id = null)
    {
        $model = new BookModel();
        $data = $this->request->getRawInput();
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

    //Untuk menghapus data book
    public function delete($id = null)
    {
        $model = new BookModel();
        $data = $model->find($id);
        if($data){
            if($model->delete($id)){
                $response = [
                    'Status' => 201,
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
}
