<?php

namespace App\Tests\Controllers;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

class TestAuthor extends CIUnitTestCase
{
    use FeatureTestTrait;

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

    }

    //Unit test untuk mengambil semua data author
    public function testGetAllAuthor()
    {
        $result = $this->call('get', 'author');
        
        $result->assertStatus(200);
    }

    //Unit test untuk mengambil data author berdasarkan id tertentu
    public function testGetAuthorByID()
    {
        $result = $this->call('get', 'author/1');
        
        $result->assertStatus(200);
    }

    //Unit test untuk menambah data baru author
    public function testCreateAuthor()
    {
        $data = [
            'name' => 'Alvian Dwi',
            'bio'  => 'Programmer',
            'birth_date' => '1999-03-16'
        ];

        $result = $this->call('post', 'author', $data);
        
        $result->assertStatus(201);

    }

    //Unit test untuk mengubah data author berdasarkan id
    public function testUpdateAuthor()
    {
        $data = [
            'name' => 'Alvian',
            'bio'  => 'Programmer 1'
        ];

        $result = $this->call('put', 'author/4', $data);
        
        $result->assertStatus(201);

    }

    //Unit test untuk menghapus data author berdasarkan id
    public function testDeleteAuthor()
    {

        $result = $this->call('delete', 'author/1');
        
        $result->assertStatus(200);

    }

    //Unit test untuk mengambil semua buku berdasarkan author tertentu/by ID
    public function testGetBooksByAuthor()
    {
    
        $response = $this->call('get', 'author/1/book');

        $response->assertStatus(200);
    }
}