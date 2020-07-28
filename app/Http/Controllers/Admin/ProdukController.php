<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
use App\Models\Products;
use Illuminate\Support\Arr;

/**
 * Class ProdukController
 * @package App\Http\Controllers\Admin
 */
class ProdukController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['produk'] = Products::all();

        return view('admin.produk.produk')->with($data);
    }

    /**
     * @return \Illuminate\Http\
     * RedirectResponse
     */
    public function addForm()
    {
        $image = $this->generateImageName('gambar');
        $data  = [
            'nama'      => $this->postField('nama'),
            'harga'     => $this->postField('harga'),
            'deskripsi' => $this->postField('deskripsi'),
            'url'       => $image,
        ];
        $this->uploadImage('gambar', $image, 'image');

        $this->insert(Products::class, $data);

        return redirect()->back()->with(['success' => 'success']);
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function editForm($id)
    {
        $data['produk'] = Products::findOrFail($id)->first();
//        dump($data);die();
        if ($this->request->isMethod('POST')) {
            $dat = [
                'nama'      => $this->postField('nama'),
                'harga'     => $this->postField('harga'),
                'deskripsi' => $this->postField('deskripsi'),
            ];
            if ($this->request->hasFile('gambar')) {
                $image = $this->generateImageName('gambar');
                $dat   = Arr::add($dat, 'url', $image);
                $this->uploadImage('gambar', $image, 'image');
            }
            $this->update(Products::class, $dat);

            return redirect()->back()->with(['success' => 'success']);
        }

        return view('admin.produk.editproduk')->with($data);
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function hapus($id)
    {
        try {
            Products::destroy($id);

            return $this->jsonResponse('success', 200);
        } catch (\Exception $er) {
            return $this->jsonResponse('error '.$er, 500);

        }
    }
}
