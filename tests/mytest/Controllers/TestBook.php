<?php

namespace App\Tests\Controllers;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

class TestBook extends CIUnitTestCase
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

    //Unit test untuk mengambil semua data book
    public function testGetAllBook()
    {
        $result = $this->call('get', 'book');
        
        $result->assertStatus(200);
    }

    //Unit test untuk mengambil data book berdasarkan id tertentu
    public function testGetbookByID()
    {
        $result = $this->call('get', 'book/1');
        
        $result->assertStatus(200);
    }

    //Unit test untuk menambah data baru book
    public function testCreateBook()
    {
        $data = [
            'title' => 'Development',
            'description'  => 'Tes BE',
            'publish_date' => '2024-09-25',
            'author_id' => '3'
        ];

        $result = $this->call('post', 'book', $data);
        
        $result->assertStatus(201);

    }

    //Unit test untuk mengubah data book berdasarkan id
    public function testUpdateBook()
    {
        $data = [
            'title' => 'Development 2',
            'description'  => 'Tes BE 2',
            'publish_date' => '2024-09-25',
            'author_id' => '4'
        ];

        $result = $this->call('put', 'book/3', $data);
        
        $result->assertStatus(201);

    }

    //Unit test untuk menghapus data book berdasarkan id
    public function testDeleteBook()
    {

        $result = $this->call('delete', 'book/1');
        
        $result->assertStatus(200);

    }
}