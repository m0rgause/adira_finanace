<?php

namespace App\Controllers;

use App\Models\Produk_model;

use CodeIgniter\API\ResponseTrait;

class Produk extends BaseController
{
    use ResponseTrait;

    protected $produk;
    protected $respond;
    public function __construct()
    {
        $this->produk = new Produk_model();
    }
    public function Index()
    {
        return $this->response->setJSON($this->produk->findAll());
    }
    public function getid($id)
    {
        return $this->response->setJSON($this->produk->find($id));
    }
    public function InsertData()
    {


        $namafoto = '';
        $file_foto = $this->request->getFile('gambar');
        if ($file_foto->getError() == 4) {
            $namafoto = 'defalut.jpg';
        } else {
            $namafoto = rand() . $file_foto->getName();
            $file_foto->move('produk_foto', $namafoto);
        }

        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'harga_produk' => $this->request->getPost('harga_produk'),
            'desk' => $this->request->getPost('desk'),
            'spek' => $this->request->getPost('spek'),
            'gambar' => $namafoto
        ];
        if ($this->produk->save($data)) {

            return $this->response->setStatusCode(200, 'data berhasil di tambahkan');
        } else {
            return $this->response->setStatusCode(500, 'data gagal di tambahkan');
        }
    }
    public function Update($id)
    {

        $test = $this->produk->first($id);
        $namafoto = '';
        $file_foto = $this->request->getFile('gambar');
        if ($file_foto->getError() == 4) {
            $namafoto = $test['gambar'];
        } else {
            $namafoto = rand() . $file_foto->getRandomName();
            $file_foto->move('produk_foto', $namafoto);
        }

        $data = [
            'id_produk' => $id,
            'nama_produk' => $this->request->getPost('nama_produk'),
            'harga_produk' => $this->request->getPost('harga_produk'),
            'desk' => $this->request->getPost('desk'),
            'spek' => $this->request->getPost('spek'),
            'gambar' => $namafoto
        ];
        if ($this->produk->save($data)) {
            return $this->response->setStatusCode(200);
        } else {
            return $this->response->setStatusCode(500);
        }
    }
    public function delete($id)
    {
        if ($this->produk->delete($id)) {
            return $this->response->setStatusCode(200);
        } else {
            return $this->response->setStatusCode(500);
        }
    }
}
